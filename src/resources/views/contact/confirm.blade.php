@extends('layouts.app')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/contact_confirm.css') }}"> -->
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>Confirm</h2>
  </div>
  <form class="form" action="/thanks" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['name'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__radio">
          @switch($contact['gender'])
            @case('1')
                <input type="radio" readonly />男性
                @break
            @case('2')
                <input type="radio" readonly />女性
                @break
            @case('3')
                <input type="radio" readonly />その他
                @break
          @endswitch
    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input type="email" value="{{ $contact['email'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            <input type="tel" value="{{ $contact['tel'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['address'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['building'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="confirm-table__select">
            <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />
            <select disabled>
              <option value="" disabled>選択してください</option>
              @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $contact['category_id'] == $category->id ? 'selected' : '' }}>
                  {{ $category->content }}
                </option>
              @endforeach
            </select>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['detail'] }}" readonly />
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
    <div class="form__button">
      <a href="{{ route('contact.form') }}" class="form__button-back">修正</a>
    </div>
  </form>
</div>
@endsection
