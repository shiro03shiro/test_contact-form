@extends('layouts.app')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/contact_confirm.css') }}"> -->
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>Confirm</h2>
  </div>
  <form class="form" action="{{ route('contact.thanks') }}" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['name'] }}" readonly />
            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
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
            <input type="hidden" name="email" value="{{ $contact['email'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            <input type="tel" value="{{ $contact['tel'] }}" readonly />
            <input type="hidden" name="tel_1" value="{{ $contact['tel_1'] }}">
            <input type="hidden" name="tel_2" value="{{ $contact['tel_2'] }}">
            <input type="hidden" name="tel_3" value="{{ $contact['tel_3'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['address'] }}" readonly />
            <input type="hidden" name="address" value="{{ $contact['address'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <input type="text" value="{{ $contact['building'] }}" readonly />
            <input type="hidden" name="building" value="{{ $contact['building'] }}">
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
            <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit" name="send">送信</button>
      <button class="form__button-back" type="submit" name="back">修正</button>
    </div>
  </form>
</div>
@endsection
