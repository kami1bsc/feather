<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bird;
use App\Models\BirdImage;
use App\Models\Category;
use App\Models\BirdInventory;
use App\Models\BirdInventoryData;
use App\Models\Favourite;
use App\Models\User;
use App\Models\Rating;
use App\Models\Follow;

class BirdController extends Controller
{
    public function bird_details($user_id, $bird_id)
    {        
        // try{
            $user = User::where('id', $user_id)->first('id');

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists',
                ], 200);
            }

            $bird = Bird::where('id', $bird_id)->first();

            if(empty($bird))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Bird does not Exists',
                ], 200);
            }

            $fav = Favourite::where('user_id', $user_id)->where('bird_id', $bird_id)->first('id');

            if(!empty($fav))
            {
                $bird->is_favourite = true;
            }else{
                $bird->is_favourite = false;
            }

            $category = Category::where('id', $bird->category_id)->first('category_name');
            $bird->category_name = $category->category_name;

            $ratings = Rating::where('bird_id', $bird->id)->get(['id', 'user_id', 'rating_stars', 'review', 'review_time']);

            if(!empty($ratings))
            {
                foreach($ratings as $rating)
                {
                    $rating_from = User::where('id', $rating->user_id)->first('name');
                    $rating->rating_from_name = $rating_from->name;
                }
            }
            $bird->ratings = $ratings;

            $seller = User::where('id', $bird->store_id)->first(['id', 'store_name', 'profile_image','is_business_verified', 'store_rating']);

            if(!empty($seller))
            {         
                $seller->profile_image = IMAGE_URL.$seller->profile_image;
                
                $is_following = Follow::where('follower_id', $user_id)
                ->where('following_id', $seller->id)
                ->first();

                if(!empty($is_following))
                {
                    $seller->is_following = true;
                }else{
                    $seller->is_following = false;
                }

                $seller->total_followers = Follow::where('following_id', $seller->id)->count();                
            }

            $bird->seller_details = $seller;


            $bird_images = BirdImage::where('bird_id', $bird->id)->get(['id', 'bird_image']);

            if(!empty($bird_images))
            {
                foreach($bird_images as $image)
                {
                    $image->bird_image = IMAGE_URL.$image->bird_image;
                }
            }

            $bird->bird_images = $bird_images;

            $inventories = BirdInventory::all();
            $arr = array();
            if(!empty($inventories))
            {
                foreach($inventories as $inventory)
                {
                    $data = [
                        'inventory_name' => $inventory->inventory_name,
                        'inventory_data' => BirdInventoryData::where('inventory_id', $inventory->id)->where('bird_id', $bird->id)->get(['id', 'inventory_date', 'inventory_data']),
                    ];

                    array_push($arr, $data);
                }
            }
            $bird->inventory_data = $arr;
            return response()->json([
                'status' => true,
                'message' => 'Bird Details Found',
                'data' => $bird,
            ], 200);
        // }catch(\Exception $e)
        // {
        //     return response()->json([
        //         'status' => false,
        //         'message' => 'There is some trouble to proceed your action',
        //     ], 200);
        // }
    }
}
