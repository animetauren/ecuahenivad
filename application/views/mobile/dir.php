<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script src="../public/javascript/jquery.print-preview.js" type="text/javascript" charset="utf-8"></script>
<link href="../public/stylesheets/dir.css" rel="stylesheet">
<link rel="stylesheet" href="../public/stylesheets/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="../public/stylesheets/print-preview.css" type="text/css" media="screen">


    <script type="text/javascript">

        $(function() {

            /*
             * Initialise example carousel
             */

            $("#feature > div").scrollable({interval: 2000}).autoscroll();

            

            /*

             * Initialise print preview plugin

             */

            // Add link for print preview and intialise

            $('#routeStart').prepend('<a class="print-preview">Print this page</a>');

            $('a.print-preview').printPreview();

            

            // Add keybinding (not recommended for production use)

            $(document).bind('keydown', function(e) {

                var code = (e.keyCode ? e.keyCode : e.which);

                if (code == 80 && !$('#print-modal').length) {

                    $.printPreview.loadPrintPreview();

                    return false;

                }            

            });

        });

    </script>

<body onload="initialize()">

<div class="container">
  <h1 align="center">
Your location please??
</h1>
<form action="/route" onSubmit="calcRoute();return false;" id="routeForm">

  <input type="text" id="routeStart" name="adress" title="Type Your Adress Here" style="color:#888;" 
    value="Type Your Adress Here" onfocus="inputFocus(this)" onblur="inputBlur(this)">
  <input type="submit" value="Calculate route">
  </form>

  <br/>
  <div id="maps">
  <div id="map_canvas" style="width:400px; height:400px"></div>
  <br/>
</div>
<div class="row">
  <div id="directionsPanel" align="center">

    Your Directions! :D

  </div>
</div>
</div>
<hr>