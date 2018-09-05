<?php
error_reporting( ~E_NOTICE );
session_start();
require_once 'class.user.php';
$user_dashboard = new USER();

if(!$user_dashboard->is_logged_in())
{
$user_dashboard->redirect('index');
}

$stmt = $user_dashboard->runQuery("SELECT * FROM  tbl_user WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

 // $url1=$_SERVER['REQUEST_URI'];
 //   header("Refresh: 25; URL=$url1");
    


?> 

<?php include_once'master/header.php'; ?>



<div class="rev_slider_wrapper fullwidthbanner-container" data-alias="clevex-home-page-slider" data-source="gallery" id="rev_slider_8_1_wrapper" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"><!-- START REVOLUTION SLIDER 5.4.5 fullwidth mode -->
<div class="rev_slider fullwidthabanner" data-version="5.4.5" id="rev_slider_8_1" style="display:none;">
<ul><!-- SLIDE  -->
	<li data-delay="8000" data-description="" data-easein="default" data-easeout="default" data-fsmasterspeed="500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-47" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="rev-slider/assets/100x50_0ba57-image-1.jpg" data-title="Slide" data-transition="notransition"><!-- MAIN IMAGE --><img alt="" class="rev-slidebg" data-bgparallax="4" data-bgposition="center center" data-blurend="0" data-blurstart="0" data-duration="10000" data-ease="Bounce.easeOut" data-kenburns="on" data-lazyload="rev-slider/assets/0ba57-image-1.jpg" data-no-retina="" data-offsetend="500 0" data-offsetstart="-100 0" data-rotateend="0" data-rotatestart="0" data-scaleend="120" data-scalestart="100" src="rev-slider/assets/dummy.png" /> <!-- LAYERS --> <!-- LAYER NR. 1 -->
	<h1 class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:1300,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.1,&quot;speed&quot;:800,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;easeOutBounce&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.1,&quot;speed&quot;:500,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="40" data-y="100" id="slide-47-layer-1" style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 36px; font-weight: 600; color: #000000; letter-spacing: 0px;font-family:Montserrat;text-transform:uppercase;">kick start you app</h1>
	<!-- LAYER NR. 2 -->

	<p class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2300,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['453']" data-x="40" data-y="158" id="slide-47-layer-2" style="z-index: 6; min-width: 453px; max-width: 453px; white-space: normal; font-size: 20px; line-height: 30px; font-weight: 500; color: #333333; letter-spacing: 0px;font-family:Montserrat;">Why to start from scratch when you can save time and money?</p>
	<!-- LAYER NR. 3 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2800,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:bottom;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="265" id="slide-47-layer-4" style="z-index: 7; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(255,177,33);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 4 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:4000,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:200px;skX:-85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="280" id="slide-47-layer-5" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 500; color: #333333; letter-spacing: 0px;font-family:Montserrat;">120+ Unique Pages </span> <!-- LAYER NR. 5 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3200,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:bottom;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="335" id="slide-47-layer-6" style="z-index: 9; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(36,216,66);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 6 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:4300,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:200px;skX:-85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="350" id="slide-47-layer-7" style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 500; color: #333333; letter-spacing: 0px;font-family:Montserrat;">24 Nice UI Plugins </span> <!-- LAYER NR. 7 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3600,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:bottom;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="405" id="slide-47-layer-8" style="z-index: 11; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(35,127,255);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 8 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:4600,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:200px;skX:-85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="420" id="slide-47-layer-9" style="z-index: 12; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 500; color: #333333; letter-spacing: 0px;font-family:Montserrat;">Documentation &amp; Support </span> <!-- LAYER NR. 9 -->

	<div class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:4500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;ease&quot;:&quot;easeInBack&quot;}]" data-height="['none','none','none','none']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="image" data-width="['none','none','none','none']" data-x="546" data-y="150" id="slide-47-layer-19" style="z-index: 13;"><img alt="" data-hh="353px" data-lazyload="rev-slider/assets/11a2b-preview.png" data-no-retina="" data-ww="631px" src="rev-slider/assets/dummy.png" /></div>
	</li>
	<!-- SLIDE  -->
	<li data-delay="6500" data-description="" data-easein="default" data-easeout="default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-44" data-masterspeed="1000" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="" data-title="Slide" data-transition="fadetorightfadefromleft"><!-- MAIN IMAGE --><img alt="" class="rev-slidebg" data-bgcolor="#ffc600" data-bgfit="cover" data-bgparallax="off" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazyload="rev-slider/assets/transparent.png" data-no-retina="" src="rev-slider/assets/dummy.png" style="background:#ffc600" /> <!-- LAYERS --> <!-- LAYER NR. 10 -->
	<div class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:1300,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.1,&quot;speed&quot;:1000,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Bounce.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="40" data-y="200" id="slide-44-layer-1" style="z-index: 5; white-space: nowrap; font-size: 48px; line-height: 48px; font-weight: 600; color: #000000; letter-spacing: 0px;font-family:Montserrat;">e-Commerce Store</div>
	<!-- LAYER NR. 11 -->

	<p class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2200,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['453']" data-x="40" data-y="265" id="slide-44-layer-2" style="z-index: 6; min-width: 453px; max-width: 453px; white-space: normal; font-size: 22px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px;font-family:Montserrat;">Build your e-Commerce store easily with all products listing, detail, cart and many other pages supported by clevex.</p>
	<!-- LAYER NR. 12 -->

	<div class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2800,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;ease&quot;:&quot;easeInBack&quot;}]" data-height="['none','none','none','none']" data-hoffset="97" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="image" data-voffset="-2" data-width="['none','none','none','none']" data-x="right" data-y="center" id="slide-44-layer-17" style="z-index: 7;"><img alt="" data-hh="356px" data-lazyload="rev-slider/assets/2da62-laptop.png" data-no-retina="" data-ww="594px" src="rev-slider/assets/dummy.png" /></div>
	</li>
	<!-- SLIDE  -->
	<li data-delay="7980" data-description="" data-easein="default,default" data-easeout="default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-45" data-masterspeed="1000,default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0,0" data-saveperformance="off" data-slotamount="default,default" data-thumb="" data-title="Slide" data-transition="fadefromleft,fadefromright"><!-- MAIN IMAGE --><img alt="" class="rev-slidebg" data-bgcolor="#04cfed" data-bgfit="cover" data-bgparallax="off" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazyload="rev-slider/assets/transparent.png" data-no-retina="" src="rev-slider/assets/dummy.png" style="background:#04cfed" /> <!-- LAYERS --> <!-- LAYER NR. 13 -->
	<div class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:1200,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.1,&quot;speed&quot;:800,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Bounce.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="40" data-y="168" id="slide-45-layer-19" style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 36px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Limitless Possibilities</div>
	<!-- LAYER NR. 14 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:1900,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;easeInSine&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="265" id="slide-45-layer-4" style="z-index: 6; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(86,61,124);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 15 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2900,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:500,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:[-100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="280" id="slide-45-layer-5" style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Bootstrap &amp; Custom Designed UI Elements </span> <!-- LAYER NR. 16 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2100,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;easeInOutElastic&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="336" id="slide-45-layer-6" style="z-index: 8; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(243,129,129);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 17 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3300,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:500,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:[-100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="350" id="slide-45-layer-7" style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">20+ Unique Pages </span> <!-- LAYER NR. 18 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2300,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;ease&quot;:&quot;easeInOutElastic&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="405" id="slide-45-layer-8" style="z-index: 10; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(255,177,33);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 19 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3700,&quot;split&quot;:&quot;words&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:500,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:[-100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="420" id="slide-45-layer-9" style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Easy Slider with Revolution Slider </span> <!-- LAYER NR. 20 -->

	<div class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3800,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['none','none','none','none']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="image" data-width="['none','none','none','none']" data-x="579" data-y="156" id="slide-45-layer-17" style="z-index: 12;"><img alt="" data-hh="364px" data-lazyload="rev-slider/assets/2da62-laptop.png" data-no-retina="" data-ww="575px" src="rev-slider/assets/dummy.png" /></div>
	</li>
	<!-- SLIDE  -->
	<li data-delay="8000" data-description="" data-easein="default,default" data-easeout="default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-51" data-masterspeed="1000,default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0,0" data-saveperformance="off" data-slotamount="default,default" data-thumb="rev-slider/assets/100x50_bike.jpg" data-title="Slide" data-transition="fadefromleft,fadefromright"><!-- MAIN IMAGE --><img alt="" class="rev-slidebg" data-bgparallax="10" data-bgposition="center center" data-blurend="0" data-blurstart="0" data-duration="30000" data-ease="Linear.easeNone" data-kenburns="on" data-lazyload="rev-slider/assets/bike.jpg" data-no-retina="" data-offsetend="0 500" data-offsetstart="0 -500" data-rotateend="0" data-rotatestart="0" data-scaleend="110" data-scalestart="100" src="rev-slider/assets/dummy.png" /> <!-- LAYERS --> <!-- LAYER NR. 21 -->
	<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+7680&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-height="['600']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="shape" data-width="['1920']" data-x="-300" data-y="" id="slide-51-layer-22" style="z-index: 5;background-color:rgba(0,0,0,0.5);"></div>
	<!-- LAYER NR. 22 -->

	<h1 class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:1300,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;+6190&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="40" data-y="120" id="slide-51-layer-1" style="z-index: 6; white-space: nowrap; font-size: 40px; line-height: 36px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;text-transform:uppercase;">Easy Blogging</h1>
	<!-- LAYER NR. 23 -->

	<p class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:1700,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;+5790&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="43" data-y="185" id="slide-51-layer-19" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">A fresh look &amp; feel of the bloggin</p>
	<!-- LAYER NR. 24 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2200,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;+5290&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="41" data-y="266" id="slide-51-layer-4" style="z-index: 8; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(255,177,33);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 25 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2900,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;+4590&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="279" id="slide-51-layer-5" style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Listing &amp; Massonary View </span> <!-- LAYER NR. 26 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2400,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;+5090&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="335" id="slide-51-layer-6" style="z-index: 10; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(3,183,66);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 27 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3200,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;+4290&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="351" id="slide-51-layer-7" style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Blog Detail Page </span> <!-- LAYER NR. 28 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:2600,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;rY:180;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;+4890&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['50']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-width="['50']" data-x="40" data-y="405" id="slide-51-layer-8" style="z-index: 12; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: nowrap; font-size: 24px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(52,152,219);border-radius:100% 100% 100% 100%;"> </span> <!-- LAYER NR. 29 --> <span class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3500,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Back.easeOut&quot;},{&quot;delay&quot;:&quot;+3990&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[-100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['auto']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="text" data-width="['auto']" data-x="110" data-y="421" id="slide-51-layer-9" style="z-index: 13; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Specially Designed Widgets </span> <!-- LAYER NR. 30 -->

	<div class="tp-caption   tp-resizeme" data-frames="[{&quot;delay&quot;:3700,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Elastic.easeInOut&quot;},{&quot;delay&quot;:&quot;+2790&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-height="['none','none','none','none']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="image" data-width="['none','none','none','none']" data-x="519" data-y="113" id="slide-51-layer-17" style="z-index: 14;"><img alt="" data-hh="410px" data-lazyload="rev-slider/assets/2da62-laptop.png" data-no-retina="" data-ww="648px" src="rev-slider/assets/dummy.png" /></div>
	</li>
</ul>

<div class="tp-bannertimer" style="height: 7px; background: rgba(255,255,255,0.25);"></div>
</div>
</div>
<!-- END REVOLUTION SLIDER --></header>
<!--/site header--><!--Site main-->

<main class="site-main">
<section>
<div class="container">
<div class="section-header text-center">
<h2>Covers Amazing Work</h2>

<p class="sub-heading">Open doors unlimited possibilities to build your own template</p>
</div>

<div class="card-wrapper">
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="card card-large hoverable text-center animation slideInLeft"><!-- Card header -->
<div class="card-header"></div>
<!-- /card header --><!-- Card content -->

<div class="card-content">
<h5 class="card-title text-uppercase">Infinite Widgets</h5>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<!-- /card content --><!-- Card footer -->

<div class="card-footer"><a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More</a></div>
<!-- /card footer --></div>
</div>

<div class="col-xs-12 col-sm-4">
<div class="card card-large hoverable text-center animation zoomIn"><!-- Card header -->
<div class="card-header"></div>
<!-- /card header --><!-- Card content -->

<div class="card-content">
<h5 class="card-title text-uppercase">out of the box idea</h5>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<!-- /card content --><!-- Card footer -->

<div class="card-footer"><a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More</a></div>
<!-- /card footer --></div>
</div>

<div class="col-xs-12 col-sm-4">
<div class="card card-large hoverable text-center animation slideInRight"><!-- Card header -->
<div class="card-header"></div>
<!-- /card header --><!-- Card content -->

<div class="card-content">
<h5 class="card-title text-uppercase">out of the box idea</h5>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<!-- /card content --><!-- Card footer -->

<div class="card-footer"><a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More</a></div>
<!-- /card footer --></div>
</div>
</div>
</div>
</div>
</section>

<section class="bg-primary text-white">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-6 center-block"><img alt="..." class="img-responsive animation fadeInRight animation-delay-4 center-block" src="images/shadow-image.png" /></div>

<div class="col-md-6 col-md-pull-6">
<div class="content-section animation fadeInLeft">
<h2 class="text-uppercase fw-extra-bold text-yellow text-darken-2">Build Your App Qicker</h2>

<p class="text-white">With Clevex UI Kit, bring your ideas to life faster and effectively</p>
</div>
</div>
</div>
</div>
</section>

<section>
<div class="container">
<div class="section-header text-center">
<h2>The Awesome Tab System</h2>

<p class="sub-heading">There are more than 5 ways you can implement tabs</p>
</div>

<div class="row">
<div class="col-xs-12">
<div class="tabs-container bt-border-tab">
<ul class="nav nav-tabs nav-justified">
	<li class="active"><a aria-expanded="true" class="clearfix" data-toggle="tab" href="#easy-translation"><span class="tabs-option">Easy Translation</span> </a></li>
	<li><a aria-expanded="false" class="clearfix" data-toggle="tab" href="#unlock-possibilities"><span class="tabs-option">Unlocks Possibilities</span> </a></li>
	<li><a aria-expanded="false" class="clearfix" data-toggle="tab" href="#location-finder"><span class="tabs-option">Location Finder</span> </a></li>
	<li><a aria-expanded="false" class="clearfix" data-toggle="tab" href="#colors"><span class="tabs-option">colors are yours</span> </a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="easy-translation">
<div class="row">
<div class="col-md-6 col-md-push-6 center-block">
<div class="tabs-image animation animation-delay-4 p-t-40 p-r-15 zoomInDown"><img alt="Imac" class="img-responsive center-block" src="images/imac-40.jpg" /></div>
</div>

<div class="col-md-6 col-md-pull-6">
<div class="card remove-m-b animation fadeInLeftTiny">
<div class="card-content p-t-40 p-l-10 p-r-10">
<h3>Bring your ideas to life</h3>

<p>Nam imperdiet ornare enim ac tempor. Suspendisse ac accumsan orci. Proin sed venenatis nulla, quis accumsan tortor. Etiam vitae lorem at mi rutrum euismod et eget nunc. Sed quis nisi quis neque rhoncus venenatis at quis justo sagittis ultrices dolor</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut beatae cum, cupiditate dolores ea, eum explicabo, fuga laudantium neque possimus quia saepe vel veniam vero. Deserunt dolorum nobis repellat?</p>
</div>

<div class="card-footer p-l-10 p-r-10"><a class="btn btn-default btn-sm" href="javascript:void(0)">Read More</a></div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="unlock-possibilities">
<div class="row">
<div class="col-md-6 col-md-push-6 center-block">
<div class="tabs-image animation animation-delay-4 zoomInDown p-t-40 p-r-15"><img alt="Macbook" class="img-responsive center-block" src="images/macbook-40.jpg" /></div>
</div>

<div class="col-md-6 col-md-pull-6">
<div class="card remove-m-b animation fadeInLeftTiny">
<div class="card-content p-t-40 p-l-10 p-r-10">
<h3>Out of the Box Idea</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis scelerisque sollicitudin</p>

<p>This video will give you a walk through on how to create your own age verification template Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis scelerisque sollicitudin</p>
</div>

<div class="card-footer p-l-10 p-r-10"><a class="btn btn-default btn-sm" href="javascript:void(0)">Read More</a></div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="location-finder">
<div class="row">
<div class="col-md-6 col-md-push-6 center-block">
<div class="tabs-image animation animation-delay-4 zoomInDown p-t-40 p-r-15"><img alt="Office" class="img-responsive center-block" src="images/office-40.jpg" /></div>
</div>

<div class="col-md-6 col-md-pull-6">
<div class="card remove-m-b animation fadeInLeftTiny">
<div class="card-content p-t-40 p-l-10 p-r-10">
<h3>Easy Template Builder</h3>

<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p>This video will give you a walk through on how to create your own age verification template Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis scelerisque sollicitudin</p>
</div>

<div class="card-footer p-l-10 p-r-10"><a class="btn btn-default btn-sm" href="javascript:void(0)">Read More</a></div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="colors">
<div class="row">
<div class="col-md-6 col-md-push-6 center-block">
<div class="tabs-image animation animation-delay-4 zoomInDown p-t-40 p-r-10"><img alt="Office" class="img-responsive center-block" src="images/macbook-40.jpg" /></div>
</div>

<div class="col-md-6 col-md-pull-6">
<div class="card remove-m-b animation fadeInLeftTiny">
<div class="card-content p-t-40 p-l-10 p-r-10">
<h3>Easy Template Builder</h3>

<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p>This video will give you a walk through on how to create your own age verification template Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis scelerisque sollicitudin</p>
</div>

<div class="card-footer p-l-10 p-r-10"><a class="btn btn-default btn-sm" href="javascript:void(0)">Read More</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="bg-image layer" style="background-image:url('images/background-picture-1.jpg')">
<div class="container">
<div class="banner-content">
<div class="row">
<div class="col-md-6 col-md-push-6 center-block"><img alt="..." class="img-responsive animation fadeInRight animation-delay-4 center-block m-t-40" src="images/shadow-image-1.png" /></div>

<div class="col-md-6 col-md-pull-6">
<div class="animation fadeInLeft text-white">
<div class="section-header m-b-20">
<h2 class="text-yellow text-darken-1 fw-bold m-b-10">Section with Background</h2>

<p class="sub-heading fw-medium">You can choose b/w colored or image backgrounds for any section</p>
</div>

<div class="m-b-40">
<p>Nam imperdiet ornare enim ac tempor. Suspendisse ac accumsan orci. Proin sed venenatis nulla, quis accumsan tortor. Etiam vitae lorem at mi rutrum euismod et eget nunc. Sed quis nisi quis neque rhoncus venenatis at quis justo sagittis ultrices dolor</p>

<p>ut tristique elit euismod vitae. Suspendisse dictum dui ligula, sed venenatis nisi iaculis sed. Nunc condimentum risus ac massa auctor</p>

<p>quis accumsan tortor. Etiam vitae lorem at mi rutrum euismod et eget nunc. Sed quis nisi quis neque rhoncus venenatis at quis justo sagittis ultrices dolor</p>
</div>

<div class="bottom-btn"><a class="btn btn-warning m-r-20" href="javascript:void(0)">Click now</a> <a class="btn btn-success" href="javascript:void(0)">Click now</a></div>
</div>
</div>
</div>
</div>
</div>
</section>

<section>
<div class="container">
<div class="section-header text-center">
<h2>Our Pricing Plans</h2>

<p class="sub-heading">We have 4 unique ways to put your pricing table</p>
</div>

<div class="price-tables p-tb-40 animation slideInUp animation-delay-2">
<div class="flex-row pt-classic">
<div class="flex-col-sm-4 flex-col-xs-12 bg-amber lighten-4 card package remove-radius">
<div class="package-header bg-amber lighten-2 text-black"><span class="price">25</span>

<h5 class="latter-spacing text-uppercase remove-m-b">personal</h5>
</div>

<ul class="package-items text-grey text-darken-3">
	<li><span>Easy Translation</span></li>
	<li><span>Awesome Google Fonts</span></li>
	<li><span>Hotel Booking System</span></li>
	<li><span>Email Compose Interface</span></li>
	<li><span>Location Finder App</span></li>
</ul>

<div class="package-footer"><a class="btn btn-default bg-primary lighten-1" href="javascript:void(0)">buy now</a></div>
</div>

<div class="flex-col-sm-4 flex-col-xs-12 bg-primary lighten-2 card package remove-radius highlight">
<div class="package-header bg-primary text-white"><span class="price">99</span>

<h5 class="latter-spacing text-uppercase remove-m-b">BUSINESS</h5>
</div>

<ul class="package-items text-white">
	<li><span>Easy Translation</span></li>
	<li><span>Awesome Google Fonts</span></li>
	<li><span>Hotel Booking System</span></li>
	<li><span>Email Compose Interface</span></li>
	<li><span>Location Finder App</span></li>
</ul>

<div class="package-footer"><a class="btn btn-default bg-amber lighten-1 text-black" href="javascript:void(0)">buy now</a></div>
</div>

<div class="flex-col-sm-4 flex-col-xs-12 card package bg-green accent-1 remove-radius">
<div class="package-header bg-green accent-4 text-black"><span class="price">49</span>

<h5 class="latter-spacing text-uppercase remove-m-b">PROFESSIONAL</h5>
</div>

<ul class="package-items text-grey text-darken-3">
	<li><span>Easy Translation</span></li>
	<li><span>Awesome Google Fonts</span></li>
	<li><span>Hotel Booking System</span></li>
	<li><span>Email Compose Interface</span></li>
	<li><span>Location Finder App</span></li>
</ul>

<div class="package-footer"><a class="btn btn-default bg-primary lighten-1" href="javascript:void(0)">buy now</a></div>
</div>
</div>
</div>
</div>
</section>

<section class="bg-amber lighten-2 animation zoomIn animation-duration-10">
<div class="container">
<div class="section-header text-center">
<h2>Our Customers Say</h2>

<p class="sub-heading">Predefined 4 types of testimonial sections</p>
</div>
<!-- Slider Testimonials -->

<div class="owl-carousel owl-theme testimonials classic-testimonial-carousel">
<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>

<div class="item">
<div class="classic-testimonial">
<div class="pic"><img alt="..." class="img-responsive img-lg center-block default-radius" src="images/man-3.jpg" /></div>

<p class="description">Can handle multiple. This needs a sharp memory and an ability to concentrate on multiple things at single time period.</p>

<h6>Jonathan Madano</h6>
<small class="post-designation">Director, Abc LLC</small></div>
</div>
</div>
</div>
</section>

<section>
<div class="container">
<div class="section-header carousel-header">
<h2>Our Latest Work</h2>

<p class="sub-heading">Quick carousel to showcase latest work</p>
</div>
<!-- Slider Logos -->

<div class="owl-carousel works-carousel">
<div class="item animation fadeInRight">
<div class="thumbnails"><img alt="..." class="img-responsive" src="images/card-image-1.jpg" />
<div class="thumbnail-overlay text-center">
<div class="thumbnail-content">
<h4 class="text-uppercase text-amber m-b-20">clevex App</h4>

<div class="icons-wrapper"></div>
</div>
</div>
</div>
</div>

<div class="item animation fadeInRight animation-delay-2">
<div class="thumbnails"><img alt="..." class="img-responsive" src="images/basketball.jpg" />
<div class="thumbnail-overlay text-center">
<div class="thumbnail-content">
<h4 class="text-uppercase text-amber m-b-20">clevex App</h4>

<div class="icons-wrapper"></div>
</div>
</div>
</div>
</div>

<div class="item animation fadeInRight animation-delay-4">
<div class="thumbnails"><img alt="..." class="img-responsive" src="images/background-picture.jpg" />
<div class="thumbnail-overlay text-center">
<div class="thumbnail-content">
<h4 class="text-uppercase text-amber m-b-20">clevex App</h4>

<div class="icons-wrapper"></div>
</div>
</div>
</div>
</div>

<div class="item animation fadeInRight animation-delay-2">
<div class="thumbnails"><img alt="..." class="img-responsive" src="images/card-image-4.jpg" />
<div class="thumbnail-overlay text-center">
<div class="thumbnail-content">
<h4 class="text-uppercase text-amber m-b-20">clevex App</h4>

<div class="icons-wrapper"></div>
</div>
</div>
</div>
</div>

<div class="item animation fadeInRight animation-delay-">
<div class="thumbnails"><img alt="..." class="img-responsive" src="images/card-image-5.jpg" />
<div class="thumbnail-overlay text-center">
<div class="thumbnail-content">
<h4 class="text-uppercase text-amber m-b-20">clevex App</h4>

<div class="icons-wrapper"></div>
</div>
</div>
</div>
</div>

<div class="item animation fadeInRight animation-delay-10">
<div class="thumbnails"><img alt="..." class="img-responsive" src="images/card-image-2.jpg" />
<div class="thumbnail-overlay text-center">
<div class="thumbnail-content">
<h4 class="text-uppercase text-amber m-b-20">My Web Deal</h4>

<div class="icons-wrapper"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>

<?php include_once'master/footer.php'; ?>
