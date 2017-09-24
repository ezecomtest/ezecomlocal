<!-- saved from url=(0062)https://www.ezecom.com.kh/index.php/en/media-center/live-radio -->
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-849 j34 no-touch">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>


    <link href="<?php echo base_url() ?>assets/css/css.css" rel="stylesheet">



    <!--<base href="https://www.ezecom.com.kh/index.php/en/media-center/live-radio">-->
    <base href=".">

    <title>Live Radio</title>
    <link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

	<?php
	$this->load->view('header/frontend_header');
	?>
    <script type="text/javascript">
        jQuery(window).on('load', function () {
            new JCaption('img.caption');
        });
        jQuery(document).ready(function () {
            jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
        });
    </script>


    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/stylesheet">
        @-webkit-viewport {
            width: device-width;
        }

        @-moz-viewport {
            width: device-width;
        }

        @-ms-viewport {
            width: device-width;
        }

        @-o-viewport {
            width: device-width;
        }

        @viewport {
            width: device-width;
        }
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
    <style type="text/css">.t3-megamenu.animate .animating > .mega-dropdown-menu, .t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {
            transition-duration: 400ms !important;
            -webkit-transition-duration: 400ms !important;
        }

        @-webkit-keyframes marqueeAnimation-8326345 {
            100% {
                margin-left: -1580px
            }
        }</style>
