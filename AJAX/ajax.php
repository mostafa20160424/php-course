
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
    <div id="mostafa"></div>
    <div id="jax"></div>

<script src="jquery-3.2.1.min.js"></script>

    <script type="text/javascript">

        /*


        var request=new XMLHttpRequest();

        alert(request.readyState);

        request.open('POST',"ajax.html");

        request.open(mehtod,pass will get data from,true); true is the default value
        mean asynchronos:true thats mean the after this line will running the oppiste is desynchronos:false

        request.setRequestHeader("");
        request.send();
        */


        function createRequest()
        {
            try{
                    var xmlhttp;
                    if(window.XMLHttpRequest)//check if XMLHttpRequest OOP exist in the window(internet page show in {opera,chorm,firefox})
                    {
                        xmlhttp=new XMLHttpRequest();
                    }

                    else
                    {
                        xml=new ActiveXObject("Microsoft.XMLHttp");//if the page show in Internet Exploler 5 or 6
                        if(!xmlhttp)//if xmlhttp==NULL
                        {
                            xmlhttp=new ActiveXObject("Msxml2.XMLHttp.3.0");
                        }
                        if(!xmlhttp)
                        {
                            xmlhttp=new ActiveXObject("Msxml2.XMLHttp.6.0");
                        }
                    }
                }
                catch(err)
                {
                    document.getElementById("mostafa").innerHTML='عذرا لا يمكن تقديم الطلب فى الوقت الحالى';
                }

            return xmlhttp;
        }

        function doActionWithText()
        {
                
            if(this.readyState==1){document.getElementById("mostafa").innerHTML='جارى الاتصال بالسيرفر';}
            else if(this.readyState==2){document.getElementById("mostafa").innerHTML='تم الاتصال بالسيرفر';}
            else if(this.readyState==3)
                {
                    document.getElementById("mostafa").innerHTML='حارى معالحه الطلب';
                    //xmlhttp.abort(); mean stop the request
                }
                    //xmlhttp.status have two values if =200 mean all thing ok if =404 mean page not found
                    
                if(this.readyState == 4 && this.status == 200)//this will replace by the Object Call its owner Function onreadystatechange 
                {
                    document.getElementById("mostafa").innerHTML=this.responseText;
                }
                
        }

        function doActionWithImage()
        {
                
       
            document.getElementById("mostafa").innerHTML="<image src='waite.gif'>";
            if(this.readyState == 4 && this.status == 200)//this will replace by the Object Call its owner Function onreadystatechange 
            {
              document.getElementById("mostafa").innerHTML=this.responseText;//responseXML return XML Page Object
            }
                
        }

        function getinfo(page,action)
        {

            var xmlhttp=createRequest();
            xmlhttp.onreadystatechange=action;//onreadystatechange use only when you user asynchronos:true and call in the change of readystate
            xmlhttp.open("GET",page,true);
            //xmlhttp.open("method","page yous send the request and get data from",true:synchronos mean code after this line will operate);
            xmlhttp.send();
        }

        function getInfoByPostMethod()
        {
         
            var xmlhttp;
            if(window.XMLHttpRequest)//check if XMLHttpRequest OOP exist in the window(internet page show in {opera,chorm,firefox})
            {
                xmlhttp=new XMLHttpRequest();
            }
            else{
                xml=new ActiveXObject("Microsoft.XMLHttp");//if the page show in Internet Exploler 5 or 6
            }
            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    document.getElementById("mostafa").innerHTML=xmlhttp.responseText;//return all text in info.php
                }
            }
            xmlhttp.open("POST","info.php",true);
            //xmlhttp.open("method","page yous send the request and get data from",true:synchronos mean code after this line will operate);

            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");//must put this line if method=POST

            xmlhttp.send("id=10&username=saleh");//put the parameter you want to send in send function
        }

    </script>
   
  <button onclick="getinfo('info.php?name=mostafa&id=5',doActionWithText)">Get Information</button>
  <button onclick="getinfo('../eCommerceCourse-master/index.php',doActionWithImage)">Get Information By Image</button>
  


</body>
</html>
