<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Code</title>
    <!-- link CSS -->
    <link href='/style/verify_code.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->
    <!-- boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <h2>Verify Your Account</h2>
        &nbsp;
        <p>We emailed you the six digit code to personal@gmail.com <br>
            Enter the code below to confirm your email address
        </p>
        <div class="code-container">
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
        </div>

        <div>
            <button type="submit" name="btn" id="btn" class="btn btn-primary">Verify</button>
        </div>

        <small>
            If you didn't receive a code !! <strong><a href=""> Resend</a></strong>
        </small>
    </div>
<!-- JavaScript -->
<script>
    const codes = document.querySelectorAll('.code');
    codes[0].focus();

    codes.forEach((code, idx) => {
        code.addEventListener('keydown',(e) => {
            if(e.key >= 0 && e.key <= 9) {
                codes[idx].value = ''
                setTimeout(() => codes[idx + 1].focus(), 10)
            } else if(e.key === 'Backspace'){
                setTimeout(() => codes[idx - 1].focus(), 10)
            }
            
        })
    })

</script>
</body>
</html>
