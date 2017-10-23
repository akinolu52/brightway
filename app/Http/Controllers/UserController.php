<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function user(Request $request){
      
        $user = new User();
        // $this->validate($request , [
        //     'noofitems' => 'required|numeric'
        // ]);

        $user->firstname = $request['firstname'];
         $user->lastname = $request['lastname'];
         $user->email = $request['email'];
         $user->number = $request['number'];
        $user->quantity = $request['quantity'];
        $user->from_address = $request['from_address'];
        $user->to_address = $request['to_address'];

        $from = ''; 
        $to = '';
        $amount = '';
        
   $areas =  array(
    'island1' => array('Lagos Island', 'Ikoyi', 'Obalende', 'Dolphin Estate', 'Osborne Park View', 'Victoria Island', 'Banana Island', 'Marina', 'Oniru', 'Lekki Phase 1'),

   'island2' => array('3rd Roundabout', 'Osapa London', 'Alpha Beach', 'Chisco', 'Agungi Femi', 'Chevron', 'VGC', 'Ajah', 'Lekki Phase 2', 'Abraham Adesanya', 'Badore') ,

    'mainland1' => array('Apapa', 'Ijora', 'Iganmu', 'Costain', 'Ojuelegba', 'Surulere', 'Mushin', 'Shomolu', 'Yaba', 'Onipanu', 'Palmgrove', 'Obanikoro', 'Iyanaoworo', 'Bariga') , 

   'mainland2' => array('Anthony', 'Gbagada', 'Ajao Estate', 'Mushin', 'Isolo', 'Oshodi', 'Olodi-Apapa', 'MMA1', 'Mm2', 'Maryland', 'Ikeja'),

    'mainland3' => array('Ojota', 'Ketu', 'Mile 12', 'Magodo-Shangisha', 'Alausa', 'Omole Phase 1', 'Omole Phase 2', 'Magodo Phase 1', 'Ojodu Berger', 'Ogba', 'Iju-Ishaga'),

    'mainland4' =>  array('Agege', 'Orile-Agege', 'Abule-Egba', 'Egbeda', 'Ikotun', 'Idimu', 'Igando', 'Ipaja', 'Gowon Estate', 'Igando', 'Ifako', 'Alimosho'),

    'mainland5' => array('Mile 2', 'Amuwo-Odofin', 'Festac', 'Satelite Town', 'Navy Town', 'Alaba', 'LASU', 'Okomaiko', 'Volkswagen', 'Trade-Fair', 'Ojo', 'Iba')
);

        foreach($areas as $key => $area){
           if (in_array($request['from'], $area)){
               $from = $key;
               $user->from = $key . "-" . $request['from'];
            }
        }

        foreach($areas as $key => $area){
           if (in_array($request['to'], $area)){
               $to = $key;
            $user->to  = $key . "-" . $request['to'];
            }
        }
     
        
       if (
           ($from == 'island1' && $to == 'island1') || ($from == 'island1' && $to == 'island2') ||  ($from == 'island1' && $to == 'mainland1') || ($from == 'island2' && $to == 'island1') || ($from == 'island2' && $to == 'island2') || ($from == 'mainland1' && $to == 'island1') || ($from == 'mainland1' && $to == 'mainland1') || ($from == 'mainland1' && $to == 'mainland2') || ($from == 'mainland1' && $to == 'mainland3') || ($from == 'mainland2' && $to == 'island1') || ($from == 'mainland2' && $to == 'mainland1') || ($from == 'mainland2' && $to == 'mainland2')
           || ($from == 'mainland2' && $to == 'mainland3') || ($from == 'mainland3' && $to == 'mainland1') || ($from == 'mainland3' && $to == 'mainland2') || ($from == 'mainland3' && $to == 'mainland3') || ($from == 'mainland3' && $to == 'mainland4') || ($from == 'mainland4' && $to == 'mainland3') || ($from == 'mainland4' && $to == 'mainland4') || ($from == 'mainland5' && $to == 'mainland3') || ($from == 'mainland5' && $to == 'mainland4') || ($from == 'mainland5' && $to == 'mainland5')
          ){
            $amount = '1000';
           }
        elseif (
                       ($from == 'island1' && $to == 'mainland2') || ($from == 'island2' && $to == 'mainland1') ||  ($from == 'island2' && $to == 'mainland2') || ($from == 'mainland1' && $to == 'island1') || ($from == 'island2' && $to == 'island2') || ($from == 'mainland1' && $to == 'island2') || ($from == 'mainland1' && $to == 'mainland4') || ($from == 'mainland2' && $to == 'island2') || ($from == 'mainland4' && $to == 'mainland1') || ($from == 'mainland4' && $to == 'mainland2') || ($from == 'mainland5' && $to == 'mainland2')
        ){
            $amount = '1200';
        }
        else {
            $amount = '1500';
        }

        $user->trackid =  date("Ymd") - date("is");
        $user->status = "request";
        $user->amount = $amount;

        $user->save();
        $message = '';
        if ($user->save()){
            $message = "Check Your Mail to get Tracking ID";
        }

        // Send Mail
        $data = array("trackid" => $user->trackid , 'email' => $request['email'] , 'from' => 'brightwaydelivery@gmail.com' ,'name' => 'Bright Way Delivery');

        Mail::send('emails.trackid', $data, function($message) use ($data)
        {
            $message->to( $data['email'] )->from( $data['from'], $data['name'] )->subject( 'Your Tracking ID' );
        });

        return view('main.home',['message' => "Check Your Mail to get Tracking ID" ]);
    }

    public function track(Request $request){
        
        $track = User::where('trackid', '=', $request['trackid'])->first();
        $status = $track->status;
        
        return view('main.home',['status' => $status]);
    }

}