<?php
$dsn="mysql:host=localhost;dbname=chat";
$user='root';
$pass='';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try
{
$con=new PDO($dsn,$user,$pass,$option);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    echo "Error ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .message{
            width:200px;
            height:300px;
            overflow:scroll;
            margin:100px auto;
        }
         label{
            display:inline-block;
            width:150px;
            color:#080;
            
        }
        input{
            margin-bottom:10px;
        }

    </style>
</head>
<body>
    <form action="#" method="post">
        <label>name:</label><input type="text"><br>
        <label>message:</label><textarea name="" id=""></textarea><br><br>
        <button>Submit</button>
    </form>
    <div class='message'>
    </div>
        <p>
          <?php
            if(isset($_GET['do']))
            {
                $name=$_POST['name'];
                $mssg=$_POST['mssg'];
                $stmt=$con->prepare("INSERT INTO send(name,message) VALUES(:zname,:zmssg)");
                $stmt->execute(array(
                    'zname'=>$name,
                    'zmssg'=>$mssg
                ));
                
            }
            
          
            ?>
        </p>
    <script src="../jquery-3.2.1.min.js"></script>
    <script>
        $(function(){
            $("form").submit(function(){
                var info={
                    name:$("input:first").val(),
                    mssg:$("textarea").val()
                }
                $("div").load("two.php?do=Insert p",info,function(responseText){

                });
                
                return false;//like preventDefault
            });
            function loads()
            {
                $("div").load("info.php .contain");
            }
            var x=setInterval(loads,100);
        });
    
    </script>
</body>
</html>