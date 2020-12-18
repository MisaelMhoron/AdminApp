@extends('layouts.layout')
@section('content')
<style>
.label {
  color: black;
  padding: 8px;
  font-family: Arial; 
  font-size: 11pt;
}

</style>

<div class="row">
	<section class="content" >
		<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Sitio Turistico</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('sitioturistico.store') }}"  role="form" enctype= "multipart/form-data">
							{{ csrf_field() }}
										@include('errores.error')
		<h6>Los campos marcados con <span style="color:red; font-size: 15pt">*</span> son obligatorios</h6>						
							<div>						
							<div class="form-group">
    <label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="nombre">Nombre del sitio turístico</label><span style="color:red; font-size: 15pt">*</span>
<input type="text" name="nombre" required="required" id="nombre" style="font-family: Arial; font-size: 11pt;height:34px" class="form-control"   placeholder="nombre..." value="{{ old('nombre') }}" >
</div>
	</div>
	</div>
<!-------------------------------------------------------------------->
						
@yield('scripts')

<script>
/****************para reset imagen********************* */
function Preview_Image_Before_Upload(fileinput_id, preview_id) {
  var oFReader = new FileReader();
  var fileArray = [];
  fileArray.push(document.getElementById(fileinput_id).files[0])
  fileArray.forEach(function(entry) {

    oFReader.readAsDataURL(fileArray[0]);

  });

  //console.log(fileArray)

  // oFReader.readAsDataURL(fileArray[0]);
  oFReader.onload = function(oFREvent) {
    if (window.FileReader && window.File && window.FileList && window.Blob) {

      var elem = document.getElementById("uploadPreview1");

      elem.src = oFREvent.target.result;

     // document.getElementById("placehere").appendChild(elem);
      document.getElementById("uploadPreview1").innerHTML=elem;

    }
  };
};

function removeFns(){
//document.getElementById("uploadPreview").innerHTML=null;
document.getElementById('uploadImage1').value = ""
document.getElementById('uploadPreview1').src = "#";

}		
</script>
<!-- -------------------------------------- -->
<div class="col-xs-15 col-sm-15 col-md-15">					
		<div class="form-group">
    <label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="imagen">Imagen</label><span style="color:red; font-size: 15pt">*</span> 
        <input name="imagen" type="file"  id="uploadImage1" required="required"  onchange="Preview_Image_Before_Upload('uploadImage1', 'uploadPreview1');" class="file_input" value="{{old('imagen')}}"></input> 

		<img id="uploadPreview1" onclick="removeFns()" class="uploadPreview1" width="75%" height="75%"/>
		<div id="placehere" class="uploadPreview1" width="75%" height="75%">

		</div>
		</div>
		
<!-------------------------------------------------------------------->	 
<script>
/****************para reset imagen********************* */
function resetimg2(fileinput_id, preview_id) {
  var oFReader = new FileReader();
  var fileArray = [];
  fileArray.push(document.getElementById(fileinput_id).files[0])
  fileArray.forEach(function(entry) {

    oFReader.readAsDataURL(fileArray[0]);

  });

  //console.log(fileArray)

  // oFReader.readAsDataURL(fileArray[0]);
  oFReader.onload = function(oFREvent) {
    if (window.FileReader && window.File && window.FileList && window.Blob) {

      var elem = document.getElementById("uploadPreview2");

      elem.src = oFREvent.target.result;

     // document.getElementById("placehere").appendChild(elem);
      document.getElementById("uploadPreview2").innerHTML=elem;

    }
  };
};

function removeimg2(){
//document.getElementById("uploadPreview").innerHTML=null;
document.getElementById('uploadImage2').value = ""
document.getElementById('uploadPreview2').src = "#";

}		
</script>
<div class="col-xs-15 col-sm-15 col-md-15">					
		<div class="form-group">
    <label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="imagen">Imagen 2</label>  
         <input name="imagen2" type="file" id="uploadImage2" onchange="resetimg2('uploadImage2', 'uploadPreview2');" class="file_input" value="{{ old('imagen2') }}">               
	
		<img id="uploadPreview2" onclick="removeimg2()" class="uploadPreview2" width="75%" height="75%"/>
		<div id="placehere" class="uploadPreview2" width="75%" height="75%">

		</div>
		</div>
	
<!-------------------------------------------------------------------->
<script>
/****************para reset imagen********************* */
function resetimg3(fileinput_id, preview_id) {
  var oFReader = new FileReader();
  var fileArray = [];
  fileArray.push(document.getElementById(fileinput_id).files[0])
  fileArray.forEach(function(entry) {

    oFReader.readAsDataURL(fileArray[0]);

  });

  //console.log(fileArray)

  // oFReader.readAsDataURL(fileArray[0]);
  oFReader.onload = function(oFREvent) {
    if (window.FileReader && window.File && window.FileList && window.Blob) {

      var elem = document.getElementById("uploadPreview3");

      elem.src = oFREvent.target.result;

     // document.getElementById("placehere").appendChild(elem);
      document.getElementById("uploadPreview3").innerHTML=elem;

    }
  };
};
function removeimg3(){
//document.getElementById("uploadPreview").innerHTML=null;
document.getElementById('uploadImage3').value = ""
document.getElementById('uploadPreview3').src = "#";
}	
</script>

<div class="col-xs-15 col-sm-15 col-md-15">					
		<div class="form-group">
    <label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="imagen">Imagen 3</label>  
        <input name="imagen3" type="file" id="uploadImage3" onchange="resetimg3('uploadImage3', 'uploadPreview3');" class="file_input" value="{{ old('imagen3') }}">               
		
		<img id="uploadPreview3" onclick="removeimg3()" class="uploadPreview3" width="75%" height="75%"/>
		<div id="placehere" class="uploadPreview3" width="75%" height="75%">
	
		</div>
		</div>
	

