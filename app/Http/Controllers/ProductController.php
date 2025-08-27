<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allOfproductRecoreds = Product::all();
        
        return view('Product.Index',['records' => $allOfproductRecoreds]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
        ]);

            
        if ($validator->fails()) {
        // Return a single error message instead of per field


        return back()
            ->withErrors(['form_error' => 'Please check the form, some fields are invalid.'])
            ->withInput();
    }

        $product = Product::create($validated);
        return redirect('/')->with('success', 'product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
          $record = Product::find($id);
        if ($id == 0)
             return view('Product.Store');
        return view('Product.Show',['record' => $record]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
           $data = $request->validate([
            'name'       => 'required|string|max:255',
            'qty' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
        ]);

     
           if ($validator->fails()) {
        // Return a single error message instead of per field


        return back()
            ->withErrors(['form_error' => 'Please check the form, some fields are invalid.'])
            ->withInput();
    }
            $record = Product::find($id);
            $record->name = $data['name'];
            $record->qty = $data['qty'];
            $record->price = $data['price'];

       $record->update();
        $record->save();
       return redirect('/')->with('success', 'product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         Product::destroy($id);
        return redirect('/')->with('success', 'product updated successfully.');
    }

     public function create()
    {
        return view('Product.Create');
    }


    
public function search(Request $request)
{
    $q = $request->input('q'); // The search keyword

    $query = Product::where('name', 'LIKE', "%{$q}%");

      if ($request->filled('min_price')) {
        $query->where('price', '>=', $request->input('min_price'));
    }

      if ($request->filled('max_price')) {
        $query->where('price', '<=', $request->input('max_price'));
    }

      if ($request->filled('sort')) {
          switch ($request->input('sort')) {
              case 'name_asc':
                  $query->orderBy('name', 'asc');
                  break;
              case 'name_desc':
                  $query->orderBy('name', 'desc');
                  break;
              case 'price_asc':
                  $query->orderBy('price', 'asc');
                  break;
              case 'price_desc':
                  $query->orderBy('price', 'desc');
                  break;
              case 'latest':
                  $query->orderBy('created_at', 'desc');
                  break;
          }
        }
        $products =  $query->get();

    return view('Product.Index',['records' => $products]);
}
}
