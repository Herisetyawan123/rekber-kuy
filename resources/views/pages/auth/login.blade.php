<x-layouts-auth>
    <div class="auth-full-page-content d-flex p-sm-5 p-4">
        <div class="w-100">
            <div class="d-flex flex-column h-100">
                <div class="mb-4 mb-md-5 text-center">
                    <a href="javascript:void(0);" class="d-block auth-logo">
                        <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="" height="60">
                    </a>
                </div>
                <div class="auth-content my-auto">
                    <div class="text-center">
                        <h5 class="mb-0">Welcome Back !</h5>
                        <p class="text-muted mt-2">Sign in to continue to <span style="color: blue">Negoin</span>.</p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert"
                            style="display: flex;align-items: center;">
                            <i class="mdi mdi-block-helper align-middle"></i>
                            <ul style="margin: 0px !important; display: inline-block; list-style: none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                style="top: 50%; transform: translateY(-50%);"></button>
                        </div>
                    @endif
                    <form class="mt-4 pt-2" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>

                            <div class="input-group auth-pass-inputgroup">
                                <input type="password" name="password" class="form-control" placeholder="Enter password"
                                    aria-label="Password" aria-describedby="password-addon" id="password-input">
                                <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon">
                                    <i class="mdi mdi-eye-outline" id="password-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="">
                                            <a href="auth-recoverpw.html" class="text-primary">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                In</button>
                        </div>
                    </form>
                    <div class="mt-2 text-center">
                        <p class="text-muted mb-0">Don't have an account ? <a href="{{ route('register') }}"
                                class="text-primary fw-semibold"> Signup now </a> </p>
                    </div>
                </div>
                <div class="mt-4 mt-md-5 text-center">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Negoin . Crafted with <i class="mdi mdi-heart text-primary"></i> <a href="https://buildandservice.tech/" target="blank"><span class="colored">Build and Service</span></a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('password-addon').addEventListener('click', function () {
            const passwordInput = document.getElementById('password-input');
            const passwordIcon = document.getElementById('password-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('mdi-eye-outline');
                passwordIcon.classList.add('mdi-eye-off-outline');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('mdi-eye-off-outline');
                passwordIcon.classList.add('mdi-eye-outline');
            }
        });
    </script>


</x-layouts-auth>
