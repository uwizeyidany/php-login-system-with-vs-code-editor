<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Typing & Changing Title</title>

    <style>
        nav {
            background: #222;
            padding: 15px;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #typing {
            font-size: 24px;
            font-weight: bold;
        }

        .cursor {
            display: inline-block;
            width: 3px;
            background: yellow;
            margin-left: 3px;
            animation: blink 0.8s infinite;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        .menu a {
            color: white;
            margin-left: 20px;
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
    <div>
        <span id="typing"></span>
        <span class="cursor"></span>
    </div>

    <div class="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="myfamily">myfamilyinfo</a>
    </div>
</nav>

<script>
    const words = [
        "DANNY",
        "PROGRAMMER",
        "DEVELOPER",
        "TECHNICIAN"
    ];

    let wordIndex = 0;
    let charIndex = 0;
    let speed = 120;

    function typeEffect() {
        const currentWord = words[wordIndex];
        const typingElement = document.getElementById("typing");

        if (charIndex < currentWord.length) {
            typingElement.innerHTML += currentWord.charAt(charIndex);
            charIndex++;
            setTimeout(typeEffect, speed);
        } else {
            setTimeout(eraseEffect, 1000); // Akaruhuko gato mbere yo gusiba
        }
    }

    function eraseEffect() {
        const typingElement = document.getElementById("typing");
        const currentWord = words[wordIndex];

        if (charIndex > 0) {
            typingElement.innerHTML = currentWord.substring(0, charIndex - 1);
            charIndex--;
            setTimeout(eraseEffect, 60);
        } else {
            wordIndex = (wordIndex + 1) % words.length; // Hindura ijambo
            setTimeout(typeEffect, 200);
        }
    }

    typeEffect();
</script>

</body>
</html>
