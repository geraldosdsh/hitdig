<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /* Made with love by Mutiullah Samim*/

    @import url('https://fonts.googleapis.com/css?family=Numans');

    .html,body {
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width:100%;
        font-family: 'Numans', sans-serif;
    }
    
    .container {
        height: 100%;
        align-content: center;
    }

    .card {
        height: 370px;
        margin-top: 50px;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .social_icon span {
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
    }

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

    .card-header h3 {
        color: white;
    }

    .social_icon {
        position: absolute;
        right: 20px;
        top: -45px;
    }

    .input-group-prepend span {
        width: 50px;
        background-color: #FFC312;
        color: black;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember {
        color: white;
    }

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn {
        color: black;
        background-color: #FFC312;
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }
    .cnts {
        padding:10px;
    }
    
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    window.alert = function() {};
    var defaultCSS = document.getElementById('bootstrap-css');

    function changeCSS(css) {
        if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css +
            '" type="text/css" />');
        else $('head > link').filter(':first').replaceWith(defaultCSS);
    }
    $(document).ready(function() {
        var iframe_height = parseInt($('html').height());
        window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
    });
    </script>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Teste</title>
      </head>

    <body>  
                   
                <div class="cnts">
                    <div class="container d-flex justify-content-center py-3">
                        <input type="submit" value="Login" class="btn float-right login_btn" >
                        <input type="submit" value="Login" class="btn float-right login_btn" >
                    </div>
                </div>
            <div class="d-flex justify-content-center ">
               
            <div class="card">
                    
                    <div class="card-header">
                    
                    <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                     </div>
                    </div>
                    <div class="card-body">
                        <form>
                           
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>


                <div>
 





<!-- Modal Credito Esqueci-Minha-Senha -->
<div>
<style>
    
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        
        
        .box{
            height: 20%;
            display: flex;
            justify-content:center;
            align-items:center; 
            color: white;
            top:100px;
            transform: translate(-50%-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 5px;
            border-radius: 600%;
            width: 100%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
       
        
     
    </style>
<div class="modal fade " id="esqueci-minha-senha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Esqueci Minha Senha</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive" style="max-height: 100%">
                <div class="box"> 
    <form action="" class="box1">
            <fieldset>
                <legend><b>E-mail</b></legend>
                <br><br><br>
                
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
               
               
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    </div<>
                    
                </div>
            </div>

        </div>
    </div>
</div>

<div>


            

</section>
                </div> 


    </html>
    <script type="text/javascript">
    </script>
</body>

</html>