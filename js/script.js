

$(document).ready(function() {
  $("#signup").validate({
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      phone: {
        required: true,
        number: true,
        minlength: 11
      },
      email: {
        required: true,
        email: true
      },

      password: {
        required: true,
        minlength: 8
      }

    },
    messages : {
      name: {
        minlength: "Name should be at least 3 characters"
      },
      phone: {
        required: "Please enter your Phone Number",
        number: "Phone Number should be numerical value",
        min: "Enter at least 11 Digit"
      },
      email: {
        email: "The email should be in the format: abc@domain.tld"
      },
      password: {
        required: "Please Enter Your Password",
        number: "Enter At least 8 characters "
      }
    }
  });
});

