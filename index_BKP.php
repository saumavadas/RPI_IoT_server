<!DOCTYPE HTML><html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .pannel {background: rgba(225,225,200,0.5);background-image: linear-gradient(rgb(180, 178, 178), rgb(255, 255, 248), rgb(236, 236, 232), rgb(167, 165, 165));margin: 0 auto;width: 250px;padding: 25px 5px;border: 4px outset rgba(255,255,255,0.2);text-align: center;}
    .pannel input{width: 80px; height: 80px;background-color: white;border-radius: 50%;vertical-align: middle;border: 1px solid #ddd;-webkit-appearance: none;outline: none;cursor: pointer;box-shadow:   -1px -2px 2px #c4bca3,  inset 1px 2px 3px #eeeeee,  inset -1px -2px 3px #c4bca3,  2px 6px 16px rgba(0,0,0,0.5);border: thick solid rgb(182, 182, 187);  background-color: #f1f1f1; cursor: pointer; }
    .pannel input:checked{background-color: rgb(10, 224, 124);}
    label{font-size: 30px;font-family:Courier New,monospace;font-weight: bold;color: #444;position: relative;left: -52px;cursor: pointer;}
    .pannel a{display: inline-block;cursor: pointer; border: none; outline: 0;border-radius: 50%;width: 60px; height: 60px; margin: 10px 16px;    font-size: 25px;    font-family:Courier New,monospace;font-weight: bold;    color: #444;    box-shadow:       -1px -2px 2px #c4bca3,      inset 1px 2px 3px #eeeeee,      inset -1px -2px 3px #c4bca3,      2px 6px 16px rgba(0,0,0,0.5);       border: thick solid rgb(182, 182, 187);}
    .btn1:active {background-color: rgb(175, 13, 7);color: white;}
    .arrow{position:relative;}
    .arrow.up:after{position:absolute;top:26px;left:-15px;width: 0;height: 0;content:'';border-style: solid;border-width: 0 7px 8px 7px;  border-color: transparent transparent #111010 transparent;border-radius:2px;  transform: rotate(-90deg);}
    .arrow.up:before{position:absolute;top:26px;left:2px;width: 0;height: 0;content:'';border-style: solid;border-width: 0 7px 8px 7px; border-color: transparent transparent rgba(0,0,0,0.7) transparent; border-radius:2px;transform: rotate(90deg);} 
    .arrow.down:after{position:absolute;top:26px;left:-15px;width: 0;height: 0;content:'';border-style: solid;border-width: 8px 7px 0 7px;border-color: #0a0a0a transparent transparent transparent;border-radius:2px;transform: rotate(-90deg);}
    .arrow.down:before{position:absolute;transform:rotate(90deg);top:26px;left:2px;width:0;height:0;content:'';border-style:solid;border-width:8px 7px 0 7px;border-color: rgba(0,0,0,0.7) transparent transparent transparent;border-radius:2px;}
  </style>
</head>
<body>  
<div class="pannel">
	<input type="checkbox" onchange="toggleCheckbox(this)" id="1"/><label for="checkbox">1</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="2"/><label for="checkbox">2</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="3"/><label for="checkbox">3</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="4"/><label for="checkbox">4</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="5"/><label for="checkbox">5</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="6"/><label for="checkbox">6</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="7"/><label for="checkbox">7</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="8"/><label for="checkbox">8</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="9"/><label for="checkbox">5</label>
	<input type="checkbox" onchange="toggleCheckbox(this)" id="10"/><label for="checkbox">6</label>	
  <div style="clear:both"></div>
  <hr />
  <a href="#" class="btn1"><span class="arrow down"></span> </a><a href="#"><span class="arrow up"></span></a>
<script>function toggleCheckbox(element) 
{
  var xhr = new XMLHttpRequest();
  if(element.checked){ xhr.open("GET", "/update?relay="+element.id+"&state=1", true); }
  else { xhr.open("GET", "/update?relay="+element.id+"&state=0", true); }
  xhr.send();
}
</script>
<div>
</body>
</html>
