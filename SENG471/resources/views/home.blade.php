
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php csrf_token() ?>"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Fonts -->
<title>SENG471</title>
<script type="text/javascript">
function getcolours() {

  $.ajax({
    type:'get',
    url:"/ajaxreq",
    data: $('#modelform').serialize(),
    success: function (data){
      $('#extform').html(data);
    },
    error: function (data){
      alert('ERROR');
    }
  });

  $.ajax({
    type:'get',
    url:"/intreq",
    data: $('#modelform').serialize(),
    success: function (data){
      $('#intform').html(data);
    },
    error: function (data){
      alert('ERROR');
    }
  });

  $.ajax({
    type:'get',
    url:"/carblack",
    data: $('#modelform').serialize(),
    success: function (data){
      $('#cardisp').html(data);
    },
    error: function (data){
      alert('ERROR');
    }
  });

  $.ajax({
    type:'get',
    url:"/intblack",
    data: $('#modelform').serialize(),
    success: function (data){
      $('#intdisp').html(data);
    },
    error: function (data){
      alert('ERROR');
    }
  });
}


function intchange(buttonval) {
  if($('#carchoice').val() == 'one'){
    switch(buttonval){
      case 'redint':
        $('#intdisp').html("<img src='/img/cintred3.jpg' class='pic'>");
        break;
      case 'leatherint':
        $('#intdisp').html("<img src='/img/cintleather.jpg' class='pic'>");
        break;
      case 'blackint':
        $('#intdisp').html("<img src='/img/cintblack.jpg' class='pic'>");
        break;
      default:
    }
  } else if($('#carchoice').val() == 'two'){
    switch(buttonval){
      case 'greyint':
        $('#intdisp').html("<img src='/img/tintgrey.jpg' class='pic'>");
        break;
      case 'leatherint':
        $('#intdisp').html("<img src='/img/tintleather.jpg' class='pic'>");
        break;
      case 'blackint':
        $('#intdisp').html("<img src='/img/tintblack.jpg' class='pic'>");
        break;
      default:
    }
  }
}

function extchange(buttonval){
  if($('#carchoice').val() == 'one'){
    switch(buttonval){
      case 'red':
        $('#cardisp').html("<img src='/img/cextred.jpg' class='pic'>");
        break;
      case 'blue':
        $('#cardisp').html("<img src='/img/cextdblue.png' class='pic'>");
        break;
      case 'silver':
        $('#cardisp').html("<img src='/img/cextgrey.jpg' class='pic'>");
        break;
      case 'white':
        $('#cardisp').html("<img src='/img/cextwhite.png' class='pic'>");
        break;
      case 'black':
        $('#cardisp').html("<img src='/img/cextblack.jpg' class='pic'>");
        break;
      default:
    }

  } else if($('#carchoice').val() == 'two'){
    switch(buttonval){
      case 'red':
        $('#cardisp').html("<img src='/img/textred.png' class='pic'>");
        break;
      case 'yellow':
        $('#cardisp').html("<img src='/img/textyellow.jpg' class='pic'>");
        break;
      case 'white':
        $('#cardisp').html("<img src='/img/textwhite.jpg' class='pic'>");
        break;
      case 'green':
        $('#cardisp').html("<img src='/img/textgreen.png' class='pic'>");
        break;
      case 'black':
        $('#cardisp').html("<img src='/img/textblack.jpg' class='pic'>");
        break;
      default:
    }

  }
}

$(document).ready(function(){
$('.button').click(function(){
  alert($(this).val());
});
});


</script>


</head>

<body>

  <!-- Page Content -->
  <div class="container">
    <!-- Top bar -->
    <div class="topbar" id='1'> Vehicle Colour Customizer</div>

    <!--Selection Bar -->
    <div class="selectionbar">
      <div class="modeltext">
        Please select the model of car you are interested in
      </div>
      <form  id="modelform" onchange="getcolours()">
        <select id="carchoice" name='cars' class="dropdown"  placeholder="Select Car">
          <option value="" disabled selected>Select Car</option>
          <option value="one">Car</option>
          <option value="two">Truck</option>
          <option value="three">SUV</option>
        </select>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
      <div class="modeltext" id="CD">
        Please select an exterior colour </br>
      </div>
      <div id='extform'>

      </div>
      <div class="modeltext">
        Please select an interior colour </br>
      </div>
      <div id='intform'>
      </div>
    </div>

    <!-- Car display area -->
    <div class="cardisplay">
      <div id="cardisp">

      </div>

      <div id="intdisp">

      </div>



    </div>



</body>


</html>
<style>


.container {
  width: 100vw;
  margin: 0;
  padding: 0;
  background-color: white;
}

.topbar {
  width: 100vw;
  font-style: sans-serif;
  background-color: black;
  font-size: 45;
  text-indent: 20px;
  color: White;
  height: 70px;
}

.selectionbar{
  background-color: darkgray;
  top: 0;
  margin: 0;
  width: 30%;
  padding: 0;
  height: 100%;
  display: inline-block;
}

.modeltext{
  padding: 0;
  top: 0;
  margin: 25px;
  font-size: 35;
  display: inline-block;
}

.dropdown{
  width: 80%;
  margin: 20px;
  font-size: 20;
}

.pic{
  width:80%;
  height:100%;
  margin-top: 20px;
  margin-left: 80px;
}
.extform{
  margin: 25px;
}

.cardisplay{
  width: 60%;
  margin: 0;
  top:0;
  right: 0;
  float: right;
  display: grid;
  height: 80%;
}


.red{
  width: 50px;
  background-color: red;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.yellow{
  width: 50px;
  background-color: yellow;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.green{
  width: 50px;
  background-color: green;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.leather{
  width: 50px;
  background-color: tan;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.blue{
  width: 50px;
  background-color: blue;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.silver{
  width: 50px;
  background-color: silver;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.white{
  width: 50px;
  background-color: white;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}

.black{
  width: 50px;
  background-color: black;
  height: 50px;
  margin: 10px;
  border-color: black;
  border-width: 3px;
  border-radius: 10px;
}


</style>
