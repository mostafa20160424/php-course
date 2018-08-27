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


    <script src="bootstrap-3.3.7-dist/js/respond.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/html5shiv.min.js"></script>
</head>

<body>
    <form role="form" method="post" action="mostafaa.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="write your name" required name="text">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="write-your password" required name="password">
        </div>
       <div class="form-group">
            <input type="email" class="form-control" placeholder="write your email" required name="email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="country" required>
        </div>
        <div class="form-group">
            <select class="form-control pp" onchange="mostafa()" id='koka'>
            <option value="years" >years</option>
               <?php
                for ($i=1900; $i <=2017 ; $i++) { 
                           
                    echo "<option value='$i'>".$i."</option>";

                }

               ?>
              </select>
        </div>

        <div class="form-group">
            <textarea class="form-control ss"></textarea>
        </div>
        <button class="btn btn-primary btn-block">sign in</button>
    </form>
    
   <script type="text/javascript">
   var x=document.getElementById('koka');
   function mostafa() {
       alert(x.value);
   }
      
   </script>
</body>

</html>
