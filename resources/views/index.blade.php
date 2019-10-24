@extends('layout')

@section('content')
    
    <h4>App List:</h4>
    
    <ol>
        @foreach ($list as $item)
            <?php
                $category = ($item->category) ? $item->category->name : "not specified";
            ?>
            <li>
                <strong>{{$item->title}}</strong> from {{$category}}
                {{-- you are idiot --}}  {{-- user cannot read this comment --}} 
                <!-- you are great -->
            </li>
        @endforeach
        
    </ol>
@endsection