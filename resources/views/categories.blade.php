@extends('layouts.master')

@section('title', __('main.titles.all_categories'))

@section('content')

    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <h2>{{ $category->__('name') }}</h2>
                <img src="{{ Storage::url($category->image) }}">
            </a>
            <br>
            <br>
            <p>
                {{ $category->__('description') }}
            </p>
        </div>

    @endforeach

@endsection
