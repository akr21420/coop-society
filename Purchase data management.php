<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Purchase Data management</title>
  <link rel="stylesheet" href="styling.css">
  <script src="jquery-3.4.1.min.js"></script>
  <script>

  var sn=document.getElementsByName('SNo')[0];
    function validate_form() {
      var x1 = document.forms["myform_s"]["scode"].value;
      if (x1 == "") {
        alert("Supplier Code must be filled out");
        return false;
      }
      var x = document.forms["myform_s"]["numb"].value;
      if (x == "") {
        alert("Bill Number must be filled out");
        return false;
      }
      var x2 = document.forms["myform_s"]["sdate"].value;
      if (x2 == "") {
        alert("Supply Date must be filled out");
        return false;
      }

      var x3 = document.forms["myform_s"]["edate"].value;
      if (x3 == "") {
        alert("Entry Date must be filled out");
        return false;
      }


      var x4 = document.forms["myform_s"]["sname"].value;
      if (x4 == "") {
        alert("Supplier Name must be filled out");
        return false;
      }


      var x5 = document.forms["myform"]["pcode"].value;
      if (x5 == "") {
        alert("Product code must be filled out");
        return false;
      }


      var x6 = document.forms["myform"]["pname"].value;
      if (x6 == "") {
        alert("Product Name must be filled out");
        return false;
      }


      var x7 = document.forms["myform"]["quantity"].value;
      if (x7 == 0) {
        alert("Quantity must be filled out");
        return false;
      }


      var x8 = document.forms["myform"]["purpri"].value;
      if (x8 == "") {
        alert("Purchase Price must be filled out");
        return false;
      }


      var x9 = document.forms["myform"]["sellpri"].value;
      if (x9 == "") {
        alert("Selling Price must be filled out");
        return false;
      }


      var x0 = document.forms["myform"]["gst"].value;
      if (x0 == "") {
        alert("GST Rate must be filled out");
        return false;
      }


    }
  </script>

</head>

<body>
  <!--header-->
  <div style="background-color:#ffc039">
    <h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:#FFC039;"><img class="img-responsive sp-default-logo" src="images/NITTE_Logo.jpg" width="10%" height="10%" style="padding-bottom: 13px;" alt="Nitte">
    </h1>
    <div class="navbar">
      <div class="dropdown">
        <a class="dropa" href="">Link 1</a>
        <div class="dropdown-content">
          <a class="dropdown-content" href="#">Link 1</a>
          <a class="dropdown-content" href="#">Link 2</a>
          <a class="dropdown-content" href="#">Link 3</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropa">Link 2</a>
        <div class="dropdown-content">
          <a class="dropdown-content" href="#">Link 1</a>
          <a class="dropdown-content" href="#">Link 2</a>
          <a class="dropdown-content" href="#">Link 3</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropa" href="">Link 3</a>
        <div class="dropdown-content">
          <a class="dropdown-content" href="#">Link 1</a>
          <a class="dropdown-content" href="#">Link 2</a>
          <a class="dropdown-content" href="#">Link 3</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropa">Link 4</a>
        <div class="dropdown-content">
          <a class="dropdown-content" href="#">Link 1</a>
          <a class="dropdown-content" href="#">Link 2</a>
          <a class="dropdown-content" href="#">Link 3</a>
        </div>
      </div>


    </div>
  </div>
  <!--form-->
  <div id="form">
    <h2 align="middle">Purchase Data management</h2>
    <form id="sdm" autocomplete="off" name="myform_s" method="post">
      <div class="supinfo">
        <table  style="width:100%!important">
          <tr>
            <th colspan="6">
              Supplier info
            </th>
          </tr>
          <tr>
            <td>
              <label>Bill Number</label>
            </td>
            <td>
              <input type="text" id="numb"name="numb">
            </td>
            <td>
              <label>Supply date</label>
            </td>
            <td>
              <input type="date" id="sd" name="sdate">
            </td>
            <td>
              <label>Entry date</label>
            </td>
            <td>
              <input type="date" id="ed" name="edate">
            </td>

          </tr>
          <tr>
            <td>
              <label>Supply code</label>
            </td>
            <td>
              <input type="text" id="scode" name="scode">
            </td>
            <td >
              <label>Supply Name</label>
            </td>
            <td colspan="3">
              <input type="text" id="sname" name="sname">
            </td>

          </tr>

        </table>
      </form>
      </div>
        <div class="floatreleft">
          <form id="pdm" autocomplete="off" name="myform" onsubmit="validate_form()" method="post">
                  <table  style="width:100%!important;float:right!important;" height="340px">
          <tr>
            <th colspan="4">
              Product info
            </th>
          </tr>
          <tr>
            <td><label>Product code</label></td>
            <td>
              <input type="float" id="pcode" name="pcode">
            </td>
            <td><label>Purchase Quantity </label></td>
            <td>
              <input type="float" id="quantity" name="quantity" value="0" onkeyup="calcclose()">
            </td>

          </tr>
          <tr>
            <td ><label>Product Description</label></td>
            <td colspan="3">
              <input type="float" id="pdesc" name="pname">
            </td>
          </tr>
          <tr>
            <td><label>Purchase price</label></td>
            <td>
              <input type="float" id="purpri1" name="purpri">
            </td>
            <td><label>Selling price </label></td>
            <td>
              <input type="float" name="sellpri">
            </td>
          </tr>
          <tr>
            <td><label>Opening Stock</label></td>
            <td>
              <input id="ostuck"type="float" name="ostock">
            </td>
            <td><label>Closing Stock</label></td>
            <td>
              <input id="cstuck" type="float" name="cstock">
            </td>
          </tr>
          <tr>
            <td><label>GST rate</label></td>
            <td>
              <select class="form-dropdown" id="gst" name="gst" required>
                <option selected value="12">12%</option>
                <option value="18">18%</option>
              </select>
            <td colspan="2" style="text-align:center">
              <input type="hidden" name="SNo">
              <button id="btn" form="pdm" class="positive">SAVE</button>
            </td>
          </tr>
        </table>
      </div>
    </form>

