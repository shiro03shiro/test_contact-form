@extends('layouts.app')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>first_name</th>
    <th>gender</th>
    <th>email</th>
  </tr>
  @foreach ($contact as $contact)
  <tr>
    <td>{{$contact->id}}</td>
    <td>{{$contact->first_name}}</td>
    <td>{{$contact->gender}}</td>
    <td>{{$contact->email}}</td>
  </tr>
  @endforeach
</table>
@endsection
