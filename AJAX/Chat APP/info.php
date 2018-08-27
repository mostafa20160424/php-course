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
</head>
<body>
    <div class='contain'>
        <?php
            $stmt=$con->prepare("SELECT * FROM send ORDER BY id DESC ");
            $stmt->execute();
            $rows=$stmt->fetchAll();
            foreach($rows as $row)
            {
                echo "<h2>".$row['name']."</h2>";
                echo "<span>".$row['message']."</span>";
            }
        ?>
    </div>
</body>
</html>