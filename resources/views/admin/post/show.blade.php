@extends('layouts.app')

@section('title-page')
    Va che bel post - {{ $elem->id }}
@endsection

@section('content')
    <div>
        <h1>{{ $elem->name }}</h1>
    </div>

    <div>
        <p>
            {{ $elem->date }}
        </p>

    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

        <p>
            {{ $elem->title }}
        </p>


        <p>
            {{ $elem->description }}
        </p>
    </div>
    <div>
        <img src="{{asset("storage/$elem->cover")}}" alt="">
    </div>




    <a href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-left-long"></i></a>
@endsection
