@extends('layouts/main')

@section('container')
<h1 class="mb-5">Post Categories</h1>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="/categories/">
        <div class="card bg-dark text-white">
          <img src="https://source.unsplash.com/500x500?"
          class="card-img" alt="">
          <div class="card-img-overlay d-flex align-item-center p-0">
            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"></h5>
          </div>
        </div>
      </a>
    </div>
  </div>
  
</div>


@endsection

