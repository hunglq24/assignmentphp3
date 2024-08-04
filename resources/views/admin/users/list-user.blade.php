@extends('admin.layouts.index')

@section('title')
    @parent
    DANH SÁCH USER
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">DANH SÁCH USER</h4>
        @if (session('message'))
            <p class="text-danger">{{ session('message') }}</p>
        @endif
        <a href="{{ route('admin.users.addUser') }}"><button class="btn btn-info">Thêm mới</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên user</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUser as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            @if ($value->role == 1)
                                Admin
                            @elseif($value->role == 2)
                                User
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.users.detailUser', $value->user_id) }}" class="btn btn-info">Chi
                                Tiết</a>
                            <a href="{{ route('admin.users.updateUser', $value->user_id) }}" class="btn btn-warning">Sửa</a>

                            <form action="{{ route('admin.users.deleteUser', $value->user_id) }}" method="POST">
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
        {{ $listUser->links('pagination::bootstrap-5') }}
    </div>
@endsection
