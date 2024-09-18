jQuery(document).ready(function() {
    jQuery('#form').validate({

        rules:{
            numero_form:"required",
            'horas[]': {
                required: true,
                digits: true,  // Esto asegura que solo se ingresen números enteros
            },
            nombre_form:{
                required:true,
                minlength:2,
            },
            apellido_form:{
                required:true,
                minlength:2,
            },
            edad_form:{
                required:true,
                minlength:0,
            },
            direccion_form:{
                required:true,
                minlength:6,
            },
            estudios_form:"required",
            'deporte[]':"required",
        },

        messages:{
            numero_form:"Por favor introduce un numero",
            'horas[]': {
                required: "Por favor ingresa las horas para todos los días.",
                digits: "Por favor ingresa solo números enteros.",
            },
            nombre_form:{
                required: "Por favor introduce un nombre",
                minlength: "debe tener al menos 2 caracteres",
            },
            apellido_form:{
                required: "Por favor introduce un nombre",
                minlength: "debe tener al menos 2 caracteres",
            },
            edad_form:{
                required: "Por favor introduce edad",
                minlength: "debe ser mayor a cero",
            },
            direccion_form:{
                required: "Por favor introduce direccion",
                minlength: "debe tener al menos 6 caracteres",
            },
            estudios_form:"selecciona un nivel de estudios",
            'deporte[]':"selecciona al menos un deporte",
        },


        submitHandler: function(form) {
            var valid = true;
            $('[name="horas[]"]').each(function() {
                if ($(this).val() === "") {
                    valid = false;
                    $(this).addClass('error');
                    $(this).after('<label class="error">Este campo es obligatorio.</label>');
                }
            });

            if (valid) {
                form.submit();
            }
        }
    });
});
