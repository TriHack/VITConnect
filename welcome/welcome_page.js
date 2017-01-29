function signOut(){
	firebase.auth().onAuthStateChanged(function(user) {
    if (user) { 			//if logged in
	  	firebase.auth().signOut().then(function() {
		  //alert("SIGNED OUT");
		  window.location="../login/index.html";
		}, function(error) {
		  alert("ERROR SIGNING OUT");
		});
  	} 
	else {						
	  //alert("NOT LOGGED IN"); //t
	  window.location="../login/index.html";
  	}
});
}