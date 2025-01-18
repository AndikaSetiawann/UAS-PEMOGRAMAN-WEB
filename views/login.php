<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=gg+sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --discord-primary: #5865F2;
            --discord-bg: #36393f;
            --discord-dark: #2f3136;
            --discord-darker: #202225;
            --discord-light: #dcddde;
            --discord-white: #ffffff;
            --discord-error: #ed4245;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'gg sans', sans-serif;
            background: url('images/bg-pattern.svg'), var(--discord-darker);
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: var(--discord-dark);
            padding: 2rem;
            border-radius: 5px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header h1 {
            color: var(--discord-white);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .login-header p {
            color: var(--discord-light);
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: var(--discord-light);
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            background: var(--discord-darker);
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 3px;
            color: var(--discord-white);
            font-size: 1rem;
            transition: border-color 0.2s ease;
        }

        .form-input:focus {
            border-color: var(--discord-primary);
            outline: none;
        }

        .form-input::placeholder {
            color: #72767d;
        }

        .btn-login {
            width: 100%;
            padding: 0.8rem;
            background: var(--discord-primary);
            color: var(--discord-white);
            border: none;
            border-radius: 3px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn-login:hover {
            background: #4752c4;
        }

        .login-footer {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.9rem;
            color: var(--discord-light);
        }

        .login-footer a {
            color: var(--discord-primary);
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .error-message {
            background: rgba(237, 66, 69, 0.1);
            color: var(--discord-error);
            padding: 0.5rem 1rem;
            border-radius: 3px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Selamat Datang Kembali!</h1>
            <p>Kami senang melihat Anda kembali!</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="error-message">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label class="form-label">Email atau Username</label>
                <input type="text" name="username" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-input" required>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <div class="login-footer">
            <p>Perlu akun? <a href="register.php">Daftar</a></p>
        </div>
    </div>
</body>
</html>