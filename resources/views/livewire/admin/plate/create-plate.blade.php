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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Inventario</a></li>
                            <li class="breadcrumb-item active">Suministrar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Suministrar</h4>
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
                                    <select wire:model="category" class="@error('category') is-invalid @enderror form-select" id="category" aria-label="Floating label select">
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option value="Merienda">Merienda</option>
                                    </select>
                                    <label for="category">Horario *</label>
                                    @error('category')
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
                                                <th>Nombre</th>
                                                <th>Categoría</th>
                                                <th>Stock actual</th>
                                                <th>Cantidad</th>
                                                <th>Unidad de medida </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--[if BLOCK]><![endif]-->                                        <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                                    </td>
                                                    <td>
                                                        Arroz
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info-lighten">Carbohidratos</span></h5>
                                                    </td>
                                                    <td >
                                                        <span class="badge  bg-danger ">             
                                                            58
                                                        </span>
                                                    </td>
                                                    <td >
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </td>
                                                    <td >
                                                        <p>Gramos</p>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                                    </td>
                                                    <td>
                                                        Pasta
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info-lighten">Carbohidratos</span></h5>
                                                    </td>
                                                    <td >
                                                        <span class="badge  bg-success ">             
                                                            666
                                                        </span>
                                                    </td>
                                                    <td >
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </td>
                                                    <td >
                                                        <p>Gramos</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                                    </td>
                                                    <td>
                                                        Papa
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info-lighten">Carbohidratos</span></h5>
                                                    </td>
                                                    <td >
                                                        <span class="badge  bg-success ">             
                                                            583
                                                        </span>
                                                    </td>
                                                    <td >
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </td>
                                                    <td >
                                                        <p>Gramos</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                                    </td>
                                                    <td>
                                                        Pollo
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info-lighten">Proteínas</span></h5>
                                                    </td>
                                                    <td >
                                                        <span class="badge  bg-success ">             
                                                            222
                                                        </span>
                                                    </td>
                                                    <td >
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </td>
                                                    <td >
                                                        <p>Gramos</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                                    </td>
                                                    <td>
                                                        Carne de res
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info-lighten">Proteínas</span></h5>
                                                    </td>
                                                    <td >
                                                        <span class="badge  bg-success ">             
                                                            519
                                                        </span>
                                                    </td>
                                                    <td >
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </td>
                                                    <td >
                                                        <p>Gramos</p>
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