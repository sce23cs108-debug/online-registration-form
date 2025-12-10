<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #e4e9f0; /* subtle professional background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .result-container {
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 15px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.12); /* smooth shadow */
            width: 650px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .result-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 45px rgba(0,0,0,0.18);
        }

        /* Header */
        .header h2 {
            margin: 0 0 25px 0;
            font-size: 30px;
            color: #007bff;
            text-align: center;
            letter-spacing: 0.5px;
        }

        /* Info section using flex for alignment */
        .info {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .info-row {
            display: flex;
            gap: 15px;
            padding: 6px 10px;
            border-radius: 6px;
            align-items: center;
        }

        .info-row .label {
            width: 160px; /* fixed width for straight alignment */
            font-weight: 600;
            color: #007bff;
            font-size: 16px;
        }

        .info-row .value {
            flex: 1;
            color: #333;
            font-size: 16px;
        }

        /* Alternating subtle background for better readability */
        .info-row:nth-child(odd) {
            background: #f8f9fb;
        }

        /* Responsive */
        @media (max-width: 700px) {
            .result-container {
                width: 90%;
                padding: 25px 20px;
            }
            .info-row .label {
                width: 130px;
                font-size: 15px;
            }
            .info-row .value {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'Name' => htmlspecialchars($_POST['name'] ?? ''),
                'Email' => htmlspecialchars($_POST['email'] ?? ''),
                'Phone' => htmlspecialchars($_POST['phone'] ?? ''),
                'Date of Birth' => htmlspecialchars($_POST['dob'] ?? ''),
                'Gender' => htmlspecialchars($_POST['gender'] ?? ''),
                'Address' => htmlspecialchars($_POST['address'] ?? ''),
                'City' => htmlspecialchars($_POST['city'] ?? ''),
                'State' => htmlspecialchars($_POST['state'] ?? ''),
                'Pin Code' => htmlspecialchars($_POST['pincode'] ?? ''),
                'Qualification' => htmlspecialchars($_POST['qualification'] ?? ''),
                'Skills' => htmlspecialchars($_POST['skills'] ?? ''),
                'Course' => htmlspecialchars($_POST['course'] ?? '')
            ];

            // Header
            echo '<div class="header"><h2>Registration Successful!</h2></div>';

            // Info section
            echo '<div class="info">';
            foreach ($data as $label => $value) {
                echo '<div class="info-row">';
                echo '<div class="label">' . $label . ':</div>';
                echo '<div class="value">' . $value . '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
