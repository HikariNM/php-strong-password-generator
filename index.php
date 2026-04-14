<?php 

include_once './functions.php';

$password = paswGen();
if (isset($_GET['psw'])){
    $_SESSION['password'] = $password;
    header('Location: ./viewPassword.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
<div class="d-flex flex-column align-items-center gap-3">
    
    <form action="" method="get">
        <div class="d-flex align-items-center gap-2 mb-3">
            <h3 class="mb-0 pe-3">Password Generator</h3>
                <!-- <label for="psw" class="form-label">Choose password length</label> -->        
                <input type="number" name="psw" class="form-control" placeholder="Choose password length" style="width: 200px">
                <button type="submit" class="btn btn-primary">Generate</button>
        
        </div>
        <div class="d-flex gap-4 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="numbers" name="numbers">
                <label class="form-check-label" for="checkDefault">
                    Numbers
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="symbols" name="symbols">
                <label class="form-check-label" for="checkDefault">
                    Symbols
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="capital" name="capital">
                <label class="form-check-label" for="checkDefault">
                    Capital Letters
                </label>
            </div>
        </div>
    </form>
</div>       

</body>
</html>