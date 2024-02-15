@extends('master')

@section('content')
<section class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Edit Products</h1>
        </div>
        <div class="card-text p-3">
            <form action="{{route('products.update',['id' => $products->product_id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="">
                    <label class="form-label" for="name">Nama Produk</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $products->name }}">
                </div>
                <div class="">
                    <label class="form-label" for="description">Deskripsi Produk</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $products->description }}</textarea>
                </div>
                <div class="">
                    <label class="form-label" for="PublishStatus">Status</label>
                    <input class="form-control" type="text" min="0" id="PublishStatus" name="PublishStatus" value="{{ $products->PublishStatus }}" />
                </div>
                <div class="">
                    <label class="form-label" for="price">Harga</label>
                    <input class="form-control" type="number" min="0" id="price" name="price" value="{{ $products->price }}" />
                </div>
                <div class="">
                    <label class="form-label" for="weight">Berat</label>
                    <input class="form-control" type="number" min="0" id="weight" name="umur" value="{{ $products->weight }}" />
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Update Produk">
            </form>
        </div>
    </div>
</section>


@endsection