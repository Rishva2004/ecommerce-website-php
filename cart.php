<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
	<style>
		img{
			width: 200px;
			height: 200px;
		}
	</style>
</head>
<body>
	   <?php include('_includes/header.php'); ?>
    <?php include('_includes/nav.php'); ?>
    
    <!-- Product Display Section -->
    <div class="productsList">
        <!-- Product elements as provided in the question -->
    </div>
    
    <div class="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
        </ul>
    </div>
	<script>
		// Get all "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    // Attach click event listener to each button
    addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Get product details
            const productContainer = button.parentElement;
            const productName = productContainer.querySelector("h3").innerText;
            const productPrice = productContainer.querySelector("h3").nextElementSibling.innerText;
            const productImage = productContainer.querySelector("img").src;

            // Create cart item
            const cartItem = {
                name: productName,
                price: productPrice,
                image: productImage
            };

            // Add item to cart (you can use local storage or any other method)
            addToCart(cartItem);
        });
    });

    // Function to add item to cart
    function addToCart(item) {
        // Retrieve cart items from local storage
        let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

        // Add new item to cart
        cartItems.push(item);

        // Update local storage
        localStorage.setItem("cartItems", JSON.stringify(cartItems));

        // Refresh cart display
        displayCart();
    }

    // Function to display cart items
    function displayCart() {
        const cartItemsContainer = document.getElementById("cart-items");
        cartItemsContainer.innerHTML = "";

        // Retrieve cart items from local storage
        const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

        // Display each item in the cart
        cartItems.forEach(item => {
            const li = document.createElement("li");
            li.innerHTML = `<img src="${item.image}" alt="${item.name}"> ${item.name} - ${item.price}`;
            cartItemsContainer.appendChild(li);
        });
    }

    // Display cart items when page loads
    displayCart();
   
	</script>
		        <button class="checkout"> Checkout </button>

	    <?php include('_includes/footer.php'); ?>

</body>
</html>
