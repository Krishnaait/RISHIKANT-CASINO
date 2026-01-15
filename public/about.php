<?php
$page_title = "About Us";
include '../includes/header.php';
?>

<style>
    .about-container {
        padding: 48px 0;
    }

    .about-hero {
        text-align: center;
        margin-bottom: 48px;
    }

    .about-hero h1 {
        font-size: 40px;
        margin-bottom: 16px;
    }

    .about-hero p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
        max-width: 600px;
        margin: 0 auto;
    }

    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
        align-items: center;
        margin-bottom: 48px;
    }

    .about-text h2 {
        font-size: 32px;
        margin-bottom: 16px;
        color: #ffd700;
    }

    .about-text p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin-bottom: 16px;
    }

    .about-image {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 300px;
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        overflow: hidden;
    }

    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Mission & Vision */
    .mission-vision {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin-bottom: 48px;
    }

    .mission-card,
    .vision-card {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 24px;
    }

    .mission-card h3,
    .vision-card h3 {
        font-size: 20px;
        color: #ffd700;
        margin-bottom: 12px;
    }

    .mission-card p,
    .vision-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
    }

    /* Values Section */
    .values-section {
        margin-bottom: 48px;
    }

    .values-section h2 {
        text-align: center;
        font-size: 32px;
        margin-bottom: 32px;
        color: #ffd700;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .value-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
    }

    .value-icon {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .value-card h4 {
        font-size: 16px;
        color: #ffd700;
        margin-bottom: 8px;
    }

    .value-card p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }

    /* Company Info */
    .company-info {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 32px;
        margin-bottom: 32px;
    }

    .company-info h2 {
        font-size: 24px;
        color: #ffd700;
        margin-bottom: 20px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .info-item {
        background: rgba(0, 0, 0, 0.3);
        border-left: 3px solid #ffd700;
        padding: 16px;
        border-radius: 6px;
    }

    .info-item strong {
        color: #ffd700;
        display: block;
        margin-bottom: 4px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .info-item p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
        line-height: 1.6;
    }

    /* Compliance */
    .compliance-section {
        background: rgba(0, 208, 132, 0.1);
        border: 2px solid rgba(0, 208, 132, 0.3);
        border-radius: 12px;
        padding: 24px;
        text-align: center;
    }

    .compliance-section h3 {
        color: #00d084;
        margin-bottom: 12px;
    }

    .compliance-section p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .about-content {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .about-text h2 {
            font-size: 24px;
        }

        .about-hero h1 {
            font-size: 28px;
        }

        .mission-vision {
            grid-template-columns: 1fr;
        }

        .values-grid {
            grid-template-columns: 1fr;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- About Hero -->
<section class="about-container">
    <div class="container">
        <div class="about-hero">
            <h1>About <?php echo SITE_NAME; ?></h1>
            <p>
                Your ultimate destination for free-to-play casino entertainment. 
                We're committed to providing a safe, fair, and enjoyable gaming experience.
            </p>
        </div>

        <!-- About Content -->
        <div class="about-content">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>
                    <?php echo SITE_NAME; ?> was founded with a simple mission: to bring the excitement 
                    and thrill of casino gaming to everyone, completely free and without any real money involvement.
                </p>
                <p>
                    We believe that entertainment should be accessible to all, which is why we've created a platform 
                    where players can enjoy authentic casino games using virtual coins. No deposits, no real money, 
                    just pure fun and excitement.
                </p>
                <p>
                    Our team is dedicated to continuously improving our games, ensuring fair play, and providing 
                    the best user experience possible. We're committed to responsible gaming and player safety.
                </p>
            </div>
            <div class="about-image">
                <img src="../assets/images/hero-casino.png" alt="About Us">
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="mission-vision">
            <div class="mission-card">
                <h3>🎯 Our Mission</h3>
                <p>
                    To provide a world-class, free-to-play casino gaming platform that delivers 
                    entertainment, excitement, and engagement to players worldwide, with a strong 
                    commitment to fair play and responsible gaming.
                </p>
            </div>
            <div class="vision-card">
                <h3>🌟 Our Vision</h3>
                <p>
                    To become the leading free-to-play casino entertainment platform globally, 
                    known for innovation, fairness, and player satisfaction, while maintaining 
                    the highest standards of integrity and responsibility.
                </p>
            </div>
        </div>

        <!-- Values Section -->
        <div class="values-section">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🎮</div>
                    <h4>Entertainment</h4>
                    <p>We prioritize fun and engagement above all else, ensuring every game is enjoyable.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">✅</div>
                    <h4>Fairness</h4>
                    <p>All games use certified RNG technology for truly random and fair outcomes.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🔒</div>
                    <h4>Security</h4>
                    <p>Your data and privacy are protected with industry-leading security measures.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💚</div>
                    <h4>Responsibility</h4>
                    <p>We promote responsible gaming and provide resources for those who need support.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🚀</div>
                    <h4>Innovation</h4>
                    <p>We continuously improve and add new games to keep the experience fresh and exciting.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">👥</div>
                    <h4>Community</h4>
                    <p>We foster a positive, inclusive community where all players feel welcome.</p>
                </div>
            </div>
        </div>

        <!-- Company Information -->
        <div class="company-info">
            <h2>Company Information</h2>
            <div class="info-grid">
                <div class="info-item">
                    <strong>Company Name</strong>
                    <p><?php echo COMPANY_NAME; ?></p>
                </div>
                <div class="info-item">
                    <strong>CIN</strong>
                    <p><?php echo COMPANY_CIN; ?></p>
                </div>
                <div class="info-item">
                    <strong>GST Number</strong>
                    <p><?php echo COMPANY_GST; ?></p>
                </div>
                <div class="info-item">
                    <strong>Address</strong>
                    <p><?php echo COMPANY_ADDRESS; ?></p>
                </div>
                <div class="info-item">
                    <strong>Email</strong>
                    <p><a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;"><?php echo COMPANY_EMAIL; ?></a></p>
                </div>
                <div class="info-item">
                    <strong>Website</strong>
                    <p><a href="/" style="color: #ffd700;">www.rishikantcasino.com</a></p>
                </div>
            </div>
        </div>

        <!-- Compliance Notice -->
        <div class="compliance-section">
            <h3>⚖️ Legal Compliance</h3>
            <p>
                <?php echo SITE_NAME; ?> is a 100% free-to-play entertainment platform. 
                We comply with all applicable laws and regulations. Virtual coins have NO real money value. 
                All games are for entertainment purposes only. Players must be 18+ to use this platform.
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
