<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed: ' . mysqli_connect_error());

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address');
    }
    if (!is_numeric($number)) {
        die('Invalid number');
    }

    // Periksa apakah pesan sudah ada dalam database
    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email =  '$email' AND number = '$number' AND message = '$msg' ") or die('Query failed: ' . mysqli_error($conn));

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'Message sent already';
    } else {
        $query = "INSERT INTO `contact_form`(name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')";
        mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));
        $message = 'Message sent successfully!';
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Muhammad Fadly</title>

    <!-- font awasome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- aos css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
</head>
<body>


<?php 

if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" data-aos="zoom-out">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
    }
}

?>

<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portofolio</a>

    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#portofolio">portofolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="https://web.facebook.com/muhammad.fadly.5099940" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/fadly_chaniago_/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/muhammad-fadly-30a24a285/" class="fab fa-linkedin"></a>
        <a href="https://github.com/FadlyChaniago" class="fab fa-github "></a>
    </div>

</header>

<!-- header section ends  -->

<!-- home section starts -->

<section class="home" id="home">

    <div class="image" data-aos="fade-right">
        <img src="img/home.JPG" alt="">
    </div>

    <div class="content" >
        <h3 data-aos="fade-up">hi, i am Muhammad Fadly</h3>
        <span data-aos="fade-up">Web Developer & Android Developer</span>
        <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempora reiciendis voluptatum fugiat repellendus sed.</p>
        <a data-aos="fade-up" href="#about" class="btn">about me</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>

    <div class="biography">
        <p data-aos="fade-up">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, fuga. Consequuntur pariatur aperiam quo suscipit, quam dolorum neque dolores accusantium?</p>

        <div class="bio">
            <h3 data-aos="zoom-in"><span>name : </span> Muhammad Fadly </h3>
            <h3 data-aos="zoom-in"><span>email : </span> fadlymuhamad313@gmail.com </h3>
            <h3 data-aos="zoom-in"><span>address : </span> Depok, Jawabarat, Indonesia </h3>
            <h3 data-aos="zoom-in"><span>phone : </span> 085771038535 </h3>
            <h3 data-aos="zoom-in"><span>age : </span> 22 tahun </h3>
        </div>

        <a href="#" class="btn" data-aos="fade-up"> download CV </a>
    </div>

    <div class="skills" data-aos="fade-up">

        <h1 class="heading"><span>skills</span></h1>

        <div class="progress">
            <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>85%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>CSS</span><span>80%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>Javascript</span><span>65%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span>60%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>JAVA</span><span>65%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>ANDROID STUDIO</span><span>75%</span></h3></div>
        </div>

    </div>

    <div class="edu-exp">

        <h1 class="heading" data-aos="fade-up"><span>education & experience</span></h1>

        <div class="row">

            <div class="box-container">

                <h3 class="title" data-aos="fade-right">education</h3>

                <div class="box" data-aos="fade-right">
                    <span>(2019 - 2023)</span>
                    <h3>Mahasiswa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum incidunt et excepturi maxime unde officiis.</p>
                </div>
                <div class="box" data-aos="fade-right">
                    <span>(2019 - 2023)</span>
                    <h3>Mahasiswa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum incidunt et excepturi maxime unde officiis.</p>
                </div>

            </div>
            <div class="box-container"data-aos="fade-up">

                <h3 class="title"data-aos="fade-left">education</h3>
    
                <div class="box"data-aos="fade-left">
                    <span>(2019 - 2023)</span>
                    <h3>Mahasiswa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum incidunt et excepturi maxime unde officiis.</p>
                </div>
                <div class="box"data-aos="fade-left">
                    <span>(2019 - 2023)</span>
                    <h3>Mahasiswa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum incidunt et excepturi maxime unde officiis.</p>
                </div>
    
            </div>
        </div>
    </div>

</section>

<!-- about section ends -->

<!-- services section starts -->

<section class="services" id="services">

    <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

    <div class="box-container">
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nesciunt quod molestiae laudantium reiciendis cumque.</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-brush"></i>
            <h3>Graphic Design</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nesciunt quod molestiae laudantium reiciendis cumque.</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>Bootstrap</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nesciunt quod molestiae laudantium reiciendis cumque.</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>Woordpress</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nesciunt quod molestiae laudantium reiciendis cumque.</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-brush"></i>
            <h3>Graphic Design</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nesciunt quod molestiae laudantium reiciendis cumque.</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-brush"></i>
            <h3>Graphic Design</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nesciunt quod molestiae laudantium reiciendis cumque.</p>
         </div>
    </div>

</section>

<!-- services section ends -->

<!-- portofolio section starts -->

<section class="portofolio" id="portofolio">
    

    <h1 class="heading" data-aos="fade-up"><span>portofolio</span></h1>

    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <img src="img/porto1.jpg" alt="">
            <h3>Web Development</h3>
            <span> (2022 - 2023) </span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="img/porto1.jpg" alt="">
            <h3>Web Development</h3>
            <span> (2022 - 2023) </span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="img/porto1.jpg" alt="">
            <h3>Web Development</h3>
            <span> (2022 - 2023) </span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="img/porto1.jpg" alt="">
            <h3>Web Development</h3>
            <span> (2022 - 2023) </span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="img/porto1.jpg" alt="">
            <h3>Web Development</h3>
            <span> (2022 - 2023) </span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="img/porto1.jpg" alt="">
            <h3>Web Development</h3>
            <span> (2022 - 2023) </span>
        </div>
    </div>


</section>

<!-- portofolio section ends -->

<!-- contact section starts -->


<section class="contact" id="contact">


    <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your phone" class="box" required>
        <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
        <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>085771038535</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>fadlymuhamad313@gmail.com</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker"></i>
            <h3>address</h3>
            <p>Depok, Jawabarat - 16517</p>
        </div>
    </div>
</section>


<!-- contact section ends -->

<div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Fadly Chaniago</span></div>


























<!-- custom js file link -->
<script src="js/script.js"></script>

<!-- aos js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration:800,
        delay:300,
    });

</script>
    
</body>
</html>