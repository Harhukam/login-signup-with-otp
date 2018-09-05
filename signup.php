<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
$reg_user->redirect('index.php');
}


if(isset($_POST['name'], $_POST['mobile'])){

	$uname =    $_POST['name'];
	$umob  =    $_POST['mobile'];
	$upass =    rand(100000,1000000);
	$code  =    md5(uniqid(rand()));
	$pic   =    "0.png";
	$userKey = base64_encode($upass);
	
	$stmt = $reg_user->runQuery("SELECT * FROM tbl_user WHERE userMobile=:mob");
	$stmt->execute(array(":mob"=>$umob));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() > 0)
	{
		$feedback = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  Mobile Number allready exists , Please Try another one
			  </div>
	    ";
	     echo $feedback ;
	}


	else
	{

		$number = $umob;
$message = "Your OTP is : $upass";

if(!empty($number)&&!empty($message))
{
$message = urlencode($message);
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"https://smsapi.24x7sms.com/api_2.0/SendSMS.aspx?APIKEY=TyDqvfH3JI4&MobileNo=$number&SenderID=WEBLOG&Message=$message&ServiceName=PROMOTIONAL_HIGH");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output =curl_exec($ch);
curl_close($ch);

       
			if($reg_user->register($uname,$umob,$upass,$code,$pic,$userKey))
			{			
				
              $feedback =" <div class='alert alert-success'>
              <strong> Verify with OTP </strong>
               </div> ";

			  echo $feedback ;
			}
			else
			{
				$feedback ="error";
				echo $feedback ;
			}	

			}	
	}
}

?>