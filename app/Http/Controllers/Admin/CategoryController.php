<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function listCategory(){
        $listCategory = Category::paginate(5);
        return view('admin.categorys.list-category')
        ->with([
            'listCategory' => $listCategory
        ]);
    }

    public function addCategory(){
        return view('admin.categorys.add-category');
    }

    public function addPostCategory(CategoryRequest $req){
        $data = [
            'name_category' => $req->name_category,
        ];
        Category::create($data);
        return redirect()->route('admin.categorys.listCategory')->with([
            'message' => 'thêm mới thành công'
        ]);
    }

    public function deleteCategory($category_id){
        $category = Category::find($category_id);
        $category->delete();
        return redirect()->route('admin.categorys.listCategory')->with([
            'message' => 'xóa thành công'
        ]);
    }

    public function updateCategory($category_id){
        $category = Category::find($category_id);
        return view('admin.categorys.update-category')->with([
            'category' => $category
        ]);
    }

    public function updatePutCategory($category_id, CategoryRequest $req){
        $category = Category::where('category_id', $category_id)->first();

        $data = [
            'name_category' => $req->name_category,
        ];
        Category::where('category_id', $category_id)->update($data);
        return redirect()->route('admin.categorys.listCategory')->with([
            'message' => 'Sửa thành công'
        ]);
    }

    public function detailCategory($category_id){
        $category = Category::where('category_id', $category_id)->first();
        return view('admin.categorys.detail-category')->with([
            'category' => $category
        ]);
    }
}
