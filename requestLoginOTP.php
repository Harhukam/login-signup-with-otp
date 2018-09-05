<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
$reg_user->redirect('index.php');
}


if(isset($_POST['mobile'])){

	$umob  =    $_POST['mobile'];
	
	$stmt = $reg_user->runQuery("SELECT * FROM tbl_user WHERE userMobile=:mob");
	$stmt->execute(array(":mob"=>$umob));
	$rowread = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() > 0)
	{
	
	   $pass= $rowread['userKey'];
	   $uKey = base64_decode($pass);
       $number = $umob;
       $message = "Your OTP is : $uKey ";

            if(!empty($number)&&!empty($message))
            {
            $message = urlencode($message);
            $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,"https://smsapi.24x7sms.com/api_2.0/SendSMS.aspx?APIKEY=TyDqvfH3JI4&MobileNo=$number&SenderID=WEBLOG&Message=$message&ServiceName=PROMOTIONAL_HIGH");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $output =curl_exec($ch);
            curl_close($ch);

                    if($output == true){
                    $feedback = "
                    		      <div class='alert alert-success'>
                    				<button class='close' data-dismiss='alert'>&times;</button>
                    					<strong> OTP Sucessfully sent! </strong> 
                    			  </div>
                    	    ";
                    	     echo $feedback ;
                    
                    }
                   curl_close($ch);
            }
}
}
else
{

$feedback =" <div class='alert alert-success'>
              <strong> Somthing went Wrong! try again </strong>
               </div> ";
echo $feedback ;
			
}

?>