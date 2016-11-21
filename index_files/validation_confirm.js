$(document).ready(function() {
    $('#confirm').bootstrapValidator({
        onError: function(e) {
            $('#submitbutton span').text(
                'Complete all form fields to continue');
        },
        onSuccess: function(e) {
            $('#submitbutton span').text('Submit For Cash');
           // var amount = document.getElementById("amount").value;


        },
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        trigger: 'blur',
        fields: {
            first_name: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your First Name'
                    },
                    stringLength: {
                        min: 2,
                        message: 'First Name must be more than 2 characters long'
                    }
                }
            },
            last_name: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    },
                    stringLength: {
                        min: 2,
                        message: 'Last Name must be more than 2 characters long'
                    }
                }
            },
            dob_month: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Month required'
                    }
                }
            },
            dob_day: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Day required'
                    }
                }
            },
            dob_year: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Year required'
                    }
                }
            },
            email: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter a valid Email Address'
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
                    regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        }
                }
            },
            home_area: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Enter area code'
                    }
                }
            },
            home_exchange: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Complete'
                    }
                }
            },
            home_four: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Complete'
                    }
                }
            },
            home_phone: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 12,
                        message: 'Your Phone Number is not long enough'
                    },
                    notEmpty: {
                        message: 'Please enter your Phone Number'
                    },
                    phone: {
                            country: 'US',
                            message: 'This is not valid US phone number'
                    },
                    regexp: {
                        regexp: /^(?!1)[0-9]{3}-[0-9]{3}-[0-9]{4}/g,
                        message: 'This is not valid US phone number'
                    }
                }
            },
            emp_phone: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 12,
                        message: 'Your Phone Number is not long enough'
                    },
                    notEmpty: {
                        message: 'Please enter your Employers Phone Number'
                    },
                    phone: {
                            country: 'US',
                            message: 'This is not valid US phone number'
                    },
                    regexp: {
                        regexp: /^(?!1)[0-9]{3}-[0-9]{3}-[0-9]{4}/g,
                        message: 'This is not valid US phone number'
                    }
                }
            },
            address: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your Address'
                    },
                    stringLength: {
                        min: 5,
                        message: 'Address must be more than 5 characters long'
                    }
                }
            },
            city: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your City'
                    },
                    stringLength: {
                        min: 2,
                        message: 'City must be more than 2 characters long'
                    }
                }
            },
            state: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your State'
                    }
                }
            },
            zip_code: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    zipCode: {
                        country: 'US',
                        message: 'The value is not valid postcode'
                    },
                    notEmpty: {
                        message: 'Please enter your Zip Code'
                    },
                    digits: {
                        message: 'The value is not valid postcode'
                    },
                    regexp: {
                        regexp: /^\d{5}$/,
                        message: 'The US zipcode must contain 5 digits'
                    }
                }
            },
            rent_own: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            res_year: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            military: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            license: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            lic_state: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            emp_status: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            income: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            emp_pay: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            creditscore: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your Credit Type'
                    }
                }
            },
            emp: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your Employer Name'
                    }
                }
            },
            emp_title: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your Postion/Title'
                    }
                }
            },
            emp_year: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            emp_phone_area: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Enter area code'
                    }
                }
            },
            emp_phone_exchange: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Complete'
                    }
                }
            },
            emp_phone_four: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Complete'
                    }
                }
            },
            direct_deposit: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please make a selection'
                    }
                }
            },

            pay_date: {
                 onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                trigger: 'focus',
                validators: {
                    notEmpty: {
                        message: 'Please make a selection'
                    }
                }
            },

            /*
            pay_month: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Month required'
                    }
                }
            },
            pay_day: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Day required'
                    }
                }
            },
            pay_year: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Year required'
                    }
                }
            },

            */
            bank_name: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please enter your Bank Name'
                    },
                    stringLength: {
                        min: 2,
                        message: 'Must be more than 2 characters long'
                    }
                }
            },
            bank_routing: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    digits: {
                        message: 'ABA Routing Number can contain digits only'
                    },
                    notEmpty: {
                        message: 'Please enter your ABA Number'
                    },
                    stringLength: {
                        max: 9,
                        min: 9,
                        message: 'ABA Number must be 9 characters'
                    }
                }
            },
            bank_accnt: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    digits: {
                        message: 'Bank Account Number can contain digits only'
                    },
                    notEmpty: {
                        message: 'Please enter your Account Number'
                    },
                    stringLength: {
                        min: 8,
                        message: 'Must be more than 8 characters long'
                    }
                }
            },
            ssn: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 15,
                        max: 15,
                        message: 'Invalid SSN'
                    },
                    notEmpty: {
                        message: 'Please enter your SSN'
                    }
                }
            },
            time_to_call:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Best Time To Call Required'
                    }
                }
           },
            supervisor_name:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Supervisor Name Required'
                    }
                }
            },
            supervisor_phone: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 12,
                        message: 'Your Phone Number is not long enough'
                    },
                    notEmpty: {
                        message: 'Please enter your Employers Phone Number'
                    },
                    phone: {
                        country: 'US',
                        message: 'This is not valid US phone number'
                    },
                    regexp: {
                        regexp: /^(?!1)[0-9]{3}-[0-9]{3}-[0-9]{4}/g,
                        message: 'This is not valid US phone number'
                    }
                }
            },
            shift_hours:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Shift Hours Required'
                    }
                }
            },
            gender:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Gender Required'
                    }
                }
            },
            own_rent:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Own or Rent Required'
                    }
                }
            },
            age:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    digits: {
                        message: 'Can contain digits only'
                    },
                    notEmpty: {
                        message: 'Please enter your Age'
                    }
                }
            },
            citizen:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Citizen Required'
                    }
                }
            },
            dependent:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Dependent Required'
                    }
                }
            },
            bank_phone: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 12,
                        message: 'Your Bank Phone Number is not long enough'
                    },
                    notEmpty: {
                        message: 'Please enter your Bank Phone Number'
                    },
                    phone: {
                        country: 'US',
                        message: 'This is not valid US phone number'
                    },
                    regexp: {
                        regexp: /^(?!1)[0-9]{3}-[0-9]{3}-[0-9]{4}/g,
                        message: 'This is not valid US phone number'
                    }
                }
            },
            res_month:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Month at Residence Required'
                    }
                }
            },
            married:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            emp_month:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    },
                    digits: {
                        message: 'The value is not valid number'
                    }
                }
            },
            pay_period:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            next_pay_date:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            second_pay_date:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            bank_year:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            bank_month:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            account_type:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },

            emp_phone_ext: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    digits: {
                        message: 'Work Ext can contain digits only'
                    },
                    notEmpty: {
                        message: 'Please enter your Phone Number'
                    }
                }
            },

            supervisor_ext: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    digits: {
                        message: 'Supervisor Ext can contain digits only'
                    },
                    notEmpty: {
                        message: 'Please enter Supervisor Phone Ext'
                    }
                }
            },
            emp_address: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },

            ref_first_name1:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            ref_last_name1:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            ref_phone1: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 12,
                        message: 'Your Phone Number is not long enough'
                    },
                    notEmpty: {
                        message: 'Please enter your Phone Number'
                    },
                    phone: {
                        country: 'US',
                        message: 'This is not valid US phone number'
                    },
                    regexp: {
                        regexp: /^(?!1)[0-9]{3}-[0-9]{3}-[0-9]{4}/g,
                        message: 'This is not valid US phone number'
                    }
                }
            },
            ref_relationship1:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            ref_first_name2:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            ref_last_name2:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            ref_phone2: {
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    stringLength: {
                        min: 12,
                        message: 'Your Phone Number is not long enough'
                    },
                    notEmpty: {
                        message: 'Please enter your Phone Number'
                    },
                    phone: {
                        country: 'US',
                        message: 'This is not valid US phone number'
                    },
                    regexp: {
                        regexp: /^(?!1)[0-9]{3}-[0-9]{3}-[0-9]{4}/g,
                        message: 'This is not valid US phone number'
                    }
                }
            },
            ref_relationship2:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave empty'
                    }
                }
            },
            mothers_maiden:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            },
            income1:{
                onError: function(e) {
                    $('#submitbutton span').text(
                        'Complete all form fields to continue'
                    );
                },
                onSuccess: function(e) {
                    $('#submitbutton span').text(
                        'Submit For Cash');
                },
                validators: {
                    notEmpty: {
                        message: 'Please do not leave Empty'
                    }
                }
            }








        }
    }).on('error.validator.bv', function(e, data) {
        data.element.data('bv.messages')
            // Hide all the messages
            .find('.help-block[data-bv-for="' + data.field +
                '"]').hide()
            // Show only message associated with current validator
            .filter('[data-bv-validator="' + data.validator +
                '"]').show();
    });
});