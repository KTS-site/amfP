<?php include 'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa; /* Light background for better contrast */
        color: #343a40; /* Dark text color */
    }

    /* Fade-in animation for the welcome text */
    .fade-in {
        opacity: 0;
        animation: fadeIn 2s forwards;
    }
    @keyframes fadeIn {
        to { opacity: 1; }
    }

    /* Smooth scroll animation for the description text */
    .slide-in {
        transform: translateX(100px);
        opacity: 0;
        animation: slideIn 2s forwards;
    }
    @keyframes slideIn {
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Button hover animation */
    .btn-animate:hover {
        transform: scale(1.1);
        transition: transform 0.3s;
        background-color: #0056b3; /* Darker blue on hover */
    }

    .product-title {
        font-family: 'Lora', serif;
        font-weight: 700;
        color: #007bff; /* Primary blue color for the title */
        margin-bottom: 20px;
    }

    h3 {
        color: #495057; /* Darker shade for subheadings */
        margin-top: 20px;
    }

    p {
        font-family: 'Lora', serif; /* Improved font style for paragraph */
        font-size: 1.1em; /* Slightly larger text for readability */
        line-height: 1.6; /* Increased line height for better readability */
        color: #495057; /* Darker text color for better contrast */
    }

    .carousel-inner img {
        border-radius: 15px; /* Rounded corners for images */
    }

    .text-center h2 {
        margin-top: 30px;
        font-weight: 700;
        color: #6c757d; /* Secondary text color */
    }

    .btn-primary {
        background-color: #007bff; /* Primary button color */
        border: none;
    }

    .info-box {
        background-color: #ffffff; /* White background for the box */
        border-radius: 15px; /* Rounded corners for the box */
        padding: 20px; /* Padding inside the box */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }
</style>

<div class="container mt-5 text-center">
    <h1 class="product-title fade-in">Welcome to Arvind Mills Fabrics</h1>
    
    <div class="info-box mb-4">
        <div class="row justify-content-center">
            <!-- Image Carousel -->
            <div class="col-md-6">
                <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="s1.jpg" class="d-block w-100" alt="S1">
                        </div>
                        <div class="carousel-item">
                            <img src="s2.jpg" class="d-block w-100" alt="S2">
                        </div>
                        <div class="carousel-item">
                            <img src="s3.jpg" class="d-block w-100" alt="S3">
                        </div>
                        <div class="carousel-item">
                            <img src="s4.jpg" class="d-block w-100" alt="S4">
                        </div>
                        <div class="carousel-item">
                            <img src="s5.jpg" class="d-block w-100" alt="S5">
                        </div>
                    </div>
                    <a class=" carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <h3 class="mt-3">Inside Our Shop</h3>
            </div>
            
            <div class="col-md-6 text-left slide-in">
                <p>
                    With over 25 years of experience in the textile industry, our textile shop has been a trusted name for the past 20 years.<br><br>
                    We specialize in creating high-quality fabrics, offering an impressive collection of over 70 dyed fabrics with a 
                    colour chart of 10 - 150 colours per quality and more than 300 unique digital print designs.<br><br>
                    Our textiles are supplied to numerous fashion retail brands, both offline and online, ensuring that our 
                    creations reach a wide audience. We are dedicated to providing exceptional products that inspire designers and delight customers.
                </p>
            </div>
        </div>
    </div>

    <div class="text-center fade-in">
        <h2>Explore our collection of beautifully dyed and printed fabrics.</h2>
        <a href="pages/product.php" class="btn btn-primary btn-animate">Explore Our Exclusive Collection</a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>