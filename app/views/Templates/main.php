<!DOCTYPE html>
<html>
    <head>
        <title>{{title}}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="positon_token" content="{{positon_token}}" />
        <meta name="keywords" content="positron,  rdc, kinshasa, congo, e-comerce, Business, partners, vente, vendre, vendez, article, produits, services, gratuitement" />
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" /> 
        <!-- styles --> 
        <link rel="stylesheet" href="{{ROOT}}/assets/css/style.css" />   
        
        <!-- scripts -->
        {%- if (!isset($_SESSION['user-token'])){ -%}
            <script src="https://www.google.com/recaptcha/api.js?render={{captcha_site_key}}"></script>
        {%- } -%}
        <script src="{{ROOT}}/assets/js/jquery.js"></script> 
  
    </head>
    <body>  
        <!-- Static Css -->
        {% include ../app/views/Templates/parts/styles.php %}
        <!-- Header -->
        {% include ../app/views/Templates/parts/header.php %}
         
        <!-- Body -->
        <div class="m-0"> 
            {{body}} 
        </div>
        
        <!-- The Footer -->
        {% include ../app/views/Templates/parts/footer.php %}
        
        <!-- Modals -->
        {% include ../app/views/Templates/parts/registerModal.php %}
        {% include ../app/views/Templates/parts/LoginModals.php %}
        {% include ../app/views/Templates/parts/resetpassword.php %}
        
        
        <!-- Addson --> 
        <script src="{{ROOT}}/assets/js/main.js"></script>  
        <script src="{{ROOT}}/assets/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script> 
        {%- if (!isset($_SESSION['user-token'])){ -%}
        
            <!-- Google Analytics - just ignore this -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123057962-1"></script>
            <script>
                $(document).ready(function(){
                    $(".sendToRegister").on('click',function(e){
                        $("#myModal").hide(200);
                        $(".error-msg").text("");
                        $("#myModal1").show(200);
                    });
                });
            </script>
           
        {%- } -%}
        <script>
            $(document).ready(function(){
                $.ajaxSetup({
                      headers : {
                         'positon_token': $('meta[name="positon_token"]').attr('content')
                     }
                });
            });
        </script>
    </body>
</html>
