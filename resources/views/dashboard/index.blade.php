@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-emoticon font-20 text-info"></i>
              <p class="font-16 m-b-5">Blog Posts</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">{{ count($news) }}</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-image font-20 text-success"></i>
              <p class="font-16 m-b-5">Publications</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">169</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-currency-eur font-20 text-purple"></i>
              <p class="font-16 m-b-5">Medias</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">157</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-poll font-20 text-danger"></i>
              <p class="font-16 m-b-5">Users</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">{{ count($users) }}</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
  </div>
@endsection

