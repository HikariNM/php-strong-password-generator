<?php 

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">

<label for="psw">Choose password length</label>
<input type="number" name="psw">
<button type="submit">Generate</button>

</form>
    
<?php echo paswGen() ?>

</body>
</html>