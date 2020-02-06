<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
       
    <link rel="stylesheet" href="stylelogin1.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function(){
              $('#pcode').keyup(function(){
  
              var inpval=$('#pcode').val();
  
              $.ajax({
                  type: 'POST',
                  data: {
                    pcode : inpval
                    },
                  url: 'fill.php',
                  success: function(html) {
                       $("#pdesc").val(html);
  
            }
          });
      });
  });
  </script>
  </head>
  <body>
  
  <div class="w3-top" style="background-color:#FFC039">
  <div class="w3-bar w3-card  " style="background-color:#FFC039">
    <h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:#FFC039;" ><img class="img-responsive sp-default-logo" src="NITTE_Logo.jpg" width="10%" height="10%" style="padding-bottom: 13px;" alt="Nitte"> </h1>
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <!--
  <div class="navbar" >
    <a href="">Home</a>
    <a href="">Link 1</a>
    <a href="">Link 2</a>
     <a href="">Link 3</a>
  <a href="">Link 4</a> 
    -->
    
    
  </div>
  </div>
  </div>
  <br>
	<div id="demo" class="carousel slide" data-ride="carousel">

   <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
   </ul>

   <div class="carousel-inner" style="max-width: 800px; margin: 0 auto">
    <div class="carousel-item active">
      <img class="img-fluid" src="http://radla2018.org/wp-content/uploads/2017/02/s3-1100x500.jpg" alt="Sample Image">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="http://www.eritrea-unmission.org/wp-content/uploads/2016/11/header-interfaithcities-1100x500-1.jpg" alt="Sample Image">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="https://wsidm.com.br/wp-content/uploads/2016/03/lampada-1100x500.jpg" alt="Sample Image">
    </div>
  </div>

   <a class="carousel-control-prev" href="#demo" data-slide="prev" hidden>
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" hidden>
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<br><br>
<div>
	<center>
<form method="POST" action="login.php">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" value="Login">
        </form>
  </center>
    </div>
</body>
</html>

