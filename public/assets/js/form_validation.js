
$(document).ready(function() {
    $('#tooltipContainerForm')
        .bootstrapValidator({
            container: 'tooltip',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                cnic: {
                    validators: {
                        notEmpty: {
                         message: ''
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                          message: ''
                        }
                    }
                }
            }
        })
        .on('error.field.bv', function(e, data) {
            // Get the tooltip
            var $parent = data.element.parents('.form-group'),
                $icon   = $parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]'),
                title   = $icon.data('bs.tooltip').getTitle();

            // Destroy the old tooltip and create a new one positioned to the right
            $icon.tooltip('destroy').tooltip({
                html: true,
                placement: 'top',
                title: title,
                container: 'body'
            });
        });

    // Reset the Tooltip container form
    $('#resetButton').on('click', function(e) {
        var fields = $('#tooltipContainerForm').data('bootstrapValidator').getOptions().fields,
            $parent, $icon;

        for (var field in fields) {
            $parent = $('[name="' + field + '"]').parents('.form-group');
            $icon   = $parent.find('.form-control-feedback[data-bv-icon-for="' + field + '"]');
            $icon.tooltip('destroy');
        }

        // Then reset the form
        $('#tooltipContainerForm').data('bootstrapValidator').resetForm(true);
    });
});


























/*$(function(){
 $('ul.nav li.dropdown').hover(function(){
 $('.dropdown-menu', this).fadeIn();
 
 },function(){
 $('.dropdown-menu', this).fadeOut();
 })
 })*/

/*
 $(document).ready(function() {
 $('#clearingForm')
 // IMPORTANT: You must declare .on('init.field.bv')
 // before calling .bootstrapValidator(options)
 .on('init.field.bv', function(e, data) {
 // data.bv      --> The BootstrapValidator instance
 // data.field   --> The field name
 // data.element --> The field element
 
 var $parent = data.element.parents('.form-group'),
 $icon   = $parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]');
 
 // From v0.5.3, you can retrieve the icon element by
 // $icon = data.element.data('bv.icon');
 
 $icon.on('click.clearing', function() {
 // Check if the field is valid or not via the icon class
 if ($icon.hasClass('glyphicon-remove')) {
 // Clear the field
 data.bv.resetField(data.element);
 }
 });
 })
 
 .bootstrapValidator({
 feedbackIcons: {
 valid: 'glyphicon glyphicon-ok',
 invalid: 'glyphicon glyphicon-remove',
 validating: 'glyphicon glyphicon-refresh'
 },
 fields: {
 fname: {
 validators: {
 notEmpty: {
 message: 'The name is required'
 }
 }
 },
 lname: {
 validators: {
 notEmpty: {
 message: 'The Last name is required'
 }//,
 /*stringLength: {
 max: 300,
 message: 'The description must be less than 300 characters long'
 }*/
/*                  }
 },
 mail: {
 validators: {
 notEmpty: {
 message: 'The email is required'
 },
 numeric: {
 message: 'The price must be a number'
 }
 }
 },
 quantity: {
 validators: {
 notEmpty: {
 message: 'The quantity is required'
 },
 integer: {
 message: 'The quantity must be a number'
 }
 }
 }
 }
 });
 });
 */