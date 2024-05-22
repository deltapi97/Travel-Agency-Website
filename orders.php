<!DOCTYPE html>
<html lang="en">

<?php 
include("head.html");
session_start();
?>
<body>

<?php 
include("navbar.php")
?>

<?php
        
    if(isset($_SESSION["email"])){

        echo "all good";
    }	      
    else {
    echo "<script>alert('You need to log in to make an appointment.');window.location.href = 'login-register.php';</script>";
    }

?>
<section>

    <div class="fill">
        <div class="testa">
            <div class="small-container cart-page">
        <table id="table">
            <tr class="table-titles">
                <th>Product</th>
                <th>Date</th>
                <th>Cost</th>
            </tr>            
        </table>
        
        <div class="total-price">
            <table>
                <td>Total</td>
                <td id="totalprice"></td>
            </tr>
        </table>
    </div>
  </div>
 </div>
</div>
</section>

<?php
	include("footer.html"); 
	?>
</body>

<script type="text/javascript" src="js/script.js"></script>
<script>
  var data = <?php include("retrieveorders.php") ?>;
    console.log("asdadasdasd");
            var orders = data.orders;
            var i;
            var total=0;
      var totalprice = document.getElementById('totalprice');
			var news_cont = document.getElementById("table");
			// news_cont.empty();
            for (i = 0; i < orders.length; i++) {
              total += parseInt(orders[i].price);
				news_cont.innerHTML+='' +
          '<tr><td><div class="cart-info">' +
          '<img src="' + orders[i].photoURL + '" alt="" /><div>' +
          '<p>' + '<small>' + (i+1) + ') </small>' + orders[i].fromCity + ' to ' + orders[i].toCity + '</p>' +
          '</div></div></td>' +
          '<td>From ' + orders[i].fromDate + ' To ' + orders[i].toDate + '</td>' +
          '<td>$' + orders[i].price + '€</tr>';
              
            }
            // totalprice.empty();
            totalprice.append(total+'€');
</script>
</html>