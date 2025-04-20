@extends('layouts.app')

@section('css')
<link rel="stylesheet" href=" {{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="product__inner">
            <div class="product__heading">
                <div class="product__heading-title">
                    <h2>商品一覧</h2>
                </div>
                <form class="add-form" action="/register" method="post">
                    @csrf                        
                    <button class="add-button-submit" type="submit"name="action" value="">+ 商品を追加</button>
                </form>
            </div>
        </div>
        <div class="product__wrapper">
            <form class="search-form" action="" method="post">
            @csrf
                <div class="product-search__content">
                    <div class="search__panel-item">
                        <input type="text" name="name" value="" placeholder="商品名で検索">
                        <input type="submit" value="検索">
                    </div>
                    <div class="search__panel-price">
                        <p>価格順で表示</p>
                        <select name="sort" >
                            <option value="">高い順に表示</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="product-list">
                @foreach ($products as $product)
                    <div class="product-list__item">
                        <div class="product-list__card">
                            <a href="">
                                <img src="{{ asset('fruits-img/' .$product['fruits-img']) }}" alt="{{ $product['name'] }}">
                            </a>
                            <div class="product-list__card-title">
                                <span class="product-list__name">{{ $product['name'] }}</span>
                                <span class="product-list__price">&yen;{{ $product['price'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
        </div>
        <div class="pagenation">
        </div>
    </div>
@endsection
