<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DANNY NAV</title>

    <style>
        nav {
            background: #111;
            padding: 15px 25px;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left-box {
            display: flex;
            align-items: center;
        }

        /* Logo Image */
        .logo img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-right: 15px;
        }

        /* Typing text */
        #typing {
            font-size: 24px;
            font-weight: bold;
        }

        .cursor {
            width: 3px;
            background: yellow;
            height: 25px;
            display: inline-block;
            animation: blink 0.8s infinite;
            margin-left: 3px;
        }

        @keyframes blink {
            0% {opacity: 1;}
            50% {opacity: 0;}
            100% {opacity: 1;}
        }

        /* Menu links */
        .menu a {
            color: white;
            margin-left: 25px;
            text-decoration: none;
            font-size: 18px;
        }

        .menu a:hover {
            color: yellow;
        }
    </style>
</head>

<body>

<nav>
    <div class="left-box">
        <!-- LOGO -->
        <div class="logo">
            <img src="logo.png" alt="Danny Logo">
        </div>

        <!-- Typing Title -->
        <div>
            <span id="typing"></span>
            <span class="cursor"></span>
        </div>
    </div>

    <!-- NAV links -->
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </div>
</nav>

<script>
    // Words to cycle
    const words = [
        "UWIZEYIMANA DANNY",
        "PROGRAMMER",
        "DEVELOPER",
        "TECHNICIAN",
        "EARN CASH"
    ];

    let wordIndex = 0;
    let charIndex = 0;

    function typeEffect() {
        const word = words[wordIndex];

        if (charIndex < word.length) {
            document.getElementById("typing").innerHTML += word.charAt(charIndex);
            charIndex++;
            setTimeout(typeEffect, 120);
        } else {
            setTimeout(eraseEffect, 1000);
        }
    }

    function eraseEffect() {
        const word = words[wordIndex];

        if (charIndex > 0) {
            document.getElementById("typing").innerHTML = word.substring(0, charIndex - 1);
            charIndex--;
            setTimeout(eraseEffect, 62);
        } else {
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(typeEffect, 200);
        }
    }

    typeEffect();
</script>

</body>
</html>
