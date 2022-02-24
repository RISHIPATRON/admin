<?php include 'header.php';?>
<section>
	<div class="d-block d-md-flex align-items-center justify-content-center">
		<div>
			<img src="images/login_left.png" alt="login_left" class="w-100">
		</div>
		<div>
			<div class="w-lg-500px p-10 p-lg-15 mx-auto">
				<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_in_form" action="#">
					<!--begin::Heading-->
					<div class="text-center mb-10">
						<!--begin::Title-->
						<img src="images/via_time_logo.png" alt="via_time_logo">
						<h1 class="text-dark mb-3">Login In to ViaTime</h1>
						<!--end::Title-->
						<!--begin::Link-->
						<div class="text-gray-400 fw-bold fs-4">Sign in to continue
							<!-- <a href="../../demo1/dist/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> -->
							<!--end::Link-->
						</div>
						<!--begin::Heading-->
						<!--begin::Input group-->
						<div class="fv-row mb-10 fv-plugins-icon-container">
							<!--begin::Label-->
							
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-lg form-control-solid" type="text" name="email" placeholder="username/ Email Address" autocomplete="off">
							<!--end::Input-->
							<div class="fv-plugins-message-container invalid-feedback"></div></div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10 fv-plugins-icon-container">
								<!--begin::Wrapper-->
								
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" placeholder="password" type="password" name="password" autocomplete="off">
								<!--end::Input-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<!--begin::Submit button-->
									<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<!--end::Submit button-->
										
										
										
									</div>
									<!--end::Actions-->
									<div></div></form></div>
								</div>
							</div>
						</section>
						<?php include 'footer.php';?>