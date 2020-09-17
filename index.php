<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--link rel="stylesheet" href="main.css"-->
<style>
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 22px;
  border-radius: 25px;
}

.active, .btn:active {
  background-color: rgb(10, 224, 124);
  color: white;
}

.clicked, .btn:active {
  background-color: rgb(111, 225, 125);
  color: white;
}
 .btn1:active {
  background-color: rgb(175, 13, 7);
  color: white;
}

.pannel {
  background: rgba(225,225,200,0.5);
  background-image: linear-gradient(rgb(180, 178, 178), rgb(255, 255, 248), rgb(236, 236, 232), rgb(167, 165, 165));
  margin: 0 auto;
  width: 246px;
  padding: 25px 5px;
  border: 4px outset rgba(255,255,255,0.2);
}
.pannel button,
.floor button {
  display: inline-block;
  cursor: pointer;
  border: none; 
  outline: 0;
  border-radius: 50%;
  width: 60px; 
  height: 60px;
  margin: 10px 30px;
  font-size: 25px;
  font-family: Courier New, monospace; font-weight: bold;
  color: #444;
  box-shadow: 
    -1px -2px 2px #c4bca3,
    inset 1px 2px 3px #eeeeee,
    inset -1px -2px 3px #c4bca3,
    2px 6px 16px rgba(0,0,0,0.5);
    border: thick solid rgb(182, 182, 187);
}
  
.arrow{position:relative;}
.arrow.up:after{
  position:absolute;
  top:-6px;
  left:-15px;
  width: 0;
  height: 0;
  content:'';
  border-style: solid;
  border-width: 0 7px 8px 7px;
  border-color: transparent transparent #111010 transparent;
  border-radius:2px;
  transform: rotate(-90deg);
}

 .arrow.up:before{
  position:absolute;
  top:-6px;
  left:2px;
  width: 0;
  height: 0;
  content:'';
  border-style: solid;
  border-width: 0 7px 8px 7px;
  border-color: transparent transparent rgba(0,0,0,0.7) transparent; 
  border-radius:2px;
  transform: rotate(90deg);
} 

.arrow.down:after{
  position:absolute;
  top:-6px;
  left:-15px;
  width: 0;
  height: 0;
  content:'';
  border-style: solid;
  border-width: 8px 7px 0 7px;
  border-color: #0a0a0a transparent transparent transparent;
  border-radius:2px;
  transform: rotate(-90deg);
}

.arrow.down:before{
  position:absolute;
  transform: rotate(90deg);
  top:-6px;
  left:2px;
  width: 0;
  height: 0;
  content:'';
  border-style: solid;
  border-width: 8px 7px 0 7px;
  border-color: rgba(0,0,0,0.7) transparent transparent transparent;
  border-radius:2px;
}


</style>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function()
{
  $('.btn').click(function()
  {
    //console.log($(this).prop('class'));	
    if($(this).prop('class').search("clicked") > 0)
    {
      $(this).removeClass('active');
      //$(this).removeClass('clicked');
    }
    else
    {
      $.ajax({url: "execute.php?set=1&pin="+$(this).prop('id'), success: function(result)
      {
      //$("#div1").html(result);
      //alert("On");
      }});
      $(this).addClass('active')
      .delay(3000)
      .queue(function(next)
      {
	$(this).removeClass('active');		
	$.ajax({url: "execute.php?set=0&pin="+$(this).prop('id'), success: function(result)
	{
	//$("#div1").html(result);
	//alert("Off");
	}});
	next();
      //$(this).addClass('clicked');
      })
    }
  });    
});    
</script>
</head>
<body>
 <div class="container pannel">     
<?php
$gpio = array(2, 3, 4, 14, 15, 17, 18, 27, 22, 23);
//$gpio = array(17, 13, 15, 16, 18, 22, 29, 31, 36, 37);
    for($i = 0; $i < count($gpio); $i++)
    {
?>
  <button class="btn" id="<?=$gpio[$i]?>"><?=$i?></button>
<?php 
    } 
?>
  
  <hr />
  <button class="btn1" > <span class="icon square arrow down"></span></button>
  <button class="btn1" > <span class="icon square arrow up"></span></button>
 </div>
</body>
</html>
