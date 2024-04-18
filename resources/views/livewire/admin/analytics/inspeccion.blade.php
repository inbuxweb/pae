<div class="container-fluid">
    <style>
        .code{
          font-family: monospace;
            background: #000;
            padding: 10;
            margin-top: 10px;
            color: #fff;
            font-size: 15px;
        }
        body{
          font-family: Arial;
          text-align: center;
        }
        .container>div{
          display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container{
          position: relative;
          margin: auto;
          background-repeat: no-repeat;
        
        }
        .rectangule{
          border: 1px solid red;
          background: rgba(0, 0, 0, 0.2);
        }
        .ingrediente{
          color: yellow;
          display: block;
        }
        .rectangule span{
            display: block;
            font-size: 20px;
            -webkit-text-stroke-width: 0.5px;
          -webkit-text-stroke-color: white;
            /* font-weight: bold; */
        }
        .confidence{
          color: yellow;
        }
        .side-nav .side-nav-link{
            text-align: left;
        }

        #codepenLink {
            position: fixed;
            bottom:0;
            right: 0;
        }
        #codepenLink img {
            height: 48px;
        }

        #capturedImage, video#video{
            max-width: 100%;
        }
    </style>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Análisis</a></li>
                        <li class="breadcrumb-item active">Inspección</li>
                    </ol>
                </div>
                <h4 class="text-start page-title">Inspección</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Subir foto del plato</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Tomar Foto</span>
                                        </a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="home">
                                        <h5 class="card-title mb-3">Subir foto del plato</h5>                        
                                        <div class="dz-message needsclick">
                                            <i class="h3 text-muted ri-upload-cloud-2-line"></i>
                                            <form id="inputForm">
                                            <input type="file" id="file">
                                            <button type="submit" class="btn btn-primary">Inspeccionar</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile">
                                        <h5 class="card-title mb-3">Tomar foto del plato</h5>   
                                        <button class="btn btn-secondary" id="activateCameraButton">Activar Cámara</button>
                                        <select class="form-select mb-3" id="cameraList" style="display: none;">
                                        <option value="">Seleccione</option>
                                        </select>
                                        <video id="video" style="display: none;" autoplay></video>
                                        <button class="mt-2 btn btn-success" id="captureButton" style="display: none;">Capturar Foto</button>
                                        <img id="capturedImage" style="display: none;">

                                    </div>
                                </div>

                                <!-- file preview template -->
                                <div class="d-none" id="uploadPreviewTemplate">
                                    <div class="card mt-1 mb-0 shadow-none border">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <img data-dz-thumbnail="" src="#" class="avatar-sm rounded bg-light" alt="">
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name=""></a>
                                                    <p class="mb-0" data-dz-size=""></p>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- Button -->
                                                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                                        <i class="ri-close-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end file preview template -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Detalles del análisis</h5> 
                                <div style="display:none" class=" spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div style="display: none" class="plato-success">
                                    <div class="alert alert-danger text-start" role="alert">
                                        <i class="ri-close-circle-line me-1 align-middle font-16"></i> 
                                        El plato no cumple con los estándares
                                    </div>
                                    <ul style="list-style: none;padding: 0;">
                                        <li class="text-start">
                                            <i class="text-success ri-checkbox-circle-fill me-1 font-16"></i> El Plato servidor está programado para el menú de Hoy
                                        </li>
                                        <li class="text-start">
                                            <i class="text-success ri-checkbox-circle-fill me-1 font-16"></i> Contiene la proteína mínima necesaria (21 gramos)
                                        </li>
                                        <li class="text-start">
                                            <i class="text-warning ri-information-fill me-1 font-16"></i> No contiene suficiente grasas saludables
                                        </li>
                                        <li class="text-start">
                                            <i class="text-danger ri-close-circle-fill me-1 font-16"></i> Se encontró un elemento extraño en el plato
                                        </li>
                                    </ul>
                                </div>   
                                <div style="display: none" class="plato-error">
                                    <div class="alert alert-danger text-start" role="alert">
                                        <i class="ri-close-circle-line me-1 align-middle font-16"></i> 
                                        El plato no cumple con los estándares
                                    </div>
                                    <ul style="list-style: none;padding: 0;">
                                        <li class="text-start">
                                            <i class="text-danger ri-close-circle-fill me-1 font-16"></i> El Plato servido no está programado para el menú de Hoy
                                        </li>
                                        <li class="text-start">
                                            <i class="text-success ri-checkbox-circle-fill me-1 font-16"></i> Contiene la proteína mínima necesaria (21 gramos)
                                        </li>
                                        <li class="text-start">
                                            <i class="text-success ri-checkbox-circle-fill me-1 font-16"></i> Contiene suficiente grasas saludables
                                        </li>
                                        <li class="text-start">
                                            <i class="text-success ri-checkbox-circle-fill me-1 font-16"></i> No e encontró un elemento extraño en el plato
                                        </li>
                                    </ul>
                                </div>                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">                    
                        <h3 class="mt-3 mb-4">Análisis del plato</h3>
                        <div style="display:none" class=" spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        <pre id="output" class="codeblock">  </pre>

                        {{-- @if ($result)
                            <div class="container-full">
                            <div class="container" style="
                                background-image: url('{{$this->image->temporaryUrl()}}');
                                background-size: {{$width}}px {{$height}}px;
                                width: {{$width}}px;
                                height: {{$height}}px;">
                                    @foreach(json_decode($this->result)->predictions as $response)
                                        @php
                                            $width_r = $response->width;
                                            $heigth_r = $response->height;
                                            $x = $response->x - 140;
                                            $y = $response->y - 140;
                                        
                                            $class = (isset($diccionario[$response->class])) ? $diccionario[$response->class] : $response->class;
                                            $confidence = $response->confidence;
                                        @endphp
                                        <div style="position: absolute;
                                        top: {{$y}}px;
                                        left: {{$x}}px; 
                                        width: {{$width_r}}px;
                                        height: {{$heigth_r}}px;"  
                                        class="rectangule">
                                        <span class="ingrediente">{{$class}}</span>
                                        <span class="confidence">{{round($confidence,2)}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif --}}
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
            {{-- <div class="card d-block">
                <div class="card-body">                    
                    <h3 class="mt-3 mb-4">Previsualización del plato</h3>
                    <div wire:loading wire:target="image" class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    @if ($image)
                        <img class="w-100" src="{{ $image->temporaryUrl() }}" alt="Imagen">
                    @endif
                </div> <!-- end card-body-->
            </div> <!-- end card--> --}}
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script>

    <!-- end row -->
    <script type="text/javascript">
$(function() {
	//values pulled from query string
	setupButtonListeners();
});

var infer = function() {
	// $('#output').html("Analizando...");
	$('.spinner-border').show();

	getSettingsFromForm(function(settings) {
		settings.error = function(xhr) {
			$('#output').html("").append([
				"Error loading response.",
				"",
				"Check your API key, model, version,",
				"and other parameters",
				"then try again."
			].join("\n"));
		};

		$.ajax(settings).then(function(response) {
            $('.spinner-border').hide();
            $('.plato-success').show();

			if(settings.format == "json") {
				var pretty = $('<pre>');
				var formatted = JSON.stringify(response, null, 4)

				pretty.html(formatted);
				$('#output').html("").append(pretty);
				$('html').scrollTop(100000);
			} else {
				var arrayBufferView = new Uint8Array(response);
				var blob = new Blob([arrayBufferView], {
					'type': 'image\/jpeg'
				});
				var base64image = window.URL.createObjectURL(blob);

				var img = $('<img/>');
				img.get(0).onload = function() {
					$('html').scrollTop(100000);
				};
				img.attr('src', base64image);
				$('#output').html("").append(img);
			}
		});
	});
};

var retrieveDefaultValuesFromLocalStorage = function() {
	try {
		var api_key = localStorage.getItem("rf.api_key");
		var model = localStorage.getItem("rf.model");
		var format = localStorage.getItem("rf.format");
	} catch (e) {
		// localStorage disabled
	}

	$('#model').change(function() {
		localStorage.setItem('rf.model', $(this).val());
	});

	$('#api_key').change(function() {
		localStorage.setItem('rf.api_key', $(this).val());
	});

	$('#format').change(function() {
		localStorage.setItem('rf.format', $(this).val());
	});
};

var setupButtonListeners = function() {
	// run inference when the form is submitted
	$('#inputForm').submit(function(e) {
        e.preventDefault();
		infer();
		return false;
	});

	// make the buttons blue when clicked

	// grab the filename when a file is selected
	$("#file").change(function() {
		var path = $(this).val().replace(/\\/g, "/");
		var parts = path.split("/");
		var filename = parts.pop();
		$('#fileName').val(filename);
	});

    
};



var getSettingsFromForm = function(cb) {
	var settings = {
		method: "POST",
	};

	var parts = [
		"https://detect.roboflow.com/",
		"buffet_food",
		"/",
		"3",
		"?api_key=F6gkGe7ylYGRDbLgeNkF"
	];

	var classes = $('#classes').val();
	if(classes) parts.push("&classes=" + classes);

	var confidence = $('#confidence').val();
	if(confidence) parts.push("&confidence=" + confidence);

	var overlap = $('#overlap').val();
	if(overlap) parts.push("&overlap=" + overlap);
    var format = "image";
	parts.push("&format=image");
	settings.format = format;

	if(format == "image") {
        var labels = "on";
		if(labels) parts.push("&labels=on");
        var stroke = 1  ;
		if(stroke) parts.push("&stroke=1");

		settings.xhr = function() {
			var override = new XMLHttpRequest();
			override.responseType = 'arraybuffer';
			return override;
		}
	}
	var capturedImage = $('#capturedImage').attr('src');

    if( capturedImage ){
        var method = "webcam";
    }else{
        var method = "upload";
    }
	if(method == "upload") {
		var file = $('#file').get(0).files && $('#file').get(0).files.item(0);
		if(!file) {
            $('.spinner-border').hide();
            $('.plato-error,.plato-success').hide();
            return alert("Por favor, seleccione una imagen");
        }

		getBase64fromFile(file).then(function(base64image) {
			settings.url = parts.join("");
			settings.data = base64image;
			cb(settings);
		});
	}else {

		if(!capturedImage) {
            $('.spinner-border').hide();
            $('.plato-error,.plato-success').hide();
            return alert("Por favor, seleccione una foto");
        }

		settings.url = parts.join("");
		settings.data = capturedImage;
		cb(settings);
	}
};

var getBase64fromFile = function(file) {
	return new Promise(function(resolve, reject) {
		var reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function() {
		resizeImage(reader.result).then(function(resizedImage){
			resolve(resizedImage);
		});
    };
		reader.onerror = function(error) {
			reject(error);
		};
	});
};


var resizeImage = function(base64Str) {

	return new Promise(function(resolve, reject) {
		var img = new Image();
		img.src = base64Str;
		img.onload = function(){
			var canvas = document.createElement("canvas");
			var MAX_WIDTH = 1500;
			var MAX_HEIGHT = 1500;
			var width = img.width;
			var height = img.height;
			if (width > height) {
				if (width > MAX_WIDTH) {
					height *= MAX_WIDTH / width;
					width = MAX_WIDTH;
				}
			} else {
				if (height > MAX_HEIGHT) {
					width *= MAX_HEIGHT / height;
					height = MAX_HEIGHT;
				}
			}
			canvas.width = width;
			canvas.height = height;
			var ctx = canvas.getContext('2d');
			ctx.drawImage(img, 0, 0, width, height);
			resolve(canvas.toDataURL('image/jpeg', 1.0));  

		};
    
	});	
};
// Obtener referencia al video y a los botones
const video = document.getElementById('video');
const activateCameraButton = document.getElementById('activateCameraButton');
const captureButton = document.getElementById('captureButton');
const capturedImage = document.getElementById('capturedImage');
const cameraList = document.getElementById('cameraList');

let cameraStream = null; // Variable para almacenar el stream de la cámara

// Función para activar la cámara
function activateCamera() {
    // Ocultar el botón de activar cámara y mostrar la lista de cámaras disponibles
    activateCameraButton.style.display = 'none';
    cameraList.style.display = 'inline-block';

    // Obtener la lista de dispositivos de entrada de audio y video
    navigator.mediaDevices.enumerateDevices()
        .then(devices => {
            devices.forEach(device => {
                // Filtrar dispositivos de video
                if (device.kind === 'videoinput') {
                    const option = document.createElement('option');
                    option.value = device.deviceId;
                    option.text = device.label || `Cámara ${cameraList.options.length + 1}`;
                    cameraList.appendChild(option);
                }
            });

            // Mostrar la lista de cámaras disponibles
            cameraList.style.display = 'inline-block';
        })
        .catch(error => {
            console.error('Error al enumerar los dispositivos de audio/video:', error);
        });
}

// Función para cambiar la cámara seleccionada
function changeCamera() {
    // Detener el stream de la cámara actual si existe
    if (cameraStream) {
        const tracks = cameraStream.getTracks();
        tracks.forEach(track => track.stop());
    }

    // Obtener el ID de la cámara seleccionada
    const selectedCameraId = cameraList.value;

    // Obtener acceso a la cámara web seleccionada
    navigator.mediaDevices.getUserMedia({ video: { deviceId: selectedCameraId } })
        .then(stream => {
            // Mostrar el video y el botón de captura
            video.style.display = 'block';
            captureButton.style.display = 'inline-block';

            // Asignar el stream de la cámara al elemento video
            video.srcObject = stream;

            // Almacenar el stream de la cámara en la variable cameraStream
            cameraStream = stream;
        })
        .catch(error => {
            console.error('Error al acceder a la cámara seleccionada:', error);
        });
}


// Función para capturar la foto
// Función para capturar la foto
function capturePhoto() {
    // Crear un lienzo para dibujar la foto capturada
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');

    // Establecer el tamaño del lienzo según el tamaño del video
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    // Dibujar la imagen del video en el lienzo
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    // Obtener la imagen como datos base64
    const base64image = canvas.toDataURL('image/jpeg');

    // Mostrar la imagen base64 en el elemento img
    capturedImage.src = base64image;
    capturedImage.style.display = 'block';

    infer();

    // Detener el stream de la cámara
    if (cameraStream) {
        const tracks = cameraStream.getTracks();
        tracks.forEach(track => track.stop());
    }

    // Ocultar el video, la lista de cámaras y el botón de captura
    video.style.display = 'none';
    cameraList.style.display = 'none';
    captureButton.style.display = 'none';
}


// Agregar evento click al botón de activar cámara
activateCameraButton.addEventListener('click', activateCamera);

// Agregar evento change a la lista de cámaras
cameraList.addEventListener('change', changeCamera);

// Agregar evento click al botón de captura
captureButton.addEventListener('click', capturePhoto);


</script>
</div>