<!DOCTYPE html>
<html lang="en {{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mind Map</title>
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" rel="style=
    sheet"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="antialiased">
        <header>
       
            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay">
            <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mind Map</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
                           <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="signin">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tutorials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mind Map Gold</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signin">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Mind Map</h1>
                        <h2 class="lead mb-0">Free Online Mind Mapping</h2>

                    </div>
                </div>
            </div>
            </div>
            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/images/Mind Mapping Stock.mp4" type="video/mp4">
            </video>

            <!-- The header content -->
           
        </header>
        <section>
        <div class="container p-5">
        <div class="row p-5 pl-6 mr-6 w-100 h-100">
        <div class="col-lg-6 col-sm-6 pt-4">
        <h2 class="text-dark"> Create and Share</h2><h2 class="text-primary"> amazing mind maps</h2> 
        <p class="mb-0 ">Capture ideas at the speed of thought – using a mind map maker designed to help you focus on your ideas and remove all the distractions while mindmapping.

Create unlimited mind maps for free, and store them in the cloud. Your mind maps are available everywhere, instantly, from any device.

Brainstorm, create presentations and document outlines with mind maps, and publish your ideas online and to social networks.</p>
        </div>
        <div class="col-lg-6 col-sm-6 pt-4">
         <!-- CUSTOM BLOCKQUOTE -->
         <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info">@consequat</a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->
        </div>
        </section>
        <section id="why">
        <div class="container mt-5 p-6 mb-3">
        <div class="row">
        <h1 class="text-dark text-center p-5"><strong>WHY USE MIND MAP</strong></h1>
        <h5 class="text-secondry text-centerp-5">MindMup is great for individual note-taking, collaborative planning, teamwork and classrooms.</h5>
      <div class="col-lg-7 col-sm-7 p-4">
      <ol class="p-3">
       <li class="pb-4">
       Powerful keyboard shortcuts speed up your work
       </li>
       <li class="pb-4">
       Frictionless interface helps you focus
       </li>
       <li class="pb-4">
       Take Print and download your map easily
       </li>
       <li class="pb-4">
       Publish and share maps online
       </li >
       <li>
       Easily save to Google Drive and manage using Google Apps
       </li>
       </ol>
      </div>
      <div class="col-lg-5 col-sm-5">
      
      </div>
      
        </div>
        </div>
        
        </section>
        <section id="what">
        <div class="container mb-3 p-6">
<h1 class="text-center p-6">Do more with mind maps,faster</h1>
<h5 class="text-center text-primary p-3">Here are just some of the great things you can do with MindMup:</h5>
        <div class="row">
        <div class="col-lg-3 col-sm-3">
        <div class="card border-light">
        <i class="fa-solid fa-pen fa-4x text-center pt-4"></i>
       <div class="card-body">
    <h5 class="card-title text-center">Structure Writing</h5>
    <p class="card-text">
      
Use notes and attachments to quickly create a structure for an article or a writing assignment, then create a document outline and continue editing in your favourite writing tool
  </div>
</div>
       
        </div>
        <div class="col-lg-3 col-sm-3"> <div class="card border-light">
        <i class="fa-solid fa-pen fa-4x text-center pt-4"></i>
       <div class="card-body">
    <h5 class="card-title text-center">Structure Writing</h5>
    <p class="card-text">
      
Use notes and attachments to quickly create a structure for an article or a writing assignment, then create a document outline and continue editing in your favourite writing tool
  </div>
</div></div>
        <div class="col-lg-3 col-sm-3"> <div class="card border-light">
        <i class="fa-solid fa-pen fa-4x text-center pt-4"></i>
       <div class="card-body">
    <h5 class="card-title text-center">Structure Writing</h5>
    <p class="card-text">
      
Use notes and attachments to quickly create a structure for an article or a writing assignment, then create a document outline and continue editing in your favourite writing tool
  </div>
</div></div>
        <div class="col-lg-3 col-sm-3">
         <div class="card border-light">
        <i class="fa-solid fa-pen fa-4x text-center pt-4"></i>
       <div class="card-body">
    <h5 class="card-title text-center">Structure Writing</h5>
    <p class="card-text">
      
Use notes and attachments to quickly create a structure for an article or a writing assignment, then create a document outline and continue editing in your favourite writing tool
  </div>
