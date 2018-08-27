<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>mostafa</title>    
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
    } 
    body{
        background-color: #222;
    }
    #a{
        width: 500px;
        height: 150px;
        margin: auto;
        background-color: white;
        margin-top: 40px;
    }
    input[type='text']
    {
        border: none;
        width: 98%;
        height: 70%;
        font-size: 25px;
        font-family: cursive;
        border-bottom: 1px solid black;
        padding-left: 10px;
    }
    button{
        height: 20%;
        width: 200px;
        font-family: cursive;
        font-size: 20px;
        background-color: #087da8;
        border: 1px solid #087da8;
        border-radius: 10px;
        color: white;
        margin-top: 10px;
        cursor: pointer;
        
    }
    #b{
        width: 500px;
        height: 1000px;
        overflow: auto;
        background-color: white;
        margin: auto;
        margin-top: 10px;
    }
    #c{
        font-size: 25px;
        font-family: cursive;
        padding-left: 10px;
        overflow: auto;
        width: 100%;
        height: 150px;
        background-color: blue;
        color: white;
        margin-top: 10px;
        transition: all 3s ease-in-out;
    }
</style>    
</head>
<body>
    
<div id="a">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="text" id="text" placeholder="write your message here" name="text">    
<button id="button" onclick="mostafa()">Post</button>  
</form>  
</div>    
<div id="b"></div>


    
<script type="text/javascript">
<?php
$i=0;
?>
function mostafa()
    {
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['text'];
        }
        $q="<div id='c'>".$name."</div>";
        if ($i==0) {
            $arr=str_split($q);
        }
        else{
            $arr=array_unshift($arr, $name);
        }
        echo "<div id='c'>".$arr."</div>";

        $i++;
        ?>
    }

</script>    
</body>
</html>