
var usererror,passerror,emailerror,msgerror;


$(document).ready(function(){
    $(".username").blur(function(){
        if($(this).val().length <7)
            {
                $('.usererror').fadeIn(100);
                $(this).css('border-color','red');
                usererror=true;
            }
            else{
                $('.usererror').fadeOut(100);
                $(this).css('border-color','green');
                usererror=false;
            }
        
    });
    $("textarea").blur(function(){
        if($(this).val().length <7)
            {
                $('.mssgerror').fadeIn(100);
                $(this).css('border-color','red');
                msgerror=true;
            }
            else{
                $('.mssgerror').fadeOut(100);
                $(this).css('border-color','green');
                msgerror=false;
            }
           
    });
    $("input[type='password']").blur(function(){
        if($(this).val()=="")
            {
                $('.passworderror').fadeIn(100);
                $(this).css('border-color','red');
                passerror=true;
            
            }
            else{
                $('.passworderror').fadeOut(100);
                $(this).css('border-color','green');
                passerror=false;
            }
             
    });
    $("input[type='email']").blur(function(){
        if($(this).val()=="")
            {
                $('.emailerror').fadeIn(100);
                $(this).css('border-color','red');
                emailerror=true;
            }
            else{
                $('.emailerror').fadeOut(100);
                $(this).css('border-color','green');
                emailerror=false;
            }
            
    });

    $("form").submit(function(e){
        if(msgerror==true||emailerror==true||usererror==true||passerror==true)
            {
                e.preventDefault();
                $('.password,.username,.email').blur();
            }
            else{
                alert("success");
            }
    });
});
