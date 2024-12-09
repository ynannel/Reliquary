
$(document).ready(function () {
    $("#login-form").on("submit", function (event) {
        event.preventDefault();
        if (validateForm($(this))) {
            window.location.href = "index.html";
        }
    });

    $("#register-form").on("submit", function (event) {
        event.preventDefault();
        if (validateForm($(this))) {
            const name = $("#username").val();
            const email = $("#register-email").val();
            const password = $("#register-password").val();
            signUp(name, email, password);
            clearForm($(this));
            alert("Registration data is correct");
            $(".wrapper").removeClass("active");
        }
    });

    function validateForm($form) {
        let isValid = true;
        $form.find(".input-box").each(function () {
            const $inputBox = $(this);
            const $input = $inputBox.find("input");
            const $errorElement = $inputBox.find(".error");

            $inputBox.removeClass("error success");
            $errorElement.text("");

            if (!$input.val().trim()) {
                isValid = false;
                $inputBox.addClass("error");
                $errorElement.text(`${capitalize($input.attr("name"))} is required`);
            } else if ($input.attr("type") === "email" && !validateEmail($input.val())) {
                isValid = false;
                $inputBox.addClass("error");
                $errorElement.text("Invalid email address");
            } else if ($input.attr("type") === "password" && $input.val().length < 8) {
                isValid = false;
                $inputBox.addClass("error");
                $errorElement.text("Password must be at least 8 characters");
            } else {
                $inputBox.addClass("success");
            }
        });
        return isValid;
    }

    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return emailPattern.test(email);
    }

    function capitalize(text) {
        return text.charAt(0).toUpperCase() + text.slice(1);
    }

    function clearForm($form) {
        $form[0].reset();
        $form.find(".input-box").each(function () {
            const $inputBox = $(this);
            $inputBox.removeClass("error success");
            $inputBox.find(".error").text("");
        });
    }
});


