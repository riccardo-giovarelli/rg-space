require("./bootstrap");
require("alpinejs");
require("./home");
// reCAPTCHA handler
onSubmit = function (token) {
    document.getElementById("contact_form").submit();
};
