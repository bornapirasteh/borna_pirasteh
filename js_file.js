let blackbtn = document.createElement("button");
blackbtn.innerHTML = "Night mode"
blackbtn.onclick = function(){
    document.getElementById("body").style.backgroundColor = "Black";
    document.getElementById("History").style.backgroundColor = "red";
    document.getElementById("History-s2").style.backgroundColor = "red";
	document.getElementById("History-s3").style.backgroundColor = "red";
	document.getElementById("History-s4").style.backgroundColor = "red";

}
document.body.appendChild(blackbtn);

let whitebtn = document.createElement("button");
whitebtn.innerHTML = "day mode"
whitebtn.onclick = function(){
    document.getElementById("body").style.backgroundColor = "silver";
    document.getElementById("History").style.backgroundColor = "silver";
    document.getElementById("History-s2").style.backgroundColor = "silver";
	document.getElementById("History-s3").style.backgroundColor = "silver";
	document.getElementById("History-s4").style.backgroundColor = "silver";
}
document.body.appendChild(whitebtn);