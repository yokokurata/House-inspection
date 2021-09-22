<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//$feedback = $_POST['feedback']; //contents

//receive data from form
    //Client ID(number) here
    $visitDate = $_POST['visitDate'];
    $email_address = $_POST['email_address']; //to:
    $exteriorOne = $_POST['exteriorOne'];
    $commentOne = $_POST['commentOne'];
    $exteriorTwo = $_POST['exteriorTwo'];
    $commentTwo = $_POST['commentTwo'];
    $trafficLight = $_POST['trafficLight'];
    $inspectionPhoto = $_POST['inspectionPhoto'];
    $nextDate = $_POST['nextDate'];
    $nextTime = $_POST['nextTime'];


//print test
    echo 'visitDate:' . $visitDate . "<br>" . 'exteriorOne:' . $exteriorOne . "<br>" . 'commentOne:'
    . $commentOne . "<br>" . 'exteriorTwo:'. $exteriorTwo . "<br>" . 'commentTwo:' . $commentTwo . "<br>"
    . 'trafficLight:' . $trafficLight ."<br>" . 'inspectionPhoto:' . $inspectionPhoto . "<br>" .
    'nextDate:' . $nextDate . 'nextTime' . $nextTime;

}


//To filter input data
//function filter_email_header($form_field) {
 //   return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
//}

//filter function to clean up email address
//$email_address  = filter_email_header($email_address);

$subject = "Property Inspection Form";
$headers = "From: Comp373";
$body =  <<< EOM
Dear  XXX

Property Inspection Form

Visit date: {$visitDate}

Exterior
•Walkways free of clutter, toys, weeds etc?:{$exteriorOne} 
    {$commentOne}
•Fences, gates painted/stained and working?: {$exteriorTwo}
    {$commentTwo}
•Inspection photos: {$inspectionPhoto}
•Next inspection
    Date: {$nextDate}
    Time: {$nextTime}


==============================
Estate of Grace
Address:
Tel: 03-xxxx-xxxx
Mobile: xxx-xxxxxxx
E-mail:xxx@xxxx.com
URL: https://www.xxxxxxxxx
==============================

EOM;


$sent = mail($email_address, $subject, $body, $headers);

if ($sent) {

    ?><html>
    <head>
        <title>Sent</title>
    </head>
    <body>
    <h1>Sent</h1>

    </body>
    </html>

    <?php

} else {
    ?><html>
    <head>
        <title>Something went wrong</title>
    </head>
    <body>
    <h1>Something went wrong</h1>
    <p>We could not send your form. Please try again.</p>
    </body>
    </html>
    <?php
}
?>
