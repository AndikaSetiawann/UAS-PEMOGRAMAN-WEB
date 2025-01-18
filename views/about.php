<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=gg+sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --discord-primary: #5865F2;
            --discord-bg: #36393f;
            --discord-dark: #2f3136;
            --discord-darker: #202225;
            --discord-light: #dcddde;
            --discord-white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'gg sans', sans-serif;
            background-color: var(--discord-bg);
            color: var(--discord-light);
            padding-top: 64px;
        }

        .about-hero {
            background: linear-gradient(45deg, #5865F2, #7289DA);
            padding: 6rem 2rem;
            text-align: center;
        }

        .about-hero h1 {
            color: var(--discord-white);
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .about-hero p {
            color: var(--discord-white);
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section {
            margin-bottom: 4rem;
        }

        .about-section h2 {
            color: var(--discord-white);
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .about-section p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .about-card {
            background: var(--discord-dark);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
        }

        .about-card svg {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
        }

        .about-card h3 {
            color: var(--discord-white);
            margin-bottom: 1rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-member {
            background: var(--discord-dark);
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
        }

        .team-member svg {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 1rem;
            background: var(--discord-primary);
        }

        .team-member h3 {
            color: var(--discord-white);
            margin-bottom: 0.5rem;
        }

        .team-member p {
            color: var(--discord-light);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2.5rem;
            }

            .about-hero p {
                font-size: 1rem;
            }

            .about-content {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="about-hero">
        <h1>Tentang Kuliner Nusantara</h1>
        <p>Melestarikan dan memperkenalkan kekayaan kuliner Indonesia kepada dunia</p>
    </div>

    <div class="about-content">
        <div class="about-section">
            <h2>Visi Kami</h2>
            <p>Menjadi platform terdepan dalam mempromosikan dan melestarikan warisan kuliner Indonesia, 
               sambil menghubungkan pecinta makanan dengan kekayaan rasa Nusantara.</p>
        </div>

        <div class="about-section">
            <h2>Nilai-Nilai Kami</h2>
            <div class="about-grid">
                <div class="about-card">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" fill="#FF5733" />
                    </svg>
                    <h3>Autentik</h3>
                    <p>Mempertahankan keaslian resep dan cara memasak tradisional</p>
                </div>
                <div class="about-card">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" fill="#5865F2" />
                    </svg>
                    <h3>Kualitas</h3>
                    <p>Mengutamakan kualitas dalam setiap aspek kuliner</p>
                </div>
                <div class="about-card">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2 L15 8 L22 9 L17 14 L18 21 L12 18 L6 21 L7 14 L2 9 L9 8 Z" fill="#7289DA" />
                    </svg>
                    <h3>Inovasi</h3>
                    <p>Mengembangkan cara modern dalam menyajikan kuliner tradisional</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" fill="#7289DA" />
                        <text x="12" y="16" text-anchor="middle" fill="#ffffff" font-size="12">AS</text>
                    </svg>
                    <h3>Andika Setiawan</h3>
                    <p>Founder & CEO</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
