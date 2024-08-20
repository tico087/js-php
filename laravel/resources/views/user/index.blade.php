@extends('templates.default')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{ config('app.name') }}</h2>
        </div>
         <list-users :users="{{ json_encode($users) }}"></list-users>
    </div>
@endsection
