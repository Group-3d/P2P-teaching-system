<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);

    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed'
    ]);
    exit;
}

// Basic Sanitization
$name = trim($_POST['name'] ?? '');
$password = trim($_POST['password'] ?? '');
$email = trim($_POST['email'] ?? '');
$confirm = trim($_POST['confirm'] ?? '');

if ($email == '' || $password == '') {
    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Username, Email and Password Required'
    ]);
    exit;
}


if ($confirm !==  $password) {
    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Password and Confirm-Password must be the same',
        // 'data' => $_POST
    ]);
    exit;
}



/** The Business Logic Here **/

echo json_encode([
    'success' => true,
    'message' => 'Register Successful'
]);