

<header id="t3-header" class="container t3-header">
	<div class="row">
     <div class="col-xs-12 col-sm-4">
                    
         <!-- LANGUAGE SWITCHER -->
      <div class="languageswitcherload">
        <div class="mod-languages">

	        <ul class="lang-inline">
						<li class="lang" dir="ltr" id="2" onclick="change_language(this.id)">
							 <img src="<?php echo base_url()?>images/km.gif" alt="KhmerCambodia" title="KhmerCambodia">
			      </li>
				    <li class="lang" dir="ltr" id="3" onclick="change_language(this.id)">
				       <img src="<?php echo base_url()?>images/zh.gif" alt="chinese" title="chinese">
			      </li>
				    <li class="lang" dir="ltr" id="1" onclick="change_language(this.id)">
				       <img src="<?php echo base_url()?>images/en.gif" alt="English (UK)" title="English (UK)">
			      </li>
				  </ul>
        </div>
     </div>
      <!-- //LANGUAGE SWITCHER -->
      </div>
                        
 <!-- LOGO -->
  <div class="col-xs-12 col-sm-8 logo">
    <div class="logo-image">
      <a href="<?php echo base_url(); ?>" title="EZECOM Cambodia Premuim Internet Service Provider">
        <img class="logo-img" src="<?php echo base_url()?>images/ezecom-logo.png" alt="EZECOM Cambodia Premuim Internet Service Provider">
        <span>EZECOM Cambodia Premuim Internet Service Provider</span></a>
            <small class="site-slogan"></small>
    </div>
  </div>
  <!-- //LOGO -->
	</div>

</header>
<style type="text/css">
  .lang{
    cursor: pointer;
  }
</style>

<script type="text/javascript">

  function change_language(id){
     var base_url= "<?php echo base_url(); ?>";
     var url = window.location.pathname;
            $.ajax({
                type:"POST",
                url: base_url+ "set_session_lang",
                data:{id:id},
                success:function(dta)
                {
                  if(id==1){
                    window.location.href = url+"?lang=en";
                  }
                  if(id==2){
                    window.location.href = url+"?lang=kh";
                  }
                  if(id==3){
                    window.location.href = url+"?lang=ch";
                  }
                  
                }
            });
  }

    // prevent right click 

        /*$(document).ready(function() {
            $("body").bind("contextmenu",function(){
                return false;
                });
         } ); */
        
</script>
