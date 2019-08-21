@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-emoticon font-20 text-info"></i>
              <p class="font-16 m-b-5">New Clients</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">23</h1>
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
              <p class="font-16 m-b-5">New Projects</p>
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
              <p class="font-16 m-b-5">New Invoices</p>
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
              <p class="font-16 m-b-5">New Sales</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">236</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
  </div>
@endsection

