jQuery(document).ready(function() {
    init();

    // click on next button
    jQuery('.form-wizard-next-btn').click(function() {
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        var next = jQuery(this);
        var nextWizardStep = true;
        parentFieldset.find('.wizard-required').each(function(){
            var thisValue = jQuery(this).val();

            if( thisValue == "") {
                // if plan is no
                if(jQuery(this).attr('id') == 'plan' && jQuery("input[name='radio_plan']:checked").val() == "no"){
                    return;
                }

                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            }
            else {
                jQuery(this).siblings('.wizard-form-error').slideUp();
            }
        });
        parentFieldset.find('.wizard-email').each(function(){
            var thisValue = jQuery(this).val();

            if(!validateEmail(thisValue)) {
                jQuery(this).siblings('.wizard-form-error').slideDown();
                nextWizardStep = false;
            }
            else {
                jQuery(this).siblings('.wizard-form-error').slideUp();
            }
        });
        if( nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show","400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
            jQuery(document).find('.wizard-fieldset').each(function(){
                if(jQuery(this).hasClass('show')){
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if(jQuery(this).attr('data-attr') == formAtrr){
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        }
    });
    //click on previous button
    jQuery('.form-wizard-previous-btn').click(function() {
        var counter = parseInt(jQuery(".wizard-counter").text());;
        var prev =jQuery(this);
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        prev.parents('.wizard-fieldset').removeClass("show","400");
        prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
        currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
        jQuery(document).find('.wizard-fieldset').each(function(){
            if(jQuery(this).hasClass('show')){
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                    if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                    }else{
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
    //click on form submit button
    jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();
            if( thisValue == "" ) {
                jQuery(this).siblings(".wizard-form-error").slideDown();
            }
            else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        parentFieldset.find('.wizard-email').each(function() {
            var thisValue = jQuery(this).val();
            if( thisValue == "" ) {
                jQuery(this).siblings(".wizard-form-error").slideDown();
            }
            else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
    });
    // focus on input field check empty or not
    jQuery(".form-control").on('focus', function(){
        var tmpThis = jQuery(this).val();
        if(tmpThis == '' ) {
            jQuery(this).parent().addClass("focus-input");
        }
        else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
        }
    }).on('blur', function(){
        var tmpThis = jQuery(this).val();
        if(tmpThis == '' ) {
            jQuery(this).parent().removeClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideDown("3000");
        }
        else if(tmpThis !='' ){
            if(jQuery(this).hasClass('wizard-email')){
                if (!validateEmail(jQuery(this).val())) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    return;
                }
            }

            jQuery(this).parent().addClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideUp("3000");

            // change event
            var index = jQuery(this).parent().attr('index');
            jQuery("[index=" + (parseInt(index) + 1) + "]").show(800);
            // this.scrollIntoView();
        }
    });

    // radio plan change event
    jQuery('input[type=radio][name=radio_plan]').change(function() {
        var index = jQuery(this).parent().parent().attr('index');
        if (this.id == 'option_yes') {
            jQuery("[index=" + (parseInt(index) + 1) + "]").show(800);
        }
        else if (this.id == 'option_no') {
            jQuery("[index=" + (parseInt(index) + 1) + "]").hide(800);
            jQuery("[index=" + (parseInt(index) + 2) + "]").show(800);
        }
    });

    // select option plan change event
    jQuery('#plan_num').change(function(){
        var text = $("#plan_num option:selected").text();
        jQuery('#company_size').val(text);
    });

    // select option state change event
    jQuery('#state').change(function(){
        var text = $("#state option:selected").text();
        jQuery('#estado').val(text);
    });
});

// init function
function init(){
    jQuery('.wizard-show').hide();
}



// email validation
function validateEmail(email) {
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(String(email).toLowerCase());
}

// count calculation
function count_calc(){
    var total_count = 0;
    jQuery('#table_count input[type="number"]').each(
        function(index){
            var count = $(this).val();
            total_count += parseInt(count);
        }
    );
    jQuery('#beneficary_num').val(total_count);
}
