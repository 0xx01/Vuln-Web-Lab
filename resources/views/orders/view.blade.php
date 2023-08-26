@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">{{  $Order->title }}</h5>
          <div class="card mb-0">
            <div class="card-body p-4">
              <p>{{  $Order->des }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()
