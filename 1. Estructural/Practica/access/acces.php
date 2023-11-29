<?php

    $fileJson = '../src/users.json';
    $dataUsers = file_get_contents($fileJson); // sgtring
    $dataUsers = json_decode($dataUsers, true);

    $email = $_POST['emailAcces'];
    $password = $_POST['passwordAcces'];

    foreach ($dataUsers as $value) {
        // Validamos si existe
        if($email == $value['email'] && $password == $value['password']){
            session_start();

            $_SESSION['fullName'] = $value['name']." ".$value['lastName'];
            $_SESSION['name_user'] = $value['name'];
            $_SESSION['lastname_user'] = $value['lastName'];
            $_SESSION['email_user'] = $value['email'];
            $_SESSION['status_user'] = $value['status'];
            $_SESSION['id_user'] = $value['id'];
            header("Location: ../views/index.php");
        }else{
            header("Location: ../index.php?response=false");
        }
    }


