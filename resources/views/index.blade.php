@extends('layouts.master')

@section('title', __('main.titles.title'))

@section('content')

    <h1>@lang('main.master_layout.all_products')</h1>
    @include('layouts.filter')
    <div class="row">
        @foreach($products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
    {{ $products->withQueryString()->links() }}
@endsection
