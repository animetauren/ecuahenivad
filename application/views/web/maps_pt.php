<link href="../public/stylesheets/dir.css" rel="stylesheet">

<body onload="initialize()">

			<form action="/route" onSubmit="calcRoute();return false;" id="routeForm">

		<input type="text" id="routeStart" name="adress" title="Digite o endere&#231;o aqui" style="color:#888;" 
    value="Digite o endere&#231;o aqui" onfocus="inputFocus(this)" onblur="inputBlur(this)">
		<input type="submit" value="Calcular a rota">
	</form>
	<br/>
	<div id=""maps>
	<div id="map_canvas" style="width:500px; height:500px" ></div>
	<br/>
		</div>
		<div class="row">
<div class="span6">
	<div id="directionsPanel" align="right">

		Introduza um destino e obter "Direcções".
  </div>
</div>
</div>