<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\ForgotPasswordEmailJob;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Signup
    public function signup(Request $request)
    {
        try{
            if(!$request->has('name'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Name is Required',
                ], 200);
            }

            if(!$request->has('email'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Email is Required',
                ], 200);
            }

            $already = User::where('email', $request->email)->first();

            if(!empty($already))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Email has already been Taken',
                ], 200);
            }

            if(!$request->has('phone'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Phone is Required',
                ], 200);
            }

            if(!$request->has('password'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Password is Required',
                ], 200);
            }

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = bcrypt($request->password);

            if($request->has('token'))
            {
                $user->token = $request->token;
            }

            if($user->save())
            {
                $user1 = User::where('email', $request->email)->first();

                $user1->profile_image = IMAGE_URL.$user1->profile_image;

                if($user1->store_name == "" || $user1->business_document == "" || $user1->person_incharge == "" || $user1->business_registration_number == "" || $user1->business_address == "" || $user1->bank_account_name == "" || $user1->bank_account_number == "" || $user1->bank_name == "" || $user1->branch_code == "" || $user1->IBAN_number == "" || $user1->cheque_copy_image == "")
                {
                    $user1->business_profile_completed = false;
                }else{
                    $user1->business_profile_completed = true;
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Welcome to Feather Finder',
                    'data' => $user1->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role'])
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

    // Login Method
    public function login(Request $request)
    {        
        $loginData = $request->validate([
            'email' => 'string|required',
            'password' => 'required|max:255'
        ]);
        
        if(!auth()->attempt($loginData))
        {
            if($request->expectsJson())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid Credentials',
                ], 200);
            }           
        }          
            
        auth()->user()->profile_image = IMAGE_URL.auth()->user()->profile_image;

        if(auth()->user()->business_document != "")
        {
            auth()->user()->business_document = IMAGE_URL.auth()->user()->business_document;
        }

        if(auth()->user()->cheque_copy_image != "")
        {
            auth()->user()->cheque_copy_image = IMAGE_URL.auth()->user()->cheque_copy_image;
        }

        if(auth()->user()->store_name == "" || auth()->user()->business_document == "" || auth()->user()->person_incharge == "" || auth()->user()->business_registration_number == "" || auth()->user()->business_address == "" || auth()->user()->bank_account_name == "" || auth()->user()->bank_account_number == "" || auth()->user()->bank_name == "" || auth()->user()->branch_code == "" || auth()->user()->IBAN_number == "" || auth()->user()->cheque_copy_image == "")
        {
            auth()->user()->business_profile_completed = false;
        }else{
            auth()->user()->business_profile_completed = true;
        }
        
        return response()->json([
            'status' => true,
            'message' => 'Welcome to Feather Finder',
            'data' => auth()->user()->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
        ], 200);          
    }

    //Login with Facebook
    public function login_with_facebook(Request $request)
    {
        try{
            if(!$request->has('facebook_id'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Facebook ID is Required!',                    
                ], 200);
            }

            $already = User::where('facebook_id', $request->facebook_id)->first();

            if(!empty($already))
            {
                $already->profile_image = IMAGE_URL.$already->profile_image;

                if($already->business_document != "")
                {
                    $already->business_document = IMAGE_URL.$already->business_document;
                }

                if($already->cheque_copy_image != "")
                {
                    $already->cheque_copy_image = IMAGE_URL.$already->cheque_copy_image;
                }

                if($already->store_name == "" || $already->business_document == "" || $already->person_incharge == "" || $already->business_registration_number == "" || $already->business_address == "" || $already->bank_account_name == "" || $already->bank_account_number == "" || $already->bank_name == "" || $already->branch_code == "" || $already->IBAN_number == "" || $already->cheque_copy_image == "")
                {
                    $already->business_profile_completed = false;
                }else{
                    $already->business_profile_completed = true;
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Welcome to Feather Finder',
                    'data' => $already->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                ], 200);
            }else{
                $user = new User;
                $user->facebook_id = $request->facebook_id;

                if($request->has('name') && $request->name != "")
                {
                    $user->name = $request->name;
                }

                if($request->has('email') && $request->email != "")
                {
                    $already_exist = User::where('email', $request->email)->first();
                    
                    if(!empty($already_exist))
                    {
                        return response()->json([
                            'status' => false,
                            'message' => 'Email has already been Taken',                            
                        ], 200);
                    }

                    $user->email = $request->email;
                }

                if($user->save())
                {
                    $user1 = User::where('facebook_id', $request->facebook_id)->first();

                    $user1->profile_image = IMAGE_URL.$user1->profile_image;

                    if($user1->business_document != "")
                    {
                        $user1->business_document = IMAGE_URL.$user1->business_document;
                    }

                    if($user1->cheque_copy_image != "")
                    {
                        $user1->cheque_copy_image = IMAGE_URL.$user1->cheque_copy_image;
                    }

                    if($user1->store_name == "" || $user1->business_document == "" || $user1->person_incharge == "" || $user1->business_registration_number == "" || $user1->business_address == "" || $user1->bank_account_name == "" || $user1->bank_account_number == "" || $user1->bank_name == "" || $user1->branch_code == "" || $user1->IBAN_number == "" || $user1->cheque_copy_image == "")
                    {
                        $user1->business_profile_completed = false;
                    }else{
                        $user1->business_profile_completed = true;
                    }

                    return response()->json([
                        'status' => true,
                        'message' => 'Welcome to Feather Finder',
                        'data' => $user1->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                    ], 200);
                }
            }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',               
            ], 200);
        }
    }

    //Login with Google
    public function login_with_gmail(Request $request)
    {
        try{
            if(!$request->has('gmail_id'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Gmail ID is Required!',
                    'data' => json_decode('{}'),
                ], 200);
            }

            $already = User::where('gmail_id', $request->gmail_id)->first();         
            
            if(!empty($already))
            {
                $already->profile_image = IMAGE_URL.$already->profile_image;

                if($already->business_document != "")
                {
                    $already->business_document = IMAGE_URL.$already->business_document;
                }

                if($already->cheque_copy_image != "")
                {
                    $already->cheque_copy_image = IMAGE_URL.$already->cheque_copy_image;
                }

                if($already->store_name == "" || $already->business_document == "" || $already->person_incharge == "" || $already->business_registration_number == "" || $already->business_address == "" || $already->bank_account_name == "" || $already->bank_account_number == "" || $already->bank_name == "" || $already->branch_code == "" || $already->IBAN_number == "" || $already->cheque_copy_image == "")
                {
                    $already->business_profile_completed = false;
                }else{
                    $already->business_profile_completed = true;
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Welcome to Feather Finder',
                    'data' => $already->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                ], 200);
            }else{
                $user = new User;
                $user->gmail_id = $request->gmail_id;

                if($request->has('name') && $request->name != "")
                {
                    $user->name = $request->name;
                }

                if($request->has('email') && $request->email != "")
                {
                    $already_exist = User::where('email', $request->email)->first();
                    
                    if(!empty($already_exist))
                    {
                        return response()->json([
                            'status' => false,
                            'message' => 'Email has already been Taken',                           
                        ], 200);
                    }

                    $user->email = $request->email;
                }

                if($user->save())
                {
                    $user1 = User::where('gmail_id', $request->gmail_id)->first();

                    $user1->profile_image = IMAGE_URL.$user1->profile_image;

                    if($user1->business_document != "")
                    {
                        $user1->business_document = IMAGE_URL.$user1->business_document;
                    }

                    if($user1->cheque_copy_image != "")
                    {
                        $user1->cheque_copy_image = IMAGE_URL.$user1->cheque_copy_image;
                    }

                    if($user1->store_name == "" || $user1->business_document == "" || $user1->person_incharge == "" || $user1->business_registration_number == "" || $user1->business_address == "" || $user1->bank_account_name == "" || $user1->bank_account_number == "" || $user1->bank_name == "" || $user1->branch_code == "" || $user1->IBAN_number == "" || $user1->cheque_copy_image == "")
                    {
                        $user1->business_profile_completed = false;
                    }else{
                        $user1->business_profile_completed = true;
                    }

                    return response()->json([
                        'status' => true,
                        'message' => 'Welcome to Feather Finder',
                        'data' => $user1->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                    ], 200);
                }
            }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',                
            ], 200);
        }
    }

    //Login with Apple
    public function login_with_apple(Request $request)
    {
        try{
            if(!$request->has('apple_id'))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Apple ID is Required',                    
                ], 200);
            }            
            
            $already = User::where('apple_id', $request->apple_id)->first();

            if(!empty($already))
            {
                $already->profile_image = IMAGE_URL.$already->profile_image;

                if($already->business_document != "")
                {
                    $already->business_document = IMAGE_URL.$already->business_document;
                }

                if($already->cheque_copy_image != "")
                {
                    $already->cheque_copy_image = IMAGE_URL.$already->cheque_copy_image;
                }

                if($already->store_name == "" || $already->business_document == "" || $already->person_incharge == "" || $already->business_registration_number == "" || $already->business_address == "" || $already->bank_account_name == "" || $already->bank_account_number == "" || $already->bank_name == "" || $already->branch_code == "" || $already->IBAN_number == "" || $already->cheque_copy_image == "")
                {
                    $already->business_profile_completed = false;
                }else{
                    $already->business_profile_completed = true;
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Welcome to Feather Finder',
                    'data' => $already->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                ], 200);
            }else{                

                $user = new User;
                $user->apple_id = $request->apple_id;

                if($request->has('name'))
                {
                    $user->name = $request->name;
                }                
                
                if($request->has('email'))
                {
                    $already = User::whereEmail($request->email)->first();

                    if(!empty($already))
                    {
                        return response()->json([
                            'status' => false,
                            'message' => 'Email already been Taken',                        
                        ], 200);
                    }

                    $user->email = $request->email;
                }                
                
                if($user->save())
                {
                    $user1 = User::where('apple_id', $request->apple_id)->first();

                    $user1->profile_image = IMAGE_URL.$user1->profile_image;

                    if($user1->business_document != "")
                    {
                        $user1->business_document = IMAGE_URL.$user1->business_document;
                    }

                    if($user1->cheque_copy_image != "")
                    {
                        $user1->cheque_copy_image = IMAGE_URL.$user1->cheque_copy_image;
                    }

                    if($user1->store_name == "" || $user1->business_document == "" || $user1->person_incharge == "" || $user1->business_registration_number == "" || $user1->business_address == "" || $user1->bank_account_name == "" || $user1->bank_account_number == "" || $user1->bank_name == "" || $user1->branch_code == "" || $user1->IBAN_number == "" || $user1->cheque_copy_image == "")
                    {
                        $user1->business_profile_completed = false;
                    }else{
                        $user1->business_profile_completed = true;
                    }

                    return response()->json([
                        'status' => true,
                        'message' => 'Welcome to Feather Finder',
                        'data' => $user1->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                    ], 200);
                }                
            }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action!',                
            ], 200);
        }
    }

    //Forgot Password
    public function forgot_password(Request $request)
    {
        try{
            $user = User::where('email', $request->email)->first();

            if(empty($user))
            {                
                return response()->json([
                    'status' => false,
                    'message' => 'User does not exists!',                    
                ], 200);               
            }

            $code = rand(111111, 999999);
            $user->verification_code = $code;
            $user->save();
                        
            $details['email'] = $request->email;
            $details['code'] = $code;

            dispatch(new ForgotPasswordEmailJob($details));
            
            if($request->expectsJson())
            {
                return response()->json([
                    'status' => true,
                    'message' => 'A Verification Code has been Sent to your Email!',
                    'data' => [
                        'email' => $request->email,
                        'verification_code' => $code,
                    ],
                ], 200);
            }            
        }catch(\Exception $e)
        {            
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action!',              
            ], 200);            
        }
    }

    public function verify_code(Request $request)
    {
        try{
            $user = User::whereEmail($request->email)->first();

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists',                    
                ], 200);
            }

            if($request->verification_code == $user->verification_code)
            {
                $user->verification_code = "";
               
                $user->save();
                if($request->expectsJson())
                {
                    return response()->json([
                        'status' => true,
                        'message' => 'Verification Code Matched Successfully!',
                        'data' => $request->email,
                    ], 200);
                }
            }else{                
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid Verification Code!',                   
                ], 200);                
            }
        }catch(\Exception $e)
        {
            if($request->expectsJson())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'There is some trouble to proceed your action!',                    
                ], 200);
            }
        }
    }

    //Reset Password
    public function reset_password(Request $request)
    {
        try{
            $user = User::where('email', $request->email)->first();

            if(empty($user))
            {                
                return response()->json([
                    'status' => false,
                    'message' => 'User does not exists!',                    
                ], 200);                
            }

            if($request->has('password') && $request->has('confirm_password'))
            {
                if($request->password === $request->confirm_password)
                {
                    $user->password = bcrypt($request->password);

                    if($user->save())
                    {     
                        $user->profile_image = IMAGE_URL.$user->profile_image;

                        if($user->business_document != "")
                        {
                            $user->business_document = IMAGE_URL.$user->business_document;
                        }

                        if($user->cheque_copy_image != "")
                        {
                            $user->cheque_copy_image = IMAGE_URL.$user->cheque_copy_image;
                        }

                        if($user->store_name == "" || $user->business_document == "" || $user->person_incharge == "" || $user->business_registration_number == "" || $user->business_address == "" || $user->bank_account_name == "" || $user->bank_account_number == "" || $user->bank_name == "" || $user->branch_code == "" || $user->IBAN_number == "" || $user1->cheque_copy_image == "")
                        {
                            $user->business_profile_completed = false;
                        }else{
                            $user->business_profile_completed = true;
                        }
                        
                        return response()->json([
                            'status' => true,
                            'message' => 'Password Changed Successfully!',
                            'data' => $user->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                        ], 200);                        
                    }
                }
            }
        }catch(\Exception $e)
        {
            if($request->expectsJson)
            {
                return response()->json([
                    'status' => false,
                    'message' => 'There is some trouble to proceed your action!',                    
                ], 200);
            }
        }
    }    

    //Logout
    public function logout($user_id)
    {
        try{
            $user = User::where('id', $user_id)->first();

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not exists!',                    
                ], 200);
            }

            $user->token = "";
            if($user->save())
            {
                return response()->json([
                    'status' => true,
                    'message' => 'Logged Out!',                    
                ], 200);
            }
        }catch(\Exception $e)
        {            
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action!',                
            ], 200);
        }    
    }

    //Delete Account
    public function delete_account($user_id)
    {
        try{
            $user = User::find($user_id);
            
            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists!',                    
                ], 200);
            }
            
            $user->delete();

            return response()->json([
                'status' => true,
                'message' => 'Account Deleted',                
            ], 200);
            
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action!',               
            ], 200);
        }
    }

    //Change Password
    public function change_password(Request $request)
    {
        try{
            $user = User::find($request->user_id);

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not exists!',                    
                ], 200);
            }

            if($request->has('old_password'))
            {
                if(Hash::check($request->old_password, $user->password))
                {   
                    $user->password = bcrypt($request->new_password);
                    
                    if($user->save())
                    {
                        $user1 = User::find($request->user_id)->first();

                        $user1->profile_image = IMAGE_URL.$user1->profile_image;

                        if($user1->business_document != "")
                        {
                            $user1->business_document = IMAGE_URL.$user1->business_document;
                        }

                        if($user1->cheque_copy_image != "")
                        {
                            $user1->cheque_copy_image = IMAGE_URL.$user1->cheque_copy_image;
                        }

                        if($user1->store_name == "" || $user1->business_document == "" || $user1->person_incharge == "" || $user1->business_registration_number == "" || $user1->business_address == "" || $user1->bank_account_name == "" || $user1->bank_account_number == "" || $user1->bank_name == "" || $user1->branch_code == "" || $user1->IBAN_number == "" || $user1->cheque_copy_image == "")
                        {
                            $user1->business_profile_completed = false;
                        }else{
                            $user1->business_profile_completed = true;
                        }

                        return response()->json([
                            'status' => true,
                            'message' => 'Password Changed!',
                            'data' => $user1->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
                        ], 200);
                    }
                }else{
                    if($request->expectsJson())
                    {
                        return response()->json([
                            'status' => false,
                            'message' => 'You Entered Wrong Password!',                            
                        ], 200);
                    }
                }
            }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action!',               
            ], 200);
        }
    }

    //Complete Profile
    public function complete_profile(Request $request)
    {
        try{
            $user = User::find($request->user_id);

            if(empty($user))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not Exists',
                ], 200);
            }

            if($request->has('name') && $request->name != "")
            {
                $user->name = $request->name;
            }

            if($request->has('email') && $request->email != "")
            {
                $user->email = $request->email;
            }

            if($request->has('phone') && $request->phone != "")
            {
                $user->phone = $request->phone;
            }

            if($request->has('image') && $request->image != "")
            {
                if($request->image->getClientOriginalExtension() == 'PNG' ||$request->image->getClientOriginalExtension() == 'png' || $request->image->getClientOriginalExtension() == 'JPG' || $request->image->getClientOriginalExtension() == 'jpg' || $request->image->getClientOriginalExtension() == 'jpeg' || $request->image->getClientOriginalExtension() == 'JPEG')
                {
                    //deleting old image from storage                    

                    if($user->profile_image != "" || !empty($user->profile_image))
                    {
                        if(explode('/', $user->profile_image)[1] != 'default.png')
                        {
                            unlink($user->profile_image);
                        }                        
                    }                    

                    //end deleting old image from folder

                    $newfilename = md5(mt_rand()) .'.'. $request->image->getClientOriginalExtension();
                    $request->file('image')->move(public_path("/profile_images"), $newfilename);
                    $new_path1 = 'profile_images/'.$newfilename;
                    $user->profile_image = $new_path1;

                }else{
                    return response()->json([
                        'status' => false,
                        'message' => 'Choose a Valid Image!',                        
                    ], 200);
                }                       
            }

            if($request->has('store_name') && $request->store_name != "")
            {
                $user->store_name = $request->store_name;
            }

            if($request->has('credit_card_type') && $request->credit_card_type != "")
            {
                $user->credit_card_type = $request->credit_card_type;
            }

            if($request->has('name_on_card') && $request->name_on_card != "")
            {
                $user->name_on_card = $request->name_on_card;
            }

            if($request->has('card_number') && $request->card_number != "")
            {
                $user->card_number = $request->card_number;
            }

            if($request->has('expiry_date') && $request->expiry_date != "")
            {
                $user->expiry_date = $request->expiry_date;
            }

            if($request->has('cvv') && $request->cvv != "")
            {
                $user->cvv = $request->cvv;
            }

            if($request->has('business_document') && $request->business_document != "")
            {
                if($request->business_document->getClientOriginalExtension() == 'PNG' ||$request->business_document->getClientOriginalExtension() == 'png' || $request->business_document->getClientOriginalExtension() == 'JPG' || $request->business_document->getClientOriginalExtension() == 'jpg' || $request->business_document->getClientOriginalExtension() == 'jpeg' || $request->business_document->getClientOriginalExtension() == 'JPEG')
                {
                    $newfilename = md5(mt_rand()) .'.'. $request->business_document->getClientOriginalExtension();
                    $request->file('business_document')->move(public_path("/business_documents"), $newfilename);
                    $new_path1 = 'business_documents/'.$newfilename;
                    $user->business_document = $new_path1;

                }else{
                    return response()->json([
                        'status' => false,
                        'message' => 'Choose a Valid Business Document Image!',                        
                    ], 200);
                }                       
            }

            if($request->has('cheque_copy_image') && $request->cheque_copy_image != "")
            {
                if($request->cheque_copy_image->getClientOriginalExtension() == 'PNG' ||$request->cheque_copy_image->getClientOriginalExtension() == 'png' || $request->cheque_copy_image->getClientOriginalExtension() == 'JPG' || $request->cheque_copy_image->getClientOriginalExtension() == 'jpg' || $request->cheque_copy_image->getClientOriginalExtension() == 'jpeg' || $request->cheque_copy_image->getClientOriginalExtension() == 'JPEG')
                {
                    $newfilename = md5(mt_rand()) .'.'. $request->cheque_copy_image->getClientOriginalExtension();
                    $request->file('cheque_copy_image')->move(public_path("/business_documents"), $newfilename);
                    $new_path1 = 'business_documents/'.$newfilename;
                    $user->cheque_copy_image = $new_path1;

                }else{
                    return response()->json([
                        'status' => false,
                        'message' => 'Choose a Valid Cheque Copy Image!',                        
                    ], 200);
                }                       
            }

            if($request->has('person_incharge') && $request->person_incharge != "")
            {
                $user->person_incharge = $request->person_incharge;
            }            

            if($request->has('business_registration_number') && $request->business_registration_number != "")
            {
                $user->business_registration_number = $request->business_registration_number;
            }

            if($request->has('business_address') && $request->business_address != "")
            {
                $user->business_address = $request->business_address;
            }

            if($request->has('bank_account_name') && $request->bank_account_name != "")
            {
                $user->bank_account_name = $request->bank_account_name;
            }

            if($request->has('bank_account_number') && $request->bank_account_number != "")
            {
                $user->bank_account_number = $request->bank_account_number;
            }

            if($request->has('bank_name') && $request->bank_name != "")
            {
                $user->bank_name = $request->bank_name;
            }

            if($request->has('branch_code') && $request->branch_code != "")
            {
                $user->branch_code = $request->branch_code;
            }

            if($request->has('IBAN_number') && $request->IBAN_number != "")
            {
                $user->IBAN_number = $request->IBAN_number;
            }

            if($user->save())
            {
                $user1 = User::find($request->user_id);

                $user1->profile_image = IMAGE_URL.$user1->profile_image;

                if($user1->business_document != "")
                {
                    $user1->business_document = IMAGE_URL.$user1->business_document;
                }

                if($user1->cheque_copy_image != "")
                {
                    $user1->cheque_copy_image = IMAGE_URL.$user1->cheque_copy_image;
                }

                if($user1->store_name == "" || $user1->business_document == "" || $user1->person_incharge == "" || $user1->business_registration_number == "" || $user1->business_address == "" || $user1->bank_account_name == "" || $user1->bank_account_number == "" || $user1->bank_name == "" || $user1->branch_code == "" || $user1->IBAN_number == "" || $user1->cheque_copy_image == "")
                {
                    $user1->business_profile_completed = false;
                }else{
                    $user1->business_profile_completed = true;
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Profile Info Updated',
                    'data' => $user1->makeHidden(['created_at', 'updated_at', 'type', 'token', 'email_verified_at', 'verification_code', 'switched_role']),
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
