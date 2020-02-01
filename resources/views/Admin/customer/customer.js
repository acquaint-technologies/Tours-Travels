"use strict";

// Class definition
var KTWizard3 = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;

    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v3', {
            startStep: 1, // initial active step number
            clickableSteps: true  // allow step clicking
        });

        // Validation before going to next page
        wizard.on('beforeNext', function (wizardObj) {
            /*if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }*/
        });

        wizard.on('beforePrev', function (wizardObj) {
            /*if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }*/
        });

        // Change event
        wizard.on('change', function (wizard) {
            KTUtil.scrollTop();
        });
    };

    var initValidation = function () {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                //= Step 1
                address1: {
                    required: true
                },
                postcode: {
                    required: true
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                },
                country: {
                    required: true
                },

                //= Step 2
                package: {
                    required: true
                },
                weight: {
                    required: true
                },
                width: {
                    required: true
                },
                height: {
                    required: true
                },
                length: {
                    required: true
                },

                //= Step 3
                delivery: {
                    required: true
                },
                packaging: {
                    required: true
                },
                preferreddelivery: {
                    required: true
                },

                //= Step 4
                locaddress1: {
                    required: true
                },
                locpostcode: {
                    required: true
                },
                loccity: {
                    required: true
                },
                locstate: {
                    required: true
                },
                loccountry: {
                    required: true
                },
            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    "text": "There are some errors in your submission. Please correct them.",
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary"
                });
            },

            // Submit valid form
            submitHandler: function (form) {

            }
        });
    }

    var initSubmit = function () {
        var btn = formEl.find('[data-ktwizard-type="action-submit"]');

        btn.on('click', function (e) {
            e.preventDefault();

            // if (validator.form()) {
            // See: src\js\framework\base\app.js
            KTApp.progress(btn);
            //KTApp.block(formEl);

            // See: http://malsup.com/jquery/form/#ajaxSubmit
            let thisForm = $('#kt_form');
            let formData = new FormData(thisForm[0]);
            let headers = {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            };
            $.ajax({
                type: 'POST',
                headers: headers,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                url: thisForm.attr('action'),
                data: formData,
                async: false,
                success: function (response) {
                    KTApp.unprogress(btn);
                    //KTApp.unblock(formEl);

                    let errors_messages = '';
                    if (response.errors){
                        errors_messages += '<ul class="list-group">';
                        Object.keys(response.errors).forEach(error => {
                            errors_messages += '<li class="list-group-item text-danger">';
                            errors_messages += response.errors[error][0];
                            errors_messages += '</li>';
                        });
                        errors_messages += '</ul>';
                    }

                    swal.fire({
                        "title": "",
                        "text":  response.message,
                        "html": errors_messages,
                        "type": response.type,
                        "confirmButtonClass": "btn btn-secondary"
                    });
                    if (thisForm.find('[name="_method"]').val() !== 'PUT'){
                        if (response.success === true) {
                            thisForm.each(function () {
                                this.reset();
                            });
                        }
                    }
                }
            });
            // }
        });
    };

    return {
        // public functions
        init: function () {
            wizardEl = KTUtil.get('kt_wizard_v3');
            formEl = $('#kt_form');

            initWizard();
            // initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard3.init();
});

new Vue({
    el: "#customer_page",
    data: {
        type: customer_type,
        identity: customer_identity_type,
        gender: customer_gender,
    },
    mounted() {
        console.log(this.type);
        setTimeout(function () {
            KTBootstrapSelect.init();
        }, 1200);
    },
    updated() {
        KTBootstrapSelect.init();
    },
    methods: {
        changeType(event) {
            this.type = event.target.value;
        },
        changeIdentityType(event) {
            this.identity = event.target.value;
        },
        changeGender(event) {
            this.gender = event.target.value;
        },
        loadFile(event) {
            let CSS = 'background-image: url(' + URL.createObjectURL(event.target.files[0]) + ')';
            CSS += '; background-size: contain; width: 150px; height: 180px;';
            document.getElementById("avatar__holder").style.cssText = CSS;
        }
    }
});
