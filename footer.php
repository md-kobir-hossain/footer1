<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Enhanced Footer</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background: #f0f0f0;
        min-height: 100vh;
    }

    .footer-top {
        height: 10vmin;
        width: 100%;
        background: linear-gradient(135deg, #00254e 0%, #013569 50%, #001a3d 100%);
        color: #ffb606;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3vmin;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-top: 3px solid #ffb606;
        position: relative;
        overflow: hidden;
        box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.3);
    }

    .footer-top::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 182, 6, 0.1), transparent);
        transform: rotate(45deg);
        animation: shimmer 4s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }

    /* Back to Top Button */
    .back-to-top {
        color: #ffb606;
        text-decoration: none;
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 1vmin 3vmin;
        border: 2px solid transparent;
        border-radius: 30px;
        background: rgba(255, 182, 6, 0.1);
        backdrop-filter: blur(10px);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1;
    }

    .back-to-top::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(255, 182, 6, 0.2), rgba(255, 255, 255, 0.1));
        border-radius: 30px;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .back-to-top:hover {
        color: white;
        transform: translateY(-5px);
        border-color: rgba(255, 182, 6, 0.5);
        box-shadow: 0 8px 25px rgba(255, 182, 6, 0.3);
    }

    .back-to-top:hover::before {
        opacity: 1;
    }

    .back-to-top i {
        font-size: 2.5vmin;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-5px); }
        60% { transform: translateY(-3px); }
    }

    /* Footer */
    .footer {
        background: linear-gradient(135deg, #011246ff 0%, #001033 50%, #000a22 100%);
        color: white;
        font-family: 'Arial', sans-serif;
        text-align: center;
        animation: fadeIn 1.5s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 50%, rgba(255, 182, 6, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 182, 6, 0.03) 0%, transparent 50%),
            radial-gradient(circle at 40% 80%, rgba(255, 182, 6, 0.04) 0%, transparent 50%);
        pointer-events: none;
    }

    /* Footer Content Grid */
    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 4vmin 3vmin;
        max-width: 1400px;
        margin: auto;
        position: relative;
        z-index: 1;
        gap: 2vmin;
    }

    /* Footer Sections */
    .footer-section {
        flex: 1;
        min-width: 250px;
        margin-bottom: 3vmin;
        padding: 2vmin;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 15px;
        border: 1px solid rgba(255, 182, 6, 0.1);
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .footer-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 182, 6, 0.05), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .footer-section:hover {
        transform: translateY(-8px);
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(255, 182, 6, 0.3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3), 0 0 20px rgba(255, 182, 6, 0.1);
    }

    .footer-section:hover::before {
        opacity: 1;
        animation: rotate 3s linear infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Titles */
    .footer-section h3 {
        font-size: 2.8vmin;
        margin-bottom: 2.5vmin;
        position: relative;
        padding-bottom: 1vmin;
        font-weight: 700;
        letter-spacing: 1px;
        background: linear-gradient(45deg, #ffb606, #ffd700);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .footer-section h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, #ffb606, transparent);
        border-radius: 2px;
        transition: width 0.4s ease;
    }

    .footer-section:hover h3::after {
        width: 100%;
    }

    /* Links */
    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin: 1.2vmin 0;
        position: relative;
        padding-left: 20px;
        transition: all 0.3s ease;
    }

    .footer-section ul li::before {
        content: '▶';
        position: absolute;
        left: 0;
        color: #ffb606;
        font-size: 1.5vmin;
        transition: all 0.3s ease;
        opacity: 0.7;
    }

    .footer-section ul li:hover::before {
        transform: translateX(5px);
        opacity: 1;
    }

    .footer-section ul li a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: all 0.4s ease;
        font-weight: 500;
        position: relative;
        display: inline-block;
    }

    .footer-section ul li a::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #ffb606, #ffd700);
        transition: width 0.4s ease;
    }

    .footer-section ul li a:hover {
        color: #ffb606;
        transform: translateX(5px);
    }

    .footer-section ul li a:hover::after {
        width: 100%;
    }

    /* Builder Info Enhanced */
    .builder-info {
        background: linear-gradient(135deg, rgba(255, 182, 6, 0.05), rgba(0, 16, 51, 0.1));
        border: 2px solid rgba(255, 182, 6, 0.2);
    }

    .builder-info p {
        margin: 1vmin 0;
        font-weight: 500;
        line-height: 1.6;
    }

    .builder-info a {
        color: #ffb606;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .builder-info a:hover {
        color: #ffd700;
        text-shadow: 0 0 10px rgba(255, 182, 6, 0.5);
    }

    /* Social Icons Enhanced */
    .social-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 2vmin;
    }

    .social-icons a {
        color: white;
        font-size: 2.8vmin;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 182, 6, 0.1);
        border: 2px solid transparent;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .social-icons a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, #ffb606, #ffd700);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 50%;
    }

    .social-icons a i {
        position: relative;
        z-index: 1;
    }

    .social-icons a:hover {
        transform: translateY(-8px) scale(1.1);
        border-color: #ffb606;
        box-shadow: 0 8px 25px rgba(255, 182, 6, 0.4);
    }

    .social-icons a:hover::before {
        opacity: 1;
    }

    .social-icons a:hover i {
        color: white;
    }

    /* Footer Bottom Enhanced */
    .footer-bottom {
        margin-top: 3vmin;
        font-size: 2.2vmin;
        border-top: 2px solid rgba(255, 182, 6, 0.3);
        padding: 2.5vmin;
        background: rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
    }

    .footer-bottom::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 182, 6, 0.1), transparent);
        animation: slide 3s infinite;
    }

    @keyframes slide {
        0% { left: -100%; }
        100% { left: 100%; }
    }

    .footer-bottom p {
        position: relative;
        z-index: 1;
        font-weight: 600;
        letter-spacing: 1px;
    }

    /* Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Adjustments */
    @media (max-width: 1024px) {
        .footer-content {
            padding: 3vmin 2vmin;
            gap: 1.5vmin;
        }

        .footer-section {
            min-width: 200px;
            padding: 1.5vmin;
        }
    }

    @media (max-width: 768px) {
        .footer-top {
            height: 12vmin;
            font-size: 3.5vmin;
        }

        .footer-content {
            flex-direction: column;
            align-items: center;
            padding: 4vmin 2vmin;
        }

        .footer-section {
            min-width: 100%;
            text-align: center;
            margin-bottom: 2vmin;
        }

        .footer-section h3 {
            font-size: 4vmin;
        }

        .footer-section ul li {
            padding-left: 0;
        }

        .footer-section ul li::before {
            display: none;
        }

        .footer-section ul li a {
            font-size: 3vmin;
        }

        .social-icons a {
            font-size: 4vmin;
            width: 60px;
            height: 60px;
        }

        .footer-bottom {
            font-size: 3vmin;
        }

        .back-to-top {
            padding: 1.5vmin 2.5vmin;
        }
    }

    @media (max-width: 480px) {
        .footer-top {
            height: 10vmin;
            font-size: 4vmin;
            padding: 0 2vmin;
        }

        .footer-content {
            padding: 3vmin 1.5vmin;
        }

        .footer-section {
            padding: 2vmin 1vmin;
        }

        .footer-section h3 {
            font-size: 4.5vmin;
        }

        .footer-section ul li a {
            font-size: 3.5vmin;
        }

        .social-icons {
            gap: 15px;
        }

        .social-icons a {
            font-size: 4.5vmin;
        }

        .footer-bottom {
            font-size: 3.5vmin;
            padding: 2vmin;
        }

        .back-to-top {
            font-size: 3.5vmin;
        }
    }

    /* Special hover effects */
    .footer-section:nth-child(1):hover {
        background: rgba(52, 152, 219, 0.05);
    }

    .footer-section:nth-child(2):hover {
        background: rgba(155, 89, 182, 0.05);
    }

    .footer-section:nth-child(3):hover {
        background: rgba(46, 204, 113, 0.05);
    }

    .footer-section:nth-child(4):hover {
        background: rgba(231, 76, 60, 0.05);
    }
