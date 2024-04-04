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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Platos</a></li>
                            <li class="breadcrumb-item active">Platos</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Platos</h4>
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
                                    <a href="{{route('plates.create')}}" type="button" class="btn btn-primary mb-2 me-2"><i class="mdi mdi-note-plus me-1"></i> Agregar Plato</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th></th>
                                        <th>Nombre</th>
                                        <th>Horario</th>
                                        <th>Ingredientes</th>
                                        <th>Nutricional</th>
                                        <th>Fecha de Creación</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $plates as $plate )
                                        <tr>
                                            <td>
                                                <img style="max-width: 80px;" src="{{$plate['imagen']}}" alt="">
                                            </td>
                                            <td>
                                                {{ $plate['nombre'] }}
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-info-lighten">{{ $plate['tipo'] }}</span></h5>
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach($plate['ingredientes'] as $ingrediente)
                                                    <li>{{$ingrediente}}</li>
                                                    @endforeach
                                                </ul>

                                            </td>
                                            <td>
                                                {{ $plate['informacion_nutricional'] }}
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