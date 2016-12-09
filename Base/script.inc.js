//Java Script

// Variables

var imgnum;
var curupd = new Array(0.3,0.0002);
var lstupd = new Array("15/8/16",0.2,0.0001);
var updhis = new Array("Created 14/8/16 at 19:29","Updated 15/8/16 at 07:53 to 0.2 0.0002","Updated 15/8/16 at 08:22 to 0.3");
var imgty = "jpg";
var imgty2 = "png";
var imgy = 2;
var imgx = 3;
var imgw = 3;
var imgz = 1;
var container = document.getElementById("container");
var box1 = document.getElementById("box1");
var box2 = document.getElementById("box2");
var box3 = document.getElementById("box3");
var not1 = document.getElementById("not");
var is1 = document.getElementById("not");
var not2 = document.getElementById("not");
var d = new Date();
var hours = d.getHours();
var mins = d.getMinutes();
var secs = d.getSeconds();
if (hours < 12) {
	var greeting = "Good Morning";
} else if (hours > 12) {
	var greeting = "Good Afternoon";
} else {
	var greeting = "Welcome";
}

// Script

/*if (box2.childNodes[0].src == "../Images/img (1).jpg") {
	box1.src = "../Images/img (3).png";
	box3.src = "../Images/immg (2).jpg";
} else if (box2.childNodes[0].src == "../Images/img (2).jpg") {
	box1.src = "../Images/img (1).jpg";
	box3.src = "../Images/img (3).png";
} else if (box2.childNodes[0].src == "../Images/img (3).png") {
	box1.src = "../Images/img (2).jpg";
	box3.src = "../Images/img (1).jpg";
}
*/
// Functions
function printTime() {
	document.getElementById("clock").innerHTML = "<p class='time'>"+hours+":"+mins+":"+secs+"</p>";
	return hours;
}



function chgimgjs(to, from) {

	var img = document.getElementById(from);
	var sub1 = document.getElementById("is1");
	var sub2 = document.getElementById("not1");
	var sub3 = document.getElementById("not2");
	img.src = to;

	if (imgy == 1) {
		imgy += 1;
		sub1.src = "../Images/img (1).jpg";
		sub2.src = "../Images/img (3).png";
		sub3.src = "../Images/img (2).jpg";
	} else if (imgy == 2) {
		imgy += 1;
		imgty = "png";
		sub1.src = "../Images/img (2).jpg";
		sub2.src = "../Images/img (1).jpg";
		sub3.src = "../Images/img (3).png";

	} else if (imgy == 3) {
		imgy -= 2;
		imgty = "jpg";
		sub1.src = "../Images/img (3).png";
		sub2.src = "../Images/img (2).jpg";
		sub3.src = "../Images/img (1).jpg";
	} else {
		img.alt = " Sorry";
	}
}

function chgimgpjs(to, from) {

	var img = document.getElementById(from);
	var sub1 = document.getElementById("is1");
	var sub2 = document.getElementById("not1");
	var sub3 = document.getElementById("not2");
	img.src = to;

	if (imgx == 3) {
		imgx -= 1;
		imgty2 = "jpg";
		sub1.src = "../Images/img (3).png";
		sub2.src = "../Images/img (2).jpg";
		sub3.src = "../Images/img (1).jpg";
	} else if (imgx == 2) {
		imgx -= 1;
		imgty2 = "jpg";
		sub1.src = "../Images/img (2).jpg";
		sub2.src = "../Images/img (1).jpg";
		sub3.src = "../Images/img (3).png";

	}  else if (imgx == 1) {
		imgx += 2;
		imgty2 = "png";
		sub1.src = "../Images/img (1).jpg";
		sub2.src = "../Images/img (3).png";
		sub3.src = "../Images/img (2).jpg";
	} else {
		img.alt = " Sorry";
	}
}

function change() {
	var x = document.getElementsByTagName("input");
	x.style.color = "#AAAAAA";
}

function inlarge(name) {

	if (name == "is1") {
		var thing = document.getElementById("is1");
		thing.style.height = "68px";
		thing.style.width = "88px";
		thing.parentNode.style.top = "-53px";
		thing.style.zIndex = "3";
	} else if (name == "not1") {
		var thing = document.getElementById("not1")
		thing.style.height = "58px";
		thing.style.width = "68px";
		thing.parentNode.style.top = "1px";
		thing.style.zIndex = "3";
	} else if (name == "not2") {
		var thing = document.getElementById("not2")
		thing.style.height = "58px";
		thing.style.width = "68px";
		thing.parentNode.style.top = "-109px";
		thing.style.zIndex = "3";
	}

}

function deinlarge(name) {

	if (name == "is1") {
		var thing = document.getElementById("is1");
		thing.style.height = "60px";
		thing.style.width = "80px";
		thing.parentNode.style.top = "-50px";
		thing.style.zIndex = "2";
	} else if (name == "not1") {
		var thing = document.getElementById("not1")
		thing.style.height = "50px";
		thing.style.width = "60px";
		thing.parentNode.style.top = "5px";
		thing.style.zIndex = "1";
	} else if (name == "not2") {
		var thing = document.getElementById("not2")
		thing.style.height = "50px";
		thing.style.width = "60px";
		thing.parentNode.style.top = "-105px";
		thing.style.zIndex = "1";
	}

}

function gopic(to, from) {

	var img = document.getElementById("chgimg");
	var sub1 = document.getElementById("is1");
	var sub2 = document.getElementById("not1");
	var sub3 = document.getElementById("not2");
	imgnum = from;
	img.src = to;

	if (imgnum == 1) {
		imgnum += 1;
		sub1.src = "../Images/img (1).jpg";
		sub2.src = "../Images/img (3).png";
		sub3.src = "../Images/img (2).jpg";
	} else if (imgnum == 2) {
		imgnum += 1;
		imgty = "png";
		sub1.src = "../Images/img (2).jpg";
		sub2.src = "../Images/img (1).jpg";
		sub3.src = "../Images/img (3).png";

	} else if (imgnum == 3) {
		imgnum -= 2;
		imgty = "jpg";
		sub1.src = "../Images/img (3).png";
		sub2.src = "../Images/img (2).jpg";
		sub3.src = "../Images/img (1).jpg";
	} else {
		img.alt = " Sorry";
	}
}
function screen_resize() {
	var styleLink = document.getElementById('pagelayout');
		if (window.innerWidth <= 900) {
			styleLink.setAttribute("href", "mobile.layout.css");
		} else if (window.innerWidth <= 1200) {
			styleLink.setAttribute("href", "tablet.layout.css");
		} else {
			styleLink.setAttribute("href", "computer.layout.css");
		}
}
