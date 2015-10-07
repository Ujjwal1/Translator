function rgbToHex(red, green, blue) {
        var rgb = blue | (green << 8) | (red << 16);
        return '#' + (0x1000000 + rgb).toString(16).slice(1)
  }

 function rgb_to_perc(red,green,blue){
 	document.getElementById("red_perc").value= (red/2.55).toFixed(2);
 	document.getElementById("green_perc").value= (green/2.55).toFixed(2);
 	document.getElementById("blue_perc").value= (blue/2.55).toFixed(2);
 	document.getElementById("result_color").style.backgroundColor = document.getElementById("color_hexadecimal").value;
 }

 function perc_to_rgb(red,green,blue){
 	document.getElementById("red").value= red*2.55;
 	document.getElementById("green").value= green*2.55;
 	document.getElementById("blue").value= blue*2.55;
 }
function rgb(){
	var blue = document.getElementById("blue").value;
	 var red = document.getElementById("red").value;
	 var green = document.getElementById("green").value;
	 document.getElementById("color_hexadecimal").value= rgbToHex(red, green, blue);
	 document.getElementById("result_color").style.backgroundColor = document.getElementById("color_hexadecimal").value;
	 rgb_to_perc(red, green, blue);
	 cmyk();
	 webSafe();
}

function rgb_perc(){
	 var blue_perc= document.getElementById("blue_perc").value;
	 var red_perc= document.getElementById("red_perc").value;
	 var green_perc = document.getElementById("green_perc").value;
	 document.getElementById("color_hexadecimal").value= rgbToHex(red_perc*2.55, green_perc*2.55, blue_perc*2.55);
	 perc_to_rgb(red_perc, green_perc, blue_perc);
	 document.getElementById("result_color").style.backgroundColor = document.getElementById("color_hexadecimal").value;
	 cmyk();y
	 webSafe();
}

function dropdown(value){
	document.getElementById("color_hexadecimal").value= document.getElementById("color_dropdown").value ;	
	hexToRgb();
}

function hexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
function hexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
function hexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}

function hexToRgb(){
	var red = hexToR(document.getElementById("color_hexadecimal").value);
	var green = hexToG(document.getElementById("color_hexadecimal").value);
	var blue= hexToB(document.getElementById("color_hexadecimal").value);
	document.getElementById("red").value = red;
	document.getElementById("green").value =green;
	document.getElementById("blue").value = blue;
	document.getElementById("red_perc").value = Math.round(red/2.55);
	document.getElementById("green_perc").value = Math.round(green/2.55);
	document.getElementById("blue_perc").value = Math.round(blue/2.55);
	document.getElementById("result_color").style.backgroundColor = document.getElementById("color_hexadecimal").value;
	cmyk();
	webSafe();
}

function webSafe(){
	c = cutHex(document.getElementById("color_hexadecimal").value);
	var Msg;
	if((c.substring(0,2)=== "FF"||c.substring(0,2)== "CC"||c.substring(0,2)== "99"||c.substring(0,2)== "66"||c.substring(0,2)== "33"||c.substring(0,2)== "00")&&
		(c.substring(2,4)=== "FF"||c.substring(2,4)== "CC"||c.substring(2,4)== "99"||c.substring(2,4)== "66"||c.substring(2,4)== "33"||c.substring(2,4)== "00")&&
		(c.substring(4,6)=== "FF"||c.substring(4,6)== "CC"||c.substring(4,6)== "99"||c.substring(4,6)== "66"||c.substring(4,6)== "33"||c.substring(4,6)== "00")){
		Msg = "<p>This color is Web Safe</p>";
	}else{
		Msg = "<p>This colour is not web safe</p>";
	}
	document.getElementById("web_safety").innerHTML = Msg;
}


function cmyk () {
 var hex = document.getElementById('color_hexadecimal').value;
 var computedC = 0;
 var computedM = 0;
 var computedY = 0;
 var computedK = 0;
 hex = (hex.charAt(0)=="#") ? hex.substring(1,7) : hex;

 
  if((/[0-9a-f]{6}/i.test(hex) == true) &&(hex.length == 6)) {

		 var r = parseInt(hex.substring(0,2),16); 
		 var g = parseInt(hex.substring(2,4),16); 
		 var b = parseInt(hex.substring(4,6),16); 

		 // BLACK
		 if (r==0 && g==0 && b==0) {
		  computedK = 1;
		  return [0,0,0,1];
		 }

		 computedC = 1 - (r/255);
		 computedM = 1 - (g/255);
		 computedY = 1 - (b/255);

		 var minCMY = Math.min(computedC,Math.min(computedM,computedY));

		 computedC = (computedC - minCMY) / (1 - minCMY) ;
		 computedM = (computedM - minCMY) / (1 - minCMY) ;
		 computedY = (computedY - minCMY) / (1 - minCMY) ;
		 computedK = minCMY;
		 document.getElementById('cyan_perc').value = Math.round(computedC*100);
 		 document.getElementById('magenta_perc').value= Math.round(computedM*100);
  		 document.getElementById('yellow_perc').value = Math.round(computedY*100);
  		 document.getElementById('black_perc').value = Math.round(computedK*100);

}
 
}


function cymk_to_hex(){
		 var cyan_ip = parseInt(document.getElementById('cyan_perc').value)/100;
 		 var magenta_ip = parseInt(document.getElementById('magenta_perc').value)/100;
  		 var yellow_ip = parseInt(document.getElementById('yellow_perc').value)/100;
  		 var black_ip = parseInt(document.getElementById('black_perc').value)/100;
  		 if(cyan_ip<=1 && magenta_ip<=1 && yellow_ip<=1 && black_ip<=1){
  		 var red = Math.round((1- (cyan_ip*(1 - black_ip) + black_ip))*255);
  		 var green = Math.round((1 - (magenta_ip*(1 - black_ip) + black_ip))*255);
  		 var blue = Math.round((1- (yellow_ip*(1 - black_ip) + black_ip))*255);
  		 if(red == 0){
  		 	red= "00";
  		 }
  		 if(green == 0){
  		 	green= "00";
  		 }
  		 if(blue == 0){
  		 	blue= "00";
  		 }
  		 
  		 document.getElementById('red').value = red;
  		 document.getElementById('green').value = green;
  		 document.getElementById('blue').value = blue;
  		 document.getElementById('color_hexadecimal').value = rgbToHex(red,green,blue);
  		 rgb_to_perc(red,green,blue);
  		}




  	/*var cyan = (c * 255 * (1-k)) << 16;
    var magenta = (m * 255 * (1-k)) << 8;
    var yellow = (y * 255 * (1-k)) >> 0;

    var black = 255 * (1-k);
    var white = black | black << 8 | black << 16;

    var color = white - (cyan | magenta | yellow );

    return ("#"+padZero(color.toString(16)));*/
}