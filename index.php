<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>

    <!-- CSS STYLE LINK -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>

<!-- DESKTOP -->
  <section id="desktop">
  <div class="container">
    <div class="desktopContent">
      <div class="desktopHead">
        <h1>Desktop Version, Coming Soon</h1>
      </div>
      <div class="image">
        <img src="assets\img\background.gif" alt="" class="img-fluid">
      </div>
      <div class="footer">
        <p>Available on your Mobile Device</p>
      </div>
    </div>
  </div>
  </section>

<!-- TABLET -->

  <section id="tablet">
  <div class="container">
    <div class="tabletContent">
      <div class="tabletHead">
        <h1>Tablet Version, Coming Soon</h1>
      </div>
      <div class="image">
        <img src="assets\img\background-desktop.gif" alt="" class="img-fluid">
      </div>
      <div class="footer">
        <p>Available on your Mobile Device</p>
      </div>
    </div>
  </div>
  </section>

<!-- MOBILE -->

  <section class="lazy" id="mobile">
    <nav class="navbar navbar-light bg-light">
     <span class="navbar-brand mb-0 h1 ">COVID-19</span>
     <span><a href="https://ko-fi.com/hendurhance"><i class="fas fa-donate icon-nav"></i></a></span>
    </nav>
    <!-- END OF TOP NAV -->

