@extends('layouts.master')

@section('title', 'Все категории')

@section('content')

    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <h2>{{ $category->name }}</h2>
                <img src="{{ Storage::url($category->image) }}">
            </a>
            <br>
            <br>
            <p>
                {{ $category->description }}
            </p>
        </div>

    @endforeach

@endsection
