<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>1.Designed to deliver results</p>
         <p>2.Classes structured to learn- practice-revise</p>
         <p>3.Tests, quizzes and worksheets for better practice and retention.</p>
         <a href="courses.html" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>350+</h3>
            <span>Online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+10k</h3>
            <span>Brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>150+</h3>
            <span>Expert Instructors</span>
         </div>
      </div>


   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Student's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Courses are well-designed, and most if not all instructors seem genuinely engaged and concerned with the outcome of the learning process. 
            Courses are organized thoughtfully, with content presented in a logical manner.</p>
         <div class="user">
            <img src="images/04.jpg" alt="">
            <div>
               <h3>Raisa Alam</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Hope Academy is the best online tutorial platform on the web for math tutorials.The instructor does a fine job of explaining the skill using a virtual whiteboard and other images.</p>
         <div class="user">
            <img src="images/01.jpg" alt="">
            <div>
               <h3>Saifan Abdullah</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div><br>

      <div class="box">
         <p>Fantastic resource for all!I'm so very impressed with the extensive content available to everyone, for free, via Hope Academy. What a gift!
</p>
         <div class="user">
            <img src="images/02.jpg" alt="">
            <div>
               <h3>Fahad Muntasir</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Hope academy is a gift to students who want to understand topics that they are struggling in school.Currently I'm studying world history, all the materials and exersizes are very useful, interesting and less boring!
         </p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Fabiha Tabassum</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>