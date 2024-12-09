
function signUp(username, email, password) {
    $.ajax({
        url: "regUser.php",
        type: "POST",
        data: {
            submit: true,
            username: username,
            email: email,
            password: password
        },
        success: function(response) {
            alert(response);
        },
        error: function(xhr, status, error) {
            console.error("Error: " + error);
        }
    });
};
