<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom Css-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome files-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
</head>
<body>

    <section id="header">
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="../assests/images/SAWARI-logo-4.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-colspan="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-none">Why Us?</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="blogs.php" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-none">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a href="faq.php" class="nav-link">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="faq-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                        <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                            <i class="fa fa-database"></i> Payment
                        </a>
                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                            <i class="fa fa-check-circle"></i> Booking
                        </a>
                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                            <i class="fa fa-stop-circle"></i> Booking Cancellation & Refund
                        </a>
                        <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                            <i class="fa fa-life-saver"></i> Safety & Tips
                        </a>
                        <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="false">
                            <i class="fa fa-times"></i> Damage
                        </a>
                        <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                            <i class="fa fa-user-circle"></i> Profile
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1"> How do I pay?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>You can pay online using debit/credit card or e-wallets. You can also pay at the hub station during your vehicle pick-up. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Is fuel included in tariff?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>No, fuel is not included in the amount you pay for two wheeler rental.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">How does SAWARI handle security deposits?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>Security Deposits with SAWARI are kept secure and are 100% refundable to the Rider after he/she has completed their bike trip and have returned the bike.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">What happens if I don’t get my security deposit back?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>Security Deposits with SAWARI are kept secure and are 100% refundable to the Rider after he/she has completed their bike trip and have returned the bike. If for some reason you are not given your security deposit back, you can raise an issue by calling us and we will see that the issue is solved immediately. You can reach us here: +91-8448444897.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                            <div class="accordion" id="accordion-tab-2">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">What documents are required to book a bike?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>You basically need two documents to be verified by us in original. <br>

                                                Driving license. <br>
                                                Passport, Election Card, Aadhaar Card (anyone of the document is require) <br>
                                                To get Self Driven Bike Rental, rider needs to be 18 years of age or older to get a bike rental.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2"> Can I extend my booking?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>Yes, you can extend the booking. But the request should be made an hour before the drop off time. Your request can be denied if there is non-availability of bikes on rent. Charges would be the standards rate for the extension.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3">What happens if I am unable to show the documents required to rent the bike?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>If you are unable to show your documents, your booking will be cancelled and no refund will be granted. So do make sure you are able to show up with your documents before booking a bike!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4">Where should I pick up the bike from?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>After you book a bike for a certain date, a ‘Confirmation Message’ is sent to your phone number with all the relevant details about picking up the bike. In case you don’t receive a confirmation message, you can give us a call at +91-8448444897 and we will solve the issue immediately. You could also try waiting for a while as network problems do occur sometimes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-5">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-5" aria-expanded="false" aria-controls="accordion-tab-2-content-5">What if I return the bike late?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-5" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>If you drop the bike off way past the due time, a penalty will be charged. Returning the bike past the due date causes inconvenience to our Dealers and other Riders who might have scheduled a booking for the bike. You may call the Dealer for an extension before the end of your trip if you think you are going to be late.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                            <div class="accordion" id="accordion-tab-3">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1"> Can I cancel the booking?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>Yes, cancellation policy is as below <br>
                                                1.Cancellation made 6hrs or more prior to pick-up time: ₹100 <br>
                                                2.Cancellation made 6hrs prior to pick-up time: 50% of Booking Fee <br>
                                                3.Cancellation made 2hrs prior pick-up time: 75% of the Booking Fee <br>
                                                4.Cancellation made after pick-up time: No Refund <br>
                                               Note: Refund will be processed through the original payment mode within 7 to 11 working days.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">How to cancel my booking? What is the cancellation policy?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>You can simply cancel your booking on the website. We do have a cancelation policy. If the Rider cancels their booking before 24 hours of the Bike pick up time, they are refunded 80% of the amount paid. However, if the cancellation is done on the same day of the Bike pick up time (i.e. within 24 hours of the pickup time), they are not refunded any amount.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">How many days approximately it will to get to get my refund after cancelation?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>It’ll take approximately 7-11 days to reflect the refund in your bank statement after cancellation of your rental bike.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                            <div class="accordion" id="accordion-tab-4">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">What happens if I meet with an accident?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>We treat accidents and injuries during bike rides very seriously. If you are in such a situation, you should first try to get any immediate in person help possible. Followed by this call the vendor immediately to inform him of the mishap. We advise you to inform us of the incident as soon as possible as well.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-2" aria-expanded="false" aria-controls="accordion-tab-4-content-2">Is there any speed limit on the bike?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-4-content-2" aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>The speed limit is determined by the State you are in as different States have different traffic laws. It also depends on the Dealer and the particular bike you rent. As a general rule it is best to travel at a safe and comfortable speed.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-3" aria-expanded="false" aria-controls="accordion-tab-4-content-3">Will I be getting a complimentary helmet?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-4-content-3" aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>GoBikes provides one helmet with each booking. A second helmet is also provided, if needed and is subject to availability.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                            <div class="accordion" id="accordion-tab-5">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-1" aria-expanded="false" aria-controls="accordion-tab-5-content-1">What happens if the bike is damaged when I am on a trip?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-5-content-1" aria-labelledby="accordion-tab-5-heading-1" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>For any form of damage or harm that has come to the bike while on your trip, the Dealer terms and conditions will apply.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-2" aria-expanded="false" aria-controls="accordion-tab-5-content-2">What should I do if there is a mechanical failure in the bike during the trip?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-2" aria-labelledby="accordion-tab-5-heading-2" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>We at SAWARI make sure that the bike we give to our Riders is of the best quality. However, some circumstances are beyond our control and there may arise some trouble with the bike you have rented while on your trip. In such a case, it is best to call the Dealer and he will assist you at once by either fixing the problem or providing you with a replacement bike.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-3" aria-expanded="false" aria-controls="accordion-tab-5-content-3">What should I do in case of puncture?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-3" aria-labelledby="accordion-tab-5-heading-3" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>In case of a tyre puncture, find the nearest bike mechanic and get the puncture fixed. As puncture of tyres are unpredictable and depend upon various factors like terrain, style of riding, etc. it does not qualify as a responsibility of the Dealer.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-4" aria-expanded="false" aria-controls="accordion-tab-5-content-4">What if I return the bike late because the bike broke down? Will I be fined?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-4" aria-labelledby="accordion-tab-5-heading-4" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>Call us and let us know what happened. If the reason is deemed genuine and we verify it from our GPS feedback, you will not be charged any penalties.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                            <div class="accordion" id="accordion-tab-6">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-6-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">I am unable to sign-up. What should I do?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                                        <div class="card-body">
                                            <p>It is super-easy to sign-up with SAWARI. If you are unable to do so, you can contact us and we will fix the issue and assist you immediately.

                                                You can reach us here: +91-8088-400-500</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-6-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-2" aria-expanded="false" aria-controls="accordion-tab-6-content-2">How do I make a booking without making an account?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2" data-parent="#accordion-tab-6">
                                        <div class="card-body">
                                            <p>Currently it isn’t possible to book a bike on SAWARI without registering yourself and creating an account with Wheelstreet. However, creating an account on Wheelstreet is super-easy and we advise you to do so!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-6-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-3" aria-expanded="false" aria-controls="accordion-tab-6-content-3">How do I reset my password?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3" data-parent="#accordion-tab-6">
                                        <div class="card-body">
                                            <p>Resetting your password on SAWARI is super-easy. Just follow the steps given below to do so! <br>

                                                Head to the login page, if you are already logged in then you should log-out first. <br>
                                                Click on forget password and then an link will be sent to your mail. <br>
                                                Enter the OTP and type in your new password. And that’s it! You have successfully changed your password.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
      require('footer.php');
     ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
