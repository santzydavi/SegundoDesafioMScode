<?php

require_once('../../models/Administrador.php');

$adminModel = new Administrador();


$arrayAdmin = [
    'nome' => 'Admin Master',
    'email' => 'davirocha2002.dr@gmail.com',
    'cpf'  => '16158605760',
    'senha' => md5('123456'),
    'admin_master' => 1
];

$adminModel->create($arrayAdmin);
