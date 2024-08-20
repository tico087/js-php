@extends('templates.default')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{ config('app.name') }}</h2>
        </div>
        <hello-world>
        </hello-world>
    </div>
@endsection
