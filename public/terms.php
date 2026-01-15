<?php
$page_title = "Terms & Conditions";
include '../includes/header.php';
?>

<style>
    .legal-container {
        padding: 48px 0;
        max-width: 900px;
        margin: 0 auto;
    }

    .legal-header {
        text-align: center;
        margin-bottom: 32px;
    }

    .legal-header h1 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .legal-header p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }

    .legal-content {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 12px;
        padding: 32px;
    }

    .legal-content h2 {
        font-size: 22px;
        color: #ffd700;
        margin-top: 32px;
        margin-bottom: 16px;
        border-bottom: 2px solid rgba(255, 215, 0, 0.2);
        padding-bottom: 12px;
    }

    .legal-content h2:first-child {
        margin-top: 0;
    }

    .legal-content h3 {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
        margin-top: 16px;
        margin-bottom: 12px;
    }

    .legal-content p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .legal-content ul,
    .legal-content ol {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin: 12px 0 12px 24px;
    }

    .legal-content li {
        margin-bottom: 8px;
    }

    .legal-content strong {
        color: #ffd700;
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

    .last-updated {
        text-align: center;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.6);
        margin-top: 32px;
        padding-top: 16px;
        border-top: 1px solid rgba(255, 215, 0, 0.2);
    }

    @media (max-width: 767px) {
        .legal-container {
            padding: 24px 0;
        }

        .legal-header h1 {
            font-size: 28px;
        }

        .legal-content {
            padding: 20px;
        }

        .legal-content h2 {
            font-size: 18px;
        }

        .legal-content h3 {
            font-size: 14px;
        }

        .legal-content p,
        .legal-content ul,
        .legal-content ol {
            font-size: 13px;
        }
    }
</style>

<section class="legal-container">
    <div class="container">
        <div class="legal-header">
            <h1>Terms & Conditions</h1>
            <p>Please read these terms carefully before using our platform</p>
        </div>

        <div class="legal-content">
            <h2>1. Acceptance of Terms</h2>
            <p>
                By accessing and using <?php echo SITE_NAME; ?> ("the Platform"), you agree to be bound by these Terms & Conditions. 
                If you do not agree to any part of these terms, please do not use the Platform.
            </p>

            <h2>2. Platform Description</h2>
            <p>
                <?php echo SITE_NAME; ?> is a 100% free-to-play entertainment platform offering casino games for entertainment purposes only. 
                All games use virtual coins with NO real monetary value.
            </p>

            <div class="highlight-box">
                <p>
                    <strong>⚠️ Important:</strong> This platform is for entertainment purposes only. 
                    No real money is involved. Virtual coins cannot be converted to real currency.
                </p>
            </div>

            <h2>3. Age Requirement</h2>
            <p>
                You must be at least 18 years of age to use this Platform. By using the Platform, you confirm that you are 18 years or older. 
                We reserve the right to verify age at any time.
            </p>

            <h2>4. User Responsibilities</h2>
            <p>You agree to:</p>
            <ul>
                <li>Use the Platform only for lawful purposes and in accordance with these Terms</li>
                <li>Not engage in any conduct that restricts or inhibits anyone's use or enjoyment of the Platform</li>
                <li>Not attempt to gain unauthorized access to any portion of the Platform</li>
                <li>Not reproduce, duplicate, copy, sell, or resell any portion of the Platform</li>
                <li>Not use automated tools or scripts to access the Platform</li>
                <li>Maintain the confidentiality of any account information</li>
            </ul>

            <h2>5. Virtual Coins & Balance</h2>
            <p>
                Virtual coins are provided for entertainment purposes only. They have NO real monetary value and cannot be:
            </p>
            <ul>
                <li>Converted to real currency</li>
                <li>Withdrawn or transferred outside the Platform</li>
                <li>Sold or traded for real money</li>
                <li>Used for any real-world transactions</li>
            </ul>

            <p>
                Your virtual coin balance is reset periodically. We reserve the right to modify or reset balances at any time.
            </p>

            <h2>6. Game Rules & Fair Play</h2>
            <p>
                All games on the Platform use certified Random Number Generator (RNG) technology to ensure fair and unpredictable outcomes. 
                By playing, you acknowledge that:
            </p>
            <ul>
                <li>Game outcomes are determined by RNG algorithms</li>
                <li>Previous results do not influence future outcomes</li>
                <li>We do not guarantee any specific results or winnings</li>
                <li>All players have equal chances of winning or losing</li>
            </ul>

            <h2>7. Prohibited Activities</h2>
            <p>You agree NOT to:</p>
            <ul>
                <li>Use the Platform for gambling or real money wagering</li>
                <li>Engage in fraudulent or deceptive practices</li>
                <li>Attempt to manipulate game outcomes</li>
                <li>Use bots or automated tools</li>
                <li>Harass, abuse, or threaten other users</li>
                <li>Post offensive, inappropriate, or illegal content</li>
                <li>Violate any applicable laws or regulations</li>
            </ul>

            <h2>8. Limitation of Liability</h2>
            <p>
                TO THE MAXIMUM EXTENT PERMITTED BY LAW, <?php echo strtoupper(COMPANY_NAME); ?> SHALL NOT BE LIABLE FOR ANY INDIRECT, 
                INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO DAMAGES FOR LOSS OF PROFITS, 
                GOODWILL, USE, DATA, OR OTHER INTANGIBLE LOSSES.
            </p>

            <h2>9. Disclaimer of Warranties</h2>
            <p>
                THE PLATFORM IS PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED. 
                WE DO NOT WARRANT THAT THE PLATFORM WILL BE UNINTERRUPTED, ERROR-FREE, OR SECURE.
            </p>

            <h2>10. Indemnification</h2>
            <p>
                You agree to indemnify and hold harmless <?php echo COMPANY_NAME; ?>, its officers, directors, employees, 
                and agents from any claims, damages, losses, or expenses arising from your use of the Platform or violation of these Terms.
            </p>

            <h2>11. Termination</h2>
            <p>
                We reserve the right to terminate or suspend your access to the Platform at any time, without notice or cause, 
                if we believe you have violated these Terms or engaged in prohibited activities.
            </p>

            <h2>12. Modifications to Terms</h2>
            <p>
                We reserve the right to modify these Terms at any time. Changes will be effective immediately upon posting to the Platform. 
                Your continued use of the Platform constitutes acceptance of modified Terms.
            </p>

            <h2>13. Modifications to Platform</h2>
            <p>
                We reserve the right to modify, suspend, or discontinue the Platform or any services at any time without notice.
            </p>

            <h2>14. Governing Law</h2>
            <p>
                These Terms & Conditions are governed by and construed in accordance with the laws of India, 
                and you irrevocably submit to the exclusive jurisdiction of the courts in India.
            </p>

            <h2>15. Severability</h2>
            <p>
                If any provision of these Terms is found to be invalid or unenforceable, the remaining provisions shall continue in full force and effect.
            </p>

            <h2>16. Contact Information</h2>
            <p>
                For questions about these Terms & Conditions, please contact us at:
            </p>
            <p>
                <strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;"><?php echo COMPANY_EMAIL; ?></a><br>
                <strong>Company:</strong> <?php echo COMPANY_NAME; ?><br>
                <strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?>
            </p>

            <div class="last-updated">
                <p>Last Updated: January 2026</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
