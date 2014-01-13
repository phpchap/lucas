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

Route::get('/', function(){
    return View::make('index');
});

// contact page AJAX send to Amazon SES
Route::post('/contact', function(){

    // grab the input 
    $input = Input::all();
    
    // build the email details
    $name = $input['name']; 
    $email = $input['email']; 
    $subject = $input['subject']; 
    $message = $input['message'];
    
    // build the message
    $msg = "Diamond Exchange Contact Form Message: <br/>";
    $msg .= "From: ".$name."<br/>";    
    $msg .= "Email: ".$email ."<br/>";
    $msg .= "Subject : ".$subject."<br/>";    
    $msg .= "Message: ".$message."<br/>";
 
    // retrieve the ses client
    $client = App::make('aws')->get('Ses');

    // send the email
    $sent = $client->sendEmail(array('Source' => 'hello@diamondexchange.com',
                                     'Destination' => array( 'ToAddresses' => array('phpchap@gmail.com')),
                                     'Message' => array('Subject' => array('Data' => 'From Diamond Exchange Website: '.$subject),
                                     'Body' => array('Html' => array('Data' => $msg)))));    

    if($sent) {
        return 'OK';
    } else {
        return 'ERROR';
    }    
});
