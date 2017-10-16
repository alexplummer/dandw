document.addEventListener("DOMContentLoaded", function (event) {

    // Email validate
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    // Get query string
    function getParameterByName(name, url) {
        if (!url) {
            url = window.location.href;
        }
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }


    // Nav
    var navMob = document.querySelector('.nav-mobile');
    var navBtn = document.querySelector('.icon-menu');

    navBtn.addEventListener("click", function () {
        navMob.classList.toggle('shown');
    });

    // Homepage
    var homeForm = document.querySelector('.form-home');

    if (homeForm !== null) {

        var contactForm = document.querySelector('.contact-form');
        var contactName = contactForm.querySelector('#contact-name');
        var contactEmail = contactForm.querySelector('#contact-email');
        var contactButton = contactForm.querySelector('.contact-submit');

        contactButton.addEventListener("click", function () {

            if (contactName.value.length < 1) {
                contactName.setAttribute("placeholder", "Please fill in your name");
                contactName.style.borderColor = "red";
            }
            if (contactEmail.value.length < 1) {
                contactEmail.setAttribute("placeholder", "Please fill in your email");
                contactEmail.style.borderColor = "red";
            }
            if (!validateEmail(contactEmail.value)) {
                contactEmail.value = "";
                contactEmail.setAttribute("placeholder", "Please enter a valid email");
                contactEmail.style.borderColor = "red";
            }
            if (validateEmail(contactEmail.value) && contactName.value.length > 1) {
                window.open("contact.html?name=" + contactName.value + "&email=" + contactEmail.value);
            }
        });

        // Paginate quotes
        var quotes = document.querySelector('.home-quotes').getElementsByTagName('blockquote');
        quotes[0].classList.add('shown');

        for (var i = 0; i < quotes.length; i++) {
            var newPag = '<a href="#"></a>';
            document.querySelector('.pagination').innerHTML += newPag;
        }

        var pagination = document.querySelector('.pagination').getElementsByTagName('a');
        pagination[0].classList.add('active');

        for (var i = 0; i < pagination.length; i++) {
            addPag(i);
        }
        function addPag(i) {
            pagination[i].addEventListener('click', function (e) {
                console.log(i);
                e.preventDefault();
                document.querySelector('.active').classList.remove('active');
                this.classList.add('active');

                document.querySelector('.shown').classList.remove('shown');
                quotes[i].classList.add('shown');
            });
        }
    }

    // Contact page
    if (window.location.href.indexOf("contact") > -1) {
        var name = getParameterByName('name');
        var email = getParameterByName('email');

        var contactForm = document.querySelector('.contact-form');
        var contactName = contactForm.querySelector('#contact-name');
        var contactEmail = contactForm.querySelector('#contact-email');
        var contactButton = contactForm.querySelector('#contact-submit');

        contactName.value = name;
        contactEmail.value = email;

        contactButton.addEventListener("click", function (evt) {

            if (contactName.value.length < 1) {
                contactName.setAttribute("placeholder", "Please fill in your name");
                contactName.style.borderColor = "red";
                evt.preventDefault();
            }
            if (contactEmail.value.length < 1) {
                contactEmail.setAttribute("placeholder", "Please fill in your email");
                contactEmail.style.borderColor = "red";
                evt.preventDefault();
            }
            if (!validateEmail(contactEmail.value)) {
                contactEmail.value = "";
                contactEmail.setAttribute("placeholder", "Please enter a valid email");
                contactEmail.style.borderColor = "red";
                evt.preventDefault();
            }
        });
    }

});
