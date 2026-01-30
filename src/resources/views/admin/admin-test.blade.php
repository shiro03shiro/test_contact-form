@extends('layouts.app')
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>email</th>
  </tr>
  @foreach ($contact as $contact)
  <tr>
    <td>{{$contact->id}}</td>
    <td>{{$contact->name}}</td>
    <td>{{$contact->gender}}</td>
    <td>{{$contact->email}}</td>
  </tr>
  @endforeach
</table>
@endsection
