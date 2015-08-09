$(document).ready(function(){
	
	 $("#getFriends").on("click", function() {
		$.ajax({
		url: "api/user/",
		dataType: "JSON",		
		success: function( users ) {
			var div = "";
			$.each( users, function( key, user ) {
				div += '<div class="friend" style="padding: 5px;">';
				div += '	<strong>' + user.user_email + '</strong> - <input type="button" data-id="' + user.user_id + '" value="Edit" class="edit">';
				div += '</div>';
			});
			$("#friends").append( div );
		}
		});
	 });

	$( 'input[name=sendRegister]' ).on( "click", function(){		
		$.ajax({
			url: "api/user/",
			type: "POST",
			dataType: "JSON",
			data: 
				 {	
				  user_firstname:$( "input[ name=firstName ]" ).val(),
				  user_lastname: $( "input[ name=lastName ]" ).val(),
				  user_email: $( "input[ name=email ]" ).val(),
				  user_password: $( "input[ name=password ]" ).val()				
				 },
			success: function( response ){ 
				 console.log( "response", response );
				 if(response){
//					  window.location.attr("href")
				//	 window.location.replace("http://localhost/TEST/soc_plus/account.php"); 
				 }
			}
		});
					

	});

	$( '#sendLogin' ).on( "click",function(){
		var emailLogin  = $( "input[ name=loginEmail ]" ).val();
		var passwordLogin = $( "input[ name=loginPassword ]" ).val();

		$.ajax({
			url: "api/login/",
			dataType: "JSON",
			type:"POST",
			data: { user_email: emailLogin, user_password: passwordLogin },
			success: function( response ){
				console.log( "resp", response );
				if(response){
				   window.location.replace("http://localhost/TEST/soc_plus/home.php");
				}
			}
		});
	});	


		

	// $(".error1").on("click", "input[type=button]", function(){
	// 	$(this).parent().fadeOut();
	// });
	// $(".error2").on("click", "input[type=button]", function(){
	// 	$(this).parent().fadeOut();
	// });	
	
	function login(){

	}



	function editDetails( user_id, details ){
		$.ajax({
			url      : "api/user/",
			dataType : "JSON",
			type     : "PUT",
				success  : function( response ){
				console.log( response );
				return( response.message );
			}
		});
	}
	$("#editProfile").on("click", function(){


		var url = "account.php";
		$(location).attr('href',url);
	});

	function getDetails ( details ){
		var form = $("#account-update-form");

		form.find("input[name=editFirstName]").val(details.user_firstname);
		form.find("input[name=editLastName]").val(details.user_lastname);
		form.find("input[name=editEmail]").val(details.user_email);
		form.find("input[name=editBirthday]").val(details.user_birthday);
		form.find("input[name=editGender]").val(details.user_gender);
		form.find("input[name=editWebsite]").val(details.user_website);
		form.find("input[name=editAboutMe]").val(details.user_about);

		console.log(form);
		console.log(details);
	}			
	function getUserDetails( user_id ){
			console.log("user by ",user_id);
			$.getJSON("api/user/" + user_id + "/", function( response ){
				$("#editPopUp").fadeIn;
					console.log( response);
				// createPopUp( response );
			
			});

		}


	// $("input[name=saveChanges]").on("click", function(){
	// 	var form = $("#account-update-form");
	// 	details = {
	// 		form.find("input[name=editFirstName]").val();
	// 		form.find("input[name=editLastName]").val();
	// 		form.find("input[name=editEmail]").val();
	// 		form.find("input[name=editBirthday]").val();
	// 		form.find("input[name=editGender]").val();
	// 		form.find("input[name=editWebsite]").val();
	// 		form.find("input[name=editAboutMe]").val();
	// 	};

	// });
	
});