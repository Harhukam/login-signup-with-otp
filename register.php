<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="clevex - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, clevex, web design, CSS3">
<title>User | Register</title>
<?php include_once'secure/header.php'; ?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>// submit record in database
$(document).ready(function(){

$( "#submitBtn" ).click(function( event ) {
//alert('pressed');
//values

var name=document.getElementById('name').value;
var mobile=document.getElementById('mobile').value;
var dataString = {"name": name, "mobile":mobile }

$.ajax({
type:"post",
url:"signup.php",
data: dataString,
success: function(html) {
$('#feedback').html(html);
}
});
event.preventDefault();
});
});
</script>


<script>// verify OTP
$(document).ready(function(){

$( "#verifyBtn" ).click(function( event ) {

var mobile=document.getElementById('mobile').value;
var otp=document.getElementById('otp').value;
var dataString = {"otp": otp ,"mobile":mobile }

$.ajax({
type:"post",
url:"verifyotp.php",
data: dataString,
success: function(html) {
$('#feedback').html(html);
}
});
event.preventDefault();
});
});
</script>


<style type="text/css">
   .hidden {
        display: none;
   {
   .visible {
        display: block;
   }
</style>

</head>
<body class="login-page">
<div class="login-container">
<div class="login-content text-center animation bounceInDown">
<div class="login-header m-b-30">
<a class="logo" href="components.html" title="clevex">
<img src="images/logo-color.png" alt="clevex" title="clevex">
</a>
</div>


<div class="m-b-30">
<h2>Create an account</h2>

<span id="feedback"> </span>

</div>

<div class="login-form" >
<form method="post" >

<div class="visible" id="signup">

<div class="form-group">
<input name="txtuname" type="text" placeholder="Name" class="form-control input-lg" id="name" required >
</div>

<div class="form-group">
<input name="txtumob" type="text" placeholder="Mobile Number" class="form-control input-lg" id="mobile" pattern="\d{3}[\-]\d{3}[\-]\d{4}"  required onkeyup="check(); return false;">
<span id="message"></span>
</div>

<div class="form-group m-t-30">
<input id="submitBtn" type="submit"  class="btn btn-primary btn-rounded" value="Regsiter" />
</div>

</div>
<!--*********************verify code down*******************-->

<div class="hidden" id="verify">
<div class="form-group">
<input name="txtotp" type="text" placeholder="Enter OTP" class="form-control input-lg" id="otp" pattern="\d{3}[\-]\d{3}[\-]\d{4}"  required onkeyup="check(); return false;">
<span id="message"></span>
</div>	

<div class="form-group m-t-30">
<input id="verifyBtn" type="submit" name="verify" class="btn btn-primary btn-rounded" value="verify" />
</div>

</div>

<!--*********************verify code end*******************-->

<p>Have an account <a href="index.php">Sign in</a></p>
</form>
</div>
</div>
</div>
<!-- include footer here-->
<?php include_once'secure/footer.php'; ?>



<script type="text/javascript"> //use for verify code length
$("#otp").keydown(function(event) {
k = event.which;
if ((k >= 96 && k <= 105) || k == 8) {
if ($(this).val().length == 6) {
if (k == 8) {
return true;
} else {
event.preventDefault();
return false;

}
}
} else {
event.preventDefault();
return false;
}

});
</script>


<script type="text/javascript">
$("#mobile").keydown(function(event) {
k = event.which;
if ((k >= 96 && k <= 105) || k == 8) {
if ($(this).val().length == 10) {
if (k == 8) {
return true;
} else {
event.preventDefault();
return false;

}
}
} else {
event.preventDefault();
return false;
}

});
</script>



<script type="text/javascript">
function check()
{

var pass1 = document.getElementById('mobile');
var message = document.getElementById('message');

var goodColor = "#0C6";
var badColor = "#FF9B37";
var fColor = "#FFFFFF";

if(mobile.value.length!=10){

mobile.style.borderColor = badColor;
message.style.color = badColor;
message.innerHTML = "required 10 digits, match requested format!"
}

if(mobile.value.length==10){

mobile.style.borderColor = goodColor;
message.style.color = goodColor;
message.innerHTML = "Valid Mobile Number"
}


if(mobile.value.length>10){

mobile.style.backgroundColor = badColor;
message.style.color = badColor;
message.innerHTML = "Not a valid Mobile Number"
}


}
</script>




<script type="text/javascript">

 var signupDiv = document.getElementById('signup');
    var verifyDiv = document.getElementById('verify');

    var signBtn = document.getElementById('submitBtn');
    var verifyBtn = document.getElementById('verifyBtn');

    submitBtn.onclick = function() {
        verifyDiv.setAttribute('class', 'visible');
        signupDiv.setAttribute('class', 'hidden');
    };

    verifyBtn.onclick = function() {
        signupDiv.setAttribute('class', 'hidden');
        verifyDiv.setAttribute('class', 'hidden');
    };

</script>

</body>
</html>
