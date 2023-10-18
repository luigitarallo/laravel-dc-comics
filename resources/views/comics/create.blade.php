@extends('layouts.app')

@section('main-content')
<div class='container'>
    <a href="{{route('comics.index')}}" class="btn btn-primary">Back to Comics List</a>
    <h1>Insert new Comic</h1>
    <form action="{{route('comics.store')}}" method="POST" class="row g-3">
        @csrf
        <div class="col-4">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" maxlength="50">
        </div>
        <div class="col-4">
            <label for="series">Series</label>
            <input type="text" id="series" name="series" class="form-control" maxlength="50">
        </div>
        <div class="col-4">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" class="form-control" maxlength='20'>
        </div>
        <div class="col-4">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" class="form-control" maxlength='8'>
        </div>
        <div class="col-4">
            <label for="sale_date">Sale Date</label>
            <input type="text" id="sale_date" name="sale_date" class="form-control">
        </div>
        <div class="col-4">
            <label for="thumb">Image</label>
            <input type="url" id="thumb" name="thumb" class="form-control" maxlength='500'>
        </div>
        <div class="col-12">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div>
            <button class="btn btn-danger">Save</button>
        </div>
    </form>
</div>
@endsection