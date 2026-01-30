@extends('layouts.admin')

@section('content')
<div class="admin-dashboard__content">
  <h2>Admin Dashboard レイアウト確認</h2>

  {{-- デバッグ情報 --}}
  <p>Contacts: {{ $contacts->count() }}件</p>
  <p>Categories: {{ $categories->count() }}件</p>

  {{-- シンプルなテーブル（エラーなし） --}}
  @if($contacts->count() > 0)
    <table>
      <tr><th>ID</th><th>Name</th></tr>
      @foreach($contacts->take(5) as $contact)
        <tr>
          <td>{{ $contact->id ?? 'N/A' }}</td>
          <td>{{ $contact->first_name ?? 'N/A' }}</td>
        </tr>
      @endforeach
    </table>
  @else
    <p>データなし（正常）</p>
  @endif
</div>
@endsection
