@extends('admin.layouts.index')

@section('title')
    @parent
    DANH SÁCH SẢN PHẨM
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">DANH SÁCH SẢN PHẨM</h4>
        @if (session('message'))
            <p class="text-danger">{{ session('message') }}</p>
        @endif
        <a href="{{ route('admin.products.addProduct') }}"><button class="btn btn-info">Thêm mới</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">View</th>
                    <th scope="col">description</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProduct as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->name_product }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ $value->view }}</td>
                        <td>{{ $value->description }}</td>
                        <td>
                            <img class="img-product" src="{{ asset($value->image) }}" alt="" width="100px"
                                height="100px">
                        </td>
                        <td>
                            <a href="{{ route('admin.products.detailProduct', $value->product_id) }}"
                                class="btn btn-info">Chi Tiết</a>
                            <a href="{{ route('admin.products.updateProduct', $value->product_id) }}"
                                class="btn btn-warning">Sửa</a>

                            <form action="{{ route('admin.products.deleteProduct', $value->product_id) }}" method="POST">
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
        {{ $listProduct->links('pagination::bootstrap-5') }}
    </div>
@endsection
