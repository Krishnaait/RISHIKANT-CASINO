<?php
$page_title = "Fair Play Policy";
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

    .tech-box {
        background: rgba(0, 208, 132, 0.1);
        border: 1px solid rgba(0, 208, 132, 0.3);
        padding: 16px;
        margin: 16px 0;
        border-radius: 8px;
    }

    .tech-box h4 {
        color: #00d084;
        margin-top: 0;
    }

    .tech-box p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
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
            <h1>⚖️ Fair Play Policy</h1>
            <p>Our commitment to fairness, transparency, and responsible gaming</p>
        </div>

        <div class="legal-content">
            <h2>1. Fair Play Commitment</h2>
            <p>
                <?php echo COMPANY_NAME; ?> is committed to providing a fair, transparent, and trustworthy gaming environment. 
                All games are designed to be entertaining and fair to every player.
            </p>

            <div class="highlight-box">
                <p>
                    <strong>Our Promise:</strong> Every player has an equal chance of winning or losing. 
                    Game outcomes are determined by certified Random Number Generators (RNG), not by player skill or platform manipulation.
                </p>
            </div>

            <h2>2. Random Number Generator (RNG) Technology</h2>
            <p>
                All games on <?php echo SITE_NAME; ?> use certified Random Number Generator (RNG) technology. 
                This ensures that game outcomes are:
            </p>
            <ul>
                <li><strong>Truly Random:</strong> Outcomes cannot be predicted or influenced</li>
                <li><strong>Fair:</strong> Every player has equal probability of winning</li>
                <li><strong>Independent:</strong> Previous results do not affect future outcomes</li>
                <li><strong>Unbiased:</strong> No manipulation or favoritism</li>
                <li><strong>Certified:</strong> Tested and verified by independent auditors</li>
            </ul>

            <div class="tech-box">
                <h4>🔬 Technical Details</h4>
                <p>
                    Our RNG algorithms are based on cryptographic principles and are regularly tested for randomness 
                    and independence. We use industry-standard testing methodologies to ensure compliance with fair play standards.
                </p>
            </div>

            <h2>3. Game Odds & Payouts</h2>
            <p>
                All games display clear information about:
            </p>
            <ul>
                <li>How to play</li>
                <li>Game rules</li>
                <li>Possible outcomes</li>
                <li>Payout structures</li>
                <li>Probability of winning</li>
            </ul>

            <p>
                Players can access this information before playing any game. We believe in transparency and informed decision-making.
            </p>

            <h2>4. No Manipulation or Cheating</h2>
            <p>
                We strictly prohibit and actively prevent:
            </p>
            <ul>
                <li>Manipulation of game outcomes</li>
                <li>Cheating or fraud</li>
                <li>Use of bots or automated tools</li>
                <li>Exploitation of technical vulnerabilities</li>
                <li>Collusion between players</li>
                <li>Account farming or multi-accounting</li>
            </ul>

            <p>
                Any accounts found engaging in these activities will be suspended or terminated immediately.
            </p>

            <h2>5. Player Protection Measures</h2>
            <p>
                We implement multiple safeguards to protect players:
            </p>
            <ul>
                <li><strong>Age Verification:</strong> 18+ only, verified at entry</li>
                <li><strong>No Real Money:</strong> Virtual coins only, no real money involvement</li>
                <li><strong>Security Monitoring:</strong> Continuous monitoring for suspicious activity</li>
                <li><strong>Fraud Detection:</strong> Advanced systems to detect and prevent fraud</li>
                <li><strong>Account Protection:</strong> Secure account management and data protection</li>
                <li><strong>Responsible Gaming Tools:</strong> Resources and support for responsible play</li>
            </ul>

            <h2>6. Game-Specific Fair Play Details</h2>

            <h3>Chicken Game</h3>
            <p>
                The Chicken Game uses RNG to determine:
            </p>
            <ul>
                <li>Placement of eggs and bones</li>
                <li>Multiplier values</li>
                <li>Game progression</li>
            </ul>
            <p>
                Each click has an equal probability of finding an egg or bone. Previous results do not influence future outcomes.
            </p>

            <h3>Dice Game</h3>
            <p>
                The Dice Game uses RNG to determine:
            </p>
            <ul>
                <li>Dice roll results (HIGH or LOW)</li>
                <li>Outcome probability (50/50 for each)</li>
            </ul>
            <p>
                Each roll is independent and has equal probability for HIGH or LOW outcomes.
            </p>

            <h3>Mines Game</h3>
            <p>
                The Mines Game uses RNG to determine:
            </p>
            <ul>
                <li>Mine placement</li>
                <li>Safe tile locations</li>
                <li>Multiplier values</li>
            </ul>
            <p>
                Difficulty levels affect mine density but not fairness. All players at the same difficulty level have equal chances.
            </p>

            <h3>Plinko Game</h3>
            <p>
                The Plinko Game uses RNG to determine:
            </p>
            <ul>
                <li>Ball trajectory</li>
                <li>Landing position</li>
                <li>Multiplier slot</li>
            </ul>
            <p>
                Each drop is independent and has equal probability of landing in any slot based on physics simulation.
            </p>

            <h2>7. Transparency & Verification</h2>
            <p>
                We believe in transparency:
            </p>
            <ul>
                <li>All game rules are publicly available</li>
                <li>RNG technology is industry-standard and certified</li>
                <li>Game outcomes are logged and can be verified</li>
                <li>We welcome independent audits</li>
                <li>Regular testing ensures continued fairness</li>
            </ul>

            <h2>8. Dispute Resolution</h2>
            <p>
                If you believe a game outcome was unfair or incorrect:
            </p>
            <ul>
                <li>Contact our support team immediately</li>
                <li>Provide details about the issue</li>
                <li>Include game ID and timestamp if available</li>
                <li>We will investigate thoroughly</li>
                <li>Resolution will be provided within 48 hours</li>
            </ul>

            <p>
                Contact us at: <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                    <?php echo COMPANY_EMAIL; ?>
                </a>
            </p>

            <h2>9. Continuous Improvement</h2>
            <p>
                We continuously work to improve fairness:
            </p>
            <ul>
                <li>Regular RNG testing and certification</li>
                <li>Security audits and penetration testing</li>
                <li>Player feedback collection and analysis</li>
                <li>Technology updates and improvements</li>
                <li>Compliance with industry standards</li>
            </ul>

            <h2>10. Responsible Gaming Commitment</h2>
            <p>
                Fair play includes responsible gaming practices:
            </p>
            <ul>
                <li>Clear information about game odds</li>
                <li>Responsible gaming resources and support</li>
                <li>No pressure or aggressive marketing</li>
                <li>Support for players with gaming concerns</li>
                <li>Compliance with responsible gaming standards</li>
            </ul>

            <div class="highlight-box">
                <p>
                    <strong>Remember:</strong> Gaming should be fun and entertaining. 
                    If you feel you're losing control, please seek help. 
                    Resources are available at our <a href="/responsible-gaming.php" style="color: #ffd700;">
                        Responsible Gaming page
                    </a>.
                </p>
            </div>

            <h2>11. Contact & Complaints</h2>
            <p>
                For questions about our fair play policy or to file a complaint:
            </p>
            <p>
                <strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #ffd700;">
                    <?php echo COMPANY_EMAIL; ?>
                </a><br>
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
