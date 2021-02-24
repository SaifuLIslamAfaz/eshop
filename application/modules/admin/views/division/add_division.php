<?php $this->load->view('backend/headlink') ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
 
<!-- BEGIN: Header-->
<?php $this->load->view('backend/nav_head') ?>
<!-- END: Header-->
<!-- BEGIN: Main Menu-->
<!-- ===== left-Sidebar start======= -->
<?php $this->load->view('backend/left_sidebar') ?>

<!-- ============ left-Sidebar end======= -->
<!-- END: Main Menu-->
<!-- BEGIN: Content-->

<div class="app-content content">
    <div class="content-wrapper">
    <div class="content-header row"></div>
        <div class="content-body">
<!-- Default ordering table -->
<section id="ordering ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg_color">
                    <h4 class="card-title">Add Dvision Form</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content collpase show">
                                <div class="card-body">
<form action="admin/store_dvision" enctype="multipart/form-data" method="post" class="form form-horizontal striped-rows">
    <div class="form-body">
        <div class="form-group row">
            <label class="col-md-3 label-control" for="eventRegInput2">Select Country</label>
            <div class="col-md-8">
                <select class="select2 form-control" id="id_h5_single" name="country_id">
                        <option>Select Country</option>
                    <?php 
                    foreach($country_data as $value) { ?>
                        <option value="<?=$value['id']?>"><?=$value['country_name']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="eventRegInput1">Dvision Name(EN)</label>
            <div class="col-md-8">
                <input type="text" id="eventRegInput1" class="form-control" placeholder="In English..." name="name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="eventRegInput1">Dvision Name(BN)</label>
            <div class="col-md-8">
                <input type="text" id="eventRegInput1" class="form-control" placeholder="In Bengali..." name="bn_name">
            </div> 
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="eventRegInput1">Dvisional URL</label>
            <div class="col-md-8">
                <input type="text" id="eventRegInput1" class="form-control" placeholder="i.e www.divisions.com(optional)" name="url">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="eventRegInput2">Status</label>
            <div class="col-md-9">
                <input type="radio" class="span1" name="status" value="0" > Hide <br>
                <input type="radio"  class="span1"  name="status" value="1"> Show
            </div>
        </div>
    </div>
    <div class="form-actions center ">
        <button id="type-success" type="submit" class="btn btn-primary col-sm-3 offset-3">
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
<?php $this->load->view('backend/footer') ?>
<!-- END: Footer-->
<?php $this->load->view('backend/footerlink') ?>