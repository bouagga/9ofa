@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are Admin.

                    <p>cree user  <a href="{{ route('register') }}">Register</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
