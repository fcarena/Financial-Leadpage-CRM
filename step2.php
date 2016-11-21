<?php
session_start();
require_once("includes/header.php");

if(empty($_POST['amount']) && empty($_POST['income1']) && empty($_POST['creditscore']) && empty($_POST['state'])){
    ?>
    <a href="index.php">Please Complete All Fields And Try Again</a>
  <?php

}else{

    if(!empty($_SESSION['amount'])){

    }else{
        $_SESSION['amount'] = $_POST['amount'];

    }

?>

<!-- CONTENT -->
<div id="apply">
<form id="confirm" method="post" action="process.php" novalidate="novalidate" class="bv-form" enctype="application/x-www-form-urlencoded"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron gradient">
    <div class="container">
        <h1>
            Congratulations!<br>
            You are 1 Step away from Financial Freedom.
        </h1>
        <h2>
            Complete the secure form below and receive up to $1,000 overnight!
        </h2>
        <h2>You've Requested <?php echo '$'.$_POST['amount'] ?></h2>

        <!-- Start the Form -->

    </div>
</div>
<div class="container">
    <div class="row-fluid security">
        <i class="fa fa-lock fa-4x orange pull-left"></i>
        <h2>
            We take security seriously.
        </h2>
        <p class="overflow">
            Easy Loan Day uses 256-bit SSL encryption to ensure your information is kept safe.
        </p>
    </div>
</div>

<!-- 1 -->
<div class="row-fluid blue_row">
<div class="container">
<div class="row-fluid">
    <h1>
        Personal Information
    </h1>
</div>
    <div class="row">
        <div class="col-md-4 form-group has-feedback">
            <label for="first_name">First Name</label>
            <input name="first_name" data-custom-attr="2" type="text" class="form-control" id="first_name" value="" data-bv-field="first_name"><i class="form-control-feedback" data-bv-icon-for="first_name" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your First Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">First Name must be more than 2 characters long</small>

        </div>
        <div class="col-md-4 form-group has-feedback">
            <label for="last_name">Last Name</label>
            <input name="last_name" data-custom-attr="3" type="text" class="form-control" id="last_name" value="" data-bv-field="last_name"><i class="form-control-feedback" data-bv-icon-for="last_name" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Last Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">Last Name must be more than 2 characters long</small>
        </div>




</div>

<div class="row">


    <div class="col-xs-3 form-group  has-feedback has-success dob_month_container selectpicker">
        <label for="dob_month">Date of Birth</label>

        <select name="dob_month" id="dob_month"  data-custom-attr="1" class="form-control"  data-bv-field="dob_month" >
            <option value="" selected="selected">Birth Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <i class="form-control-feedback bv-no-label" data-bv-icon-for="dob_month" style="display: none;"></i>

    </div>

    <div class="col-xs-3 form-group  has-feedback has-success dob_day_container">
        <label for="dob_day">Birth Day</label>
        <select name="dob_day" id="dob_day" data-custom-attr="4" class="form-control dropdown" data-bv-field="dob_day">
            <option value="">Day</option>
            <option value="01">1</option>
            <option value="02">2</option>
            <option value="03">3</option>
            <option value="04">4</option>
            <option value="05">5</option>
            <option value="06">6</option>
            <option value="07">7</option>
            <option value="08">8</option>
            <option value="09">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="dob_day" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="dob_day" data-bv-result="NOT_VALIDATED" style="display: none;">Day required</small>

    </div>


    <div class="col-xs-3 form-group  has-feedback has-success dob_year_container">
        <label for="dob_year">Birth Year</label>
        <select name="dob_year" id="dob_year" data-custom-attr="5" class="form-control" data-bv-field="dob_year">
            <option value="">Year</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
        </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="dob_year" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="dob_year" data-bv-result="NOT_VALIDATED" style="display: none;">Year required</small>

    </div>
</div>

    <div class="row">
        <div class="col-md-4 form-group has-feedback">
            <label for="email">Email</label>
            <input name="email" data-custom-attr="6" type="email" class="form-control" id="email" value="" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid Email Address</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The value is not a valid email address</small><small class="help-block" data-bv-validator="regexp" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The value is not a valid email address</small></div>
        <div class="col-md-4 form-group has-feedback">
            <label for="home_phone">Contact Phone</label>
            <input name="home_phone" type="tel" data-custom-attr="7" class="form-control bfh-phone" id="home_phone" data-format="ddd-ddd-dddd" value="" data-bv-field="home_phone"><i class="form-control-feedback" data-bv-icon-for="home_phone" style="display: none;"></i>
            <small class="help-block" data-bv-validator="stringLength" data-bv-for="home_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Your Phone Number is not long enough</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="home_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Phone Number</small><small class="help-block" data-bv-validator="phone" data-bv-for="home_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="home_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small>
        </div>
        <div class="col-md-4 form-group has-feedback">
            <label for="address">Home Address</label>
            <input name="address" type="text" data-custom-attr="8" class="form-control" id="address" value="" data-bv-field="address"><i class="form-control-feedback" data-bv-icon-for="address" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="address" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Address</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="address" data-bv-result="NOT_VALIDATED" style="display: none;">Address must be more than 5 characters long</small></div>
    </div>


    <div class="row">
        <div class="col-md-4 form-group has-feedback">
            <label for="city">City</label>
            <input name="city" data-custom-attr="9" type="text" class="form-control" id="city" value=" " data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="city" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your City</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="city" data-bv-result="NOT_VALIDATED" style="display: none;">City must be more than 2 characters long</small></div>
        <div class="col-md-4 form-group dropdown-single has-feedback">
            <label for="state">State</label>
            <select name="state" id="state" data-custom-attr="10" class="form-control" data-bv-field="state">
                <option value="<?php echo $_POST['state']; ?>" selected="selected"><?php echo $_POST['state']; ?></option>

            </select>
            <i class="form-control-feedback" data-bv-icon-for="state" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="state" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your State</small></div>
        <div class="col-md-4 form-group has-feedback">
            <label for="zip_code">Zip Code</label>
            <input maxlength="5" name="zip_code" type="tel" class="form-control" id="zip_code" value="" data-custom-attr="11" data-bv-field="zip_code"><i class="form-control-feedback" data-bv-icon-for="zip_code" style="display: none;"></i>
            <small class="help-block" data-bv-validator="zipCode" data-bv-for="zip_code" data-bv-result="NOT_VALIDATED" style="display: none;">The value is not valid postcode</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="zip_code" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Zip Code</small><small class="help-block" data-bv-validator="digits" data-bv-for="zip_code" data-bv-result="NOT_VALIDATED" style="display: none;">The value is not valid postcode</small><small class="help-block" data-bv-validator="regexp" data-bv-for="zip_code" data-bv-result="NOT_VALIDATED" style="display: none;">The US zipcode must contain 5 digits</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="zip_code" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
    </div>

<div class="row dropdown-single">
    <div class="col-md-4 form-group has-feedback">
        <label for="res_year">Time at Residence</label>
        <select class="form-control" name="res_year" id="res_year" data-custom-attr="13" data-bv-field="res_year">
            <option value="" selected="selected">--</option>
            <option value="9">9+ Years</option>
            <option value="8">8 Years</option>
            <option value="7">7 Years</option>
            <option value="6">6 Years</option>
            <option value="5">5 Years</option>
            <option value="4">4 Years</option>
            <option value="3">3 Years</option>
            <option value="2">2 Years</option>
            <option value="1">1 Year or Less</option>
        </select><i class="form-control-feedback" data-bv-icon-for="res_year" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="res_year" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small></div>


    <div class="col-md-4 form-group has-feedback">
        <label for="res_month">Months at Residence</label>
        <select class="form-control" name="res_month" id="res_month" data-custom-attr="13" data-bv-field="res_month">
            <option value="" selected="selected">--</option>
            <option value="9">9+ Months</option>
            <option value="8">8 Months</option>
            <option value="7">7 Months</option>
            <option value="6">6 Months</option>
            <option value="5">5 Months</option>
            <option value="4">4 Months</option>
            <option value="3">3 Months</option>
            <option value="2">2 Months</option>
            <option value="1">1 Monthsor Less</option>
        </select><i class="form-control-feedback" data-bv-icon-for="res_month" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="res_month" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small></div>


    <div class="col-md-4 form-group has-feedback">
        <label for="own_rent">Own or Rent</label>
        <select class="form-control" name="own_rent" id="own_rent" data-custom-attr="14" data-bv-field="own_rent">
            <option value="" selected="selected">--</option>
            <option value="Own">Own</option>
            <option value="Rent">Rent</option>
        </select><i class="form-control-feedback" data-bv-icon-for="own_rent" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="own_rent" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>


</div>


<div class="row">



    <div class="col-md-4 form-group has-feedback">
        <label for="military">Are you active in the Military?</label>
        <select class="form-control" name="military" id="military" data-custom-attr="14" data-bv-field="military">
            <option value="" selected="selected">--</option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select><i class="form-control-feedback" data-bv-icon-for="military" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="military" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>

    <div class="col-md-4 form-group dropdown-single  has-feedback">
        <label for="time_to_call">Best time to call?</label>
        <select class="form-control" name="time_to_call" id="time_to_call" data-custom-attr="14" data-bv-field="time_to_call">
            <option value="" selected="selected">--</option>
            <option value="Morning">Morning </option>
            <option value="Afternoon">Afternoon </option>
            <option value="Evening">Evening</option>
            <option value="Anytime">Anytime</option>
        </select><i class="form-control-feedback" data-bv-icon-for="time_to_call" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="time_to_call" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>

    <div class="col-md-4 form-group has-feedback">
        <label for="gender">Gender</label>
        <select class="form-control" name="gender" id="gender" data-custom-attr="14" data-bv-field="gender">
            <option value="" selected="selected">--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><i class="form-control-feedback" data-bv-icon-for="gender" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>
</div>


<div class="row">

    <div class="col-md-4 form-group has-feedback">
        <label for="age">Age</label>
        <input name="age" type="text" data-custom-attr="30" maxlength="2" class="form-control" id="age" data-bv-field="age"><i class="form-control-feedback" data-bv-icon-for="age" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="age" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

    </div>

    <div class="col-md-4 form-group has-feedback">
        <label for="citizen">USA Citizen</label>
        <select class="form-control" name="citizen" id="citizen" data-custom-attr="14" data-bv-field="citizen">
            <option value="" selected="selected">--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><i class="form-control-feedback" data-bv-icon-for="citizen" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="citizen" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>

    <div class="col-md-4 form-group has-feedback">
        <label for="dependent">Are you dependent?</label>
        <select class="form-control" name="dependent" id="dependent" data-custom-attr="14" data-bv-field="citizen">
            <option value="" selected="selected">--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><i class="form-control-feedback" data-bv-icon-for="dependent" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="dependent" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>


</div>

<div class="row">


    <div class="col-md-4 form-group has-feedback">
        <label for="married">Are you Married?</label>
        <select class="form-control" name="married" id="married" data-custom-attr="14" data-bv-field="married">
            <option value="" selected="selected">--</option>
            <option value="Single">Single </option>
            <option value="Married">Married</option>
            <option value="Separated">Separated</option>
            <option value="Divorced">Divorced</option>
        </select><i class="form-control-feedback" data-bv-icon-for="married" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="married" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
    </div>

    <div class="col-md-4 form-group has-feedback">
        <label for="mothers_maiden">Mothers Maiden Name</label>
        <input name="mothers_maiden" data-custom-attr="2" type="text" class="form-control" id="mothers_maiden" value="" data-bv-field="mothers_maiden"><i class="form-control-feedback" data-bv-icon-for="mothers_maiden" style="display: none;"></i>
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="mothers_maiden" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Mothers Maiden Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="mothers_maiden" data-bv-result="NOT_VALIDATED" style="display: none;">Mothers Maiden Name must be more than 2 characters long</small>

    </div>
</div>

<!----End of Personal--->
</div>

</div>


<!-- 2 -->
<div class="row-fluid orange_row">
    <div class="container">
        <div class="row-fluid">
            <h1><i class="fa fa-lock"></i> Identification</h1> <h3><span class="hidden-xs">|</span> Why do we need this? </h3>
            <p>
                Your Social Security and Driver’s License numbers are required for your protection. Your lender may use them to confirm your identity to approve your loan.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 form-group has-feedback">
                <label for="ssn">Social Security Number</label>
                <input name="ssn" type="tel" data-custom-attr="15" class="form-control bfh-phone" id="ssn" data-format="ddd - dd - dddd" data-bv-field="ssn"><i class="form-control-feedback" data-bv-icon-for="ssn" style="display: none;"></i>
                <small class="help-block" data-bv-validator="stringLength" data-bv-for="ssn" data-bv-result="NOT_VALIDATED" style="display: none;">Invalid SSN</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="ssn" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your SSN</small></div>
            <div class="col-md-4 form-group has-feedback">
                <label for="license">Driver's License Number</label>
                <input name="license" type="text" data-custom-attr="16" class="form-control" id="license" value="" data-bv-field="license"><i class="form-control-feedback" data-bv-icon-for="license" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="license" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small></div>
            <div class="col-md-4 form-group dropdown-single has-feedback">
                <label for="lic_state">Driver's License State</label>
                <select name="lic_state" id="lic_state" data-custom-attr="17" class="form-control" data-bv-field="lic_state">
                    <option value="">--</option>
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
                    <option value="NY">New York</option>
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
                </select><i class="form-control-feedback" data-bv-icon-for="lic_state" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="lic_state" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small></div>
        </div>
    </div>
</div>

<!--------End of Identification---->


<!-- 3 -->
<div class="row-fluid blue_row">
    <div class="container">
        <div class="row-fluid">
            <h1>Financial Information</h1>
        </div>
        <div class="row">
            <div class="col-md-3 form-group dropdown-single has-feedback">
                <label for="emp_status">Primary Source of Income</label>
                <select name="emp_status" id="emp_status" data-custom-attr="18" class="form-control" data-bv-field="emp_status">
                    <option value="" selected="selected">--</option>
                    <option value="Employment ">Employment </option>
                    <option value="Benefits">Benefits</option>
                    <option value="Military">Military</option>
                    <option value="Homemaker">Homemaker </option>
                    <option value="Unemployed">Unemployed</option>
                    <option value="Self Employed">Self Employed</option>


                </select><i class="form-control-feedback" data-bv-icon-for="emp_status" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_status" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

            </div>
            <div class="col-md-3 form-group dropdown-single has-feedback">
                <label for="income1">Monthly Income</label>


                <select name="income1" id="income1" data-custom-attr="19" class="form-control" data-bv-field="income1">
                    <?php
                    $income_array = array("$500-750"=>'$500-750',"$751-1,000"=>'$751-1,000',"$1,001-1,250"=>'$1,001-1,250',"$1,251-1,500"=>'$1,251-1,500',
                        "$1,501-1,750"=>'$1,501-1,750', "$1,751-2,000"=>'$1,751-2,000',"$2,001-2,500"=>'$2,001-2,500',"$2,501-3,000"=>'$2,501-3,000',
                        "$3,001-3,500"=>'$3,001-3,500',"$3,501-4,000"=>'$3,501-4,000',"$4,001-4,500"=>'$4,001-4,500',"$5,000+"=>'$5,000+',"$4,501-5,000"=>'$4,501-5,000',"N/A"=>'N/A');

                    foreach($income_array as $key=>$value){

                        if($value == $_POST['income1']){

                            ?>
                            <option value="<?php echo $_POST['income1'] ?>" selected="selected"><?php echo $_POST['income1'] ?></option>
                        <?php
                        }

                    }
                    ?>

                </select><i class="form-control-feedback" data-bv-icon-for="income1" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="income1" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
            </div>




            <div class="col-md-3 form-group dropdown-single has-feedback">
                <label for="creditscore">Credit Type</label>

                <select name="creditscore" id="creditscore" data-custom-attr="21" class="form-control" data-bv-field="creditscore">
                    <?php
                    $credit_array = array("Excellent"=>'Excellent (720+)',"Good"=>'Good (660-720)',"Fair"=>'Fair (600-660)',"Poor"=>'Poor (&lt;600)');

                    foreach($credit_array as $key=>$value){

                        if($key === $_POST['creditscore']){
                            ?>
                            <option value="<?php echo $_POST['creditscore'] ?>" selected="selected"><?php echo $_POST['creditscore'] ?></option>
                        <?php
                        }


                    }

                    ?>
                </select><i class="form-control-feedback" data-bv-icon-for="creditscore" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="creditscore" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Credit Type</small></div>
        </div>
    </div>
</div>


<!--------End of Financial------->


<!-- 4 -->
<div class="row-fluid orange_row">
    <div class="container">
        <div class="row-fluid">
            <h1>Employment Information</h1>
        </div>
        <div class="row">
            <div class="col-md-4 form-group has-feedback">
                <label for="emp">Employer Name</label>
                <input name="emp" type="text" data-custom-attr="22" class="form-control" id="emp" value="" data-bv-field="emp"><i class="form-control-feedback" data-bv-icon-for="emp" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Employer Name</small></div>
            <div class="col-md-4 form-group has-feedback">
                <label for="emp_title">Position/Title</label>
                <input name="emp_title" type="text" data-custom-attr="23" class="form-control" id="emp_title" value="" data-bv-field="emp_title"><i class="form-control-feedback" data-bv-icon-for="emp_title" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_title" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Postion/Title</small>

            </div>
            <div class="col-md-4 form-group has-feedback">
                <label for="emp_phone">Employer Phone</label>
                <input name="emp_phone" type="tel" data-custom-attr="24" class="form-control bfh-phone" id="emp_phone" data-format="ddd-ddd-dddd" value="" data-bv-field="emp_phone"><i class="form-control-feedback" data-bv-icon-for="emp_phone" style="display: none;"></i>
                <small class="help-block" data-bv-validator="stringLength" data-bv-for="emp_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Your Phone Number is not long enough</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Employers Phone Number</small><small class="help-block" data-bv-validator="phone" data-bv-for="emp_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="emp_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small></div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group dropdown-single has-feedback">
                <label for="emp_year">Time at job</label>
                <select name="emp_year" id="emp_year" data-custom-attr="25" class="form-control" data-bv-field="emp_year">
                    <option value="">--</option>
                    <option value="9">9+ Years</option>
                    <option value="8">8 Years</option>
                    <option value="7">7 Years</option>
                    <option value="6">6 Years</option>
                    <option value="5">5 Years</option>
                    <option value="4">4 Years</option>
                    <option value="3">3 Years</option>
                    <option value="2">2 Years</option>
                    <option value="1">1 Year or Less</option>
                </select><i class="form-control-feedback" data-bv-icon-for="emp_year" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_year" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

            </div>

            <div class="col-md-4 form-group has-feedback">
                <label for="emp_month">Months at Job</label>
                <input name="emp_month" type="text" data-custom-attr="30" maxlength="2" class="form-control" id="emp_month" data-bv-field="emp_month"><i class="form-control-feedback" data-bv-icon-for="emp_month" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_month" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

            </div>

            <div class="col-md-4 form-group  has-feedback">
                <label for="direct_deposit">How do you receive your pay?</label>
                <select name="direct_deposit" id="direct_deposit" data-custom-attr="26" class="form-control" data-bv-field="direct_deposit">
                    <option value="" selected="selected">--</option>
                    <option value="Direct Deposit ">Direct Deposit </option>
                    <option value="Paper Check">Paper Check</option>
                    <option value="Cash ">Cash </option>
                    <option value="NA">NA</option>
                </select>
                <i class="form-control-feedback" data-bv-icon-for="direct_deposit" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="direct_deposit" data-bv-result="NOT_VALIDATED" style="display: none;">Please make a selection</small>
            </div>


        </div>



        <div class="row">
            <div class="col-md-4 form-group has-feedback">
                <label for="supervisor_phone">Supervisor Phone</label>
                <input name="supervisor_phone" type="tel" data-custom-attr="7" class="form-control bfh-phone" id="supervisor_phone" data-format="ddd-ddd-dddd" value="" data-bv-field="supervisor_phone"><i class="form-control-feedback" data-bv-icon-for="supervisor_phone" style="display: none;"></i>
                <small class="help-block" data-bv-validator="stringLength" data-bv-for="supervisor_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Your Phone Number is not long enough</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="supervisor_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Supervisor Phone Number</small><small class="help-block" data-bv-validator="phone" data-bv-for="supervisor_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="supervisor_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small>
            </div>



            <div class="col-md-4 form-group has-feedback">
                <label for="shift_hours">Shift Hours</label>
                <select class="form-control" name="shift_hours" id="shift_hours" data-custom-attr="14" data-bv-field="time_to_call">
                    <option value="" selected="selected">--</option>
                    <option value="Morning ">Morning </option>
                    <option value="Afternoon">Afternoon</option>
                    <option value="Anytime">Anytime</option>
                    <option value="Evening">Evening</option>

                </select><i class="form-control-feedback" data-bv-icon-for="shift_hours" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="shift_hours" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
            </div>


            <div class="col-md-4 form-group has-feedback">
                <label for="pay_period">Pay Period</label>
                <select class="form-control" name="pay_period" id="pay_period" data-custom-attr="14" data-bv-field="pay_period">
                    <option value="" selected="selected">--</option>
                    <option value="Weekly ">Weekly </option>
                    <option value="Bi-Weekly">Bi-Weekly </option>
                    <option value="Monthly">Monthly </option>
                    <option value="NA">NA </option>

                </select><i class="form-control-feedback" data-bv-icon-for="pay_period" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="pay_period" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 form-group has-feedback next_pay_date_container">
                <label for="next_pay_date">Next Pay Date</label>
                <div id="datetimepicker1">

                    <input name="next_pay_date" type="date" data-custom-attr="7" class="form-control bfh-date" id="next_pay_date" data-format="ddd-ddd-dddd" value="" data-bv-field="next_pay_date">


                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="next_pay_date" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>



            <div class="col-md-4 form-group has-feedback second_pay_date_container">
                <label for="second_pay_date">Second Pay Date</label>
                <div id="datetimepicker2">

                    <input name="second_pay_date" type="date" data-custom-attr="7" class="form-control bfh-second_pay_date" id="second_pay_date" data-format="ddd-ddd-dddd" value="" data-bv-field="second_pay_date"><i class="form-control-feedback" data-bv-icon-for="second_pay_date" style="display: none;"></i>

                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

            <div class="col-md-4 form-group has-feedback emp_phone_ext_container">
                <label for="emp_phone_ext">Work Phone Ext</label>
                <input name="emp_phone_ext" type="text" data-custom-attr="23" class="form-control" id="emp_phone_ext" value="" data-bv-field="emp_phone_ext"><i class="form-control-feedback" data-bv-icon-for="emp_phone_ext" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_phone_ext" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Work Ext</small>

            </div>

        </div>

        <div class="row">
            <div class="col-md-4 form-group has-feedback">
                <label for="supervisor_name">Supervisor Name</label>
                <input name="supervisor_name" type="text" data-custom-attr="22" class="form-control" id="supervisor_name" value="" data-bv-field="supervisor_name"><i class="form-control-feedback" data-bv-icon-for="supervisor_name" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="supervisor_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Supervisor Name</small>
            </div>




            <div class="col-md-4 form-group has-feedback">
                <label for="supervisor_ext">Supervisor Ext</label>
                <input name="supervisor_ext" type="text" data-custom-attr="24" class="form-control" id="supervisor_ext" value="" data-bv-field="supervisor_ext"><i class="form-control-feedback" data-bv-icon-for="supervisor_ext" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="supervisor_ext" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Supervisor Ext</small>
            </div>


            <div class="col-md-4 form-group has-feedback">
                <label for="emp_address">Work Address</label>
                <input name="emp_address" type="text" data-custom-attr="22" class="form-control" id="emp_address" value="" data-bv-field="emp_address"><i class="form-control-feedback" data-bv-icon-for="emp_address" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="emp_address" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Employers Address</small>

            </div>
        </div>



    </div>
</div>


<!---------End of Employment----->




<!-- 5 -->
<div class="row-fluid blue_row">
    <div class="container">
        <div class="row-fluid">
            <h1><i class="fa fa-lock"></i> Bank Information</h1> <h3><span class="hidden-xs">|</span> Where should we send you cash?</h3> <i id="popover_check" rel="popover" data-content="" class="fa fa-question-circle blue" data-original-title="" title=""></i>
        </div>
        <div class="row">
            <div class="col-md-4 form-group has-feedback">
                <label for="bank_name">Bank Name</label>
                <!-------
                <a data-toggle="modal" data-target="#nobankModal"> <small class="nobank">Don't have a bank account?</small></a>
                -------->
                <input name="bank_name" type="text" data-custom-attr="28" class="form-control" id="bank_name" data-bv-field="bank_name"><i class="form-control-feedback" data-bv-icon-for="bank_name" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="bank_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Bank Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="bank_name" data-bv-result="NOT_VALIDATED" style="display: none;">Must be more than 2 characters long</small></div>
            <div class="col-md-4 form-group has-feedback">
                <label for="bank_routing">ABA Routing Number</label>
                <input name="bank_routing" type="tel" data-custom-attr="29" class="form-control bfh-phone" id="bank_routing" data-format="ddddddddd" data-bv-field="bank_routing"><i class="form-control-feedback" data-bv-icon-for="bank_routing" style="display: none;"></i>
                <small class="help-block" data-bv-validator="digits" data-bv-for="bank_routing" data-bv-result="NOT_VALIDATED" style="display: none;">ABA Routing Number can contain digits only</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="bank_routing" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your ABA Number</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="bank_routing" data-bv-result="NOT_VALIDATED" style="display: none;">ABA Number must be 9 characters</small></div>
            <div class="col-md-4 form-group has-feedback">
                <label for="bank_accnt">Account Number</label>
                <input name="bank_accnt" type="tel" data-custom-attr="30" class="form-control" id="bank_accnt" data-bv-field="bank_accnt"><i class="form-control-feedback" data-bv-icon-for="bank_accnt" style="display: none;"></i>
                <small class="help-block" data-bv-validator="digits" data-bv-for="bank_accnt" data-bv-result="NOT_VALIDATED" style="display: none;">Bank Account Number can contain digits only</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="bank_accnt" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Account Number</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="bank_accnt" data-bv-result="NOT_VALIDATED" style="display: none;">Must be more than 8 characters long</small>
            </div>

 </div>




    <div class="row">
        <div class="col-md-4 form-group dropdown-single has-feedback">
            <label for="bank_year">Years at Bank</label>
            <select name="bank_year" id="bank_year" data-custom-attr="25" class="form-control" data-bv-field="bank_year">
                <option value="">--</option>
                <option value="9">9+ Years</option>
                <option value="8">8 Years</option>
                <option value="7">7 Years</option>
                <option value="6">6 Years</option>
                <option value="5">5 Years</option>
                <option value="4">4 Years</option>
                <option value="3">3 Years</option>
                <option value="2">2 Years</option>
                <option value="1">1 Year or Less</option>
            </select><i class="form-control-feedback" data-bv-icon-for="bank_year" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="bank_year" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

        </div>

        <div class="col-md-4 form-group dropdown-single has-feedback">
            <label for="bank_month">Months at Bank</label>
            <select name="bank_month" id="bank_month" data-custom-attr="25" class="form-control" data-bv-field="bank_month">
                <option value="">--</option>
                <option value="9">9+ Months</option>
                <option value="8">8 Months</option>
                <option value="7">7 Months</option>
                <option value="6">6 Months</option>
                <option value="5">5 Months</option>
                <option value="4">4 Months</option>
                <option value="3">3 Months</option>
                <option value="2">2 Months</option>
                <option value="1">1 Months or Less</option>
            </select><i class="form-control-feedback" data-bv-icon-for="bank_month" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="bank_month" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>

        </div>


        <div class="col-md-4 form-group dropdown-single has-feedback">
            <label for="emp_pay">Bank Account Type</label>
            <select name="account_type" id="account_type" data-custom-attr="20" class="form-control" data-bv-field="account_type">
                <option value="" selected="selected">--</option>
                <option value="Checking">Checking</option>
                <option value="Savings ">Savings </option>
                <option value="None">None</option>
            </select><i class="form-control-feedback" data-bv-icon-for="account_type" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="account_type" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
        </div>

    </div>

     <div class="row">
         <div class="col-md-4 form-group has-feedback">
             <label for="bank_phone">Bank  Phone</label>
             <input name="bank_phone" type="tel" data-custom-attr="7" class="form-control bfh-phone" id="bank_phone" data-format="ddd-ddd-dddd" value="" data-bv-field="bank_phone"><i class="form-control-feedback" data-bv-icon-for="bank_phone" style="display: none;"></i>
             <small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_phone2" data-bv-result="NOT_VALIDATED" style="display: none;">Your Phone Number is not long enough</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="bank_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter your Phone Number</small><small class="help-block" data-bv-validator="phone" data-bv-for="bank_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="bank_phone" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small>
         </div>
     </div>


</div>

    <!-- 5 -->
    <div class="row-fluid orange_row">
        <div class="container">
            <div class="row-fluid">
                <h1>References #1 Information</h1>
            </div>
            <div class="row">
                <div class="col-md-4 form-group has-feedback">
                    <label for="ref_first_name1">First Name </label>

                    <input name="ref_first_name1" type="text" data-custom-attr="28" class="form-control" id="ref_first_name1" data-bv-field="ref_first_name1"><i class="form-control-feedback" data-bv-icon-for="ref_first_name1" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ref_first_name1" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Reference First Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_first_name1" data-bv-result="NOT_VALIDATED" style="display: none;">Must be more than 2 characters long</small>
                </div>

                <div class="col-md-4 form-group has-feedback">
                    <label for="ref_last_name1">Last Name</label>
                    <input name="ref_last_name1" type="text" data-custom-attr="28" class="form-control" id="ref_last_name1" data-bv-field="ref_last_name1"><i class="form-control-feedback" data-bv-icon-for="ref_last_name1" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ref_last_name1" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Reference Last Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_last_name1" data-bv-result="NOT_VALIDATED" style="display: none;">Must be more than 2 characters long</small>

                </div>

                <div class="col-md-4 form-group has-feedback">
                    <label for="ref_phone1">Refernce Phone</label>
                    <input name="ref_phone1" type="tel" data-custom-attr="7" class="form-control bfh-phone" id="ref_phone1" data-format="ddd-ddd-dddd" value="" data-bv-field="ref_phone1"><i class="form-control-feedback" data-bv-icon-for="ref_phone1" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_phone1" data-bv-result="NOT_VALIDATED" style="display: none;">Your Phone Number is not long enough</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="home_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Reference 1 Phone Number</small><small class="help-block" data-bv-validator="phone" data-bv-for="ref_phone1" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="ref_phone1" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4 form-group dropdown-single has-feedback">
                    <label for="ref_relationship1">Reference #1Relationship</label>
                    <select name="ref_relationship1" id="ref_relationship1" data-custom-attr="20" class="form-control" data-bv-field="ref_relationship1">
                        <option value="" selected="selected">--</option>
                        <option value="Parent">Parent </option>
                        <option value="Sibling">Sibling</option>
                        <option value="Friend ">Friend </option>
                        <option value="Co-Worker ">Co-Worker </option>
                        <option value="Employer">Employer</option>
                        <option value="Relative">Relativer</option>
                    </select><i class="form-control-feedback" data-bv-icon-for="account_type" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="account_type" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
                </div>
            </div>


            <div class="row-fluid">
                <h1>References #2 Information</h1>
            </div>
            <div class="row">
                <div class="col-md-4 form-group has-feedback">
                    <label for="ref_first_name2">First Name </label>

                    <input name="ref_first_name2" type="text" data-custom-attr="28" class="form-control" id="ref_first_name2" data-bv-field="ref_first_name2"><i class="form-control-feedback" data-bv-icon-for="ref_first_name2" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ref_first_name2" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Reference First Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_first_name2" data-bv-result="NOT_VALIDATED" style="display: none;">Must be more than 2 characters long</small>
                </div>

                <div class="col-md-4 form-group has-feedback">
                    <label for="ref_last_name2">Last Name</label>
                    <input name="ref_last_name2" type="text" data-custom-attr="28" class="form-control" id="ref_last_name2" data-bv-field="ref_last_name2"><i class="form-control-feedback" data-bv-icon-for="ref_last_name2" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ref_last_name2" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Reference Last Name</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_last_name2" data-bv-result="NOT_VALIDATED" style="display: none;">Must be more than 2 characters long</small>

                </div>

                <div class="col-md-4 form-group has-feedback">
                    <label for="ref_phone2">Reference Phone</label>
                    <input name="ref_phone2" type="tel" data-custom-attr="7" class="form-control bfh-phone" id="ref_phone2" data-format="ddd-ddd-dddd" value="" data-bv-field="ref_phone2"><i class="form-control-feedback" data-bv-icon-for="ref_phone2" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="stringLength" data-bv-for="ref_phone2" data-bv-result="NOT_VALIDATED" style="display: none;">Your Phone Number is not long enough</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="ref_phone2" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter Reference 2 Number</small><small class="help-block" data-bv-validator="phone" data-bv-for="ref_phone2" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="ref_phone2" data-bv-result="NOT_VALIDATED" style="display: none;">This is not valid US phone number</small>
                </div>

            </div>




            <div class="row">
                <div class="col-md-4 form-group dropdown-single has-feedback">
                    <label for="ref_relationship2">Reference #2 Relationship</label>
                    <select name="ref_relationship2" id="ref_relationship2" data-custom-attr="20" class="form-control" data-bv-field="ref_relationship2">
                        <option value="" selected="selected">--</option>
                        <option value="Parent">Parent </option>
                        <option value="Sibling">Sibling</option>
                        <option value="Friend ">Friend </option>
                        <option value="Co-Worker ">Co-Worker </option>
                        <option value="Employer">Employer</option>
                        <option value="Relative">Relativer</option>
                    </select><i class="form-control-feedback" data-bv-icon-for="ref_relationship2" style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ref_relationship2" data-bv-result="NOT_VALIDATED" style="display: none;">Please do not leave empty</small>
                </div>
            </div>

        </div>



  </div>


<div class="jumbotron gradient">
    <div class="container">

        <div class="row-fluid">
            <p class="subtle text-center">By submitting your application you certify that you are at least 18 years old and agree to this site’s Terms of Use and Privacy Policy and consent to receiving email from us.</p>
        </div>

        <div class="row-fluid">
            <div class="col-md-12">
                <button id="submitbutton" data-custom-attr="31" type="submit" class="btn btn-primary btn-lg btn-block mainsubmit" role="button"><span>Submit For Cash</span> <i class="fa fa-arrow-right hidden-xs"></i></button>
            </div>
        </div></div>

    <div class="row-fluid">
        <p class="text-center warning">Please be patient. It may take up to 90 seconds to process your application and match you with a lender. <br> <strong>DO NOT CLOSE YOUR BROWSER WINDOW.</strong></p>
    </div>

    <div class="row-fluid">
        <p class="subtle text-center"><i class="fa fa-lock"></i> Your information is 100% secured by 256-bit SSL encryption and only viewed by banks.</p>
    </div>

</div>
</form><!-- End the Form -->

<!-- Modal -->
<div class="modal fade" id="nobankModal" data-custom-attr="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Don't have a bank account?</h4>
            </div>
            <div class="modal-body">
                <p>We're sorry! Our lenders require an active bank account to send your cash to. In the meantime, please enjoy the services below to help address your cash needs.</p>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="https://easyloanday.com" target="_blank" class="nobank"><img src="./index_files/horizon.gif" alt=""></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="https://easyloanday.com" target="_blank" class="nobank"><img src="./index_files/unique_250x250.gif" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>







<!-- END CONTENT -->

<!--Web User Demography//-->
<script type="text/javascript">

</script>
<script type="text/javascript" src="https://easyloanday.com/index_files/jstz-1.0.4.min.js"></script>
<script type="text/javascript">

</script>

<script>
    function Unloadpop(){
        StopWindowClose=1;
    }

    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });

</script>
<?php


}

require_once("includes/footer.php");
?>

