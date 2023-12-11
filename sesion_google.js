



      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
	  
	  function signOut()
{
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function()
	{
		console.log('signOut');
		
	});
	
}

/*function onSignIn(googleUser)
{
	let profile = googleUser.getBasicProfile();
	auth("login", profile);
	
}

function signOut()
{
	let auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function()
	{
		auth("logout");
		window.location.href = "iniciar_sesion.php";
		
	});
	
}
function auth(action, profile = null)
{
	let data = {UserAction : action};
	if(profile)
	{
		data = 
		{
			$nombre: profile.getGivenName();
			$correo: profile.getEmail();
			
    
			UserAction: action
		};
	}
	
	$.ajax(
	{
			type: "POST",
			url: "iniciar_sesion.php",
			data: data,
			success: function(data)
			{
				let user = JSON.parse(data);
				console.log(data);
				if(user.logged)
				{
				$('#user_given_name').text(profile.getGivenName());
				$('#user_given_email').text(profile.getEmail());
				$('#user_profile').attr(profile.getImageUrl());
				
				if(document.URL === )
				{
					window.location.href = "index.php";
				}
				}else
				{
					alert("la cuenta no esta registrada")
					signOut();
				}
					
			}
		
	}
	
	)
	
}*/