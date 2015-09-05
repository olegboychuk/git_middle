<?php require_once dirname( __FILE__ ) . "/includes/header.php"; ?> 
<main>
	<div class="wrapper">
		<div id="wellcome">
			<h1>Welcome</h1>
			<p>To Sociality+, JohnBrise's social network</p>
			<p>Share your memories, connect with others, make new friends.</p>
		</div>
		<aside>
			<div id="register-form">
				<h1>Sing up</h1>
				<div class="error1" style="display:none;">
					<input type="button" value="X">
					<div class="name_error" style="display:none;" ><p>Error<br>Please enter a name!</p></div>
				 	<div class="email_error" style="display:none;" ><p>Error<br>Email not correct.</p></div>
					<div class="password_error" style="display:none;"><p>Error<br>Password not correct!</p></div> 
				</div>
				<input type="text" name="firstName" id="firstName" class="input" placeholder="First Name"><br>
				<input type="text" name="lastName" id="lastName" class="input" placeholder="Last Name"><br>
				<input type="email" name="email" id="email" class="input" placeholder="Email"><br>
				<input type="password" name="password" id="password" class="input" placeholder="Password"><br>
				<input type="password" name="confirmPassword" id="confimPassword" class="input" placeholder="Confirm Paswword"><br>

				<input type="button" id="sendRegister" name="sendRegister" value="register">
			</div>
			<div id="login-form">
				<div class="error2" style="display:none;">
				<input type="button" value="X">
				<div class="email_error" style="display:none;" ><p>Error<br>Email not correct.</p></div>
				<div class="password_error" style="display:none;"><p>Error<br>Password not correct!</p></div>
				</div>
				<input type="email" name="loginEmail" id="email2" class="input" placeholder="Email"><br>
				
				<input type="password" name="loginPassword" id="password2" class="input" placeholder="Password"><br>

				<input type="submit" id="sendLogin" value="login">
			</div>
		</aside>
	</div>
</main>
<?php require_once dirname( __FILE__ ) . "/includes/footer.php"; ?> 