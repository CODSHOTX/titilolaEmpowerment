<?php

include_once 'header.php';

?>

<div class="contained card bg-dark text-white">
  <img src="image/header_background.jpg" height="250" class="card-img" alt="...">
  <div class="content card-img-overlay">
    <h5 class="display-6 font-sans-sherif text-center">Contact Us</h5>
  </div>
</div>

<div class="row bg-light mx-0 ">
  <div class="col-md-6 bg-light my-2 p-5">
    <h4>Contact Info</h4>
    <p class="text-justify">If you have any questions, please feel free to drop me a line. If you dont get an answer immediately, I might just be travelling through the middle of nowhere. We will get back to you as soon as we can. That's is a promise</p>
    <h6 class="mt-4 m-0 fs-5">Address</h6>
    <p class="text-justify">No 9, PZ Road, Isehin byepass, oyo town, Oyo State, Nigeria</p>
    <h6 class="mt-4 mb-0 fs-5">Phone</h6>
    <p class="text-justify">+234-7032868406</p>
    <h6 class="mt-4 mb-0 fs-5">E-mail</h6>
    <p class="text-justify">info@taempowerment.org.ng</p>
    <h6 class="mt-4 mb-2 fs-5">Social Media Handles</h6>
    <a class="text-light mr-2" href="https://web.facebook.com/profile.php?id=61561013292302" target="_blank"><i class="bi bi-facebook text-success" style="font-size: 1.8rem; margin: 5px;"></i></a>
    <a class="text-light mr-2" href="https://www.instagram.com/taempowerment01?utm_source=qr&igsh=MWVwaHhzM3NoZWxycQ=="  target="_blank"><i class="bi bi-instagram text-success" style="font-size: 1.8rem; margin: 5px;"></i></a>
    <a class="text-light mr-2" href="https://www.linkedin.com/company/103662606/" target="_blank"><i class="bi bi-linkedin text-success" style="font-size: 1.8rem; margin: 5px;"></i></a>
    <a class="text-light" href="https://....." target="_blank"><i class="bi bi-youtube text-success"style="font-size: 1.8rem; margin: 5px;"></i></a>
  </div>
  <div class="col-md-6 bg-light my-2 p-5">
    <h4>Contact Form</h4>
    <form action="/action_page.php" method="POST">
      <label for="fname">First Name</label>
      <input class="form-control" type="text" name="firstname" placeholder="Your first name..">

      <label for="lname">Last Name</label>
      <input class="form-control" type="text" name="lastname" placeholder="Your last name..">

      <label for="lname">Email Address</label>
      <input class="form-control" type="text" name="email" placeholder="Your email address..">

      <label for="subject">Subject</label>
      <textarea class="form-control" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>

</div>


<?php

include_once 'footer.php';

?>
