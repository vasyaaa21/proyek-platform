<?php
session_start();
// Tempatkan logika validasi registrasi Anda di sini jika diperlukan
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar — Sistem Pelaporan DLH Sleman</title>
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
            background-color: #e0f7fa;
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
            margin-bottom: 4px;
            font-size: 1.6rem;
            font-weight: 700;
        }

        .form-subtitle {
            text-align: center;
            color: #666;
            font-size: 13px;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.1rem;
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
            <h2>BUAT AKUN</h2>
            <p class="form-subtitle">Lengkapi Data Untuk Membuat Akun</p>
            
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password <span style="font-weight: normal; color: #777; font-size: 12px;">(min. 6 karakter)</span></label>
                    <input type="password" id="password" name="password" placeholder="••••••••" minlength="6" required>
                </div>

                <button type="submit" class="btn btn-primary">Registrasi</button>
            </form>

            <div class="form-link">
                Sudah Punya Akun? <a href="login.php">Login</a>
            </div>
        </div>
    </div>

</body>
</html>
