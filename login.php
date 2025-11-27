<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Politeknik Negeri Banjarmasin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <style>
        /* Reset & Global Styles */
        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #e6e6e6; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* --- Container Utama --- */
        .login-container {
            display: flex;
            width: 800px;
            max-width: 90%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
        }

        /* --- Kolom Kiri: Sign In --- */
        .left-column {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2; /* Penting untuk interaksi form */
        }

        .left-column h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #333;
        }

        /* Ikon Sosial */
        .social-login {
            margin-bottom: 20px;
        }

        .social-login .icon {
            font-size: 30px; 
            margin: 0 8px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .social-login .icon:hover {
            transform: scale(1.1);
        }

        .separator {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        /* Form */
        .login-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 3;
            position: relative;
        }

        .input-field {
            width: 90%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 25px;
            background-color: #ebebeb;
            font-size: 1rem;
            outline: none;
            text-align: center;
            z-index: 4; /* Input harus berada di lapisan paling depan */
        }

        .forgot-password {
            color: #6a0dad;
            text-decoration: none;
            font-size: 0.85rem;
            margin-bottom: 25px;
            align-self: center; /* Posisikan ke tengah */
        }

        /* Tombol Sign In */
        .sign-in-btn {
            background-color: #6a0dad;
            color: #fff;
            border: none;
            padding: 12px 50px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: 700;
        }

        .sign-in-btn:hover {
            background-color: #530088;
        }

        /* --- Kolom Kiri: Logo Background --- */
        .logo-background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            /* Ganti dengan path ke logo Anda relatif terhadap file login.php */
            background-image: url('Logo_poliban.jpg'); 
            background-size: 80%;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1;
            z-index: 0; /* Latar belakang berada di paling bawah */
        }

        /* --- Kolom Kanan: Sign Up Promo --- */
        .right-column {
            flex: 1;
            background-color: #ffffffff;
            color: #fff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }

        /* Bentuk Melengkung di Kanan */
        .right-column::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -10px;
            width: 150%;
            height: 120%;
            background-color: #530088;
            border-radius: 40%;
            z-index: 1;
        }

        /* Posisikan konten di depan pseudo-element */
        .right-column h3, .right-column p, .sign-up-btn {
            z-index: 2;
            position: relative;
        }

        .right-column h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        /* Tombol Sign Up */
        .sign-up-btn {
            background-color: #fff;
            color: #6a0dad;
            text-decoration: none; 
            border: none; 
            padding: 12px 60px; 
            border-radius: 50px; 
            font-size: 1rem;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .sign-up-btn:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="column left-column">
            <h2>Sign In</h2>
            
            <div class="social-login">
                <span class="icon" data-icon="flat-color-icons:google"></span>
                <span class="icon" data-icon="brandico:facebook"></span>
                <span class="icon" data-icon="brandico:linkedin"></span>
                <span class="icon" data-icon="cib:github"></span>
            </div>
            
            <p class="separator">Atau gunakan email dan password</p>
            
            <form action="modul4_web/index.php" method="POST" class="login-form">
                <input type="email" name="email" placeholder="Email" class="input-field" required>
                <input type="password" name="password" placeholder="Password" class="input-field" required>
                
                <a href="#" class="forgot-password">Lupa password anda?</a>
                
                <button type="submit" class="btn sign-in-btn">SIGN IN</button>
            </form>
            
            <div class="logo-background"></div>
        </div>

        <div class="column right-column">
            <h3>Halo, Teman!</h3>
            <p>Login dengan akun anda untuk mengakses isi dari web ini!</p>
            <a href="register.php" class="btn sign-up-btn">SIGN UP</a> 
        </div>
    </div>

</body>
</html>