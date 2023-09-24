<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-bs-theme="light">
<!-- Mirrored from themesbrand.com/vixon/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 08:30:50 GMT -->
<head>
@include('partials.header')
</head>
<body>
    <div class="auth-page-wrapper py-2 position-relative bg-light d-flex align-items-center justify-content-center min-vh-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-2 m-lg-4">
                                            <div class="text-center mt-2">
                                                <h5 class="fs-3xl">Welcome Back</h5>
                                                <p class="text-muted">Sign in  for Access RVA Service.</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form method="post" action="{{route('login')}}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon"><i class="ri-user-3-line"></i></span>
                                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter username">
                                                                                                               
                                                        </div>
                                                        @error("email")
                                                            {{$message}}
                                                            @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ri-lock-2-line"></i></span>
                                                                <input type="password" name="password" class="form-control pe-2 password-input" placeholder="Enter password" id="password-input">
                                                            </div>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                        @error("email")
                                                            {{$message}}
                                                            @enderror
                                                    </div>
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset.html" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                    </div>
                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <!-- <h5 class="fs-sm mb-4 title">Sign In with</h5> -->
                                                        </div>
                                                        
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                             
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
</div>
</body>

<!-- Mirrored from themesbrand.com/vixon/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 08:30:52 GMT -->
</html>
@include('partials.jquery')




















