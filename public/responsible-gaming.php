<?php
$page_title = "Responsible Gaming";
include '../includes/header.php';
?>

<style>
    .responsible-container {
        padding: 48px 0;
    }

    .responsible-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .responsible-header h1 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .responsible-header p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
        max-width: 600px;
        margin: 0 auto;
    }

    .content-section {
        margin-bottom: 48px;
    }

    .content-section h2 {
        font-size: 28px;
        color: #ffd700;
        margin-bottom: 20px;
        border-bottom: 2px solid rgba(255, 215, 0, 0.2);
        padding-bottom: 12px;
    }

    .content-section p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin-bottom: 16px;
    }

    .content-section ul {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin: 16px 0 16px 24px;
    }

    .content-section li {
        margin-bottom: 12px;
    }

    .content-section strong {
        color: #ffd700;
    }

    .tips-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 20px 0;
    }

    .tip-card {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 20px;
    }

    .tip-card h4 {
        font-size: 16px;
        color: #ffd700;
        margin-bottom: 12px;
    }

    .tip-card p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0;
    }

    .warning-box {
        background: rgba(255, 0, 0, 0.1);
        border-left: 4px solid #ff6b6b;
        padding: 20px;
        margin: 20px 0;
        border-radius: 8px;
    }

    .warning-box h3 {
        color: #ff6b6b;
        margin-top: 0;
    }

    .warning-box p {
        font-size: 14px;
        color: rgba(255, 200, 200, 0.9);
        line-height: 1.8;
    }

    .support-box {
        background: rgba(0, 208, 132, 0.1);
        border: 2px solid rgba(0, 208, 132, 0.3);
        border-radius: 12px;
        padding: 24px;
        margin: 24px 0;
    }

    .support-box h3 {
        color: #00d084;
        margin-top: 0;
    }

    .support-box p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
    }

    .support-box a {
        color: #00d084;
        text-decoration: none;
        font-weight: 600;
    }

    .support-box a:hover {
        text-decoration: underline;
    }

    .signs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin: 20px 0;
    }

    .sign-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 12px;
        padding: 20px;
    }

    .sign-card h4 {
        font-size: 16px;
        color: #ffd700;
        margin-bottom: 12px;
    }

    .sign-card ul {
        margin: 0;
        padding-left: 20px;
    }

    .sign-card li {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 8px;
    }

    @media (max-width: 767px) {
        .responsible-header h1 {
            font-size: 28px;
        }

        .content-section h2 {
            font-size: 22px;
        }

        .tips-grid,
        .signs-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="responsible-container">
    <div class="container">
        <div class="responsible-header">
            <h1>🛡️ Responsible Gaming</h1>
            <p>
                We are committed to promoting responsible entertainment. 
                This page provides resources and information to help you play safely and responsibly.
            </p>
        </div>

        <!-- Our Commitment -->
        <div class="content-section">
            <h2>Our Commitment</h2>
            <p>
                <?php echo SITE_NAME; ?> is dedicated to providing a safe and responsible entertainment environment. 
                We believe gaming should be fun and never harmful. Our commitment includes:
            </p>
            <ul>
                <li>Providing clear information about our platform and games</li>
                <li>Ensuring all games are fair and use certified RNG technology</li>
                <li>Promoting responsible gaming practices</li>
                <li>Providing resources for those who need help</li>
                <li>Maintaining strict age verification (18+ only)</li>
                <li>Protecting player privacy and security</li>
            </ul>
        </div>

        <!-- Important Reminders -->
        <div class="content-section">
            <h2>⚠️ Important Reminders</h2>
            <div class="warning-box">
                <h3>This Platform is for Entertainment Only</h3>
                <p>
                    <?php echo SITE_NAME; ?> uses virtual coins with NO real monetary value. 
                    Games are for entertainment purposes only. Never use real money on this platform. 
                    Virtual coins cannot be converted to real currency or cashed out.
                </p>
            </div>
        </div>

        <!-- Tips for Responsible Gaming -->
        <div class="content-section">
            <h2>Tips for Responsible Gaming</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>⏰ Set Time Limits</h4>
                    <p>
                        Decide how long you'll play before starting. Take regular breaks and don't let gaming interfere with work, 
                        school, or relationships.
                    </p>
                </div>

                <div class="tip-card">
                    <h4>💰 Understand It's Entertainment</h4>
                    <p>
                        Remember that games are for fun, not profit. Virtual coins have no real value. 
                        Never expect to make money from gaming.
                    </p>
                </div>

                <div class="tip-card">
                    <h4>🎯 Play for Fun</h4>
                    <p>
                        Focus on enjoying the games rather than winning. The outcome is based on chance. 
                        Don't chase losses or try to "win back" virtual coins.
                    </p>
                </div>

                <div class="tip-card">
                    <h4>👥 Tell Someone</h4>
                    <p>
                        Share your gaming habits with friends or family. They can help you maintain balance 
                        and notice if gaming becomes problematic.
                    </p>
                </div>

                <div class="tip-card">
                    <h4>🚫 Never Use Real Money</h4>
                    <p>
                        This platform is completely free. Never attempt to use real money or credit cards. 
                        Report any attempts to facilitate real money transactions.
                    </p>
                </div>

                <div class="tip-card">
                    <h4>✅ Stay in Control</h4>
                    <p>
                        If you feel you're losing control, take a break. Use our pause features. 
                        Seek help immediately if needed.
                    </p>
                </div>
            </div>
        </div>

        <!-- Warning Signs -->
        <div class="content-section">
            <h2>Warning Signs of Problem Gaming</h2>
            <p>
                Be aware of these signs that gaming may be becoming problematic:
            </p>
            <div class="signs-grid">
                <div class="sign-card">
                    <h4>Behavioral Signs</h4>
                    <ul>
                        <li>Playing longer than intended</li>
                        <li>Neglecting work or school</li>
                        <li>Skipping meals or sleep</li>
                        <li>Lying about gaming habits</li>
                        <li>Difficulty stopping</li>
                        <li>Withdrawal when not playing</li>
                    </ul>
                </div>

                <div class="sign-card">
                    <h4>Emotional Signs</h4>
                    <ul>
                        <li>Anxiety or irritability</li>
                        <li>Mood swings</li>
                        <li>Depression</li>
                        <li>Feeling guilty</li>
                        <li>Chasing losses</li>
                        <li>Obsessive thoughts about gaming</li>
                    </ul>
                </div>

                <div class="sign-card">
                    <h4>Social & Financial Signs</h4>
                    <ul>
                        <li>Relationship conflicts</li>
                        <li>Isolation from friends</li>
                        <li>Neglecting responsibilities</li>
                        <li>Financial problems</li>
                        <li>Borrowing money</li>
                        <li>Loss of interest in other activities</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Getting Help -->
        <div class="content-section">
            <h2>🆘 Getting Help</h2>
            <p>
                If you or someone you know is struggling with gaming habits, help is available. 
                Please reach out to one of these resources:
            </p>

            <div class="support-box">
                <h3>National Council on Problem Gambling (NCPG)</h3>
                <p>
                    <strong>Helpline:</strong> <a href="tel:18005224700">1-800-522-4700</a><br>
                    <strong>Website:</strong> <a href="<?php echo NCPG_WEBSITE; ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo NCPG_WEBSITE; ?>
                    </a><br>
                    <strong>Available:</strong> 24/7 • Confidential • Free<br>
                    <strong>Services:</strong> Counseling, support groups, referrals
                </p>
            </div>

            <div class="support-box">
                <h3>Gamblers Anonymous</h3>
                <p>
                    <strong>Support Groups:</strong> Free peer support meetings<br>
                    <strong>Website:</strong> <a href="https://www.gamblersanonymous.org" target="_blank" rel="noopener noreferrer">
                        www.gamblersanonymous.org
                    </a><br>
                    <strong>Format:</strong> In-person and online meetings<br>
                    <strong>Philosophy:</strong> 12-step program for recovery
                </p>
            </div>

            <div class="support-box">
                <h3>SAMHSA National Helpline</h3>
                <p>
                    <strong>Helpline:</strong> <a href="tel:18006624357">1-800-662-4357</a><br>
                    <strong>Available:</strong> 24/7 • Free • Confidential<br>
                    <strong>Services:</strong> Mental health and substance abuse referrals<br>
                    <strong>Languages:</strong> English and Spanish
                </p>
            </div>

            <div class="support-box">
                <h3>Professional Mental Health Services</h3>
                <p>
                    Consider speaking with a licensed therapist or counselor. Many specialize in behavioral addictions. 
                    Your primary care doctor can provide referrals.
                </p>
            </div>
        </div>

        <!-- For Friends & Family -->
        <div class="content-section">
            <h2>For Friends & Family</h2>
            <p>
                If someone you care about may have a gaming problem, here's how you can help:
            </p>
            <ul>
                <li><strong>Express Concern:</strong> Talk to them in a non-judgmental way about your concerns</li>
                <li><strong>Listen:</strong> Give them space to share their feelings</li>
                <li><strong>Provide Resources:</strong> Share information about support services</li>
                <li><strong>Encourage Professional Help:</strong> Suggest they speak with a counselor</li>
                <li><strong>Set Boundaries:</strong> Protect yourself and your finances</li>
                <li><strong>Seek Support:</strong> Consider joining a support group for families</li>
                <li><strong>Be Patient:</strong> Recovery is a process; avoid judgment</li>
            </ul>
        </div>

        <!-- Our Safeguards -->
        <div class="content-section">
            <h2>Our Safeguards</h2>
            <p>
                We've implemented several features to promote responsible gaming:
            </p>
            <ul>
                <li><strong>Age Verification:</strong> 18+ only. Strict age gate on entry</li>
                <li><strong>No Real Money:</strong> Virtual coins only, no real money involvement</li>
                <li><strong>Clear Information:</strong> All pages display responsible gaming messages</li>
                <li><strong>Fair Games:</strong> Certified RNG ensures fair outcomes</li>
                <li><strong>No Pressure:</strong> No marketing or pressure to play</li>
                <li><strong>Transparency:</strong> Clear rules and odds for all games</li>
                <li><strong>Privacy Protection:</strong> Your data is secure and protected</li>
            </ul>
        </div>

        <!-- Contact Us -->
        <div class="content-section">
            <h2>Questions or Concerns?</h2>
            <p>
                If you have any questions about responsible gaming or our platform, please don't hesitate to contact us:
            </p>
            <p>
                <strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                    <?php echo COMPANY_EMAIL; ?>
                </a><br>
                <strong>Support Page:</strong> <a href="/support.php" style="color: #ffd700;">Visit our Support Page</a>
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
