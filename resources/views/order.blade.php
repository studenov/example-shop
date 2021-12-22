@extends('layouts.master')

@section('title', __('main.titles.place_order'))

@section('content')

    <h1>@lang('main.approve_order'):</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>@lang('main.order.full_cost'): <b>{{ $order->calculateFullSum() }} {{ $currencySymbol }}</b></p>
            <form action="{{ route('basket-confirm') }}" method="POST">
                <div>
                    <p>@lang('main.order.personal_data'):</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">@lang('main.order.data.name'): </label>
                            <div class="col-lg-4">
                                @include('auth.layouts.error', ['fieldName' => 'name'])
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">@lang('main.order.data.phone'): </label>
                            <div class="col-lg-4">
                                @include('auth.layouts.error', ['fieldName' => 'phone'])
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        @guest
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">@lang('main.order.data.email'): </label>
                                <div class="col-lg-4">
                                    @include('auth.layouts.error', ['fieldName' => 'email'])
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                </div>
                            </div>
                        @endguest
                    </div>
                    @csrf
                    <br>
                    <button type="submit" class="btn btn-success">@lang('main.order.approve_order')</button>
                </div>
            </form>
        </div>
    </div>

@endsection