</div></div>
        
        </div>
        </div>
        
        </section>
        <section id="cardimg">
        <div class="container mb-5 p-5">
        <div class="row">
        <div class="col-lg-4 col-sm-4">
      <div class="card">
      <div class="card-header text-center"> <i class="fa-solid fa-pen fa-3x text-center pt-3"></i>
      <h4 class="text-secondry text-center p-3">Free User</h4>
      </div>
      <div class="card-body">
        <div class="p-5 text-center heading"><h4>Forever Free</h4> </div>
          <p class="p-3">Unlimited number of maps
No account/login required
Save maps up to 100 KB to MindMup storage, for up to six months.
Save larger maps to Google Drive.
Export maps up to 100 KB.
Publish maps for up to six months.
Community chat help and support.</p>
</div>
<div class=" p-5">
         
        </div>  
      </div>
      </div>
      <div class="col-lg-4 col-sm-4">
      <div class="card">
      <div class="card-header text-center"> <i class=" pt-3 fa-solid fa-pen fa-3x text-center"></i>
      <h4 class="text-secondry text-center p-3">Personal Gold</h4>
      </div>
      <div class="card-body">
        <div class="p-4  text-center heading"><h6>Monthly</h6><br><h4>USD 2.99$</h4> </div>
          <p class="p-4">Unlimited number of maps
No account/login required
Save maps up to 100 KB to MindMup storage, for up to six months.
Save larger maps to Google Drive.
Export maps up to 100 KB.
Publish maps for up to six months.
Community chat help and support.</p>
</div>
          
    
      
        <div class="card-footer text-center">
          <button type="button" class="btn btn-primary" >More Info</button>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
      <div class="card">
      <div class="card-header text-center"> <i class="fa-solid fa-pen fa-3x text-center pt-3"></i>
      <h4 class="text-secondry text-center p-3">Organizational Gold</h4>
      </div>
      <div class="card-body">
      <div class="p-4  text-center heading"><h6>Yearly</h6><br><h4>USD 100$</h4> </div>
          <p class="p-4">Unlimited number of maps
No account/login required
Save maps up to 100 KB to MindMup storage, for up to six months.
Save larger maps to Google Drive.
Export maps up to 100 KB.
Publish maps for up to six months.
Community chat help and support.</p>
</div>
          
    
      
        <div class="card-footer text-center">
          <button type="button" class="btn btn-primary" >More Info</button>
        </div>
        </div>
      </div>
        </div>
        
        </div>
  </section>
  <section id="storage">
  <div class="container">
  <div class="row">
  <div class="p-5 text-center"><h1> Storage Options</h1>  </div>
  <div class="col-md-3 p-3">
                <!-- Tabs nav -->
                <ul class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <li> <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Mind Map Cloud</span></a></li> 

                  <li><a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Google Drive</span></a></li>  
                    </ul>
 

  </div>
  <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4">MindMup Cloud</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn  btn-lg btn-primary mt-4 align-items-right">Create New Map</button>
                    <button class="btn  btn-lg btn-warning mt-4 ">Open Existing Map</button>
                    </div>
                  
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Google Drive</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn  btn-lg btn-primary mt-4 align-items-right">Create New Map</button>
                    <button class="btn  btn-lg btn-warning mt-4 ">Open Existing Map</button>
                    </div>
                </div>
            </div>
  </div>
  
  </section>
  <section id="end">
  <div class="container mt-5 p-5">
  <div class="row p-5">
  <div class="col-lg-3 col-sm-3"> <i class="fa fa-user-circle-o mr-2"></i>MindMup is a frictionless online mind map creator, developed by Sauf Pompiers Ltd.</div>
  <div class="col-lg-3 col-sm-3">
  <ul class="p-3">
  <li><strong>Quick Access</strong></li>
  <li>Tutorial</li>
  <li>Suggest New Feature</li>
  <li>Pricing</li>
  <li>Contact Us</li>

  </ul>
  </div>
  <div class="col-lg-3 col-sm-3">
  <ul class="p-3">
  <li><strong>Key Information</strong></li>
  <li>Tutorial</li>
  <li>Suggest New Feature</li>
  <li>Pricing</li>
  <li>Contact Us</li>

  </ul>
  </div>
  <div class="col-lg-3 col-sm-3">
  <ul class="p-3">
  <li><strong>News</strong></li>
  <li>Tutorial</li>
  <li>Suggest New Feature</li>
  <li>Pricing</li>
  <li>Contact Us</li>

  </ul>
  </div>
  </div>
  </div>
  
  </section>

</body>

</html>