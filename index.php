<?php 
 include 'header.php';
?>
<h2>Acceuil</h2>
<p>
<?php
if ($_SESSION['is_loged'] == 1){
    
    echo "vous etes connectés ";
    
    
}else{
    $_SESSION['is_loged'] == 0;
    echo "vous n'etes pas connectés";
    
}
?>
</p>


    
<?php 
 include 'footer.php';
?>