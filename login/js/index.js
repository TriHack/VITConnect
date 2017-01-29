'use strict';

$(function () {
    $.material.init();
    $('#login-wrapper .btn-fab').click(function (e) {
        e.stopPropagation();
        $(this).parents('.card').toggleClass('active');
    });
});

//find the authentication status..whether logged in or not
firebase.auth().onAuthStateChanged(function(user) {
  if (user) { 			//if logged in
    //alert("LOGGED IN"); //t
	$("#login_email").val("");
	$("#login_password").val("");
	$("#signup_email").val("");
	$("#signup_password").val("");
	window.location="../welcome/index.php";
  	} 
	else {						
	  //alert("NOT LOGGED IN"); //t	
  	}
});
//implement snakebar for the the notifications
//sign up 
function signUpButtonClick() {
	/* 
	auth/email-already-in-use
	auth/invalid-email
	auth/weak-password
	*/
	//add null checking
	var register_email = $("#signup_email").val();
	var register_password = $("#signup_password").val();
	firebase.auth().createUserWithEmailAndPassword(register_email, register_password).catch(function(error) {
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  if (errorCode == 'auth/weak-password') {
    	alert('THE PASSWORD IS TOO WEAK. PLEASE REGISTER AGAIN.');
  	  } 
	  else if(errorCode == 'auth/email-already-in-use') {
		alert('EMAIL ALREADY IN USE.');
      } 
	  else if(errorCode == 'auth/invalid-email'){
		alert('INVALID EMAIL-ID');
	  }
	  $("#signup_email").val("");
	  $("#signup_password").val("");
	});
}

//login
function loginButtonClick() {
	/*
	auth/invalid-email
	auth/user-disabled
	auth/user-not-found
	auth/wrong-password
	*/
	//add null checking
	var login_email = $("#login_email").val();
	var login_password = $("#login_password").val();
	firebase.auth().signInWithEmailAndPassword(login_email, login_password).catch(function(error) {
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  if (errorCode == 'auth/user-not-found') {
    	alert('USER NOT FOUND');
  	  } 
	  else if(errorCode == 'auth/user-disabled') {
		alert('USER NOT ALLOWED. PLEASE CONTACT DEPARTMENT HEAD.');
      } 
	  else if(errorCode == 'auth/invalid-email'){
		alert('INVALID EMAIL. PLEASE TRY AGAIN.');
	  }
	  else if(errorCode == 'auth/wrong-password'){
		alert('WRONG PASSWORD.');
	  }
	  $("#login_email").val("");
	  $("#login_password").val("");
	});
}
