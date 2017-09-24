

<!-- saved from url=(0067)https://www.ezecom.com.kh/index.php/en/media-center/news-and-events -->
<html lang="en-gb" dir="ltr" class="com_content view-category layout-t3_bs3_blankxblog itemid-631 j34 no-touch">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async=""
 src="<?php echo base_url()?>assets/js/analytics.js"></script><script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  

<link href="<?php echo base_url()?>assets/css/css.css" rel="stylesheet">


  <title>
	<?php 
		if($this->lang == 1){
			echo $news_events['content_title_en']; 
		}
		if($this->lang == 2){
			echo $news_events['content_title_kh']; 
		}
		if($this->lang == 3){
			echo $news_events['content_title_ch']; 
		}
		if($this->lang == ""){
			echo $news_events['content_title_en']; 
		}
	?>
	</title>
  <link href="https://www.ezecom.com.kh/index.php/en/media-center/news-and-events?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0">
  <link href="https://www.ezecom.com.kh/index.php/en/media-center/news-and-events?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0">
  <link href="https://www.ezecom.com.kh/templates/t3_bs3_blank/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  
  <?php 
    $this->load->view('header/frontend_header');
  ?>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
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
	        <style type="text/css">.t3-megamenu.animate .animating > .mega-dropdown-menu,.t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {transition-duration: 400ms !important;-webkit-transition-duration: 400ms !important;}@-webkit-keyframes marqueeAnimation-1524024  { 100%  {margin-left:-1580px}}</style></head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  
<!-- HEADER -->
<?php $this->load->view("header/header_all");?> 
<!-- //HEADER -->

  
<!-- MAIN NAVIGATION -->
<?php $this->load->view("header/main_nav_user_v");?> 
<!-- //MAIN NAVIGATION -->



  
<div class="home">

			<!-- HOME SL 1 -->
<div class="wrap t3-sl t3-sl-1 ">

<div class="custom">
	<?php if($this->lang == 1) {?>
	<ul class="nav  nav-pills nav-stacked ">
		<li class="item-1726 "><a href="<?php echo base_url();?>mediacenter?lang=en" style="color:#7961a9">
		<div class="icon_news_even  icon_news_even_active"></div>News<br>and Events</a></li>
		<li class="item-1727"><a href="<?php echo base_url();?>liveradio?lang=en">
		<div class="icon_live_radio"></div>Radio <br>Live Stream</a></li>
		<li class="item-1728"><a href="<?php echo base_url()?>camera_live?lang=en">
		<div class="icon_live_traffic"></div>Traffic <br>Live Camera</a></li>
	</ul>
<?php } ?>
<?php if($this->lang == 2) {?>
	<ul class="nav  nav-pills nav-stacked ">
		<li class="item-1726 "><a href="<?php echo base_url();?>mediacenter?lang=kh" style="color:#7961a9">
		<div class="icon_news_even  icon_news_even_active"></div>ព័ត៌មាន <br>និង ព្រិត្តិការណ៍</a></li>
		<li class="item-1727"><a href="<?php echo base_url();?>liveradio?lang=kh">
		<div class="icon_live_radio"></div>វិទ្យុ <br>ផ្សាយផ្ទាល់</a></li>
		<li class="item-1728"><a href="<?php echo base_url()?>cameralive?lang=kh">
		<div class="icon_live_traffic"></div>កាមេរ៉ា <br>ផ្សាយផ្ទាល់</a></li>
	</ul>
<?php } ?>
<?php if($this->lang == 3) {?>
	<ul class="nav  nav-pills nav-stacked ">
		<li class="item-1726 "><a href="<?php echo base_url();?>mediacenter?lang=ch" style="color:#7961a9">
		<div class="icon_news_even  icon_news_even_active"></div>News<br>and Events</a></li>
		<li class="item-1727"><a href="<?php echo base_url();?>live_radio?lang=ch">
		<div class="icon_live_radio"></div>Radio <br>Live Stream</a></li>
		<li class="item-1728"><a href="<?php echo base_url()?>camera_live?lang=ch">
		<div class="icon_live_traffic"></div>Traffic <br>Live Camera</a></li>
	</ul>
<?php } ?>

<?php if($this->lang == "") {?>
	<ul class="nav  nav-pills nav-stacked ">
		<li class="item-1726 "><a href="<?php echo base_url();?>mediacenter?lang=en" style="color:#7961a9">
		<div class="icon_news_even  icon_news_even_active"></div>News<br>and Events</a></li>
		<li class="item-1727"><a href="<?php echo base_url();?>live_radio?lang=en">
		<div class="icon_live_radio"></div>Radio <br>Live Stream</a></li>
		<li class="item-1728"><a href="<?php echo base_url()?>camera_live?lang=en">
		<div class="icon_live_traffic"></div>Traffic <br>Live Camera</a></li>
	</ul>
<?php } ?>

		</div>
		
</div>
		<!-- //HOME SL 1 -->
<div class="custom">

<div id="news_&_events" class="&quot;container-fluid">
<div id="t3-mainbody" class="container t3-mainbody">

<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
			<div class="blog" itemscope="" >

			<h3>
				<?php 
					if($this->lang == 1){
						echo $news_events['content_title_en']; 
					}
					if($this->lang == 2){
						echo $news_events['content_title_kh']; 
					}
					if($this->lang == 3){
						echo $news_events['content_title_ch']; 
					}
					if($this->lang == ""){
						echo $news_events['content_title_en']; 
					}
				?>
			</h3>
		<div class="blog-items clearfix">
				
			<div class="row">
			<div class="col-sm-12" itemprop="blogPost" itemscope="" style="text-align: justify;font-size: 14px;"><br/>
					<?php 
						if($this->lang == 1){
							echo $news_events['content_description_en']; 
						}
						if($this->lang == 2){
							echo $news_events['content_description_kh']; 
						}
						if($this->lang == 3){
							echo $news_events['content_description_ch']; 
						}
						if($this->lang == ""){
							echo $news_events['content_description_en']; 
						}
					?>
			</div>
		
</div>		
</div>



	</div>
		</div>
	</div>
</div> 
			<!-- HOME SL 5 -->

	
<!-- <div class="custom"  >
	<div class="container-fluid" style="background: #E2E3E4;">
<div class="container module" style="color: #444; font-size: 14px;">
<p><b>Partners:</b></p>
<p style="padding-left: 50px;"><a target="_new" href="http://northparkcondo.net/"><img class="img-responsive" src="<?php echo base_url();?>images/homepage/northpark_logo.png" alt="Ezecom Call to Action" /></a></p>
<div style="height: 20px; width: 100%;"> </div>
</div>
</div></div>	 -->	

</div>
<!-- HOME SL 5 -->
    <div class="wrap t3-sl t3-sl-5 ">
      <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="12">
        <?php foreach($feature_content as $feature){ ?>
          <a target="_blank" href="<?php echo base_url('newsdetail/').$feature->content_title ?>"><?php echo $feature->content_title.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?></a>
        <?php } ?>
      </marquee>

    </div>
    <!-- //HOME SL 5 -->
</div>


  
<!-- FOOTER -->
	<?php $this->load->view('footer/footer_user_v');?>
<!-- //FOOT NAVIGATION -->
       


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

</div>


</body></html>