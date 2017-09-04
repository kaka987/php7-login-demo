<?php
/**
 * Created by PhpStorm.
 * User: Young
 * Date: 2017/9/4
 * Time: 13:40
 */
namespace user\account;

$return = [
    'status' => 1,
    'msg' => '',
    'data' => []
];
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (empty($email) || empty($password)) {
    $return['status'] = 0;
    $return['msg'] = 'Input error';
    echo json_encode($return);
    exit(0);
}

if ($email == 'admin@test.com' && $password == '123456') {
    $return['msg'] = 'ok';
    echo json_encode($return);
}

$return['status'] = 0;
$return['msg'] = 'error';
echo json_encode($return);