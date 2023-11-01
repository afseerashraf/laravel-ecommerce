<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<div class="super_container">
	
	<!-- Header -->
	
	@include('users.templates.header')

<!-- PRODUCT LIST -->

    <div class="container">
    <div class="row">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.simplyshopping.in/cdn/shop/products/index3_edfdeecb-5c87-481e-8c93-c1ac7b089256_2048x2048.jpg?v=1632396061" class="card-img-top" alt="Product 1"height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">Dell</h5>
                    <p class="card-text">Rating: 4.5</p>
                    <p class="card-text">Price: $19.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Product 2" height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">hp</h5>
                    <p class="card-text">Rating: 4.2</p>
                    <p class="card-text">Price: $24.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>
		<!--product 3-->
        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlJhYizflh824hCZn1sLk_Zcmd4nSCgCUAkFubHIff8ulSQzaiOEYrFmInahtP-xtNgts&usqp=CAU" class="card-img-top" alt="Product 2" height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">Thoshiba</h5>
                    <p class="card-text">Rating: 4.2</p>
                    <p class="card-text">Price: $24.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Add more product cards as needed -->
    </div>

<br>
    <div class="row">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-finish-select-202207-pink_FMT_WHH?wid=1280&hei=492&fmt=p-jpg&qlt=80&.v=1693063155178" class="card-img-top" alt="Product 1"height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">iphone</h5>
                    <p class="card-text">Rating: 4.5</p>
                    <p class="card-text">Price: $19.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.samsung.com/is/image/samsung/p6pim/in/sm-a145fzsdins/gallery/in-galaxy-a14-sm-a145-sm-a145fzsdins-536656254?$650_519_PNG$" class="card-img-top" alt="Product 2" height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">samsung</h5>
                    <p class="card-text">Rating: 4.2</p>
                    <p class="card-text">Price: $24.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>
		<!--product 3-->
        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2ONuLwtFxRmqOns6s-qQWMJdJK8rm6tsNkg&usqp=CAU" class="card-img-top" alt="Product 2" height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">nothing</h5>
                    <p class="card-text">Rating: 4.2</p>
                    <p class="card-text">Price: $24.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Add more product cards as needed -->
    </div>
<br>
	<div class="row">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHISygrbwOoUQiIp3bLllRZf0IwejQAfFeLg&usqp=CAU" class="card-img-top" alt="Product 1"height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">gotherage</h5>
                    <p class="card-text">Rating: 4.5</p>
                    <p class="card-text">Price: $19.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.reliancedigital.in/medias/Samsung-RF87A9770SG-Refrigerators-492391820-i-2-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w2NDM4N3xpbWFnZS9qcGVnfGltYWdlcy9oODQvaDI5Lzk2NTE2OTY1MzM1MzQuanBnfDZkMmY5YWQ3YTgzNGY4OGE4MTBhODVjNTY3MmM2M2M5OTU0NDliNGUwZGFiNmU4ODEwMDAyNTM0MWIyZjQ3MDY" class="card-img-top" alt="Product 2" height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">samsung</h5>
                    <p class="card-text">Rating: 4.2</p>
                    <p class="card-text">Price: $24.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>
		<!--product 3-->
        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCG86oSB1S3AOd0ujrmWt6QHKlQZ6Cl3gjmA&usqp=CAU" class="card-img-top" alt="Product 2" height="200" width="150">
                <div class="card-body">
                    <h5 class="card-title">whirpool</h5>
                    <p class="card-text">Rating: 4.2</p>
                    <p class="card-text">Price: $24.99</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Add more product cards as needed -->
    </div>
</div>

	
	<div style="height: 700px">
		

	</div>

</div>
</body>
</html>