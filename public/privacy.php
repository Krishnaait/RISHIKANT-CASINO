<?php
$page_title = "Privacy Policy";
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
            <h1>Privacy Policy</h1>
            <p>How we collect, use, and protect your information</p>
        </div>

        <div class="legal-content">
            <h2>1. Introduction</h2>
            <p>
                <?php echo COMPANY_NAME; ?> ("we," "us," "our," or "Company") operates <?php echo SITE_NAME; ?> ("the Platform"). 
                This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our Platform.
            </p>

            <h2>2. Information We Collect</h2>

            <h3>2.1 Information You Provide</h3>
            <p>We may collect information you voluntarily provide, including:</p>
            <ul>
                <li>Contact information (name, email address)</li>
                <li>Communication preferences</li>
                <li>Feedback and inquiries</li>
                <li>Any other information you choose to provide</li>
            </ul>

            <h3>2.2 Automatically Collected Information</h3>
            <p>When you visit the Platform, we automatically collect:</p>
            <ul>
                <li>Browser type and version</li>
                <li>Operating system</li>
                <li>IP address</li>
                <li>Pages visited and time spent</li>
                <li>Referral source</li>
                <li>Device information</li>
                <li>Cookies and similar tracking technologies</li>
            </ul>

            <h3>2.3 Game Activity Data</h3>
            <p>
                We collect data about your gameplay, including games played, bet amounts, and results. 
                This information is used to improve our services and ensure fair play.
            </p>

            <h2>3. How We Use Your Information</h2>
            <p>We use collected information for:</p>
            <ul>
                <li>Providing and improving the Platform</li>
                <li>Responding to your inquiries</li>
                <li>Sending updates and notifications (with your consent)</li>
                <li>Analyzing usage patterns and trends</li>
                <li>Ensuring security and preventing fraud</li>
                <li>Complying with legal obligations</li>
                <li>Personalizing your experience</li>
            </ul>

            <div class="highlight-box">
                <p>
                    <strong>Note:</strong> We do NOT sell your personal information to third parties.
                </p>
            </div>

            <h2>4. Cookies & Tracking Technologies</h2>
            <p>
                We use cookies and similar technologies to enhance your experience. You can control cookie settings through your browser. 
                However, disabling cookies may affect Platform functionality.
            </p>

            <h3>Types of Cookies We Use:</h3>
            <ul>
                <li><strong>Essential Cookies:</strong> Required for Platform functionality</li>
                <li><strong>Performance Cookies:</strong> Help us understand how you use the Platform</li>
                <li><strong>Preference Cookies:</strong> Remember your settings and preferences</li>
                <li><strong>Marketing Cookies:</strong> Used to deliver relevant content</li>
            </ul>

            <h2>5. Third-Party Services</h2>
            <p>
                We may use third-party services for analytics, hosting, and other functions. These services may collect information about you. 
                We encourage you to review their privacy policies.
            </p>

            <h2>6. Data Security</h2>
            <p>
                We implement industry-standard security measures to protect your information, including:
            </p>
            <ul>
                <li>SSL/TLS encryption</li>
                <li>Secure data storage</li>
                <li>Access controls</li>
                <li>Regular security audits</li>
            </ul>

            <p>
                However, no method of transmission over the Internet is 100% secure. We cannot guarantee absolute security.
            </p>

            <h2>7. Data Retention</h2>
            <p>
                We retain your information for as long as necessary to provide services and comply with legal obligations. 
                You may request deletion of your data at any time by contacting us.
            </p>

            <h2>8. Your Rights</h2>
            <p>You have the right to:</p>
            <ul>
                <li>Access your personal information</li>
                <li>Correct inaccurate information</li>
                <li>Request deletion of your data</li>
                <li>Opt-out of marketing communications</li>
                <li>Withdraw consent at any time</li>
            </ul>

            <h2>9. Children's Privacy</h2>
            <p>
                The Platform is not intended for children under 18 years of age. We do not knowingly collect information from children. 
                If we become aware of such collection, we will delete it immediately.
            </p>

            <h2>10. International Data Transfers</h2>
            <p>
                Your information may be transferred to, stored in, and processed in countries other than your country of residence. 
                These countries may have data protection laws different from your home country.
            </p>

            <h2>11. Changes to Privacy Policy</h2>
            <p>
                We may update this Privacy Policy periodically. We will notify you of significant changes by posting the updated policy on the Platform. 
                Your continued use constitutes acceptance of changes.
            </p>

            <h2>12. Contact Us</h2>
            <p>
                If you have questions about this Privacy Policy or our privacy practices, please contact us at:
            </p>
            <p>
                <strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;"><?php echo COMPANY_EMAIL; ?></a><br>
                <strong>Company:</strong> <?php echo COMPANY_NAME; ?><br>
                <strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?>
            </p>

            <h2>13. California Privacy Rights</h2>
            <p>
                If you are a California resident, you have additional rights under the California Consumer Privacy Act (CCPA). 
                Please contact us for more information about your rights.
            </p>

            <h2>14. GDPR Compliance</h2>
            <p>
                If you are located in the European Union, your information is protected under the General Data Protection Regulation (GDPR). 
                We process your data only with your consent and for legitimate purposes.
            </p>

            <div class="last-updated">
                <p>Last Updated: January 2026</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
