<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;

class CollectionsController extends Controller
{
    //
    public function collectionIndex(Request $request){
        //check if it is a POST request
        if ($request->isMethod('post')) {

            $collectionid = $request->collectionid;
            if ($collectionid != 0) {
                $collection = collection::find($collectionid);
            } else {
                $collection = new collection();
            }

            $collection->name = $request->name;
            $collection->description = $request->description;
            $collection->shop_id = auth()->user()->id;

            $collection->save();
            $redirectUrl = getRedirectRoute('collection.index');
            return redirect($redirectUrl);
        }
        $collections = collection::where('shop_id', auth()->user()->id)->get();
        return view('collection.index', compact('collections'));

    }

    public function product(Request $request, $collectionid) {
        //get product for a collection
        //check if this collection id belongs to shop id
        $collections = collection::findorFail($collectionid);
        $shop = $request->user();
        if ($collections->shop_id != $request->user()->id) {
            return Redirect::tokenRedirect('collection.index');
        }

        if ($request->isMethod('post')) {
            $productid = $request->productid;
            if ($productid != 0) {
                $product = Product::find($productid);
            } else {
                $product = new Product();
            }

            $product->name = $request->name;
            $product->description = $request->description;
            $product->shop_id = $shop->id;
            $product->collection_id = $collectionid;

            $product->save();

            $redirectUrl = getRedirectRoute('collection.product', ['collectionId' => $collections->id]);
            return redirect($redirectUrl);

        }

        $products = Product::where('collection_id', $collections->id)->get();
        return view('collection.product', compact('products', 'collections'));
    }

}
