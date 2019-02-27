@extends('layouts.app')
@section('title', 'Welcome to the gorilla fun planner... Please login or make an account')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br />
                    <div id="counter"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/redirect.js"></script>
@endsection