</head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->


    <!-- HEADER -->
	<?php $this->load->view("header/header_all"); ?>
    <!-- //HEADER -->


    <!-- MAIN NAVIGATION -->
	<?php $this->load->view("header/main_nav_user_v"); ?>
    <!-- //MAIN NAVIGATION -->


    <div class="home">
    <?php
    $lan = $this->lang;
    ?>
          <!-- HOME SL 1 -->
      <div class="wrap t3-sl t3-sl-1 ">
       <?php if($lan == 1) {?>
        <ul class="nav  nav-pills nav-stacked ">
        <li class="item-1726">
        <a href="<?php echo base_url()?>mediacenter?lang=<?php echo $this->get_lang ?>">
            <div class="icon_news_even"></div>News<br>and Events</a></li>
            <li class="item-1727"><a href="<?php echo base_url()?>liveradio?lang=<?php echo $this->get_lang ?>" style="color:#7961a9">
            <div class="icon_live_radio icon_live_radio_active"></div>Radio <br>Live Stream</a></li>
            <li class="item-1728"><a href="<?php echo base_url()?>cameralive?lang=<?php echo $this->get_lang ?>">
            <div class="icon_live_traffic"></div>Traffic <br>Live Camera</a></li>
        </ul>
      <?php } ?>
      <?php if($lan == 2) {?>
        <ul class="nav  nav-pills nav-stacked ">
        <li class="item-1726">
        <a href="<?php echo base_url()?>mediacenter?lang=<?php echo $this->get_lang ?>">
            <div class="icon_news_even"></div>ព័ត៌មាន <br>និង ព្រិត្តិការណ៍</a></li>
            <li class="item-1727"><a href="<?php echo base_url()?>liveradio?lang=<?php echo $this->get_lang ?>" style="color:#7961a9">
            <div class="icon_live_radio icon_live_radio_active"></div>វិទ្យុ <br>ផ្សាយផ្ទាល់</a></li>
            <li class="item-1728"><a href="<?php echo base_url()?>cameralive?lang=<?php echo $this->get_lang ?>">
            <div class="icon_live_traffic"></div>កាមេរ៉ា <br>ផ្សាយផ្ទាល់</a></li>
        </ul>
      <?php } ?>
    
      <?php if($lan == 3) {?>
        <ul class="nav  nav-pills nav-stacked ">
        <li class="item-1726">
        <a href="<?php echo base_url()?>mediacenter?lang=<?php echo $this->get_lang ?>">
            <div class="icon_news_even"></div>News<br>and Events</a></li>
            <li class="item-1727"><a href="<?php echo base_url()?>liveradio?lang=<?php echo $this->get_lang ?>" style="color:#7961a9">
            <div class="icon_live_radio icon_live_radio_active"></div>Radio <br>Live Stream</a></li>
            <li class="item-1728"><a href="<?php echo base_url()?>cameralive?lang=<?php echo $this->get_lang ?>">
            <div class="icon_live_traffic"></div>Traffic <br>Live Camera</a></li>
        </ul>
      <?php } ?>

        <?php if($lan == "") {?>
        <ul class="nav  nav-pills nav-stacked ">
        <li class="item-1726">
        <a href="<?php echo base_url()?>mediacenter?lang=<?php echo $this->get_lang ?>">
            <div class="icon_news_even"></div>News<br>and Events</a></li>
            <li class="item-1727"><a href="<?php echo base_url()?>liveradio?lang=<?php echo $this->get_lang ?>" style="color:#7961a9">
            <div class="icon_live_radio icon_live_radio_active"></div>Radio <br>Live Stream</a></li>
            <li class="item-1728"><a href="<?php echo base_url()?>cameralive?lang=<?php echo $this->get_lang ?>">
            <div class="icon_live_traffic"></div>Traffic <br>Live Camera</a></li>
        </ul>
      <?php } ?>
    
      </div>
        <!-- //HOME SL 1 -->


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
                                <h1 style="text-align: center;">
									<?php
									if ($lan == 1) {
										echo 'Radio Live Stream';
									} elseif ($lan == 2) {
										echo '<h1 style="text-align: center; font-family: \'Bayon\', cursive;">វិទ្យុផ្សាយផ្ទាល់</h1>';
									} else {
										echo 'Radio Live Stream';
									}
									?>
                                </h1>
                                <p><span style="font-size: 12.92px; line-height: 16.796px;">    </span></p>
                                <div class="moduletable">

                                    <!--#Start playter-contant-->

                                    <div class="col-xs-12 col-sm-12 col-md-7">
                                        <div id="radio_player">
                                            <h3 id="channel_label" class="text-capitalize">
                                                <?=$default_radio['radio_info_station']?>
                                            </h3>
                                            <br>
                                            <div id="mediaspace">
                                                <embed type="application/x-shockwave-flash" src="<?=base_url()?>player/player.swf" width="370"
                                                       height="24" style="undefined" id="ply" name="ply" bgcolor="#fff" quality="high" allowfullscreen="true"
                                                       allowscriptaccess="always" wmode="opaque">
                                            </div>

                                            <div name="mediaspacesilverlight" id="mediaspacesilverlight" style="display:none;"></div>
                                        </div>

                                        <h3>Radio Schedule</h3>
                                        <br>
                                        <ul class="radio-schedule-list">
											<?php
											foreach ($schedules as $schedule) { ?>
                                                <li>
                                                    <a href="elFindermaster/files/radio_schedule/<?php echo $schedule->radio_schedule_pdf; ?>"
                                                       style="color:grey;font-size: 15px;" target="_blank">

                                                        <div style="width: 16px;float: left;padding-top: 5px;">
                                                            <img src="<?php echo base_url() ?>images/radio/FAQ-bullet.png">
                                                        </div>
														<?php echo $schedule->radio_schedule_title; ?>
                                                    </a>
                                                </li>
											<?php } ?>
                                        </ul>
                                    </div>


                                    <!--#end playter-contant-->
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <!-- <div class="padding-top-20"></div> -->
                                        <!--#Start logo-station-->
                                        <div class="row logo-station">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h3>Radio Station <br><br>
                                                    <small> Click on a station to start listening</small>
                                                </h3>
                                                <!-- <div class="border-under"></div> -->
                                            </div>

											<?php foreach ($radio_group as $group) { ?>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <h4 class="padding-top-10 color-gray"><?php echo $group->radio_group_name; ?></h4>
                                                </div>
												<?php
												foreach ($radio as $row) {
													if ($row->radio_info_group_id == $group->radio_group_id) {
														//separate link into rtmp & file

														$string = $row->radio_info_rtmp;
                                                        if($string == NULL){

                                                        }else{
                                                            $temp_str = explode('/', $string);
                                                            $rtmp = $temp_str[0] . '//' . $temp_str[2] . '/' . $temp_str[3] . '/';
                                                            $file = $temp_str[4];
                                                        }
														

														?>
                                                        <!--load radio thumbnail-->
                                                        <div class="col-xs-3 col-sm-3 col-md-3" style="margin-right: -20px;">
                                                            <img src="<?php echo base_url() ?>elFindermaster/files/radio_icon/<?php echo $row->radio_info_thumbnail; ?>"
                                                                 onclick="changeChannelRtmp(&#39;<?= $row->radio_info_station ?>&#39;,&#39;<?= $rtmp ?>&#39;,&#39;<?= $file ?>&#39;,&#39;NOW PLAYING...&#39;)">
                                                        </div>
														<?php
													}
												}
											}//end foreach for $radio_group
											?>
                                        </div><!--#end logo-station-->
                                    </div>
                                    <!-- START OF THE PLAYER EMBEDDING TO COPY-PASTE -->

                                    <script type="text/javascript">
                                        <?php
                                        $string = $default_radio['radio_info_rtmp'];
                                        $temp_str = explode('/', $string);
                                        $rtmp = $temp_str[0] . '//' . $temp_str[2] . '/' . $temp_str[3] . '/';
                                        $file = $temp_str[4];
                                        ?>
                                        loadDefult("<?=$rtmp?>", "<?=$file?>");

                                        function loadDefult(streamer, file) {
                                            /****START DEFAUL EMBAD****/
                                            var so = new SWFObject('<?=base_url()?>player/player.swf', 'ply', '370', '24', '9', '#fff');
                                            so.addParam('allowfullscreen', 'true');
                                            so.addParam('allowscriptaccess', 'always');
                                            so.addVariable('autostart', 'true');
                                            so.addParam('wmode', 'opaque');
                                            so.addVariable('volume', '100');
                                            so.addVariable('streamer', streamer);
                                            so.addVariable('file', file);
                                            so.write('mediaspace');
                                            // document.getElementById("sms").innerHTML = 'NOW PLAYING...';
                                            /****END DEFAUL EMBAD****/
                                        }


                                        function changeChannelRtmp(channel, streamer, file, sms) {

                                            var so = new SWFObject('<?=base_url()?>player/player.swf', 'ply', '370', '24', '9', '#F9F9F9');
                                            so.addParam('allowfullscreen', 'true');
                                            so.addParam('allowscriptaccess', 'always');
                                            so.addVariable('autostart', 'true');
                                            so.addParam('wmode', 'opaque');
                                            so.addVariable('volume', '100');
                                            so.addVariable('streamer', streamer);
                                            so.addVariable('file', file);
                                            so.write('mediaspace');
                                            document.getElementById("channel_label").innerHTML = channel;
                                            // document.getElementById("sms").innerHTML = sms;
                                            //document.getElementById("sms").innerHTML = "Our live radio is under maintenance, will be back 30mn after.";
                                            document.getElementById("mediaspacesilverlight").style.display = "none";
                                            document.getElementById("mediaspace").style.display = "block";
                                            //window.location+"&"+channel;
                                        }

                                        function changeChannelHttp(channel, file) {
                                            var so = new SWFObject('<?=base_url()?>player/player.swf', 'ply', '370', '24', '9', '#F9F9F9');
                                            so.addParam('allowfullscreen', 'true');
                                            so.addParam('allowscriptaccess', 'always');
                                            so.addVariable('autostart', 'true');
                                            so.addParam('wmode', 'opaque');
                                            so.addVariable('volume', '100');
                                            so.addVariable('stretching', 'fill');
                                            so.addVariable('type', 'sound');
                                            so.addVariable('file', file); //Channel : FM 105.5MHz
                                            so.write('mediaspace');
                                            document.getElementById("channel_label").innerHTML = channel;
                                            document.getElementById("mediaspacesilverlight").style.display = "none";
                                            document.getElementById("mediaspace").style.display = "block";
                                            // document.getElementById("sms").innerHTML = "NOW PLAYING...";
                                        }

                                        function changeChannelSilverlight(channel, file) {
                                            var cnt = document.getElementById("mediaspace");
                                            var src = 'http://ezecom.com.kh/modules/mod_liveradio/resource/silverlight/wmvplayer.xaml';
                                            var cfg = {
                                                file: file,
                                                overstretch: 'true',
                                                autostart: 'true',
                                                height: '21',
                                                width: '370'
                                            };
                                            var ply = new jeroenwijering.Player(cnt, src, cfg);
                                            jeroenwijering.Model.prototype.timeChanged = function () {
                                                try {
                                                    var pos = Math.round(this.video.Position.Seconds * 10) / 10;
                                                    this.view.onTime(pos, this.configuration['duration']);
                                                } catch (ex) {
                                                    clearInterval(this.timeint);
                                                }
                                            };

                                            document.getElementById("sms").innerHTML = "NOW PLAYING...";
                                            document.getElementById("mediaspace").style.display = "block";
                                            document.getElementById("channel_label").innerHTML = channel;
                                        }


                                    </script>

                                    <!-- END OF THE PLAYER EMBEDDING -->
                                </div>
                                <p></p></section>

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

	<?php $this->load->view('footer/footer_user_v'); ?>

    <!-- //FOOTER -->

    <!-- BACK TOP TOP BUTTON -->

    <div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">

        <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>

    </div>

    <script type="text/javascript">

        (function ($) {

            // Back to top

            $('#back-to-top').on('click', function () {

                $("html, body").animate({scrollTop: 0}, 500);

                return false;

            });

        })(jQuery);

    </script>

    <!-- BACK TO TOP BUTTON -->


</div>


</body>
</html>