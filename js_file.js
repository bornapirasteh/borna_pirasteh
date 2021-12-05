

$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});

var showPar= document.createElement("button");
showPar.innerHTML = "show paragraph"
	$(document).ready(function(){
  $(showPar).click(function(){
    $("p").show();
  });
});

document.body.appendChild(showPar);

var hidePic= document.createElement("button");
hidePic.innerHTML = "hide picture"
	$(document).ready(function(){
  $(hidePic).click(function(){
    $("img").hide();
  });
});

document.body.appendChild(hidePic);

var showPic= document.createElement("button");
showPic.innerHTML = "show picture"
	$(document).ready(function(){
  $(showPic).click(function(){
    $("img").show();
  });
});

document.body.appendChild(showPic);

var blackbtn = document.createElement("button");
blackbtn.innerHTML = "Night mode"
blackbtn.onclick = function(){
    document.getElementById("body").style.backgroundColor = "Black";
    document.getElementById("History").style.backgroundColor = "red";
    document.getElementById("History-s2").style.backgroundColor = "red";
	document.getElementById("History-s3").style.backgroundColor = "red";
	document.getElementById("History-s4").style.backgroundColor = "red";

}
document.body.appendChild(blackbtn);

var whitebtn = document.createElement("button");
whitebtn.innerHTML = "day mode"
whitebtn.onclick = function(){
    document.getElementById("body").style.backgroundColor = "silver";
    document.getElementById("History").style.backgroundColor = "silver";
    document.getElementById("History-s2").style.backgroundColor = "silver";
	document.getElementById("History-s3").style.backgroundColor = "silver";
	document.getElementById("History-s4").style.backgroundColor = "silver";
}
document.body.appendChild(whitebtn);

