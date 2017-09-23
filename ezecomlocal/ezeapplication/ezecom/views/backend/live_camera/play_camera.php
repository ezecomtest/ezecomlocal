<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <?php $this->load->view("header/header_link");?>
    <script src="<?php echo base_url(); ?>js/live_stream/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/live_stream/jwplayer.js"></script>       
    <script src="<?php echo base_url(); ?>js/live_stream/player.js" type="text/javascript"></script>
    <script>jwplayer.key="E2ZcJ0p6Evjxu4T6aKhLoe1HbMZAsjYVxBaMkA==";</script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/live_stream/style.css" />  
</head>
<body class="nav-md" onload="play_camera()">
    <div class="container body">
        <div class="main_container">
        <?php $this->load->view("header/menu");?>
            <div class="right_col" role="main">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                            <h2>PLAYING CAMERA <i class="fa fa-hand-o-right"></i> <?php echo $camera_detail['name']; ?> &nbsp;&nbsp;<a href="<?php echo base_url(); ?>live_camera" class="btn btn-danger btn-xs"><i class="fa fa-chevron-left"></i> Back </a> <button type="button" id="btn_start" class="btn btn-success btn-xs"><i class="fa fa-youtube-play"></i>&nbsp;&nbsp;Start Play </button>
                            <button type="button" id="btn_stop" class="btn btn-danger btn-xs"><i class="fa fa-stop"></i>&nbsp;&nbsp;Stop</button></h2>
                            <div class="clearfix"></div>
                        </div>       
                    </div>
                    <div class="x_content">
                        <div id="video_preview">                    
                            <div id="player" class="col-md-12"></div><div class="clear"></div>
                            <br/><br/><br/>
                            <input type="hidden" id="stream_url" value="<?php echo $camera_detail['rtmp']; ?>"/><br/>
                            <input type="hidden" id="secure" value="<?php echo $camera_detail['secure_token']; ?>"/><br/>
                            <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("header/script");?>

    <script type="text/javascript">
        
        // prevent right click 

        $(document).ready(function() {
            $(".x_content").bind("contextmenu",function(){
                return false;
                });
         } );
        //
    </script>
</body>
</html>