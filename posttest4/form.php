
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Li-Ning Official</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="form.css" />
    <link rel="icon" type="image/svg+xml" href="lining.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Login Form -->
    <div class="login-container">
        <div class="form-wrapper">
            <img src="lining.png" class="login-logo" alt="Li-Ning Logo">
            <h2>Login</h2>
            <form action="process.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="username">Nama:</label>
                    <input type="text" id="username" name="username" required placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required placeholder="Masukkan password Anda">
                </div>
                <div class="form-group">
                    <label for="age">Umur:</label>
                    <input type="number" id="age" name="age" required min="1" max="100" placeholder="Masukkan umur Anda">
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-button">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
