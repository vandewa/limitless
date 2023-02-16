<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.meta')
    @stack('before-style')
    @include('admin.includes.style')
    @stack('after-style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                {{ Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'login-form']) }}
                <div class="card mb-0">
                    <div class="card-body">

                        <div class="text-center mb-3">
                            <i
                                class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Your credentials</span>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{ Form::email('email', null, ['class' => 'form-control',
                            'placeholder' => 'Email']) }}
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{ Form::password('password', ['class' => 'form-control',
                            'placeholder' => 'Password']) }}
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <!-- <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" checked
                                            data-fouc>
                                        Remember
                                    </label>
                                </div>

                                <a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
                            </div> -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i
                                    class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <!-- <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">or sign in with</span>
                            </div>

                            <div class="form-group text-center">
                                <button type="button"
                                    class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i
                                        class="icon-facebook"></i></button>
                                <button type="button"
                                    class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i
                                        class="icon-dribbble3"></i></button>
                                <button type="button"
                                    class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i
                                        class="icon-github"></i></button>
                                <button type="button"
                                    class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i
                                        class="icon-twitter"></i></button>
                            </div> -->

                        <!-- <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Don't have an account?</span>
                        </div>

                        <div class="form-group">
                            <a href="#" class="btn btn-light btn-block">Sign up</a>
                        </div> -->

                        <!-- <span class="form-text text-center text-muted">By continuing, you're confirming that you've
                                read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span> -->
                    </div>
                </div>
                {{ Form::close() }}
                <!-- /login card -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>