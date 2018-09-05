// submit record in database

$(document).ready(function(){

$( "#submitBtn" ).click(function( event ) {
//alert('pressed');
//values

var mobile=document.getElementById('mobile').value;
var dataString = {"mobile":mobile }

$.ajax({
type:"post",
url:"requestLoginOTP.php",
data: dataString,
success: function(html) {
$('#feedback').html(html);
}
});
event.preventDefault();
});
});



// verify OTP
/*

$(document).ready(function(){

$( "#verifyBtn" ).click(function( event ) {

var mobile=document.getElementById('mobile').value;
var otp=document.getElementById('otp').value;
var dataString = {"otp": otp ,"mobile":mobile }

$.ajax({
type:"post",
url:"verifyLoginotp.php",
data: dataString,
success: function(html) {
$('#feedback').html(html);
}
});
event.preventDefault();
});
});

*/
