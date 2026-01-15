<?php
$page_title = "Games";
include '../includes/header.php';
?>

<style>
    .games-container {
        padding: 48px 0;
    }

    .games-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .games-header h1 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .games-header p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }

    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .game-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .game-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 215, 0, 0.5);
        box-shadow: 0 12px 48px rgba(255, 215, 0, 0.2);
    }

    .game-card-image {
        width: 100%;
        height: 220px;
        background: linear-gradient(135deg, #1a0a2e, #2d1b4e);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    .game-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .game-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .game-card:hover .game-card-overlay {
        opacity: 1;
    }

    .game-card-content {
        padding: 24px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .game-card-title {
        font-size: 20px;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 8px;
    }

    .game-card-description {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 12px;
        flex: 1;
        line-height: 1.6;
    }

    .game-card-stats {
        display: flex;
        gap: 12px;
        margin-bottom: 16px;
        font-size: 12px;
    }

    .stat-item {
        background: rgba(255, 215, 0, 0.1);
        border: 1px solid rgba(255, 215, 0, 0.3);
        padding: 6px 12px;
        border-radius: 6px;
        color: rgba(255, 255, 255, 0.8);
    }

    .game-card-button {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #1a0a2e;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .game-card-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }

    .game-card-button:active {
        transform: translateY(0);
    }

    /* Filter Section */
    .filter-section {
        display: flex;
        gap: 12px;
        margin-bottom: 32px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .filter-btn {
        padding: 8px 16px;
        background: rgba(255, 215, 0, 0.1);
        border: 1px solid rgba(255, 215, 0, 0.3);
        color: rgba(255, 255, 255, 0.8);
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 13px;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: rgba(255, 215, 0, 0.2);
        border-color: #ffd700;
        color: #ffd700;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .games-header h1 {
            font-size: 28px;
        }

        .games-grid {
            grid-template-columns: 1fr;
        }

        .game-card-image {
            height: 180px;
        }

        .game-card-content {
            padding: 16px;
        }

        .game-card-title {
            font-size: 18px;
        }

        .game-card-description {
            font-size: 13px;
        }
    }
</style>

<!-- Games Header -->
<section class="games-container">
    <div class="container">
        <div class="games-header">
            <h1>🎮 All Games</h1>
            <p>Choose your favorite game and start playing for free with virtual coins</p>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <button class="filter-btn active" onclick="filterGames('all')">All Games</button>
            <button class="filter-btn" onclick="filterGames('quick')">Quick Games</button>
            <button class="filter-btn" onclick="filterGames('strategy')">Strategy</button>
            <button class="filter-btn" onclick="filterGames('lucky')">Luck-Based</button>
        </div>

        <!-- Games Grid -->
        <div class="games-grid">
            <!-- Chicken Game -->
            <div class="game-card" data-category="strategy">
                <div class="game-card-image">
                    <img src="/assets/images/feature_entertainment.png" alt="Chicken Game">
                    <div class="game-card-overlay">
                        <span style="color: #ffd700; font-weight: bold;">Click to Play →</span>
                    </div>
                </div>
                <div class="game-card-content">
                    <h3 class="game-card-title">🐔 Chicken Game</h3>
                    <p class="game-card-description">
                        Find eggs and avoid bones! Each egg increases your multiplier. 
                        Cash out anytime to secure your winnings before hitting a bone.
                    </p>
                    <div class="game-card-stats">
                        <span class="stat-item">⏱️ 2-5 min</span>
                        <span class="stat-item">📊 Medium</span>
                        <span class="stat-item">🎯 Strategy</span>
                    </div>
                    <button class="game-card-button" onclick="window.location.href='/games/chicken.php'">
                        Play Now
                    </button>
                </div>
            </div>

            <!-- Dice Game -->
            <div class="game-card" data-category="quick lucky">
                <div class="game-card-image">
                    <img src="/assets/images/professional_games.webp" alt="Dice Game">
                    <div class="game-card-overlay">
                        <span style="color: #ffd700; font-weight: bold;">Click to Play →</span>
                    </div>
                </div>
                <div class="game-card-content">
                    <h3 class="game-card-title">🎲 Dice Game</h3>
                    <p class="game-card-description">
                        Predict if the dice will be HIGH or LOW. Quick rounds with instant results. 
                        Win 2x your bet on correct predictions!
                    </p>
                    <div class="game-card-stats">
                        <span class="stat-item">⏱️ 1-2 min</span>
                        <span class="stat-item">📊 Easy</span>
                        <span class="stat-item">🎯 Luck</span>
                    </div>
                    <button class="game-card-button" onclick="window.location.href='/games/dice.php'">
                        Play Now
                    </button>
                </div>
            </div>

            <!-- Mines Game -->
            <div class="game-card" data-category="strategy">
                <div class="game-card-image">
                    <img src="/assets/images/slots-game.png" alt="Mines Game">
                    <div class="game-card-overlay">
                        <span style="color: #ffd700; font-weight: bold;">Click to Play →</span>
                    </div>
                </div>
                <div class="game-card-content">
                    <h3 class="game-card-title">💣 Mines Game</h3>
                    <p class="game-card-description">
                        Click safe tiles and avoid mines! Build your multiplier with each safe tile. 
                        Multiple difficulty levels for different skill levels.
                    </p>
                    <div class="game-card-stats">
                        <span class="stat-item">⏱️ 3-10 min</span>
                        <span class="stat-item">📊 Hard</span>
                        <span class="stat-item">🎯 Strategy</span>
                    </div>
                    <button class="game-card-button" onclick="window.location.href='/games/mines.php'">
                        Play Now
                    </button>
                </div>
            </div>

            <!-- Plinko Game -->
            <div class="game-card" data-category="quick lucky">
                <div class="game-card-image">
                    <img src="/assets/images/slots-game-bg.png" alt="Plinko Game">
                    <div class="game-card-overlay">
                        <span style="color: #ffd700; font-weight: bold;">Click to Play →</span>
                    </div>
                </div>
                <div class="game-card-content">
                    <h3 class="game-card-title">🎯 Plinko Game</h3>
                    <p class="game-card-description">
                        Drop balls and watch them bounce! Land on high multiplier slots to win big. 
                        Pure luck and entertainment!
                    </p>
                    <div class="game-card-stats">
                        <span class="stat-item">⏱️ 1-3 min</span>
                        <span class="stat-item">📊 Easy</span>
                        <span class="stat-item">🎯 Luck</span>
                    </div>
                    <button class="game-card-button" onclick="window.location.href='/games/plinko.php'">
                        Play Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function filterGames(category) {
        const cards = document.querySelectorAll('.game-card');
        const buttons = document.querySelectorAll('.filter-btn');

        // Update active button
        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');

        // Filter cards
        cards.forEach(card => {
            if (category === 'all') {
                card.style.display = 'flex';
            } else {
                const cardCategories = card.getAttribute('data-category').split(' ');
                if (cardCategories.includes(category)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            }
        });
    }
</script>

<?php include '../includes/footer.php'; ?>
