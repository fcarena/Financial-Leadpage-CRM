<?php
require_once("includes/header.php");
?>
<!-- CONTENT -->
<div class="jumbotron gradient">
    <div class="container">
        <h1>Need Emergency Cash Fast?</h1>
        <h2>We've got you covered. Apply for up to $1,000 today.</h2>
        <p>Tell us a bit about your situation and we can begin processing your loan:</p>

        <form id="registration" name="registration" method="post" action="step2.php"  novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
            <div class="row">
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-sm-6 form-group dropdown-single_lander has-feedback">
                            <select class="form-control" name="amount" id="amount" tabindex="1" data-bv-field="amount">
                                <option value="" selected="selected">How much cash do you need?</option>
                                <option value="1000">$1000</option>
                                <option value="900">$900</option>
                                <option value="800">$800</option>
                                <option value="700">$700</option>
                                <option value="600">$600</option>
                                <option value="500">$500</option>
                                <option value="400">$400</option>
                                <option value="300">$300</option>
                                <option value="200">$200</option>
                                <option value="100">$100</option>
                            </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="amount" style="display: none;"></i>
                        </div>
                        <div class="col-sm-6 form-group dropdown-single_lander has-feedback">
                            <select name="income1" id="income1" tabindex="2" class="form-control" data-bv-field="income1">
                                <option value="" selected="selected">Monthly Income</option>
                                <option value="$500-750">$500-750</option>
                                <option value="$751-1,000">$751-1,000 </option>
                                <option value="$1,001-1,250">$1,001-1,250</option>
                                <option value="$1,251-1,500">$1,251-1,500 </option>
                                <option value="$1,501-1,750">$1,501-1,750 </option>
                                <option value="$1,751-2,000">$1,751-2,000 </option>
                                <option value="$2,001-2,500">$2,001-2,500  </option>
                                <option value="$2,501-3,000">$2,501-3,000  </option>
                                <option value="$3,001-3,500">$3,001-3,500 </option>

                                <option value="$3,501-4,000">$3,501-4,000 </option>
                                <option value="$4,001-4,500">$4,001-4,500 </option>
                                <option value="$4,501-5,000">$4,501-5,000</option>
                                <option value="$5,000+">$5,000+</option>
                                <option value="NA">NA</option>
                            </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="income1" style="display: none;"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group dropdown-single_lander has-feedback">
                            <select class="form-control" name="creditscore" id="creditscore" tabindex="3" data-bv-field="creditscore">
                                <option value="" selected="selected">What is your credit type?</option>
                                <option value="Excellent">Excellent (720+)</option>
                                <option value="Good">Good (660-720)</option>
                                <option value="Fair">Fair (600-660)</option>
                                <option value="Poor">Poor (&lt;600)</option>
                            </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="creditscore" style="display: none;"></i>

                        </div>
                        <div class="col-sm-6 form-group dropdown-single_lander has-feedback">
                            <select class="form-control" name="state" id="state" tabindex="4" data-bv-field="state">
                                <option value="" selected="selected">State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="state" style="display: none;"></i>
                        </div>
                    </div>
                    <p class="error_msg text-center">&nbsp;</p>
                    <input type="hidden" name="lead_lander" value="1">
                </div>
                <div class="col-md-2">
                    <button tabindex="5" type="submit" id="get_started" class="btn btn-primary btn-lg btn-block" role="button">Get Started <i class="fa hidden-md fa-angle-right"></i><i class="fa hidden-md fa-angle-right"></i><i class="fa hidden-md fa-angle-right"></i></button>
                </div>
                <div class="col-md-4 hero hidden-xs hidden-sm"><img class="pull-right" alt="Easy Loan Day Form" src="./index_files/jumbotron_bg.png"></div>
            </div>
        </form>

    </div>
