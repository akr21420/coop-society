<!DOCTYPE html>

<head>
  <title>Mini Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--<script type="text/javascript">
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
</script>-->
</head>
<body>

<div class="w3-top" style="background-color:#FFC039">
<div class="w3-bar w3-card  " style="background-color:#FFC039">
  <h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:#FFC039;" ><img class="img-responsive sp-default-logo" src="NITTE_Logo.jpg" width="10%" height="10%" style="padding-bottom: 13px;" alt="Nitte"> </h1>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<div class="navbar" >
  <a href="">Home</a>
  <a href="">Link 1</a>
  <a href="">Link 2</a>
   <a href="">Link 3</a>
<a href="">Link 4</a> 
  
  
  
</div>
</div>
</div>
<br>
<div id="form1">
  <center>
  <h3><b>Stock Management</b></h3>
  <hr>
  <form style="width: auto; height: auto;" action="stockdel.php" method="post" autocomplete="off">
  <table align="center" width="40%" id="stocks">
    <tr>
      <td><label>Product code</label></td>
      <td>
        <input type="float" name="pcode" id="pcode" required>
      </td>
      <!--
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td rowspan="6" colspan="8" nowrap>
        <div class="col">
  
  <div class="card" style="width:100%; height: auto;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7FMQLc8-TBLUmvJ9EJLm47CiTfDpsTl_ibK7KuV8Vc8gr3tQZ" alt="Rose Bouquet">
  <div class="card-body">
    <h4 class="card-title">Product</h4>
    <p class="card-text"></p>
    <center>
    <button type="submit" class="btn btn-primary" value="Submit" style="float:center;">Upload</button>
    </center> 
  </div>
</div>

</div>
</td>
    </tr>
    <tr>
      <td nowrap><label>Product Description</label></td>
      <td colspan="5">
      
        <input type="text" name="pdesc" id="pdesc" style="width: 100%;">
        
        <textarea cols="59" rows="1"></textarea>
      </td>
    </tr>
    <tr>
      <td><label>Opening stock</label></td>
        <td>
          <input type="float" name="ostock">
        </td>
        <td></td>
        <td></td>
        <td><label>Total Purchases</label></td>
        <td>
          <input type="float" name="purchase">
        </td>
      </tr>
      <tr>
        <td><label>Closing stock</label></td>
        <td>
          <input type="float" name="cstock">
        </td>
        <td></td>
        <td></td>
        <td><label>GST rate</label></td>
        <td>
          <select class="form-dropdown" name="gst" required>
              <option selected value="0">12%</option>
              <option value="1">18%</option>
           </select>
        </td>
      </tr>
      <tr>
      <td><label>Purchase unit</label></td>
        <td>
          <input type="float" name="p-unit">
        </td>
        <td></td>
        <td></td>
        <td><label>Selling unit</label></td>
        <td>
          <input type="float" name="s-unit">
        </td>
      </tr><tr>
      <td><label>Purchase price</label></td>
        <td>
          <input type="float" name="cp">
        </td>
        <td></td>
        <td></td>
        <td><label>Selling price</label></td>
        <td>
          <input type="float" name="sp">
        </td>
      </tr>
      <br>
    -->
      <tr align="center">
        <td align="center" colspan="8">
          <center>
          <button id='delbtn' type="submit" class="btn btn-primary" value="Submit" name="submit" style="float:center;">Submit</button>
        </center>
        </td>
      </tr>

    </table>
  </form>
</center>
</div>

<div id="actions">
  <center>
  <table width="100%">
    <tr>
      <td><button type="button" onclick="location.href='first2.php'" class="btn btn-warning">Edit</button></td>
      <td><button type="button" onclick="location.href='addstock.php'" class="btn btn-success">Add</button></td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </table>
</center>
</div>
</body>
</html>

