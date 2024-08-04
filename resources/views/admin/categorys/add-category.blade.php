@extends('admin.layouts.index')

@section('title')
    @parent
    Thêm LOẠI SẢN PHẨM
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">THÊM LOẠI SẢN PHẨM</h4>
        <form action="{{ route('admin.categorys.addPostCategory') }}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="nameCategory">Name: </label>
                <input type="text" id="nameCategory" class="form-control" name="nameCategory">
            </div>
            <button type="submit" class="btn btn-info">Thêm Mới</button>
            <a href="{{ route('admin.categorys.listCategory') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>
@endsection
