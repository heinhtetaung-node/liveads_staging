// JavaScript Document

function clickclear(thisfield, defaulttext, color) {
	if (thisfield.value == defaulttext) {
		thisfield.value = "";
		
			color = "222222";
		
		thisfield.style.color = "#" + color;
	}
}
function clickrecall(thisfield, defaulttext, color) {
	if (thisfield.value == "") {
		thisfield.value = defaulttext;
		
			color = "888888";
		
		thisfield.style.color = "#" + color;
	}
}
