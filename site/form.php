<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css" />
    <title>Feedback</title>
</head>
<body>
    <form method="post">
        <label for="name">Numele:</label>
        <input type="text" name="name" required><br>
        
        <label for="email">Emailul:</label>
        <input type="email" name="email" required><br>
        
        <label for="message">Textul mesajului:</label>
        <textarea name="message" required></textarea><br>
        
        <input type="submit" value="Trimite">
        <?php require 'index.php'; ?>
    </form>
</body>
</html>