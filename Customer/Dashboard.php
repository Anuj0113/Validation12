<html>
  <head>
      <link rel="stylesheet" href="CSS FILE/style1.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>

  <div class="sidebar">
    <div class="logo-details">
      <i class="bx-user"></i>
      <b class="logo_name">Validar</b>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <b class="links_name">Dashboard</b>
          </a>
        </li>
        <li>
          <a href="my2/index1.html">
            <i class='bx-menu'></i>
            <b class="links_name">QR Generation</b>
          </a>
        </li>
        <li>
          <a href="Product.php">
            <i class='bx bx-list-ul' ></i>
            <b class="links_name">Product list</b>
          </a>
        </li>
        <li>
          <a href="myteam.html">
            <i class='bx bx-user' ></i>
            <b class="links_name">Team</b>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <b class="links_name">Analytics</b>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <b class="links_name">Stock</b>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <b class="links_name">Total order</b>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <b class="links_name">Account</b>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <b class="links_name">Setting</b>
          </a>
        </li>
        <li class="log_out">
          <a href="Mlogin.php">
            <i class='bx bx-log-out'></i>
            <b class="links_name">Log out</b>
          </a>
        </li>
      </ul>
  </div>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <b>Dashboard</b>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <a href="myteam.html" class="admin_name">My Team</a>   
        <i class='bx bx-user' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div>
             <?php
              session_start();
              ?>
            <div class="box-topic" align="center">Home Page</div>
        <div class="number" align="center">Welcome <?php echo $_SESSION['number']; ?></div>
        <div class="indicator">
            <img src="image/OIP.jpg.jpg" width="500px" height="500px">
          </div>
            </div>
        </div>
       
       

        <div class="box">
          <div>
            <i class='bx bx-pie-chart-alt-2 cart' ></i>
            <div class="box-topic">Profit</div>
            <div class="number">$0</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <b class='down'>0%</b>
            </div>
        </div>
        </div>


         <div class="box">
          <div>
            <i class='bx bx-wallet cart two' ></i>
            <div class="box-topic">Sales</div>
            <div class="number">$0</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt up'></i>
              <b class='up'>0%</b>
            </div>
        </div>
        </div>
</div>
    
<div class="overview-boxes">
      <div class="box">
          <div>
            <div class="box-topic2">All Category</div>
        </div>
        </div>
      



      <div class="box">
          <div>
            <div>
           <input type="number" placeholder=" YYYY" min="1999" max="2022">
            <div class="box-topic">Gross Profit Margin</div> 
          </div>
            <div>
             <i class='bx bx-dollar cart three' ></i>
            <b class="box-topic">Sales</b>
            <br>
            <b class="number">$0</b>    
            </div>
            <div>
             <i class='bx bx-wallet cart four' ></i>
            <b class="box-topic">Costing</b>
            <div class="number">$0</div>       
            </div>
        </div>
      </div>


       <div class="box">
          <div>
            <div class="indicator1">
              <i class='bx bx-up-arrow-alt up'></i>
              <b class='up'>100%</b>
            </div>
            
            <i class='bx bx-printer cart two' ></i>
            <b class="box-topic1">Code Scaned</b>
            <div class="number1">0</div>
            
        </div>
      </div>

</div>
</div>
     
      
  </section>





  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

 </script>

</body>
</html>
