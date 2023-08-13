<?php include_once('header.php'); 
include('admin/include/config.php');

?>
    <!--about us start-->
    <section  class="blackish-filter-section headersec">
      <div class="blackish-filter">
        <div class="textside position-relative">
            <div class="content text-center">
              <br><br>
              <h1>MENU</h1>
              <p class="nav-link nav-item" style="font-size: 21px;" style="color: white;"><a class="txt1" href="index.html">Home</a> / <a class="txt1" href="about.html">About</a> / <a class="txt1" href="menu.html">Menu</a></p>

              
            </div>
          </div>
          </div>
</section>
    <!--about us end-->

      
      <!-- Bootstrap CSS link -->
      
      <div class=" navbar-expand-lg " align="center">
        <div class="container">
          <h1 class="navbar-brand" style="font-size: xx-large;" href="#">Food Menu</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse b12" id="navbarNav" align="center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link ser border b11" href="#" style="font-weight: bold;" data-category="cold-drinks">Cold Drinks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ser border b11" href="#" style="font-weight: bold;" data-category="pizza">Pizza</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ser  border b11" href="#" style="font-weight: bold;" data-category="burger">Burger</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

     

    
      <div class="container mt-5">
        <!-- Cold Drinks Section -->
        <div class="food-products" id="cold-drinks">
          <h2 style="text-align: center;margin-bottom: 50px;">Cold Drinks</h2>
          <div class="row" style="margin-bottom: 65px;">
            <!-- Food Product Cards for Cold Drinks -->
          <?php  $procat='cold_drinks';
$sql=mysqli_query($con,"select * from product where procat='$procat'");
if (!empty($sql)) {


while($row=mysqli_fetch_array($sql))
{  ?>
            <div class="col-md-4">
              <div class="card">
                <img src="admin/images/<?php echo $row['proimg'];?>" class="card-img-top" alt="Cold Drink 1">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['proname'];?></h5>
                  <p class="card-text"><?php echo $row['prodesc'];?></p>
                  <p class="card-text">$ <?php echo $row['proprice'];?></p>
                  <br>
                  <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="btn-success btn button">Add To Cart</button>
                                      </form>
                                      <div class="alert-message"></div>
                </div>
              </div>
            </div>
<?php }}else{
                echo "No Records.";
              } ?> 
           
            
          </div>
        </div>
    
        <!-- Pizza Section -->
        <div class="food-products" id="pizza" style="display: none;">
          <h2  style="text-align: center;margin-bottom: 50px;">Pizza</h2>
          <div class="row" style="margin-bottom: 65px;">
            <!-- Food Product Cards for Pizza -->
            <?php  $procat='pizza';
$sql=mysqli_query($con,"select * from product where procat='$procat'");
if (!empty($sql)) {


while($row=mysqli_fetch_array($sql))
{  ?>
            <div class="col-md-4">
              <div class="card">
                <img src="admin/images/<?php echo $row['proimg'];?>" class="card-img-top" alt="Cold Drink 1">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['proname'];?></h5>
                  <p class="card-text"><?php echo $row['prodesc'];?></p>
                  <p class="card-text">$ <?php echo $row['proprice'];?></p>
                  <br>
                  <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="btn-success btn button">Add To Cart</button>
                                      </form>
                                      <div class="alert-message"></div>
                </div>
              </div>
            </div>
<?php }}else{
                echo "No Records.";
              } ?> 
           
           
          </div>
        </div>
    
        <!-- Cold Drinks Section -->
        <div class="food-products" id="burger">
          <h2 style="text-align: center;margin-bottom: 50px;">Burger</h2>
          <div class="row" style="margin-bottom: 65px;">
            <!-- Food Product Cards for Cold Drinks -->
          <?php  $procat='burger';
$sql=mysqli_query($con,"select * from product where procat='$procat'");
if (!empty($sql)) {


while($row=mysqli_fetch_array($sql))
{  ?>
            <div class="col-md-4">
              <div class="card">
                <img src="admin/images/<?php echo $row['proimg'];?>" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['proname'];?></h5>
                  <p class="card-text"><?php echo $row['prodesc'];?></p>
                  <p class="card-text">$ <?php echo $row['proprice'];?></p>
                  <br>
                  <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="btn-success btn button">Add To Cart</button>
                                      </form>
                                      <div class="alert-message"></div>
                </div>
              </div>
            </div>
<?php }}else{
                echo "No Records.";
              } ?> 
           
            
          </div>
        </div>
    
      </div>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
   
<script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();

$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  $(".alert-message").html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>
      <!-- Bootstrap JS and Popper.js (for Bootstrap components that require it) -->
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          // Add event listeners to category links
          const categoryLinks = document.querySelectorAll(".nav-link");
          categoryLinks.forEach(link => {
            link.addEventListener("click", function(e) {
              e.preventDefault();
              const category = link.getAttribute("data-category");
              showCategoryContent(category);
              setActiveLink(link);
            });
          });
    
          function showCategoryContent(category) {
            const foodProducts = document.querySelectorAll(".food-products");
            foodProducts.forEach(content => {
              if (content.id === category) {
                content.style.display = "block";
              } else {
                content.style.display = "none";
              }
            });
          }
    
          function setActiveLink(activeLink) {
            const allLinks = document.querySelectorAll(".nav-link");
            allLinks.forEach(link => {
              link.classList.remove("active");
            });
            activeLink.classList.add("active");
          }
        });
      </script>
       
 <?php include_once('footer.php'); ?>