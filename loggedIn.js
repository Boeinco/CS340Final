$(document).ready(function(){
			$.ajax({
				method: "POST",
				url: "loggedIn.php",
				dataType: 'json',
				data: {}
			})
				.done(function( msg ) {
					//alert("Done Message" + JSON.stringify(msg));
					if(msg == 'Not logged in'){
						$(location).attr('href', 'index.php');
						return;
					}
					$('#userLogged').text(msg);
					
				})
				.fail(function( msg) {
					//alert("Fail Message " + JSON.stringify(msg));
					$(location).attr('href', 'index.php');
			});
});