<div class="floatreright">
  <table class="bill" id="pdata" border="1">

    <tr>
      <th>
        Sl.No
      </th>
      <th>
        Prod code
      </th>
      <th>
        Prod name
      </th>
      <th>
        Closing stock
      </th>
      <th>
        Quantity
      </th>
      <th>
        Purchase price
      </th>
      <th>
        GST Rate
      </th>
      <th>
        GST Amt
      </th>
      <th>
        Base price
      </th>
      <th>
        Total
      </th>
    </tr>
    <tr>
      <td>
        TOTAL
      </td>
      <td id="megtot">

      </td>
      <td>
          <button id="btns" form="sdm" class="positive">SAVE</button>
      </td>
    </tr>
  </table>
</div>
  <script type="text/javascript">
    var table, slno, megatotal = 0,megagst=0;
    var gstamt, basepri, total = 0;
    var mydata={};

    slno = 1;
    table = document.getElementById('pdata');

    function add2table() {
      /*1.slno     2.prodcode    3.prodname   cl stock 4.quantity     5.purchaseprice       6.gstrate      7.gst amout     8.total*/
      var nr = table.insertRow(slno);
      var cell1 = nr.insertCell(0),
        cell2 = nr.insertCell(1),
        cell3 = nr.insertCell(2),
        cell4 = nr.insertCell(3),
        cell5 = nr.insertCell(4),
        cell6 = nr.insertCell(5),
        cell7 = nr.insertCell(6),
        cell8 = nr.insertCell(7),
        cell9 = nr.insertCell(8),
        cell10 = nr.insertCell(9);
      var pcode1 = document.getElementsByName('pcode')[0],
        pname1 = document.getElementsByName('pname')[0];
      var cstock1 = document.getElementsByName('cstock')[0],
        quantity1 = document.getElementsByName('quantity')[0];
      var purpri1 = document.getElementsByName('purpri')[0],
        gst = document.getElementsByName('gst')[0];

      gstrate = gst.value;
      total = (purpri1.value) * (quantity1.value);
      gstamt = total * gstrate / 100;
      basepri = total - gstamt;
      megatotal = megatotal + total;
      cell1.innerHTML = slno;
      slno++;
      cell2.innerHTML = pcode1.value;
      cell3.innerHTML = pname1.value;
      cell4.innerHTML = cstock1.value;
      cell5.innerHTML = quantity1.value;
      cell6.innerHTML = purpri1.value;
      cell7.innerHTML = gstrate;
      cell8.innerHTML = gstamt;
      cell9.innerHTML = basepri;
      cell10.innerHTML = total;
      megtot.innerHTML=megatotal;

      /*'$slno','$numb','$pcode','$quantity','$purpri','$basepri','$gst','$gstpri','$total,*/
      mydata.slno=slno-1;
      mydata.numb=numb.value;
      mydata.pcode=pcode.value;
      mydata.quantity=quantity.value;
      mydata.purpri=purpri1.value;
      mydata.gstpri=parseFloat(gstamt);
      mydata.total=total;
      mydata.basepri=parseFloat(basepri);
      mydata.gst=gst.value;
      mydata.cstock=cstuck.value;
    }


    $(function(){
    $('#btn').click(function(){
      add2table();
    $.ajax({
      type:'POST',
      url:'ins_2_db.php',
      data:mydata,
      success:function(result){var nullifier;
      nullifier=document.getElementById("pdm");
      nullifier.reset();succ.innerHTML=result;}
    });
    return false;});
    });
    /*'$numb','$sdate','$edate','$scode','$total'*/
    var mydatas={};

    $(function(){
    $('#btns').click(function(){
      mydatas.numb=numb.value;
      mydatas.sdate=sd.value;
      mydatas.edate=ed.value;
      mydatas.scode=scode.value;
      mydatas.total=megatotal;
    $.ajax({
      type:'POST',
      url:'ins_2_2_db.php',
      data:mydatas,
      success:function(result){var nullifier;
      nullifier=document.getElementById("sdm");
      nullifier.reset();succ.innerHTML=result;}
    });
    });
    });
  </script>

  <script type="text/javascript">
    $(function() {
      $('#pcode').keyup(function() {
        var inpval = $('#pcode').val();
        $.ajax({
          type: 'POST',
          data: {
            pcode: inpval
          },
          url: 'fill.php',
          success: function(html) {
            $("#pdesc").val(html);

          }
        });
      });
    });
  </script>
  <script>
    $(function() {
      $('#scode').keyup(function() {

        var inpval1 = $('#scode').val();
        var inpval = inpval1.toString();

        $.ajax({
          type: 'POST',
          data: {
            scode: inpval
          },
          url: 'fills.php',
          success: function(html) {
            $("#sname").val(html);

          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('#pcode').keyup(function() {

        var inpval = $('#pcode').val();

        $.ajax({
          type: 'POST',
          data: {
            pcode: inpval
          },
          url: 'fillost.php',
          success: function(html) {
            $("#ostuck").val(html);

          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('#pcode').keyup(function() {

        var inpval = $('#pcode').val();

        $.ajax({
          type: 'POST',
          data: {
            pcode: inpval
          },
          url: 'fillcost.php',
          success: function(html) {
            $("#cstuck").val(html);

          }
        });
      });
    });
  </script>
  <script>
  var monitor=1,prev;
  function calcclose(){
    if(monitor==1)
    {
    var inter=cstuck.value;
    var interquan=quantity.value;
    prev=interquan;
    var cstok=Number(Number(interquan)+Number(inter));
    }
    else
    {
      var inter=cstuck.value;
      var interquan=quantity.value;
      interquan=interquan-prev;
      var cstok=Number(Number(interquan)+Number(inter));
      prev=quantity.value;
    }
    document.getElementById('cstuck').value=cstok;
    monitor++;
  }
  </script>
  <!--footer-->
  <!--  <div class="editor">
    <button class="options btn-success">ADD</button>
    <button class="options btn-primary">EDIT</button>
    <button class="options btn-warning">CANCEL</button>
    <button class="options btn btn-danger">DELETE</button>
  </div>
  <hr />
  <br />
  <br />

-->
  <p  id="succ"></p>
</body>

</html>
