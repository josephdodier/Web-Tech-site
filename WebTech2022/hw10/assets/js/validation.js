// JavaScript Document
function checkName(nameValue,nameId) {
	
	var pattern=/[a-zA-Z]+$/;
	var msg;
	
	if (nameValue.match(pattern)) {
		msg='Data is valid';
	}
	else {
		msg='Invalid data entered';
	}
	
	document.getElementById(nameId+'Help').innerHTML=msg;
	
}

function checkEmail(emailValue) {
	
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	
	if(emailValue.match(mailformat)) {
		
		msg="Email is valid";
		console.log("Valid");
		
	} else {
		
		msg="Email is invalid";
		console.log("invalid");
	
	}
	
	document.getElementById('emailHelp').innerHTML=msg;

}

function checkUName(unameValue,unameId) {
	
	var pattern=/[a-zA-Z]{8,}/;
	var msg;
	
	console.log("username: "+unameValue);
	
	if (unameValue.match(pattern)) {
		msg='Data is valid';
	}
	else {
		msg='Invalid data entered';
	}
	
	document.getElementById(unameId+'Help').innerHTML=msg;
	
}

function checkComments(cnameValue,cnameId) {
	
	var pattern=/[!@#$%^&*]/;
	var msg;
	
	console.log("comments: "+cnameValue);
	
	if (cnameValue.match(pattern)) {
		msg='Invalid data entered';
	}
	else {
		msg='Data is valid';
	}
	
	document.getElementById(cnameId+'Help').innerHTML=msg;
	
}