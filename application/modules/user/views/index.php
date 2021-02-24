<!DOCTYPE html>
<html class="no-js" lang="zxx">
<title> Cmart | User-Dashboard</title>

<?php $this->load->view('front/header_link') ?>
<style>
    a.disabled {
  pointer-events: none;
  cursor: default;
}
</style>

<body>

	<!--=============================================
	=            Header         =
	=============================================-->

    <?php $this->load->view('front/header') ?>
	<!--=====  End of Header  ======-->

    <!--=============================================
    =            breadcrumb area         =
    =============================================-->
    
    <div class="breadcrumb-area mb-30 breadcrumb_margin_top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!--=====  End of breadcrumb area  ======-->

	<!--=============================================
	=            My account page section         =
	=============================================-->
	
	<div class="my-account-section section position-relative mb-50 fix">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="row">

						<!-- My Account Tab Menu Start -->
						<div class="col-lg-3 col-12">
							<div class="myaccount-tab-menu nav" role="tablist">
								<a href="#dashboard" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
									Dashboard</a>
								<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
								
							<a href="#address-edit" data-toggle="tab" class=""><i class="fa fa-address-book" aria-hidden="true"></i> Billing-address</a>
								
								<a href="#account-info" data-toggle="tab"><i class="fa fa-wrench"></i> Account-Settings </a>

								<a href="logout"><i class="fa fa-sign-out"></i> Logout</a>
							</div>
						</div>
						<!-- My Account Tab Menu End -->

						<!-- My Account Tab Content Start -->
						<div class="col-lg-9 col-12">
							<div class="tab-content" id="myaccountContent">
								<!-- Single Tab Content Start -->
								<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
									<div class="myaccount-content">
										<h3><i class="fa fa-dashboard"></i> Dashboard</h3>
										<div class="myaccount-table table-responsive text-center">
											<table class="table ">
											<tbody class="">
												<tr>
													<th> <i class="fa fa-hashtag"></i> Total-Order : </th>
													<th> </th>
													<th> <i class="fa fa-hashtag"></i> Total-Order Paid : </th>
													<th></th>
											
												</tr>
												<tr>
													<th> <i class="fa fa-hashtag"></i> Total-Pending Order : </th>
													<th></th>
													<th> <i class="fa fa-hashtag"></i> Total-Delivery Order : </th>
													<th> </th>				
												</tr>
												</tbody>
											
											</table>
										</div>
									</div>
								</div>
								<!-- Single Tab Content End -->

								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="orders" role="tabpanel">
									<div class="myaccount-content">
										<h3><i class="fa fa-cart-arrow-down"></i> Orders</h3>
										<div class="myaccount-table table-responsive text-center">
											<table class="table table-bordered">
												<thead class="thead-light">
												<tr>
													<th>Order-Id</th>
													<th>Order-Date</th>
													<th>Customer-Name</th>
													<th>Total Amount</th>
													<th>Payment-Method</th>
													<th>Order-Status</th>
													<th>Payment-Status</th>
													<th>Details</th>
													<th>Cancel</th>
												</tr>
												</thead>
												<tbody>
                                                
												<tr>
													<td></td>
													<td></td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Single Tab Content End -->


								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="address-edit" role="tabpanel">
									<div class="myaccount-content">
										<h3><i class="fa fa-address-book" aria-hidden="true"></i> Billing Address</h3>
											
										<address>
											<p> <span class="span_css"> *User-Name </span>: <strong><i class="fa fa-user-circle"></i> </strong></p>
											<p>	<span class="span_css"> *State </span> :<i class="fa fa-location-arrow"></i> </p>
											
											<p> <span class="span_css"> *City </span> : <i class="fa fa-map-marker"></i></p>
											<p> <span class="span_css">*Address</span> : <i class="fa fa-road"></i>
										</p>
										<p> <span class="span_css"> *Mobile </span> : <i class="fa fa-phone"></i>
										</p>
										
										<p> <span class="span_css"> *Zip-Code </span> : <i class="fa fa-bullseye"></i>
										</p>
										</address>

										<a style="width:170px;" href="" class="btn d-inline-block edit-address-btn "><i class="fa fa-edit"></i>Edit </a>
										
										
										<span><h3> Data Not Available</h3></span>
										
									</div>
								</div>
								<!-- Single Tab Content End -->

				<!-- Single Tab Content Start -->
				<div class="tab-pane fade" id="account-info" role="tabpanel">
					<div class="myaccount-content">
						<h3><i class="fa fa-wrench"></i>Account-Settings</h3>
						<div class="account-details-form">
							<form id="form"  method="post" autocomplete="off">
								<div class="row">
									<div class="col-12 mb-30">
										<input id="email_id" value=""  placeholder="Email Address" name="email" type="email" readonly/>
										<span id="email"><span>
									</div>

									<div class="col-12 mb-30"><h4>Password change</h4></div>

									<div class="col-12 mb-30">
										<input  name="current_password" id="c_pwd" placeholder="Current Password" type="password">
										<span id="current_password"><span>
									</div>

									<div class="col-lg-6 col-12 mb-30">
										<input  placeholder="New Password" id="new_password" name="password" type="password">
										<span id="password"><span>
									</div>

									<div class="col-lg-6 col-12 mb-30">
										<input  name="confirm_password" id="c_password"  placeholder="Confirm Password" type="password">
										<span id="confirm_password"><span>
									</div>

									<div class="col-12">
										<button id="submit" class="save-change-btn">Save Changes</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Single Tab Content End -->
							</div>
						</div>
						<!-- My Account Tab Content End -->
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of My account page section  ======-->
	

	<!--=============================================
	=            Footer         =
	=============================================-->
	
    <?php $this->load->view('front/footer') ?>
	
	<!--=====  End of Footer  ======-->


	<!-- scroll to top  -->
	<a href="javascript:void(0);" class="scroll-top"></a>
	<!-- end of scroll to top -->
	
	<!-- JS
	============================================ -->
    <?php $this->load->view('front/footerlink') ?>
    
   

</body>

</html>