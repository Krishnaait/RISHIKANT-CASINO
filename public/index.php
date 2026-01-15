<?php
$page_title = "Home";
include '../includes/header.php';
?>

<style>
    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, rgba(26, 10, 46, 0.9) 0%, rgba(45, 27, 78, 0.9) 50%, rgba(26, 10, 46, 0.9) 100%),
                    url('/assets/images/hero-banner.webp') center/cover;
        background-attachment: fixed;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 50%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 80%, rgba(0, 208, 132, 0.05) 0%, transparent 50%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        animation: slideUp 0.8s ease;
    }

    .hero h1 {
        font-size: 56px;
        margin-bottom: 16px;
        text-shadow: 0 0 30px rgba(255, 215, 0, 0.5);
    }

    .hero-subtitle {
        font-size: 24px;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 24px;
        font-weight: 500;
    }

    .hero-description {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 32px;
        line-height: 1.8;
    }

    .hero-buttons {
        display: flex;
        gap: 16px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .hero-buttons button {
        padding: 14px 32px;
        font-size: 16px;
        min-width: 180px;
    }

    /* Compliance Box */
    .compliance-highlight {
        background: rgba(255, 215, 0, 0.15);
        border: 2px solid rgba(255, 215, 0, 0.4);
        border-radius: 12px;
        padding: 20px;
        margin: 32px 0;
        text-align: center;
    }

    .compliance-highlight p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.95);
        margin: 0;
        line-height: 1.6;
    }

    .compliance-highlight strong {
        color: #ffd700;
    }

    /* Featured Games Section */
    .featured-games {
        padding: 64px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 48px;
    }

    .section-title h2 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .section-title p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }

    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 24px;
    }

    .game-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .game-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 215, 0, 0.3);
        box-shadow: 0 12px 48px rgba(255, 215, 0, 0.2);
    }

    .game-card-image {
        width: 100%;
        height: 200px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 64px;
        overflow: hidden;
    }

    .game-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .game-card-content {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .game-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 8px;
    }

    .game-card-description {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 12px;
        flex: 1;
    }

    .game-card-badge {
        display: inline-block;
        background: rgba(0, 208, 132, 0.2);
        border: 1px solid rgba(0, 208, 132, 0.5);
        color: #00d084;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .game-card-button {
        width: 100%;
        padding: 10px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #1a0a2e;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .game-card-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }

    /* Why Choose Us Section */
    .why-choose-us {
        padding: 64px 0;
        background: rgba(255, 255, 255, 0.02);
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .feature-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 12px;
        padding: 24px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        border-color: rgba(255, 215, 0, 0.5);
        background: rgba(255, 215, 0, 0.08);
        transform: translateY(-4px);
    }

    .feature-icon {
        font-size: 48px;
        margin-bottom: 16px;
    }

    .feature-card h3 {
        font-size: 18px;
        margin-bottom: 12px;
        color: #ffd700;
    }

    .feature-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }

    /* CTA Section */
    .cta-section {
        padding: 64px 0;
        text-align: center;
    }

    .cta-section h2 {
        font-size: 40px;
        margin-bottom: 16px;
    }

    .cta-section p {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 32px;
    }

    .cta-button {
        padding: 16px 48px;
        font-size: 18px;
        min-width: 240px;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .hero h1 {
            font-size: 32px;
        }

        .hero-subtitle {
            font-size: 18px;
        }

        .section-title h2 {
            font-size: 28px;
        }

        .games-grid {
            grid-template-columns: 1fr;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }

        .cta-section h2 {
            font-size: 28px;
        }

        .hero-buttons {
            flex-direction: column;
        }

        .hero-buttons button {
            min-width: 100%;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>🎰 <?php echo SITE_NAME; ?></h1>
        <p class="hero-subtitle">100% Free Gaming • No Real Money • Entertainment Only</p>
        <p class="hero-description">
            Experience the thrill of casino gaming with virtual coins. Play exciting games, 
            compete with friends, and have unlimited fun. No deposits, no real money involved!
        </p>

        <div class="compliance-highlight">
            <p>
                <strong>⚠️ IMPORTANT NOTICE:</strong> This is a 100% free-to-play entertainment platform. 
                Virtual coins have NO real money value. All games are for entertainment purposes only. 
                Must be 18+ to play.
            </p>
        </div>

        <div class="hero-buttons">
            <button class="btn btn-primary" onclick="window.location.href='/games.php'">
                🎮 Play Now
            </button>
            <button class="btn btn-secondary" onclick="window.location.href='/how-it-works.php'">
                📖 Learn More
            </button>
        </div>
    </div>
</section>

<!-- Featured Games Section -->
<section class="featured-games container">
    <div class="section-title">
        <h2>Featured Games</h2>
        <p>Choose your favorite game and start playing for free</p>
    </div>

    <div class="games-grid">
        <!-- Chicken Game -->
        <div class="game-card">
            <div class="game-card-image">
                <img src="/assets/images/feature_entertainment.png" alt="Chicken Game">
            </div>
            <div class="game-card-content">
                <span class="game-card-badge">🎮 Free-to-Play</span>
                <h3 class="game-card-title">🐔 Chicken Game</h3>
                <p class="game-card-description">
                    Find eggs and avoid bones! Increase your multiplier with each egg found. 
                    Cash out anytime to secure your winnings.
                </p>
                <button class="game-card-button" onclick="window.location.href='/games/chicken.php'">
                    Play Now
                </button>
            </div>
        </div>

        <!-- Dice Game -->
        <div class="game-card">
            <div class="game-card-image">
                <img src="/assets/images/professional_games.webp" alt="Dice Game">
            </div>
            <div class="game-card-content">
                <span class="game-card-badge">🎮 Free-to-Play</span>
                <h3 class="game-card-title">🎲 Dice Game</h3>
                <p class="game-card-description">
                    Predict if the dice will be HIGH or LOW. Quick rounds with instant results. 
                    Win 2x your bet on correct predictions!
                </p>
                <button class="game-card-button" onclick="window.location.href='/games/dice.php'">
                    Play Now
                </button>
            </div>
        </div>

        <!-- Mines Game -->
        <div class="game-card">
            <div class="game-card-image">
                <img src="/assets/images/slots-game.png" alt="Mines Game">
            </div>
            <div class="game-card-content">
                <span class="game-card-badge">🎮 Free-to-Play</span>
                <h3 class="game-card-title">💣 Mines Game</h3>
                <p class="game-card-description">
                    Click safe tiles and avoid mines! Build your multiplier with each safe tile. 
                    Multiple difficulty levels available.
                </p>
                <button class="game-card-button" onclick="window.location.href='/games/mines.php'">
                    Play Now
                </button>
            </div>
        </div>

        <!-- Plinko Game -->
        <div class="game-card">
            <div class="game-card-image">
                <img src="/assets/images/slots-game-bg.png" alt="Plinko Game">
            </div>
            <div class="game-card-content">
                <span class="game-card-badge">🎮 Free-to-Play</span>
                <h3 class="game-card-title">🎯 Plinko Game</h3>
                <p class="game-card-description">
                    Drop balls and watch them bounce! Land on high multiplier slots to win big. 
                    Pure luck and entertainment!
                </p>
                <button class="game-card-button" onclick="window.location.href='/games/plinko.php'">
                    Play Now
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose <?php echo SITE_NAME; ?>?</h2>
            <p>The best free-to-play casino experience</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>100% Free</h3>
                <p>No payments, no subscriptions, no hidden fees. Play completely free with virtual coins.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎮</div>
                <h3>Multiple Games</h3>
                <p>Enjoy a variety of exciting games including Chicken, Dice, Mines, and Plinko.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Fast & Smooth</h3>
                <p>Instant gameplay with smooth animations and quick results. No waiting, pure fun.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Safe & Secure</h3>
                <p>No real money involved. Your data is protected. Entertainment only, no gambling.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Mobile Friendly</h3>
                <p>Play on any device - desktop, tablet, or mobile. Responsive design for all screens.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">✅</div>
                <h3>Fair Games</h3>
                <p>All games use certified random number generators (RNG) for fair and unpredictable outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section container">
    <h2>Ready to Play?</h2>
    <p>Join thousands of players enjoying free entertainment</p>
    <button class="btn btn-primary cta-button" onclick="window.location.href='/games.php'">
        🎰 Start Playing Now
    </button>
</section>

<?php include '../includes/footer.php'; ?>
