<?php
$page_title = "Community Rules";
include '../includes/header.php';
?>

<style>
    .community-container {
        padding: 48px 0;
    }

    .community-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .community-header h1 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .community-header p {
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

    .content-section ul,
    .content-section ol {
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

    .rule-card {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 16px;
    }

    .rule-card h3 {
        font-size: 18px;
        color: #ffd700;
        margin-top: 0;
        margin-bottom: 12px;
    }

    .rule-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0;
    }

    .dos-donts {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin: 24px 0;
    }

    .do-box {
        background: rgba(0, 208, 132, 0.1);
        border: 2px solid rgba(0, 208, 132, 0.3);
        border-radius: 12px;
        padding: 20px;
    }

    .dont-box {
        background: rgba(255, 0, 0, 0.1);
        border: 2px solid rgba(255, 0, 0, 0.3);
        border-radius: 12px;
        padding: 20px;
    }

    .do-box h3,
    .dont-box h3 {
        font-size: 18px;
        margin-top: 0;
        margin-bottom: 12px;
    }

    .do-box h3 {
        color: #00d084;
    }

    .dont-box h3 {
        color: #ff6b6b;
    }

    .do-box ul,
    .dont-box ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .do-box li,
    .dont-box li {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .do-box li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #00d084;
        font-weight: bold;
    }

    .dont-box li::before {
        content: "✗";
        position: absolute;
        left: 0;
        color: #ff6b6b;
        font-weight: bold;
    }

    .highlight-box {
        background: rgba(255, 215, 0, 0.1);
        border-left: 4px solid #ffd700;
        padding: 16px;
        margin: 16px 0;
        border-radius: 4px;
    }

    .highlight-box p {
        margin: 0;
    }

    .enforcement-box {
        background: rgba(255, 0, 0, 0.1);
        border: 2px solid rgba(255, 0, 0, 0.3);
        border-radius: 12px;
        padding: 20px;
        margin: 24px 0;
    }

    .enforcement-box h3 {
        color: #ff6b6b;
        margin-top: 0;
    }

    .enforcement-box p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
    }

    @media (max-width: 767px) {
        .community-header h1 {
            font-size: 28px;
        }

        .content-section h2 {
            font-size: 22px;
        }

        .dos-donts {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="community-container">
    <div class="container">
        <div class="community-header">
            <h1>👥 Community Rules</h1>
            <p>
                Guidelines for maintaining a safe, fair, and enjoyable environment for all players
            </p>
        </div>

        <!-- Welcome -->
        <div class="content-section">
            <h2>Welcome to Our Community</h2>
            <p>
                <?php echo SITE_NAME; ?> is a community of entertainment enthusiasts. 
                To ensure everyone has a positive experience, we've established these community rules. 
                By using our platform, you agree to follow these guidelines.
            </p>

            <div class="highlight-box">
                <p>
                    <strong>Our Goal:</strong> Create a safe, fair, and enjoyable environment where all players can have fun 
                    and feel respected.
                </p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="content-section">
            <h2>Our Core Community Values</h2>
            <p>
                Our community is built on these fundamental principles:
            </p>

            <div class="rule-card">
                <h3>🤝 Respect</h3>
                <p>
                    Treat all players, staff, and community members with respect and courtesy. 
                    Disagreements are normal, but they should be handled respectfully.
                </p>
            </div>

            <div class="rule-card">
                <h3>⚖️ Fairness</h3>
                <p>
                    Play fairly and honestly. Do not attempt to cheat, manipulate games, or gain unfair advantages. 
                    All players deserve a fair chance.
                </p>
            </div>

            <div class="rule-card">
                <h3>🔒 Integrity</h3>
                <p>
                    Be honest and truthful. Do not engage in fraud, deception, or misrepresentation. 
                    Maintain the integrity of the community.
                </p>
            </div>

            <div class="rule-card">
                <h3>🛡️ Safety</h3>
                <p>
                    Keep the community safe for everyone. Do not share personal information, threaten others, 
                    or engage in harmful behavior.
                </p>
            </div>

            <div class="rule-card">
                <h3>🎮 Fun</h3>
                <p>
                    Remember that gaming is for entertainment. Have fun, enjoy the games, 
                    and help others enjoy their experience.
                </p>
            </div>
        </div>

        <!-- Behavioral Standards -->
        <div class="content-section">
            <h2>Behavioral Standards</h2>
            <p>
                All community members are expected to:
            </p>

            <div class="dos-donts">
                <div class="do-box">
                    <h3>✓ DO</h3>
                    <ul>
                        <li>Be respectful and courteous</li>
                        <li>Play fairly and honestly</li>
                        <li>Follow all platform rules</li>
                        <li>Report violations or concerns</li>
                        <li>Help new players learn</li>
                        <li>Enjoy the games responsibly</li>
                        <li>Respect others' privacy</li>
                        <li>Communicate positively</li>
                    </ul>
                </div>

                <div class="dont-box">
                    <h3>✗ DON'T</h3>
                    <ul>
                        <li>Harass or bully other players</li>
                        <li>Cheat or manipulate games</li>
                        <li>Use bots or automated tools</li>
                        <li>Share personal information</li>
                        <li>Spam or flood chat</li>
                        <li>Use offensive language</li>
                        <li>Attempt fraud or scams</li>
                        <li>Violate platform rules</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Prohibited Activities -->
        <div class="content-section">
            <h2>⛔ Prohibited Activities</h2>
            <p>
                The following activities are strictly prohibited:
            </p>

            <div class="rule-card">
                <h3>Cheating & Fraud</h3>
                <p>
                    Any attempt to cheat, manipulate games, exploit bugs, or engage in fraudulent activities. 
                    This includes using bots, hacking, or unauthorized access.
                </p>
            </div>

            <div class="rule-card">
                <h3>Harassment & Abuse</h3>
                <p>
                    Harassing, threatening, bullying, or abusing other players or staff members. 
                    This includes personal attacks, discrimination, and hate speech.
                </p>
            </div>

            <div class="rule-card">
                <h3>Offensive Content</h3>
                <p>
                    Posting offensive, inappropriate, obscene, or illegal content. 
                    This includes hate speech, discrimination, and explicit material.
                </p>
            </div>

            <div class="rule-card">
                <h3>Privacy Violations</h3>
                <p>
                    Sharing other players' personal information without consent. 
                    Respect everyone's privacy and security.
                </p>
            </div>

            <div class="rule-card">
                <h3>Real Money Activities</h3>
                <p>
                    Attempting to use real money, engage in gambling, or convert virtual coins to real currency. 
                    This platform is for entertainment only.
                </p>
            </div>

            <div class="rule-card">
                <h3>Multi-Accounting</h3>
                <p>
                    Creating multiple accounts to gain unfair advantages or circumvent bans. 
                    Each player should maintain only one account.
                </p>
            </div>

            <div class="rule-card">
                <h3>Spam & Flooding</h3>
                <p>
                    Spamming, flooding, or sending repetitive messages. 
                    Keep communications meaningful and respectful.
                </p>
            </div>

            <div class="rule-card">
                <h3>Illegal Activities</h3>
                <p>
                    Engaging in any illegal activities or encouraging others to do so. 
                    Comply with all applicable laws and regulations.
                </p>
            </div>
        </div>

        <!-- Age Requirements -->
        <div class="content-section">
            <h2>Age Requirements</h2>
            <p>
                <strong>This platform is for adults 18 years of age or older only.</strong>
            </p>

            <div class="highlight-box">
                <p>
                    By using this platform, you confirm that you are at least 18 years of age. 
                    We take age verification seriously and reserve the right to verify age at any time. 
                    Accounts found to belong to minors will be immediately terminated.
                </p>
            </div>

            <p>
                Parents and guardians: If you believe a minor is using this platform, 
                please contact us immediately at <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                    <?php echo COMPANY_EMAIL; ?>
                </a>.
            </p>
        </div>

        <!-- Responsible Gaming -->
        <div class="content-section">
            <h2>Responsible Gaming</h2>
            <p>
                Gaming should be fun and never harmful. We encourage all players to:
            </p>
            <ul>
                <li>Play for entertainment only</li>
                <li>Set time limits for gaming sessions</li>
                <li>Take regular breaks</li>
                <li>Never use real money</li>
                <li>Seek help if gaming becomes problematic</li>
                <li>Support others who may need help</li>
            </ul>

            <p>
                If you or someone you know is struggling with gaming habits, 
                please visit our <a href="/responsible-gaming.php" style="color: #ffd700;">
                    Responsible Gaming page
                </a> for resources and support.
            </p>
        </div>

        <!-- Enforcement -->
        <div class="content-section">
            <h2>Enforcement & Consequences</h2>

            <div class="enforcement-box">
                <h3>⚠️ Violations & Penalties</h3>
                <p>
                    Violations of these community rules may result in:
                </p>
                <ul style="margin: 12px 0; padding-left: 24px;">
                    <li><strong>Warning:</strong> First minor violation</li>
                    <li><strong>Temporary Suspension:</strong> Repeated violations (24 hours - 7 days)</li>
                    <li><strong>Permanent Ban:</strong> Serious or repeated violations</li>
                    <li><strong>Account Termination:</strong> Fraud, cheating, or illegal activities</li>
                    <li><strong>Legal Action:</strong> If applicable under law</li>
                </ul>
            </div>

            <p>
                We review each violation individually and take appropriate action. 
                Our goal is to maintain a safe and fair community for everyone.
            </p>

            <p>
                If you believe you've been unfairly penalized, you can appeal to our support team. 
                Contact us at <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                    <?php echo COMPANY_EMAIL; ?>
                </a> with details about your case.
            </p>
        </div>

        <!-- Reporting Violations -->
        <div class="content-section">
            <h2>Reporting Violations</h2>
            <p>
                If you witness a violation of these community rules, please report it immediately:
            </p>

            <div class="rule-card">
                <h3>📧 How to Report</h3>
                <p>
                    Email us at <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                        <?php echo COMPANY_EMAIL; ?>
                    </a> with:
                </p>
                <ul style="margin: 12px 0; padding-left: 24px;">
                    <li>Description of the violation</li>
                    <li>Player name or account (if applicable)</li>
                    <li>Date and time of the incident</li>
                    <li>Any relevant screenshots or evidence</li>
                    <li>Your contact information</li>
                </ul>
            </div>

            <p>
                All reports are taken seriously and investigated thoroughly. 
                We appreciate your help in maintaining a safe community.
            </p>
        </div>

        <!-- Appeals Process -->
        <div class="content-section">
            <h2>Appeals Process</h2>
            <p>
                If you believe an action taken against your account was unfair:
            </p>
            <ol>
                <li>Contact our support team within 7 days of the action</li>
                <li>Provide detailed information about your case</li>
                <li>Include any evidence or documentation</li>
                <li>We will review your appeal thoroughly</li>
                <li>A decision will be provided within 48 hours</li>
            </ol>

            <p>
                Contact us at <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                    <?php echo COMPANY_EMAIL; ?>
                </a> to file an appeal.
            </p>
        </div>

        <!-- Community Support -->
        <div class="content-section">
            <h2>Community Support & Resources</h2>
            <p>
                We're here to help our community members:
            </p>

            <div class="rule-card">
                <h3>🆘 Support & Help</h3>
                <p>
                    Visit our <a href="/support.php" style="color: #ffd700;">Support page</a> for help with technical issues, 
                    game questions, and more.
                </p>
            </div>

            <div class="rule-card">
                <h3>🛡️ Responsible Gaming</h3>
                <p>
                    Visit our <a href="/responsible-gaming.php" style="color: #ffd700;">Responsible Gaming page</a> for 
                    resources and support if you're struggling with gaming habits.
                </p>
            </div>

            <div class="rule-card">
                <h3>📧 Contact Us</h3>
                <p>
                    Have questions or concerns? <a href="/contact.php" style="color: #ffd700;">Contact us</a> anytime. 
                    We're here to help!
                </p>
            </div>
        </div>

        <!-- Final Note -->
        <div class="content-section">
            <h2>Final Note</h2>
            <p>
                These community rules are designed to protect and enhance the experience for all players. 
                By following these guidelines, you help create a positive, fair, and enjoyable community.
            </p>

            <div class="highlight-box">
                <p>
                    <strong>Thank you for being part of our community!</strong> 
                    Your cooperation and respect for these rules are essential to our success. 
                    Together, we can maintain a safe and fun environment for everyone.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
