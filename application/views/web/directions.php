<link href="../public/stylesheets/dir.css" rel="stylesheet">

<body onload="initialize()">

<div class="container">

<form action="/route" onSubmit="calcRoute();return false;" id="routeForm">

	<input type="text" id="routeStart" name="adress" title="Type Adress Here" style="color:#888;" 
    value="Type Adress Here" onfocus="inputFocus(this)" onblur="inputBlur(this)">
	<input type="submit" value="Calculate route">
	</form>

<!--   <a href="#" onclick="window.open ('../print')">print</a>  -->
	<br/>
	<div id="maps">
	<div id="map_canvas" style="width:500px; height:500px"></div>
	<br/>
</div>
<div class="row">
	<div id="directionsPanel" align="right">

		Enter a destination and get "Directions".

	</div>


</div>