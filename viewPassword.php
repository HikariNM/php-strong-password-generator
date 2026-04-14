<?php 
session_start();
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
<div class="card shadow p-4 text-center" >
    <h1 class="card-title mb-4">This is your password</h1>

        <p><?php echo htmlspecialchars($_SESSION['password']) ?></p>

</div>
    
</body>
</html>