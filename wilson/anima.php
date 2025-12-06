<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Typing Nav with Links</title>

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

        /* Title iri kwandikwa */
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

        /* Menu links */
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
    <!-- Title iri kwandikwa ijambo ku ijambo -->
    <div>
        <span id="typing"></span>
        <span class="cursor"></span>
    </div>

    <!-- Menu Links -->
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        
    </div>
</nav>

<script>
    // Ijambo riri kwandikwa muri nav
    const text = "DANNY PROGRAMMER"; 
    const speed = 120; 
    let index = 0;

    function typeEffect() {
        if (index < text.length) {
            document.getElementById("typing").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, speed);
        }
    }

    typeEffect();
</script>

</body>
</html>
