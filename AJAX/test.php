<?php
$do='';
if(isset($_GET['do']))
{
    $do=$_GET['do'];
}
$dsn = 'mysql:host=localhost;dbname=shop';
$user = 'root';
$pass = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo 'Failed To Connect' . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class='container'>
    <form action="" method="post">
    <input type="text" name='name' class='form-control'>
    <input type="password" name='pass' class='form-control'>
    <input type="email" name='name' class='form-control'>
    <input type="text" name='pass' class='form-control'>
    <input type="submit" class='btn btn-primary' value="Submit">
    </form>
    </div>
<?php

?>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>

        $(function(){

            $(".btn").click(function(e){
                var info={
                name:$("input[type='text']:first").val(),
                password:$("input[type='password']").val(),
                email:$("input[type='email']:first").val(),
                fullname:$("input[type='text']:last").val()
            };
                e.preventDefault();
                alert("hello");
              
                $(".ss").load("test.php?do=Insert .p",info,function(responsText,Statues,xmlhttp){

                });
               
            });
        });
    </script>
<div class='p'>
<?php
if($do=='Insert')
{
    $query="INSERT INTO users(Username,Password,Email,Fullname) VALUES(:zname,:zpass,:zemail,:zfull)";
    $stmt=$con->prepare($query);
    $stmt->execute(array(
        'zname'=>$_POST['name'],
        'zpass'=>$_POST['password'],
        'zemail'=>$_POST['email'],
        'zfull'=>$_POST['fullname']
    ));
    echo "<div class='alert alert-success'>Success</div>";

}
    ?>
</div>

    <div class='ss'></div>
</body>
</html>