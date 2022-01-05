<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddressBook;
class AddressBookController extends Controller
{
    //Add Address
    public function add_address(Request $request)
    {
        try{
            $user = User::where('id', $request->user_id)->first();

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists',
                ], 200);
            }

            $address = new AddressBook;
            $address->user_id = $request->user_id;

            if($request->has('name') && $request->name != "")
            {
                $address->name = $request->name;
            }

            if($request->has('mobile_number') && $request->mobile_number != "")
            {
                $address->mobile_number = $request->mobile_number;
            }

            if($request->has('province') && $request->province != "")
            {
                $address->province = $request->province;
            }

            if($request->has('city') && $request->city != "")
            {
                $address->city = $request->city;
            }

            if($request->has('address') && $request->address != "")
            {
                $address->address = $request->address;
            }
            
            $address->save();

            return response()->json([
                'status' => true,
                'message' => 'Address Saved',                
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }

    //Edit Address
    public function edit_address(Request $request)
    {
        try{
            $address = AddressBook::find($request->address_id);

            if(empty($address))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Address does not Exists',
                ], 200);
            }

            if($request->has('name') && $request->name != "")
            {
                $address->name = $request->name;
            }

            if($request->has('mobile_number') && $request->mobile_number != "")
            {
                $address->mobile_number = $request->mobile_number;
            }

            if($request->has('province') && $request->province != "")
            {
                $address->province = $request->province;
            }

            if($request->has('city') && $request->city != "")
            {
                $address->city = $request->city;
            }

            if($request->has('address') && $request->address != "")
            {
                $address->address = $request->address;
            }
            
            $address->save();

            return response()->json([
                'status' => true,
                'message' => 'Address Updated',                
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }

    //Get Addresses
    public function get_addresses($user_id)
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
            
            $addresses = AddressBook::where('user_id', $user_id)->get(); 

            return response()->json([
                'status' => true,
                'message' => $addresses->count() > 0 ? 'Address Book Found' : 'No Address in Address Book Found', 
                'data' => $addresses->count() > 0 ? $addresses->makeHidden(['created_at', 'updated_at']) : [],               
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }  
    
    //Delete Address
    public function delete_address($address_id)
    {
        try{            
            
            $address = AddressBook::find($address_id);
            
            if(empty($address))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Address does not Exists',
                ], 200);
            }

            $address->delete();

            return response()->json([
                'status' => true,
                'message' => 'Address Deleted',                            
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
