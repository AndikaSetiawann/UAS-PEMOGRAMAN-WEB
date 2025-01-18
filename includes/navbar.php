<?php
// Define the navbar height as a PHP variable if needed elsewhere
$navHeight = "60px";
?>
<style>
    :root {
        --nav-height: 60px;
        --discord-darker: #202225;
        --discord-dark: #2f3136;
        --discord-light: #b9bbbe;
        --discord-white: #ffffff;
        --discord-primary: #5865F2;
    }

    /* Reset margin and padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        padding-top: var(--nav-height);
        min-height: 100vh;
    }

    .navbar {
        background: var(--discord-darker);
        padding: 0.8rem 2rem;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: var(--nav-height);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
    }

    .nav-left {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .nav-brand {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        color: var(--discord-white);
        font-weight: 700;
        font-size: 1.2rem;
        text-decoration: none;
    }

    .nav-logo {
        max-height: 40px; /* Ubah ukuran logo di sini */
        width: auto;
    }

    .nav-links {
        display: flex;
        gap: 1.5rem;
    }

    .nav-links a {
        color: var(--discord-light);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.95rem;
        transition: color 0.2s ease;
        padding: 0.5rem 0.8rem;
        border-radius: 4px;
    }

    .nav-links a:hover {
        color: var(--discord-white);
        background: rgba(255,255,255,0.1);
    }

    .btn-login {
        background: var(--discord-primary);
        color: var(--discord-white);
        padding: 0.5rem 1.2rem;
        border-radius: 20px;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }

    .btn-login:hover {
        background: #4752c4;
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }
        
        .navbar {
            padding: 0.8rem 1rem;
        }
    }
</style>

<nav class="navbar">
    <div class="nav-left">
        <a href="index.php" class="nav-brand">
            <img src="images/img/foto.png" alt="logo" class="nav-logo">
            Kuliner Nusantara
        </a>
        <div class="nav-links">
            <a href="index.php">Beranda</a>
            <a href="?page=makanan">Makanan</a>
            <a href="?page=minuman">Minuman</a>
            <a href="?page=about">Tentang</a>
            <a href="?page=contact">Kontak</a>
        </div>
    </div>
    <div class="nav-right">
        <a href="?page=login" class="btn btn-login">Masuk</a>
    </div>
</nav>
