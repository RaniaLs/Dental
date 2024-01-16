<?php
require_once 'model/patient.php';

function indexAction()
{
    $patients = latest();
    require_once 'views/liste_patients.php';
}

function createAction()
{
    require_once 'views/create.php';
}

function storeAction()
{
    create();

    header('location:index.php?action=list');
}

function editAction()
{
    $id = $_GET['id'];
    $patients = view($id);
    require_once 'views/edit.php';
}

function updateAction()
{
    extract($_POST);
    edit($id, $nom, $prenom, $age, $login, $password);
    header('location:index.php?action=list');
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}

function destroyAction()
{
    destroy($_GET['id']);

    header('location:index.php?action=list');

}
