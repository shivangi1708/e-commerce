<?php function check_if_added_to_cart($item_id){
     
     $user_id=$_SESSION['user_id'];
     $con= mysqli_connect("localhost","root","","store","3308") or die(mysqli_error($con));
     $item_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and 
status='Added to cart'
";
     $item_query_result= mysqli_query($con, $item_query) or die(mysqli_error($con));
     if(mysqli_num_rows($item_query_result)>=1){
         return 1;
     }
 else {
         return 0;    
     }
}
?>


