@extends('layouts.master')

@section('title', 'Главная')

@section('content')

    <h1>Все товары</h1>
    @include('layouts.filter')
    <div class="row">
        @foreach($products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
    {{ $products->withQueryString()->links() }}
@endsection
