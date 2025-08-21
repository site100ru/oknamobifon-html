function nextQuostion(curQuo) {
  let currentQuostion = curQuo; // Текущий вопрос

  switch (currentQuostion) {

    /* WINDOWS AND BALKONY PAGE */
    /* Question 1 */
    case 'question-1':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-1-1').checked == false) && (document.getElementById('answer-1-2').checked == false) && (document.getElementById('answer-1-3').checked == false) && (document.getElementById('answer-1-4').checked == false) && (document.getElementById('answer-1-5').checked == false) && (document.getElementById('answer-1-6').checked == false)) {
        alert('Для продолжения выберите какое окно Вам нужно.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_1 = document.querySelector('input[name="question-1"]:checked').value;

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-1').value = answer_1;

      // Скрываем блок текущего вопроса
      document.getElementById('question-1').style.display = 'none';

      /* В зависимости от ответа на текущий вопрос открываем блок следующего вопроса */
      switch (answer_1) {
        case 'Одностворчатое':
          document.getElementById('question-2-1').style.display = 'block';
          break;

        case 'Двухстворчатое':
          document.getElementById('question-2-2').style.display = 'block';
          break;

        case 'Трехстворчатое':
          document.getElementById('question-2-3').style.display = 'block';
          break;

        case 'Балконный блок':
          document.getElementById('question-2-4').style.display = 'block';
          break;

        case 'Окна на балкон':
          document.getElementById('question-2-5').style.display = 'block';
          break;

        case 'Портальное остекление':
          document.getElementById('question-2-6').style.display = 'block';
          break;
      }
      break;
    /* END QUESTION 1 */


    /* Question 2-1 */
    case 'question-2-1':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-2-1-1').checked == false) && (document.getElementById('answer-2-1-2').checked == false) && (document.getElementById('answer-2-1-3').checked == false)) {
        alert('Для продолжения выберите какие створки окна Вам нужны.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_2 = document.querySelector('input[name="question-2-1"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-2').value = answer_2;

      // Скрываем блок текущего вопроса
      document.getElementById('question-2-1').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('question-3-1').style.display = 'block';
      break;

    /* Question 2-2 */
    case 'question-2-2':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-2-2-1').checked == false) && (document.getElementById('answer-2-2-2').checked == false) && (document.getElementById('answer-2-2-3').checked == false)) {
        alert('Для продолжения выберите какие створки окна Вам нужны.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_2 = document.querySelector('input[name="question-2-2"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-2').value = answer_2;

      // Скрываем блок текущего вопроса
      document.getElementById('question-2-2').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('question-3-1').style.display = 'block';
      break;

    /* Question 2-3 */
    case 'question-2-3':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-2-3-1').checked == false) && (document.getElementById('answer-2-3-2').checked == false)) {
        alert('Для продолжения выберите какие створки окна Вам нужны.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_2 = document.querySelector('input[name="question-2-3"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-2').value = answer_2;

      // Скрываем блок текущего вопроса
      document.getElementById('question-2-3').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('question-3-1').style.display = 'block';
      break;

    /* Question 2-4 */
    case 'question-2-4':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-2-4-1').checked == false) && (document.getElementById('answer-2-4-2').checked == false) && (document.getElementById('answer-2-4-3').checked == false)) {
        alert('Для продолжения выберите какие створки окна Вам нужны.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_2 = document.querySelector('input[name="question-2-4"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-2').value = answer_2;

      // Скрываем блок текущего вопроса
      document.getElementById('question-2-4').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('question-3-1').style.display = 'block';
      break;

    /* Question 2-5 */
    case 'question-2-5':
      if (typeof answer_1 == "undefined") { answer_1 = null; }

      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-2-5-1').checked == false) && (document.getElementById('answer-2-5-2').checked == false) && (document.getElementById('answer-2-5-3').checked == false)) {
        alert('Для продолжения выберите форму балкона.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_2 = document.querySelector('input[name="question-2-5"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-2').value = answer_2;

      // Скрываем блок текущего вопроса
      document.getElementById('question-2-5').style.display = 'none';

      /* В зависимости от ответа на текущий вопрос открываем блок следующего вопроса */
      switch (answer_2) {
        case 'Прямой балкон':
          document.getElementById('question-3-1').style.display = 'block';
          break;

        case 'Угловой балкон':
          document.getElementById('question-3-2').style.display = 'block';
          break;

        case 'П-образный балкон':
          document.getElementById('question-3-3').style.display = 'block';
          break;
      }
      break;

    /* Question 2-6 */
    case 'question-2-6':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('answer-2-6-1').checked == false) && (document.getElementById('answer-2-6-2').checked == false)) {
        alert('Для продолжения выберите какое портальное остекление Вы хотите.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_2 = document.querySelector('input[name="question-2-6"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-2').value = answer_2;

      // Скрываем блок текущего вопроса
      document.getElementById('question-2-6').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('question-3-1').style.display = 'block';
      break;


    case 'question-3-1':
      /* Проверяем что все необходимые размеры указаны */
      if ((document.getElementById('answer-3-1-1').value == '') || (document.getElementById('answer-3-1-2').value == '')) {
        alert('Для продолжения укажите все необходимые размеры');
        return false;
      }

      // Получаем и записываем в переменную второй ответ
      answer_3_1 = document.getElementById('answer-3-1-1').value;
      answer_3_2 = document.getElementById('answer-3-1-2').value;
      answer_3_3 = '';
      answer_3_4 = '';

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-3-1').value = answer_3_1;
      document.getElementById('form-answer-3-2').value = answer_3_2;

      // Скрываем блок текущего вопроса и открываем блок следующего
      document.getElementById('question-3-1').style.display = 'none';
      document.getElementById('question-4').style.display = 'block';
      break;

    case 'question-3-2':
      /* Проверяем что все необходимые размеры указаны */
      if ((document.getElementById('answer-3-2-1').value == '') || (document.getElementById('answer-3-2-2').value == '') || (document.getElementById('answer-3-2-3').value == '')) {
        alert('Для продолжения укажите все необходимые размеры');
        return false;
      }

      // Получаем и записываем в переменную второй ответ
      answer_3_1 = document.getElementById('answer-3-2-1').value;
      answer_3_2 = document.getElementById('answer-3-2-2').value;
      answer_3_3 = document.getElementById('answer-3-2-3').value;
      answer_3_4 = '';

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-3-1').value = answer_3_1;
      document.getElementById('form-answer-3-2').value = answer_3_2;
      document.getElementById('form-answer-3-3').value = answer_3_3;

      // Скрываем блок текущего вопроса и открываем блок следующего
      document.getElementById('question-3-2').style.display = 'none';
      document.getElementById('question-4').style.display = 'block';
      break;

    case 'question-3-3':
      /* Проверяем что все необходимые размеры указаны */
      if ((document.getElementById('answer-3-3-1').value == '') || (document.getElementById('answer-3-3-2').value == '') || (document.getElementById('answer-3-3-3').value == '') || (document.getElementById('answer-3-3-4').value == '')) {
        alert('Для продолжения укажите все необходимые размеры');
        return false;
      }

      /* Получаем ответ и записываем в переменную */
      answer_3_1 = document.getElementById('answer-3-3-1').value;
      answer_3_2 = document.getElementById('answer-3-3-2').value;
      answer_3_3 = document.getElementById('answer-3-3-3').value;
      answer_3_4 = document.getElementById('answer-3-3-4').value;

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-3-1').value = answer_3_1;
      document.getElementById('form-answer-3-2').value = answer_3_2;
      document.getElementById('form-answer-3-3').value = answer_3_3;
      document.getElementById('form-answer-3-4').value = answer_3_4;

      // Скрываем блок текущего вопроса и открываем блок следующего
      document.getElementById('question-3-3').style.display = 'none';
      document.getElementById('question-4').style.display = 'block';
      break;

    /* Question 4 */
    case 'question-4':
      /* Проверяем что все необходимые размеры указаны */
      if ((document.getElementById('answer-4-1').checked == false) && (document.getElementById('answer-4-2').checked == false) && (document.getElementById('answer-4-3').checked == false)) {
        alert('Для продолжения укажите вариант остекления');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      answer_4 = document.querySelector('input[name="question-4"]:checked').value;

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-4').value = answer_4;

      // Скрываем блок текущего вопроса и открываем блок следующего
      document.getElementById('question-4').style.display = 'none';
      document.getElementById('question-5').style.display = 'block';
      break;

    /* Question 5 */
    case 'question-5':
      /* Проверяем что все необходимые размеры указаны */
      if ((document.getElementById('answer-5-1').checked == false) && (document.getElementById('answer-5-2').checked == false) && (document.getElementById('answer-5-3').checked == false)) {
        alert('Для продолжения выберите цвет изделий?');
        return false;
      }

      /* Записываем ответ на текущий вопрос в переменную */
      answer_5 = document.querySelector('input[name="question-5"]:checked').value;

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-5').value = answer_5;

      // Скрываем блок текущего вопроса и открываем блок следующего
      document.getElementById('question-5').style.display = 'none';
      document.getElementById('question-6').style.display = 'block';
      break;

    /* Question 6 */
    case 'question-6':
      /* Проверяем что все необходимые размеры указаны
      if ( ( document.getElementById( 'answer-4-1' ).checked == false ) && ( document.getElementById( 'answer-4-2' ).checked == false ) && ( document.getElementById( 'answer-4-3' ).checked == false ) ) {
        alert( 'Для продолжения укажите вариант остекления' );
        return false;
      }  */

      /* Записываем ответ на текущий вопрос в переменную */
      if (document.getElementById('answer-6-1').checked == true) {
        answer_6_1 = document.getElementById('answer-6-1').value;
      } else { answer_6_1 = null; }

      if (document.getElementById('answer-6-2').checked == true) {
        answer_6_2 = document.getElementById('answer-6-2').value;
      } else { answer_6_2 = null; }

      if (document.getElementById('answer-6-3').checked == true) {
        answer_6_3 = document.getElementById('answer-6-3').value;
      } else { answer_6_3 = null; }

      if (document.getElementById('answer-6-4').checked == true) {
        answer_6_4 = document.getElementById('answer-6-4').value;
      } else { answer_6_4 = null; }

      if (document.getElementById('answer-6-5').checked == true) {
        answer_6_5 = document.getElementById('answer-6-5').value;
      } else { answer_6_5 = null; }

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('form-answer-6-1').value = answer_6_1;
      document.getElementById('form-answer-6-2').value = answer_6_2;
      document.getElementById('form-answer-6-3').value = answer_6_3;
      document.getElementById('form-answer-6-4').value = answer_6_4;
      document.getElementById('form-answer-6-5').value = answer_6_5;

      // Скрываем блок текущего вопроса и открываем блок следующего
      document.getElementById('question-6').style.display = 'none';
      document.getElementById('question-7').style.display = 'block';
      break;

    /* Question 7 */
    case 'question-7':
      /* Проверяем что все необходимые размеры указаны */
      if (document.getElementById('answer-7-2').value == '') {
        alert('Для продолжения необходимо указать Ваш номер телефона.');
        return false;
      }

      /* Записываем ответ на текущий вопрос в переменную */
      if (document.getElementById('answer-7-1').value != '') {
        answer_7_1 = document.getElementById('answer-7-1').value;
      } else { answer_7_1 = '' }

      if (document.getElementById('answer-7-2').value != '') {
        answer_7_2 = document.getElementById('answer-7-2').value;
      } else { answer_7_2 = '' }

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      //document.getElementById( 'form-answer-5' ).value = answer_5;

      // Скрываем блок текущего вопроса и открываем блок следующего
      //document.getElementById( 'question-5' ).style.display = 'none';
      //document.getElementById( 'question-6' ).style.display = 'block';

      // Выводим ответы в модальном окне
      //check();
      break;
    /* END WINDOWS AND BALKONY PAGE */


    /* FINISHING PAGE */
    /* Finishing question 1 */
    case 'finishingQuestion_1':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('finishingAnswer_1_1').checked == false) && (document.getElementById('finishingAnswer_1_2').checked == false) && (document.getElementById('finishingAnswer_1_3').checked == false)) {
        alert('Для продолжения выберите форму балкона');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      finishingAnswer_1 = document.querySelector('input[name="finishingQuestion_1"]:checked').value;

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('formFinishingAnswer_1').value = finishingAnswer_1;

      // Скрываем блок текущего вопроса
      document.getElementById('finishingQuestion_1').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('finishingQuestion_2').style.display = 'block';
      break;
    /* END Finishing question 1 */

    /* Finishing question 2 */
    case 'finishingQuestion_2':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('finishingAnswer_2_1').value == false) || (document.getElementById('finishingAnswer_2_2').value == false) || (document.getElementById('finishingAnswer_2_3').value == false)) {
        alert('Для продолжения укажите все размеры балкона');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      finishingAnswer_2_1 = document.getElementById('finishingAnswer_2_1').value;
      finishingAnswer_2_2 = document.getElementById('finishingAnswer_2_2').value;
      finishingAnswer_2_3 = document.getElementById('finishingAnswer_2_3').value;

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('formFinishingAnswer_2_1').value = finishingAnswer_2_1;
      document.getElementById('formFinishingAnswer_2_2').value = finishingAnswer_2_2;
      document.getElementById('formFinishingAnswer_2_3').value = finishingAnswer_2_3;

      // Скрываем блок текущего вопроса
      document.getElementById('finishingQuestion_2').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('finishingQuestion_3').style.display = 'block';
      break;
    /* END Finishing question 2 */

    /* Finishing question 3 */
    case 'finishingQuestion_3':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('finishingAnswer_3_1').checked == false) && (document.getElementById('finishingAnswer_3_2').checked == false) && (document.getElementById('finishingAnswer_3_3').checked == false) && (document.getElementById('finishingAnswer_3_4').checked == false) && (document.getElementById('finishingAnswer_3_5').checked == false)) {
        alert('Для продолжения выберите остекление балкона.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      finishingAnswer_3 = document.querySelector('input[name="finishingQuestion_3"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('formFinishingAnswer_3').value = finishingAnswer_3;

      // Скрываем блок текущего вопроса
      document.getElementById('finishingQuestion_3').style.display = 'none';

      /* В зависимости от ответа на текущий вопрос открываем блок следующего вопроса */
      if (finishingAnswer_3 == 'Остекление не нужно') {
        document.getElementById('finishingQuestion_5').style.display = 'block';
      } else {
        document.getElementById('finishingQuestion_4').style.display = 'block';
      }
      break;
    /* Finishing question 3 */

    /* Finishing question 4 */
    case 'finishingQuestion_4':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('finishingAnswer_4_1').checked == false) && (document.getElementById('finishingAnswer_4_2').checked == false) && (document.getElementById('finishingAnswer_4_3').checked == false)) {
        alert('Для продолжения выберите цвет остекления балкона.');
        return false;
      }

      // Записываем ответ на текущий вопрос в переменную
      finishingAnswer_4 = document.querySelector('input[name="finishingQuestion_4"]:checked').value;
      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('formFinishingAnswer_4').value = finishingAnswer_4;

      // Скрываем блок текущего вопроса
      document.getElementById('finishingQuestion_4').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('finishingQuestion_5').style.display = 'block';
      break;
    /* Finishing question 4 */

    /* Finishing question 5 */
    case 'finishingQuestion_5':
      /* Проверяем что выбран ответ на текущий вопрос */
      if ((document.getElementById('finishingAnswer_5_1').value == false) && (document.getElementById('finishingAnswer_5_2').value == false) && (document.getElementById('finishingAnswer_5_3').value == false) && (document.getElementById('finishingAnswer_5_4').checked == false) && (document.getElementById('finishingAnswer_5_5').checked == false) && (document.getElementById('finishingAnswer_5_6').checked == false)) {
        alert('Для продолжения выберите хотябы одну услугу по отделке балкона.');
        return false;
      }

      /* Записываем ответ на текущий вопрос в переменную */
      if (document.querySelector('select[name="finishingAnswer_5_1"]').value != null) {
        finishingAnswer_5_1 = document.querySelector('select[name="finishingAnswer_5_1"]').value;
      } else { finishingAnswer_5_1 = null; }

      if (document.querySelector('select[name="finishingAnswer_5_2"]').value != null) {
        finishingAnswer_5_2 = document.querySelector('select[name="finishingAnswer_5_2"]').value;
      } else { finishingAnswer_5_2 = null; }

      if (document.querySelector('select[name="finishingAnswer_5_3"]').value != null) {
        finishingAnswer_5_3 = document.querySelector('select[name="finishingAnswer_5_3"]').value;
      } else { finishingAnswer_5_3 = null; }

      if (document.getElementById('finishingAnswer_5_4').checked == true) {
        finishingAnswer_5_4 = document.getElementById('finishingAnswer_5_4').value;
      } else { finishingAnswer_5_4 = null; }

      if (document.getElementById('finishingAnswer_5_5').checked == true) {
        finishingAnswer_5_5 = document.getElementById('finishingAnswer_5_5').value;
      } else { finishingAnswer_5_5 = null; }

      if (document.getElementById('finishingAnswer_5_6').checked == true) {
        finishingAnswer_5_6 = document.getElementById('finishingAnswer_5_6').value;
      } else { finishingAnswer_5_6 = null; }

      // Добавляем ответ на текущий вопрос в input в форме обратной связи
      document.getElementById('formFinishingAnswer_5_1').value = finishingAnswer_5_1;
      document.getElementById('formFinishingAnswer_5_2').value = finishingAnswer_5_2;
      document.getElementById('formFinishingAnswer_5_3').value = finishingAnswer_5_3;
      document.getElementById('formFinishingAnswer_5_4').value = finishingAnswer_5_4;
      document.getElementById('formFinishingAnswer_5_5').value = finishingAnswer_5_5;
      document.getElementById('formFinishingAnswer_5_6').value = finishingAnswer_5_6;

      // Скрываем блок текущего вопроса
      document.getElementById('finishingQuestion_5').style.display = 'none';

      /* Открываем блок следующего вопроса */
      document.getElementById('finishingQuestion_6').style.display = 'block';
      break;
    /* Finishing question 5 */
    /* END FINISHING PAGE */

  } // End switch( currentQuostion )
} // End nextQuostion()


function previousQuostion(curQuo) {

  let currentQuostion = curQuo; // Текущий вопрос
  switch (currentQuostion) {

    /* 2-1 */
    case 'question-2-1': // Третий вопрос
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-2-1').style.display = 'none';
      document.getElementById('question-1').style.display = 'block';
      break; // Конец третьего вопроса

    /* 2-2 */
    case 'question-2-2': // Третий вопрос
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-2-2').style.display = 'none';
      document.getElementById('question-1').style.display = 'block';
      break; // Конец третьего вопроса

    /* 2-3 */
    case 'question-2-3': // Третий вопрос
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-2-3').style.display = 'none';
      document.getElementById('question-1').style.display = 'block';
      break; // Конец третьего вопроса

    /* Question 2-4 */
    case 'question-2-4':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-2-4').style.display = 'none';
      document.getElementById('question-1').style.display = 'block';
      break; // Конец третьего вопроса

    /* Question 2-5 */
    case 'question-2-5':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-2-5').style.display = 'none';
      document.getElementById('question-1').style.display = 'block';
      break;

    /* Question 2-6 */
    case 'question-2-6':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-2-6').style.display = 'none';
      document.getElementById('question-1').style.display = 'block';
      break;


    /* Question 3-1 */
    case 'question-3-1':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-3-1').style.display = 'none';

      /* В зависимости от предыдущего ответа открываем предыдущий вопрос */
      if (answer_1 == 'Одностворчатое') {
        document.getElementById('question-2-1').style.display = 'block';
      } else if (answer_1 == 'Двухстворчатое') {
        document.getElementById('question-2-2').style.display = 'block';
      } else if (answer_1 == 'Трехстворчатое') {
        document.getElementById('question-2-3').style.display = 'block';
      } else if (answer_1 == 'Балконный блок') {
        document.getElementById('question-2-4').style.display = 'block';
      } else if ((answer_1 == 'Окна на балкон') || (answer_1 == null)) {
        document.getElementById('question-2-5').style.display = 'block';
      } else if (answer_1 == 'Портальное остекление') {
        document.getElementById('question-2-6').style.display = 'block';
      }
      break;

    /* Question 3-2 */
    case 'question-3-2':
      // Скрываем блок текущего вопроса
      document.getElementById('question-3-2').style.display = 'none';
      /* В зависимости от предыдущего ответа открываем предыдущий вопрос */
      if (answer_1 == 'Одностворчатое') {
        document.getElementById('question-2-1').style.display = 'block';
      } else if (answer_1 == 'Двухстворчатое') {
        document.getElementById('question-2-2').style.display = 'block';
      } else if (answer_1 == 'Трехстворчатое') {
        document.getElementById('question-2-3').style.display = 'block';
      } else if (answer_1 == 'Балконный блок') {
        document.getElementById('question-2-4').style.display = 'block';
      } else if ((answer_1 == 'Окна на балкон') || (answer_1 == null)) {
        document.getElementById('question-2-5').style.display = 'block';
      } else if (answer_1 == 'Портальное остекление') {
        document.getElementById('question-2-6').style.display = 'block';
      }
      break;

    /* Question 3-3 */
    case 'question-3-3':
      // Скрываем блок текущего вопроса
      document.getElementById('question-3-3').style.display = 'none';
      /* В зависимости от предыдущего ответа открываем предыдущий вопрос */
      if (answer_1 == 'Одностворчатое') {
        document.getElementById('question-2-1').style.display = 'block';
      } else if (answer_1 == 'Двухстворчатое') {
        document.getElementById('question-2-2').style.display = 'block';
      } else if (answer_1 == 'Трехстворчатое') {
        document.getElementById('question-2-3').style.display = 'block';
      } else if (answer_1 == 'Балконный блок') {
        document.getElementById('question-2-4').style.display = 'block';
      } else if ((answer_1 == 'Окна на балкон') || (answer_1 == null)) {
        document.getElementById('question-2-5').style.display = 'block';
      } else if (answer_1 == 'Портальное остекление') {
        document.getElementById('question-2-6').style.display = 'block';
      }
      break;



    /* Question 4 */
    case 'question-4':
      // В зависимости от предыдущих ответов открываем предыдущий вопрос
      document.getElementById('question-4').style.display = 'none';

      /* В зависимости от предыдущего ответа открываем предыдущий вопрос */
      if ((answer_3_3 == '') && (answer_3_4 == '')) {
        document.getElementById('question-3-1').style.display = 'block';
      } else if (answer_3_4 == '') {
        document.getElementById('question-3-2').style.display = 'block';
      } else {
        document.getElementById('question-3-3').style.display = 'block';
      }
      break;

    /* Question 5 */
    case 'question-5':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-5').style.display = 'none';
      document.getElementById('question-4').style.display = 'block';
      break;

    /* Question 6 */
    case 'question-6':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-6').style.display = 'none';
      document.getElementById('question-5').style.display = 'block';
      break;

    /* Question 7 */
    case 'question-7':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('question-7').style.display = 'none';
      document.getElementById('question-6').style.display = 'block';
      break;


    /* FINISHING PAGE */
    /* Finishing question 2 */
    case 'finishingQuestion_2':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('finishingQuestion_2').style.display = 'none';
      document.getElementById('finishingQuestion_1').style.display = 'block';
      break;
    /* End finishing question 2 */

    /* Finishing question 3 */
    case 'finishingQuestion_3':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('finishingQuestion_3').style.display = 'none';
      document.getElementById('finishingQuestion_2').style.display = 'block';
      break;
    /* End finishing question 3 */

    /* Finishing question 4 */
    case 'finishingQuestion_4':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('finishingQuestion_4').style.display = 'none';
      document.getElementById('finishingQuestion_3').style.display = 'block';
      break;
    /* End finishing question 4 */

    /* Finishing question 5 */
    case 'finishingQuestion_5':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('finishingQuestion_5').style.display = 'none';

      /* В зависимости от предыдущего ответа открываем предыдущий вопрос */
      if (finishingAnswer_3 == 'Остекление не нужно') {
        document.getElementById('finishingQuestion_3').style.display = 'block';
      } else {
        document.getElementById('finishingQuestion_4').style.display = 'block';
      }
      break;
    /* End finishing question 5 */

    /* Finishing question 6 */
    case 'finishingQuestion_6':
      // Скрываем блок текущего вопроса и открываем блок предыдущего
      document.getElementById('finishingQuestion_6').style.display = 'none';
      document.getElementById('finishingQuestion_5').style.display = 'block';
      break;
  }
}

