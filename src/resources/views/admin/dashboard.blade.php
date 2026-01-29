@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-dashboard__content">
  <div class="admin-dashboard__heading">
    <h2>Admin</h2>
  </div>
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>age</th>
      <th>nationality</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
      <td>{{$author->id}}</td>
      <td>{{$author->name}}</td>
      <td>{{$author->age}}</td>
      <td>{{$author->nationality}}</td>
    </tr>
    @endforeach
  </table>


  <form class="form" action="/search" method="post">
    @csrf
    <div class="contact-table">
      <table class="contact-table__inner">
        <tr class="contact-table__row">
          <th class="contact-table__header">お名前</th>
          <th class="contact-table__header">性別</th>
          <th class="contact-table__header">メールアドレス</th>
          <th class="contact-table__header">お問い合わせの種類</th>
        </tr>
        <tr class="contact-table__row">
          <td class="contact-table__text">
            <input type="text" value="{{ $contact['name'] }}" readonly />
          </td>
          <td class="contact-table__text">
            <input type="radio" value="{{ $contact['gender'] }}" readonly />
          </td>
          <td class="contact-table__text">
            <input type="email" value="{{ $contact['email'] }}" readonly />
          </td>
          <td class="contact-table__text">
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
          <td class="contact-table__button">
            <div class="form__button">
              <button class="form__button-submit" type="submit">送信</button>
            </div>
            <div class="form__button">
              <a href="{{ route('contact.form') }}" class="form__button-back">修正</a>
            </div>
          </td>
        </tr>

  </form>
</div>



<!-- モーダル用 -->
  <form class="form" action="/search" method="post">
    @csrf
    <div class="contact-table">
      <table class="contact-table__inner">
        <tr class="contact-table__row">
          <th class="contact-table__header">お名前</th>
          <td class="contact-table__text">
            <input type="text" value="{{ $contact['name'] }}" readonly />
          </td>
        </tr>
        <tr class="contact-table__row">
          <th class="contact-table__header">性別</th>
          <td class="contact-table__radio">
            <input type="radio" value="{{ $contact['gender'] }}" readonly />
          </td>
        </tr>
        <tr class="contact-table__row">
          <th class="contact-table__header">メールアドレス</th>
          <td class="contact-table__text">
            <input type="email" value="{{ $contact['email'] }}" readonly />
          </td>
        </tr>
        <tr class="contact-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="contact-table__text">
            <input type="tel" value="{{ $contact['tel'] }}" readonly />
          </td>
        </tr>
        <tr class="contact-table__row">
          <th class="contact-table__header">住所</th>
          <td class="contact-table__text">
            <input type="text" value="{{ $contact['address'] }}" readonly />
          </td>
        </tr>
        <tr class="contact-table__row">
          <th class="contact-table__header">建物名</th>
          <td class="contact-table__text">
            <input type="text" value="{{ $contact['building'] }}" readonly />
          </td>
        </tr>
        <tr class="contact-table__row">
          <th class="contact-table__header">お問い合わせの種類</th>
          <td class="contact-table__select">
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
        <tr class="contact-table__row">
          <th class="contact-table__header">お問い合わせ内容</th>
          <td class="contact-table__text">
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











@endsection