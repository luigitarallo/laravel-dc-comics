@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
<div class="container">
<h1>Comics List</h1>
<div class='container'>
    <a href="{{route('comics.create')}}" class="btn btn-primary">Add New Comic</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale Date</th>
        <th scope="col">Type</th>
        <th scope="col">Creation</th>
        <th scope="col">Last Update</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
          <td>{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->series}}</td>
          <td>{{$comic->sale_date}}</td>
          <td>{{$comic->type}}</td>
          <td>{{$comic->created_at}}</td>
          <td>{{$comic->updated_at}}</td>
          <td>
            <a href="{{route('comics.show', $comic)}}">
                <i class="fa-regular fa-eye"></i></td>
            </a>

        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection