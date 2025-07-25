<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }


    public function create(): View
    {
        // $path = public_path('qrcode/' . time() . '.png');

        //$qr_code = QrCode::size(300)
        //   ->generate('A simple example of QR code', $path);
        // dd($qr_code);
        //return view('products.create');
        // $qrCodes = [];
        // $qrCodes['simple'] = QrCode::size(120)->generate('https://www.binaryboxtuts.com/');


        // $qrCodes['withImage'] = QrCode::size(200)->format('png')->merge('/public/img/logo.png', .4)->generate('https://www.binaryboxtuts.com/');

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request): RedirectResponse
    {

        if ($request->hasFile('file')) {

            $filename = date('yyMMddhhmmss') . ".jpg";

            $request->file->move(public_path('uploads'), $filename);
            //$path = public_path('qrcode/' . time() . '.png');

            $qrCode = QrCode::size(100)->generate($request->name);

            Product::create($request->validated() + ["image_path" => $filename, "qr_code" => $qrCode]);

            return redirect()->route('products.index')
                ->with('success', 'Product created successfully.');

        }
        return redirect()->back()
            ->with('success', 'Product Not created.');
    }


    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }
    public function getProduct(Request $request)
    {
        $product = Product::find($request->id);
        return response()->json($product);
    }


    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
