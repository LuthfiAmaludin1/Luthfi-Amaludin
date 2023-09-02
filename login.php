<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en" >
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <title> Login </title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body{
      background: rgb(219, 226, 226);
    }
    .row{
      background: white;
      border-radius: 30px;
      box-shadow: 12px 12px 22px grey;
    }
    img{
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
    }
    .btn1{
      border: none;
      outline: none;
      height: 50px;
      width: 100%;
      background-color: black;
      color: white;
      border-radius: 4px;
      font-weight: bold;
    }
    .btn1:hover{
      background-color: white;
      border: 1px solid;
      color: black;
    }
  </style>  
</head>
<body>
  <section class="form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="zakat.png" class="img-fluid" alt="">
        </div> 
        <div class="col-lg-7 px-5 pt-5">
          <h1 class="font-weight-bold py-3">Zakat Fitrah</h1>
          <h4 class="font-weight-bold ">Silahkan Login</h4>
          <form method="post">
            <div class="form-row">
              <div class="col-lg-7">
                <input class="form-control my-3 p-2" id="inputUsername" name="username" type="text" placeholder="Username" required/>
              </div>  
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input class="form-control my-3 p-2" id="inputPassword" name="password" type="password" placeholder="Password" required/>
              </div>  
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" name="login" class="btn1 mt-3 mb-5">Login</buttot>
                </div>  
              </div>   
            </form>
          </div>
        </div>
        <div/>  
      </seciton>
    </body>    
    </html>