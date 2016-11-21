$(document).ready(function() {
    $('#registration').bootstrapValidator({
        onError: function(e) {
            $('.error_msg').text(
                'Please complete all four fields to continue.'
            );
        },
        onSuccess: function(e) {
            $('.error_msg').text('\xa0');
        },
        container: '#error_hide',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        //live: 'disabled',
        fields: {
            amount: {
                validators: {
                    notEmpty: {
                        message: 'Please complete'
                    }
                }
            },
            income: {
                validators: {
                    notEmpty: {
                        message: 'Please complete'
                    }
                }
            },
            creditscore: {
                validators: {
                    notEmpty: {
                        message: 'Please complete'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please complete'
                    }
                }
            }
        }
    });
});