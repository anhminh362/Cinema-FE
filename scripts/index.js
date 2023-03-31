let apiAccount = "https://6424101a4740174043320fe7.mockapi.io/account";

    const btnRegister = document.getElementById("btn__submit");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const bntSignup = document.querySelector(".btn-regiter");
    // signup

    btnRegister.onclick = function() {
      e.preventDefault();
      console.log(1111)
      handleRegister()
    }

    const handleRegister = async (e) => {
      console.log(2222)
      e.preventDefault();
      // if (email.value == "" || password.value == "") {
      //   alert("Please enter your email and password");
      // } else {
      const account = {
        email: email.value,
        password: password.value,
      };
      const response = await fetch(apiAccount, {
        method: "POST",

        headers: {
          "Content-Type": "application/json",

        },
        body: JSON.stringify(account),
      })
      // }).then((res) => res.json())
      //   .then((data) => console.log(data));
      //   alert("Sign Up Success");
      // window.location.href = "verify_code.php?id="<?php echo $email ?>;

      console.log(12, response)
    }
    // };