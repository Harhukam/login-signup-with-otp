<?php
require_once 'db.php';
//include_once'assset/functionsmore/extrafunctions.php';
class USER
{	

private $conn;

public function __construct()
{
$database = new Database();
$db = $database->dbConnection();
$this->conn = $db;
}

public function runQuery($sql)
{
$stmt = $this->conn->prepare($sql);
return $stmt;
}

public function lasdID()
{
$stmt = $this->conn->lastInsertId();
return $stmt;
}




public function register($uname,$umob,$upass,$code,$pic,$userKey)
{
try
{							
$password = md5($upass);
$stmt = $this->conn->prepare("INSERT INTO tbl_user(userName,userMobile,userPass,tokenCode,userPhoto,userKey) 
                     VALUES(:user_name, :user_mob, :user_pass, :active_code,:user_pic,:user_key)");
$stmt->bindparam(":user_name",$uname);
$stmt->bindparam(":user_mob",$umob);
$stmt->bindparam(":user_pass",$password);
$stmt->bindparam(":active_code",$code);
$stmt->bindparam("user_pic",$pic);
$stmt->bindparam("user_key",$userKey);
$stmt->execute();	
return $stmt;
}
catch(PDOException $ex)
{
echo $ex->getMessage();
}
}


public function login($mob,$otp)
{
try
{
$stmt = $this->conn->prepare("SELECT * FROM tbl_user WHERE userMobile=:mob");
$stmt->execute(array(":mob"=>$mob));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

if($stmt->rowCount() == 1)
{
if($userRow['userStatus']=="Y")
{
if($userRow['userPass']==md5($otp))
{
$_SESSION['userSession'] = $userRow['userID'];
return true;
}
else
{
header("Location: index.php?error");
exit;
}
}
else
{
header("Location: index.php?inactive");
exit;
}	
}
else
{
header("Location: index.php?error");
exit;
}		
}
catch(PDOException $ex)
{
echo $ex->getMessage();
}
}



public function is_logged_in()
{
if(isset($_SESSION['userSession']))
{
return true;
}
}


public function redirect($url)
{
header("Location: $url");
}


public function logout()
{
session_destroy();
$_SESSION['userSession'] = false;
}



public function otpverify($otp,$mob)
{
try
{

$pass = md5($otp);
$stmt = $this->conn->prepare("SELECT * FROM tbl_user  WHERE userMobile=:mob AND  userPass=:otp");
$stmt->execute(array(":otp"=>$pass,":mob"=>$mob));
$stmt->execute();	


$stmt = $this->conn->prepare("UPDATE tbl_user SET userStatus='Y' WHERE userMobile=:mob AND  userPass=:otp");
$stmt->bindParam(":mob",$mob);
$stmt->bindParam(":otp",$pass);
$stmt->execute();

return $stmt;
}
catch(PDOException $ex)
{
echo $ex->getMessage();
}
}






//*************** update social code***************

public function uptsocial($id,$fb,$ins,$tw,$yt,$go)
{
	
	try
	{

	$stmt= $this->conn->prepare("UPDATE social SET facebook=:a1,instagram=:a2,twitter=:a3,youtube=:a4,google=:a5 WHERE social_id=:pid");
	$stmt->bindParam(':a1',$fb);
	$stmt->bindParam(':a2',$ins);
	$stmt->bindParam(':a3',$tw);
	$stmt->bindParam(':a4',$yt);
	$stmt->bindParam(':a5',$go);
	$stmt->bindParam(':pid',$id);
	$stmt->execute();
	return $stmt;
	}
	catch(PDOException $ex)
	{
	echo $ex->getMessage();
	}
}







 /* function siteURL()    //use for print sitename/url
{
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'].'/';
return $protocol.$domainName;

}*/


function send_mail($email,$message,$subject)
{						
require_once('assset/mailer/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP(); 
$mail->SMTPDebug  = 0;                     
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";      
$mail->Port       = 465;   
$mail->AddAddress($email);
$mail->IsHTML(true);
$mail->Username="reborysgh@gmail.com";  
$mail->Password="Tata#123";            
$mail->SetFrom('reborysgh@gmail.com','Email from Website');
$mail->AddReplyTo("info@mywebdeal.in","My Web Deal");
$mail->Subject    = $subject;
$mail->MsgHTML($message);
//$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
$mail->Send();
}


//********end class********
} //end user class