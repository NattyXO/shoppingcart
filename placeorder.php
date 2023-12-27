<?php
function order_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'order';
    try {
    	$conn= mysqli_connect('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
    if (isset($_POST['submit']))
    {
        $order_id = (int)$_POST['id'];
        $order_quantity = (int)$_POST['quantity'];
        $order_name = (string)$_POST['name'];
        $order_desc = (string)$_POST['desc'];
        $order_price = (int)$_POST['price'];
        $order_rrp = (int)$_POST['rrp'];
        $order_img = (int)$_POST['img'];
        $order_date_added = (int)$_POST['date_added'];
        if (!empty($_POST['id']) && !empty($_POST['name'])&& !empty($_POST['price'])&& !empty($_POST['quantity']))
        {


            $query = "insert into order (id,name,desc,price,rrp,quantity,img,date_added) values ('$order_id','$order_name','$order_desc','$order_price','$order_rrp','$order_quantity','$order_img','$order_date_added')";

            $run = mysqli_query($conn,$query) or print("natty");

        }
    }
}
?>
<?=template_header('Place Order')?>

<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div>

<?=template_footer()?>