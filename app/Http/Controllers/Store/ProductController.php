<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bird;
use App\Models\BirdImage;
use App\Models\BirdInventory;
use Auth;
use App\Models\BirdInventoryData;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Bird::where('store_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(12);

        if(!empty($products))
        {
            foreach($products as $product)
            {
                $bird_image = BirdImage::where('bird_id', $product->id)->first('bird_image');
                if(!empty($bird_image))
                {
                    $product->bird_image = $bird_image->bird_image;
                }else{
                    $product->bird_image = "";
                }                
            }
        }

        return view('store.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('store.products.create', compact('categories'));
    }

    public function product_images()
    {
        return view('store.products.manage_images');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try{
            $product = new Bird;
            $product->category_id = $request->category_id;
            $product->store_id = Auth::user()->id;
            $product->bird_name = $request->bird_name;
            $product->bird_price = $request->bird_price;
            $product->bird_price_currency = $request->bird_price_currency;
            $product->quantity = $request->quantity;
            $product->sku = $request->sku;
            $product->tags = $request->tags;
            $product->breed = $request->breed;
            $product->hybrid = $request->hybrid;
            $product->clean_or_featheres_legs = $request->clean_or_featheres_legs;
            $product->leg_color = $request->leg_color;
            $product->top_knot = $request->top_knot;
            $product->muffs = $request->muffs;
            $product->beared = $request->beared;
            $product->no_of_toes = $request->no_of_toes;
            $product->skin_color = $request->skin_color;
            $product->comb_type = $request->comb_type;
            $product->lobes = $request->lobes;
            $product->purpose = $request->purpose;
            $product->broody = $request->broody;
            $product->weekly_production = $request->weekly_production;
            $product->egg_color = $request->egg_color;
            $product->egg_size = $request->egg_size;
            $product->laying_maturity = $request->laying_maturity;
            $product->processing_age = $request->processing_age;
            $product->hardness = $request->hardness;
            $product->forager = $request->forager;
            $product->personality = $request->personality;
            $product->livestock_conservency_status = $request->livestock_conservency_status;
            $product->apa_class = $request->apa_class;
            $product->save();
            
            return back()->with('message', 'Product Saved Successfully');
        }catch(\Exception $e)
        {
            return back()->with('error', 'There is some trouble to proceed your action');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $product = Bird::find($id);

            if(empty($product))
            {
                return back()->with('error', 'Product does not Exists');
            }
            
            $bird_images = BirdImage::where('bird_id', $product->id)->get(['id', 'bird_image']);

            if(!empty($bird_images))
            {
                foreach($bird_images as $image)
                {
                    $image->bird_image = IMAGE_URL.$image->bird_image;
                }
            }

            $product->bird_images = $bird_images;

            $inventories = BirdInventory::all();
            $arr = array();
            if(!empty($inventories))
            {
                foreach($inventories as $inventory)
                {
                    $inv_data = BirdInventoryData::where('inventory_id', $inventory->id)->where('bird_id', $product->id)->first('id');
                    
                    if(!empty($inv_data))
                    {
                        $data = [
                            'inventory_name' => $inventory->inventory_name,
                            'inventory_data' => BirdInventoryData::where('inventory_id', $inventory->id)->where('bird_id', $product->id)->get(['id', 'inventory_date', 'inventory_data']),
                        ];
    
                        array_push($arr, $data);   
                    }                    
                }
            }

            $product->inventories = collect($arr);
            // return $product;
            return view('store.products.show', compact('product'));
        }catch(\Exception $e)
        {
            return back()->with('error', 'There is some trouble to proceed your action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