</div><!-- 3 Quick Steps -->
<div class="container" id="home_steps">
    <h1 class="text-center">
        Solve Your Financial Emergency in 3 Quick Steps.
    </h1>
    <div class="row">
        <div class="col-sm-4">
            <div class="steps_bucket">
                <center>
                    <div class="numberCircle">
                        1
                    </div>
                </center>
                <h2>
                    Apply Online
                </h2>
                <p>
                    Our quick and secure 2-step application is designed to help you get the cash you need faster than ever. Simply fill out our loan form and we'll do the rest.
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="steps_bucket">
                <center>
                    <div class="numberCircle">
                        2
                    </div>
                </center>
                <h2>
                    Quick Approval
                </h2>
                <p>
                    No need to wait hours or even days for an answer - Once a match is found, the details of your approval are provided in real-time.
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="steps_bucket">
                <center>
                    <div class="numberCircle">
                        3
                    </div>
                </center>
                <h2>
                    Receive Funds
                </h2>
                <p>
                    Your cash is direct deposited into your bank account - apply now and say goodbye to cash shortage!
                </p>
            </div>
        </div>
    </div>

</div><!-- How It Works -->
<div class="container" id="home_works">
    <div class="row">
        <div class="col-md-6">
            <h2>
                No Hassle Cash Loans to Suit Your Needs.
            </h2>
            <i class="fa fa-check pull-left"></i>
            <p class="overflow">
                <strong>Easy Loan Day provides the safest and quickest cash loan approvals on the Internet - period!</strong>
            </p>
            <p class="border-top">
                The process is simple as completing our fully secure application and then letting us do the work.
            </p>
            <p>
                Regardless of your credit situation, Easy Loan Day utilizes its nationwide network of lenders to match you with a loan that addresses your financial need and suits your personal circumstances.
            </p>

        </div>
        <div class="col-md-6">
            <h2>
                Advance Your Financial Freedom Today.
            </h2>
            <i class="fa fa-clock-o pull-left"></i>
            <p class="overflow">
                <strong>Applications typically take less than 5 minutes to complete and match with a lender for approval.</strong>
            </p>
            <p class="border-top">
                Once you've agreed to your lender's loan agreement terms, funds are directly deposited in your account with one business day.
            </p>
            <p>
                With an unmatched approval rate, top-class online security and a network of over 100 lenders, Easy Loan Day is America's #1 Source to access the cash you need.
            </p>
        </div>
    </div>
</div><!-- Why Us -->
<div class="container" id="home_whyus">
    <div class="row">
        <div class="col-sm-8">
            <h1>
                We're here for you. Anytime, Anywhere.
            </h1>
            <p>
                NextPaydayAdvance.com features mobile optimization technology that ensures your experience on our site is the same no matter what device you are using.
            </p>
            <p>
                Better yet, our lenders are open for business <strong>24 hours a day, 7 days a week</strong>.
            </p>
            <p>
                Are you experiencing a sudden financial emergency?<br>
                <strong>No need to worry - apply for up to $1,000 anytime, anywhere</strong>.
            </p>
        </div>
        <div class="col-sm-4">
            <img alt="Easy Loan Day Responsive" src="./index_files/devices.png" class="img-responsive center-block">
        </div>
    </div>
</div>


