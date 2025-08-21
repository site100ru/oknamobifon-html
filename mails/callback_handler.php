<?php
session_start();

if ($_POST) {
    // Получаем данные
    $name = trim($_POST['form-name'] ?? '');
    $phone = trim($_POST['form-phone'] ?? '');
    $form_source = trim($_POST['form-source'] ?? 'unknown');
    $button_context = trim($_POST['button-context'] ?? '');

    // Проверяем обязательные поля
    if (empty($name) || empty($phone)) {
        $_SESSION['win'] = true;
        $_SESSION['message_text'] = '<div style="color: red;">Заполните все обязательные поля</div>';
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    // Определяем тип формы и создаем соответствующий заголовок
    $form_types = [
        'modal-callback' => 'Заявка на обратный звонок',
        'modal-calculate-cost' => 'Расчет стоимости',
        'modal-service-request' => 'Заявка на услугу',
        'modal-header-request' => 'Заявка из шапки сайта',
        'modal-mobile-request' => 'Заявка из мобильного меню',
        'modal-floating-menu' => 'Заявка из плавающего меню',
        'quiz' => 'Заявка из квиза-конфигуратора',
        'consultation' => 'Быстрая консультация',
        'footer-callback' => 'Заявка на звонок (футер)',
        'estimate-upload' => 'Пересчет сметы конкурентов',
        'unknown' => 'Заявка с сайта'
    ];

    // Расшифровка контекста кнопок
    $button_contexts = [
        // Расчет стоимости профилей
        'calculate-cost-rehau' => 'Расчет стоимости профиля Rehau',
        'calculate-cost-kbe' => 'Расчет стоимости профиля KBE',
        'calculate-cost-novotex' => 'Расчет стоимости профиля Novotex',
        'calculate-cost-provedal' => 'Расчет стоимости профиля Provedal',

        // Расчет стоимости стандартных окон
        'calculate-cost-2-wings' => 'Расчет стоимости окна с 2 створками',
        'calculate-cost-3-wings' => 'Расчет стоимости окна с 3 створками',
        'calculate-cost-balcony-block' => 'Расчет стоимости балконного блока',

        // Расчет стоимости балконов
        'calculate-cost-loggia-straight' => 'Расчет стоимости лоджии «Прямой»',
        'calculate-cost-balcony-corner' => 'Расчет стоимости балкона «Угловой»',
        'calculate-cost-balcony-u-shaped' => 'Расчет стоимости балкона «П-образный»',

        // Услуги
        'service-apartment-glazing' => 'Остекление квартиры',
        'service-balcony-glazing' => 'Остекление балконов и лоджий',
        'service-cottage-glazing' => 'Остекление коттеджей и домов',
        'service-veranda-glazing' => 'Остекление веранд и террас',
        'service-gazebo-glazing' => 'Остекление беседок',
        'service-facade-glazing' => 'Фасадное остекление',

        // Шапка и меню
        'header-order-call' => 'Заказать звонок (шапка)',
        'header-call-measurer' => 'Вызвать замерщика (шапка)',
        'mobile-call-measurer' => 'Вызвать замерщика (мобильное меню)',
        'mobile-order-call' => 'Заказать звонок (мобильное меню)',

        // Другое
        'hero-section-request' => 'Заявка из главного экрана',
        'attach-estimate' => 'Прикрепить смету конкурентов',
        'recalculate-estimate' => 'Пересчет сметы конкурентов',
        'quick-consultation' => 'Быстрая консультация',
        'footer-we-can-call' => 'Мы можем вам позвонить (футер)',
        'quiz-configurator' => 'Конфигуратор окон',

        // Плавающее меню
        'floating-menu-callback-form' => 'Форма обратного звонка (плавающее меню)',
        'floating-menu-direct-call' => 'Прямой звонок (плавающее меню)',
        'floating-menu-whatsapp' => 'WhatsApp (плавающее меню)',
        'floating-menu-telegram' => 'Telegram (плавающее меню)'
    ];

    $form_name = $form_types[$form_source] ?? $form_types['unknown'];
    $button_description = $button_contexts[$button_context] ?? $button_context;

    // Создаем письмо
    $subject = "$form_name - " . $_SERVER['HTTP_HOST'];
    $message = "=== $form_name ===\n\n";
    $message .= "Имя: $name\n";
    $message .= "Телефон: $phone\n";
    $message .= "Источник формы: $form_source\n";

    if (!empty($button_context)) {
        $message .= "Действие клиента: $button_description\n";
    }

    $message .= "Время: " . date('d.m.Y H:i:s') . "\n";

    // Проверяем квиз (только для формы квиза)
    if ($form_source === 'quiz') {
        $quiz_fields = [];
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'form-answer-') === 0 && !empty($value)) {
                $quiz_fields[$key] = $value;
            }
        }

        if (!empty($quiz_fields)) {
            $message .= "\n=== РЕЗУЛЬТАТЫ КВИЗА ===\n";
            $quiz_labels = [
                'form-answer-1' => 'Тип окна',
                'form-answer-2' => 'Тип створок',
                'form-answer-3-1' => 'Ширина (мм)',
                'form-answer-3-2' => 'Высота (мм)',
                'form-answer-3-3' => 'Ширина первой боковой створки (мм)',
                'form-answer-3-4' => 'Ширина второй боковой створки (мм)',
                'form-answer-4' => 'Тип остекления',
                'form-answer-5' => 'Цвет изделий',
                'form-answer-6-1' => 'Демонтаж старой конструкции',
                'form-answer-6-2' => 'Монтаж изделий',
                'form-answer-6-3' => 'Подоконник',
                'form-answer-6-4' => 'Теплые откосы',
                'form-answer-6-5' => 'Отлив'
            ];

            foreach ($quiz_fields as $key => $value) {
                $label = $quiz_labels[$key] ?? $key;
                $message .= "$label: $value\n";
            }
        }
    }

    // Email настройки
    $to = "sidorov-vv3@mail.ru, vasilyev-r@mail.ru";
    $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Проверяем файлы
    $has_files = isset($_FILES['file']) && !empty($_FILES['file']['name'][0]);

    if ($has_files) {
        $message .= "\n=== ПРИКРЕПЛЕННЫЕ ФАЙЛЫ ===\n";
        $total_size = 0;
        foreach ($_FILES['file']['name'] as $key => $filename) {
            if (!empty($filename) && $_FILES['file']['error'][$key] === UPLOAD_ERR_OK) {
                $filesize = $_FILES['file']['size'][$key];
                $total_size += $filesize;
                $message .= "Файл: $filename (" . formatBytes($filesize) . ")\n";
            }
        }
        $message .= "Общий размер файлов: " . formatBytes($total_size) . "\n";
    }

    if ($has_files) {
        $sent = send_with_files($to, $subject, $message, $_FILES['file']);
    } else {
        $sent = mail($to, $subject, $message, $headers);
    }

    // Результат
    if ($sent) {
        $_SESSION['win'] = true;
        $_SESSION['message_text'] = 'Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.';

        // Логирование для аналитики
        error_log("Form submitted: $form_source | $button_context | $name | $phone | Files: " . ($has_files ? 'Yes' : 'No'));
    } else {
        $_SESSION['win'] = false;
        $_SESSION['message_text'] = 'Ошибка отправки. Попробуйте позже или позвоните нам.';
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

// Функция для форматирования размера файла
function formatBytes($size, $precision = 2)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    for ($i = 0; $size > 1024 && $i < count($units) - 1; $i++) {
        $size /= 1024;
    }

    return round($size, $precision) . ' ' . $units[$i];
}

// Функция отправки с файлами
function send_with_files($to, $subject, $message, $files)
{
    $boundary = md5(uniqid());

    $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
    $body .= $message . "\r\n\r\n";

    // Добавляем файлы
    foreach ($files['name'] as $key => $filename) {
        if ($files['error'][$key] === UPLOAD_ERR_OK && $files['size'][$key] < 10 * 1024 * 1024) {
            $file_content = file_get_contents($files['tmp_name'][$key]);
            $encoded_content = chunk_split(base64_encode($file_content));

            // Определяем MIME тип
            $mime_type = mime_content_type($files['tmp_name'][$key]) ?: 'application/octet-stream';

            $body .= "--$boundary\r\n";
            $body .= "Content-Type: $mime_type; name=\"$filename\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n\r\n";
            $body .= $encoded_content . "\r\n";
        }
    }

    $body .= "--$boundary--";

    return mail($to, $subject, $body, $headers);
}
?>