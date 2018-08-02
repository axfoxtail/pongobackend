<?php

namespace App\Common\utils;

/**
 * 
 */

use Twilio\Rest\Client;


class GeneralUtils
{
	
	public static function generateSMS($phonenumber, $verify_code){

        $sid = env('TWILIO_SID', '');
        $token = env('TWILIO_TOKEN', '');

        $client = new Client($sid, $token);

        try{

            $client->messages->create(
                
                '+'.$phonenumber,
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+19293771033',
                    // the body of the text message you'd like to send
                    'body' => 'Pongo chat verification code : '.$verify_code
                )
            );
        } catch(\Exception $e) {
            return false;
        }

        return true;

    }


    public static function generate4VefifyCode(){
    	$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
     	$promocode = "";
     	for ($i = 0; $i < 4; $i++) {
     	    $promocode .= $chars[mt_rand(0, strlen($chars)-1)];
     	}

     	return $promocode;
    }
}