<?php

include "../../app/database/db.php";

$errMsg = [];
$id = '';
$title = '';
$address = '';
$country ='';
$date = '';
$content = '';

$conferences = selectAll('conferences');
$conferencesAdm = selectAllWithUsers('conferences', 'users');

// Code for the record creation form
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_conference'])){
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $address = trim($_POST['address']);
    $country = trim($_POST['country']);
    $date = trim($_POST['date']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if($title === '' || $date === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }elseif (mb_strlen($title, 'UTF8') < 2){
        array_push($errMsg, "Название название конференции должно быть более 2-ми символов");
    }else{
        $conference = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'address' => $address,
            'country' => $country,
            'date' => $date,
            'status' => $publish,
        ];

        $conference = insert('conferences', $conference);
        $conference = selectOne('conferences', ['id' => $id] );
        header('location: ' . BASE_URL . 'admin/conferences/index.php');
    }
}else{
    $id = '';
    $title = '';
    $content = '';
    $publish = '';
}

// Update
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $conference = selectOne('conferences', ['id' => $_GET['id']]);

    $id =  $conference['id'];
    $title =  $conference['title'];
    $address =  $conference['address'];
    $country =  $conference['country'];
    $date =  $conference['date'];
    $content = $conference['content'];
    $publish = $conference['status'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_conference'])){
    $id =  $_POST['id'];
    $title = trim($_POST['title']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if($title === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }elseif (mb_strlen($title, 'UTF8') < 5){
        array_push($errMsg, "Название статьи должно быть более 5-ми символов");
    }else{
        $conference = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'address' => $address,
            'country' => $country,
            'status' => $publish
        ];

        $conference = update('conferences', $id, $conference);
        header('location: ' . BASE_URL . 'admin/conferences/index.php');
    }
}else{
    $title = '';
    $publish = isset($_POST['publish']) ? 1 : 0;
}

// Change status
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $publish = $_GET['publish'];

    $conferencesId = update('conferences', $id, ['status' => $publish]);

    header('location: ' . BASE_URL . 'admin/conferences/index.php');
    exit();
}

// Delete 
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('conferences', $id);
    header('location: ' . BASE_URL . 'admin/conferences/index.php');
}

?>

