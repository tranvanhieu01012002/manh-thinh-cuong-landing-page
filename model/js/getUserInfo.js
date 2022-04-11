window.fbAsyncInit = function() {
    FB.init({
        appId: "3165436177106440",
        cookie: true,
        xfbml: true,
        version: "v6.0",
    });

    FB.AppEvents.logPageView();

};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function fbLogin() {
    FB.login(function(response) {
        if (response.authResponse) {
            fbAfterLogin();
        }
    })
}

function fbAfterLogin() {
    FB.getLoginStatus(function(response) {
        if (response.status === "connected") {
            FB.api("/me", function(response) {
                jQuery.ajax({
                    url: "./check_login.php",
                    type: "post",
                    data: 'name=' + response.name + '&id=' + response.id,
                    success: function(result) {
                        window.location.href = "./index.php";
                    }
                });
                // document.getElementById("status").innerHTML =
                //     "Thanks for logging in, " + response.name + "!";
            });
        }

    });
}