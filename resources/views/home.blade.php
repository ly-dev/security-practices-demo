@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test Environments</div>
                <div class="card-body">
                    MY_SECRET: {{ env('MY_SECRET') }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test Links</div>
                <div class="card-body">
                    <a href="{{ route('password-confirmation') }}" target="_blank">need password confirmation</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
