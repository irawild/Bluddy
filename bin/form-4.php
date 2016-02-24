<?php	
	if(empty($_POST['nome']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['idade']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['email4']) || empty($_POST['password']) || empty($_POST['passwordconfirm']))
	{
		return false;
	}
	
	$nome = $_POST['nome'];
	$ = $_POST[''];
	$ = $_POST[''];
	$idade = $_POST['idade'];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$email4 = $_POST['email4'];
	$password = $_POST['password'];
	$passwordconfirm = $_POST['passwordconfirm'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Bluddy.";
	$email_body = "You have received a new message. \n\n".
				  "Nome: $nome \n: $ \n: $ \nIdade: $idade \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \nEmail4: $email4 \nPassword: $password \nPasswordconfirm: $passwordconfirm \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email4";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>