<?php
include("app/database/db.php");

$isSummit = false;
$errMsg = '';

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['user_name'];
    $_SESSION['admin'] = $user['admin'];
    header('location: ' . BASE_URL);
}

// registration form validation 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 2){
        $errMsg = "Логин должен быть более 2-х символов";
    }elseif ($passF !== $passS) {
        $errMsg = "Пароли в обеих полях должны соответствовать!";
    }else{
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'user_name' => $login,
            'email' => $email,
            'password' => $pass
        ];
        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id] );

        userAuth($user);            
    }
}else{
    $login = '';
    $email = '';
}

// authorization form validation 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if ($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);  
        }else{
            $errMsg = "Данные введены неправильно";
        }
    }
}else{
    $email = '';
}



?>



