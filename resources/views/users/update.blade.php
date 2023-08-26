@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Update information account</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{  route('update.info') }}" method="POST">
                @csrf
                @if(@session('success'))
                <div class="alert alert-success" role="alert">
                    {{  session('success') }}
                  </div>
                @endif
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{  $info_user->name }}" id="nameuser" aria-describedby="nameuser">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{  $info_user->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Currnet Password</label>
                  <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" id="exampleInputPassword1" placeholder="Currnet password" required>
                  @error('current_password')
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
