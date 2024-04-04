<div class="content">
    <livewire:toasts />

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Ingredientes</a></li>
                            <li class="breadcrumb-item active">Proveedores</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Proveedores</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-xl-8">
                                <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">Buscar</label>
                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <label for="status-select" class="me-2">Estado</label>
                                            <select class="form-select" id="status-select">
                                                <option selected="">Selecione...</option>
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>                            
                            </div>
                            <div class="col-xl-4">
                                <div class="text-xl-end mt-xl-0 mt-2">
                                    <a href="{{route('provider.create')}}" type="button" class="btn btn-primary mb-2 me-2"><i class="mdi mdi-note-plus me-1"></i> Agregar Proveedor</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Proveedor</th>
                                        <th>NIT</th>
                                        <th>Teléfono</th>
                                        <th>Ciudad</th>
                                        <th>Fecha de Creación</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $providers as $provider )
                                        <tr>
                                            <td>
                                                {{ $provider['nombre'] }}
                                            </td>
                                            <td>
                                                {{ $provider['NIT'] }}
                                            </td>
                                            <td>
                                                {{ $provider['telefono'] }}
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-success-lighten">{{ $provider['ciudad'] }}</span></h5>
                                            </td>
                                            <td>
                                                Febrero 05 2024 <small class="text-muted">10:29 AM</small>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row --> 
        
    </div> <!-- container -->
    @livewireScriptConfig

</div>