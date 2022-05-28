$(document).ready(function () {
  var base_url = $("#base_url").val();

  $("#login").click(function () {
    var data = {
      email: $("#email").val(),
      password: $("#password").val(),
    };

    if (data.email == "" || data.password == "") {
      alert("Confirm your inputs please");
    } else if (data.email.indexOf("@") == -1 || data.email.indexOf(".") == -1) {
      alert("Invalid email");
    } else {
      console.log(base_url);
      $.ajax({
        type: "post",
        url: base_url + "index.php/Auth/login_user",
        data,
        success: function (res) {
          if (res == "fail") {
            alert("Incorrect Email or Password");
          } else {
            var res = JSON.parse(res);
            alert("success");
            localStorage.setItem("username", res.fullname);
            localStorage.setItem("email", res.email);
            localStorage.setItem("type", res.type);
            localStorage.setItem("loggedIn", true);

            if (res.type == "investor") {
              window.location.href =
                base_url + "index.php/Investor/investor_home";
            } else if (res.type == "entrepreneur") {
              window.location.href =
                base_url + "index.php/Entrepreneur/entre_home";
            }
          }
        },
      });
    }
  });
});
