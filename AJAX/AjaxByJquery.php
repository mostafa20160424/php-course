
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>

    <style>

    </style>
</head>
<body>
    

<script src="jquery-3.2.1.min.js"></script>

    <script type="text/javascript">
    $(function(){
        $(".info").click(function(){
            var info={
                id:20160424,
                name:'mostafa abdelfattah saleh ali'
            };

            $("#jax").load('info.php?name=mostafa&id=5 .container',function (rt,st,xmlhttp) {
                if(st=='error')
                {
                    alert('error');
                }
                alert(rt);//will print all the html code in info.php page
                alert(xmlhttp.readyState);
            });

            /*
            will return only the container class Content load(page specficTagBY(TagName,Class,ID)) 
            return the Text in the tag you send And Create The Request if you write only page name will return all page responseText
            */

            /*
            var info={
                id:20160424,
                name:'mostafa abdelfattah saleh ali'
            };
            
            $("#jax").load('info.php',info,function(rt,st,xmlhttp){
                rt:responseText
                st:statues return String
                xmlhttp:the Object Of XMLHTTPREQUEST
            });
             if you want send parameter load(page,object) the attr in info Object Request in info.php By POST Method
             you can write in info.php echo $_POST['name'].$_POST['id']

            $.get('path url to go',info,function(rt,st,xmlhttp){
                rt:responseText
                st:statues return String
                xmlhttp:the Object Of XMLHTTPREQUEST
                $("#jax").html(rt);
            });
             if you want send parameter load(page,object) the attr in info Object Request in info.php By GET Method
             you can write in info.php echo $_GET['name'].$_GET['id']

            $.post('info.php(path url to go)',info,function(rt,st,xmlhttp){
                rt:responseText
                st:statues return String
                xmlhttp:the Object Of XMLHTTPREQUEST
                $("#jax").html(rt);
            });
             if you want send parameter load(page,object) the attr in info Object Request in info.php By POST Method
             you can write in info.php echo $_POST['name'].$_POST['id']
             */


        });

        $(".info2").click(function(){
            $.ajax({
            url     : "info.php",
            type    : 'GET',//type:Request Method The Default Value is GET also you can put POST
            data    : {id:10,name:'Saleh'},//you can write object or string like "id=10&name=Saleh" But The Best Way By Send Object
            dataType: "html",//the Text Type You Want Response can Be "script" or "json"
            async   : true,//mean asynchronos the other process will running if this code not running true is the default value can be false
            success : function(rt,st,xmlhttp){
                         /*
                        rt:responseText
                        st:statues return String
                        xmlhttp:the Object Of XMLHTTPREQUEST   */
                        if(st=='error')
                            {
                                alert('error');
                            } 
                        $("#jax").html(rt);    
                        },
            //contentType : "application/x-www-form-urlencoded",the default value use it with POST Method
            statuesCode : {
                            404:function(){alert('Page Not Found')},//if statues==200
                            200:function(){alert('Success')} } ,  //statuesCode take Object

            /* username:"mostafa", use username,password if you send request to page have password and username like admin page
               password:"0124248793", */

            });

        });
         /***********************Another Way To Use $.ajax***********************/

        $(".info3").click(function(){
       
            var info={};
            info.url="info.php";
            info.type='GET';
            info.data={id:10,name:'Mohamed'};
            info.dataType="html"
            info.success= function(rt,st,xmlhttp){ $("#jax").html(rt);    }

            $.ajax(info);
        })
    });

    </script>
   
  <a class='info' href="#">Get Information</a><br>
  <a class='info2' href="#">Get Information2</a><br>
  <a class='info3' href="#">Get Information3</a><br>
    <div id="jax"></div>


</body>
</html>
