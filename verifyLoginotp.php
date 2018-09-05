<?php
session_start();
require_once 'class.user.php';

$reg_otp = new USER();

if($reg_otp->is_logged_in()!="")
{
$reg_otp->redirect('index.php');
}


if(isset($_POST['otp'], $_POST['mobile'])){

	$otp =    $_POST['otp'];
    $mob =    $_POST['mobile'];
	
	
if($reg_otp->otpverify($otp,$mob)){			



				$feedback =" <div class='alert alert-success'>
				<strong> Verify Sucessfully </strong>
				 <a href='index.php'>Click here for LogIn</a>
				</div>
				";

				echo $feedback ;
				}
				else
				{
				echo "sorry , Query could no execute...";
				}	
			
}

?>

