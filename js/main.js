$(document).ready(function()
{
    //Position the error messages next to input labels
    $.tools.validator.addEffect("labelMate", function(errors, event){
        $.each(errors, function(index, error){
            error.input.first().parents('.field').find('.error').remove().end().find('label').after('<span class="error">' + error.messages[0] + '</span>');
        });

    }, function(inputs){
        inputs.each(function(){
            $(this).parents('.field').find('.error').remove();
        });

    });


    /**
     * Handle the form submission, display success message if
     * no errors are returned by the server. Call validator.invalidate
     * otherwise.
     */

    $(".form").validator({effect:'labelMate'}).submit(function(e){
       var form = $(this), checkRadioValidation = validateCheckRadio();

        if(!e.isDefaultPrevented() && checkRadioValidation){
            $.post(form.attr('action'), form.serialize(), function(data){
                data = $.parseJSON(data);

                if(data.status == 'success'){
                    form.fadeOut('fast', function(){
                        $('.form-container').append('<h2 class="success-message">Success!</h2>');
                    });
                }
                else validator.invalidate(data.errors);

            });
        }

        return false;
    });


});
