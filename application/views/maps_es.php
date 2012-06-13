<link href="../public/stylesheets/dir.css" rel="stylesheet">

<body onload="initialize()">

		<form action="/route" onSubmit="calcRoute();return false;" id="routeForm">

		<input type="text" id="routeStart" name="adress" title="Escriba su direcion aqui" style="color:#888;" 
    value="Escriba su direcion aqui" onfocus="inputFocus(this)" onblur="inputBlur(this)">
		<input type="submit" value="Calcular ruta">
	</form>
	<br/>
	<div id="maps">
	<div id="map_canvas" style="width:500px; height:500px" >
	</div>
	<br/>
</div>
<div class="row">
<div class="span6">
  <div id="directionsPanel" align="right">

		Ponga su direcion para ver "Direciones".
  </div>
</div>
</div>