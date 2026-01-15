    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Footer Column 1: About -->
                <div class="footer-column">
                    <h4>About <?php echo SITE_NAME; ?></h4>
                    <p>
                        <?php echo SITE_NAME; ?> is a 100% free-to-play entertainment platform offering exciting casino games for fun. 
                        No real money involved. Play for entertainment only.
                    </p>
                    <div class="social-links">
                        <a href="#" title="Facebook" class="social-icon">f</a>
                        <a href="#" title="Twitter" class="social-icon">𝕏</a>
                        <a href="#" title="Instagram" class="social-icon">📷</a>
                    </div>
                </div>

                <!-- Footer Column 2: Quick Links -->
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/games.php">Games</a></li>
                        <li><a href="/how-it-works.php">How It Works</a></li>
                        <li><a href="/about.php">About Us</a></li>
                        <li><a href="/contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Footer Column 3: Legal -->
                <div class="footer-column">
                    <h4>Legal</h4>
                    <ul class="footer-links">
                        <li><a href="/terms.php">Terms & Conditions</a></li>
                        <li><a href="/privacy.php">Privacy Policy</a></li>
                        <li><a href="/disclaimer.php">Disclaimer</a></li>
                        <li><a href="/community-rules.php">Community Rules</a></li>
                        <li><a href="/responsible-gaming.php">Responsible Gaming</a></li>
                    </ul>
                </div>

                <!-- Footer Column 4: Support -->
                <div class="footer-column">
                    <h4>Support & Resources</h4>
                    <ul class="footer-links">
                        <li><a href="/support.php">Help & Support</a></li>
                        <li><a href="/faq.php">FAQ</a></li>
                        <li><a href="/fair-policy.php">Fair Play Policy</a></li>
                        <li>
                            <a href="<?php echo NCPG_WEBSITE; ?>" target="_blank" rel="noopener noreferrer">
                                Problem Gaming Help
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-info">
                    <h5>Company Information</h5>
                    <p>
                        <strong><?php echo COMPANY_NAME; ?></strong><br>
                        CIN: <?php echo COMPANY_CIN; ?><br>
                        GST: <?php echo COMPANY_GST; ?><br>
                        Address: <?php echo COMPANY_ADDRESS; ?><br>
                        Email: <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                    </p>
                </div>

                <div class="footer-compliance">
                    <h5>Compliance Notice</h5>
                    <p>
                        <strong>100% Free-to-Play Entertainment</strong><br>
                        This platform is for entertainment purposes only. 
                        Virtual coins have NO real money value. 
                        No real money is involved. Must be 18+ to play.
                    </p>
                </div>

                <div class="footer-responsible">
                    <h5>Responsible Gaming</h5>
                    <p>
                        If you have concerns about your gaming, please contact:<br>
                        <strong>National Council on Problem Gambling</strong><br>
                        Hotline: <a href="tel:18005224700">1-800-522-4700</a><br>
                        Website: <a href="<?php echo NCPG_WEBSITE; ?>" target="_blank" rel="noopener noreferrer">
                            <?php echo NCPG_WEBSITE; ?>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-copyright">
                <p>
                    &copy; <?php echo COMPANY_YEAR; ?> <?php echo COMPANY_NAME; ?>. All Rights Reserved. | 
                    <a href="/privacy.php">Privacy Policy</a> | 
                    <a href="/terms.php">Terms & Conditions</a> | 
                    <a href="/disclaimer.php">Disclaimer</a>
                </p>
                <p class="footer-disclaimer">
                    This website is for entertainment purposes only. 
                    By using this platform, you confirm that you are 18 years or older and accept all terms and conditions.
                </p>
            </div>
        </div>
    </footer>

    <!-- Stylesheets for Footer -->
    <link rel="stylesheet" href="/assets/css/footer.css">

    <!-- Scripts -->
    <script src="/assets/js/main.js"></script>

    <!-- Close HTML -->
</body>
</html>
