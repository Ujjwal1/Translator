
function copy_clipboard(val){
	document.getElementById("screen").value=val;
}

function value_to_clipboard(val){
	document.getElementById("screen").value+=val;
}

function evaluate_result() { 
	try 
	{ 
		var val = document.getElementById("screen").value;
		var res = val.split("pow");
		var root = val.split("√");
		if(res[1] != null){

			copy_clipboard(Math.pow(res[0],res[1]));
		}else if(root[1] != null){
			copy_clipboard(Math.pow(root[1],1/root[0]));
		}
		else{
			copy_clipboard(eval(document.getElementById("screen").value));	
		}
	  	
	} 
	catch(e) 
	{
	  copy_clipboard('Error') 
	} 
}

function sin(){
	copy_clipboard(Math.sin(document.getElementById("screen").value)) 
}

function minus_one(){
	var num = (document.getElementById("screen").value)*(-1);
	copy_clipboard(num) 
}

function cos(){
	copy_clipboard(Math.cos(document.getElementById("screen").value)) 
}

function tan(){
	copy_clipboard(Math.tan(document.getElementById("screen").value)) 
}

function pow(){
	var num = document.getElementById("screen").value;
	copy_clipboard(Math.pow(num,2));
}

function sqrt(){
	copy_clipboard(Math.sqrt(document.getElementById("screen").value)) 
}

function factorial(){
	var num = document.getElementById("screen").value;
	var i, fac;
	fac = 1;
	for(i=1;i <= num;i++){
		fac *= i;
	}
	copy_clipboard(fac);
}

function ln(){
	copy_clipboard(Math.log(document.getElementById("screen").value)) 
}

function log10(){
	copy_clipboard(Math.log10(document.getElementById("screen").value)) 
}

function abs(){
	copy_clipboard(Math.abs(eval(document.getElementById("screen").value))) 
}



function percentage_function(){
	copy_clipboard(eval(document.getElementById("screen").value+"/100")) 
}