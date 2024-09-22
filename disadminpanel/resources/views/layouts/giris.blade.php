<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Giriş Yap</title>
    <!-- Bootstrap veya kendi özel stil dosyalarını ekleyebilirsin -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f7f9fc;
        }

        .auth-card {
            width: 100%;
            height: 100%; /* Yükseklik tüm sayfayı kaplar */
            background-color: white;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-header h3 {
            font-weight: bold;
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 12px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-control {
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
        }

        .auth-footer a {
            color: #007bff;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        /* Giriş formu kutusu */
        .login-box {
            width: 100%;
            max-width: 500px; /* İç formun genişliği */
        }
    </style>
</head>
<body>
    <div class="auth-card">
        <div class="login-box">
            @yield('content')
        </div>
    </div>
</body>
</html>
