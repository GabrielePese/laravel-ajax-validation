@extends('layouts.main-layout')
@section('content')
    <div>
        <div> POSTS</div>

    <a href="{{route('pos-create')}}"> Create</a>
        <div>
            <input id="bestof" type="checkbox" name="best_of">
            <label for="best_of">BEST_OF</label>
        </div>
        <ul id="target">
            
        </ul>
    </div>
@endsection