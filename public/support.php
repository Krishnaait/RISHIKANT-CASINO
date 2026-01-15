<?php
$page_title = "Support & Help";
include '../includes/header.php';
?>

<style>
    .support-container {
        padding: 48px 0;
    }

    .support-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .support-header h1 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .support-header p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }

    .support-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
        margin-bottom: 48px;
    }

    .support-card {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 24px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .support-card:hover {
        transform: translateY(-4px);
        border-color: #ffd700;
        box-shadow: 0 8px 24px rgba(255, 215, 0, 0.2);
    }

    .support-card h3 {
        font-size: 20px;
        color: #ffd700;
        margin-bottom: 12px;
    }

    .support-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }

    .support-card-icon {
        font-size: 40px;
        margin-bottom: 12px;
    }

    /* Accordion */
    .accordion-section {
        margin-bottom: 32px;
    }

    .accordion-section h2 {
        font-size: 24px;
        color: #ffd700;
        margin-bottom: 16px;
        border-bottom: 2px solid rgba(255, 215, 0, 0.2);
        padding-bottom: 12px;
    }

    .accordion-item {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 8px;
        margin-bottom: 12px;
        overflow: hidden;
    }

    .accordion-header {
        padding: 16px;
        background: rgba(255, 215, 0, 0.08);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }

    .accordion-header:hover {
        background: rgba(255, 215, 0, 0.12);
    }

    .accordion-header h4 {
        font-size: 15px;
        color: #ffd700;
        margin: 0;
    }

    .accordion-toggle {
        font-size: 18px;
        color: #ffd700;
        transition: transform 0.3s ease;
    }

    .accordion-item.active .accordion-toggle {
        transform: rotate(180deg);
    }

    .accordion-content {
        padding: 0 16px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .accordion-item.active .accordion-content {
        padding: 16px;
        max-height: 500px;
    }

    .accordion-content p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin: 0 0 12px 0;
    }

    .accordion-content ul {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin: 12px 0;
        padding-left: 24px;
    }

    .accordion-content li {
        margin-bottom: 8px;
    }

    .accordion-content strong {
        color: #ffd700;
    }

    /* Contact Section */
    .contact-section {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 32px;
        text-align: center;
    }

    .contact-section h2 {
        font-size: 28px;
        color: #ffd700;
        margin-bottom: 16px;
    }

    .contact-section p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin-bottom: 16px;
    }

    .contact-section a {
        color: #ffd700;
        text-decoration: none;
        font-weight: 600;
    }

    .contact-section a:hover {
        text-decoration: underline;
    }

    .contact-buttons {
        display: flex;
        gap: 16px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 24px;
    }

    .contact-btn {
        padding: 12px 24px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #1a0a2e;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .contact-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }

    @media (max-width: 767px) {
        .support-header h1 {
            font-size: 28px;
        }

        .support-grid {
            grid-template-columns: 1fr;
        }

        .accordion-section h2 {
            font-size: 20px;
        }

        .contact-buttons {
            flex-direction: column;
        }

        .contact-btn {
            width: 100%;
        }
    }
</style>

<section class="support-container">
    <div class="container">
        <div class="support-header">
            <h1>🆘 Help & Support</h1>
            <p>Find answers to your questions and get support when you need it</p>
        </div>

        <!-- Quick Support Cards -->
        <div class="support-grid">
            <div class="support-card" onclick="scrollToSection('getting-started')">
                <div class="support-card-icon">🎮</div>
                <h3>Getting Started</h3>
                <p>Learn how to play games, understand virtual coins, and get started in minutes.</p>
            </div>

            <div class="support-card" onclick="scrollToSection('account-balance')">
                <div class="support-card-icon">💰</div>
                <h3>Account & Balance</h3>
                <p>Questions about your balance, virtual coins, and account management.</p>
            </div>

            <div class="support-card" onclick="scrollToSection('games')">
                <div class="support-card-icon">🎲</div>
                <h3>Games</h3>
                <p>Learn how each game works, rules, odds, and strategies.</p>
            </div>

            <div class="support-card" onclick="scrollToSection('technical')">
                <div class="support-card-icon">⚙️</div>
                <h3>Technical Issues</h3>
                <p>Troubleshooting for technical problems and browser compatibility.</p>
            </div>

            <div class="support-card" onclick="scrollToSection('security')">
                <div class="support-card-icon">🔒</div>
                <h3>Security & Privacy</h3>
                <p>Information about data protection and responsible gaming.</p>
            </div>

            <div class="support-card" onclick="scrollToSection('contact')">
                <div class="support-card-icon">📧</div>
                <h3>Contact Us</h3>
                <p>Reach out to our support team for additional assistance.</p>
            </div>
        </div>

        <!-- Getting Started -->
        <div class="accordion-section" id="getting-started">
            <h2>🎮 Getting Started</h2>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>How do I start playing?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>Getting started is easy:</p>
                    <ul>
                        <li>Visit our <a href="/" style="color: #ffd700;">homepage</a></li>
                        <li>Click "Play Now" to go to the games section</li>
                        <li>Choose your favorite game</li>
                        <li>You'll receive free virtual coins to start playing</li>
                        <li>Enjoy the games!</li>
                    </ul>
                    <p>No registration, login, or real money required!</p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Do I need to create an account?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        No! <?php echo SITE_NAME; ?> is completely free and requires no account creation, 
                        login, or registration. Simply visit the site and start playing immediately.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>What are virtual coins?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Virtual coins are provided for entertainment purposes only. They have NO real monetary value 
                        and cannot be converted to real currency, withdrawn, or cashed out. They exist only within our platform 
                        for playing games.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Is this platform safe?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Yes! We use industry-standard security measures including SSL encryption, secure data storage, 
                        and regular security audits. Your data is protected and your privacy is our priority.
                    </p>
                </div>
            </div>
        </div>

        <!-- Account & Balance -->
        <div class="accordion-section" id="account-balance">
            <h2>💰 Account & Balance</h2>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>How do I check my balance?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Your current balance is displayed in the top-right corner of the header on every page. 
                        It updates automatically after each game.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>What happens if I run out of coins?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        If your balance reaches zero, your coins are reset to a starting amount so you can continue playing. 
                        Virtual coins are unlimited and reset periodically.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Can I withdraw my coins or convert them to real money?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        <strong>No.</strong> Virtual coins cannot be withdrawn, converted to real currency, 
                        or used for any real-world transactions. They are for entertainment purposes only and exist 
                        exclusively within our platform.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Are there any hidden fees or charges?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        No! <?php echo SITE_NAME; ?> is 100% free. There are no hidden fees, charges, 
                        subscriptions, or payments of any kind. Everything is completely free.
                    </p>
                </div>
            </div>
        </div>

        <!-- Games -->
        <div class="accordion-section" id="games">
            <h2>🎲 Games</h2>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>What games are available?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        We currently offer 4 exciting games:
                    </p>
                    <ul>
                        <li><strong>Chicken Game:</strong> Find eggs and avoid bones to build multipliers</li>
                        <li><strong>Dice Game:</strong> Predict HIGH or LOW for instant results</li>
                        <li><strong>Mines Game:</strong> Click safe tiles and avoid mines</li>
                        <li><strong>Plinko Game:</strong> Drop balls and land on multipliers</li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Are the games fair?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Yes! All our games use certified Random Number Generator (RNG) technology to ensure fair, 
                        unpredictable outcomes. Every player has equal chances of winning or losing.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>How do I play each game?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Each game has detailed instructions and rules displayed before you play. 
                        Visit our <a href="/games.php" style="color: #ffd700;">Games page</a> to learn more about each game 
                        or click "Play Now" to start playing.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Can I play on mobile?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Yes! Our platform is fully responsive and works on all devices including smartphones, tablets, 
                        and desktop computers. Play anywhere, anytime!
                    </p>
                </div>
            </div>
        </div>

        <!-- Technical Issues -->
        <div class="accordion-section" id="technical">
            <h2>⚙️ Technical Issues</h2>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>The website is not loading properly</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>Try these steps:</p>
                    <ul>
                        <li>Clear your browser cache and cookies</li>
                        <li>Try a different browser (Chrome, Firefox, Safari, Edge)</li>
                        <li>Disable browser extensions temporarily</li>
                        <li>Check your internet connection</li>
                        <li>Try again in a few minutes</li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Games are running slowly</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        If games are running slowly, try:
                    </p>
                    <ul>
                        <li>Check your internet connection speed</li>
                        <li>Close other browser tabs and applications</li>
                        <li>Disable browser extensions</li>
                        <li>Clear browser cache</li>
                        <li>Try a different browser</li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>I'm having issues with a specific game</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        If a specific game isn't working:
                    </p>
                    <ul>
                        <li>Refresh the page</li>
                        <li>Clear your browser cache</li>
                        <li>Try a different browser</li>
                        <li>Check if JavaScript is enabled</li>
                        <li>Contact us with details about the issue</li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>What browsers are supported?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        We support all modern browsers:
                    </p>
                    <ul>
                        <li>Google Chrome (latest version)</li>
                        <li>Mozilla Firefox (latest version)</li>
                        <li>Apple Safari (latest version)</li>
                        <li>Microsoft Edge (latest version)</li>
                        <li>Mobile browsers (iOS Safari, Chrome Mobile)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Security & Privacy -->
        <div class="accordion-section" id="security">
            <h2>🔒 Security & Privacy</h2>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Is my data safe?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        Yes! We use industry-standard security measures including SSL/TLS encryption, 
                        secure data storage, and regular security audits. Your information is protected.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>How is my privacy protected?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        We protect your privacy by:
                    </p>
                    <ul>
                        <li>Using secure encryption</li>
                        <li>Not selling your data to third parties</li>
                        <li>Complying with privacy laws (GDPR, CCPA)</li>
                        <li>Allowing you to control your information</li>
                        <li>Maintaining transparent privacy policies</li>
                    </ul>
                    <p>See our <a href="/privacy.php" style="color: #ffd700;">Privacy Policy</a> for details.</p>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <h4>Is this platform for gambling?</h4>
                    <span class="accordion-toggle">▼</span>
                </div>
                <div class="accordion-content">
                    <p>
                        <strong>No.</strong> This is a 100% free-to-play entertainment platform. 
                        No real money is involved. Games use virtual coins with no real value. 
                        This is NOT gambling.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="contact-section" id="contact">
            <h2>📧 Still Need Help?</h2>
            <p>
                If you can't find the answer you're looking for, our support team is here to help. 
                Contact us via email and we'll respond within 24 hours.
            </p>
            <p>
                <strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>">
                    <?php echo COMPANY_EMAIL; ?>
                </a>
            </p>
            <div class="contact-buttons">
                <a href="/contact.php" class="contact-btn">📧 Send Message</a>
                <a href="/responsible-gaming.php" class="contact-btn">🛡️ Responsible Gaming</a>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleAccordion(header) {
        const item = header.parentElement;
        item.classList.toggle('active');
    }

    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>

<?php include '../includes/footer.php'; ?>
