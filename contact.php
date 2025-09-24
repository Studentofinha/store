<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="Contact Our Store — questions, support, partnerships.">
    <meta name='keywords' content="contact, support, help, customer service">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contact</title>
    <style>
        
    </style>
</head>

<body id="contact">


<?php include "includes/nav.php" ?>

<?php include "includes/header.php" ?>

    <main>
        <section class="contact-hero">
            <h2>We’re here to help</h2>
            <p>Have a question about an order or our products? Send us a message and we’ll respond within one business day.</p>
        </section>

        <section class="contact-layout">
            <div class="contact-info beautiful-contact-info">
                <h3>
                    <span style="vertical-align: middle; color: #4f8cff; font-size: 1.3em;">&#128222;</span>
                    Contact Information
                </h3>
                <ul class="contact-details-list">
                    <li>
                        <span class="contact-icon" style="color:#38e6c5;">&#9993;</span>
                        <strong>Email:</strong>
                        <a href="mailto:support@ourstore.com" class="contact-link">support@ourstore.com</a>
                    </li>
                    <li>
                        <span class="contact-icon" style="color:#4f8cff;">&#128222;</span>
                        <strong>Phone:</strong>
                        <a href="tel:+1234567890" class="contact-link">+1 (234) 567-890</a>
                    </li>
                    <li>
                        <span class="contact-icon" style="color:#ffb347;">&#128337;</span>
                        <strong>Working Hours:</strong>
                        <span>Mon–Fri, 9:00–18:00</span>
                    </li>
                </ul>
                <div class="contact-divider"></div>
                <div class="contact-note">
                    <span style="color:#38e6c5;">&#128172;</span>
                    <em>We aim to respond to all inquiries within <strong>1 business day</strong>.</em>
                </div>
            </div>
            <style>
                .beautiful-contact-info {
                    background: #fff;
                    border-radius: 18px;
                    box-shadow: 0 4px 24px rgba(79,140,255,0.08);
                    padding: 32px 28px 24px 28px;
                    margin-bottom: 24px;
                    max-width: 370px;
                    min-width: 260px;
                    font-size: 1.07rem;
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                }
                .beautiful-contact-info h3 {
                    font-size: 1.35rem;
                    font-weight: 700;
                    margin-bottom: 18px;
                    letter-spacing: 0.01em;
                    display: flex;
                    align-items: center;
                    gap: 0.5em;
                }
                .contact-details-list {
                    list-style: none;
                    padding: 0;
                    margin: 0 0 10px 0;
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                }
                .contact-details-list li {
                    display: flex;
                    align-items: center;
                    gap: 0.6em;
                    font-size: 1.05em;
                }
                .contact-icon {
                    font-size: 1.2em;
                    margin-right: 0.2em;
                }
                .contact-link {
                    color: #4f8cff;
                    text-decoration: none;
                    transition: color 0.2s;
                }
                .contact-link:hover, .contact-link:focus {
                    color: #38e6c5;
                    text-decoration: underline;
                }
                .contact-divider {
                    border-top: 1px solid #e6eaf3;
                    margin: 12px 0 8px 0;
                }
                .contact-note {
                    font-size: 0.98em;
                    color: #555;
                    display: flex;
                    align-items: center;
                    gap: 0.5em;
                }
            </style>
            <div class="contact-form-card">
                <h3>Send us a message</h3>
                <form action="#" method="post" class="contact-form" novalidate>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="name">Full name</label>
                            <input type="text" id="name" name="name" required placeholder="Your name">
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="How can we help?">
                        </div>
                        <div class="form-field">
                            <label for="order">Order ID (optional)</label>
                            <input type="text" id="order" name="order" placeholder="#12345">
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Write your message..."></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="beautiful-btn">
                            <span>✉️</span> Send message
                        </button>
                        <style>
                        .beautiful-btn {
                            background: linear-gradient(90deg, #4f8cff 0%, #38e6c5 100%);
                            color: #fff;
                            border: none;
                            border-radius: 30px;
                            padding: 12px 32px;
                            font-size: 1.1rem;
                            font-weight: 600;
                            cursor: pointer;
                            box-shadow: 0 4px 16px rgba(79,140,255,0.15);
                            transition: background 0.3s, transform 0.2s, box-shadow 0.2s;
                            display: inline-flex;
                            align-items: center;
                            gap: 0.5em;
                        }
                        .beautiful-btn:hover, .beautiful-btn:focus {
                            background: linear-gradient(90deg, #38e6c5 0%, #4f8cff 100%);
                            transform: translateY(-2px) scale(1.04);
                            box-shadow: 0 8px 24px rgba(56,230,197,0.18);
                            outline: none;
                        }
                        .beautiful-btn span {
                            font-size: 1.2em;
                            margin-right: 0.3em;
                        }
                        </style>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include "includes/footer.php" ?>



    <script src="javascript/script.js"></script>

</body>

</html>