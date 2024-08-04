<div class="bg-primary header">
    <h3 class="text-light layer">
        <span>QH STORE</span>
        <span>Quản lý sản phẩm</span>
    </h3>


    <form>
        <div class="input-group border border-dark rounded">
            <input type="search" class="form-control " placeholder="Tìm kiếm" aria-label="Search">
            <button class="btn btn-Secondary" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>


    <div class="dropdown">
        <img class="dropdown-toggle" src="{{ asset('assets/image/avatar.jpg') }}" alt=""
            id="dropdownMenuButton1" data-bs-toggle="dropdown">
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="#">Language</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
</div>