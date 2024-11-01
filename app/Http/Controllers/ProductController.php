<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        return view('data.products.index',[
            'js' => 'data.products.js',
            'title' => 'Products'
        ]);
    }

    function getProducts(Request $request) {
        $datas = Product::select('name', 'product_code', 'price', 'stock')
                    ->orderBy('name');

        return DataTables::of($datas)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function printCode()
    {
        return view('data.products.print_code',[
            'js' => 'data.products.js',
            'title' => 'Print Barcode'
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('term');
        
        $products = Product::where('name', 'LIKE', '%' . $search . '%')
                           ->orWhere('product_code', 'LIKE', '%' . $search . '%')
                           ->limit(10)
                           ->get();

        $result = [];
        foreach ($products as $product) {
            $result[] = [
                'id' => $product->id,
                'label' => $product->name . ' (' . $product->product_code . ')',
                'name' => $product->name,
                'product_code' => $product->product_code,
                'price' => $product->price,
                'stock' => $product->stock,
            ];
        }

        return response()->json($result);
    }
}
