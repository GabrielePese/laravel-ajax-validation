@extends('layouts.main-layout')
@section('content')
    <div>
        <div> POSTS</div>
        
        <form action="{{route('pos-store')}}" method="post">
            @csrf
            @method('post')

            <div>
                <label for="name"> name</label>  
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{old('name')}}">

                @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="description"> description</label>
                <input id="description" type="text" class="@error('description') is-invalid @enderror" name="description" value="{{old('description')}}">

                @error('description')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="like"> like</label>
                <input id="like" type="number" class="@error('like') is-invalid @enderror" name="like" value="{{old('like')}}">
like
                @error('like')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="shares"> shares</label>
                <input id="shares" type="number" class="@error('shares') is-invalid @enderror" name="shares" value="{{old('shares')}}">

                @error('shares')shares
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">CREA</button>
        </form>
    </div>
@endsection