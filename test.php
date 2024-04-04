<?php
$result = false;
if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
  // Obtener la información de la imagen
  $image = $_FILES['image']['name'];
  $file_tmp  = $_FILES['image']['tmp_name'];
// var_dump($image);die;
  // Leer el contenido del archivo
  $image_data = file_get_contents($file_tmp );

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
$result = file_get_contents($url, false, $context);
} 
?>
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
</style>
<h3>Verifica tu plato</h3>
<form  method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <button type="submit">Subir Imagen</button>
    </form>
<?php

$diccionario = [
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
];

if($result){

  $width = json_decode($result)->image->width;
  $height = json_decode($result)->image->height;

  echo '<div class="container-full">
        <div class="container" style="
        background-image: url('.$image.');
        background-size: '.$width.'px '.$height.'px;
        width: '.$width.'px;
        height: '.$height.'px;
        ">';
  foreach(json_decode($result)->predictions as $response){
    $width_r = $response->width;
    $heigth_r = $response->height;
    $x = $response->x - 140;
    $y = $response->y - 140;

    $class = (isset($diccionario[$response->class])) ? $diccionario[$response->class] : $response->class;
    $confidence = $response->confidence;
    echo '<div style="position: absolute;
    top: '.$y.'px;
    left: '.$x.'px; 
    width: '.$width_r.'px;
    height: '.$heigth_r.'px;"  
    class="rectangule">
    <span class="ingrediente">'.$class.' </span>
    <span class="confidence">'.round($confidence,2).' </span>
    </div>';
  }
  echo '</div>';
  echo '</div>';
}
// echo "<div class='code'>";
// echo $result;
// echo "</div>";
?>