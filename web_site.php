<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Website intership</title>
<link rel="stylesheet" href="desing.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header class="header">
<a href="#" class="Logo"><i class='bx bx-buildings'></i><span>S</span>tudent-<span>i</span>ntership </a>
   <nav class="navbar">
    <button class="bntLogin-popup">student</button>
<button class="BntLogin-popup">Admin</button>
</nav>
</header>

 <section class="home" >
<div class="text-sci">
    <h2>Welcome! <br>
        <span>To Our New Website</span></h2>
    <p> your first step for work.</p>
    <!-- <div class="Social-icons">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-whatsapp'></i></a>
        <a href="#"><i class='bx bxl-telegram'></i></a>
    </div>-->
</div> 
 </section> 
   <section class="section">
    <div class="wrapper" >
    <span class="icon-close"><i class='bx
            bx-x'></i></span>
         <div class="logreg-box">
           <!-- login form-->
            <div class=" form-box login">
           <div class="logreg-title">
               <h2>Login</h2>

    <p>please login to use the platform </p>
    </div>
    <form action="Login.php" method="post">
        <div class="input-box"> 
            <span class="icon"><i class='bx
                bxs-envelope'></i></span>
            <input  name="Email" type="email"   required>
            <label>Email</label>

        </div>
            <div class="input-box"> 
                <span class="icon"><i class='bx
                 bxs-lock-alt'></i></span>
                <input  name="Password" type="password"  required>
                <label>Password</label>
        </div>
        <!-- <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">forgot password?</a>
        </div>-->
<button type="submit"
      class="btn">Login</button>
<div class="logreg-link">
    <p>D'ont have an account?<a href="#"class="register-link"> Register</a></p>
</div>
    </form>
</div>
<!--register form -->
    <div class=" form-box register">
   <div class="logreg-title">
       <h2>Registeration</h2>

<p>please provide the following to verify your identity   </p>
</div>
<form action="SingUP.php" method="post">
    <div class="input-box"> 
        <span class="icon"><i class='bxbxs-user'></i></span>
        <input name="Fullname" type="text" required>
        <label>Full Name</label>

    </div>
<div class="input-box"> 
    <span class="icon"><i class='bxbxs-envelope'></i></span>
    <input type="email" name="email"  required>
    <label>Email</label>
</div>
    <div class="input-box"> 
        <span class="icon"> <i class='bxbxs-lock-alt'></i></span>
        <input type=" password" name="password" required>
        <label>Password</label>
</div>
<!--<div class="remember-forgot">
    <label><input type="checkbox"> I agree to the terms & conditions</label>
    
</div>-->
   <button type="submit"
      class="btn">Register</button>
            <div class="logreg-link">
                       <p>Already have an account?<a
                         href="#"class="login-link"> Login</a>
</p>
</div>
</form>
</div>
</div>

</section> 
<!--<section class="about" id="about">
    <div class="about-img">
        <img src="AdobeStock_174072328_Preview.jpeg" alt="">
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Us</span></h2>
        <h3>Hi,we are Here To Help Your Next Work </h3>
        <p>At Moz, we believe there is a better way to do marketing. A more valuable way where customers
             are earned rather than bought. We're obsessively passionate about it, and our
              mission is to help people achieve it. We focus on search engine optimization. 
              It's one of the least understood and least transparent aspects of great marketing,
               and we see that as an opportunity. We're excited to simplify SEO for everyone through our software,
                education, and community.</p>  
     </div>
</section> -->

<script src="script.js"></script>
</body>
</html>