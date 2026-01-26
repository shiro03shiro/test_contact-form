@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact_form.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="例:山田"  value="{{ old('first_name') }}" />
          <input type="text" name="last_name" placeholder="例:太郎"  value="{{ old('last_name') }}" />
        </div>
        <div class="form__error">
          @error('first_name')
          {{ $message }}
          @enderror
          @error('last_name')
          {{ $message }}
          @enderror
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
          @error('gender')
          {{ $message }}
          @enderror
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
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
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
          <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel_1') }}" />
          <span class="tel-separator">-</span>
          <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel_2') }}" />
          <span class="tel-separator">-</span>
          <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel_3') }}" />
        </div>
        <div class="form__error">
          @error('tel')
          {{ $message }}
          @enderror
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
          <input type="text" name="address_1" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address_1') }}" />
        </div>
        <div class="form__error">
          @error('address_1')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address_2" placeholder="例:千駄ヶ谷マンション101" value="{{ old('address_2') }}" />
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
          <select name="inquiry_type">
            <option value="" {{ old('inquiry_type') == '' ? 'selected' : '' }} disabled>選択してください</option>
            <option value="delivery" {{ old('inquiry_type') == 'delivery' ? 'selected' : '' }}>1. 商品のお届けについて</option>
            <option value="exchange" {{ old('inquiry_type') == 'exchange' ? 'selected' : '' }}>2. 商品の交換について</option>
            <option value="trouble" {{ old('inquiry_type') == 'trouble' ? 'selected' : '' }}>3. 商品トラブル</option>
            <option value="shop" {{ old('inquiry_type') == 'shop' ? 'selected' : '' }}>4. ショップへのお問い合わせ</option>
            <option value="other" {{ old('inquiry_type') == 'other' ? 'selected' : '' }}>5. その他</option>
          </select>
        </div>
        <div class="form__error">
          @error('inquiry_type')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="お問い合わせ内容をご記載ください。">{{ old('content') }}</textarea>
        </div>
        <div class="form__error">
          @error('content')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>

@endsection