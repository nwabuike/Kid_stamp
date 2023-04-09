jQuery(document).ready(function () {
  //GET THE FORM
  var form = $("#contactForm");

  //GET FORM MESSAGES
  var formMessages = $("#form-messages");

  $(form).submit(function (event) {
    //STOP BROWSER FORM SUBMISSION
    event.preventDefault();

    //SERIALIZE THE FORM DATA
    var formData = $(form).serialize();

    $.ajax({
      type: "POST",
      url: "./php/order.php",
      data: formData,
    })

      .done(function (response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).addClass("alert alert-danger");
        if (response.type == "error") {
          $(formMessages).text(response);
        } else if (response.type == "error_emptyfield") {
          $(formMessages).text(response);
          //    console.log(response);
          // window.location.href = "thankYou.php";
        } else {
          console.log(response);
          window.location.href = "thankYou.php";
        }

        console.log(response);

        // Clear the form.
        $("#name").val("");
        $("#email").val("");
        $("#address").val("");
        $("#phone").val("");
        $("#state").val("");
        $("#senderPackage").val("");
      })

      .fail(function (data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass("alert alert-success");
        $(formMessages).addClass("alert alert-danger");

        // Set the message text.
        if (data.responseText !== "") {
          $(formMessages).text(data.responseText);
        } else {
          $(formMessages).text(
            "Oops! An error occured and your message could not be sent."
          );
        }
        // Clear the form.
        $("#name").val("");
        $("#email").val("");
        $("#address").val("");
        $("#phone").val("");
        $("#state").val("");
        $("#senderPackage").val("");
      });
  });
});
