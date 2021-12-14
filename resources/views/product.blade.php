@extends('layouts.master')

@section('title', 'Товар')

@section('content')

    <div class="col-md-12">
        @if($product->isNew())
            <span class="badge badge-success">Новинка</span>
        @endif

        @if($product->isRecommend())
            <span class="badge badge-warning">Рекомендуем</span>
        @endif

        @if($product->isHit())
            <span class="badge badge-danger">Хит продаж!</span>
        @endif

        @if($product->isEnding())
            <span class="badge badge-info">Заканчивается!</span>
        @endif
        <h1>{{ $product->name }}</h1>
        <p>Цена: <b>{{ $product->price }} грн.</b></p>
        <img src="{{ Storage::url($product->image) }}">
        <br>
        <br>
        <p>{{ $product->description }}</p>
    </div>
    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
            @csrf
        </form>
    @else
        <button class="btn btn-secondary" role="button" disabled>Не доступен</button>
        <br>
        <span>Сообщить мне, когда товар появится в наличии:</span>
        <form method="POST" action="{{ route('subscription', $product) }}">
            @csrf
            @include('auth.layouts.error', ['fieldName' => 'email'])
            <input type="text" name="email"
                   value="{{ old('email', isset(Auth::user()->email) ? Auth::user()->email : null) }}">
            </input>
            <button type="submit" class="btn btn-primary" role="button">Отправить</button>
        </form>
    @endif

@endsection
