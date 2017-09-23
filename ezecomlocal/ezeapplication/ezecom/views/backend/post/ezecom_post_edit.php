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
                                    <h2>Edit Post <!-- <small>different form elements</small> --></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
									<?php if($this->session->userdata("language") == 1){?>
										<h2>English Content</h2>
									<?php }?>
									<?php if($this->session->userdata("language") == 2){?>
										<h2>Khmer Content</h2>
									<?php }?>
									<?php if($this->session->userdata("language") == 3){?>
										<h2>Chinese Content</h2>
									<?php }?>
									<?php if($this->session->userdata("language") == ""){?>
										<h2>English Content</h2>
									<?php }?>
									
                                    <br>
                                    <form class="form-horizontal form-label-left" action="<?php echo site_url('updatepost'); ?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="contentid" value="<?php echo $editpost['contentid']; ?>">
										<?php if($this->session->userdata("language") == 1 OR $this->session->userdata("language")== ""){ ?>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Link News & Event:</label>
											<label class="col-md-6 col-sm-6 col-xs-12" style="padding-top:10px;">
												<?php echo base_url()."newsdetail/".$editpost['short_url'] ?>
											</label>
										</div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Short url<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" name="permalink" required="required" value="<?php echo $editpost['short_url'] ?>" placeholder="<?php echo base_url()."newsdetail/"?>"class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
												<input type="hidden" name="short-url-before-update" value="<?php echo $editpost['short_url'] ?>">
                                            </div>
                                        </div>
										<?php } ?>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<?php if($this->session->userdata("language")==1){?>
													<input type="text" name="content_title_en" required="required" value="<?= $editpost['content_title_en'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
												<?php } ?>	
												<?php if($this->session->userdata("language")==2){?>
													<input type="text" name="content_title_kh" required="required" value="<?= $editpost['content_title_kh'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
												<?php } ?>	
												<?php if($this->session->userdata("language")==3){?>
													<input type="text" name="content_title_ch" required="required" value="<?= $editpost['content_title_ch'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
												<?php } ?>	
												<?php if($this->session->userdata("language")==""){?>
													<input type="text" name="content_title_en" required="required" value="<?= $editpost['content_title_en'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
												<?php } ?>	
												
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                         
											   <?php
													if($this->session->userdata("language")==1){
														$content_intro_en = $editpost['content_intro_en'];
														echo $this->ckeditor->editor("content_intro_en",$content_intro_en);
													}
													if($this->session->userdata("language")==2){
														$content_intro_kh = $editpost['content_intro_kh'];
														echo $this->ckeditor->editor("content_intro_kh",$content_intro_kh);
													}
													if($this->session->userdata("language")==3){
														$content_intro_ch = $editpost['content_intro_ch'];
														echo $this->ckeditor->editor("content_intro_ch",$content_intro_ch);
													}
													if($this->session->userdata("language")==""){
														$content_intro_en = $editpost['content_intro_en'];
														echo $this->ckeditor->editor("content_intro_en",$content_intro_en);
													}
											   ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div>
                                          <?php foreach($language as $rowlan){ ?>
                                            <?php if($editpost['content_language_id'] == $rowlan->lang_id){ ?>
                                               
												<input type="hidden" name="content_language_id" value="<?php echo $rowlan->lang_id ?>">
											
											<?php }
											  }
											?>
                                        
                                       
                                        
                                                
										<?php foreach($categories as $rowcat){ ?>
											<input type="hidden" name="content_categories_id" value="<?php echo $rowcat->categoriesid ?>">
										
										<?php }?>
                                          
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date" value="<?php echo $editpost['content_date']; ?>">
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" name="content_modified_date" value="<?php echo date("Y-m-d"); ?>">
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
												
												<?php
													if($this->session->userdata("language")==1){
														$description_en = $editpost['content_description_en'];
														echo $this->ckeditor->editor("content_description_en",$description_en);
													}
													if($this->session->userdata("language")==2){
														$description_kh = $editpost['content_description_kh'];
														echo $this->ckeditor->editor("content_description_kh",$description_kh);
													}
													if($this->session->userdata("language")==3){
														$description_ch = $editpost['content_description_ch'];
														echo $this->ckeditor->editor("content_description_ch",$description_ch);
													}
													if($this->session->userdata("language")==""){
														$description_en = $editpost['content_description_en'];
														echo $this->ckeditor->editor("content_description_en",$description_en);
													}
													
												?>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Update</button>
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