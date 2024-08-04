@extends('admin.layouts.index')

@section('title')
    @parent
    Thêm User
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">THÊM USER</h4>
        <form action="{{ route('admin.users.addPostUser') }}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="nameUser">Name: </label>
                <input type="text" id="nameUser" class="form-control" name="nameUser">
            </div>
            <div class="mb-3">
                <label for="emailUser">Email:</label>
                <input type="email" id="emailUser" class="form-control" name="emailUser">
            </div>
            <div class="mb-3">
                <label for="passwordUser">Password:</label>
                <input type="password" id="passwordUser" class="form-control" name="passwordUser">
            </div>
            <div class="mb-3">
                <label for="roleUser">Role:</label>
                <select id="roleUser" class="form-control" name="roleUser" required>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info">Thêm Mới</button>
            <a href="{{ route('admin.users.listUser') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>
@endsection
