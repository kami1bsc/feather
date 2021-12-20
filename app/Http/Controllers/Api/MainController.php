<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bird;
use App\Models\User;
use App\Models\BirdImage;
use App\Models\BirdInventory;
use App\Models\BirdInventoryData;
use App\Models\Category;
use App\Models\Banner;

class MainController extends Controller
{
    public function home_screen($user_id)
    {
        try{
            $user = User::where('id', $user_id)->first('id');

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists',
                ], 200);
            }

            $banners = Banner::all(['id', 'banner_image']);

            if(!empty($banners))
            {
                foreach($banners as $banner)
                {
                    $banner->banner_image = IMAGE_URL.$banner->banner_image;
                }
            }

            $categories = Category::orderBy('id', 'desc')->get(['id', 'category_name', 'category_image']);

            if(!empty($categories))
            {
                foreach($categories as $category)
                {
                    $category->category_image = IMAGE_URL.$category->category_image;
                }
            }

            $breeds = Bird::orderBy('id', 'desc')->take(10)->get(['id', 'bird_name']);

            if(!empty($breeds))
            {
                foreach($breeds as $breed)
                {
                    $bird_image = BirdImage::where('bird_id', $breed->id)->first('bird_image');
                
                    if(!empty($bird_image))
                    {
                        $breed->bird_image = IMAGE_URL.$bird_image->bird_image;
                    }
                }
            }

            //

            $most_popular = Bird::orderBy('id', 'asc')->take(15)->get(['id', 'bird_name']);

            if(!empty($most_popular))
            {
                foreach($most_popular as $popular)
                {
                    $bird_image = BirdImage::where('bird_id', $popular->id)->first('bird_image');
                
                    if(!empty($bird_image))
                    {
                        $popular->bird_image = IMAGE_URL.$bird_image->bird_image;
                    }
                }
            }

            // return $most_popular;

            $just_for_you = Bird::orderBy('id', 'asc')->take(15)->get(['id', 'bird_name', 'bird_price', 'bird_price_currency', 'average_rating']);

            if(!empty($just_for_you))
            {
                foreach($just_for_you as $popular)
                {
                    $bird_image = BirdImage::where('bird_id', $popular->id)->first('bird_image');
                
                    if(!empty($bird_image))
                    {
                        $popular->bird_image = IMAGE_URL.$bird_image->bird_image;
                    }
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Homescreen Data Found',
                'data' => [
                    'banners' => $banners,
                    'categories' => $categories,
                    'breeds' => $breeds,
                    'most_popular' => $most_popular,
                    'just_for_you' => $just_for_you,
                ],
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }

    public function categories()
    {
        try{
            $categories = Category::orderBy('id', 'desc')->get(['id', 'category_name', 'category_image']);

            if(!empty($categories))
            {
                foreach($categories as $category)
                {
                    $category->category_image = IMAGE_URL.$category->category_image;
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Categories Found',
                'data' => $categories,
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }

    public function set_favourite_bird(Request $request)
    {
        try{
            $user = User::where('id', $request->user_id)->first('id');

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists',
                ], 200);
            }

            $bird = Bird::where('id', $request->bird_id)->first('id');

            if(empty($bird))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Bird does not Exists',                    
                ], 200);
            }

            $already = Favourite::where('bird_id', $request->bird_id)
            ->where('user_id', $request->user_id)
            ->first();

            if(!empty($already))
            {
                $already->delete();

                return response()->json([
                    'status' => true,
                    'message' => 'Unfavourite',
                ], 200);
            }else{
                $fav = new Favourite;
                $fav->user_id = $request->user_id;
                $fav->bird_id = $request->bird_id;
                $fav->save();

                return response()->json([
                    'status' => true,
                    'message' => 'Set Favourite',
                ], 200);
            }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }
}
