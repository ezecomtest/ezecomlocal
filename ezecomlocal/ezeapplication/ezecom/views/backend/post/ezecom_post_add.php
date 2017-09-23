<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <?php $this->load->view("header/header_link");?>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
       
        <?php $this->load->view("header/menu");?>
            <div class="right_col" role="main">

                        <!-- top tiles -->
                        <div class="row tile_count">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?=$this->session->flashdata('message')?>
                            

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Post <!-- <small>different form elements</small> --></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal form-label-left" action="<?php echo site_url('saving_post'); ?>" method="POST" enctype="multipart/form-data">
									<h2>Global Setting</h2>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Short url<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="permalink" required="required" placeholder="<?php echo base_url()."newsdetail/"?>"class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date
												<span class="required">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date" required="">
                                            </div>
                                        </div>
										
										 <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div>
										
										<h2>Add English Content</h2>
										<!-- English Content  -->
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title English<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="content_title" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction English<span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <?php echo $this->ckeditor->editor("content_intro"); ?>
                                            </div>
                                        </div>

                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div> -->
                                        
                                        
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Language</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_language_id"  style="text-transform: uppercase;">
                                                   <option selected="selected" value="1"> English </option> 
                                                </select>
                                            </div>
                                        </div>-->
										<input type="hidden" name="content_language_id" value="1">

                                        

                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Categories</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_categories_id"  style="text-transform: uppercase;">
                                                  
                         
                                                </select>
                                            </div>
                                        </div>-->
										
										 <?php foreach($categories as $rowcat){ ?>
												<input type="hidden" name="content_categories_id" value="<?= $rowcat->categoriesid;  ?>">
                                         <?php } ?>
										
                                    
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date" required="">
                                            </div>
                                        </div>-->
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description English<span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <?php echo $this->ckeditor->editor("content_description"); ?>
                                            </div>
                                        </div>
										<!-- End English Content  -->
										 
										<h2>Add Khmer Content</h2> 
										<div class="ln_solid"></div>
										<!-- Khmer Content -->
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title Khmer<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="content_title_kh" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction Khmer<span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <?php echo $this->ckeditor->editor("content_intro_kh"); ?>
                                            </div>
                                        </div>

                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div>-->
                                        
                                        
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Language</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_language_kh"  style="text-transform: uppercase;">
                                                   <option selected="selected" value="2">Khmer</option> 
                                                </select>
                                            </div>
                                        </div>-->
										<input type="hidden" name="content_language_kh" value="2">

                                        

                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Categories</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_categories_kh"  style="text-transform: uppercase;">
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>-->
										
										<?php foreach($categories as $rowcat){ ?>
											   <input type="hidden" name="content_categories_kh" value="<?= $rowcat->categoriesid; ?>">
                                        <?php }?>
                                    
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date_kh" required="">
                                            </div>
                                        </div>-->
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description Khmer<span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <?php echo $this->ckeditor->editor("content_description_kh"); ?>
                                            </div>
                                        </div>
										<!-- End Khmer Content -->
										
										<h2>Add Chinese Content</h2>
										<div class="ln_solid"></div>
										<!-- Chinese Content -->
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title Chinese<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="content_title_ch" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction Chinese<span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <?php echo $this->ckeditor->editor("content_intro_ch"); ?>
                                            </div>
                                        </div>

                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div>-->
                                        
                                        
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Language</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_language_ch"  style="text-transform: uppercase;">
                                                   <option selected="selected" value="3">Chinese</option>
                                                </select>
                                            </div>
                                        </div>-->
										<input type="hidden" name="content_language_ch" value="3">

                                        

                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Categories</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_categories_ch"  style="text-transform: uppercase;">
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>-->
										
										<?php foreach($categories as $rowcat){ ?>
												<input type="hidden" name="content_categories_ch" value="<?= $rowcat->categoriesid; ?>">
                                        <?php }?>
										
										
                                    
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date_kh" required="">
                                            </div>
                                        </div>-->
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description Chinese<span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <?php echo $this->ckeditor->editor("content_description_ch"); ?>
                                            </div>
                                        </div>
										<!-- End Chinese Content -->
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Add</button>
                                            </div>
                                        </div>
									
                                    </form>
                                </div>
                            </div>
                        </div>
                
                        </div>
                        <!-- footer content -->

                       <?php $this->load->view("footer/footer"); ?>
                        <!-- /footer content -->
            </div>
        </div>
    </div>
    <?php $this->load->view("header/script");?>
</body>
</html>