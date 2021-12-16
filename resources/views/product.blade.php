@extends('layouts.master')

@section('title', __('main.titles.product'))

@section('content')

    <div class="col-md-12">
        @if($product->isNew())
            <span class="badge badge-success">@lang('main.new')</span>
        @endif

        @if($product->isRecommend())
            <span class="badge badge-warning">@lang('main.recommend')</span>
        @endif

        @if($product->isHit())
            <span class="badge badge-danger">@lang('main.hit')</span>
        @endif

        @if($product->isEnding())
            <span class="badge badge-info">@lang('main.out')</span>
        @endif
        <h1>{{ $product->name }}</h1>
        <p>Цена: <b>{{ $product->price }} @lang('main.properties.uah').</b></p>
        <img src="{{ Storage::url($product->image) }}">
        <br>
        <br>
        <p>{{ $product->description }}</p>
    </div>
    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" class="btn btn-success" role="button">@lang('main.product.add_to_basket')</button>
            @csrf
        </form>
    @else
        <button class="btn btn-secondary" role="button" disabled>@lang('main.product.not_available')</button>
        <br>
        <span>@lang('main.product.tell_me'):</span>
        <form method="POST" action="{{ route('subscription', $product) }}">
            @csrf
            @include('auth.layouts.error', ['fieldName' => 'email'])
            <input type="text" name="email"
                   value="{{ old('email', isset(Auth::user()->email) ? Auth::user()->email : null) }}">
            </input>
            <button type="submit" class="btn btn-primary" role="button">@lang('main.product.subscribe')</button>
        </form>
    @endif

@endsection
