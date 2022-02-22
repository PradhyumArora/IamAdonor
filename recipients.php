<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <title>Donor's page</title>
  </head>
  <body>
     <!-- Navigation -->
     <nav
     id="navbar"
     class="navbar navbar-expand-lg fixed-top navbar-light"
     aria-label="Main navigation"
   >
     <div class="container">
       <a class="navbar-brand logo-text" href="index.html">IamAdonor</a>

       <button
         class="navbar-toggler p-0 border-0"
         type="button"
         id="navbarSideCollapse"
         aria-label="Toggle navigation"
       >
         <span class="navbar-toggler-icon"></span>
       </button>

       <div
         class="navbar-collapse offcanvas-collapse"
         id="navbarsExampleDefault"
       >
         <ul class="navbar-nav ms-auto navbar-nav-scroll">
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="index.html#header"
               >Home</a
             >
           </li>
           <li class="nav-item">
             <a class="nav-link" href="index.html#details">Details</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="index.html#services">Services</a>
           </li>

           <li class="nav-item dropdown">
             <a
               class="nav-link dropdown-toggle"
               href="#"
               id="dropdown01"
               data-bs-toggle="dropdown"
               aria-expanded="false"
               >Help</a
             >
             <ul class="dropdown-menu" aria-labelledby="dropdown01">
               <li>
                 <a class="dropdown-item" href="./donor.php">Donor</a>
               </li>

               <li><div class="dropdown-divider"></div></li>
               <li>
                 <a class="dropdown-item" href="./recipients.php">Recipient</a>
               </li>
             </ul>
           </li>
         </ul>
         <span class="nav-item" id="Loginsignupbtn">
           <a class="btn-outline-sm" href="./index.html">Logout</a>
         </span>
       </div>
     </div>
   </nav>
    <div class="container mt-huge">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/A+.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="apos" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=apos" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/A-.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="aneg" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=aneg" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/B+.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="bpos" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=bpos" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/B-.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="bneg" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=bneg" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/AB+.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="abpos" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=abpos" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/AB-.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="abneg" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=abneg" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/o+.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="opos" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=opos" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="./images/o-.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-center" style="color:green">In Stock</h5>
              <p class="card-text text-center">
              <?php $cn=mysqli_connect('localhost','root','') ?>
                <?php mysqli_query($cn,"use iamdonor") ?> 
                <?php $group="oneg" ?>
                <?php $display=mysqli_query($cn,"select stock from inventory where bgroup='$group' " ) ?>
                <?php while($rec=mysqli_fetch_row($display)) 
                      {
                        echo $rec[0];
                      } 
                ?>
              </p>
              <a id="details-btn" href="inventoryrecipient.php?group=oneg" class="btn btn-primary"
                >Donate Blood</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script src="js/scripts.js"></script>
  </body>
</html>