<!-- Testimonials -->
<div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <!-- testimonial 1 -->
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <h2 class="visible-xs">
                            Success Stories
                        </h2>
                        <center>
                            <img alt="Easy Loan Day Testimonial 1" src="./index_files/testimonial_1.png" class="img-responsive">
                        </center>
                        <p>
                            <strong>Meredith</strong><br>
                            Boca Raton, FL
                        </p>
                    </div>
                    <div class="col-sm-9 quote">
                        <h2 class="visible-lg visible-md visible-sm">
                            Success Stories
                        </h2>
                        <p>
                            My budget was already in a tight spot when a bad storm badly damaged my roof. Luckily I was approved for a loan using Easy Loan Day our home was repaired before the next big storm. I am grateful for the timely and convenient help I received.
                        </p><a class="next-slide pull-right" href="https://easyloanday.com/#carousel-testimonials" role="button" data-slide="next">Read What Others Are Saying <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial 2 -->
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <h2 class="visible-xs">
                            Success Stories
                        </h2>
                        <center>
                            <img alt="Easy Loan Day Testimonial 2" src="./index_files/testimonial_2.png" class="img-responsive">
                        </center>
                        <p>
                            <strong>James</strong><br>
                            Chicago, IL
                        </p>
                    </div>
                    <div class="col-sm-9 quote">
                        <h2 class="visible-lg visible-md visible-sm">
                            Success Stories
                        </h2>
                        <p>
                            My brother's wife gave birth to their new child and I needed to buy a gift, but my credit card was maxed out from a large auto repair a week ago. I was referred to Easy Loan Day and the process was a breeze. It took me less than 10 mins to apply and I received the funds overnight. I would definitely recommend this service to anyone in a similar situation.
                        </p><a class="next-slide pull-right" href="https://easyloanday.com/#carousel-testimonials" role="button" data-slide="next">Read What Others Are Saying <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial 3 -->
        <div class="item active">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <h2 class="visible-xs">
                            Success Stories
                        </h2>
                        <center>
                            <img alt="Easy Loan Day Testimonial 3" src="./index_files/testimonial_3.png" class="img-responsive">
                        </center>
                        <p>
                            <strong>Shelia</strong><br>
                            Modesto, CA
                        </p>
                    </div>
                    <div class="col-sm-9 quote">
                        <h2 class="visible-lg visible-md visible-sm">
                            Success Stories
                        </h2>
                        <p>
                            No one is immune to unexpected cash shortages - I've used Easy Loan Day several times in the past and have never had a bad experience. If you are falling short on your budget and you need cash in a hurry, Easy Loan Day is the answer.
                        </p><a class="next-slide pull-right" href="https://easyloanday.com/#carousel-testimonials" role="button" data-slide="next">Read What Others Are Saying <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial 4 -->
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <h2 class="visible-xs">
                            Success Stories
                        </h2>
                        <center>
                            <img alt="Easy Loan Day Testimonial 4" src="./index_files/testimonial_4.png" class="img-responsive">
                        </center>
                        <p>
                            <strong>Robert</strong><br>
                            Austin, TX
                        </p>
                    </div>
                    <div class="col-sm-9 quote">
                        <h2 class="visible-lg visible-md visible-sm">
                            Success Stories
                        </h2>
                        <p>
                            Last Christmas I faced the tough task of buying gifts for all of my nieces and nephews while still managing to pay my regular bills on time. Fortunately with the help of Easy Loan Day, I came out looking like the best Uncle in town! NPA is great for a quick injection of cash flow when you need it most.
                        </p><a class="next-slide pull-right" href="https://easyloanday.com/#carousel-testimonials" role="button" data-slide="next">Read What Others Are Saying <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial 5 -->
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <h2 class="visible-xs">
                            Success Stories
                        </h2>
                        <center>
                            <img alt="Easy Loan Day Testimonial 5" src="./index_files/testimonial_5.png" class="img-responsive">
                        </center>
                        <p>
                            <strong>Rebecca</strong><br>
                            Boulder, CO
                        </p>
                    </div>
                    <div class="col-sm-9 quote">
                        <h2 class="visible-lg visible-md visible-sm">
                            Success Stories
                        </h2>
                        <p>
                            I'm grateful for a site like Easy Loan Day - I'm always too busy to drive to a bank or cash store, so whenever I'm short on cash I simply submit my application through my phone. I couldn't ask for a more convenient and hassle-free process!
                        </p><a class="next-slide pull-right" href="https://easyloanday.com/#carousel-testimonials" role="button" data-slide="next">Read What Others Are Saying <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div><!-- load Footer -->
<!-- END CONTENT -->

<script>
    function Unloadpop(){
        StopWindowClose=1;
    }
</script>
<?php
require_once("includes/footer.php");
?>