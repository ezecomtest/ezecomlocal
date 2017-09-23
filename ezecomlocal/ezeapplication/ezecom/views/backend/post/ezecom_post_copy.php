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

                                    <h2>Copy New Post <!-- <small>different form elements</small> --></h2>
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
                                        <input type="hidden" name="contentid" value="<?php echo $copypost['contentid']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="content_title" required="required" value="<?= $copypost['content_title'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php $content_intro = $copypost['content_intro']; ?>
                                               <?php echo $this->ckeditor->editor("content_intro",$content_intro); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Language</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_language_id"  style="text-transform: uppercase;">
                                                    <?php foreach($language as $rowlan){ ?>
                                                        <?php if($copypost['content_language_id'] == $rowlan->lang_id){ ?>
                                                            <option selected="" value="<?= $rowlan->lang_id;  ?>"><?= $rowlan->lang_title;  ?></option>
                                                        <?php }else{?>
                                                            <option value="<?= $rowlan->lang_id;  ?>"><?= $rowlan->lang_title;  ?></option>
                                                        <?php }?>
                                                        
                                                    <?php }?>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Categories</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="content_categories_id"  style="text-transform: uppercase;">
                                                    <?php foreach($categories as $rowcat){ ?>
                                                        <?php if($copypost['content_categories_id'] == $rowcat->categoriesid){ ?>
                                                            <option selected="" value="<?= $rowcat->categoriesid;  ?>"><?= $rowcat->categories_name;  ?></option>
                                                        <?php }else{?>
                                                            <option value="<?= $rowcat->categoriesid;  ?>"><?= $rowcat->categories_name;  ?></option>
                                                        <?php }?>
                                                        
                                                    <?php }?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date" readonly="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                            <?php $description = $copypost['content_description']; ?>
                                               <?php echo $this->ckeditor->editor("content_description",$description); ?>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Save</button>
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