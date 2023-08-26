@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4"></h5>
          <div class="card">

          <div class="card mb-0">
            <div class="card-body p-4">

                <div class="table-responsive text-nowrap" style="padding-top: 50px">
                    @if(session('success'))
                        <!--  Success message  -->
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @elseif(session('error'))
                        <!--  Error message  -->
                        <div class="alert alert-danger">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    <table class="table card-table" id="myTable">
                        <h1 align="center">Orders information</h1>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
<tr>
    @foreach ($Orders as $order)
    <td>{{  $order->id }}</td>
<td>{{  $order->title }}</td>
<td><a href="{{ route('view_order',encrypt($order->id)) }}" class="btn btn-outline-info m-1">More Info</a></td>
    @endforeach
</tr>
                        </tbody>
                    </table>
                </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()
