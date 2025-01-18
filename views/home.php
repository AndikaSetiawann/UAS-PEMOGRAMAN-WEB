<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
        
    <link href="https://fonts.googleapis.com/css2?family=gg+sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --discord-primary: #5865F2;
            --discord-bg: #36393f;
            --discord-dark: #2f3136;
            --discord-darker: #202225;
            --discord-light: #dcddde;
            --discord-white: #ffffff;
            --nav-height: 64px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'gg sans', sans-serif;
            background-color: var(--discord-bg);
            color: var(--discord-white);
            overflow-x: hidden;
        }

        .featured-hero {
            padding-top: var(--nav-height);
            min-height: 100vh;
            background: linear-gradient(45deg, #5865F2, #7289DA);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .featured-content {
            padding: 4rem 8%;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .featured-title {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: var(--discord-white);
            letter-spacing: -1px;
            line-height: 1.1;
        }

        .featured-description {
            font-size: 1.4rem;
            color: var(--discord-light);
            margin-bottom: 2.5rem;
            max-width: 600px;
            line-height: 1.6;
        }

        .featured-buttons {
            display: flex;
            gap: 1.5rem;
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 28px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
        }

        .btn-primary {
            background: var(--discord-white);
            color: var(--discord-darker);
        }

        .btn-primary:hover {
            background: #f6f6f7;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: var(--discord-darker);
            color: var(--discord-white);
        }

        .btn-secondary:hover {
            background: #36393f;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .content-row {
            padding: 3rem 8%;
            margin-bottom: 2rem;
            background: var(--discord-bg);
        }

        .row-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .row-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--discord-white);
        }

        .see-all {
            color: var(--discord-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .see-all:hover {
            text-decoration: underline;
        }

        .content-slider {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
            padding: 1rem 0;
        }

        .content-card {
            background: var(--discord-dark);
            border-radius: 10px;
            padding: 1rem;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .content-card:hover {
            background: var(--discord-darker);
            transform: translateY(-4px);
        }

        .card-image {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .card-content h3 {
            font-size: 1.1rem;
            margin-bottom: 0.8rem;
            color: var(--discord-white);
            font-weight: 600;
        }

        .card-tags {
            display: flex;
            gap: 0.8rem;
        }

        .tag {
            font-size: 0.8rem;
            color: var(--discord-light);
            background: var(--discord-primary);
            padding: 4px 12px;
            border-radius: 100px;
        }

        @media (max-width: 768px) {
            .featured-title {
                font-size: 3rem;
            }

            .featured-description {
                font-size: 1.1rem;
            }

            .content-slider {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }

            .featured-content {
                padding: 2rem 4%;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="featured-hero">
        <div class="featured-content">
            <h1 class="featured-title">KULINER NUSANTARA</h1>
            <p class="featured-description">Jelajahi keragaman cita rasa Indonesia melalui koleksi makanan dan minuman tradisional terbaik dari Sabang sampai Merauke.</p>
            <div class="featured-buttons">
                <button class="btn btn-primary">Jelajahi</button>
                <button class="btn btn-secondary">Info Lebih Lanjut</button>
            </div>
        </div>
    </div>

    <section class="content-row">
        <div class="row-header">
            <h2>Hidangan Tradisional</h2>
            <a href="?page=makanan" class="see-all">Lihat Semua</a>
        </div>
        <div class="content-slider">
            <?php
            $queryMakanan = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC LIMIT 6";
            $resultMakanan = mysqli_query($conn, $queryMakanan);

            if (mysqli_num_rows($resultMakanan) > 0) {
                $counter = 1;
                while ($makanan = mysqli_fetch_assoc($resultMakanan)) {
            ?>
                    <div class="content-card">
                        <img src="images/makanan/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($makanan['nama_makanan']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($makanan['nama_makanan']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($makanan['daerah_makanan']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>

    <section class="content-row">
        <div class="row-header">
            <h2>Minuman Tradisional</h2>
            <a href="?page=minuman" class="see-all">Lihat Semua</a>
        </div>
        <div class="content-slider">
            <?php
            $queryMinuman = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC LIMIT 6";
            $resultMinuman = mysqli_query($conn, $queryMinuman);

            if (mysqli_num_rows($resultMinuman) > 0) {
                $counter = 1;
                while ($minuman = mysqli_fetch_assoc($resultMinuman)) {
            ?>
                    <div class="content-card">
                        <img src="images/minuman/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($minuman['nama_minuman']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($minuman['daerah_minuman']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>
</body>
</html>