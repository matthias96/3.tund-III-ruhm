<?php

		// LOGIN.PHP
		//echo $_POST["email"];
		//echo $_POST["password"];
		// errori muutujad peavad igal juhul olemas olema
		$email_error = "";
		$password_error= "";	
		$username_error= "";
		$email1_error= "";
		$password1_error="";
		//kontrollime et keegi vajutas input nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST")  {
			//echo "keegi vajutas nuppu";
			
			//vajutas login nuppu
			if(isset($_POST["login"])){	
				echo "vajutas login nuppu";
				
				
			
				//kontrollin et e-post ei oleks tühi
				
				if (empty($_POST["email"]) ) {
					$email_error = "See väli on kohustuslik";
					
					
				}
				
				//kontrollin, et parool ei ole tühi
				if (empty($_POST["password"]) ) {
					$password_error= "Kirjuta parool";
				} else {
					// kui oleme siia jõudnud, siis parool ei ole veel tühi
					// kontrollin
					if(strlen($_POST["password"]) < 8) {
					$password_error= "Peab olema vähemalt 8 tähemärki pikk"; 
					}
					
				}
			
			
			
			
			
			
			// keegi vajutas create nuppu	
			}elseif(isset($_POST["create"])){
			
				echo "vajutas create nuppu";
				
				if (empty($_POST["username"]) ) {
					$username_error = "Kirjuta oma kasutajanimi";
				
				}	
				if (empty($_POST["email1"]) ) {
					$email1_error = "Kirjuta oma email";
				}
				if (empty($_POST["password1"]) ) {
					$password1_error= "Kirjuta parool";
				} else {
				
				if(strlen($_POST["password1"]) < 8) {
					$password1_error= "Peab olema vähemalt 8 tähemärki pikk"; 
					}
					
				}
			}
		}
		

?>
<?php
	$page_title = "Sisselogimise leht";
	$page_file_name="login.php";

?>
<?php require_once("../header.php"); ?>

	<h2>Login</h2>
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"><?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"><?php echo $password_error;?> <br><br>
			<input name="login" type="submit" value="Log in"> 
		</form>
		
	<h2>Loo kasutaja</h2>
		<form action="login.php" method="post"> 
			<input name="username" type="text" placeholder="Kasutaja"><?php echo $username_error; ?><br></br>  
			<input name="email1" type="email" placeholder="E-post"><?php echo $email1_error;?> <br></br>
			<input name="password1" type="password" placeholder="Parool"><?php echo $password1_error;?> <br></br>
			<input name="create" type="submit" value="Loo kasutaja">
		</form>
<?php require_once("../footer.php"); ?>	