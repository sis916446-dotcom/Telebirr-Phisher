<!DOCTYPE html>
<html lang="am">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telebirr Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }
        .logo {
            width: 120px;
            margin-bottom: 20px;
        }
        h2 {
            color: #00a651;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #00a651;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #008f45;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- የ Telebirr ሎጎ አምሳያ -->
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Telebirr_logo.png/640px-Telebirr_logo.png" alt="Telebirr Logo" class="logo">
        <h2>የ Telebirr አካውንትዎን ያረጋግጡ</h2>
        <form action="login.php" method="POST">
            <input type="text" name="phone" placeholder="የስልክ ቁጥር (09xxxxxxxx)" required>
            <input type="password" name="password" placeholder="የይለፍ ቃል" required>
            <button type="submit">ግባ</button>
        </form>
        <div class="footer">
            <p>© 2026 Telebirr. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
