@extends('templates.default')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{ config('app.name') }}</h2>
        </div>
        <list-okrs okrs = "@json($okrs)">
        </list-okrs>
    </div>
@endsection
