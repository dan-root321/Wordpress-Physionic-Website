<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physionic Website</title>
    <!-- <link rel="stylesheet" href="/dist/css/main.min.css"> -->
    <?php  wp_head()?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
    <body> 
        <div class="bannerBg">

            <header class="header py--2">
                <div class="container">
                    <div class="header__wrapper d--flex align--center justify--between">
                        <h2 class="text--light">Physionic</h2>

                        <nav class="nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>

                        <div class="toggle__menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
        
                    </div>
                </div>
            </header>

            <section class="banner text--center">
                <div class="container">
                    <div class="banner__wrapper">
                        <div class="banner__intro text--light">
                            <h1 class="mb--3"><?php echo get_field("banner") ?></h1>
                            <p class="mb--5 text--light"><?php echo get_field("banner_p") ?></p>
                            <ul>
                                <li><a class="btn bg--primary br--25" href="#">Get Qoute Now</a></li>
                                <li><a class="btn bg--primary br--25 bg--transparent" href="#">Learn More</a></li>
                            </ul>
                        </div>
                        <div class="banner__appointment bg--light">
                            <h3 class="text--secondary text--center mb--3">Book Appointment</h3>
                            <form action="">
                                <label for="Name">Name</label> <br>
                                <input type="text" name="" id="" placeholder="Full Name"> <br>
        
                                <label for="Email">Email Address</label> <br>
                                <input type="email" name="" id="" placeholder="example@gmail.com"> <br>
        
                                <label for="Email">Department</label> <br>
                                <select>
                                    <option value="">Please Select</option>
                                    <option value="">Department 1</option>
                                    <option value="">Department 2</option>
                                    <option value="">Department 3</option>
                                    <option value="">Department 4</option>
                                    <option value="">Department 5</option>
                                </select> <br>
        
                                <label for="Email">Time</label> <br>
                                <input type="text" name="" id="" placeholder=""> <br>
        
                                <input type="submit" class="btn bg--primary bd--none" value="Book Appointment">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>