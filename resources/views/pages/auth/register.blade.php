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
                        <h5 class="mb-0">Register Account</h5>
                        <p class="text-muted mt-2">Get your free Minia account now.</p>
                    </div>
                    <form class="needs-validation mt-4 pt-2" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="useremail"
                                placeholder="Enter email" required>
                            <div class="invalid-feedback">
                                Please Enter Email
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Enter name" required>
                            <div class="invalid-feedback">
                                Please Enter name
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="userpassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="userpassword"
                                placeholder="Enter password" required>
                            <div class="invalid-feedback">
                                Please Enter Password
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">By registering you agree to the Negoin <a href="#"
                                    class="text-primary">Terms of Use</a></p>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                type="submit">Register</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <p class="text-muted mb-0">Already have an account ? <a href="{{ route('login') }}"
                                class="text-primary fw-semibold"> Login </a> </p>
                    </div>
                </div>
                <div class="mt-4 mt-md-5 text-center">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Negoin . Crafted with <i class="mdi mdi-heart text-primary"></i> by
                        Build and Services
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts-auth>
