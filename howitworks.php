<?php
require_once("includes/header.php");
?>
<!-- CONTENT -->
<div class="container secondary">


    <div class="row">
        <div class="col-md-8">
            <h1>Borrowing up to $1,000 has Never Been Easier</h1>
            <h2>Get matched  $1,000 in 3 Quick &amp; Easy Steps</h2>
            <h3>1 · Apply Online</h3>
            <p>Cash shortage emergencies usually occur when we least expect them. Easy Loan Day provides around-the-clock access to short term cash advances so ur customers can fulfill their financial obligations. The first step is to complete our easy and secure application, which typically takes less than 5 minutes to complete and 2 minutes to process. (There is no charge to apply). There is no need to wait in a store line or to fax any documents - the process is completely online.</p>
            <br>
            <h3>2 · Get Matched With a Lender</h3>
            <p>Once your application is submitted Easy Loan Day matches your financial needs with its lender network in search for the best possible loan for your personal situation. Customers with concerns about their credit history do not have to worry about shopping around for an approval - Easy Loan Day provides access to over one hundred online lenders all in one click. Many of our lenders specialize in issuing loans to customers with poor credit.</p>
            <br>
            <h3>3 · Receive Your Funds</h3>
            <p>Once your application is approved and a match is found, you are directed to your lender's electronic signature page where you can review their terms and rates for your loan. When you are ready to sign for your loan, simply complete the electronic signature page and your funds will be sent directly to your personal bank account within 24 hours. <strong>It's that easy</strong>.</p>
            <br>
            <p class="border-top">Easy Loan Day provides the convenience of applying for a  cash advance from the privacy of your own home or on the go. There is no longer a need to wait in a physical line to solve your financial troubles - whether you are running short this month or just in need of some extra spending money before next payday, Easy Loan Day is the most trusted source for borrowing cash when you need it most.</p>

            <p>We take your privacy and security concerns very seriously. Utilizing industry-standard data encryption technology, we ensure that your information is protected at all times, during and after your loan application.</p>

            <p>To learn even more about the process, visit our <a href="https://easyloanday.com/faq"><strong>Frequently Asked Questions</strong></a> page.</p>

            <p>Ready to apply? <strong>Start your application now</strong> and get matched with up to $1,000 today!</p>


        </div>






        <!-- load the right rail -->
        <div class="col-md-4">
            <div class="sidebar">
                <h2>Start Your Application Here</h2>

                <form id="registration" name="registration" method="post" action="step2.php" onsubmit="Unloadpop();" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>



                    <div class="form-group dropdown-single_lander has-feedback">
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
                    <div class="form-group dropdown-single_lander has-feedback">
                        <select name="income" id="income" tabindex="2" class="form-control" data-bv-field="income">
                            <option value="" selected="selected">Monthly Income</option>
                            <option value="5000">Above $ 5000</option>
                            <option value="4500">$ 4000 - $ 5000</option>
                            <option value="3500">$ 3000 - $ 4000</option>
                            <option value="2500">$ 2000 - $ 3000</option>
                            <option value="1500">$ 1000 - $ 2000</option>
                            <option value="1000">$ Under $ 1000</option>
                        </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="income" style="display: none;"></i>
                    </div>


                    <div class="form-group dropdown-single_lander has-feedback">
                        <select class="form-control" name="creditscore" id="creditscore" tabindex="3" data-bv-field="creditscore">
                            <option value="" selected="selected">What is your credit type?</option>
                            <option value="Excellent">Excellent (720+)</option>
                            <option value="Good">Good (660-720)</option>
                            <option value="Fair">Fair (600-660)</option>
                            <option value="Poor">Poor (&lt;600)</option>
                        </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="creditscore" style="display: none;"></i>

                    </div>
                    <div class="form-group dropdown-single_lander has-feedback">
                        <select class="form-control" name="state" id="state" tabindex="4" data-bv-field="state">
                            <option value="" selected="selected">State</option>
                            <option value="-Select-">-Select-</option>
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

                    <p class="error_msg"></p>


                    <button type="submit" class="btn btn-primary btn-lg btn-block" role="button">Get Started <i class="fa hidden-md fa-angle-right"></i><i class="fa hidden-md fa-angle-right"></i><i class="fa hidden-md fa-angle-right"></i></button>


                    <input type="hidden" name="lead_lander" value="1">
                </form>


                <script src="./index_files/validation_short.js"></script>
                <script src="./index_files/bootstrapValidator_short.js"></script>
            </div>		</div>



    </div>
</div>

<!-- END CONTENT -->

<script>
    function Unloadpop(){
        StopWindowClose=1;
    }
</script>

<?php
require_once("includes/footer.php");
?>