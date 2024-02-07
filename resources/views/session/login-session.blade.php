<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.google-analytics')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Base styles */
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('../assets/img/bg9.jpeg');
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
        }

        /* Flex container for centering the login card */
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Card styling */
 .card {
    background: rgba(255, 255, 255, 0.10); /* Putih dengan sedikit transparansi */
    padding: 40px;
    border-radius: 15px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    width: 100%;
    max-width: 400px;
    transition: transform 0.3s ease-in-out; /* Smooth scaling transition */
    backdrop-filter: blur(10px);

 }

        /* Input field styling with icons */
        .input-container {
            position: relative;
            margin: 10px 0;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #777;
        }

        input[type="name"],
        input[type="password"] {
            width: 100%;
            padding: 10px 0px;
            /* Adjust padding to accommodate icons */
            border: 1px solid #ddd;
            border-radius: 50px;
            text-align: center;
        }

        /* Button styling */
        .login-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        /* Responsive styles */
        @media (max-width: 767px) {
            .card {
                margin: 20px;
            }
        }

        #Logo-Taripar {
            width: 400px;
  display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;


        }

        .alert-danger {
            background-color: red;
            color: white;
            border-color: #ff6b6b;
            padding: 10px;
            border-radius: 50px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <div class="card">
            <div class="img">
              <!-- <h1 style="text-align: center; font-size:5rem; color:#ddd">Taripar</h1> -->
               <img src="../assets/img/logoNew.png" id="Logo-Taripar">
            </div>
            <form method="POST" action="/session">
                @csrf
                <div class="input-container">
                    <i class="fas fa-user input-icon"></i>
                    <input type="name" name="name" id="name" placeholder="Masukkan Nama Anda" required>
                </div>
                @error('name')
                <p class="text-danger text-xs mt-2"> {{$message}}</p>
                @enderror
                <div class="input-container">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password Anda" required>
                </div>
                @error('password')
                <p class="text-danger text-xs mt-2"> {{$password}}</p>
                @enderror
                @if($errors->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('error') }}
                </div>
                @endif
                <div style="margin: 10px 0; color:white">
                    <input type="checkbox" id="rememberMe" checked>
                    <label for="rememberMe">Ingat saya</label>
                </div>
                <button type="submit" class="login-button">Masuk</button>
            </form>
            <p style="text-align: center; color:black">
                Belum mempunyai akun?
                <a href="https://wa.me/6281360824551" style="color: #4CAF50; font-weight: bold;" s>Hubungi nomor ini</a>
            </p>
        </div>
    </div>
</body>

</html>
