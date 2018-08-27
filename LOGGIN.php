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


                $q="SELECT * FROM temb WHERE name='$name'AND password=$password";
                
                $db->exec($q);
                if (mysql_fetch_array($q))
                {
                    echo "great";
                }

                }
                catch(PDOException $e)
                {
                    echo "not exist";
                }

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--first mobile-->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            
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

        <button >Log In</button>
    </form>




</body>

</html>

