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
    
    <h1>Shop</h1>
    
    <!-- Product Display Section -->    
  <div class = "productsList">
    <div class="product">
        <h3> Skechers Slip-ins: Vigor 3.0 – Drafting </h3>
		<h3>$147.00</h3>
		<img src="images/men/Skechers_Slip_ins_Vigor_3.0_Drafting.jpg" alt="Product 1" class="product_img">
        <button class="more-details">More Details</button>
        <div class="details-section" style="display: none;">
            <p>Feet forward comfort and sleek style combine in Skechers Hands Free Slip-ins® : Vigor 3.0 – Drafting. Designed with our Exclusive Heel Pillow™, this convenient style features a leather, mesh and synthetic upper with adjustable laces, a Skechers Air-Cooled Memory® insole and a high traction anti-slip Goodyear® Rubber Outsole.</p>
            <div class="size">
				<p>Size : </p>
				<div class="option">8</div>
          		<div class="option">9</div>
          		<div class="option">9.5</div>
          		<div class="option">10</div>
				<div class="option">10.5</div>
			</div>
        </div>
		<button class="add-to-cart">Add to Cart</button>
    </div>
	  <div class="product">
        <h3>Skechers Slip-ins: After Burn M. Fit – Ridgeburn </h3>
		<h3> $145.00 </h3>
		<img src="images/men/After_burn_m_fit_ridgeburn.jpg" alt="Product 2" class="product_img">
        <button class="more-details">More Details</button>
        <div class="details-section" style="display: none;">
            <p>Step into supportive comfort wearing Skechers Hands Free Slip-ins®: After Burn Memory Fit – Ridgeburn. This TOUCHLESS FIT™ outdoor style features a mesh and duraleather upper with our exclusive Heel Pillow™ that securely holds your foot in place.</p>
            <div class="size">
				<p>Size : </p>
				<div class="option">8</div>
          		<div class="option">9</div>
          		<div class="option">9.5</div>
          		<div class="option">10</div>
				<div class="option">10.5</div>
			</div>
        </div>
		<button class="add-to-cart">Add to Cart</button>
	</div>
      
    <?php include('_includes/footer.php'); ?>
</body>
</html>
