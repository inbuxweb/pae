<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Colegios</a></li>
                            <li class="breadcrumb-item active">Crear Colegio</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Crear Colegio</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">           
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input wire:model="name" type="text" class="@error('name') is-invalid @enderror form-control" id="name" placeholder="Tomate">
                                    <label for="name">Nombre *</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input wire:model="name" type="text" class="@error('name') is-invalid @enderror form-control" id="name" placeholder="Tomate">
                                    <label for="name">Dirección *</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4" >
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th></th>
                                                <th># Comedor</th>
                                                <th>Nivel</th>
                                                <th>Cocinas</th>
                                                <th>Capacidad</th>
                                                <th>Descripción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--[if BLOCK]><![endif]-->                                        <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                                    </td>
                                                    <td>
                                                        Comedor 1
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info-lighten">Primaria</span></h5>
                                                    </td>
                                                    <td >
                                                        <span class="badge  bg-danger ">             
                                                            2
                                                        </span>
                                                    </td>
                                                    <td >
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </td>
                                                    <td >
                                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    </td>
                                                </tr>
                                                
                                            <!--[if ENDBLOCK]><![endif]-->
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4" >
                                
                                <button type="button" class="btn btn-primary mb-2 me-2">
                                    <i wire:loading.remove class="mdi mdi-note-plus me-1"></i>
                                    <span wire:loading class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                                    Crear Registro
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row --> 
        
    </div> <!-- container -->

</div>