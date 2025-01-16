<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo htmlspecialchars($_POST['role']);

    if (isset($_POST['role'])) {
        $role = $_POST['role'];

        if ($role === 'admin') {
            header('Location: /admin/login.php');
            exit;
        } elseif ($role === 'client') {
            header('Location: /user/login.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 1s ease-in-out;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Card styling */
        .role-selection-card {
            background: #fff;
            color: #333;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            max-width: 400px;
            width: 90%;
            text-align: center;
            transform: scale(0.95);
            transition: transform 0.4s ease-in-out;
        }

        .role-selection-card:hover {
            transform: scale(1);
        }

        /* Headings */
        h1 {
            font-size: 26px;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            margin-top: 10px;
        }

        /* Button styling */
        button {
            padding: 12px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .role-selection-card {
                padding: 20px;
            }

            button {
                width: 90%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="role-selection-card">
        <h1>Complaints System</h1>
        <p>Please select your role:</p>
        <form method="POST">
            <button type="submit" name="role" value="client">I am a Client</button>
            <button type="submit" name="role" value="admin">I am an Admin</button>
        </form>
    </div>
</body>
</html>
