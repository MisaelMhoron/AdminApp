<?php

namespace App\Http\Controllers;
use App\Restaurantes;
use Illuminate\Http\Request;

class ApiRestaurantesController extends Controller
{
    //
    public function getRestaurante(){
      $link = mysqli_connect('localhost','u493485681_appsonsonate','Golgot@2020','u493485681_appturismo');
 if(!$link){
  echo 'connections field';
 }
        
      $result = mysqli_query($link, "SELECT *, -- al seleccionar todo de restaurantes, se muestra de manera innecesaria 'mapa_idMapa'. Mejorar a futuro

(select titulo from u493485681_appturismo.mapa 
where restaurantes.mapa_idMapa = mapa.idMapa) as titulo, 

(select descripcion from u493485681_appturismo.mapa 
where restaurantes.mapa_idMapa = mapa.idMapa) as descripcMapa,

(select latitude from u493485681_appturismo.mapa 
where restaurantes.mapa_idMapa = mapa.idMapa) as latitude, 

(select longitude from u493485681_appturismo.mapa 
where restaurantes.mapa_idMapa = mapa.idMapa) as longitude

FROM u493485681_appturismo.restaurantes;");

if(mysqli_num_rows($result)){
   while($row[] = mysqli_fetch_assoc($result)){
       $json = json_encode($row);
   }
} else {
    echo 'result not found';
}

echo $json;

mysqli_close($link);
}


}
