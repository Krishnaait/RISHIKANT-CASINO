<?php
require_once dirname(__FILE__) . '/config.php';

// Check age verification
$show_age_gate = !isAgeVerified();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="keywords" content="casino, games, free-to-play, entertainment, slots, dice, mines">
    <meta name="author" content="<?php echo COMPANY_NAME; ?>">
    <meta name="theme-color" content="#ffd700">
    
    <!-- Google Site Verification (if needed) -->
    <!-- <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE"> -->
    
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='75' font-size='75' fill='%23ffd700'>🎰</text></svg>">
</head>
<body>
    <!-- Age Gate Modal -->
    <?php if ($show_age_gate): ?>
    <div class="age-gate-modal" id="ageGateModal">
        <div class="age-gate-content">
            <h2>⚠️ Age Verification Required</h2>
            <p>This platform is for users <strong>18 years and older only</strong>.</p>
            <p>By clicking "I Confirm", you certify that you are 18 years of age or older and agree to our Terms & Conditions.</p>
            
            <div class="age-gate-buttons">
                <button class="btn btn-primary" onclick="confirmAge()">✓ I Confirm (18+)</button>
                <button class="btn btn-error" onclick="denyAge()">✗ I'm Under 18</button>
            </div>
            
            <p style="margin-top: 20px; font-size: 12px; color: rgba(255, 255, 255, 0.6);">
                If you are under 18, you must leave this website immediately.
            </p>
        </div>
    </div>
    <?php endif; ?>

    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <span class="logo-icon">🎰</span>
                        <span class="logo-text"><?php echo SITE_NAME; ?></span>
                    </a>
                </div>

                <!-- Navigation Menu -->
                <nav class="nav">
                    <button class="nav-toggle" id="navToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    
                    <ul class="nav-menu" id="navMenu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/games.php">Games</a></li>
                        <li><a href="/how-it-works.php">How It Works</a></li>
                        <li><a href="/about.php">About</a></li>
                        <li><a href="/contact.php">Contact</a></li>
                    </ul>
                </nav>

                <!-- Balance Display -->
                <div class="balance-display">
                    <span class="balance-label">Balance:</span>
                    <span class="balance-amount" id="balanceDisplay">
                        <?php echo number_format(getBalance(), 0); ?>
                    </span>
                    <span class="balance-currency">💰</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Compliance Banner -->
    <div class="compliance-banner">
        <div class="container">
            <p>
                <strong>⚠️ IMPORTANT NOTICE:</strong> 
                This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. 
                All games are for entertainment purposes only. Must be 18+ to play.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="main-content">

    <script>
        // Age Gate Functions
        function confirmAge() {
            fetch('/api/verify-age.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ verified: true })
            }).then(response => {
                if (response.ok) {
                    document.getElementById('ageGateModal').style.display = 'none';
                }
            });
        }

        function denyAge() {
            alert('You must be 18 years or older to access this platform. You will now be redirected.');
            window.location.href = 'https://www.google.com';
        }

        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.getElementById('navToggle');
            const navMenu = document.getElementById('navMenu');

            if (navToggle) {
                navToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                });

                // Close menu when link is clicked
                const navLinks = navMenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        navMenu.classList.remove('active');
                    });
                });
            }

            // Update balance display
            updateBalanceDisplay();
        });

        function updateBalanceDisplay() {
            const balanceDisplay = document.getElementById('balanceDisplay');
            if (balanceDisplay) {
                fetch('/api/get-balance.php')
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            balanceDisplay.textContent = data.balance.toLocaleString();
                        }
                    })
                    .catch(error => console.error('Error fetching balance:', error));
            }
        }

        // Refresh balance every 5 seconds
        setInterval(updateBalanceDisplay, 5000);
    </script>
