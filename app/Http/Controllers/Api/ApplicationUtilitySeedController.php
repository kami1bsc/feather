<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bird;
use App\Models\BirdImage;
use App\Models\BirdInventory;
use App\Models\BirdInventoryData;
use Carbon\Carbon;
use App\Models\Rating;
use App\Models\User;
use App\Models\Follow;

class ApplicationUtilitySeedController extends Controller
{
    //Not for Mobile App, just to insert some dummy data
    public function bird_image_seeder()
    {
        $birds = Bird::all();

        if(!empty($birds))
        {
            foreach($birds as $bird)
            {
                $image = new BirdImage;
                $image->bird_id = $bird->id;
                $image->bird_image = 'bird_images/default.jpg';
                $image->save();

                $image1 = new BirdImage;
                $image1->bird_id = $bird->id;
                $image1->bird_image = 'bird_images/default1.jpg';
                $image1->save();

                $image2 = new BirdImage;
                $image2->bird_id = $bird->id;
                $image2->bird_image = 'bird_images/default2.jpg';
                $image2->save();

                $image3 = new BirdImage;
                $image3->bird_id = $bird->id;
                $image3->bird_image = 'bird_images/default3.jpg';
                $image3->save();   
                
                $rating = new Rating;
                $rating->user_id = 8;
                $rating->bird_id = $bird->id;
                $rating->rating_stars = 5.0;
                $rating->review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
                $rating->save();

                $rating = new Rating;
                $rating->user_id = 9;
                $rating->bird_id = $bird->id;
                $rating->rating_stars = 5.0;
                $rating->review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
                $rating->save();
            }
        }

        $inventory = new BirdInventory;
        $inventory->inventory_name = 'Day-Old';
        
        if($inventory->save())
        {
            $birds = Bird::all();

            if(!empty($birds))
            {
                foreach($birds as $bird)
                {
                    $data = new BirdInventoryData;
                    $data->bird_id = $bird->id;
                    $data->inventory_id = 1;
                    $data->inventory_date = time();
                    $data->inventory_data = '20 Available';
                    $data->save();
                }
            }
        }

        $inventory = new BirdInventory;
        $inventory->inventory_name = 'Hatching Eggs';
        $inventory->save();

        if($inventory->save())
        {
            $birds = Bird::all();

            if(!empty($birds))
            {
                foreach($birds as $bird)
                {
                    $data = new BirdInventoryData;
                    $data->bird_id = $bird->id;
                    $data->inventory_id = 2;
                    $data->inventory_date = time();
                    $data->inventory_data = '20 Available';
                    $data->save();
                }
            }
        }

        $inventory = new BirdInventory;
        $inventory->inventory_name = 'Started';
        $inventory->save();

        if($inventory->save())
        {
            $birds = Bird::all();

            if(!empty($birds))
            {
                foreach($birds as $bird)
                {
                    $data = new BirdInventoryData;
                    $data->bird_id = $bird->id;
                    $data->inventory_id = 3;
                    $data->inventory_date = time();
                    $data->inventory_data = '20 Available';
                    $data->save();
                }
            }
        }

        $inventory = new BirdInventory;
        $inventory->inventory_name = 'Mature';
        $inventory->save();

        if($inventory->save())
        {
            $birds = Bird::all();

            if(!empty($birds))
            {
                foreach($birds as $bird)
                {
                    $data = new BirdInventoryData;
                    $data->bird_id = $bird->id;
                    $data->inventory_id = 4;
                    $data->inventory_date = time();
                    $data->inventory_data = '20 Available';
                    $data->save();
                }
            }
        }

        $customers = User::where('type', '1')->get('id');
        $stores = User::where('type', '2')->get('id');

        foreach($customers as $customer)
        {
            foreach($stores as $store)
            {
                $follow = new Follow;
                $follow->follower_id = $customer->id;
                $follow->following_id = $store->id;
                $follow->save();
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Birds Images Seeded Successfully',
        ], 200);
    }
}
