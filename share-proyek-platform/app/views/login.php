<?php
session_start();
// Tempatkan logika validasi login Anda di sini jika diperlukan
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — Sistem Pelaporan DLH Sleman</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Ekstensi diubah menjadi .jpg sesuai dengan file di folder Anda */
            background: url('BG-PEDULI LINGKUNGAN.jpg') no-repeat center bottom fixed;
            background-size: cover;
            background-color: #e0f7fa; /* Warna cadangan jika gambar telat dimuat */
            min-height: 100vh;
            color: #333;
            display: flex;
            flex-direction: column;
        }

        /* Penyesuaian Header untuk 2 Logo (Kiri & Kanan) */
        .dlh-top-bar {
            background-color: white;
            width: 100%;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .dlh-top-bar img {
            height: 90px;
            max-width: 100%;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .dlh-top-bar {
                padding: 10px 20px;
            }
            .dlh-top-bar img {
                height: 60px;
            }
        }

        /* Area Form */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.96);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #444;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s;
            background-color: #fbfbfb;
        }

        input:focus {
            outline: none;
            border-color: #126649;
        }

        .form-options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 13px;
        }

        .form-options-row label {
            display: flex;
            align-items: center;
            gap: 6px;
            margin: 0;
            font-weight: 500;
            cursor: pointer;
        }

        .form-options-row input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .form-options-row a {
            color: #126649;
            text-decoration: none;
            font-weight: 600;
        }

        .form-options-row a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: #0a3d2c;
            color: white;
            margin-top: 5px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            background: #126649;
            box-shadow: 0 10px 25px rgba(10, 61, 44, 0.3);
        }

        .form-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
            font-size: 14px;
        }

        .form-link a {
            color: #126649;
            text-decoration: none;
            font-weight: 600;
        }

        .form-link a:hover {
            text-decoration: underline;
        }

        .demo-credentials {
            text-align: center;
            margin-top: 1.2rem;
            color: #777;
            background: #f1f3f5;
            padding: 8px;
            border-radius: 6px;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <!-- Bar Header Atas dengan 2 Logo -->
    <div class="dlh-top-bar">
        <img src="logo-pedulibumi.png" alt="Logo Peduli Bumi">
        <img src="LOGO-SLEMAN.png" alt="Logo Kabupaten Sleman">
    </div>

    <!-- Konten Utama Tengah -->
    <div class="container">
        <div class="form-container">
            <h2>SELAMAT DATANG</h2>
            
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username anda" required autofocus>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-options-row">
                    <label>
                        <input type="checkbox" name="remember"> Ingat Saya
                    </label>
                    <a href="#">Lupa Password</a>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <div class="form-link">
                Belum Punya Akun? <a href="register.php">Registrasi</a>
            </div>
            
            <div class="demo-credentials">
                Demo: admin / admin123
            </div>
        </div>
    </div>

</body>
</html>
