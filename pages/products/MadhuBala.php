<?php include '../../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadhuBala Fabric</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #28a745;
            --secondary-color: #FFE5D9;
            --neutral-light: #f8f9fa;
            --neutral-dark: #333;
            --shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        body {
            background-color: var(--neutral-light);
            color: var(--neutral-dark);
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Title Animation */
        .product-title {
            font-family: 'Playfair Display', serif;
            color: var(--neutral-dark);
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            animation: fadeInUp 1.5s ease;
        }

        /* Carousel styling and animation */
        .product-carousel {
            border: 4px solid var(--primary-color);
            border-radius: 15px;
            padding: 15px;
            background-color: white;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            animation: zoomIn 1.5s ease;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.5s ease;
        }

        .carousel-item img:hover {
            transform: scale(1.05);
        }

        /* Specs container animation and style */
        .specs-container {
            background-color: var(--secondary-color);
            padding: 25px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            animation: fadeInUp 1.5s ease;
        }

        .spec-item {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .spec-label {
            background-color: var(--primary-color);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
            min-width: 120px;
            text-align: center;
            margin-right: 15px;
            box-shadow: var(--shadow);
            animation: fadeInUp 1.5s ease;
        }

        .spec-value {
            font-size: 1.1em;
            color: var(--neutral-dark);
            animation: fadeInUp 1.5s ease;
        }

        /* Sample image hover effect */
        .sample-image {
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
            animation: fadeInUp 1.5s ease;
        }

        .sample-image:hover {
            transform: scale(1.05);
        }

        /* Segment title animation */
        .segment-title {
            color: var(--primary-color);
            font-size: 2em;
            margin: 40px 0 20px;
            font-weight: 600;
            animation: fadeInUp 1.5s ease;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div id="productCarousel" class="carousel slide product-carousel" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        
            <div class="carousel-item active">
                <img src="../productimg/MadhuBala1.jpg" class="d-block w-100" alt="MadhuBala View 1">
            </div>
                    </div>
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product-title">MadhuBala</h1>
                <div class="specs-container">
                <div class="spec-item">
                        <span class="spec-label">Based on</span>
                        <span class="spec-value">Lycra Fabric</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Colour Chart</span>
                        <span class="spec-value">8 Colours</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Weight (100m)</span>
                        <span class="spec-value"></span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Width</span>
                        <span class="spec-value">56"</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Length/Meter</span>
                        <span class="spec-value">100</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Approx GSM</span>
                        <span class="spec-value"></span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Used For</span>
                        <span class="spec-value">Shirts, T-shirts, Kurtis, Kurtas, and Co-Ord Sets </span>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="segment-title">Sample Products</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="../productimg/sample1.jpg" class="img-fluid sample-image" alt="Sample Product 1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="../productimg/sample2.jpg" class="img-fluid sample-image" alt="Sample Product 2">
            </div>
            <div class="col-md-4 mb-4">
                <img src="../productimg/sample3.jpg" class="img-fluid sample-image" alt="Sample Product 3">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php include '../../includes/footer.php'; ?>
</body>
</html>