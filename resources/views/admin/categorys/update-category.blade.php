@extends('admin.layouts.index')

@section('title')
    @parent
    SỬA LOẠI SẢN PHẨM
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">SỬA SẢN PHẨM</h4>
        <form action="{{ route('admin.categorys.updatePutCategory', $category->category_id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nameCategory">Name: </label>
                <input type="text" id="nameCategory" class="form-control" name="nameCategory" value="{{$category->name_category}}">
            </div>
            <button type="submit" class="btn btn-info">Sửa</button>
            <a href="{{ route('admin.categorys.listCategory') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>

@endsection
