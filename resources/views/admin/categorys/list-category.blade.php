@extends('admin.layouts.index')

@section('title')
    @parent
    DANH SÁCH LOẠI SẢN PHẨM
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">DANH SÁCH LOẠI SẢN PHẨM</h4>
        @if (session('message'))
            <p class="text-danger">{{ session('message') }}</p>
        @endif
        <a href="{{ route('admin.categorys.addCategory') }}"><button class="btn btn-info">Thêm mới</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên loại sản phẩm</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listCategory as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->name_category }}</td>
                        <td>
                            <a href="{{ route('admin.categorys.detailCategory', $value->category_id) }}"
                                class="btn btn-info">Chi Tiết</a>
                            <a href="{{ route('admin.categorys.updateCategory', $value->category_id) }}"
                                class="btn btn-warning">Sửa</a>
                            <form action="{{ route('admin.categorys.deleteCategory', $value->category_id) }}"
                                method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('bạn có muốn xóa kko?')"
                                    class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $listCategory->links('pagination::bootstrap-5') }}
    </div>
@endsection
