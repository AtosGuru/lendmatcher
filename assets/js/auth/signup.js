$(document).ready(function () {
  var base_url = $("#base_url").val();
  var type = "investor";

  $(".form-check-input").click(function () {
    type = $(this).val();
  });

  $("#register").click(function () {
    var data = {
      fullname: $("#name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
      password2: $("#password2").val(),
      type: type,
    };

    if (
      data.fullname == "" ||
      data.email == "" ||
      data.password == "" ||
      data.password2 == ""
    ) {
      alert("Confirm your inputs please");
    } else if (data.email.indexOf("@") == -1 || data.email.indexOf(".") == -1) {
      alert("Invalid email");
    } else if (data.password != data.password2) {
      alert("passwords must be matched");
    } else {
      console.log(base_url);
      $.ajax({
        type: "post",
        url: base_url + "index.php/Auth/register_user",
        data,
        success: function (res) {
          alert(res);
          console.log(res);
        },
      });
    }
  });
});
