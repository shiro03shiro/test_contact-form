@extends('layouts.admin')

@section('content')

<div class="admin-dashboard__content">
  <div class="admin-dashboard__heading">
    <h2>Admin</h2>
  </div>

<table>
  <tr>
    <th>id</th>
    <th>first_name</th>
    <th>gender</th>
    <th>email</th>
  </tr>
  @foreach ($contacts as $contact)
  <tr>
    <td>{{$contact->id}}</td>
    <td>{{$contact->first_name}}</td>
    <td>{{$contact->gender}}</td>
    <td>{{$contact->email}}</td>
  </tr>
  @endforeach
</table>






@endsection
