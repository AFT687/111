		var msg = document.getElementsByClassName('msg');
		var f_msg = document.getElementsByClassName('f_msg');
		var data = {};
		for (var k = 0; k < msg.length; k++) {
			msg[k].setAttribute("onclick","a("+k+")");
			data[k] = 0;
		};
		function a(j){
			var f = f_msg[j];
			var i = data[j];
			if (i==0) {
				var timer = setInterval(function(){
					i = i-1;
					if (i>-109) {
						f.style.top = i+"px";
						f.style.height = 108+i+"px";
						data[j] = i;
					}else {
						clearInterval(timer);
					}
				},2)
			} else {
				var timer = setInterval(function(){
					i = i+1;
					if (i<1) {
						f.style.top = i+"px";
						f.style.height = 108+i+"px";
						data[j] = i;
					}
					else {
						clearInterval(timer);
					}
				},5)
			}
		}
		function change(j){
			var r_msg = document.getElementsByClassName('r_msg');
			var fl_1 = document.getElementsByClassName('fl_1');
			for (var i = 0; i < r_msg.length; i++) {
				r_msg[i].style.display = "none";
				fl_1[i].style.color = "#000";
			};
			r_msg[j].style.display = "";
			fl_1[j].style.color = "#ff0000";
		}
		(function(){
			change();
		})()