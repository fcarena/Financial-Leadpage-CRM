<?php
session_start();
require_once("includes/header.php");
require_once("./functions/functions.php");

?>
<!-- CONTENT -->
<div id="apply">


    <?php
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) &&  !empty($_POST['address'])
    && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip_code'])  && !empty($_POST['email'])
    && !empty($_POST['home_phone'])

    && !empty($_POST['time_to_call']) && !empty($_POST['emp_title']) && !empty($_POST['emp_phone'])
    && !empty($_POST['emp_year'])  && !empty($_POST['emp_month']) && !empty($_POST['pay_period']) && !empty($_POST['direct_deposit'])
    && !empty($_POST['emp']) && !empty($_POST['account_type'])


    && !empty($_POST['ssn']) && !empty($_POST['dob_month']) && !empty($_POST['dob_day']) && !empty($_POST['dob_year'])
    && !empty($_POST['license'])  && !empty($_POST['lic_state']) && !empty($_POST['gender'])
    && !empty($_POST['own_rent'])
    && !empty($_POST['res_year']) && !empty($_POST['res_month'])  && !empty($_POST['age']) && !empty($_POST['citizen'])


    && !empty($_POST['military']) && !empty($_POST['dependent'])  && !empty($_POST['married']) && !empty($_POST['emp_status']) && !empty($_POST['bank_name'])
    && !empty($_POST['bank_routing'])  && !empty($_POST['bank_accnt']) && !empty($_POST['bank_year']) && !empty($_POST['bank_month'])
    && !empty($_POST['income1']) && !empty($_POST['shift_hours'])

    && !empty($_POST['emp_phone_ext'])  && !empty($_POST['supervisor_name']) && !empty($_POST['supervisor_ext']) && !empty($_POST['emp_address'])
    && !empty($_POST['mothers_maiden']) && !empty($_POST['ref_first_name1'] )   && !empty($_POST['ref_last_name1'] )  && !empty($_POST['ref_phone1'] )
    && !empty($_POST['ref_relationship1'] )   && !empty($_POST['ref_first_name2'] )    && !empty($_POST['ref_last_name2'] )   && !empty($_POST['ref_phone2'] )
        && !empty($_POST['ref_relationship2'] )  && !empty($_POST['bank_phone'] )
    ){



    $type = 21;
    $src ='pdmsm';
    $landing_page = 'https://easyloanday.com/';
    $ip_address = getUserIP();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state= $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $email = $_POST['email'];
    $home_phone = $_POST['home_phone'];
    $work_phone = $_POST['work_phone'];

    $time_to_call = $_POST['time_to_call'];

    $amount = $_SESSION['amount'];
    $amount =  number_format((float)$amount,2);
    $emp_title= $_POST['emp_title'];
    $emp_year = $_POST['emp_year'];
    $emp_year = (int)$emp_year;
    $emp_month = $_POST['emp_month'];
    $emp_month = (int)$emp_month;

    $pay_period = $_POST['pay_period'];
    $direct_deposit = $_POST['direct_deposit'];
    $next_pay_date = $_POST['next_pay_date'];
    $second_pay_date = $_POST['second_pay_date'];
    $next_pay_date = explode('-',$next_pay_date);
    $next_pay_date = $next_pay_date[2] .'/' .$next_pay_date[1] .'/' .$next_pay_date[0];

    $second_pay_date = explode('-',$second_pay_date);
    $second_pay_date = $second_pay_date[2] .'/' .$second_pay_date[1] .'/'. $second_pay_date[0];
    $emp = $_POST['emp'];
    $account_type = $_POST['account_type'];
    $ssn = $_POST['ssn'];
    $dob_month = $_POST['dob_month'];
    $dob_day = $_POST['dob_day'];
    $dob_year = $_POST['dob_year'];
    $dob = $dob_month. '/' .$dob_day .'/' . $dob_year;
    $license = $_POST['license'];
    $lic_state = $_POST['lic_state'];
    $gender = $_POST['gender'];
    $own_rent = $_POST['own_rent'];
   // $rent_own = $_POST['rent_own'];
    $res_year = $_POST['res_year'];
    $res = (int)$res_year;
    $res_month =(int)$res_month;
    $res_month = $_POST['res_month'];
    $age = $_POST['age'];
    $age = (int)$age;
    $citizen = $_POST['citizen'];
    $military = $_POST['military'];
    $dependent = $_POST['dependent'];
    $married = $_POST['married'];
    $emp_status = $_POST['emp_status'];
    $bank_name = $_POST['bank_name'];
    $bank_routing = $_POST['bank_routing'];
    $bank_accnt = $_POST['bank_accnt'];
    $bank_year = $_POST['bank_year'];
    $bank_year = (int)$bank_year;
    $bank_month = $_POST['bank_month'];
    $bank_month = (int)$bank_month;


    $income = $_POST['income1'];
    $emp_phone= $_POST['emp_phone'];
    $emp_phone_ext= $_POST['emp_phone_ext'];
    $shift_hours= $_POST['shift_hours'];
    $supervisor_name = $_POST['supervisor_name'];
    $supervisor_phone = $_POST['supervisor_phone'];
    $supervisor_ext = $_POST['supervisor_ext'];
    $emp_address= $_POST['emp_address'];
    $mothers_maiden= $_POST['mothers_maiden'];
    $ref_first_name1 = $_POST['ref_first_name1'];
    $ref_last_name1 = $_POST['ref_last_name1'];
    $ref_phone1= $_POST['ref_phone1'];
    $ref_relationship1 = $_POST['ref_relationship1'];
    $ref_first_name2 = $_POST['ref_first_name2'];
    $ref_last_name2 = $_POST['ref_last_name2'];
    $ref_phone2= $_POST['ref_phone2'];
    $ref_relationship2 = $_POST['ref_relationship2'];
    $bank_phone = $_POST['bank_phone'];


    $project_type = 'Payday Loan';
    $landing_page = 'https://easyloanday.com/';
    $ip_address = getUserIP();


    $post_array = array('TYPE'=>$type,'SRC'=>$src,'Landing_Page'=>$landing_page,'IP_Address'=>$ip_address,'First_Name'=>$first_name,
            'Last_Name'=>$last_name,'Zip'=>$zip_code,'Email'=>$email,'Address'=>$address,
            'Home_Phone'=>$home_phone,'City'=>$city,'State'=>$state,'Work_Phone'=>$emp_phone,'Best_Time_To_Call'=>$time_to_call,
            'Requested_Loan_Amount'=>$amount,'Occupation'=>$emp_title,'Net_Monthly_Income'=>$income,'Years_Employed'=>$emp_year,
             'Months_Employed'=>$emp_month,'Work_City'=>$city,'Work_State'=>$state,'Work_Zip'=>$zip_code,'Pay_Period'=>$pay_period,
            'Paycheck_Type'=>$direct_deposit,'Next_Pay_Day'=>$next_pay_date,'Second_Pay_Day'=>$second_pay_date,'Employer'=>$emp,
            'Account_Type'=>$account_type,'SSN'=>$ssn,'Date_Of_Birth'=>$dob,'Drivers_License'=>$license,'Drivers_License_State'=>$lic_state,
            'Gender'=>$gender,'Own_Rent'=>$own_rent,'Years_At_Residence'=>$res_year,'Months_At_Residence'=>$res_month,'Age'=>$age,
            'US_Citizen'=>$citizen,'Military'=>$military,'Marital_Status'=>$married,'Is_Dependent'=>$dependent,'Income_Type'=>$emp_status,
            'Bank_Name'=>$bank_name,'Routing_Number'=>$bank_routing,'Account_Number'=>$bank_accnt,'Years_Bank_Account'=>$bank_year,
            'Months_Bank_Account'=>$bank_month,'Shift_Hours'=>$shift_hours,'Work_Phone_Ext'=>$emp_phone_ext,'Supervisor_Name'=>$supervisor_name,
             'Supervisor_Phone'=>$supervisor_phone,'Supervisor_Phone_Ext'=>$supervisor_ext,'Work_Address'=>$emp_address,'Mothers_Maiden_Name'=>$mothers_maiden,
           'Reference_1_First_Name'=>$ref_first_name1,'Reference_1_Last_Name'=>$ref_last_name1,'Reference_1_Phone'=>$ref_phone1,'Reference_1_Relationship'=>$ref_relationship1,
        'Reference_2_First_Name'=>$ref_first_name2,'Reference_2_Last_Name'=>$ref_last_name2,'Reference_2_Phone'=>$ref_phone2,'Reference_2_Relationship'=>$ref_relationship2,
        'Bank_Phone'=>$bank_phone


    );

        $response =httpPost('https://mediaspace.leadportal.com/genericPostlead.php',$post_array);
        //Pass results to the SimpleXMLElement function
        $xml = new SimpleXMLElement($response);

        if($xml->status == "Error" or  strpos($xml->error,' Insert Error #3: Duplicate lead value - the lead with Email:') !== false){
            echo "Duplicate or Error entry, please try again.";
            ?>
            <a href="step2.php">Try Again</a>
            <?php
        }else{



            ?>
            <form id="confirm" method="post" action="process.php" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
            <input type="hidden" name="lead_confirm" value="1">
            <input type="hidden" name="tzone" id="tzone" value=""> <!--Web User Demography//-->
            <input type="hidden" name="resheight" id="resheight" value=""> <!--Web User Demography//-->
            <input type="hidden" name="reswidth" id="reswidth" value=""> <!--Web User Demography//-->
                                                                         <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron gradient">
            <div class="container">
                <h1>
                    Thank You!<br>
                    One of our loan specialist will contact you shortly.

                </h1>
            </div>

        <?php
        }



      }else{

    ?>
            Please complete all fields, and try again;
            <a href="step2.php">Try Again</a>
        </div>
<?php
}

require_once("includes/footer.php");
