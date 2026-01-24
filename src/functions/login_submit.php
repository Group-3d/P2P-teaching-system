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
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($email == '' || $password == '') {
    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Email and Password Required'
    ]);
    exit;
}



/** The Business Logic Here **/

echo json_encode([
    'success' => true,
    'message' => 'Login Successful'
]);