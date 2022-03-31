<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:20px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>
<!-- <section>

</section> -->
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

<!-- Sidebar/menu -->
<!-- <nav class="w3-sidebar w3-dark-grey w3-collapse w3-top w3-large w3-padding w3-sidebar w3-bar-block w3-card w3-animate-left" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large" style="width:100%;font-size:22px">Close Menu</a>
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button> -->
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-black " style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>หมู่บ้าน<br>...</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Example</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">กฎหมู่บ้าน</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ข้อแนะนำการใช้สระว่ายน้ำและfitness</a> 
    <!-- <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a> -->
  </div>
<!-- </nav> -->
</div>

<div id="main">

<div class="w3-dark-grey">
  <button id="openNav" class="w3-button w3-dark-grey w3-xlarge " onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <center>
    <h1>เว็บนิติหมู่บ้าน</h1>
</center>
  </div>
</div>

<div class="w3-container" id="services" style="margin-top:75px">
  
    <h1 class="w3-xxxlarge w3-text-blue"><b>ข่าวสารหมู่บ้าน.</b></h1>
    <hr style="width:80px;border:5px solid blue" class="w3-round">
<center>
<h1 class="w3-xxlarge w3-text-blue"><p>ข่าวสารหมู่บ้านประจำสัปดาห์</p></h1>
</center>
 <h1 style="font-size:25px;"><p> <b>-เนื่องจากในวันเสาร์ที่ 2 เมษายน และวัน อาทิตย์ที่ 3 เมษายนนี้ทางหมู่บ้านจะมีการฉีดพ่นยากำจัดยุงภายในหมู่บ้าน
      จึงเรียนมาให้ทราบโดยทั่วกัน</b>
    </p></h1>
  </div>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <center>
  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <!-- <h1 class="w3-jumbo"><b>เว็บนิติหมู่บ้าน</b></h1> -->
    <h1 class="w3-xxxlarge w3-text-red"><b>Example.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
</center>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="w3images/kitchen.jpg" style="width:100%" onclick="onClick(this)" alt="Simple Kitchen">
      <img src="w3images/workingroom.jpg" style="width:100%" onclick="onClick(this)" alt="working space">
      
    </div>

    <div class="w3-half">
      <img src="w3images/bathroom.jpg" style="width:100%" onclick="onClick(this)" alt="American Standard Bathroom">
      <img src="w3images/bedroom.jpg" style="width: 100%" onclick="onClick(this)" alt="Minimal Bedroom">
      <img src="w3images/livingroom.jpg" style="width: 100%" onclick="onClick(this)" alt="Minimal design living ">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  
  
  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
  <center>
    <h1 class="w3-xxxlarge w3-text-red"><b>กฎหมู่บ้าน.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
</center>
    <p>กฎของหมู่บ้าน มี 6 ข้อ ดังนี้</p>
    <p> 1. ห้ามก่อความวุ่นวายให้คนในหมู่บ้าน <br>
        2. ห้ามเล่นการพนันในเขตหมู่บ้าน <br>
        3. ห้ามไม่ให้มีการเสพหรือจำหน่ายสารเสพติดในหมู่บ้าน <br>
        4. ห้ามพกพาหรือใช้งานอาวุธปืนในหมู่บ้าน <br>
        5. ให้ทิ้งขยะลงในที่ที่หมู่บ้านจัดเตรียมไว้ <br>
        6. ต้องดูแลสัตว์เลี้ยงของตัวเอง หากปล่อยทิ้งไม่ดูแล ทางหมู่บ้านจะนำสัตว์เลี้ยงตัวนั้นไปหาเจ้าของใหม่ที่มูลนิธิ  <br>
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
  <center>
    <h1 class="w3-xxxlarge w3-text-red"><b>ข้อแนะนำการใช้สระว่ายน้ำและfitness.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    </center>
    <p><b>รายละเอียดเกี่่ยวกับสระน้ำและFitness </b> </p>
    <p><b>สระว่ายน้ำ</b></p>
    <p>สระว่ายน้ำของหมู่บ้านแบ่งออกเป็น2ส่วน 1.ส่วนของเด็ก มีความลึก 50 เซนติเมตร มีขนาด 15 ตารางเมตร </p><br>
    <p> 2.ส่วนที่ 2 เป็นสระกลาง มีความลึก 1.5 เมตร มีขนาด 20 ตารางเมตร 4*5 เมตร  </p><br>
    <p>ข้อแนะนำการใช้งานสระว่ายน้ำ.</p>
    <p> 1. ต้องสวมชุดว่ายน้ำเมื่อเข้าใช้สระว่ายน้ำ
        2. ต้องล้างทำความสะอาดร่างกายก่อนลงสระว่ายน้ำ
        3. ห้ามกระโดดลงสระว่ายน้ำ
        4. ห้ามส่งเสียงดังรบกวนขณะใช้สระว่ายน้ำ 
    </p>
    <p><b> Fitness </b></p>
    <p>fitness ของหมู่บ้าน มีเครื่องออกกำลังกายทั้งหมด 16 เครื่อง แบ่งออกเป็น ลู่วิ่งไฟฟ้า 4 เครื่อง 
       จักรยานนั่งปั่น 4 เครื่อง อุปกรณ์สร้างกล้ามเนื้อ 3 เครื่อง เครื่องเดินวงรี 3 เครื่อง ม้านั่งซิทอัพ 2 อัน
       และมีโต๊ะปิงปอง 2 โต๊ะ ไม้ปิงปอง 4 อัน ลูกปิงปอง 16 ลูก
    </p>
    <p>ข้อแนะนำการใช้ Fitness.</p>
    <p> <b>1.</b> ต้องรองเท้าผ้าใบขณะเข้าใช้งาน</p><br>
    <p>  <b> 2.</b> ไม่สร้างความวุ่นวายขณะใช้งาน fitness</p><br>
    <p>    <b>3.</b> กรุณาทำความสะอาดเครื่องออกกำลังกายหลังใช้เสร็จหากมีคราบเหงื่อหรือสิ่งสกปรกด้วย</p><br>
    <p>    <b>4.</b> กรุณาปิดไฟห้องหลังใช้เสร็จหากไม่มีใช้ใช้งานอยู่</p><br>

  </div>
  


  <!-- Contact -->
  <!-- <div class="w3-container" id="contact" style="margin-top:75px">
  <center>
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    </center> -->
    <!-- <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p> -->
    <!-- <p>ช่องทางติดต่อ เบอร์ 00-0x0x-x0xx </p><br>
    <p>email. niti@villege.com </p><br>
  </div> -->
  

<!-- End page content -->
</div>


<!-- W3.CSS Container -->

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">

<p class="w3-center w3-text-red w3-xxlarge">Contact </p>
<p>ช่องทางติดต่อ เบอร์ 00-0x0x-x0xx </p>
<p>email. niti@villege.com </p>
  

</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
 
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
