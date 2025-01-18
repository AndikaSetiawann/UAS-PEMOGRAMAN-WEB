<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Minuman Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=gg+sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --discord-primary: #5865F2;
            --discord-bg: #36393f;
            --discord-secondary: #2f3136;
            --discord-text: #dcddde;
            --discord-muted: #72767d;
            --discord-hover: #40444b;
            --discord-danger: #ed4245;
            --transition-speed: 0.2s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'gg sans', 'Noto Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: var(--discord-secondary);
            color: var(--discord-text);
            min-height: 100vh;
            line-height: 1.5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: var(--discord-muted);
            font-size: 1rem;
        }

        .form-card {
            background: var(--discord-bg);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.3s ease;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--discord-text);
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            background: var(--discord-secondary);
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 4px;
            color: var(--discord-text);
            font-family: inherit;
            font-size: 1rem;
            transition: border-color var(--transition-speed) ease, background var(--transition-speed) ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--discord-primary);
            background: var(--discord-hover);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            flex: 1;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            font-family: inherit;
            font-weight: 500;
            font-size: 0.875rem;
            cursor: pointer;
            transition: background var(--transition-speed) ease, transform var(--transition-speed) ease;
        }

        .btn-primary {
            background: var(--discord-primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: #4752c4;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: var(--discord-secondary);
            color: var(--discord-text);
        }

        .btn-secondary:hover {
            background: var(--discord-hover);
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .form-card {
                padding: 1.25rem;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1 class="page-title">Tambah Minuman Tradisional</h1>
            <p class="form-subtitle">Tambahkan minuman baru ke koleksi minuman nusantara</p>
        </div>

        <div class="form-card">
            <form method="post" action="?page=minumanAddProses">
                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="nama_minuman" class="form-input"
                           placeholder="Masukkan nama minuman" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_minuman" class="form-input"
                           placeholder="Masukkan daerah asal" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=minuman'">
                        Batal
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>