</style>
<body>
    <footer class="footer">
        <div class="footer-top">
            <a href="index.php" class="back-to-top">
                <i class="fas fa-arrow-up"></i>
                Back to Top
            </a>
        </div>
        <div class="footer-content">

            <!-- Quick Links -->
            <div class="footer-section">
                <h3><i class="fas fa-link"></i> Quick Links</h3>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-info-circle"></i> About Us</a></li>
                    <li><a href="#"><i class="fas fa-cogs"></i> Services</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Departments -->
            <div class="footer-section">
                <h3><i class="fas fa-graduation-cap"></i> Departments</h3>
                <ul>
                    <li><a href="#"><i class="fas fa-code"></i> Computer Science & Engineering</a></li>
                    <li><a href="#"><i class="fas fa-calculator"></i> Mathematics</a></li>
                    <li><a href="#"><i class="fas fa-book"></i> English</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Accounting</a></li>
                </ul>
            </div>

            <!-- Builder Info -->
            <div class="footer-section builder-info">
                <h3><i class="fas fa-user-tie"></i> Developer Information</h3>
                <div class="builder-details">
                    <p><i class="fas fa-user"></i> <strong>Md. Kobir Hossain</strong></p>
                    <p><i class="fas fa-university"></i> Kishoreganj University</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:kobir.17372@gmail.com">kobir.17372@gmail.com</a></p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+8801317372031">+880 1317372031</a></p>
                </div>
            </div>
        </div>
                    <!-- Social Media Links -->
            <div class="footer-section social">
                <h3><i class="fas fa-share-alt"></i> Connect With Us</h3>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook" title="Follow us on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" aria-label="Twitter" title="Follow us on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="Instagram" title="Follow us on Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" aria-label="LinkedIn" title="Connect on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" aria-label="YouTube" title="Subscribe to our channel">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Kishoreganj University Student Information System | All Rights Reserved | Developed with ❤️</p>
        </div>
    </footer>
</body>
</html>