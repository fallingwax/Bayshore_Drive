<?php
//ini_set('display_errors', '1');

if (isset($_REQUEST['firstName'])) {
    $firstName = htmlspecialchars($_REQUEST['firstName']);
} else {
    $firstName = "Unknown";
}
if (isset($_REQUEST['lastName'])) {
    $lastName = htmlspecialchars($_REQUEST['lastName']);
} else {
    $lastname = "Unknown";
}
if (isset($_REQUEST['emailAddress'])) {
    $emailAddress = htmlspecialchars($_REQUEST['emailAddress']);
} else {
    $emailAddress = "Unknown";
}
if (isset($_REQUEST['eventLocation'])) {
    $location = htmlspecialchars($_REQUEST['eventLocation']);
} else {
    $location = "Unknown";
}
if (isset($_REQUEST['address1'])) {
    $address1 = htmlspecialchars($_REQUEST['address1']);
} else {
    $address1 = "";
}
if (isset($_REQUEST['address2'])) {
    $address2 = htmlspecialchars($_REQUEST['address2']);
} else {
    $address2 = "";
}
if (isset($_REQUEST['city'])) {
    $city = htmlspecialchars($_REQUEST['city']);
} else {
    $city = "";
}
if (isset($_REQUEST['state'])) {
    $state = htmlspecialchars($_REQUEST['state']);
} else {
    $state = "";
}
if (isset($_REQUEST['zipCode'])) {
    $zipCode = htmlspecialchars($_REQUEST['zipCode']);
} else {
    $zipCode = "";
}
if (isset($_REQUEST['phoneNumber'])) {
    $phone = htmlspecialchars($_REQUEST['phoneNumber']);
} else {
    $phone = "XXX-XXX-XXXX";
}
if (isset($_REQUEST['ext'])) {    
    $ext = htmlspecialchars($_REQUEST['ext']);
} else {
    $ext = "";
}
if (isset($_REQUEST['event'])) {
    $eventType = $_REQUEST['event'];
} else {
    $eventType = "";
}
if (isset($_REQUEST['dateOfEvent'])) {
    $dateOfEvent = $_REQUEST['dateOfEvent'];
    $date = new DateTime($dateOfEvent);
} else {
    $dateOfEvent = "";
}
if (isset($_REQUEST['startTime'])) {
    $startTime = $_REQUEST['startTime'];
} else {
    $startTime = "";
}
if (isset($_REQUEST['endTime'])) {    
    $endTime = $_REQUEST['endTime'];
} else {
    $endTime = "";
}
if (isset($_REQUEST['notes'])) {    
    $eventNotes = strip_tags(htmlspecialchars($_REQUEST['notes']));
} else {
    $eventNotes = "No additional notes";
}
    
$url = 'https://www.google.com/recaptcha/api/siteverify';

$data = array(
    'secret' => '6LdZpkkUAAAAALRp4adx-Lw6gYqMQx2M5CM72umP',
    'response' => $_POST["g_recaptcha_response"]
);
$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);


if ($captcha_success->success==false) {
    echo "<p>You are a bot! Go away!</p>";
} else if ($captcha_success->success==true) {
    
    $subject = "Bayshore Drive: Confirmation of Event Request Form";
    
    $headers = "BCC: webadmin@bayshoredrivede.com"."\r\n";
    $headers .= "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";

    $message =  "
    
    <html>
    <head>
    </head>
    <body>
    <table>
    <h1>Event Request Form</h1>
    <div class='request-form' style='color: black; font-size: 16px;'>
        <h3>Contact Information</h3>
        <table>
            <tr>
                <td style='font-size: 16px'>".$firstName." ".$lastName."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>".$emailAddress."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>".$phone." ext.".$ext."</td>
            </tr>
        </table> 
        <h3>Event Details</h3>
        <table>
            <tr>
                <td style='font-size: 16px'>".$location."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>".$address1."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>".$address2."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>".$city.", ".$state." ".$zipCode."</td>
            </tr>
            <br>
            <tr>
                <td style='font-size: 16px'>Event Type: ".$eventType."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>Date: ".$date->format("m/d/Y")."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>Time: ".$startTime." - ".$endTime."</td>
            </tr>
            <tr>
                <td style='font-size: 16px'>Event Notes: ".$eventNotes."</td>
            </tr>
        </table> 
    </div>
    <div class='message-body'>
        <p style='font-size: 14px;'>Thank you for booking Bayshore Drive for your next event! Your request has been received and we will contact you within 24-48 hours to confirm the details of your event and provide a quote.</p>
    </div>
    <div class='valediction' style='font-size: 14px;'>
        <p>Thanks, Bayshore Drive!</p>
    </div>
    </table>
    </body>
    <html>";
    
    mail($emailAddress, $subject, $message, $headers);
    
    echo "<p>Thank you for choosing Bayshore Drive. A confirmation email has been sent to ".$emailAddress.".</p>";
    
}
?>