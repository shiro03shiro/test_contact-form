@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form">
  @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="例:山田" />
          <input type="text" name="last_name" placeholder="例:太郎" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
          <label><input type="radio" name="gender" value="male" checked />男性</label>
          <label><input type="radio" name="gender" value="female" />女性</label>
          <label><input type="radio" name="gender" value="other" />その他</label>
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel_1" placeholder="080" />
          <span class="tel-separator">-</span>
          <input type="tel" name="tel_2" placeholder="1234" />
          <span class="tel-separator">-</span>
          <input type="tel" name="tel_3" placeholder="5678" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address_1" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address_2" placeholder="例:千駄ヶ谷マンション101" />
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--select">
          <select name="inquiry_type" >
            <option value="" disabled selected>選択してください</option>
            <option value="delivery">1. 商品のお届けについて</option>
            <option value="exchange">2. 商品の交換について</option>
            <option value="trouble">3. 商品トラブル</option>
            <option value="shop">4. ショップへのお問い合わせ</option>
            <option value="other">5. その他</option>
          </select>
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="お問い合わせ内容をご記載ください。"></textarea>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
    </div>

@endsection