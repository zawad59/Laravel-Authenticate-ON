<?php

namespace App\Http\Controllers;

use App;
use App\OnlineStores;
use App\Product_Codes;
use App\Stores;
use App\UsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Route;
use Validator;



class OnController extends Controller
{

    public function index(Request $request)
    {

        $routename = Route::currentRouteName();

        if ($routename == 'SG') {
            $send_route_name = 'Singapore';
        } else if ($routename == 'MY') {
            $send_route_name = 'Malaysia';
        } else if ($routename == 'PH') {
            $send_route_name = 'Philippines';
        } else if ($routename == 'TH') {
            $send_route_name = 'Thailand';
            App::setLocale('thai');
        } else if ($routename == 'TH.EN') {
            $send_route_name = 'Thailand';
        } else if ($routename == 'VN') {
            $send_route_name = 'Vietnam';
            App::setLocale('viet');
        } else if ($routename == 'VN.EN') {
            $send_route_name = 'Vietnam';
        } else if ($routename == 'ID') {
            $send_route_name = 'Indonesia';
            App::setLocale('bahasa');
        } else if ($routename == 'ID.EN') {
            $send_route_name = 'Indonesia';
        } else if ($routename == 'TR') {
            $send_route_name = 'Turkey';
            App::setLocale('turkece');
        } else if ($routename == 'TR.EN') {
            $send_route_name = 'Turkey';
        } else if ($routename == 'EG') {
            $send_route_name = 'Egypt';
            App::setLocale('arabic');
        } else if ($routename == 'EG.EN') {
            $send_route_name = 'Egypt';
        } else if ($routename == 'SA') {
            $send_route_name = 'Saudi Arabia';
            App::setLocale('arabic');
        } else if ($routename == 'SA.EN') {
            $send_route_name = 'Saudi Arabia';
        } else if ($routename == 'IQ') {
            $send_route_name = 'Iraq';
            App::setLocale('arabic');
        } else if ($routename == 'IQ.EN') {
            $send_route_name = 'Iraq';
        } else if ($routename == 'AE') {
            $send_route_name = 'UAE';
            App::setLocale('arabic');
        } else if ($routename == 'AE.EN') {
            $send_route_name = 'UAE';
        }

        if ($routename == 'SG' || $routename == 'MY' || $routename == 'PH' || $routename == 'TH' ||
            $routename == 'TH.EN' || $routename == 'VN' || $routename == 'VN.EN' || $routename == 'ID' || $routename == 'ID.EN') {
            $continent = 'South Asia';
        } else {
            $continent = 'West Asia';
        }

        $verified_count = Product_Codes::where('verified', 'yes')
            ->where('continent', $continent)
            ->count('item_code');
        $map_country_lat = DB::table('country')
            ->where('name', $send_route_name)
            ->value('lat');
        $map_country_long = DB::table('country')
            ->where('name', $send_route_name)
            ->value('longs');

        //To show stores in map get lat long of stores from db
        $getlat = DB::table('stores')->where('country', $send_route_name)->pluck('lat');
        $getlong = DB::table('stores')->where('country', $send_route_name)->pluck('longs');
        $storename = DB::table('stores')->where('country', $send_route_name)->pluck('StoreName');
        $storeadr = DB::table('stores')->where('country', $send_route_name)->pluck('Address');
        $storephn = DB::table('stores')->where('country', $send_route_name)->pluck('PhoneNo');
        
        //Show storenames, address and phnno
        $storeinfo = Stores::all()->where('country', $send_route_name);
        $online_stores = OnlineStores::all()->where('country', $send_route_name);
        return view('index', compact('verified_count', 'getlat', 'getlong',
            'map_country_lat', 'map_country_long', 'storeinfo',
            'storename', 'storeadr', 'storephn', 'send_route_name', 'online_stores'));
    }

    public function store(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'product_code' => ['required', 'min:9', 'max:9'],
            'user_name' => 'required',
            'user_email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->passes()) {
        if ($request->has('promo')) {
            $user = new UsersTable();
            $given_name = $request->input('user_name');
            $given_email = $request->input('user_email');
            $Already_email = DB::table('userstable')->where('email', $given_email)->value('email');
            if ($Already_email == $given_email) {
                $user_entry = 'Email Already registered';
            } else {
                $user->name = $given_name;
                $user->email = $given_email;
                $user->save();
                $user_entry = 'User entry validated';
            }
        } else {
            $user_entry = '';
        }

        //Matching ids of products
        $item = new Product_Codes();
        $given_code = $request->input('product_code');
        $country = $request->input('country');
        $db_code = Product_Codes::where('item_code', $given_code)
            ->where('country', $country)
            ->value('item_code');

        if ($given_code != $db_code and $given_code != '') {
            $send_value = 'PRODUCT VERIFICATION FAILED';
        } else {
            $item->item_code = $given_code;
            $send_value = 'PRODUCT VERIFIED';
            $update = DB::table('product__codes')
                ->where('item_code', $given_code)
                ->update(['verified' => 'yes']);
        }

        return response()->json(['product_verify_info' => $send_value, 'user_info' => $user_entry]);
    }
    else
        return response()->json(['error_product_code'=>$validator->errors()->all()]);
    }

    public function sendmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name_usr' => 'required',
            'email_usr' => 'required|email',
            'phn_usr' => 'required',
            'msg_usr' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->passes()) {
            
                $from = $request->input('email_usr');
                $to = 'maxbexca@gmail.com';
                $name = $request->input('name_usr');
                $phn = $request->input('phn_usr');
                $msg = $request->input('msg_usr');
                $sub = $request->input('category');
                $country = $request->input('country_contact');
                $senderinfo = 'Name : ' . $name . ' ' . 'Phone : ' . $phn . ' ' . 'Email : ' . $from . ' ' . 'Country : ' . $country;

                Mail::raw($msg, function ($message) use ($from, $to, $senderinfo, $msg, $sub, $name) {

                    $message->to($to)->from($from, $senderinfo)
                        ->subject($sub)->replyTo($from, $name);
                });

                return response()->json(['mail_success'=>'Your Message has been received']);
            }
        
      else
          return response()->json(['error_mail'=>$validator->errors()->all()]);
            
        

    }

}
