<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD FOR ALL</title>
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

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .square {
            width: 400px; /* Increased container width */
            height: 250px; /* Increased container height */
            background-color: #f8f9fa;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: relative;
            border: 2px solid #007bff;
            overflow: hidden; /* Prevent logo overflow */
        }

        .square:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }

        .symbol {
            font-size: 48px; /* Increased symbol size */
            position: absolute;
            bottom: 10px; /* Adjusted symbol position to bottom */
            left: 50%;
            transform: translateX(-50%);
            z-index: 1; /* Ensure symbols appear above content */
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>FOOD FOR ALL</header>
    <nav>
        <button onclick="showImage(0)"><a href="./index.php">Home</a></button>
        <button onclick="showImage(3)"><a href="./contact.php">Contact</a></button>
    </nav>
    <div class="container">
        <div class="square">
            <h2>Location</h2>
            <p>Regd. Address: SF No. 30/3B, D.No.5/1, Saravana Thottam Road, Kannampalayam Sulur Taluk, Coimbatore - 641402.</p>
            <div class="symbol">&#127968;</div>
        </div>
        <div class="square">
            <h2>Address</h2>
            <p>Office: Corporate Office - No 4, Kothari Layout, 1st street, Ramanathapuram, Coimbatore, Tamilnadu, 641045.</p>
            <div class="symbol">&#127971;</div>
        </div>
        <div class="square">
            <h2>Phone</h2>
            <p>9309436147</p>
            <div class="symbol">&#9742;</div>
        </div>
        <div class="square">
            <h2>Email</h2>
            <p>pranavpathe1404@gmail.com</p>
            <div class="symbol">&#9993;</div>
        </div>
    </div>

    <script>
        function showImage(index) {
            console.log("Show image: " + index);
        }
    </script>
</body>
</html>
