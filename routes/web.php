<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\ContentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;



Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'postRegister'])->name('postRegister');

Route::get('/', function () {
    echo 'trang chủ';
});

Route::group(
    ['prefix' => 'admin', 'as' => 'admin.'],

    function () {
        Route::group(
            ['prefix' => 'products', 'as' => 'products.'],
            function () {
                // CRUD product
                Route::get('/', [ProductController::class, 'listProduct'])
                    ->name('listProduct');

                Route::get('add-product', [ProductController::class, 'addProduct'])
                    ->name('addProduct');

                Route::post('add-product', [ProductController::class, 'addPostProduct'])
                    ->name('addPostProduct');

                Route::delete('delete-product/{product_id}', [ProductController::class, 'deleteProduct'])
                    ->name('deleteProduct');

                Route::get('update-product/{product_id}', [ProductController::class, 'updateProduct'])
                    ->name('updateProduct');

                Route::put('update-product/{product_id}', [ProductController::class, 'updatePutProduct'])
                    ->name('updatePutProduct');

                    Route::get('detail-product/{product_id}', [ProductController::class, 'detailProduct'])
                    ->name('detailProduct');
            }
        );


        Route::group(
            ['prefix' => 'categorys', 'as' => 'categorys.'],
            function () {
                // CRUD category
                Route::get('/', [CategoryController::class, 'listCategory'])
                    ->name('listCategory');

                Route::get('add-category', [CategoryController::class, 'addCategory'])
                    ->name('addCategory');

                Route::post('add-category', [CategoryController::class, 'addPostCategory'])
                    ->name('addPostCategory');

                Route::delete('delete-category/{category_id}', [CategoryController::class, 'deleteCategory'])
                    ->name('deleteCategory');

                Route::get('update-category/{category_id}', [CategoryController::class, 'updateCategory'])
                    ->name('updateCategory');

                Route::put('update-category/{category_id}', [CategoryController::class, 'updatePutCategory'])
                    ->name('updatePutCategory');

                    Route::get('detail-category/{category_id}', [CategoryController::class, 'detailCategory'])
                    ->name('detailCategory');
            }
        );


        Route::group(
            ['prefix' => 'users', 'as' => 'users.'],
            function () {
                // CRUD user
                Route::get('/', [UserController::class, 'listUser'])
                    ->name('listUser');

                Route::get('add-user', [UserController::class, 'addUser'])
                    ->name('addUser');

                Route::post('add-user', [UserController::class, 'addPostUser'])
                    ->name('addPostUser');

                Route::delete('delete-user/{user_id}', [UserController::class, 'deleteUser'])
                    ->name('deleteUser');

                Route::get('update-user/{user_id}', [UserController::class, 'updateUser'])
                    ->name('updateUser');

                Route::put('update-user/{user_id}', [UserController::class, 'updatePutUser'])
                    ->name('updatePutUser');

                    Route::get('detail-user/{user_id}', [UserController::class, 'detailUser'])
                    ->name('detailUser');
            }
        );

    }
);


Route::group(
    ['prefix' => 'user', 'as' => 'user.'],

    function () {
        Route::group(
            ['prefix' => 'home', 'as' => 'home.'],
            function () {
                // CRUD user
                Route::get('/', [ContentController::class, 'content'])
                    ->name('content');


            }
        );

    }
);


Route::get('home', [ContentController::class, 'content']);
Route::get('aonam', [ContentController::class, 'aonam'])->name('aonam');
Route::get('quannam', [ContentController::class, 'quannam'])->name('quannam');
Route::get('tuisach', [ContentController::class, 'tuisach'])->name('tuisach');
Route::get('chitiet', [ContentController::class, 'chitiet'])->name('chitiet');
