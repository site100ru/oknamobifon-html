<?php
session_start();

if ($_POST) {
    // Получаем данные
    $name = trim($_POST['form-name'] ?? '');
    $phone = trim($_POST['form-phone'] ?? '');

    // Проверяем обязательные поля
    if (empty($name) || empty($phone)) {
        $_SESSION['win'] = true;
        $_SESSION['recaptcha'] = '<div style="color: red;">Заполните все обязательные поля</div>';
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    // Создаем письмо
    $subject = "Новая заявка с сайта " . $_SERVER['HTTP_HOST'];
    $message = "Имя: $name\n";
    $message .= "Телефон: $phone\n";
    $message .= "Время: " . date('d.m.Y H:i:s') . "\n";

    // Проверяем квиз (скрытые поля)
    $quiz_fields = [];
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'form-answer-') === 0 && !empty($value)) {
            $quiz_fields[$key] = $value;
        }
    }

    if (!empty($quiz_fields)) {
        $message .= "\n=== РЕЗУЛЬТАТЫ КВИЗА ===\n";
        foreach ($quiz_fields as $key => $value) {
            $message .= $key . ": " . $value . "\n";
        }
    }

    // Email настройки
    $to = "sidorov-vv3@mail.ru";
    $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Проверяем файлы
    $has_files = isset($_FILES['file']) && !empty($_FILES['file']['name'][0]);

    if ($has_files) {
        $sent = send_with_files($to, $subject, $message, $_FILES['file']);
    } else {
        $sent = mail($to, $subject, $message, $headers);
    }

    // Результат
    if ($sent) {
        $_SESSION['win'] = true;
        $_SESSION['message_text'] = 'Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.';
    } else {
        $_SESSION['win'] = false;
        $_SESSION['message_text'] = 'Ошибка отправки. Попробуйте позже или позвоните нам.';
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
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

    foreach ($files['name'] as $key => $filename) {
        if ($files['error'][$key] === UPLOAD_ERR_OK && $files['size'][$key] < 10 * 1024 * 1024) {
            $file_content = file_get_contents($files['tmp_name'][$key]);
            $encoded_content = chunk_split(base64_encode($file_content));

            $body .= "--$boundary\r\n";
            $body .= "Content-Type: application/octet-stream; name=\"$filename\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n\r\n";
            $body .= $encoded_content . "\r\n";
        }
    }

    $body .= "--$boundary--";

    return mail($to, $subject, $body, $headers);
}
?>