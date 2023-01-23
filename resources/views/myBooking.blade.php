
@extends('layouts.app-master')

@section('content')
@auth
@if(auth()->user()->name)
<!--  Sevice data -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>My Bookings</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Vechile Type</th>
                                <th>Company</th>
                                <th>Model</th>
                                <th>Date of Booking</th>
                                <th>All Services</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Conventient Sevice data -->
                            @foreach ($users as $item)
                            @if($item->name == auth()->user()->name)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->vechiletype }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->model }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->convenientService }}</td>
                            </tr>
                            @endif
                            @endforeach
                            <!-- Custom Sevice data -->
                            @foreach ($users2 as $item)
                            @if($item->name == auth()->user()->name)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->vechiletype }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->model }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->customService }}</td>
                            </tr>
                            @endif
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endif
@endauth
@guest
@include('auth.login')
@endguest

@endsection