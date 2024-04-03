<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD FOR ALL - FAQ</title>
    <style>
        body {
            background-image: url(./image_back.jpeg);
            background-size: cover;
            background-position: center;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        header {
            text-align: center;
            padding: 20px;
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border: 5px solid #87CEEB;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: black;
            overflow-y: auto;
            max-height: 600px;
        }

        .faq-item {
            margin-bottom: 30px;
        }

        .question {
            font-size: 1.8em;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .question:hover {
            color: #0056b3;
        }

        .answer {
            font-size: 1.2em;
            line-height: 1.6;
            display: none;
        }

        .answer.active {
            display: block;
        }

        /* Additional styling */
        details {
            cursor: pointer;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary::before {
            content: '▶';
            color: #007bff;
            margin-right: 5px;
        }

        summary:focus {
            outline: none;
        }

        summary:focus::before {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <header>FOOD FOR ALL - FAQ</header>
    
    <nav>
        <button onclick="navigateTo('home.php')"><a href="./index.php">Home</a></button>
        <button onclick="navigateTo('faq.php')"><a href="./faq.php">FAQ</a></button>
    </nav>

    <div class="container">

        <div class="faq-item">
            <details>
                <summary class="question">Q: What is the process for becoming a volunteer?</summary>
                <p class="answer">To become a volunteer, visit our "Volunteer" section and fill out the volunteer registration form. Once registered, you will receive information about upcoming volunteer opportunities and events.</p>
            </details>
        </div>

        <div class="faq-item">
            <details>
                <summary class="question">Q: How does FOOD FOR ALL ensure the safety of donated food?</summary>
                <p class="answer">FOOD FOR ALL follows strict safety and hygiene protocols to ensure the quality and safety of donated food. We work closely with food providers and adhere to food safety regulations to guarantee that only safe and consumable food reaches those in need.</p>
            </details>
        </div>

        <!-- Additional FAQ items -->

        <div class="faq-item">
            <details>
                <summary class="question">Q: Can businesses partner with FOOD FOR ALL for surplus food donation?</summary>
                <p class="answer">Yes, businesses can partner with FOOD FOR ALL to donate surplus food. By joining our surplus food donation program, businesses can contribute to reducing food waste and supporting communities in need.</p>
            </details>
        </div>

        <div class="faq-item">
            <details>
                <summary class="question">Q: Is FOOD FOR ALL available internationally?</summary>
                <p class="answer">Currently, FOOD FOR ALL operates primarily in [Your Location]. However, we are exploring opportunities to expand our reach and impact internationally in the future.</p>
            </details>
        </div>

        <div class="faq-item">
            <details>
                <summary class="question">Q: How can individuals contribute to FOOD FOR ALL's mission?</summary>
                <p class="answer">Individuals can contribute to FOOD FOR ALL's mission by volunteering their time, making monetary donations, or spreading awareness about our initiatives. Every contribution, big or small, makes a positive impact on the communities we serve.</p>
            </details>
        </div>

        <div class="faq-item">
            <details>
                <summary class="question">Q: Does FOOD FOR ALL accept perishable food items?</summary>
                <p class="answer">Yes, FOOD FOR ALL accepts perishable food items, provided they meet our safety and quality standards. We have established guidelines to ensure the proper handling and distribution of perishable items to minimize food waste.</p>
            </details>
        </div>

        <!-- Add more FAQ items as needed -->

    </div>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }

        // Add event listeners to toggle FAQ answers
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.question');
            const answer = item.querySelector('.answer');

            question.addEventListener('click', () => {
                answer.classList.toggle('active');
            });
        });
    </script>

</body>
</html>
