<?php 
session_start();

// function paswGen(): string{
//     $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZO123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
//     $randPsw = '';
//     if (isset($_GET['psw'])){
//         $pswLeng = intval($_GET['psw']);
//         for ($i = 0; $i < $pswLeng; $i++){
//         $randPsw .= $chars[random_int(0, strlen($chars) - 1)];     
//         };
//         };
//         return $randPsw;
// };

function paswGen(): string{
    $chars= 'abcdefghijklmnopqrstuvwxyz';
    $cptChar ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numb = '0123456789';
    $symb = '!@#$%^*()_[]{}|;:,.<>?';
    $randPsw = '';

    if(isset($_GET['capital'])){
        $chars .= $cptChar;
    }
    if(isset($_GET['numbers'])){
        $chars .= $numb;
    } 
    if(isset($_GET['symbols'])){
        $chars .= $symb;
    } 

    if (isset($_GET['psw'])){
        $pswLeng = intval($_GET['psw']);
        for ($i = 0; $i < $pswLeng; $i++){
        $randPsw .= $chars[random_int(0, strlen($chars) - 1)];     
        };
        };
        return $randPsw;
};

?>