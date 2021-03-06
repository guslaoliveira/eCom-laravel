<!doctype html>
<html lang="en">
  <head>
  <title>Curso Laravel Ecom</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  </head>
  <body>
  
 
    
    {{View::make('header')}}
    @yield('content')
       
    <!-- {{View::make('footer')}} -->

  </body>

  <style>

      .containerCarousel {
          width: 280px;
          height: 280px;
          background-color: red; /* For browsers that do not support gradients */
          background-image: linear-gradient(0deg, grey, white);
          margin: 0 auto;
      }

      /* resize images */
      .containerCarousel img {
        display: block;
        /*margin-left: auto;
        margin-right: auto; */
        margin: 0 auto;

      }

      .treding-images {
        height: 100px;
      }

      .detail-images {
        height: 200px;
      }


      .treding-itens {
          float: left;
          width: 10%;

      }

    .aligncenter {
    text-align: center;
    }


     .custom-product {
        width: 150px;
        display: inline-block;
     }
     
     .custom-login{
     
      top: 50%;
      left: 50%;
     
   
     }

    body {
          margin: 0;
          padding: 0;
          background-color: #c7c4bd;
          height: 100vh;
    }
    
    
    #grad1 {
      height: 100px;
      /*background-color: red;  For browsers that do not support gradients */
      /* background-image: linear-gradient(0deg, grey, white); */
    }


    #login .container #login-row #login-column #login-box {
          margin-top: 120px;
          max-width: 600px;
          height: 320px;
          border: 1px solid #9C9C9C;
          background-color: #EAEAEA;
     }
    
     #login .container #login-row #login-column #login-box #login-form {
          padding: 20px;
     }
    
     #login .container #login-row #login-column #login-box #login-form #register-link {
          margin-top: -85px;
      }


  </style>

</html>