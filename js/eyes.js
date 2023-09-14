let  eye = document.getElementsByClassName("eye-ball");

document.onmousemove = function(){
	let width = window.innerWidth;
	let x = event.clientX;
	let a = x / width;
	a= a *100;
	let height = window.innerHeight;
	let y = event.clientY;
	let b = y / height;
	b= b *100;
	eye[0].style.cssText = "left: " + a + "%; top: " + b + "%;" + "transform:translate(-"+a+"%,-"+b+"%)";
	eye[1].style.cssText = "left: " + a + "%; top: " + b + "%;" + "transform:translate(-"+a+"%,-"+b+"%)"; 
}