<?php
try{
$con=new PDO('mysql:host=localhost;dbname=finalform','root','');

if (isset($_POST['signin'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert=$con->prepare("INSERT INTO form(email,password) VALUES('$email','$password')");
    $insert->execute();
}

}

catch(PDOException $e)
{
    echo 'error'.$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--first mobile-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/boost-copy.css">

	<meta charset="utf-8">
	<title>form</title>
<script src="bootstrap-3.3.7-distjs/html5shiv.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/respond.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6">
 <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="margin-top: 40px">
    <div class="form-groub">
        <input type="email" name="email" class="form-control">
    </div>
        <div class="form-groub">
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary" name="signin">Sign In</button>
</form>
</div>
</div>   
</div>

 <script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>