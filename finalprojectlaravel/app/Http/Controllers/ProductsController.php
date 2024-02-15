<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $ProductsList = Products::all();
        return view('produk')->with('productsList', $ProductsList);
    }
    public function home()
    {
        $ProductsList = Products::all();
        return view('home')->with('productsList', $ProductsList);
    }
    public function category()
    {
    return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('products.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'PublishStatus' => 'required|in:draft,publish',
    //         'price' => 'required|numeric',
    //         'weight' => 'required|numeric',
    //         'img_url' => 'nullable|url',
    //     ]);

    //     Products::create($validatedData);

    //     return redirect()->route('products.create')->with('status', 'Data berhasil ditambah');
    // }

    public function create()
    {
        $product = Products::all();
        return view('tambah', compact('product'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'category_id' => 'required|exists:category,id',
            'price' => 'nullable|integer',
            'weight' => 'nullable|integer',
            'img_url' => 'nullable|url',
        ]);
    
        $product = new Products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->price = $request->price ?? 0;
        $product->weight = $request->weight ?? 0;
        $product->img_url = $request->img_url;
        $product->save();
    
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Products::find($id);
        return view('edit')->with("products", $products);
    }
    // belum dilanjutkan karena view belum selesai

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $products = Products::find($id);
        $products->update($request->all());
        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $findProducts = Products::find($id);
        $findProducts->delete();
        return redirect()->route('products.index');
    }
}
