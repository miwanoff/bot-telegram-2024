<?php
include_once 'token.php';

if (isset($_POST['submit'])) {
    $apiToken = TOKEN;
    $data = [
        'chat_id' => CHANNEL_ID,
        'text' => $_POST['message'],
    ];

    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data)); // Функція http_build_query() генерує рядок запиту в URL-коді з наданого масиву
}