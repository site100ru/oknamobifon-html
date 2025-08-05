class Collapse {
  constructor(element, config = {}) {
    this._element = element;
    this._config = { ...Collapse.Default, ...config };
    this._isTransitioning = false;
    this._triggerArray = [];

    const triggers = document.querySelectorAll(`[data-bs-toggle="collapse"][data-bs-target="#${element.id}"], [data-bs-toggle="collapse"][href="#${element.id}"]`);

    for (let trigger of triggers) {
      this._triggerArray.push(trigger);
      trigger.addEventListener('click', (event) => {
        event.preventDefault();
        this.toggle();
      });
    }

    this._addAriaAndCollapsedClass();
  }

  static get Default() {
    return {
      parent: null,
      toggle: true
    };
  }

  toggle() {
    if (this._element.classList.contains('show')) {
      this.hide();
    } else {
      this.show();
    }
  }

  show() {
    if (this._isTransitioning || this._element.classList.contains('show')) {
      return;
    }

    let activeElements = [];

    if (this._config.parent) {
      const parent = document.querySelector(this._config.parent);
      if (parent) {
        activeElements = parent.querySelectorAll('.accordion-collapse.show, .accordion-collapse.collapsing');
      }
    }

    // Закрываем другие элементы в аккордеоне
    for (let activeElement of activeElements) {
      if (activeElement !== this._element) {
        const instance = activeElement._collapse;
        if (instance) {
          instance.hide();
        }
      }
    }

    this._element.style.height = '0px';
    this._element.classList.add('collapsing');
    this._element.classList.remove('collapse');

    this._isTransitioning = true;

    const complete = () => {
      this._element.classList.remove('collapsing');
      this._element.classList.add('collapse', 'show');
      this._element.style.height = '';
      this._isTransitioning = false;
      this._addAriaAndCollapsedClass();
    };

    this._element.style.height = `${this._element.scrollHeight}px`;

    setTimeout(complete, 350);
  }

  hide() {
    if (this._isTransitioning || !this._element.classList.contains('show')) {
      return;
    }

    this._element.style.height = `${this._element.scrollHeight}px`;
    this._element.offsetHeight; // reflow

    this._element.classList.add('collapsing');
    this._element.classList.remove('collapse', 'show');

    this._isTransitioning = true;

    const complete = () => {
      this._element.classList.remove('collapsing');
      this._element.classList.add('collapse');
      this._element.style.height = '';
      this._isTransitioning = false;
      this._addAriaAndCollapsedClass();
    };

    this._element.style.height = '0px';

    setTimeout(complete, 350);
  }

  _addAriaAndCollapsedClass() {
    const isOpen = this._element.classList.contains('show');

    for (let trigger of this._triggerArray) {
      trigger.setAttribute('aria-expanded', isOpen);
      if (isOpen) {
        trigger.classList.remove('collapsed');
      } else {
        trigger.classList.add('collapsed');
      }
    }
  }

  static getInstance(element) {
    return element._collapse || null;
  }

  static getOrCreateInstance(element, config = {}) {
    return this.getInstance(element) || new this(element, config);
  }
}

// Автоинициализация
document.addEventListener('DOMContentLoaded', function () {
  const collapseElements = document.querySelectorAll('.collapse');

  for (let element of collapseElements) {
    const parent = element.getAttribute('data-bs-parent');
    const config = parent ? { parent } : {};
    const instance = new Collapse(element, config);
    element._collapse = instance;
  }
});

// Глобальный доступ
window.bootstrap = { Collapse };