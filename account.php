
<?php require_once dirname( __FILE__ ) . "/includes/header.php"; ?> 
<div id="account-page">
		<div class="wrapper">
			<div id="left-content">
				<div id="account-update-details">
					<div id="account-update-details-info">
						<div id="account-update-details-img"><img src="images/default-img.jpg" height="30" width="30"></div>
						<p>Genegal Settings</p>
					</div>	
					<h1>Edit Youre Profile Information</h1>
					<div id="account-update-form">
						<div class="labels"><label for="edit-firstName">First Name:</label></div>
						<div class="inputs">
							<input type="text" name="edit-firstName" id="edit-firstName"><br>
							<span>Enter your first name</span>
						</div>
						

						<div class="labels"><label for="edit-lastName">Last Name:</label></div>
						<div class="inputs">
							<input type="text" name="edit-lastName" id="edit-lastName"><br>
							<span>Enter your last name</span>
						</div>
						
							

						<div class="labels"><label for="edit-email">Email:</label></div>
						<div class="inputs">
							<input type="email" name="edit-email" id="edit-email"><br>
							<span>E-mail will not be displayed </span>
						</div>
						


						<div class="labels"><label for="edit-birthdate">Birth Date:</label></div>
						<div class="inputs">
							<input type="date" name="edit-birthdate" id="edit-birthdate"><br>
							<span>Select the date you were born</span>
						</div>
						

						<div class="labels"><label for="edit-gender">Gender:</label></div>
						<div class="inputs">
							<select name="edit-gender" id="edit-gender">
								<option selected>No Gender</option>
								<option>Male</option>
								<option>Female</option>
							</select><br>
						<span>Select your gender (male or female)</span>	
						</div>	
						


						<div class="labels"><label for="edit-location">Location:</label></div>
						<div class="inputs">
							<input type="taxt" name="edit-location" id="edit-location"><br>
							<span>Where do you live?</span>
						</div>
						


						<div class="labels"><label for="edit-website ">Web Site:</label></div>
						<div class="inputs">
							<input type="text" name="edit-website" id="edit-website"><br>
							<span>If you have a blog, persnal page, enter it</span>
						</div>
						


						<div class="labels"><label for="edit-abotMe">About Me:</label></div>
						<div class="inputs textarea">
							<textarea name="edit-abotMe" id="edit-abotMe"></textarea><br>
							<span style="margin-left:150px;">About you (160 characters or less)</span>
						</div>
						

					</div>
				<div id="button-edit"><button class="edit-button">Save chanses</button></div>
				</div>
			</div>
			<div id="user-info">
				<div id="account-settings-info">
					<h2>Settings</h2>
					<div class="account-some-settings-info">
						<strong><p><a href="#">General</a></p>	</strong>
						<p><a href="#">Profile Picture</a></p>
						<p><a href="#">Password</a></p>
					</div>	
				</div>
			</div>
		</div>	
	</div>	
<?php require_once dirname( __FILE__ ) . "/includes/footer.php"; ?> 