@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')

    <h1>Подтвердите заказ:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Общая стоимость заказа: <b>{{ $order->calculateFullSum() }} грн.</b></p>
            <form action="{{ route('basket-confirm') }}" method="POST">
                <div>
                    <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-4">
                                @include('auth.layouts.error', ['fieldName' => 'name'])
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона: </label>
                            <div class="col-lg-4">
                                @include('auth.layouts.error', ['fieldName' => 'phone'])
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        @guest
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    @include('auth.layouts.error', ['fieldName' => 'email'])
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                </div>
                            </div>
                        @endguest
                    </div>
                    @csrf
                    <br>
                    <button type="submit" class="btn btn-success">Подтвердить заказ</button>
                </div>
            </form>
        </div>
    </div>

@endsection
