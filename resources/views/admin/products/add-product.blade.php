@extends('admin.layouts.index')

@section('title')
    @parent
    Thêm sản phẩm
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">THÊM SẢN PHẨM</h4>
        <form action="{{ route('admin.products.addPostProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name_product">Name: </label>
                <input type="text" id="name_product" class="form-control" name="name_product">
                @error('name_product')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price">Giá:</label>
                <input type="text" id="price" class="form-control" name="price">
                @error('price')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="view">View:</label>
                <input type="number" id="view" class="form-control" name="view">
                @error('view')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Description:</label>
                <input type="text" id="description" class="form-control" name="description">
                @error('description')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            {{-- Description:
            <input type="text" class="form-control" name="description"> --}}
            <div class="mb-3">
                <label for="imageProduct">Ảnh SP </label>
                <input type="file" id="imageProduct" name="imageProduct" class="form-control">
            </div>
            <button type="submit" class="btn btn-info">Thêm Mới</button>
            <a href="{{ route('admin.products.listProduct') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>
@endsection
