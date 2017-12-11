<?php 
 include 'header.php';
?>
<h2>Livre</h2>
<p>
Bibliotheque EfreiTech

</p>

<?php 
    $list = livre::getListLivre();
    echo "<table class='table table-hover'>";
    ?>
    <thead>
    <tr>
    <th scope="col">Catégorie</th>
    <th scope="col">Titre</th>
    <th scope="col">Auteur</th>
    </thead>
    </tr>
    <?php 
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