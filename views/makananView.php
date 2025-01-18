<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=gg+sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --discord-primary: #5865F2;
            --discord-bg: #36393f;
            --discord-dark: #2f3136;
            --discord-darker: #202225;
            --discord-light: #dcddde;
            --discord-white: #ffffff;
            --nav-height: 64px;
            --card-hover-scale: 1.04;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'gg sans', sans-serif;
            background-color: var(--discord-bg);
            color: var(--discord-light);
            line-height: 1.5;
            overflow-x: hidden;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--discord-darker);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--discord-dark);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3E3E3E;
        }

        .container {
            padding: 2rem 8%;
            margin-top: 2rem;
            min-height: 100vh;
            background: linear-gradient(180deg, #404EED 0%, var(--discord-bg) 25%);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            padding: 2.5rem;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(64, 78, 237, 0.8) 0%, rgba(47, 49, 54, 0.4) 100%);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .page-title {
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            background: linear-gradient(to right, var(--discord-white), #99AAB5);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: titleGlow 3s ease-in-out infinite;
        }

        @keyframes titleGlow {
            0%, 100% {
                filter: brightness(100%);
            }
            50% {
                filter: brightness(120%);
            }
        }

        .add-button {
            background: var(--discord-primary);
            color: var(--discord-white);
            padding: 1rem 2rem;
            border-radius: 500px;
            text-decoration: none;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(88, 101, 242, 0.3);
        }

        .add-button:hover {
            background: #4752c4;
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 6px 16px rgba(88, 101, 242, 0.4);
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2.5rem;
            padding: 1rem 0;
        }

        .content-card {
            background: rgba(47, 49, 54, 0.6);
            border-radius: 12px;
            overflow: hidden;
            transition: all var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
            padding: 1.5rem;
            position: relative;
            cursor: pointer;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 12px;
            background: linear-gradient(45deg, rgba(88, 101, 242, 0.1), transparent);
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
        }

        .content-card:hover {
            background: rgba(47, 49, 54, 0.9);
            transform: translateY(-8px) scale(var(--card-hover-scale));
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .content-card:hover::before {
            opacity: 1;
        }

        .card-image {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: transform var(--transition-speed) ease;
        }

        .content-card:hover .card-image {
            transform: scale(1.05);
        }

        .card-content {
            padding: 0.5rem 0;
        }

        .card-title {
            margin: 0 0 1rem;
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--discord-white);
            transition: color var(--transition-speed) ease;
        }

        .content-card:hover .card-title {
            color: var(--discord-primary);
        }

        .card-location {
            color: var(--discord-light);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            background: rgba(32, 34, 37, 0.6);
            display: inline-block;
            padding: 6px 14px;
            border-radius: 100px;
            transition: all var(--transition-speed) ease;
            backdrop-filter: blur(4px);
        }

        .content-card:hover .card-location {
            background: var(--discord-primary);
            color: var(--discord-white);
            transform: scale(1.05);
        }

        .card-actions {
            display: flex;
            gap: 1rem;
            opacity: 0.9;
            transform: translateY(10px);
            transition: all var(--transition-speed) ease;
        }

        .content-card:hover .card-actions {
            opacity: 1;
            transform: translateY(0);
        }

        .action-button {
            padding: 0.8rem 1.5rem;
            border-radius: 500px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
            flex: 1;
            text-align: center;
        }

        .edit-button {
            background: rgba(255, 255, 255, 0.1);
            color: var(--discord-white);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .edit-button:hover {
            background: var(--discord-primary);
            transform: scale(1.05);
            border-color: var(--discord-primary);
        }

        .delete-button {
            background: #ED4245;
            color: var(--discord-white);
            position: relative;
            overflow: hidden;
        }

        .delete-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .delete-button:hover::before {
            left: 100%;
        }

        .delete-button:hover {
            background: #c93437;
            transform: scale(1.05);
        }

        .total-items {
            color: var(--discord-light);
            font-size: 1rem;
            text-align: right;
            margin-top: 3rem;
            padding: 1.5rem;
            background: rgba(47, 49, 54, 0.6);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            transition: all var(--transition-speed) ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .total-items:hover {
            background: rgba(47, 49, 54, 0.8);
            transform: translateY(-2px);
        }

        /* Media Queries */
        @media (max-width: 1200px) {
            .container {
                padding: 2rem 6%;
            }
            .content-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem 4%;
            }
            .page-header {
                flex-direction: column;
                gap: 1.5rem;
                text-align: center;
                padding: 2rem;
            }
            .page-title {
                font-size: 2.5rem;
            }
            .content-grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 1.5rem;
            }
            .card-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem 3%;
            }
            .page-title {
                font-size: 2rem;
            }
            .content-grid {
                grid-template-columns: 1fr;
            }
            .add-button {
                padding: 0.8rem 1.5rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Makanan Tradisional</h1>
            <a href="?page=makananAdd" class="add-button">+ Tambah Makanan</a>
        </div>

        <div class="content-grid">
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;

            while ($data = mysqli_fetch_array($sql)) { ?>
                <div class="content-card">
                    <img src="images/makanan/<?= $nomor ?>.jpg" alt="<?= htmlspecialchars($data['nama_makanan']) ?>" class="card-image" loading="lazy">
                    <div class="card-content">
                        <h3 class="card-title"><?= htmlspecialchars($data['nama_makanan']) ?></h3>
                        <div class="card-location"><?= htmlspecialchars($data['daerah_makanan']) ?></div>
                        <div class="card-actions">
                            <a href="?page=makananUpdate&id=<?= $data['id_makanan'] ?>" class="action-button edit-button">Edit</a>
                            <a href="?page=makananDelete&id=<?= $data['id_makanan'] ?>" 
                               onclick="return confirm('Yakin ingin menghapus data ini?');" 
                               class="action-button delete-button">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php
                $nomor++;
            } ?>
        </div>

        <div class="total-items">
            Total Makanan: <?= mysqli_num_rows($sql) ?>
        </div>
    </div>
</body>
</html>