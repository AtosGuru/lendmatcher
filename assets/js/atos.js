$(document).ready(function () {
  $(".type_dropdown").click(function () {
    var text = $(this).html();
    $(".type-dropdown").html(text);
  });

  var base_url = $("#base_url").val();
  // $("#logout").click(function () {
  //   localStorage.removeItem("username");
  //   localStorage.removeItem("email");
  //   localStorage.removeItem("type");
  //   localStorage.setItem("loggedIn", false);
  //   window.location.href = base_url + "index.php/Auth/login";
  // });
});
