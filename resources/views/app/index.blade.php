@extends('layout')

@section('content')

    <?php $app_id = 10844 ?>
    <a href="/app/create"><button class="btn btn-primary">Create new App</button></a>
    
    <a href="{{ action('AppController@edit', $app_id) }}"><button class="btn btn-primary">Edit existing App</button></a>
@endsection
