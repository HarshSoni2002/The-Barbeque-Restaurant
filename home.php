<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<form action="connect.php" method="POST">
    <!-- HOME SECTION WITH NAV BAR -->

    <section class="topbanner">
        <nav class="navbar">
            <img src="images/logo4.jpg" alt="Image of logo" class="logo">
            <ul>
                <li class="active"> <a href="#">Home</a> </li>
                <li> <a href="index.php">Menu</a> </li>
                <li> <a href="#starters">Starters</a> </li>
                <li> <a href="#table">BookTable</a> </li>
                <li> <a href="#aboutus_down">About Us</a> </li>
                <!-- <li> <a href="#">Home</a> </li> -->
            </ul>
        </nav>
        <div class="topbanner_content">
            <h2>Here you can find delecious foods</h2>
            <h1>Barbeque Restaurant</h1>
            <p>Here you can discover flavour of your choice. So give yourself a treat with lots and lots of love from our chefs and co-workers of restaurant.</p>

            <a href="index.php">Order Right Now</a>
        </div>
    </section>


    <!-- 2ND SECTION WITH CONTACT DETAILS -->


    <section class="contact_details">
        <div class="left_image">
            <!-- <img src="img/cook_01.jpg" alt=""> -->
        </div>
        <div class="mid">
            <h4>We cook delecious</h4>
            <div class="contact-content">
                <span>You can call us on:</span>
                <h6>+91 73534 68910</h6>
            </div>
            <span class="or">or</span>
            <a href="index.php" class="scroll-link" data-id="book-table">Order Now</a>

        </div>
        <div class="right_image">
            <!-- <img src="img/cook_02.jpg" alt=""> -->
        </div>
    </section>


    <!-- 3RD SECTION FOR BOOK TABLE -->


    <section id="table" class="book_table">

        <h2>Book Your Table Now</h2>
        <div class="left_image_of_book_table">
            <!-- <img src="img/book_left_image.jpg" alt=""> -->
        </div>

<div class="form">
            <!-- <form action="action_page.php"> -->
            <div>
           
                <label for="Dayt">Select Day:</label>
                <select required name='Dayt' onchange='this.form()'>
                    <option value="">Select day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>

            </div>

            <div>
                <label for="Timet">Select Time:</label>
                <select required name='Timet' onchange='this.form()'>
                    <option value="">Select hour</option>
                    <option value="10-00">10:00</option>
                    <option value="12-00">12:00</option>
                    <option value="14-00">14:00</option>
                    <option value="16-00">16:00</option>
                    <option value="18-00">18:00</option>
                    <option value="20-00">20:00</option>
                    <option value="22-00">22:00</option>
                </select>

            </div>

            <div>
                <label for="Fullname">Fullname</label>
                <input type="text" name="Fullname" required placeholder="Your name..">
            </div>

            <div>
                <label for="ContactNumber">ContactNumber</label>
                <input type="text" name="ContactNumber" placeholder="+91-9719157***">
            </div>

            <div>
                <label for="Persons">Select Number of Persons:</label> <br>
                <select required class="Persons" name='Persons' onchange='this.form()'>
                    <option value="">How many persons?</option>
                    <option value="1-Person">1 Person</option>
                    <option value="2-Persons">2 Persons</option>
                    <option value="3-Persons">3 Persons</option>
                    <option value="4-Persons">4 Persons</option>
                    <option value="5-Persons">5 Persons</option>
                    <option value="6-Persons">6 Persons</option>
                </select>
            </div>


            <div>
                <input type="Submit" value="Submit"name="save">
            </div>

        </div>
    </section>

    <!-- 4TH SECTION FOR OUR TOP RATED ITEMS -->

    <section id="starters" class="top_rated_food">

        <h2 class="section4hadding">Our Weekly Top Rated Food and new Starters</h2>

        <div class="container">
            <div class="outers outer1">

                <div class="top_img">
                    <!-- <img src="" alt=""> -->
                </div>

                <div class="bottom_details">
                    <h4>Hot dog</h4>
                    <!-- <img src="img/breakfast_item.jpg" alt=""> -->
                    <h4 class="price">rs.450</h4>
                    <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art</p> <br>
                    <a href="index.php">Go and Check</a>
                </div>
            </div>

            <div class="outers outer2">
                <div class="top_img">
                    <!-- <img src="" alt=""> -->
                </div>

                <div class="bottom_details">
                    <h4>paneer combo</h4>
                    <!-- <img src="img/breakfast_item.jpg" alt=""> -->
                    <h4 class="price">rs.450</h4>
                    <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art</p> <br>
                    <a href="index.php">Go and Check</a>
                </div>
            </div>


            <div class="outers outer3">
                <div class="top_img">
                    <!-- <img src="" alt=""> -->
                </div>

                <div class="bottom_details">
                    <h4>kfc chikken</h4>
                    <!-- <img src="img/breakfast_item.jpg" alt=""> -->
                    <h4 class="price">rs.450</h4>
                    <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art</p> <br>
                    <a href="index.php">Go and Check</a>
                </div>
            </div>


            <div class="outers outer4">
                <div class="top_img">
                    <!-- <img src="" alt=""> -->
                </div>

                <div class="bottom_details">
                    <h4>special thali</h4>
                    <!-- <img src="img/breakfast_item.jpg" alt=""> -->
                    <h4 class="price">rs.450</h4>
                    <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art</p> <br>
                    <a href="index.php">Go and Check</a>
                </div>
            </div>



            <div class="outers outer5">
                <div class="top_img">
                    <!-- <img src="" alt=""> -->
                </div>

                <div class="bottom_details">
                    <h4>paneer tikka</h4>
                    <!-- <img src="img/breakfast_item.jpg" alt=""> -->
                    <h4 class="price">rs.450</h4>
                    <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art</p> <br>
                    <a href="index.php">Go and Check</a>
                </div>
            </div>




            <div class="outers outer6">
                <div class="top_img">
                    <!-- <img src="" alt=""> -->
                </div>

                <div class="bottom_details">
                    <h4>daal makhni</h4>
                    <!-- <img src="img/breakfast_item.jpg" alt=""> -->
                    <h4 class="price">rs.450</h4>
                    <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art</p> <br>
                    <a href="index.php">Go and Check</a>
                </div>
            </div>
        </div>

    </section>

    <!-- 5th section for get app  -->

    <section class="get-app">
        <h2>Get Our Application from play Store</h2>
        <a href="#">Download now</a>
    </section>

    <!-- 6th section footer  -->

    <footer>

        <div id="aboutus_down" class="copyright">
            <p>Copyright &copy; 2021 Barbeque Restaurant</p>
        </div>

        <div class="socialmediaicons">
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div>

        <div class="desygned_by">
            <p>Designed by:</p>
            <ul class="desygners">
                <li>Yash Chaudhary</li>
                <li>Harsh Soni</li>
                <li>Azeem Khan</li>
            </ul>
        </div>

    </footer>



</body>

</html>
