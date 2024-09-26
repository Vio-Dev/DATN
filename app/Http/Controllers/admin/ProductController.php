<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function view()
    {
        $products = $this->product->latest()->paginate(5);
        return view('index', compact('products'));
    }
    public function index()
    {
        $product = Product::all();
        return view('admin.products.index', compact('product'));
    }
    public function add()
    {
        $category = Category::get(['id', 'name']);
        return view('admin.products.add', compact('category'));
    }
    public function product()
    {
        $product = Product::all();
        return view('admin.products.index', compact('product'));
    }
    public function store(Request $request)
    {
        $input = $request->all();

        // Create the product
        $product = Product::create($input);
        return redirect()->route('admin.products.index')->with('success', 'Product has been created successfully!');
    }
    public function edit($id)
    {
        $category = Category::get(['id', 'name']);
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('category', 'product'));
    }
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        // Tìm người dùng theo ID, nếu không tìm thấy sẽ ném ra ngoại lệ ModelNotFoundException
        $product = Product::findOrFail($id);

        // Kiểm tra nếu trường password được điền và không rỗng

        // Cập nhật thông tin người dùng
        $product->update($input);
        return redirect()->route('admin.products.index');
    }

    public function destroy(string $id)
    {
        $category = Product::destroy($id);
        return redirect()->route('admin.products.index');
    }
    public function layouts(string $id)
    {
        $product = Product::all();
        return redirect()->route('admin.products.index');
    }
}
