<?php

function database_connection()
{
    return new PDO('mysql:dbname=clinic;host=localhost', 'root', '');
}

function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM patient ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
}

function create()
{
    extract($_POST);
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO patient VALUES(null,?,?,?,?,?)");
    return $sqlState->execute([$username, $phone, $email, $password]);
}

function edit($id, $username, $phone, $email, $password)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE patient
                                    SET username = ? ,
                                        phone = ? ,  
                                        email = ? , 
                                        password = ?
                                    WHERE id = ?");
    return $sqlState->execute([$username, $phone, $email, $password, $id]);
}

function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM patient WHERE id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM patient WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);

}