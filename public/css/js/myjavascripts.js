var header = document.querySelector("h1")
var title = document.querySelector('.quote')
function getRandomColor() {
		var letters="012345678910ABCDEF";
		var color = '#';

		for (var i = 0; i <6; i++) {
			color += letters[Math.floor(Math.random()*16)];
		}
		return color;

}

function changeheadercolor(){
		colorInput = getRandomColor()
		header.style.color = colorInput;
		title.style.color = colorInput;

}

setInterval("changeheadercolor()",500);

title.addEventListener("click",function(){


   title.innerHTML="<h1><center><strong>fuck this shit <br> i m out</strong></center> </h1>";


})

title.addEventListener("mouseout",function(){


   title.innerHTML="<div><h1><center>practice recycling!!!<br>earn money... <br>help others !!!<br>get paid yourself...</center> </h1></div>";


})
