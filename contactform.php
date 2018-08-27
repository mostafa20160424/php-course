<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
    
    $name=filter_var($_POST['text'],FILTER_SANITIZE_STRING);
    $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $msg=$_POST['msg'];
    $FormsError=array();
    if(strlen($name)<7)
    {
        $FormsError[]="you should wtite more than <strong>7</strong> characters in name field";
    }
    if(strlen($msg)<15)
    {
        $FormsError[]="you should wtite message than <strong>15</strong> characters in messsage field";
    }

}
if(isset($_POST['submit']))
{
    echo "<script type='text/javascript'>alert('data has been send');</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="contact-form">
        <h1>Contact Form</h1>
        <?php
        if(!empty($FormsError))  {?>
     <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span></button> 
      <?php
         foreach($FormsError as $error)
         {
             echo $error.'<br>';
         }   
        ?>
        </div>
        <?php }?>
        
        <ul class="list-unstyled">
            <li>
            <input type="text" name="text" class="username form-control " id="" placeholder="name" required>
            <div class="usererror alert alert-danger" id="">you should wtite more than <strong>7</strong> characters</div>
        </li>
            <li><input type="password" name="password" class="password form-control" placeholder="password">
            <div class="passworderror alert alert-danger" id="">this field cant be empty</div>
        </li>       
            <li><input type="email" name="email" class="email form-control" placeholder="email">
            <div class="emailerror alert alert-danger" id="">this field cant be empty</div>
        </li>
            <li>
                <textarea name="msg" id=""  class="form-control msg" placeholder="message" rows="10"></textarea>

                <div class="mssgerror alert alert-danger ">you should wtite message than <strong>15</strong> characters</div>
            </li>


            
        </ul>
        <input type="submit" value="Send Message" class="btn btn-primary btn-block" name="submit">
    </form>


    
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script> 
    <script src="contact.js"></script>        
</body>
</html>