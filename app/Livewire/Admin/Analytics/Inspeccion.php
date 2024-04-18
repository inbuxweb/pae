<?php

namespace App\Livewire\Admin\Analytics;

use Livewire\Component;
use Livewire\WithFileUploads;

class Inspeccion extends Component
{
    use WithFileUploads;

    public $image;
    public $image_ia;
    public $width;
    public $height;
    public $result;
    public $diccionario = [
        'fried_chicken' => 'Pollo Frito',
        'water_spinach' => 'Espinaca de Agua',
        'fried_chicken_thigh' => 'muslo de pollo frito',
        'stir_fried_pak_choy' => 'Espinaca de Agua',
        'stir_fired_gourd' => 'calabaza agitada',
        'sausage' => 'Salcicha',
        'stir_fired_cucumber' => 'pepino salteado',
        'stir_fried_corn' => 'maíz salteado',
        'stir_fried_cabbage' => 'repollo salteado',
        'stir_fried_corn' => 'maíz salteado',
        'stir_fried_eggplant' => 'berenjenas salteadas',
        'stir_fried_carrot' => 'zanahoria frita salteada',
        'stir_fried_broccoli' => 'brócoli frito salteado',
        'roast_pork_cutlet' => 'chuleta de cerdo asada',
        'roast_chicken' => 'pollo asado',
        'steamed_egg' => 'huevo al vapor',
        ];

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024', // Max 1MB
        ]);

        // Obtener la información de la imagen
        $image = $this->image->getClientOriginalName();
        $file_tmp = $this->image->getPathname();
        // Leer el contenido del archivo
        $image_data = file_get_contents($file_tmp);
        // Convertir la imagen a base64
        $data = base64_encode($image_data);

        
        $api_key = "F6gkGe7ylYGRDbLgeNkF"; // Set API Key
        $model_endpoint = "buffet_food/3"; // Set model endpoint (Found in Dataset URL)

        // URL for Http Request
        $url = "https://detect.roboflow.com/" . $model_endpoint
        . "?api_key=" . $api_key
        . "&name=".$image;

        // Setup + Send Http request
        $options = array(
        'http' => array (
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => $data
        ));

        $context  = stream_context_create($options);
        $this->result = file_get_contents($url, false, $context);

        if($this->result){
            $this->width = json_decode($this->result)->image->width;
            $this->height = json_decode($this->result)->image->height;
        }

    }

    public function render()
    {
        return view('livewire.admin.analytics.inspeccion')
            ->extends('livewire.layouts.app')
            ->section('content');
    }
}
