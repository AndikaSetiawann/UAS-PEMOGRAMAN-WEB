<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=gg+sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --discord-primary: #5865F2;
            --discord-bg: #36393f;
            --discord-dark: #2f3136;
            --discord-darker: #202225;
            --discord-light: #dcddde;
            --discord-white: #ffffff;
            --discord-success: #3ba55c;
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

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info h1 {
            color: var(--discord-white);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-info p {
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .info-item img {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
        }

        .contact-form {
            background: var(--discord-dark);
            padding: 2rem;
            border-radius: 8px;
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

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem;
            background: var(--discord-darker);
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 3px;
            color: var(--discord-white);
            font-size: 1rem;
            transition: border-color 0.2s ease;
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .form-input:focus,
        .form-textarea:focus {
            border-color: var(--discord-primary);
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: var(--discord-primary);
            color: var(--discord-white);
            border: none;
            border-radius: 3px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn-submit:hover {
            background: #4752c4;
        }

        .success-message {
            background: rgba(59, 165, 92, 0.1);
            color: var(--discord-success);
            padding: 1rem;
            border-radius: 3px;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-container {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="contact-container">
        <div class="contact-grid">
            <div class="contact-info">
                <h1>Hubungi Kami</h1>
                <p>Kami senang mendengar dari Anda! Silakan hubungi kami untuk pertanyaan, saran, atau kolaborasi.</p>
                
                <div class="info-item">
                    <img src="images/icons/location.svg" alt="Location">
                    <p>Jl. Kuliner Indonesia No. 123, Jakarta</p>
                </div>
                
                <div class="info-item">
                    <img src="images/icons/email.svg" alt="Email">
                    <p>info@kulinernusantara.com</p>
                </div>
                
                <div class="info-item">
                    <img src="images/icons/phone.svg" alt="Phone">
                    <p>+62 21 1234 5678</p>
                </div>
            </div>

            <div class="contact-form">
                <?php if(isset($success)): ?>
                    <div class="success-message">
                        Pesan Anda telah berhasil dikirim!
                    </div>
                <?php endif; ?>

                <form action="contact_process.php" method="POST">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Subjek</label>
                        <input type="text" name="subject" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Pesan</label>
                        <textarea name="message" class="form-textarea" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>