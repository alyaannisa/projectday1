@extends('master')

@section('content')
<section class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Edit Products</h1>
        </div>
        <div class="card-text p-3">
            <form action="{{route('categories.update',['id' => $categories->category_id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="">
                    <label class="form-label" for="name">Nama Kategori</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $categories->name }}">
                </div>
            
                <input type="submit" class="btn btn-primary mt-3" value="Update Kategori">
            </form>
        </div>
    </div>
</section>


@endsection