<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>
<body>
    <?php include('_includes/header.php'); ?>
    <?php include('_includes/nav.php'); ?>
    
    <h1>Contact Us</h1>
    <main>
        <section>
            <div class="right_content">
                <p>We're here to help! Please use the form below to send us your questions or feedback. We'll get back to you as soon as possible.</p>
            </div>
            <div class="right_content">
                <form action="submit_form.php" method="post" onsubmit="return validateForm()">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="question">Question:</label>
					<textarea id="question" name="question" rows="8" required></textarea>
    				<span id="charCount" class="char-count">0/100 characters remaining</span><br><br>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>
    
    <?php include('_includes/footer.php'); ?>
</body>
</html>
