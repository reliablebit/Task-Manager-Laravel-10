<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Simplify Your Productivity</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }
        
        /* Animated background particles */
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .particle:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
            animation-duration: 6s;
        }
        
        .particle:nth-child(2) {
            left: 20%;
            animation-delay: 1s;
            animation-duration: 8s;
        }
        
        .particle:nth-child(3) {
            left: 30%;
            animation-delay: 2s;
            animation-duration: 7s;
        }
        
        .particle:nth-child(4) {
            left: 40%;
            animation-delay: 0.5s;
            animation-duration: 9s;
        }
        
        .particle:nth-child(5) {
            left: 50%;
            animation-delay: 1.5s;
            animation-duration: 6s;
        }
        
        .particle:nth-child(6) {
            left: 60%;
            animation-delay: 3s;
            animation-duration: 8s;
        }
        
        .particle:nth-child(7) {
            left: 70%;
            animation-delay: 2.5s;
            animation-duration: 7s;
        }
        
        .particle:nth-child(8) {
            left: 80%;
            animation-delay: 0.8s;
            animation-duration: 9s;
        }
        
        .particle:nth-child(9) {
            left: 90%;
            animation-delay: 1.8s;
            animation-duration: 6s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }
        
        .container {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .hero-content {
            text-align: center;
            color: white;
            max-width: 600px;
            animation: fadeInUp 1s ease-out;
        }
        
        .logo {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: pulse 2s ease-in-out infinite;
        }
        
        .title {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffffff, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
        }
        
        .subtitle {
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.6;
        }
        
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2.5rem;
            background: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .cta-button:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            color: white;
        }
        
        .cta-button:active {
            transform: translateY(-1px);
        }
        
        .features {
            display: flex;
            gap: 3rem;
            margin-top: 4rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .feature {
            text-align: center;
            opacity: 0.8;
            max-width: 150px;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .feature-text {
            font-size: 0.9rem;
            font-weight: 300;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .title {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .features {
                gap: 2rem;
                margin-top: 3rem;
            }
            
            .feature {
                max-width: 120px;
            }
            
            .cta-button {
                padding: 0.875rem 2rem;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 1rem;
            }
            
            .title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .features {
                flex-direction: column;
                align-items: center;
                gap: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="hero-content">
            <!-- Logo/Icon -->
            <div class="logo">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            
            <!-- Main Title -->
            <h1 class="title">TaskFlow</h1>
            
            <!-- Subtitle -->
            <p class="subtitle">
                Streamline your productivity with elegant task management.<br>
                Simple, powerful, and beautifully designed.
            </p>
            
            <!-- Call to Action Button -->
            <a href="{{ route('register') }}" class="cta-button">
                <i class="bi bi-arrow-right-circle"></i>
                Get Started Free
            </a>
            
            <!-- Features -->
            <div class="features">
                <div class="feature">
                    <i class="bi bi-lightning-fill feature-icon"></i>
                    <div class="feature-text">Lightning Fast</div>
                </div>
                <div class="feature">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <div class="feature-text">Secure & Private</div>
                </div>
                <div class="feature">
                    <i class="bi bi-palette-fill feature-icon"></i>
                    <div class="feature-text">Beautiful Design</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
