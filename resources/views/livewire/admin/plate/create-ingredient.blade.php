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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Platos</a></li>
                            <li class="breadcrumb-item active">Nuevo Ingrediente</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Nuevo Ingrediente</h4>
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
                                <div class="form-floating">
                                    <select wire:model="unit_of_measure" class="@error('unit_of_measure') is-invalid @enderror form-select" id="unit_of_measure" aria-label="Floating label select">
                                        <option selected="">Seleccione</option>
                                        <option value="gramos">Gramos (g)</option>
                                        <option value="kilogramos">Kilogramos (kg)</option>
                                        <option value="miligramos">Miligramos (mg)</option>
                                        <option value="litros">Litros (l)</option>
                                        <option value="mililitros">Mililitros (ml)</option>
                                        <option value="unidades">Unidades (unidad)</option>
                                        <option value="tazas">Tazas (taza)</option>
                                        <option value="cucharadas">Cucharadas (cda)</option>
                                        <option value="cucharaditas">Cucharaditas (cdta)</option>
                                        <option value="onzas">Onzas (oz)</option>
                                        <option value="libras">Libras (lb)</option>
                                    </select>
                                    <label for="unit_of_measure">Unidad de medida *</label>
                                    @error('unit_of_measure')
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
                                <div class="form-floating">
                                    <select wire:model="category" class="@error('category') is-invalid @enderror form-select" id="category" aria-label="Floating label select">
                                        <option selected="">Seleccione</option>
                                        <option value="carnes_aves">Carnes y aves</option>
                                        <option value="pescados_mariscos">Pescados y mariscos</option>
                                        <option value="frutas_verduras">Frutas y verduras</option>
                                        <option value="productos_lacteos">Productos lácteos</option>
                                        <option value="granos_cereales">Granos y cereales</option>
                                        <option value="aceites_grasas">Aceites y grasas</option>
                                        <option value="condimentos_especias">Condimentos y especias</option>
                                        <option value="productos_enlatados_envasados">Productos enlatados y envasados</option>
                                        <option value="frutos_secos_semillas">Frutos secos y semillas</option>
                                        <option value="bebidas">Bebidas</option>
                                    </select>
                                    <label for="category">Categoría *</label>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="image" class="form-label">Imagen</label>
                                    <input type="file" id="image" class="form-control">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4" >
                                
                                <button wire:click="save" type="button" class="btn btn-primary mb-2 me-2">
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