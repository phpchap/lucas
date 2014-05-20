<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// home page
Route::any('/', 'HomeController@home');

// invest in diamonds
Route::any('/invest-in-diamonds', 'HomeController@investInDiamonds');

// invest in gold
Route::any('/invest-in-gold', 'HomeController@investInGold');

// invest in german property
Route::any('/invest-in-german-property', 'HomeController@investInGermanProperty');

// invest in german property
Route::any('/invest-in-water-rights', 'HomeController@investInWaterRights');

// contact us
Route::any('/contact-us', 'HomeController@contactUs');

// disclaimer
Route::any('/disclaimer', 'HomeController@disclaimer');

// contact page AJAX send to Amazon SES
Route::any('/contact', function(){

    // grab the input 
    $input = Input::all();

        error_log(print_r($input , true));

    // build the email details
    $name   = $input['name'];
    $email  = $input['email'];
    $message= $input['comment'];
    $phone  = $input['phone'];


    // build the message
    $msg = "Londond DE Contact Form Message: <br/>";
    $msg .= "<br/>";    
    $msg .= "From: ".$name."<br/>";
    $msg .= "Email: ".$email ."<br/>";
    $msg .= "Phone: ".$phone."<br/>";
    $msg .= "Message: ".$message."<br/>";
 
    // retrieve the ses client
    $client = App::make('aws')->get('Ses');

    // send the email
    $sent = $client->sendEmail(array('Source' => 'philip@thediamondexchange.co.uk', 
                                     'Destination' => array( 'ToAddresses' => array('philip@thediamondexchange.co.uk')),
                                     'Message' => array('Subject' => array
                                     ('Data' => 'From Branson-Ridley Website'),
                                     'Body' => array('Html' => array('Data' => $msg)))));    

    if($sent) {
        return 'OK';
    } else {
        return 'ERROR';
    }    
});
