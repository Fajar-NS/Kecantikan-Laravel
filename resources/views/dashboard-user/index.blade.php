@extends('dashboard-user.layouts.main')

@section('container')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img src="img/kecantikan1.png" class="d-block w-100 " alt="..." height="400">
            <div class="carousel-caption d-none d-md-block">
              <h3>Next Cosmetic</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/kecantikan2.png" class="d-block w-100" alt="..." height="400">
            <div class="carousel-caption d-none d-md-block">
              <h3>Next Cosmetic</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/kecantikan3.png" class="d-block w-100" alt="..." height="400">
            <div class="carousel-caption d-none d-md-block">
              <h3>Next Cosmetic</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-1">
            <img src="img/kategori1.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary"  alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Facial Skin Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori2.png" class="d-block w-100  mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px" >Hand and Foot Care Tool</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-1">
            <img src="img/kategori3.png" class="d-block w-100 mt-3 img-thumbnail rounded border border-primary" alt="..." height="10%">
            <p class="fw-normal mt-1" style="font-size: 13px">Body Care Tools</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>
          <div class="col-md-5">
            <img src="img/kategori3.png" class="d-block w-100" alt="..." height="100%">
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="img/kategori3.png" class="d-block w-100" alt="..." height="100%">
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
          </div>
          <div class="col-md-5">
            <img src="img/kategori3.png" class="d-block w-100" alt="..." height="100%">
          </div>
        </div>
    
        <hr class="featurette-divider">
        
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
@endsection