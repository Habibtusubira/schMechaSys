@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="./css/app.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>
                        <a href="/slayer">view the character's</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
