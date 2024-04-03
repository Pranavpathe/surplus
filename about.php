<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD FOR ALL</title>
    <style>
        body {
            background-image: url('./image_back.jpeg');
            background-size: cover;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            overflow: auto; /* Enable scrolling */
        }

        header {
            text-align: center;
            padding: 30px;
            background-color: #007bff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            font-size: 2.5em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        nav {
            text-align: center;
            background-color: #007bff;
            padding: 20px;
            border-bottom: 2px solid #0056b3;
        }

        nav button {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            margin: 0 15px;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav button:hover {
            color: #E0FFFF;
            transform: scale(1.1);
        }

        nav button a {
            text-decoration: none;
            color: white;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border: 5px solid #007bff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: justify;
            line-height: 1.6;
        }

        h1,
        h3 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        center {
            text-align: center;
        }

        h1 {
            font-size: 2.2em;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.5em;
            margin-bottom: 30px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 30px;
        }

        li {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #333;
        }

        .additional-content {
            margin-top: 30px;
        }

        .additional-content p {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #333;
        }
    </style>
</head>

<body>
    <header>FOOD FOR ALL</header>

    <nav>
        <button onclick="navigateTo('#home')"><a href="./index.php">Home</a></button>
        <button onclick="navigateTo('#about')">About</button>
    </nav>

    <div class="content">
        <center>
            <h1>WELCOME TO FOOD FOR ALL</h1>
        </center>
        <center>
            <h3>Connecting Surplus Food Providers with Those in Need</h3>
        </center>

        <!-- Key Features Section -->
        <center>
            <h1>Key Features</h1>
        </center>
        <ul>
            <li>Donation System: Easily donate surplus food from your business or organization.</li>
            <li>Search and Request: Users can find nearby available surplus food and make requests.</li>
            <li>User Profiles: Manage your donations, requests, and community engagement through personalized profiles.</li>
            <li>Community Collaboration: Connect with local businesses, organizations, and individuals to foster a supportive community.</li>
        </ul>

        <!-- Additional Content Section -->
        <div class="additional-content">
            <center>
                <h1>Our Impact</h1>
            </center>
            <p>Since the inception of FOOD FOR ALL, we have made a significant impact on reducing food waste and providing
                meals to those in need. Our collaborative efforts with local communities continue to grow, making a
                positive difference in people's lives.</p>

            <center>
                <h1>Get Involved</h1>
            </center>
            <p>We welcome individuals, businesses, and organizations to join us in our mission. Whether you want to
                contribute surplus food, volunteer your time, or support us financially, every effort counts towards
                building a more sustainable and compassionate future.</p>
        </div>
    </div>

    <script>
        // JavaScript for interactive content
        const content = document.querySelector('.content');

        content.addEventListener('click', () => {
            // Add interactive behavior here, e.g., show/hide additional information, animations, etc.
            alert('Thank you for exploring FOOD FOR ALL!');
        });

        function navigateTo(sectionId) {
            // Implement navigation logic to the specified section
            const section = document.querySelector(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
</body>

</html>