<!-- MAIN NAVIGATION -->
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<?php
	$lang = $this->input->get("lang");
?>
  
<?php if($lang == "en") {?>
<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level4">
<li >
<a href="<?php echo base_url();?>homepage?lang=en">Home</a>
</li>
<li class="">
<a href="<?php echo base_url();?>ourcompany?lang=en">Our Company</a>
 
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="current active">
<a href="<?php echo base_url();?>customerservice?lang=en">Customer Service  </a>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li>
<a href="<?php echo base_url();?>contact-us?lang=en">Contact Us </a>

</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level4">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=en" data-target="#">Home </a>
</li>
<li class="<?=($active=='Our Company')?'current active':null?>" mega-align-left data-id="571" data-level="1" data-alignsub="left" data-hidesub="1">
<a class="" href="<?php echo base_url()?>ourcompany?lang=en" data-target="#">Our Company </a>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="<?=($active=='Customer Service')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<a class="" href="<?php echo base_url()?>customerservice?lang=en" data-target="#">Customer Service  </a>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Contact Us')?'current active':null?>">
<a class="" href="<?php echo base_url();?>contact-us?lang=en" data-target="#">Contact Us </a>

</li>
</ul>
</div>

		</div>

	</div>
</nav>
<!-- //MAIN NAVIGATION -->

<?php } ?>

<?php if($lang == "kh") {?>

<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level1">
<li >
<a href="<?php echo base_url();?>homepage?lang=kh">ទំព័រដើម</a>
</li>
<li class="">
<a href="<?php echo base_url();?>ourcompany?lang=kh">អំពីក្រុមហ៊ុន </a>
 
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=kh" data-target="#">អាជីវកម្ម  </a>

</li>
<li class="current active">
<a href="<?php echo base_url();?>customerservice?lang=kh">សេវា​អតិថិជន   </a>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center?lang=kh" data-target="#">ទំព័រព័ត៌មាន</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events">ព័ត៌មាន  និង ព្រិត្តិការណ៍</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">វិទ្យុ  ផ្សាយផ្ទាល់ </a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">កាមេរ៉ា  ផ្សាយផ្ទាល់ </a></li>
  </ul>
</li>

</li>
<li>
<a href="<?php echo base_url();?>contact-us?lang=kh">ទំនាក់ទំនង </a>

</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level1">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=kh" data-target="#">ទំព័រដើម </a>
</li>
<li class="<?=($active=='Our Company')?'current active':null?>" mega-align-left data-id="571" data-level="1" data-alignsub="left" data-hidesub="1">
<a class="" href="<?php echo base_url()?>ourcompany?lang=kh" data-target="#">អំពីក្រុមហ៊ុន </a>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=kh" data-target="#">អាជីវកម្ម </a>

</li>
<li class="<?=($active=='Customer Service')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<a class="" href="<?php echo base_url()?>customerservice?lang=kh" data-target="#">សេវា​អតិថិជន  </a>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center?lang=kh" data-target="#">ទំព័រព័ត៌មាន</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events">ព័ត៌មាន  និង ព្រិត្តិការណ៍</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">វិទ្យុ  ផ្សាយផ្ទាល់ </a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">កាមេរ៉ា  ផ្សាយផ្ទាល់ </a></li>
  </ul>
</li>

</li>
<li class="<?=($active=='Contact Us')?'current active':null?>">
<a class="" href="<?php echo base_url();?>contact-us?lang=kh" data-target="#">ទំនាក់ទំនង </a>

</li>
</ul>
</div>

		</div>

	</div>
</nav>


<?php } ?>

<?php if($lang== "ch") {?>
<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level2">
<li >
<a href="<?php echo base_url();?>homepage?lang=ch">Home</a>
</li>
<li class="">
<a href="<?php echo base_url();?>ourcompany?lang=ch">Our Company</a>
 
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=ch" data-target="#">Our Services </a>

</li>
<li class="current active">
<a href="<?php echo base_url();?>customerservice?lang=ch">Customer Service  </a>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li>
<a href="<?php echo base_url();?>contact-us?lang=ch">Contact Us </a>

</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level2">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=ch" data-target="#">Home </a>
</li>
<li class="<?=($active=='Our Company')?'current active':null?>" mega-align-left data-id="571" data-level="1" data-alignsub="left" data-hidesub="1">
<a class="" href="<?php echo base_url()?>ourcompany?lang=ch" data-target="#">Our Company </a>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=ch" data-target="#">Our Services </a>

</li>
<li class="<?=($active=='Customer Service')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<a class="" href="<?php echo base_url()?>customerservice?lang=ch" data-target="#">Customer Service  </a>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Contact Us')?'current active':null?>">
<a class="" href="<?php echo base_url();?>contact-us?lang=ch" data-target="#">Contact Us </a>

</li>
</ul>
</div>

		</div>

	</div>
</nav>
<!-- //MAIN NAVIGATION -->

<?php } ?>

<?php if($lang == "") {?>
	<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level3">
<li >
<a href="<?php echo base_url();?>homepage?lang=en">Home</a>
</li>
<li class="">
<a href="<?php echo base_url();?>ourcompany?lang=en">Our Company</a>
 
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="current active">
<a href="<?php echo base_url();?>customerservice?lang=en">Customer Service  </a>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center?lang=en">Media Center</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events">News and Events</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Traffic Live Camera</a></li>
  </ul>
</li>

</li>
<li>
<a href="<?php echo base_url();?>contact-us?lang=en">Contact Us </a>

</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level3">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=en" data-target="#">Home </a>
</li>
<li class="<?=($active=='Our Company')?'current active':null?>" mega-align-left data-id="571" data-level="1" data-alignsub="left" data-hidesub="1">
<a class="" href="<?php echo base_url()?>ourcompany?lang=en" data-target="#">Our Company </a>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="<?=($active=='Customer Service')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<a class="" href="<?php echo base_url()?>customerservice?lang=en" data-target="#">Customer Service  </a>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
	<li class="dropdown1">
		  <a class="" href="<?php echo base_url();?>media-center?lang=en">Media Center</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>media-center/news-events">News and Events</a></li>
			<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
			<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Traffic Live Camera</a></li>
		  </ul>
	</li>
</li>
<li class="<?=($active=='Contact Us')?'current active':null?>">
<a class="" href="<?php echo base_url();?>contact-us?lang=en" data-target="#">Contact Us </a>

</li>
</ul>
</div>

		</div>

	</div>
</nav>
<!-- //MAIN NAVIGATION -->


<?php } ?>

<script type="text/javascript">
	$(document).ready(function(){
    $(".dropdown1").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>