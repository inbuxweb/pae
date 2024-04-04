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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Colegios</a></li>
                            <li class="breadcrumb-item active">Lista de Colegios</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Colegios</h4>
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
                                    
                                </form>                            
                            </div>
                            <div class="col-xl-4">
                                <div class="text-xl-end mt-xl-0 mt-2">
                                    <a href="{{route('ingredient.create')}}" type="button" class="btn btn-primary mb-2 me-2"><i class="mdi mdi-note-plus me-1"></i> Crear Colegio</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Sede</th>
                                        <th class="text-center">Capacidad de comedor</th>
                                        <th class="text-center">Cocinas</th>
                                        <th class="text-center">Estudiantes</th>
                                        <th class="text-center">Fecha de Creación</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $purchases as $purchase )
                                        <tr>
                                            <td class="text-center">
                                                {{ $purchase['nombre'] }}
                                            </td>
                                            <td class="text-center">
                                                <h5><span class="badge badge-info-lighten">{{ $purchase['sede'] }}</span></h5>
                                            </td>
                                            <td class="text-center">
                                                <h5><span class="badge badge-success-lighten">{{ $purchase['capacidad'] }}</span></h5>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge @if( $purchase['cocinas'] < 2 ) bg-danger @else bg-success @endif">             
                                                    {{ $purchase['cocinas'] }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                {{ $purchase['estudiantes'] }}
                                            </td>
                                            <td class="text-center">
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