@extends('layouts.app')

@section('css')
<link rel="stylesheet" href=" {{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="container">
      <div class="register__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form" action="/detail" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="product_name" placeholder="商品名を入力" value="{{ old('product_name') }}"/>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">値段</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}"/>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品画像</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <input type="file" name="image" value="ファイルを選択">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">季節</span>
                <span class="form__label--required">必須</span>
                <span class="form__label--message">複数選択可</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-checkbox">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="season[]" value="1">
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
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input-textarea">
              <textarea name="detail" placeholder="商品の説明を入力">{{ old('detail') }}</textarea>
        </div>
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit-back" type="submit" name="action" value="back">戻る</button>
            <button class="form__button-submit" type="submit" name="action" value="send">登録</button>
        </div>         
    </form>
</div>

@endsection
