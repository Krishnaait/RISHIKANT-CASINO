<?php
$page_title = "Disclaimer";
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

    .warning-box {
        background: rgba(255, 0, 0, 0.1);
        border-left: 4px solid #ff6b6b;
        padding: 16px;
        margin: 16px 0;
        border-radius: 4px;
    }

    .warning-box p {
        margin: 0;
        color: rgba(255, 200, 200, 0.9);
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
            <h1>⚠️ Disclaimer</h1>
            <p>Important legal information and age verification notice</p>
        </div>

        <div class="legal-content">
            <div class="warning-box">
                <p>
                    <strong>⚠️ CRITICAL NOTICE:</strong> By accessing and using this Platform, you confirm that you are 18 years of age or older. 
                    If you are under 18, you are strictly prohibited from using this Platform. We take age verification seriously.
                </p>
            </div>

            <h2>1. Age & Responsible Gaming Disclaimer</h2>
            <p>
                <strong>THIS PLATFORM IS FOR ENTERTAINMENT PURPOSES ONLY AND IS INTENDED FOR ADULTS 18 YEARS OF AGE OR OLDER.</strong>
            </p>

            <div class="highlight-box">
                <p>
                    <strong>Age Verification:</strong> By using this Platform, you confirm under penalty of perjury that you are at least 18 years of age 
                    and have the legal capacity to enter into this agreement. We reserve the right to verify your age at any time.
                </p>
            </div>

            <h3>Responsible Gaming Statement</h3>
            <p>
                While this Platform offers entertainment through free-to-play games, we encourage all users to engage responsibly. 
                Gaming should be a form of entertainment, not a source of income or a way to solve financial problems.
            </p>

            <p>
                If you or someone you know is struggling with gaming habits, please seek help immediately. 
                Resources are available at the end of this page.
            </p>

            <h2>2. No Real Money Involvement</h2>
            <p>
                This Platform uses <strong>VIRTUAL COINS ONLY</strong>. These coins:
            </p>
            <ul>
                <li>Have NO real monetary value</li>
                <li>Cannot be converted to real currency</li>
                <li>Cannot be withdrawn or cashed out</li>
                <li>Cannot be sold or traded</li>
                <li>Are provided for entertainment purposes only</li>
            </ul>

            <div class="warning-box">
                <p>
                    <strong>⚠️ WARNING:</strong> This is NOT a gambling platform. No real money is involved. 
                    Any attempt to use real money or engage in gambling activities is strictly prohibited.
                </p>
            </div>

            <h2>3. No Prizes or Rewards</h2>
            <p>
                Players do NOT receive:
            </p>
            <ul>
                <li>Real money prizes</li>
                <li>Cryptocurrency rewards</li>
                <li>Gift cards or vouchers</li>
                <li>Physical prizes</li>
                <li>Any form of real-world compensation</li>
            </ul>

            <p>
                All "winnings" are virtual and exist only within the Platform. They have no value outside the Platform.
            </p>

            <h2>4. Entertainment Only</h2>
            <p>
                <?php echo SITE_NAME; ?> is designed purely for entertainment. The Platform is NOT:
            </p>
            <ul>
                <li>A gambling platform</li>
                <li>A financial investment opportunity</li>
                <li>A way to earn money</li>
                <li>A substitute for professional financial advice</li>
                <li>Intended for commercial or business use</li>
            </ul>

            <h2>5. Fair Play & RNG</h2>
            <p>
                All games on this Platform use certified Random Number Generator (RNG) technology. This ensures:
            </p>
            <ul>
                <li>Fair and unpredictable outcomes</li>
                <li>No manipulation of results</li>
                <li>Equal chances for all players</li>
                <li>Compliance with industry standards</li>
            </ul>

            <p>
                However, we do NOT guarantee any specific results or outcomes. Games are based on chance, and losses are possible.
            </p>

            <h2>6. Limitation of Liability</h2>
            <p>
                <?php echo COMPANY_NAME; ?> is provided "AS IS" without any warranties. We are NOT liable for:
            </p>
            <ul>
                <li>Loss of virtual coins</li>
                <li>Service interruptions</li>
                <li>Technical errors or bugs</li>
                <li>Data loss or corruption</li>
                <li>Any indirect or consequential damages</li>
                <li>Addiction or compulsive gaming behavior</li>
            </ul>

            <h2>7. User Conduct</h2>
            <p>
                By using this Platform, you agree NOT to:
            </p>
            <ul>
                <li>Attempt to use real money</li>
                <li>Engage in fraud or deception</li>
                <li>Manipulate game outcomes</li>
                <li>Use automated tools or bots</li>
                <li>Harass other users</li>
                <li>Violate any laws or regulations</li>
                <li>Attempt to access unauthorized areas</li>
            </ul>

            <h2>8. No Professional Advice</h2>
            <p>
                Nothing on this Platform constitutes professional advice. We do not provide:
            </p>
            <ul>
                <li>Financial advice</li>
                <li>Investment recommendations</li>
                <li>Mental health counseling</li>
                <li>Legal advice</li>
            </p>

            <p>
                If you need professional assistance, please consult appropriate professionals.
            </p>

            <h2>9. Modifications & Discontinuation</h2>
            <p>
                We reserve the right to:
            </p>
            <ul>
                <li>Modify or discontinue the Platform at any time</li>
                <li>Change game rules or features</li>
                <li>Reset or modify virtual coin balances</li>
                <li>Suspend or terminate user accounts</li>
            </ul>

            <h2>10. Responsible Gaming Resources</h2>
            <p>
                If you or someone you know is struggling with gaming habits, please reach out for help:
            </p>

            <div class="highlight-box">
                <p>
                    <strong>National Council on Problem Gambling (NCPG)</strong><br>
                    Helpline: <a href="tel:18005224700" style="color: #ffd700;">1-800-522-4700</a><br>
                    Website: <a href="<?php echo NCPG_WEBSITE; ?>" target="_blank" rel="noopener noreferrer" style="color: #ffd700;">
                        <?php echo NCPG_WEBSITE; ?>
                    </a><br>
                    Available 24/7 • Confidential • Free
                </p>
            </div>

            <p>
                Other resources:
            </p>
            <ul>
                <li><strong>Gamblers Anonymous:</strong> Support groups and meetings</li>
                <li><strong>SAMHSA National Helpline:</strong> 1-800-662-4357</li>
                <li><strong>Mental Health Services:</strong> Consult a licensed therapist</li>
                <li><strong>Financial Counseling:</strong> Seek professional advice if needed</li>
            </ul>

            <h2>11. Governing Law</h2>
            <p>
                This Disclaimer is governed by the laws of India. Any disputes shall be resolved in the courts of India.
            </p>

            <h2>12. Acknowledgment</h2>
            <p>
                By using this Platform, you acknowledge that you have read, understood, and agree to this Disclaimer in its entirety. 
                If you do not agree, please do not use the Platform.
            </p>

            <div class="last-updated">
                <p>Last Updated: January 2026</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