<!-- INFORMATION -->
  <div id="home" class="container-content actives">
  <div class="header-main">
       <h6>CORONAVIRUS</h6>
     </div>
   <div class="container">

   <!-- COVID STATS -->
    <div class="covid-stats">
     <h6 class="country">Nigeria Statistics</h6>
       <div class="row">
         <div class="col">
           <h3 class="data-value" id="cases"></h3>
           <h6 class="data-cap">Confirmed</h6>
         </div>
         <div class="col">
         <h3 class="data-value" id="deaths"></h3>
           <h6 class="data-cap">Death</h6>
         </div>
         <div class="col">
           <h3 class="data-value" id="deathsPercent"></h3>
           <h6 class="data-cap">Death Rate</h6>
         </div>
       </div>
     </div>

     <!-- END OF COVID STATS -->
     <div class="covid-about">
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus</p>
      <p>Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
      <h6 class="about-head">Symptoms</h6>
      <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate symptoms.</p>
      <p><i class="fas fa-angle-double-right"></i> Common symptoms:</p>
      <ol>
        <li>fever</li>
        <li>tiredness</li>
        <li>dry cough</li>
      </ol>
      <p><i class="fas fa-angle-double-right"></i> Some people may experience:</p>
      <ol>
        <li>aches and pains.</li>
        <li>nasal congestion</li>
        <li>runny nose</li>
        <li>sore throat</li>
        <li>diarrhoea</li>
      </ol>
      <p>On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</p>
      <p>People with mild symptoms who are otherwise healthy should self-isolate. Seek medical attention if you have a fever, a cough, and difficulty breathing. Call ahead.</p>
      <h6 class="about-head">How It Spreads</h6>
      <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.</p>
      <p>You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.</p>
      <h6 class="about-head">Prevention</h6>
      <p><i class="fas fa-angle-double-right"></i> To prevent the spread of COVID-19:</p>
      <ol>
        <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
        <li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
        <li>Don’t touch your eyes, nose or mouth.</li>
        <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
        <li>Stay home if you feel unwell.</li>
        <li>If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.</li>
        <li>Follow the directions of your local health authority.</li>
      </ol>
      <p>Avoiding unneeded visits to medical facilities allows healthcare systems to operate more effectively, therefore protecting you and others.</p>
      <h6 class="about-head">Treatments</h6>
      <p>To date, there are no specific vaccines or medicines for COVID-19.</p>
      <p>Treatments are under investigation, and will be tested through clinical trials.</p>
      <p><i class="fas fa-angle-double-right"></i> Self Care</p>
      <p>To date, there are no specific vaccines or medicines for COVID-19.</p>
      <p>If you feel sick you should rest, drink plenty of fluid, and eat nutritious food. Stay in a separate room from other family members, and use a dedicated bathroom if possible. Clean and disinfect frequently touched surfaces.</p>
      <p>Everyone should keep a healthy lifestyle at home. Maintain a healthy diet, sleep, stay active, and make social contact with loved ones through the phone or internet. Children need extra love and attention from adults during difficult times. Keep to regular routines and schedules as much as possible.</p>
      <p>It is normal to feel sad, stressed, or confused during a crisis. Talking to people you trust, such as friends and family, can help. If you feel overwhelmed, talk to a health worker or counsellor.</p>
      <p><i class="fas fa-angle-double-right"></i> Medical Treatment</p>
      <p>If you have mild symptoms and are otherwise healthy, self-isolate and contact your medical provider or a COVID-19 information line for advice.</p>
      <p>Seek medical care if you have a fever, a cough, and difficulty breathing. Call in advance.</p>
      <br><br>
       <div class="about-me">
        <a href="about.php"><i class="fas fa-user"></i> About App</a>
       </div>
      <br><br><br>
      </div>
   </div>

  </div>
  
  <!-- END OF COVID INFO -->
  <!-- LINK PHP PROCESS FILE -->
  <?php include 'inc/process.php'; ?>

   <!-- STATISTIC -->
  <div id="stats" class="container-content">
   <div class="stats-main">
     <div class="container">
       <div class="stats-head">
         <h6>WORLDWIDE STATISTICS</h6>
       </div>
       <div class="total-stats">
         <div class="row">
           <div class="col">
             <h3 class="stats-value"><?php echo $total_confirmed;?></h3>
             <h6 class="stats-cap">Confirmed</h6>
           </div>
           <div class="col">
             <h3 class="stats-value"><?php echo $total_recovered;?></h3>
             <h6 class="stats-cap">Recoveres</h6>
           </div>
           <div class="col">
             <h3 class="stats-value"><?php echo $total_deaths;?></h3>
             <h6 class="stats-cap">Death</h6>
           </div>
       </div>
       </div>
         <div class="bg-light p-3 my-3 text-center">
           <h5 class="text-warn">"Prevention is the Cure"</h5>
           <p class="text-warn">Stay Indoors Stay Safe</p>
         </div>

         <!-- DATA TABLE -->
         <div class="table-responsive">
           <table class="table">
             <thead class="thead-stats">
               <tr>
                 <th scope="col">Countries</th>
                 <th scope="col">Confirmed</th>
                 <th scope="col">Recovered</th>
                 <th scope="col">Death</th>
               </tr>
             </thead>
             <tbody>
               <!-- FOREACH LOOP FOR DATA -->
               <?php
                 foreach($data as $key => $value){
                  $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                ?>
               <tr>
                 <th scope="row"> <?php echo $key?> </th>
                   <td>
                   <?php echo $value[$days_count]['confirmed'];?>
                       <?php if($increase != 0){ ?>
                       <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                     <?php } ?> 
                   </td>
                   <td><?php echo $value[$days_count]['recovered'];?></td>
                    <td><?php echo $value[$days_count]['deaths'];?></td>
               </tr>
              <?php }?>
             </tbody>
           </table>
           <br><br><br>
         </div>
     </div>
   </div>
  </div>
   

   <!-- CONTACT -->
  <div id="contact" class="container-content">
   <div class="contact-main">
     <div class="container">
       <h6 class="contact-head">Contact NCDC</h6>
       <div class="contact-info">
       <i class="fas fa-envelope-open contact-icon"></i>
       <a href="mailto:info@ncdc.gov.ng">info@ncdc.gov.ng</a>
       </div>
       <div class="contact-info">
       <i class="fas fa-mobile-alt contact-icon"></i>
       <a href="tel:0800 970000 10">080097000010 (Toll Free)</a>
       </div>
       <div class="contact-info">
       <i class="fab fa-whatsapp contact-icon"></i>
       <a href="https://api.whatsapp.com/send?phone=2347087110839&text=Hey%2C%20we%20are%20reporting%20the%20case%20of%20_____________">+234 708 711 0839</a>
       </div>
       <div class="mail">
       <h6 class="contact-mail">Report a Case</h6>
       <form action="inc/mail.php" method="post">
         <input name="name" class="form-control myForm" id="myMin" placeholder="Name..." type="text">
         <input name="email" class="form-control myForm" id="myEmail" placeholder="Email..." type="text">
         <input name="phoneno" class="form-control myForm" id="myPhone" placeholder="Phone number..." type="text">
         <input name="address" class="form-control myForm" id="myAddress" placeholder="Address..." type="text">
         <textarea name="message" class="form-control myForm" id="myMsg" placeholder="Message..." name="" id="" cols="30" rows="10"></textarea>
         <button name="submit" class="btn-submit">SUBMIT REPORT <i class="fas fa-paper-plane"></i></button>
       </form>
      </div>
      <br><br><br><br>
     </div>
   </div>
  </div>
 


  <!-- BOTTOM NAVIGATION -->

 <nav class="nav-bottom">
   <ul>
   <li><a class="tab active" href="home"><i class="fas fa-home iconnav"></i></a></li>
   <li><a class="tab" href="stats"><i class="fas fa-chart-bar iconnav"></i></a></li>
   <li><a class="tab" href="contact"><i class="fas fa-envelope iconnav"></i></a></li>
   </ul>
 </nav>

  <!-- END BOTTOM NAVIGATION -->





  </section>


<!-- SCRIPT -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.lazy.min.js"></script>
<script src="assets/js/bootstrap-validate.js"></script>
<script src="assets/js/app.js"></script>


</body>
</html>