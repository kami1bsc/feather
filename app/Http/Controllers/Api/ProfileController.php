<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bird;
use App\Models\BirdImage;
use App\Models\Favourite;
use App\Models\Follow;

class ProfileController extends Controller
{
    public function store_profile($user_id, $store_id)
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

            $store = User::where('id', $store_id)->first(['id', 'name','store_name', 'profile_image']);

            if(empty($store))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Store does not Exists',
                ], 200);
            }

            $store->profile_image = IMAGE_URL.$store->profile_image;
            $store->total_followers = Follow::where('following_id', $store_id)->count();
            $store->total_products = Bird::where('store_id', $store_id)->count();

            $is_following = Follow::where('follower_id', $user_id)
            ->where('following_id', $store_id)
            ->first();

            if(!empty($is_following))
            {
                $store->is_following = true;
            }else{
                $store->is_following = false;
            }

            $birds = Bird::where('store_id', $store_id)->orderBy('id', 'asc')->take(15)->get(['id', 'bird_name', 'bird_price', 'bird_price_currency', 'average_rating']);

            if(!empty($birds))
            {
                foreach($birds as $bird)
                {
                    $fav = Favourite::where('bird_id', $bird->id)
                    ->where('user_id', $user_id)
                    ->first();

                    if(!empty($fav))
                    {
                        $bird->is_favourite = true;
                    }else{
                        $bird->is_favourite = false;
                    }

                    $bird_image = BirdImage::where('bird_id', $bird->id)->first('bird_image');
                
                    if(!empty($bird_image))
                    {
                        $bird->bird_image = IMAGE_URL.$bird_image->bird_image;
                    }
                }
            }

            $store->birds = $birds;
            
            return response()->json([
                'status' => true,
                'message' => 'Store Profile Found',
                'data' => $store,
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }
}
