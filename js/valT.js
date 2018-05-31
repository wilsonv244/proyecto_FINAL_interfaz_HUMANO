  
  $(document).ready(function() {  //Preparamos el documento para su manipulación, se detecta su estado.
								// el bloque solo ejecuta una vez que la página esté disponible
	$('#datetimepicker').datetimepicker({
			format: "yyyy-mm-dd"
		});
    $('#login_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		
	  });
	  
	$('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		
		
        fields: {
			name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Por favor, ingrese sus nombres'
                    }
                }
            },
			 datetimepicker: {
				validators: {
 
					notEmpty: {
						message: 'La fecha de nacimiento es requerida y no puede ser vacia'
					},
					date: {
						format: 'YYYY-MM-DD',
						message: 'La fecha de nacimiento no es valida'
				 }
			 }
		 },

         
            play: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, elija un departamento'
                    }
                }
            },
    
            }
        });/*.on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('http://localhost/bootstrap/guardar.php'), $form.serialize(), function(result) {
                alert(result);
            }, 'json');
        });*/
		
	$('#btnSubmit').click(function(){
        $('#contact_form').bootstrapValidator('validate');
        if ($('#contact_form').data('bootstrapValidator').isValid()==false) {
            return false;
        }
    
        var url = "http://localhost/bootstrap/guardar.php"; // the script where you handle the form input.

        $.ajax({
               type: "POST",
               url: url,
               data: $("#contact_form").serialize(), // serializes the form's elements.
               success: function(data)
               {
                   alert(data); // show response from the php script.
               }
             });
        return false;
    }); 
    
    $('#contact_form').submit(function(e) {
        
    });
    
});