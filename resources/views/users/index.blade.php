@extends('layout.master')
@section('content')
<div class="container">
    @include('layout.alerts')
    <div class="jumbotron">
        <h3>Basic Data</h3>
        <div class="row">
            <div class="col-md-3 form-inline">
                <b>Name</b><p>{{ $user->fullName() }}</p>
            </div>
            <div class="col-md-3 form-inline">
                <b>Phone Number</b><p>{{ '0' . $user->phone }}</p>
            </div>
            <div class="col-md-3 form-inline">
                <b>Membership Number</b><p>{{ $user->registration }}</p>
            </div>
            <div class="col-md-3 form-inline">
                <b>Email Address</b><p>{{ $user->email }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 form-inline">
                <b>Address</b><p>{{ $user->address }}</p>
            </div>
            <div class="col-md-3 form-inline">
                <b>Occupation</b><p>{{ $user->occupation }}</p>
            </div>
            <div class="col-md-3 form-inline">
                <b>Marital Status</b><p>{{ $user->mariatalStatus }}</p>
            </div>
            <div class="col-md-3 form-inline">
                <b>Next of Kin</b><p>{{ $user->kins->name }}</p>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <h3>Transaction History</h3>
    </div>
</div>
@endsection