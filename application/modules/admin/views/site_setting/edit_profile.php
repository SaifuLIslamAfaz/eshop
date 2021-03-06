<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<title> Cmart | Admin</title>
<?php $this->load->view('backend/headlink')?>


  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php $this->load->view('backend/nav_head')?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <!-- ===== left-Sidebar start======= -->
    <?php $this->load->view('backend/left_sidebar')?>
    
    <!-- ============ left-Sidebar end======= -->
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
   
         
        </div>
        <div class="content-body">

<!-- Default ordering table -->
<section id="ordering ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg_color" >
                    <h4 class="card-title" >Update Profile</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
             
                </div>
                <div class="row justify-content-md-center">
		<div class="col-md-10">
	        <div class="card">
	    
	            <div class="card-content collpase show">
	                <div class="card-body">
						<form  action="admin/update_password" enctype="multipart/form-data" method="post" class="form form-horizontal striped-rows">
                       <input type="hidden" name="loginid" value="<?php echo $id?>">     
							<div class="form-body">
	                			<!--<div class="form-group row">-->
	                   <!--         	<label class="col-md-3 label-control" for="eventRegInput1">Username</label>-->
	                   <!--         	<div class="col-md-9">-->
	                   <!--         		<input type="text" id="eventRegInput1" class="form-control" placeholder="Type Username" name="username" value="<?php echo $user_name?>" autocomplete="0">-->
	                   <!--         	</div>-->
		                  <!--      </div>-->
                                <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="eventRegInput1">Email</label>
	                            	<div class="col-md-9">
	                            		<input type="email" id="eventRegInput1" class="form-control" placeholder="Email Address" name="email" value="<?php echo $email?>">
	                            	</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Password</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" class="form-control" placeholder="Type Password" name="password" value="<?php echo $password?>">
                                    </div>
                                </div>
                                <!--<div class="form-group row">-->
                                <!--    <label class="col-md-3 label-control" for="eventRegInput1">Phone No</label>-->
                                <!--    <div class="col-md-9">-->
                                <!--        <input type="text" id="eventRegInput1" class="form-control" placeholder="Type Phone No" name="phone_number" value="<?php echo $phone_number?>">-->
                                <!--    </div>-->
                                <!--</div>-->
							</div>
							<div class="form-actions center ">
                            <button  id="type-info" type="submit" class="btn btn-primary col-sm-4 offset-3">
	                                <i class="fa fa-check-square-o"></i> Submit
	                            </button>
                          </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
        </div>
</section>
<!--/ Default ordering table -->


        </div>
      </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php $this->load->view('backend/footer')?>
    <!-- END: Footer-->


<?php $this->load->view('backend/footerlink')?>
<script>
    var msg = "<?php echo $this->session->flashdata('msg'); ?>";
    console.log(msg);
    if(msg=="save")
    {
        swal("Congratulations !", "You have Saved Data Successfully!", "success");
    }else if(msg=='err'){
        swal("Sorry !", "Data Not Save Successfully!! ", "warning");
    }else if(msg=='form_validation_err'){
        swal("Sorry !", "Please Fill Out TItle and Description!! ", "warning");
    }
</script>

<script> 
    var show_status = "<?=$menu_data[0]['show_status']?>";
    $("#show_status").val(show_status);
    </script>
  </body>
