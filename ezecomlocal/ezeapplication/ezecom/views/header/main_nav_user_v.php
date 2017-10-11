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
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=en">Our Company</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=en">Our Partnerships</a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
	  </ul>
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="current active">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=en">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>
</li>

<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=en">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=en">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=en">Traffic Live Camera</a></li>
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
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=en" data-target="#">Our Company </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=en">Our Partnerships</a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
	  </ul>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=en">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>
</li>

<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=en">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=en">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=en">Traffic Live Camera</a></li>
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
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=kh">អំពីក្រុមហ៊ុន</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=kh">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=kh">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=kh">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=kh">Our Partnerships</a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=kh">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=kh">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=kh">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=kh">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=kh">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=kh">Career Opportunities</a></li>
	  </ul>
</li>

<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=kh" data-target="#">អាជីវកម្ម  </a>

</li>
<li class="current active">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=kh">សេវា​អតិថិជន  </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=kh">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=kh">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=kh">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=kh">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=kh" data-target="#">ទំព័រព័ត៌មាន</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events?lang=kh">ព័ត៌មាន  និង ព្រិត្តិការណ៍</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=kh">វិទ្យុ  ផ្សាយផ្ទាល់ </a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=kh">កាមេរ៉ា  ផ្សាយផ្ទាល់ </a></li>
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
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=kh" data-target="#">អំពីក្រុមហ៊ុន</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=kh">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=kh">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=kh">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=kh">Our Partnerships</a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=kh">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=kh">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=kh">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=kh">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=kh">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=kh">Career Opportunities</a></li>
	  </ul>
</li>

<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=kh" data-target="#">អាជីវកម្ម </a>

</li>
<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=kh">សេវា​អតិថិជន  </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=kh">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=kh">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=kh">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=kh">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=kh" data-target="#">ទំព័រព័ត៌មាន</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events?lang=kh">ព័ត៌មាន  និង ព្រិត្តិការណ៍</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=kh">វិទ្យុ  ផ្សាយផ្ទាល់ </a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=kh">កាមេរ៉ា  ផ្សាយផ្ទាល់ </a></li>
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
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=ch">Our Company</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=ch">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=ch">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=ch">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=ch">Our Partnerships</a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=ch">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=ch">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=ch">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=ch">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=ch">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=ch">Career Opportunities</a></li>
	  </ul>
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=ch" data-target="#">Our Services </a>

</li>
<li class="current active">
<li class="dropdown1">
	 <a class="" href="<?php echo base_url()?>support/customer-service?lang=ch" data-target="#">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=ch">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=ch">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=ch">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=ch">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=ch">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=ch">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=ch">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=ch">Traffic Live Camera</a></li>
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
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=ch" data-target="#">Our Company </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=ch">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=ch">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=ch">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=ch">Our Partnerships</a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=ch">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=ch">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=ch">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=ch">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=ch">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=ch">Career Opportunities</a></li>
	  </ul>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=ch" data-target="#">Our Services </a>

</li>
<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<li class="dropdown1">
	 <a class="" href="<?php echo base_url()?>support/customer-service?lang=ch" data-target="#">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=ch">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=ch">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=ch">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=ch">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=ch">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=ch">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=ch">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=ch">Traffic Live Camera</a></li>
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
<li>
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=en">Our Company</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=en">Our Partnerships</a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
	  </ul>
</li>
 
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url();?>ourservices?lang=en" data-target="#">Our Services </a>

</li>
<li class="current active">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=en">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Media Center</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events?lang=en">News and Events</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=en">Radio Live Stream</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=en">Traffic Live Camera</a></li>
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
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=en" data-target="#">Our Company </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=en">Our Partnerships</a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
	  </ul>
</li>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=en" data-target="#">Our Company </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a href="<?php echo base_url();?>our-company/our-partnerships?lang=en">Our Partnerships</a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
	  </ul>
</li>
</li>
<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
	<li class="dropdown1">
		 <a class="" href="<?php echo base_url()?>support/customer-service?lang=en" data-target="#">Support</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
			<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
			<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
			<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
			<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
			<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
			<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
		  </ul>
	</li>
</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
	<li class="dropdown1">
		  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Media Center</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>media-center/news-events?lang=en">News and Events</a></li>
			<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=en">Radio Live Stream</a></li>
			<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=en">Traffic Live Camera</a></li>
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
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("2000");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("2000");
            $(this).toggleClass('open');       
        }
    );
	
});


$(document).ready(function(){	
document.getElementById('partnerships_id').style.display = 'none';
/*document.getElementById('partnerships_mobile').style.display = 'none';*/

$(".partnerships").hover(
        function() {
            $('.dropdown-menu-partnerships', this).not('.in .dropdown-menu-partnerships').stop(true,true).slideDown("2000");
            $(this).toggleClass('open');        
        },
		function() {
            $('.dropdown-menu-partnerships', this).not('.in .dropdown-menu-partnerships').stop(true,true).slideUp("2000");
            $(this).toggleClass('open');       
        }
    );
	
	/* -------------------*/
	$(".partnerships_mobile").click(
        function() {
			document.getElementById('partnerships_mobile').style.display = 'block';
            $('.dropdown-menu-partnerships-mobile', this).not('.in .dropdown-menu-partnerships-mobile').stop(true,true).slideDown("2000");
            $(this).toggleClass('open');        
        }
    );
	
	
	
});
</script>

<style type="text/css">
	#partnerships_id li{
		list-style-type:none;
		color:#444;
	}
	#partnerships_id li a{
		color:#444;
		font-size:15px;
	}
	#partnerships_id li a:hover{
		color:#7961a9;
	}
	.dropdown-menu li a:hover{
		color:#7961a9;
	}
	
	#partnerships_mobile li{
		list-style-type:none;
		color:#444;
	}		
	
</style>