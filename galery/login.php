<?php
    session_start();
    if (isset($_SESSION['userid'])) {
        header('location: index.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="" >
    <title>Halaman Login</title>
    <style>
        /* Global Reset */
        body, h1, h2, h3, p, ul, li, table, th, td {
            margin: 0;
            padding: 0;
        }

        /* Body Styles */
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #E0FFFF ;
            color: #333;
        }

        /* Container Styles */
        .container {
            max-width: 3000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #E0FFFF ;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        h1 {
            text-align: center;
            margin-bottom: 50px;
            color: #007BFF;
        }

        /* Form Styles */
        form {
            margin-top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: 50%;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #5F9EA0;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5F9EA0;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            ul li {
                display: block;
                margin-bottom: 10px;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="card card-login mx-auto mt-5 col-md-6">
          <div class="card-header"><i class="fa fa-user"></i></div>
          <div class="card-body">
            <div class="message">
<body>
    <h1>Halaman Login</h1>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form')
        form.addEventListener('submit', (e) => {
            alert('Login berhasil ditambahkan')
        })
    })
</script>
</body>
</html>