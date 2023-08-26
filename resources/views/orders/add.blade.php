@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Add order information</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{  route('add_orders') }}" method="POST">
                @csrf
                @if(@session('success'))
                <div class="alert alert-success" role="alert">
                    {{  session('success') }}
                  </div>
                @endif
                <input type="hidden" name="user_id" value="{{  auth()->user()->id }}">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="nameuser" aria-describedby="title">
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Des</label>
                  <textarea class="form-control @error('des') is-invalid @enderror" name="des" id="des" aria-describedby="des"></textarea>
                  @error('des')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()
