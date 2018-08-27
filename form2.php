<?php
//session_start()
try{
$con=new PDO('mysql:host=localhost;dbname=finalform','root','');

if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select=$con->prepare("SELECT * FROM form WHERE email='$email'AND password='$password'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $data=$select->fetch();
    if($data['email']==$email && $data['password']==$password)
    {
        echo "greate";
        /*
        $_SESSION['email']=$data['email']
        $_SESSION['password']=$data['password']
        header("location:profile.php")
        */
    }
    else{
        echo "invalid";
    }
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
    <button class="btn btn-primary" name="login">Log In</button>
</form>
</div>
</div>   
</div>

 <script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>