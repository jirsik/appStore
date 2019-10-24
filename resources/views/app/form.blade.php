@extends('layout')

@section('content')

    
    
    @if ($app->id)
        <h4>Form to edit existng app</h4>

        {!! Form::open(['action' => ['AppController@update', $app->id], 'method' => 'put']) !!}

    @else
    <h4>Form to create new app</h4>

        {!! Form::open(['action' => 'AppController@store', 'method' => 'post']) !!}
    @endif
    <div class="form-group">
        <label for="title" class="control-label mt-3">Title: </label>
        {!! Form::text('title', $app->title, ['class' => 'form-control']) !!}

        <label for="price" class="control-label mt-3">Price: </label>
        {!! Form::text('price', $app->price, ['class' => 'form-control']) !!}

        {!! Form::submit($lable_buton, ['class' => 'btn btn-primary mt-3']) !!}
        
        {!! Form::close() !!}
        
        <a href="{{action('AppController@index')}}"><button type="button" class="btn btn-secondary mt-3"> Go Back</button></a>
    </div>




    
    {{--
    "id":1
    "title":"Photo Editor & Candy Camera & Grid & ScrapBook"
    "category_id":1
    "rating":4.1
    "reviews":159
    "size":19000000,
    installs":10000
    "type":"Free"
    "price":0
    "content_rating":"Everyone"
    "last_updated":"2018-01-07 00:00:00"
    "current_version":"1.0.0"
    "android_version":"4.0.3 and up"}
    --}}

@endsection
