<?php include("header.php");
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <style>
        body {
            background-color: #053742;
        }

        /* .container{  } */

        .card-img-top {
            border-top-right-radius: 25px;
            border-top-left-radius: 25px;
            width: auto;
            height: 200px;
        }

        .col-lg-3 {
            padding: 5px 15px;
            width: 350px;
            margin: 15px;
            background-color: white;
            /* border: 2px solid black; */
            border-radius: 25px;
        }

        .card {
            border-radius: 25px;
            margin: 10px 0px;
            /* border: 2px solid red; */
        }

        /* .btn-primary{
            background-color: #CD113B;
        } */
    </style>


</head>

<body>


    <div class="container mt-5">
        <div class="row">

            <!-- one -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/hotdog.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">price: 80</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Burger">
                            <input type="hidden" name="Price" value="80">
                        </div>
                    </div>
                </form>
            </div>

            <!-- two -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/thali1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Paneer Combo</h5>
                            <p class="card-text">price: 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Paneer Combo">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>

            <!-- three -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/chicken.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">KFC Chicken</h5>
                            <p class="card-text">price: 250</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="KFC Chicken">
                            <input type="hidden" name="Price" value="250">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Four -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/thali2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Special Thali</h5>
                            <p class="card-text">price: 200</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Special Thali">
                            <input type="hidden" name="Price" value="200">
                        </div>
                    </div>
                </form>
            </div>

            <!-- five -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/paneer.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Paneer Tikka</h5>
                            <p class="card-text">price: 100</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Paneer Tikka">
                            <input type="hidden" name="Price" value="100">
                        </div>
                    </div>
                </form>
            </div>

            <!-- six -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/daal.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Daal Makhni</h5>
                            <p class="card-text">price: 130</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Daal Makhni">
                            <input type="hidden" name="Price" value="130">
                        </div>
                    </div>
                </form>
            </div>

            <!-- seventh -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/burger2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Burger Combo</h5>
                            <p class="card-text">price: 130</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Burger Combo">
                            <input type="hidden" name="Price" value="130">
                        </div>
                    </div>
                </form>
            </div>

            <!-- eight -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/chickencurry.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Butter Chicken</h5>
                            <p class="card-text">price: 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Butter Chicken">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>

            <!-- ninth -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/noodles.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Noodles</h5>
                            <p class="card-text">price: 90</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Noodles">
                            <input type="hidden" name="Price" value="90">
                        </div>
                    </div>
                </form>
            </div>

            <!-- tenth -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/pizza2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pan Pizza</h5>
                            <p class="card-text">price: 110</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pan Pizza">
                            <input type="hidden" name="Price" value="110">
                        </div>
                    </div>
                </form>
            </div>

            <!-- eleventh -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/vegkabab.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Veg Kabab</h5>
                            <p class="card-text">price: 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Veg Kabab">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>

            <!-- twelth -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/salad.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Salad</h5>
                            <p class="card-text">price: 30</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Salad">
                            <input type="hidden" name="Price" value="30">
                        </div>
                    </div>
                </form>
            </div>

            <!-- thirteenth -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/pizzacombo.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pizza Combo</h5>
                            <p class="card-text">price: 330</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pizza Combo">
                            <input type="hidden" name="Price" value="330">
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</body>

</html>