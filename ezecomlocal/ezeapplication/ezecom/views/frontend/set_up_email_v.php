
<!-- saved from url=(0051)https://www.ezecom.com.kh/index.php/en/set-up-email -->
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-1730 j34 no-touch"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async="" src="<?php echo base_url()?>assets/js/analytics.js">
</script><script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  

<link href="<?php echo base_url()?>assets/js/css.css" rel="stylesheet">

	  <!--<base href="https://www.ezecom.com.kh/index.php/en/set-up-email">--><base href=".">
  
 
  <title><?php echo $title;?></title>
  <link href="<?php echo base_url();?>favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <?php
    $this->load->view('header/frontend_header');
  ?>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
</script>

	
<!-- META FOR IOS & HANDHELD -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>
<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="YES">
<!-- //META FOR IOS & HANDHELD -->




<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="/plugins/system/t3/base-bs3/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->
	<style type="text/css">.t3-megamenu.animate .animating > .mega-dropdown-menu,.t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {transition-duration: 400ms !important;-webkit-transition-duration: 400ms !important;}@-webkit-keyframes marqueeAnimation-3152225  { 100%  {margin-left:-1580px}}</style></head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  
<!-- HEADER -->
  <?php
    $this->load->view('header/header_all');
  ?>
<!-- //HEADER -->

  
<!-- MAIN NAVIGATION -->
<?php $this->load->view("header/main_nav_user_v")?> 
<!-- //MAIN NAVIGATION -->
<div class="home">
<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
						<div class="item-page clearfix">
<!-- Article -->
<article itemscope="" itemtype="http://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB">


<!-- Aside -->
<!-- //Aside -->
	<section class="article-content clearfix" itemprop="articleBody">
		<p>		</p><div class="moduletable">
							<h2 class="emailheader">Don't you have Ezecom email account ?</h2>
    <h2 class="emailheader">Signup is easy and free
!<br></h2>
    <div class="container module-content-container">
        
      <form action="https://www.ezecom.com.kh/index.php/en/index.php" method="post" name="formsetupeamilaccount" id="formsetupeamilaccount">   
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-1"></div>
            <div class="col-xs-12 col-sm-12 col-md-3">Your Name: <br>
              <input id="txt_cus_name" type="text" name="txt_cus_name" class="input_css" required=""><span style="color:red">*</span></div>
                <div class="col-xs-12 col-sm-12 col-md-4">    
                			User Name: <span style="font-size:80%;">(Show on your application form)</span><br>
                  <input id="txt_cus_ref_num" type="text" name="txt_cus_ref_num" class="input_css" required="">
                                <span style="color:red">*</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4"></div> 
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="col-xs-12 col-sm-12 col-md-1"></div>
                        <div class="col-xs-12 col-sm-12 col-md-3">
                        
                            Phone Number: 
                            <br>
                            <input name="txt_tel" type="text" class="input_css" id="txt_tel" value="" required=""> <span style="color:red">*</span>
                        </div>    
                        <div class="col-xs-12 col-sm-12 col-md-6">    
                            Request Email Address: 
                            <br>
                            <input name="txt_nickname" type="text" placeholder="@ezecom.com.kh" class="input_css" id="txt_nickname" required="">
                            <strong>@ezecom.com.kh <span style="color:red">*</span>
                            <input name="hiddFullEmail" type="hidden" id="hiddFullEmail" value="" required="">
                            </strong>
                           
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2"></div>
                    </div>                   
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-1"></div>
                        <div class="col-xs-12 col-sm-12 col-md-3">
                        
                            Password : 
                            <br>
                            <input id="txt_pass" type="password" name="txt_pass" class="input_css"> <span style="color:red">*</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">    
                            Confirm Password
: 
                            <br>
                            <input id="tx_confirm_pass" type="password" name="tx_confirm_pass" class="input_css"> <span style="color:red">*</span>
                           
                        
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-md-4"></div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                            	<input type="button" value="SEND" onclick="javascript:get_ms();" class="btn btn-primary" id="ebl_submit">
                                    &nbsp;&nbsp;&nbsp; <input onclick="clear_form_elements3();" type="button" value="RESET" class="btn btn-danger">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4"></div>
                    </div>            
        	</form>
        </div>
	</div>
	<script type="text/javascript" language="javascript">
	
	   function get_ms() {
                var isok3 = false;
                var arrayMessages1 = new Object();

                arrayMessages1['your_name'] = "Please enter your name!";
                arrayMessages1['user_name'] = "Please enter user name!";
                arrayMessages1['your_tele_number'] = "Please enter telephone number!";
                arrayMessages1['your_tele_number_incorrect'] = "Telephone number is incorrect please enter again!";
                arrayMessages1['request_email_address'] = "Please enter request email address!";
                arrayMessages1['request_email_address_incorrect'] = "Request email address incorrect please enter again!";
                arrayMessages1['password_not_match'] = "Your password do not match please enter more carefully!";
                arrayMessages1['password'] = "Please enter password!";
                arrayMessages1['confirm_password'] = "please enter confirm password!";
               

                isok3 = ValidForm2(arrayMessages1);
                if(isok3==true){
                        var poststr = "yourname=" + encodeURI( document.getElementById("txt_cus_name").value )
                        + "&username=" + encodeURI( document.getElementById("txt_cus_ref_num").value )
                        + "&tele=" + encodeURI(document.getElementById("txt_tel").value)
                        + "&requestemail=" + encodeURI(document.getElementById("txt_nickname").value)
                        + "&password=" + encodeURI(document.getElementById("txt_pass").value);
						//alert(poststr);
                        sendRequest3(poststr);
                        clear_form_elements3();
                        //reloadCaptcha('1');
                }
	}	
	 
	</script>

		</section></article></div>
	<p></p>	

  <!-- footer -->
    <!-- //footer -->
<!-- //Article -->
</div>
		</div>
		<!-- //MAIN CONTENT -->
	</div>
</div> 
			<!-- HOME SL 5 -->
		
<div class="wrap">
	<div style="max-width:100%;max-height:7%;background-color:#E2E3E4">
		<marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="12">
			<?php foreach($feature_content as $feature){ ?>
				<a target="_blank" href="<?php echo base_url('newsdetail/').strtolower(str_replace(' ', '-' ,$feature->content_title)) ?>"><?php echo $feature->content_title.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?></a>
			<?php } ?>
		</marquee>
	</div>
</div>
		<!-- //HOME SL 5 -->
	
</div>
<!-- FOOTER -->
  <?php $this->load->view("footer/footer_user_v")?>

<!-- //FOOTER -->

<!-- BACK TOP TOP BUTTON -->
 
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
 
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
 
</div>
 
<script type="text/javascript">
 
(function($) {
 
	// Back to top
 
	$('#back-to-top').on('click', function(){
 
		$("html, body").animate({scrollTop: 0}, 500);
 
		return false;
 
	});
 
})(jQuery);
 
</script>
 
<!-- BACK TO TOP BUTTON -->
</body></html>