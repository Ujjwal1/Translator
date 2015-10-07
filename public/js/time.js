function from_dropdown(){
	
	var val = document.getElementById('time_from').value;
	if(val == "now"){
		document.getElementById("div_from").style.display = 'none';
		var to = document.getElementById('time_to').value;
		if(to != ""){
			if(to == "date"){
				document.getElementById("result").style.display = 'block';
				var date_to = document.getElementById('date_to').value;
				var month_to = document.getElementById('month_to').value;
				var year_to = document.getElementById('year_to').value;
				var hour_to = document.getElementById('hour_to').value;
				var minute_to = document.getElementById('minutes_to').value;
				var second_to = document.getElementById('seconds_to').value;

				var d = new Date(year_to,month_to,date_to,hour_to,minute_to,second_to);
				var now = new Date();
				var mili = difference(d,now);
				write_output(mili);
			}else{
				document.getElementById("result").style.display = 'none';
			}		
		}
	
	}
	else if(val == "date"){
		document.getElementById("div_from").style.display = 'block';
		var to = document.getElementById('time_to').value;
		if(to != ""){
			if(to == "date"){
				document.getElementById("result").style.display = 'block';
				var date_to = document.getElementById('date_to').value;
				var month_to = document.getElementById('month_to').value;
				var year_to = document.getElementById('year_to').value;
				var hour_to = document.getElementById('hour_to').value;
				var minute_to = document.getElementById('minutes_to').value;
				var second_to = document.getElementById('seconds_to').value;

				var date_from = document.getElementById('date_from').value;
				var month_from = document.getElementById('month_from').value;
				var year_from = document.getElementById('year_from').value;
				var hour_from = document.getElementById('hour_from').value;
				var minute_from = document.getElementById('minutes_from').value;
				var second_from = document.getElementById('seconds_from').value;

				var d1 = new Date(year_from,month_from,date_from,hour_from,minute_from,second_from,'000');
				var d2 = new Date(year_to,month_to,date_to,hour_to,minute_to,second_to,'000');
				
				var ans = difference(d2,d1);
				write_output(ans);

			}
			else if(to == "now"){
				document.getElementById("result").style.display = 'block';
				var date_from = document.getElementById('date_from').value;
				var month_from = document.getElementById('month_from').value;
				var year_from = document.getElementById('year_from').value;
				var hour_from = document.getElementById('hour_from').value;
				var minute_from = document.getElementById('minutes_from').value;
				var second_from = document.getElementById('seconds_from').value;

				var d1 = new Date(year_from,month_from,date_from,hour_from,minute_from,second_from,'000');
				var now = new Date();

				var ans = difference(now,d1);
				write_output(ans);
			}		
		}

		}
}

function from_cal(){
	from_dropdown();
	setInterval(from_dropdown,1000);
}


function to_dropdown(){
	var val = document.getElementById('time_to').value;
	if(val == "now"){
		document.getElementById("div_to").style.display = 'none';
		var from = document.getElementById('time_from').value;
		if(from != ""){
			if(from == "date"){
				var date_from = document.getElementById('date_from').value;
				var month_from = document.getElementById('month_from').value;
				var year_from = document.getElementById('year_from').value;
				var hour_from = document.getElementById('hour_from').value;
				var minute_from = document.getElementById('minutes_from').value;
				var second_from = document.getElementById('seconds_from').value;

				var d = new Date(year_from,month_from,date_from,hour_from,minute_from,second_from,'000');
				var now = new Date();
				var ans = difference(now,d);
				write_output(ans);

			}else{
				document.getElementById("result").style.display = 'none';
			}		
		}

	}else if(val == "date"){
		document.getElementById("div_to").style.display = 'block';
		var from = document.getElementById('time_from').value;
		if(from != ""){
			if(from == "date"){
				var date_to = document.getElementById('date_to').value;
				var month_to = document.getElementById('month_to').value;
				var year_to = document.getElementById('year_to').value;
				var hour_to = document.getElementById('hour_to').value;
				var minute_to = document.getElementById('minutes_to').value;
				var second_to = document.getElementById('seconds_to').value;

				var date_from = document.getElementById('date_from').value;
				var month_from = document.getElementById('month_from').value;
				var year_from = document.getElementById('year_from').value;
				var hour_from = document.getElementById('hour_from').value;
				var minute_from = document.getElementById('minutes_from').value;
				var second_from = document.getElementById('seconds_from').value;

				var d1 = new Date(year_from,month_from,date_from,hour_from,minute_from,second_from,'000');
				var d2 = new Date(year_to,month_to,date_to,hour_to,minute_to,second_to,'000');
				
				ans = difference(d2,d1);
				write_output(ans);

			}
			else if(from == "now"){
				var date_from = document.getElementById('date_from').value;
				var month_from = document.getElementById('month_from').value;
				var year_from = document.getElementById('year_from').value;
				var hour_from = document.getElementById('hour_from').value;
				var minute_from = document.getElementById('minutes_from').value;
				var second_from = document.getElementById('seconds_from').value;

				var d1 = new Date(year_from,month_from,date_from,hour_from,minute_from,second_from,'000');
				var now = new Date();
				var ans = difference(d1,now);
				write_output(ans);
			}		
		}

	}
}

function difference(var_a, var_b){
	return (var_a - var_b);
}

function get_days(var_a){
	
	return Math.round(get_hours(var_a)/24);
}

function get_hours(var_a){
	
	return Math.round(get_minutes(var_a)/60);
}

function get_minutes(var_a){
	
	return Math.round(get_seconds(var_a)/60);
}
function get_seconds(var_a){
	
	return Math.round(var_a);
}

function write_output(mili){
	document.getElementById('result').innerHTML ="<div>"+getExactTime(mili)
												+"</div>"
												+"<div>Days: "+get_days(mili/1000)
												+"<br />Hour: "+get_hours(mili/1000)
												+"<br />minutes: "+get_minutes(mili/1000)
												+"<br />second: "+get_seconds(mili/1000)
												+"</div>";

}

function getExactTime(mili){
	mili = Math.floor(mili/1000);
	if(mili>0){
		
			var year = Math.floor(get_days(mili)/365);
			var months = Math.floor(get_days(mili - year*365*24*60*60)/30);
			var days = Math.floor(get_days(mili - months*24*60*60*30 - year*365*24*60*60));
			var hours = Math.floor(get_hours(mili - months*24*60*60*30 - year*365*24*60*60 - days*24*60*60 - 3600));
			var minutes = Math.floor((mili - months*24*60*60*30 - year*365*24*60*60 - days*24*60*60 - hours*60*60)/60);
			var seconds = Math.floor((mili - months*24*60*60*30 - year*365*24*60*60 - days*24*60*60 - hours*60*60 - minutes*60));
	}else{
		
			var year = Math.ceil(get_days(mili)/365);
			var months = Math.ceil(get_days(mili - year*365*24*60*60)/30);
			var days = Math.ceil(get_days(mili - months*24*60*60*30 - year*365*24*60*60));
			var hours = Math.ceil(get_hours(mili - months*24*60*60*30 - year*365*24*60*60 - days*24*60*60 - 24*3600));
			var minutes = Math.ceil((mili - months*24*60*60*30 - year*365*24*60*60 - days*24*60*60 - hours*60*60 - 24*3600)/60);
			var seconds = Math.ceil((mili - months*24*60*60*30 - year*365*24*60*60 - days*24*60*60 - hours*60*60 - minutes*60 - 24*3600));
	}
	return year+" year "+months+" month "+days+" days "+hours+" hour "
	+minutes+" minute "+seconds+" second";

}
