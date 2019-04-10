<?php

function timeArray() {
    
    //create an array of time in half hour increments
    $timeArray = ['12:00 AM','12:30 AM','01:00 AM','01:30 AM','02:00 AM','02:30 AM','03:00 AM','03:30 AM','04:00 AM','04:30 AM','05:00 AM','05:30 AM','06:00 AM','06:30 AM', '07:00 AM'
                 ,'07:30 AM','08:00 AM', '08:30 AM','09:00 AM', '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM','12:00 PM','12:30 PM','01:00 PM','01:30 PM','02:00 PM','02:30 PM','03:00 PM','03:30 PM','04:00 PM','04:30 PM','05:00 PM','05:30 PM','06:00 PM','06:30 PM', '07:00 PM'
                 ,'07:30 PM','08:00 PM', '08:30 PM','09:00 PM', '10:00 PM', '10:30 PM', '11:00 PM', '11:30 PM'];
    
    foreach ($timeArray as $time) {
        
        echo '<option>'.$time.'</option>'; 
    }
    
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Bayshore Drive Band</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Stylesheets   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="fullcalendar-3.9.0/fullcalendar.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Load recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>A
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Bayshore Drive</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutUs">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#videos">Videos</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#bookUs">Book Us!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#calendar">Calendar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacts">Contact</a>
      </li> 
    </ul>
  </div>
</nav>
<div class="content">   
    <div class="container-fluid">
        <div class="scroll-links" id="home"></div>
        <div class="jumbotron" id="jumbotron1">
          <h1 class="display-3 text-center" >Bayshore Drive</h1>
          <hr class="my-4">
          <p class="text-center">Wilmington's newest Party Band!</p>
        </div>
        <div class="container pb-4">
            <div class="pb-4 scroll-links" id="aboutUs"> 
                <h2 class="text-center" id="aboutUs">About Us</h2>
                <p class="text-center">Bayshore Drive is a 5-piece band from Wilmington, DE. We are a party band with styles ranging from Classic Rock, Funk, Pop and Alternative. We are available for private events, weddings and bookings at local bars and restaurants.</p>
                <div class="row">
                    <div class="col-xl-12">
                        <h5 class="text-center">The Band</h5>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-xl">
                        <div class="row">
                            <div class="col-xl">
                                <p class="text-center">Rob McFarland</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl text-center pb-4">
                                <a href="#"><img align="center" class="" src="img/rob_mcfarland_120x120.png" width="120px" height="120px"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="row">
                            <div class="col-xl">
                                <p class="text-center">Ryan Warfel</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl text-center pb-4">
                                <a href="#"><img align="center" src="img/ryan_warfel_120x120.png" width="120px" height="120px"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="row">
                            <div class="col-xl">
                                <p class="text-center">Ed McFarland</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl text-center pb-4">
                                <a href="#"><img align="center" src="img/ed_mcfarland_120x120.png" width="120px" height="120px"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="row">
                            <div class="col-xl">
                                <p class="text-center">Ron Lassiter</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl text-center pb-4">
                                <a href="#"><img align="center" src="img/ron_lassister_120x120.png" width="120px" height="120px"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="row">
                            <div class="col-xl">
                                <p class="text-center">David McFarland</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl text-center pb-4">
                                <img align="center" src="img/david_mcfarland_120x120.png" width="120px" height="120px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="details-socialMedia pb-4 mb-4">
                <div class="text-center">
                    <a class="p-2" href="https://www.facebook.com/bayshoredrivede/"><img class="social-media-logos" src="img/FB-f-Logo__blue_29.png"></a>
                    <a class="p-2" href="https://twitter.com/BayshoreDriveDE"><img class="social-media-logos" src="img/Twitter_Social_Icon_Rounded_Square_Color.png"></a>
                    <a class="p-2" href="https://www.instagram.com/bayshoredrivede/"><img class="social-media-logos" src="img/glyph-logo_May2016.png"></a>
                </div>
            </div>
            <hr>
        </div>    
    <!--    This section for videos    -->
        <div class="container">
            <h2 class=" text-center scroll-links pb-4" id="videos">Videos</h2>
            <div class="row no-gutters text-center">
                <a class="col-xl video-links" href="#"><img src="img/broadcast-broadcasting-camcorder-66134.jpg" width="384" height="216"></a>
                <a class="col-xl video-links" href="#"><img src="img/cinema-dark-display-8158.jpg" width="384" height="216"></a>
                <a class="col-xl video-links" href="#"><img src="img/action-clapper-film-director-1117132.jpg" width="384" height="216"></a>
                <a class="col-xl video-links" href="#"><img src="img/elephants-hand-lady-88476.jpg" width="384" height="216"></a>
            </div>
             <hr>
        </div>    
        <div class="container scroll-links" id="bookUs">
            <h2 class="text-center">Book Us!</h2>
            <form class="bookUsForm" method="post">
                <div class="form-group row">
                    <div class="col-xl-4 offset-xl-2">
                        <label class="form-check-label-sm" for="firstName">First Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="firstName" placeholder="" required>
                        <div class="text-success" id="firstNameMsg"></div>
                    </div>
                    <div class="col-xl-4">
                        <label class="form-check-label-sm" for="lastName">Last Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="lastName" placeholder="" required>
                        <div id="lastNameMsg"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-8 offset-xl-2">
                        <label class="form-check-label-sm" for="emailAddress">Email Address<span class="text-danger"> *</span></label>
                        <input type="email" class="form-control form-control-sm" id="emailAddress" placeholder="" required>
                        <div id="emailMsg"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-8 offset-xl-2">
                        <label class="form-check-label-sm" for="eventLocation">Location Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="eventLocation" required>
                        <div id="locationMsg"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-8 offset-xl-2">
                        <label class="form-check-label-sm" for="address1">Location Address 1<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="address1" placeholder="" required>
                        <div id="address1Msg"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-8 offset-xl-2">
                        <label class="form-check-label-sm" for="address2">Location Address 2</label>
                        <input type="text" class="form-control form-control-sm" id="address2" placeholder="">
                        <div id="address2Msg"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-4 offset-xl-2">
                        <label class="form-check-label-sm" for="city">Location City<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="city" placeholder="" required>
                        <div id="cityMsg"></div>
                    </div>
                    <div class="col-xl-2">
                        <label class="form-check-label-sm" for="state">Location State<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" id="state" required>
                            <option>DE</option>
                            <option>MD</option>
                            <option>NJ</option>
                            <option>NY</option>
                            <option>PA</option>
                            <option>VA</option>
                        </select>    
                    </div>
                    <div class="col-xl-2">
                        <label class="form-check-label-sm" for="zipCode">Location Zip Code<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="zipCode" placeholder="" required>
                        <div id="zipCodeMsg"></div>
                    </div>
                </div>    
                <div class="form-group row">    
                    <div class="col-xl-6 offset-xl-2">
                        <label class="form-check-label-sm" for="phoneNumber">Contact Phone Number<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm" id="phoneNumber" placeholder="" required>
                        <div id="phoneNumberMsg"></div>
                    </div>
                    <div class="col-xl-2">
                        <label class="form-check-label-sm" for="extension">Phone Extension</label>
                        <input type="text" class="form-control form-control-sm" id="extension" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-8 offset-xl-2">
                        <label class="form-check-label-sm" for="eventType">Event Type<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" id="eventType">
                            <option>Wedding</option>
                            <option>Graduation</option>
                            <option>Birthday</option>
                            <option>Celebration</option>
                            <option>Bar or Restraurant</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-4 offset-xl-2">
                        <label class="form-check-label-sm" for="dateOfEvent">Date of Event<span class="text-danger"> *</span></label>
                        <input type="date" class="form-control form-control-sm" id="dateOfEvent" required>
                        <div id="dateMsg"></div>
                    </div>
                    <div class="col-xl-2">
                        <label class="form-check-label-sm" for="startTime">Start Time<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" id="startTime" required>
                            <?php timeArray(); ?>
                        </select>
                    </div>
                    <div class="col-xl-2">
                        <label class="form-check-label-sm" for="endTime">End Time<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" id="endTime">
                            <?php timeArray(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-8 offset-xl-2">
                        <label class="form-check-label-sm" for="notes">Event Notes</label>
                        <textarea class="form-control form-control-sm input-lg" id="notes"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xl-auto offset-xl-2">
                        <div class="g-recaptcha" data-sitekey="6LdZpkkUAAAAABl_f0s4ZWpbZ608F4Wq_O1goDDv"></div>
                    </div>
                </div>    
                <div class="form-group row">
                    <div class="col-xl-2 offset-xl-2">
                        <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                    </div>     
                </div>
            </form>
            <div class="" id="confirmation"></div>
            <div class="mt-4"></div>
            <hr>
        </div> 
    </div>
    <div class="container">
        <h2 class="text-center pb-4"></h2>
        <div id="calendar"></div>
    </div>
    <div class="text-center mt-4 pt-4" id="contacts"> 
        <h4>Questions? Contact Us!</h4>
        <p>Email: bookings@bayshoredrivede.com</p>
        <p>Phone: 920-395-8327</p>
    </div>
    <div class='text-center footer'>
        <p>Site designed and maintained by FallingWax Designs &copy; 2018</p>
        <p><a class="link" href="admin.php">Admin</a></p>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
  src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="fullcalendar-3.9.0/lib/moment.min.js"></script>
<script src="fullcalendar-3.9.0/fullcalendar.js"></script>
<script type='text/javascript' src='fullcalendar-3.9.0/gcal.js'></script>
<!-- Optional JavaScript -->
<script> 

    $(document).ready(function() {  
    
        $('#calendar').fullCalendar({
            defaultView: 'month',
            aspectRatio: 2,
            contentHeight: 'auto',
            themeSystem: 'bootstrap4',
            header: {
              left: 'prev,next today',
              center: 'title',
              right: ''
            },
            googleCalendarApiKey: 'AIzaSyD5kBpItXh5zNHggSGsYgENBEuIpFxRV2E',
            events: {
              googleCalendarId: 'bayshoredrivede@gmail.com',
            className: 'gcal-event' 
            },
            eventClick: function(event) {
                if (event.url) {
//                  window.open(event.url);
                  return false;
                }
              }
        })
    });
    
    $('#submit').on('click', function(event) {
        
        var isValid = 0;
        
        if($('#firstNameMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#firstNameMsg').text() == "") {
            $('#firstNameMsg').removeClass("text-success");
            $('#firstNameMsg').addClass("text-danger");
            $('#firstNameMsg').html("Please enter first name");
            $('#firstName').focus();
        } else {
        }
        
        if($('#lastNameMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#firstNameMsg').text() == "") {
            $('#firstNameMsg').removeClass("text-success");
            $('#firstNameMsg').addClass("text-danger");
            $('#firstNameMsg').html("Please enter Last name");
            $('#lastName').focus();
        } else {
        }
        
        if($('#emailMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#emailMsg').text() == "") {
            $('#emailMsg').removeClass("text-success");
            $('#emailMsg').addClass("text-danger");
            $('#emailMsg').html("Please enter email address");
            $('#email').focus();
        } else {
        }
        
        if($('#locationMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#locationMsg').text() == "") {
            $('#locationMsg').removeClass("text-success");
            $('#locationMsg').addClass("text-danger");
            $('#locationMsg').html("Please enter event location name");
            $('#eventLocation').focus();
        } else {
        }
                                   
        if($('#address1Msg').text() == "OK") {
            isValid += 1;
        } else if ($('#address1Msg').text() == "") {
            $('#address1Msg').removeClass("text-success");
            $('#address1Msg').addClass("text-danger");
            $('#address1Msg').html("Please enter location address");
            $('#address1').focus();
        } else {
        }
           
        if($('#address2Msg').text() == "OK") {
            isValid += 1;
        } else if ($('#address2Msg').text() == "") {
        } else {
        }   
        
        if($('#cityMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#cityMsg').text() == "") {
            $('#cityMsg').removeClass("text-success");
            $('#cityMsg').addClass("text-danger");
            $('#cityMsg').html("Please enter location city");
            $('#city').focus();
        } else {
        }
           
        if($('#zipCodeMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#zipCodeMsg').text() == "") {
            $('#zipCodeMsg').removeClass("text-success");
            $('#zipCodeMsg').addClass("text-danger");
            $('#zipCodeMsg').html("Please enter location zip code");
            $('#zipCode').focus();
        } else {
        }
        
        if($('#phoneNumberMsg').text() == "OK") {
            isValid += 1;
        } else if ($('#phoneNumberMsg').text() == "") {
            $('#phoneNumberMsg').removeClass("text-success");
            $('#phoneNumberMsg').addClass("text-danger");
            $('#phoneNumberMsg').html("Please enter phone number");
            $('#phoneNumber').focus();
        } else {
        }
        
        if($('#dateOfEvent').val() == "") {
            $('#dateMsg').removeClass("text-success");
            $('#dateMsg').addClass("text-danger");
            $('#dateMsg').html("Please select date of event");
            $('#dateOfEvent').focus();
        } else {
            isValid += 1;
            $('#dateMsg').removeClass("text-danger");
            $('#dateMsg').addClass("text-success");
            $('#dateMsg').html("OK");
        }
        
        
        if(isValid >= 9) {
            event.preventDefault();
       
            
    $.ajax({
        url: 'process.php',
        type: "POST",
        data: {
            firstName: $('#firstName').val(),
            lastName: $('#lastName').val(),
            emailAddress: $('#emailAddress').val(),
            eventLocation: $('#eventLocation').val(),
            address1: $('#address1').val(),
            address2: $('#address2').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            zipCode: $('#zipCode').val(),
            phoneNumber: $('#phoneNumber').val(),
            ext: $('#ext').val(),
            event: $('#eventType').val(),
            dateOfEvent: $('#dateOfEvent').val(),
            startTime: $('#startTime').val(),
            endTime: $('#endTime').val(),
            notes: $('#eventNotes').val(),
            g_recaptcha_response: $('#g-recaptcha-response').val()  
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
            $('#confirmation').addClass("alert alert-warning");
            $('#confirmation').html("An error has occurred. Please try again.")
        },
            
        success: function(result){
            $('#confirmation').addClass("alert alert-primary")
            $('#confirmation').html(result);
        }
        
        
    
    });
    
    } else {
        event.preventDefault();
        alert(isValid);
        $('#confirmation').addClass("alert alert-warning")
        $('#confirmation').html("Something Went Wrong");
    }
    
});
    

$('#firstName').keyup(function () {
    
    if(/^[a-zA-Z]+$/.test($(this).val())) {
        $('#firstNameMsg').removeClass("text-danger");
        $('#firstNameMsg').addClass("text-success");
        $('#firstNameMsg').html("OK");
    } else if ($(this).val() == ""){
        $('#firstNameMsg').removeClass("text-success");
        $('#firstNameMsg').addClass("text-danger");
        $('#firstNameMsg').html("Please enter first name");
    } else {
        $('#firstNameMsg').removeClass("text-success");
        $('#firstNameMsg').addClass("text-danger");
        $('#firstNameMsg').html("");
    }
    
}); 
    
$('#lastName').keyup(function () {
    
    if(/^[a-zA-Z]+$/.test($(this).val())) {
        $('#lastNameMsg').removeClass("text-danger");
        $('#lastNameMsg').addClass("text-success");
        $('#lastNameMsg').html("OK");
    } else if ($(this).val() == ""){
        $('#lastNameMsg').removeClass("text-success");
        $('#lastNameMsg').addClass("text-danger");
        $('#lastNameMsg').html("Please enter last name");
    } else {
        $('#lastNameMsg').removeClass("text-success");
        $('#lastNameMsg').addClass("text-danger");
        $('#lastNameMsg').html("");
    }
    
});
    
$('#emailAddress').keyup(function () {
    
    if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test($(this).val())) {
        $('#emailMsg').removeClass("text-danger");
        $('#emailMsg').addClass("text-success");
        $('#emailMsg').html("OK");
    } else if ($(this).val() == "") {
        $('#emailMsg').removeClass("text-success");
        $('#emailMsg').addClass("text-danger");
        $('#emailMsg').html("Please enter email address");
    }else {
        $('#emailMsg').removeClass("text-success");
        $('#emailMsg').addClass("text-danger");
        $('#emailMsg').html("Please enter a valid email address");
    }
    
});     

$('#eventLocation').keyup(function () {
    
    if(/^[a-zA-Z0-9\.. .'."]+$/.test($(this).val())) {
        $('#locationMsg').removeClass("text-danger");
        $('#locationMsg').addClass("text-success");
        $('#locationMsg').html("OK");
    } else if ($(this).val() == "") {
        $('#locationMsg').removeClass("text-success");
        $('#locationMsg').addClass("text-danger");
        $('#locationMsg').html("Please enter event location");
    } else {
        $('#locationMsg').removeClass("text-success");
        $('#locationMsg').addClass("text-danger");
        $('#locationMsg').html("No special characters please");
    }
    
});    
    
$('#address1').keyup(function () {
    
    if(/^[a-zA-Z0-9\.. ]+$/.test($(this).val())) {
        $('#address1Msg').removeClass("text-danger");
        $('#address1Msg').addClass("text-success");
        $('#address1Msg').html("OK");
    } else if ($(this).val() == "") {
        $('#address1Msg').removeClass("text-success");
        $('#address1Msg').addClass("text-danger");
        $('#address1Msg').html("Please enter location address");
    } else {
        $('#address1Msg').removeClass("text-success");
        $('#address1Msg').addClass("text-danger");
        $('#address1Msg').html("No special characters please");
    }
    
});    
    
$('#address2').keyup(function () {
    
    if(/^[a-zA-Z0-9\.. ]+$/.test($(this).val())) {
        $('#address2Msg').removeClass("text-danger");
        $('#address2Msg').addClass("text-success");
        $('#address2Msg').html("OK");
    } else if ($(this).text("")) {
        $('#address2Msg').removeClass("text-danger");
        $('#address2Msg').addClass("text-success");
        $('#address2Msg').html("OK");
    
    } else {
        $('#address2Msg').removeClass("text-success");
        $('#address2Msg').addClass("text-danger");
        $('#address2Msg').html("No special characters please");
    }
    
});
    
$('#city').keyup(function () {
    
    if(/^[a-zA-Z]+$/.test($(this).val())) {
        $('#cityMsg').removeClass("text-danger");
        $('#cityMsg').addClass("text-success");
        $('#cityMsg').html("OK");
    } else if ($(this).text("")) {
        $('#cityMsg').removeClass("text-success");
        $('#cityMsg').addClass("text-danger");
        $('#cityMsg').html("Please enter location city");
    } else {
        $('#cityMsg').removeClass("text-success");
        $('#cityMsg').addClass("text-danger");
        $('#cityMsg').html("Only letters please");
    }
    
});
    
$('#zipCode').keyup(function () {
    
    var zip = $(this).val();
    
    if(/[0-9]{5}/.test(zip)) {
        $('#zipCodeMsg').removeClass("text-danger");
        $('#zipCodeMsg').addClass("text-success");
        $('#zipCodeMsg').html("OK");
    } else if ($(this).text("")) {
        $('#zipCodeMsg').removeClass("text-success");
        $('#zipCodeMsg').addClass("text-danger");
        $('#zipCodeMsg').html("Please enter location zip code");
    } else {
        $('#zipCodeMsg').removeClass("text-success");
        $('#zipCodeMsg').addClass("text-danger");
        $('#zipCodeMsg').html("Only 5-digit numerical zip code allowed");
    }
    
});
      

$('#phoneNumber').focusout(function () {
    
    var x = $(this).val();
    
    if (x == "") {
        $('#phoneNumberMsg').removeClass("text-success");
        $('#phoneNumberMsg').addClass("text-danger");
        $('#phoneNumberMsg').html("Please enter phone number");
        $('#phoneNumber').focus;
    } else {

        x = x.replace(/[^\d]+/g, '').replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
        $('#phoneNumberMsg').removeClass("text-danger");
        $('#phoneNumberMsg').addClass("text-success");
        $('#phoneNumberMsg').html("OK");
        $('#phoneNumber').val(x);
        
    }
        
});
    
$('#notes').focusout(function() {
    var x = $(this).val();
    
    x = x.replace(/[^a-zA-Z0-9\s.$.@.!.?...&.%.]/g, '');
    
    $('#notes').val(x);
    
})
    
    
    

</script>

</body>
</html>