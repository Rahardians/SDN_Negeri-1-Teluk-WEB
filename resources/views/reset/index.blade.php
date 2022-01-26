<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SD Negeri 1 Teluk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('')}}assets/img/kemendikbud.png" rel="icon">


    <!-- Google Fonts -->
    <link href="{{asset('')}}https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS Files -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">
    {{-- Bootstrap  Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    {{-- Style CSS login --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    {{-- Form Login --}}
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-register">
                <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1>
                <form>
                  <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="password">
                        <label for="password">Password</label>
                  </div>
                  <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="confirm password">
                        <label for="password">Confirm Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Confirm</button>
                </form>
                <small class="d-block text-center mt-3">Back To Login ? 
                    <a href="/login">Login</a></small>
              </main>
        </div>
    </div>
    
   
    <!-- Bootstrap JS -->
    <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('')}}assets/js/main.js"></script>

</body>

</html>
