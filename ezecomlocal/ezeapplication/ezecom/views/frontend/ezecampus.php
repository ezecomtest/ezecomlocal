<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<link href="https://fonts.googleapis.com/css?family=Bayon|Kantumruy|Raleway" rel="stylesheet">

<!DOCTYPE html>
<html lang="en-gb" dir="ltr"
	  class='com_content view-article itemid-1715 j34'>

<head>

  <title><?php echo $title?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
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
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<!-- //META FOR IOS & HANDHELD -->




<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="/plugins/system/t3/base-bs3/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->
	        </head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  
<!-- HEADER -->
	<?php
		$this->load->view('header/header_all');
	?>
<!-- //HEADER -->

  
<!-- MAIN NAVIGATION -->
  <?php 
    $this->load->view('header/main_nav_user_v');
  ?>
<!-- //MAIN NAVIGATION -->

  
<div class="home">

			<!-- HOME SL 1 -->
		<div class="wrap t3-sl t3-sl-1 ">
			

<div class="custom"  >
	<div id="ezeCampus" class="container-fluid bg-color-gray" style="color: #444; font-size: 14px;">
<div class="container module-content-container">
<h2>EzeCampus</h2>
<div class="col-sm-2"> </div>
<div class="col-xs-12 colo-sm-12 col-md-8">
<p>EzeCampus is the name we have given to EZECOM’s support to education in Cambodia. In June of 2010 the first step in the EzeCampus program was announced. In cooperation with the Ministry of Education EZECOM installed fibre optic connection is the top universities of Phnom Penh, giving the students at their university access to high speed internet. Further EZECOM entitled students from all universities to 10% discount on EZECOM Pulse packages for their home.</p>
<h3>This first step in the EzeCampus gave 65 000 students access to high speed internet.</h3>
<p>In August 2012 we announced the second phase of the EzeCampus project: We have provided internet service and computer equipment to 50 general secondary education schools and teacher training institutions in the country. With this agreement EZECOM will provide broader educational resources to classes in various provinces countrywide. It also means that distance learning may become a reality for hundreds of thousands of students nationwide in the near future. The donation in the form of free Internet service and network installments is worth tens of thousands of US dollars.</p>
<h3>This second step expanded the number of students benefiting from this with another ten thousand.</h3>
<p>Regarding the project Paul Blanche-Horgan, CEO of Ezecom, said, “Ezecom always wishes to use its IT capacity to contribute to the country’s development. This plan will allow us to use our 9000-kilometer optical cable network to provide educational opportunities to youth across the country.” Among all our corporate social responsibility projects education takes a special role and we are always looking for ways to contribute to Cambodia’s development.</p>
</div>
<div class="col-sm-2"> </div>
</div>
</div></div>


<div class="custom"  >
	<div class="container-fluid" style="background: #E2E3E4;">
<div class="container module" style="color: #444; font-size: 14px;">
<p><b>Partners:</b></p>
<p style="padding-left: 50px;"><a href="http://northparkcondo.net/"><img class="img-responsive" src="<?php echo base_url();?>images/homepage/northpark_logo.png" alt="Ezecom Call to Action" /></a></p>
<div style="height: 20px; width: 100%;"> </div>
</div>
</div></div>

		</div>
		<!-- //HOME SL 1 -->
	
<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">
		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
			<div class="item-page clearfix">
<!-- Article -->
<article itemscope itemtype="http://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB" />
<!-- Aside -->
<!-- //Aside -->
	<section class="article-content clearfix" itemprop="articleBody">
	</section>
  <!-- footer -->
    <!-- //footer -->	
</article>
<!-- //Article -->
</div>
</div>
<!-- //MAIN CONTENT -->

	</div>
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
  <?php
    $this->load->view('footer/footer_user_v');
  ?>
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

</body>
</html>