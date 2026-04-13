<?php 
session_start();

function paswGen(): string{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZO123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $randPsw = '';
    if (isset($_GET['psw'])){
        $pswLeng = intval($_GET['psw']);
        for ($i = 0; $i < $pswLeng; $i++){
        $randPsw .= $chars[random_int(0, strlen($chars) - 1)];     
        };
        };
        return $randPsw;
};


?>