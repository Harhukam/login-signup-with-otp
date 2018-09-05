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
			//if($reg_user->register($uname,$umob,$upass,$code,$pic))
			//{			
				
			$password = md5($upass);
			$stmt = $reg_user->runQuery("INSERT INTO tbl_user(userName,userMobile,userPass,tokenCode,userPhoto) 
			 VALUES(:user_name, :user_mob, :user_pass, :active_code,:user_pic)");
			$stmt->bindparam(":user_name",$uname);
			$stmt->bindparam(":user_mob",$umob);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":active_code",$code);
			$stmt->bindparam("user_pic",$pic);
			if($stmt->execute())
            {
               
              $feedback =" <div class='alert alert-success'>
              <strong><span class='glyphicon glyphicon-info-sign'> Register Sucessfully </span> </strong>
               </div> ";

			  echo $feedback ;
			}
			else
			{
				echo "sorry , Query could no execute...";
			}		
	}
}

?>