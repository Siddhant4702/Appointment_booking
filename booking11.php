
<?php
// Note : Install and  use XAMPP server. for store data at backend.In Database
$insert=false;
//error_reporting(0);
if(isset($_POST['name'])){
   $insert=true;
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
die("can not connected to database <br> due to " .mysqli_connect_error());
}
else{
   //echo"connected to database";
}

$name = $_POST['name'];
$age = $_POST['age'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
//$date = date('Y-m-d',strtotime($_POST['date']));
$date=$_POST['date'];
$sql="INSERT INTO `dkte_trip`.`book_appt` ( `name`, `age`, `number`, `email`, `address`, `date`) VALUES ( '$name', '$age', '$number', '$email', '$address', '$date');";
//  $sql="INSERT INTO `dkte_trip`.`appointment_booking` ( `name`, `number`, `email`, `date`) VALUES ( '$name', '$number', '$email', '$date');";

if( $con->query($sql) == true){
   // echo "Successfully inserted";
    $insert = true;
    echo"<script> alert('Your appointment is booked');</script>";
}
else{
   echo"<script> alert('Failed to book!!!!!!');</script>";
    echo"ERROR: $sql <br> $con->error"; // used to access key object from $con.
}
//object operator ->
 $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hospital care Booking</title>
    <link rel="stylesheet" href="healthcarestyle.css">
</head>
<body>
<!--HEader section  start -->
<header class="header">

 <a href="#" class="logo" ><i class="fas fa-heartbeat"></i>medcare</a>


 <nav class="navbar">
    <a href="#home"> Home</a>
    <a href="#services">services</a>
    <a href="#about">about</a>
    <a href="#book">book</a>
    <a href="#review">review</a>
    <a href="#blogs">blogs</a> &nbsp;&nbsp;
    <!-- <i class="fa fa-toggle-on" style="font-size:24px"></i>
  -->
  <!-- <button onclick="mydarkmode()">D/M </button> -->
 


</nav>
<div id="menu-btn" class="fas fa-bars">
</div>
</header>
<!--header section end-->

<!--home section starts-->
<section class="home" id="home">
    <div class="image">
        <img src="home_img.svg" alt="">
    </div>
    <div class="content">
        <h3> stay safe ,stay healthy</h3>
        <p>Time and health are two precious assets that we don’t recognize and appreciate until they have been depleted. </p>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda et suscipit quasi, animi sunt delectus?</p> -->
        <a href="http://www.nhp.gov.in/hospital/shri-chatrapati-sivaji-maharaj-sarvopchar-rugnalay-solapur-maharashtra" class="btn"> contact us<span class="fas fa-chevron-right"></span></a>
    </div>
</section>

<!--home section end-->
<!-- icons section starts-->
<section class="icon-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p> doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>
 
    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>
    <div class="icons">
        <i class="fas fa-hospitals"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>
</section>
<!-- icons section ends-->
<!--service section starts-->
<section class="services" id="services">
    <h1 class="heading">our <span> services</span></h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3> free checkup</h3>
            <p>Regular health check-ups are a must for every person.</p>
            <!-- <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, illum!</p> -->
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"> </span></a>
        </div>
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Providing 24x7 fastest Ambulance Service in india,</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"> </span></a>
        </div>
        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>We search best Doctors for your treatment and be insecure. </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"> </span></a>
        </div>
        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicienes</h3>
            <p>Take permmesion before you take medicines from store</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"> </span></a>
        </div>
        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>We provide you good and as per demanded bed Facilities</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"> </span></a>
        </div>
        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>We provide all facilites and take care from our side.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"> </span></a>
        </div>
    </div>
</section>
<!-- service section end-->
<!--about section start-->
<section class="about" id="about">
     <h1 class="heading"> <span>about</span>us</h1>
     <div class="row">
        <div class="image">
            <img src="about_img.svg" alt="">
        </div>
        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p> Self-care is an important tool to help you live a more positive lifestyle. Our day-to-day lives are often fueled by negativity, and these inspiring quotes can help lead you to a more healthy outlook. </p>
                <p>It's often hard to find solitude in today's climate. Many of us are feeling the stresses of having to take care of kids at home on top of a full-time job, and the seemingly constant cycle of negative news doesn't make matters any easier. It's crucial to make sure you're taking care of your physical and mental health.</p>
                     <a href="https://www.countryliving.com/life/inspirational-stories/g32772382/self-care-quotes/?slide=1" class="btn"> learn more<span class="fas fa-chevron-right"></span></a>
        </div>
     </div>
</section>
<!--about section ends-->
<!--doctor section starts-->
<section class="doctors" id="doctors">
    <h1 class="heading">our<span> doctors</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="doc_1.jpg" alt="" >
            <h3>Dr.Aarti Rapol</h3>
            <span> expert doctor</span>
            <div class="share">
                <a href="https://www.facebook.com/ApolloClinicIndia/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/ApolloClinics" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/apolloclinics/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/company/apollo-clinic/" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc_2.jpg" alt >
            <h3>Dr.Abhay Somani
            </h3>
            <span> expert doctor</span>
            <div class="share">
                <a href="https://www.facebook.com/ApolloClinicIndia/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/ApolloClinics" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/apolloclinics/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/company/apollo-clinic/" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc_3.jpg" alt >
            <h3>Dr.Prashant Joshi</h3>
            <span> expert doctor</span>
            <div class="share">
                <a href="https://www.facebook.com/ApolloClinicIndia/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/ApolloClinics" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/apolloclinics/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/company/apollo-clinic/" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc_4.jpg" alt >
            <h3>Dr.Pallab Das</h3>
            <span> expert doctor</span>
            <div class="share">
                <a href="https://www.facebook.com/ApolloClinicIndia/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/ApolloClinics" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/apolloclinics/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/company/apollo-clinic/" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc_5.jpg" alt >
            <h3>Dr.Siddhant G</h3>
            <span> expert doctor</span>
            <div class="share">
                <a href="https://www.facebook.com/ApolloClinicIndia/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/ApolloClinics" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/apolloclinics/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/company/apollo-clinic/" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc_6.jpg" alt >
            <h3>Dr.Abhijeet Shaha</h3>
            <span> expert doctor</span>
            <div class="share">
                <a href="https://www.facebook.com/ApolloClinicIndia/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/ApolloClinics" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/apolloclinics/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/company/apollo-clinic/" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>
</section>
<!--doctor section ends-->
<!--booking section starts-->
<section class="book" id="book">
    <h1 class="heading"><span> book</span> now</h1>
    <div class="row">
        <div class="image">
            <img src="book_img.svg" alt="">
        </div>
        <form action="booking11.php" method="POST">
            <h3> book appointment</h3>
            <input type="text" name="name" id="t1" placeholder="your Name" class="box">
            <input type="number" name="age"  id="age" placeholder="Enter Age" class="box">
            <input type="number" name="number"  id="n1" placeholder="your Number" class="box">
            <input type="email" name="email" id="email" placeholder="your Email" class="box">
            <input type="text" name="address"  id="address" placeholder="Enter Address" class="box">
            <input type="date" name="date"  id="d1" class="box date">
            <input type="submit" name="save_data"  value="book now" id="btnid"class="btn">
        </form>
    </div>
</section>
<!-- booking section end-->
<!--review section starts-->
<section class="review" id="review">
    <h1 class="heading">client<span>review</span></h1>
    <div class="box-container">
        <div class="box">
         <img src="pic_1.png" alt="">
        <h3>Anurag G</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <p class="text">
        Recently visited health check up department of Apollo Hospital for a whole body check up. The entire process from check in to the end was seamless. The staff at the health check department was courteous, helpful and very attentive. I would highly recommend this hospital to anyone looking for something similar services.
        </p>
    </div>
    <div class="box">
        <img src="pic_2.png" alt="">
       <h3>preshita K</h3>
       <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
       </div>
       <p class="text">
       Dr Vijay Kumar Chennamchetty: We met Dr Vijay Chennamchetty last month with severe cough and sputum for my father Dr Varaprasad. His way of handling patients is excellent and so soothing that the patient feels immensely confident about recovery. Thanks to Dr. Vijay, within 2 weeks, he is completely normal.
       </p>
   </div>
   <div class="box">
    <img src="pic_3.png" alt="">
   <h3>Rushikesh B</h3>
   <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
   </div>
   <p class="text">
   It's very well mannered staff good coordination with patients. Mrs. Praveena garu assisted very well and taken good care towards patients. Overall experience is satisfactory.
   </p>
</div>
    </div>
</section>
<!--review section ends-->
<!-- blog section starts-->
<section class="blogs" id="blogs">
    <h1 class="heading"> our<span> blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="cancer.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#" > <i class="fas fa-calender"></i>1st may,2022</a>
                    <a href="#" > <i class="fas fa-user"></i>by admin</a>
                </div>
                <h3>How Cancer Starts, Grows and Spreads?</h3>
                <p>Cancer affects millions of people around the world. It has been the focus of many medical and scientific studies.</p>
                <pre> 
                    

                
                    </pre>
               <a href="https://www.maxhealthcare.in/blogs/cancer-starts-grows-spreads" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="heart_winter.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#" > <i class="fas fa-calender"></i>1st may,2022</a>
                    <a href="#" > <i class="fas fa-user"></i>by admin</a>
                </div>
                <h3>Don't Ignore The Warning Signs of Heart Attacks</h3>
                <p>Chest pain is considered the most common sign of a heart attack. However, heart attacks may present with other symptoms like breathlessness and lightheadedness.</p>
               <a href="https://www.maxhealthcare.in/blogs/dont-ignore-warning-signs-heart-attacks" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="therapy.jpg" alt="" >
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#" > <i class="fas fa-calender"></i>1st may,2022</a>
                    <a href="#" > <i class="fas fa-user"></i>by admin</a>
                </div>
                <h3>Precautions With Progesterone Therapy</h3>
                <p> Dizziness or giddiness and caution when driving or operating machines, especially in the initial days of therapy.</p>
                <pre> 
                    


            </pre>
               <a href="https://www.maxhealthcare.in/blogs/precautions-with-progesterone-therapy" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- blog section end-->
<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctor</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs</a>
        </div>
        <div class="box">
            <h3> our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>cardioloty</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+775-797-4969</a>
            <a href="#"> <i class="fas fa-phone"></i>+775-797-4969</a>
            <a href="#"> <i class="fas fa-envelope"></i>siddhantgaikwad@gmail.com</a>
            <a href="#"> <i class="fas fa-envelope"></i>siddhantgaikwad@gmail.com</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>mumbai ,india-4001004</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facbook-f"></i> facebook</a>  
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>  
            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>  
            <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#"> <i class="fab fa-pinterest"></i>pinterest</a>  
            <a href="#"> <i class="fab fa-facbook-f"></i> facebook</a>           
         </div>
    </div>
    <div class="credit">
        created by <span>mr. siddhant gaikwad </span> | all rights reservsed
    </div>
</section>
<!--footer section end-->
    <script src="js/script.js">
function mydarkmode(){
    var ele=document.body;
    ele.classList.toggle('light-mode');
}

    </script>

</body>
</html>