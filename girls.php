<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
	<script src="js/main.js"></script>
</head>
<body>
    <?php include('_includes/header.php'); ?>
    <?php include('_includes/nav.php'); ?>
    
    <h1>Girls</h1>
    
    <div class="product">
        <h3> On-the-GO 600 – Chill Mode </h3>
		<h3>$50.00</h3>
		<img src="images/girls/On_the_GO_600_Chill Mode.jpg" alt="Product 1" class="product_img">
        <button class="more-details">More Details</button>
        <div class="details-section" style="display: none;">
            <p>Walk with warm-weather style and comfort wearing Skechers On-the-GO® 600 – Chill Mode. This sporty thong sandal features a strappy polka dot textile upper with a contoured footbed.</p>
             <div class="size">
				<p>Size : </p>
				<div class="option">1</div>
          		<div class="option">1.5</div>
          		<div class="option">2</div>
          		<div class="option">10</div>
				<div class="option">10.5</div>
			</div>
        </div>
		<button class="add-to-cart">Add to Cart</button>
    </div>
	 <script>
		// JavaScript for toggling description visibility
    const detailButtons = document.querySelectorAll('.more-details');

        detailButtons.forEach(button => {
            button.addEventListener('click', () => {
                const detailsSection = button.nextElementSibling;
                detailsSection.style.display = detailsSection.style.display === 'none' ? 'block' : 'none';
            });
        });
	</script>
       
    <?php include('_includes/footer.php'); ?>
</body>
</html>
