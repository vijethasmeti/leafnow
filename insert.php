<!DOCTYPE html>
<html>
    <head>
        <title>Leaf Now</title>
        <link rel="stylesheet" href="spyware.css">
    </head>
    <style>
        .sub {
            background-color: red;
            border: 2px solid black;
            color: White;
            padding: 5px 10px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 10px 30px;
            cursor: pointer;
        }
    </style>
        <body>
            <div class="regbox">
                <img src="images/login.png" class="login">
                <h1>Sell Your Product</h1>
                <form action="home1.php" method="POST" enctype="multipart/form-data">
                    <p>Product Name</p>
                    <input type="text" name="product_name" placeholder="Insert Product Name" required="" >
                    <p>Product Price</p>
                    <input type="text" name="product_price" placeholder="Insert Product Name" required="">
                    <p>Product Details</p>
                    <input type="text" name="product_details" placeholder="Enter Product Details" required="">
                    <input type="file" name="product_image" required="">
                    <button class ="sub" type="submit" onclick="alert('Your Product Has Been Put Up For Sale')">
                        Put For Sale
</button>
                    
</form>
<li><a href="home1.php" target="_blank">HOME</a></li>

    </div>

  </body>
</html>