<!DOCTYPE html>
<html lang="en">
<?php 
include("head.html");
session_start();
?>
<body>
<?php 
include("navbar.php");
?>

    
    	<!--destination section--->
		<section class="travel-packages">

			<h1 style="margin-bottom: 80px;">Buy now your favourite package.</h1>
				
			<div class="card-content" id="packages" >

			<!-- packages -->

			</div>

            <div class="pagination-buttons" id="pagination-buttons">

            <!-- buttons -->

            </div>

			</section>
		

	<script type="text/javascript" src="js/script.js"></script>
	<?php
	include("footer.html"); 
	?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function buynow(id) {
        if (<?php if (isset($_SESSION['email'])) {
                echo 1;
            } else {
                echo 0;
            } ?> == 1) {

            location.replace("placeorder.php?id=" + id);
        } else {
            location.replace("login-register.php");
        }
    }
	


</script>

<script>

            var data = <?php include("retrievepackages.php") ?>;			
            var packages = data.packages;
            var i;
            var news_cont = document.getElementById("packages");
            var buttons = document.getElementById("pagination-buttons");

			// news_cont.empty();
				
				news_cont.innerHTML+='' +
                    '<div class="packages">'+
                    '<div class="container">'+
                    '<div class="please-be-last">';

                    for (i = 0; i < packages.length; i++) {

                    news_cont.innerHTML+='' +
    
                    '<div class="card">'+                   
                    '<img src="' + packages[i].photourl + '" alt="Travel package image" class="card-img">'+
                    '<div class="card-info">'+
                    '<h2>'+ packages[i].fromCity +' to '+ packages[i].toCity +'</h2>'+
                    '<div class="package-price">' + packages[i].price + '€</div>'+
                    '<div class="package-date">From: ' + packages[i].fromDate +'<br>To: ' + packages[i].toDate + '</div>'+
                    '<p>For '+packages[i].duration+' days<br>Packages left: '+packages[i].availableSeats+'</p>'+
                    '<a href="#" id="'+packages[i].pId+'"class="buy-now-button" onclick="buynow(this.id)" >Buy Now</a>'+
                    '</div>';
                                if (packages[i].availableSeats <=0){
                                    document.getElementById(packages[i].pId).style.display = 'none';
                                }
                            }
                    news_cont.innerHTML+='' + '</div>';
                    buttons.innerHTML+='' +
                    '</div>'+
                    '</div>'+     
                    '<div class="pagination">'+
                    '<li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>'+
                    '<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>'+
                    '<li class="page-item dots"><a class="page-link" href="#">...</a></li>'+
                    '<li class="page-item current-page"><a class="page-link" href="#">5</a></li>'+
                    '<li class="page-item current-page"><a class="page-link" href="#">6</a></li>'+
                    '<li class="page-item dots"><a class="page-link" href="#">...</a></li>'+
                    '<li class="page-item current-page"><a class="page-link" href="#">10</a></li>'+
                    '<li class="page-item next-page"><a class="page-link" href="#">Next</a></li>'+
                    '</div>';




</script>

<script src="js/pagination.js"></script>

</html>
