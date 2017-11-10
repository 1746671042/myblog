
var a = 0;
	var t = 0;
	var f = document.getElementsByClassName('circle')[0];
	var t = setInterval("bo1()", 1500);
	window.onload = function() {
		
		//返回顶部按钮样式
		document.getElementById("return-top").onmouseover = function(){
			this.style.backgroundImage = "url(./images/13.png)";
		}
		document.getElementById("return-top").onmouseout = function(){
			this.style.backgroundImage = "url(./images/12.png)";
		}
		document.getElementById("return-top").onclick = function(){
			document.body.scrollTop = 0;
		}

		//监控滚动条
		window.onscroll = function(){
			if(document.body.scrollTop > 300) {//判断滚动条的位置
				document.getElementById("return-top").style.display = "block";//显示返回顶部按钮
			}else {
				document.getElementById("return-top").style.display = "none";//隐藏返回顶部按钮
			}
		};
	}
	function lunbo(num) {   //按钮变色
		a = num;
		var btn = document.getElementById("circle").getElementsByTagName("img")[0];
		for(var i = 1; i <= 3; i++) {   //改变图片
			var li = document.getElementById("circle").getElementsByTagName("li")[i - 1];
			li.style.backgroundColor = "#91ECFA";
			if(num == i) {
				btn.src = "images/slide" + i + ".png";
				li.style.backgroundColor = "#BBBBBB";
			    }
			
	        }
		}
	
	function bo1() {   //右
		if(a >= 3) {
			a = 0;
		}
		a++;
		lunbo(a);
	}
	function bo2() {  //左
		if(a <= 1) {
			a = 3;
		}
		a--;
		lunbo(a);
	}
	

var i=0;
var j = true;
function lunbo1() {
	var ul = $(".notice");
	var liFirst = ul.find('li:first');
	if(i==4){
		j=false;
	}
	if(i==0){
		j = true;
	}
	height = 0;
	var arr = [0,11,22];
	height = "-"+arr[i];
	if(j){
		i++;
	}else{
		i--;
	}
	ul.animate({
		top: height
	});
}
setInterval("lunbo1()", 1500)
		
	





