<?php 
 include 'admin_header.php';
?>
<h2>Admin Livre</h2>
<p>
Bibliothèque EfreiTech

</p>

<?php 
    $list = livre::getListLivre();
    echo "<table>";
    foreach ($list as $ligne){
        echo "<tr>";
        echo "<td>"; echo($ligne['cat_nom'])    ;echo "</td>";
        echo "<td>"; echo($ligne['lvr_titre'])    ;echo "</td>";
        echo "<td>"; echo($ligne['lvr_auteur'])    ;echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

?>
    
<?php 
 include 'footer.php';
?>