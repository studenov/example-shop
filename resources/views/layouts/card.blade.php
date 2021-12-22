<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">@lang('main.properties.new')</span>
            @endif

            @if($product->isRecommend())
                <span class="badge badge-warning">@lang('main.properties.hit')</span>
            @endif

            @if($product->isHit())
                <span class="badge badge-danger">@lang('main.properties.recommend')</span>
            @endif

            @if($product->isEnding())
                <span class="badge badge-info">@lang('main.properties.out')</span>
            @endif
        </div>
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->__('name') }}">
        <div class="caption">
            <h3>{{ $product->__('name') }}</h3>
            <p>{{ $product->price }} {{ $currencySymbol }}</p>
            <form action="{{ route('basket-add', $product) }}" method="POST">

                @if($product->isAvailable())
                    <button type="submit" class="btn btn-primary" role="button">@lang('main.card_layout.add_to_basket')</button>
                @else
                    <button class="btn btn-secondary" role="button" disabled>@lang('main.card_layout.not_available')</button>
                @endif
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                   class="btn btn-default" role="button">@lang('main.card_layout.more')</a>
                @csrf
            </form>
        </div>
    </div>
</div>
