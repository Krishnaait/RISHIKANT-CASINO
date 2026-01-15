<?php
$page_title = "Contact Us";
include '../includes/header.php';
?>

<style>
    .contact-container {
        padding: 48px 0;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .contact-header h1 {
        font-size: 40px;
        margin-bottom: 12px;
    }

    .contact-header p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }

    .contact-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
    }

    /* Contact Info */
    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .contact-info h2 {
        font-size: 24px;
        color: #ffd700;
        margin-bottom: 12px;
    }

    .contact-info p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
    }

    .info-box {
        background: rgba(255, 215, 0, 0.08);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 24px;
    }

    .info-box h3 {
        font-size: 18px;
        color: #ffd700;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .info-box p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    .info-box a {
        color: #ffd700;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .info-box a:hover {
        color: #ffed4e;
        text-decoration: underline;
    }

    /* Contact Form */
    .contact-form {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 12px;
        padding: 32px;
    }

    .contact-form h2 {
        font-size: 24px;
        color: #ffd700;
        margin-bottom: 24px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        font-size: 14px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 215, 0, 0.3);
        border-radius: 6px;
        color: rgba(255, 255, 255, 0.9);
        font-family: inherit;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        background: rgba(0, 0, 0, 0.5);
        border-color: #ffd700;
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.2);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .submit-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #1a0a2e;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    .form-message {
        margin-top: 16px;
        padding: 12px;
        border-radius: 6px;
        text-align: center;
        display: none;
    }

    .form-message.success {
        background: rgba(0, 208, 132, 0.2);
        border: 1px solid rgba(0, 208, 132, 0.5);
        color: #00d084;
        display: block;
    }

    .form-message.error {
        background: rgba(255, 0, 0, 0.2);
        border: 1px solid rgba(255, 0, 0, 0.5);
        color: #ff6b6b;
        display: block;
    }

    /* FAQ Section */
    .faq-section {
        margin-top: 48px;
        padding-top: 48px;
        border-top: 2px solid rgba(255, 215, 0, 0.2);
    }

    .faq-section h2 {
        text-align: center;
        font-size: 32px;
        color: #ffd700;
        margin-bottom: 32px;
    }

    .faq-item {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 8px;
        margin-bottom: 16px;
        overflow: hidden;
    }

    .faq-question {
        padding: 16px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(255, 215, 0, 0.08);
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: rgba(255, 215, 0, 0.12);
    }

    .faq-question h4 {
        font-size: 15px;
        color: #ffd700;
        margin: 0;
    }

    .faq-toggle {
        font-size: 20px;
        color: #ffd700;
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-toggle {
        transform: rotate(180deg);
    }

    .faq-answer {
        padding: 0 16px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
        padding: 16px;
        max-height: 500px;
    }

    .faq-answer p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin: 0;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .contact-content {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .contact-header h1 {
            font-size: 28px;
        }

        .contact-form {
            padding: 20px;
        }

        .faq-section h2 {
            font-size: 24px;
        }
    }
</style>

<!-- Contact Header -->
<section class="contact-container">
    <div class="container">
        <div class="contact-header">
            <h1>📧 Contact Us</h1>
            <p>Have questions or need support? We're here to help!</p>
        </div>

        <!-- Contact Content -->
        <div class="contact-content">
            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>
                    We're committed to providing excellent customer support. 
                    Reach out to us with any questions, suggestions, or issues you may encounter.
                </p>

                <div class="info-box">
                    <h3>📧 Email Support</h3>
                    <p>
                        For any inquiries, please email us at:<br>
                        <a href="mailto:<?php echo COMPANY_EMAIL; ?>">
                            <?php echo COMPANY_EMAIL; ?>
                        </a>
                    </p>
                    <p style="margin-top: 12px; font-size: 12px;">
                        We typically respond within 24 hours during business days.
                    </p>
                </div>

                <div class="info-box">
                    <h3>🎯 Response Time</h3>
                    <p>
                        <strong>Business Hours:</strong> Monday - Friday, 9:00 AM - 6:00 PM IST<br>
                        <strong>Average Response:</strong> 24 hours<br>
                        <strong>Urgent Issues:</strong> Priority support available
                    </p>
                </div>

                <div class="info-box">
                    <h3>❓ Common Issues</h3>
                    <p>
                        Check our <a href="#faq">FAQ section</a> below for answers to common questions. 
                        Most issues can be resolved quickly!
                    </p>
                </div>

                <div class="info-box">
                    <h3>🆘 Need Help?</h3>
                    <p>
                        Visit our <a href="/support.php">Support page</a> for detailed guides and troubleshooting tips.
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Send us a Message</h2>
                <form id="contactForm" onsubmit="handleContactForm(event)">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" placeholder="What is this about?" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" style="width: 100%; padding: 12px; background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 6px; color: rgba(255, 255, 255, 0.9); font-size: 14px;">
                            <option value="">Select a category</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="feedback">Feedback</option>
                            <option value="bug">Bug Report</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" placeholder="Please describe your message in detail..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                    <div id="formMessage" class="form-message"></div>
                </form>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section" id="faq">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <h4>How do I contact support?</h4>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer">
                    <p>
                        You can contact us via email at <?php echo COMPANY_EMAIL; ?>. 
                        We also provide support through this contact form. We aim to respond within 24 hours.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <h4>What should I do if I encounter a bug?</h4>
                    <div class="faq-toggle">▼</div>
                </div>
                <div class="faq-answer">
                    <p>
                        If you find a bug, please report it to us immediately through the contact form above. 
                        Include details about what you were doing when the bug occurred. Our team will investigate and fix it promptly.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <h4>How long does it take to get a response?</h4>
                    <div class="faq-toggle">▼</div>
                </div>
                <div class="faq-answer">
                    <p>
                        We typically respond to all inquiries within 24 hours during business days (Monday-Friday). 
                        Urgent issues may receive priority support. Please be patient and provide as much detail as possible.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <h4>Can I suggest new games or features?</h4>
                    <div class="faq-toggle">▼</div>
                </div>
                <div class="faq-answer">
                    <p>
                        Absolutely! We love hearing from our players. Please use the contact form above and select 
                        "Feedback" as the category. Your suggestions help us improve the platform.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <h4>Is my personal information safe?</h4>
                    <div class="faq-toggle">▼</div>
                </div>
                <div class="faq-answer">
                    <p>
                        Yes, your privacy and security are our top priorities. We use industry-standard encryption 
                        and security measures to protect your information. Please see our Privacy Policy for more details.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function handleContactForm(event) {
        event.preventDefault();
        const form = document.getElementById('contactForm');
        const messageDiv = document.getElementById('formMessage');

        // Validate form
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !subject || !message) {
            messageDiv.textContent = 'Please fill in all required fields.';
            messageDiv.className = 'form-message error';
            return;
        }

        // Simulate form submission
        messageDiv.textContent = 'Thank you for your message! We will get back to you soon.';
        messageDiv.className = 'form-message success';
        form.reset();

        // Hide message after 5 seconds
        setTimeout(() => {
            messageDiv.className = 'form-message';
        }, 5000);
    }

    function toggleFAQ(element) {
        const item = element.parentElement;
        item.classList.toggle('active');
    }
</script>

<?php include '../includes/footer.php'; ?>
