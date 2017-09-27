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
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      <?=$this->session->flashdata('message')?>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Post List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="<?=base_url('addpost')?>" class="btn btn-success ">
                                    Add New
                                </a>
                            </div>
							<div class="col-sm-4">
								<select id="select-lang" style="padding:6px" onchange="change_language()">
								 
								  <?php if($this->session->userdata("language")==1){?>
									<option value="1" selected >English</option>
									<option value="2">Khmer</option>
									<option value="3">Chinese</option>
									
								  <?php }else if($this->session->userdata("language")==2){ ?>
									<option value="2" selected>Khmer</option>
									<option value="1">English</option>
									<option value="3">Chinese</option>
								  <?php }elseif($this->session->userdata("language")==3){?>
									<option value="3" selected>Chinese</option>
									<option value="1">English</option>
									<option value="2">Khmer</option>
								  <?php }else{ ?>
									<option value="1">English</option>
									<option value="2">Khmer</option>
									<option value="3">Chinese</option>
								  <?php }?>
									
								
								  
								  
								  
								</select>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                    <tr class="headings">
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Feature</th>
                                        <th>Post Date</th>
                                        <th>Language</th>
                                        <th>Categories</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($allpost as $rowpost) { ?>
                                        <tr class="even pointer">
                                            <td class=" "><?= $i++; ?></td>
                                            <td class=" ">
												<?php 
												  if($this->session->userdata("language") == 1){
													echo $rowpost->content_title_en ;
												  }
												  if($this->session->userdata("language") == 2){
													echo $rowpost->content_title_kh ;
												  }
												  if($this->session->userdata("language") == 3){
													echo $rowpost->content_title_ch ;
												  }
												  if($this->session->userdata("language") == ""){
													echo $rowpost->content_title_en ;
												  }
												  
												?>
											</td>
                                            <td class=" ">
                                                <?php if($rowpost->content_feature == 1){?>
                                                    <a href='<?php echo site_url("featurecontent/0/$rowpost->contentid"); ?>'><i class="fa fa-star-half-full" style="font-size:16px;color:blue"></i></a>
                                                <?php }else{ ?>
                                                    <a href='<?php echo site_url("featurecontent/1/$rowpost->contentid"); ?>'><i class="fa fa-star-o"></i></a>
                                                <?php } ?>
                                            </td>
                                            <td class=" "><?= $rowpost->content_date ?></td>
                                            <td class=" "><?= $rowpost->lang_title ?></td>
                                            <td class=" "><?= $rowpost->categories_name; ?></td>
                                            <td class=" " >
												<?php echo "Published" ?>
                                                <?php //if($rowpost->content_published == 1){?>
                                                    <!--<a href='<?php //echo site_url("publishedcontent/0/$rowpost->contentid"); ?>'>Published</a>-->
                                                <?php //}else{ ?>
                                                    <!--<a href='<?php //echo site_url("publishedcontent/1/$rowpost->contentid"); ?>'>UnPublished</a> -->
                                                <?php // } ?>
                                                
                                                    
                                            </td>  
                                            <td class=" ">
                                                <!--<a href="<?= base_url('copypost/' . $rowpost->contentid) ?>"
                                                   class="btn btn-cycle btn-primary btn-xs"><i class="fa fa-copy"></i></a>-->

                                                <a href="<?= base_url('/editpost/' . $rowpost->contentid) ?>"
                                                   class="btn btn-cycle btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-cycle btn-danger btn-xs" onclick="delete_record('<?= $rowpost->contentid ?>')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
    <script>
    function delete_record(id) {
        var delete_url = "<?php echo base_url();?>deletepost/";
        delete_function(id, delete_url);
    }
    $(document).ready(function () {
        $('input.tableflat').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    });

    var asInitVals = new Array();
    $(document).ready(function () {
        var oTable = $('#example').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            },
            'iDisplayLength': 8,
            "sPaginationType": "full_numbers",
			"order": [[ 1, "desc" ]]
        });
        $("tfoot input").keyup(function () {
            /* Filter on the column based on the index of this element's parent <th> */
            oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
        });
        $("tfoot input").each(function (i) {
            asInitVals[i] = this.value;
        });
        $("tfoot input").focus(function () {
            if (this.className == "search_init") {
                this.className = "";
                this.value = "";
            }
        });
        $("tfoot input").blur(function (i) {
            if (this.value == "") {
                this.className = "search_init";
                this.value = asInitVals[$("tfoot input").index(this)];
            }
        });
    });
</script>
<script type="text/javascript">
 /* Language */
  function change_language(){
	 var id = document.getElementById("select-lang").value;
     var base_url= "<?php echo base_url(); ?>";
           $.ajax({
                type:"POST",
                url: base_url+ "set_session_lang",
                data:{id:id},
                success:function(dta)
                {
                  window.location.reload();
                }
            });
  }
  
</script>
</body>
</html>