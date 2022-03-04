<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>
<!--end::Head-->
<!--begin::Body-->
<!-- <iframe src="dashboard.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe> -->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <section class="login ">
        <div class="row align-items-center g-0 ">
            <div class="col-lg-6 bg_dullblue">
                <img src="images/login_left.png" alt="login_left" class="w-100 vh100">
            </div>
            <div class="col-lg-6 bg-white">
                <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework login_form" novalidate="novalidate" id="kt_sign_in_form" action="#">
                        <!--begin::Heading-->
                        <div class="text-left mb-10">
                            <!--begin::Title-->
                            <img src="images/via_time_logo.png" alt="via_time_logo" class="mb-5">
                            <h1 class="text-dark "><span class="blue">Login In to</span> <span class="lightblue">ViaTime</span></h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400  fs-4">
                                <p class="f_light f18 text-dark mb-10">Sign in to continue</p>
                                <!-- <a href="../../theme/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> -->
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <!--begin::Label-->

                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="p-rel">
                                    <input class="form-control form-control-lg form-control-solid" type="text" name="email" placeholder="Username/ Email Address" autocomplete="off">
                                    <div class="p-abs">
                                        <!-- <img src="http://localhost/viatime/admin/images/usericon.png" alt="usericon"> -->
                                        <i class="fa-solid fa-user-large"></i>
                                    </div>
                                </div>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <!--begin::Wrapper-->

                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <div class="p-rel"><input class="form-control form-control-lg form-control-solid" placeholder="Password" type="password" name="password" autocomplete="off">
                                    <div class="p-abs">
                                        <!-- <img src="http://localhost/viatime/admin/images/usericon.png" alt="usericon"> -->
                                        <i class="fa-solid fa-lock"></i>
                                    </div>
                                </div>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->

                            <label class="form-check form-check-custom form-check-solid form-switch ">
                                <span class="form-check-label   fs-6 me-3">Keep me Logged In</span>
                                
                                <input class="form-check-input" type="checkbox" name="layout-builder[layout][header][fixed][desktop]" value="true" checked="checked">
															</label>
                            <!--begin::Actions-->
                            <div class="text-left">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg bg_lightblue text-white w-100 my-5">
                                    <span class="indicator-label">Login</span>
                                    
                                </button>
                            </div>
                            <!--end::Submit button-->



                        </div>

                        <div class="text-center">
                            <p class="text-dark fs-5 my-4"><i class="fa-solid fa-user-lock text-dark fs-4"></i> Forgot Password?
                            </p>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>

                </div>
            </div>
            <p class="small text-center copyrightset"><i>Copyright © 2022 ViaTime. All Rights Reserved.</i></p>
        </div>
    </section>
    <!--begin::Scrolltop-->

    <!--end::Scrolltop-->
    <!--end::Main-->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>