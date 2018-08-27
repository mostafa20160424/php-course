<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--first mobile-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/boost-copy.css">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            background-image: url('images/lala.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        form {
            width: 720px;
            margin: auto;
            margin-top: 40px;
            background-color: rgba(0, 0, 0, 0.32);
            padding: 20px;
            border: 1px solid #222;
            border-radius: 10px;
        }
        
        input[type='text'],
        input[type='password'],
        input[type='email'],
        .ss {
            background-color: rgba(39, 37, 37, 0.7);
            color: white;
            border: none;
        }
        
        .progress-bar {
            text-align: left;
            padding-left: 10px;
        }
        
        .progress {
            margin-top: 10px;
            height: 36px;
        }
        
        .progress .progress-bar {
            line-height: 36px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
            text-indent: 10px;
        }
        #mostafa
        {
            margin-top: 500px;
           
        }

    </style>


 
</head>

<body>
    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="write-your-name" required name="text">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="write-your-password" required name="password" id="a">
        </div>
       <div class="form-group">
            <input type="password" class="form-control" placeholder="rwrite-your-password" required name="password2" id="b">
        </div>

        <button class="btn btn-primary btn-block" onclick="kok()">Change</button>
    </form>



<script src="bootstrap-3.3.7-dist/js/respond.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/html5shiv.min.js"></script>    
<script type="text/javascript">
var x=document.getElementByid('a');
var y=document.getElementByid('b');
var z=document.getElementByName('submit');
    function kok() {
        if (b.value==a.value&&a.value!='') {
            alert("the password is changed");


            <?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $name=$_POST['text'];
                $password=$_POST['password'];
            }
                $dsn='mysql:host=localhost;dbname=form2';
                $user='root';
                $pass='';
                try{
                $db=new PDO($dsn,$user,$pass);

                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $q="UPDATE temb SET password=$password WHERE name='$name'";

                $db->exec($q);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage()."the name is not rigister in the site";
                }

            ?>

        }
        else if(b.value!=a.value)
        {
            alert("please sure password are the same");
        }

    }

</script>
</body>

</html>