<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header py-4 text-center bg-primary">
                        <h2 style="color: #fff">PAE</h2>
                        {{-- <a href="index.html">
                            <span><img src="assets/images/logo.png" alt="logo" height="22"></span>
                        </a> --}}
                    </div>

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0 fw-bold">Ingreso</h4>
                            <p class="text-muted mb-4">Ingrese su email y Contraseña para ingresar al panel administrativo</p>
                        </div>
                        @error('loginError')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <form wire:submit.prevent="authenticate">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email</label>
                                <input wire:model.defer="email" class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Escriba su email">
                            </div>

                            <div class="mb-3">
                                {{-- <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a> --}}
                                <label for="password" class="form-label">Contraseña</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model.defer="password" type="password" id="password" name="password" class="form-control" placeholder="Escriba su Contraseña">
                                </div>
                            </div>

                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Recordar</label>
                                </div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Ingresar </button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                {{-- <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div> --}}
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
