<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bird;
use App\Models\BirdImage;
use App\Models\BirdInventory;
use App\Models\BirdInventoryData;
use Carbon\Carbon;

class ApplicationUtilitySeedController extends Controller
{
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

        return response()->json([
            'status' => true,
            'message' => 'Birds Images Seeded Successfully',
        ], 200);
    }
}