<!-------------------------------------------------------------------->   
	
		@error('texto')
         <div class="alert alert-danger">
        el texto es requerido
		</div>
		@enderror   
	
		<div>	
		<div class="col-xs-15 col-sm-15 col-md-15">					
		<div class="form-group">
    <label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="nombre">Descripción del sitio turístico</label><span style="color:red; font-size: 15pt">*</span>
	<textarea name="texto" rows="8" style="font-family: Arial;text-align: justify; font-size: 11pt"  cols="30" id="texto" required="required" class="form-control input-sm" placeholder="Agregar descripción del sitio" value="{{ old('texto') }}" >{{ old('texto') }}</textarea>
	</div>
	</div>
	</div>
	
<!------------------------------------------------------------------------------>	
<script>
$(document).on('change','input[type="checkbox"]' ,function(e) {
    if(this.id=="mapa_idMapa") {
        if(this.checked) $('#mapa_idMapa').val(this.value);
        else $('#mapa_idMapa').val("");
    }
});

</script>


<div>
<div>						
		<div class="form-group">
		<label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="nombre">Mapa</label>
	<input type="text" name="mapa_idMapa"  id="mapa_idMapa" readonly  style=" font-family: Arial; font-size: 11pt;height:34px" class="form-control"  aria-describedby="basic-addon1" placeholder="N° de mapa..." value="{{ old('mapa_idMapa') }}"></textarea>
	</div>
	</div>
	</div>
		
<!--------------------------boton para modal -------------------->	
<script>
function llamarVistaParcial() {
	//var laURLDeLaVista = 'https://192.168.43.22/sonsonateadmin/public/modal/';
	var laURLDeLaVista = 'https://www.turismoapps.com/modal?api_key=PZifmOFMzXz1xf7V01e94ypEMmLtPFpmmIJkTtyXCLc=';
    $.ajax({
        cache: false,
        async: true,
        type: "GET",
        url: laURLDeLaVista,
        data: {},
        success: function (response) {
            $('#resultado').html('');
            $('#resultado').html(response);
        }
    });
}
</script>
<button type="button" class="btn btn-info" onclick="llamarVistaParcial();" data-toggle="modal" data-target="#myModal" >
ver mapas
</button>


<!-- Modal -->
<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" data-backdrop="static" data-keyboard="false"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="text-align:center;" class="modal-title">Mapas</h4>
        </div>
        <div class="modal-body">
            <div id="resultado"></div>
        </div>
		
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
        </div>
    </div>
</div>
</div>
<br>
<br>
<!-------------------------------------------------------------->
  <h5> (Opcional) ¿Quieres agregar información para mostrarse con código QR ?, deberá llenar los tres campos </h5> 
	<div>
	<div class="col-xs-15 col-sm-15 col-md-15">
	<div class="form-group">
	<label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="nombre">Descripción del sitio turístico para QR</label>
	<textarea name="textoQR" rows="8" cols="30" id="textoQR" style="font-family: Arial;text-align: justify; font-size: 11pt" class="form-control input-sm" placeholder="Descripcion del sitio..." value="{{ old('textoQR') }}">{{ old('textoQR') }}</textarea>
	</div>
	</div>
	</div>
	<!-------------------------------------------------------------------->      
<script>
/****************para reset imagen********************* */
function resetimg4(fileinput_id, preview_id) {
  var oFReader = new FileReader();
  var fileArray = [];
  fileArray.push(document.getElementById(fileinput_id).files[0])
  fileArray.forEach(function(entry) {

    oFReader.readAsDataURL(fileArray[0]);

  });

  //console.log(fileArray)

  // oFReader.readAsDataURL(fileArray[0]);
  oFReader.onload = function(oFREvent) {
    if (window.FileReader && window.File && window.FileList && window.Blob) {

      var elem = document.getElementById("uploadPreview4");

      elem.src = oFREvent.target.result;

     // document.getElementById("placehere").appendChild(elem);
      document.getElementById("uploadPreview4").innerHTML=elem;

    }
  };
};
function removeimg4(){
//document.getElementById("uploadPreview").innerHTML=null;
document.getElementById('uploadImage4').value = ""
document.getElementById('uploadPreview4').src = "#";
}	
</script>

<div class="col-xs-15 col-sm-15 col-md-15">					
		<div class="form-group">
    <label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="imagen">Imagen QR</label>  
        <input name="imgQR" type="file" id="uploadImage4" onchange="resetimg4('uploadImage4', 'uploadPreview4');" class="file_input" value="{{ old('imgQR') }}">               
	
		<img id="uploadPreview4" onclick="removeimg4()" class="uploadPreview4" width="75%" height="75%"/>
		<div id="placehere" class="uploadPreview4" width="75%" height="75%">
	
		</div>
		</div>
<!------------------------------------->

<div>
<div>						
		<div class="form-group">
		<label style="color: black;padding: 8px;font-family: Arial;
font-size: 11pt" for="nombre">Code QR</label>
	<input type="text" name="codeQR"  id="codeQR"   style=" font-family: Arial; font-size: 11pt;height:34px" class="form-control"  aria-describedby="basic-addon1" placeholder="Descripcion del sitio..." value="{{ old('codeQR') }}"></textarea>
	</div>
	</div>
	</div>
	
<!-------------------------------------------------------------->	

	<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12">
		<input type="submit"  value="Guardar" class="btn btn-success btn-block">
		<a href="{{ route('sitioturistico.index') }}" class="btn btn-warning btn-block" >Cancelar</a>
								</div>	

							</div>
						</form>
					</div>
				</div>


	</section>
	@endsection
