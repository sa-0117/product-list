@extends('layouts.app')

@section('css')
<link rel="stylesheet" href=" {{ asset('css/detail.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="product__inner">
            <nav class="breadcrumbs">
                <ol>
                    <li class="breadcrumbs__item">
                        <a href="/">商品一覧<a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="#">キウイ</a>
                    </li>
                </ol>
            </nav>
            <form class="form" action="" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form__row">
                    <div class="form__image-column">
                        <div class="form__group">
                            <div class="form__image-preview"  style="background-image: url('{{ old('image_path') }}')">

                            </div>
                            <input type="file" name="image" value="ファイルを選択">
                        </div>
                    <div class="form__error">

                    </div>

                    <div class="form__group">
                        <label class="form__group-title">商品説明</label>
                        <textarea name="detail" placeholder="商品の説明を入力">{{ old('detail') }}</textarea>
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__image-column">
                    <div class="form__group">
                        <label class="form__group-title">商品名</label>
                        <input type="text" name="product_name" placeholder="商品名を入力" value="{{ old('product_name') }}"/>
                    </div>
                    <div class="form__error">

                    </div>
                
                    <div class="form__group">
                        <label class="form__group-title">値段</label>
                        <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}"/>
                    </div>
                    <div class="form__error">

                    </div>

                    <div class="form__group">
                        <label class="form__group-title">季節</label>
                        <div class="form__input-checkbox">
                            <label class="custom-checkbox">
                            <input type="checkbox" name="season" value="1">
                            <span class="checkbox-circle"></span>
                            <span>春</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="season" value="2">
                            <span class="checkbox-circle"></span>
                            <span>夏</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="season" value="3" >
                            <span class="checkbox-circle"></span>
                            <span>秋</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="season" value="4" >
                            <span class="checkbox-circle"></span>
                            <span>冬</span>
                        </label>
                    </div>
                    <div class="form__error">

                    </div>                    
                </div>
</div>
</div>
                <div class="form__button">
                    <button class="form__button-submit-back" type="submit" name="action" value="back">戻る</button>
                    <button class="form__button-submit" type="submit" name="action" value="send">変更を保存</button>
                </div>   
                                            
            </form>
        </div>
    </div>

@endsection
