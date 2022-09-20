<!DOCTYPE html>

<html>
    <head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

    <script src="{{ asset('mapjs/CanvasInput.js') }}"></script>
    <script src="{{ asset('mapjs/CanvasInput.min.js') }}"></script>
   
  <script src="{{ asset('mapjs/note.js') }}"></script>
    <script src="{{ asset('mapjs/gojs.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.6.23/go.js"></script>
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.6.23/go-debug-module.js"></script>-->
    <title>Mind Map</title>
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" rel="style=
    sheet"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sticky_note.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body onload="init();">
    
      <div id="myPaletteDiv" style=" background-color:#42b9f5;height: 75px">
    
    </div>
    <div class="container-sm-fluid d-flex m-1 bg-dark">
    <div><p class="text-white">Subscribe to Mind Map Gold for saving and publishing the maps.Sign Up Now!</p></div>
            <a class="btn btn-success btn-rounded m-1" href="{{ url('signup') }}">Sign Up</a>
    <button class="btn btn-warning m-1" onclick="printDiagram()"> Take Print</button> 
    <button id="svgButton" class="btn  btn-sm btn-success m-1">Save SVG and Download</button>
    <button id="" class="btn btn-success m-1">Share</button>
   <a class="btn-fab"style="color:white !important" ><i class="fa fa-sticky-note fa-2x m-1"></i></a>
   <nav class="navbar navbar-expand bg-secondry navbar-light">
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <h4 class="text-white">Hello {{ $name}}</h4>   
                        </ul>
                    </div> 
            </nav> 
    </div>
   
  
     
    <div id="myDiagramDiv" style=" height: 720px">
    
    </div>
   
   
             
	<center>
	<div  id="addnote">
	<p style="text-align:left;color:red">Choose Note Colour</p>
	<button class="button button1" data-value="pink"></button>
	<button class="button button2" data-value="#FB9292"></button>
		<textarea id="txt_note">

        </textarea>
        <input class="btn1" type="button" id="btn_add" value = "Save"></input>
		<input class="btn1" type="button" onclick=location.reload() value = "Cancel"></input>
		<br/><br/>
	</div> 
	</center> 
	<ul id="notes">
	</ul>
     
    <!--Modal -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="myModalLabel">Sign up</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange"  data-bs-dismiss="modal">Sign up</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>

	