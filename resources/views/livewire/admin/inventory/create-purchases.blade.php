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
                                    <select wire:model="category" class="@error('category') is-invalid @enderror form-select" id="category" aria-label="Floating label select">
                                        @foreach($purchases as $purchase)
                                            <option value="{{$purchase['nombre']}}">{{$purchase['nombre']}}</option>
                                        @endforeach
                                    </select>
                                    <label for="category">Ingrediente *</label>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <select wire:model="category" class="@error('category') is-invalid @enderror form-select" id="category" aria-label="Floating label select">
                                        <option value="Colegio A">Colegio A</option>
                                        <option value="Colegio B">Colegio B</option>
                                        <option value="Colegio C">Colegio C</option>
                                        <option value="Colegio D">Colegio D</option>
                                        <option value="Colegio E">Colegio E</option>
                                    </select>
                                    <label for="category">Colegio *</label>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4 form-floating">
                                    <textarea wire:model="description" class="@error('description') is-invalid @enderror form-control" placeholder="" id="description" style="height: 100px"></textarea>
                                    <label for="description">Descripción</label>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <select wire:model="category" class="@error('category') is-invalid @enderror form-select" id="category" aria-label="Floating label select">
                                        <option value="Proveedor A">Proveedor A</option>
                                        <option value="Proveedor B">Proveedor B</option>
                                        <option value="Proveedor C">Proveedor C</option>
                                        <option value="Proveedor D">Proveedor D</option>
                                        <option value="Proveedor E">Proveedor E</option>
                                    </select>
                                    <label for="category">Proveedor *</label>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <select wire:model="category" class="@error('category') is-invalid @enderror form-select" id="category" aria-label="Floating label select">
                                        <option value="Comedor A">Comedor A</option>
                                        <option value="Comedor B">Comedor B</option>
                                        <option value="Comedor C">Comedor C</option>
                                        <option value="Comedor D">Comedor D</option>
                                        <option value="Comedor E">Comedor E</option>
                                    </select>
                                    <label for="category">Comedor *</label>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input wire:model="name" type="text" class="@error('name') is-invalid @enderror form-control" id="name" placeholder="Tomate">
                                    <label for="name">Cantidad *</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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