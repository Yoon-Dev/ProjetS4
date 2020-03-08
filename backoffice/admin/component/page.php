<?php
checkAcces("../../");
chargerclass("../../class/model/", "Page");
$manager = new Manager($conn);
$page = $manager->getPageModel();
?>
    <h2>Page: </h2>
    <input type="textarea" id="presentation" name="presentation" data-bdd="Page" value="<?php echo $page->presentation();?>"/>
    <button class="btn-update" data-input="#presentation">Update</button>
    <br>
    <img src="<?php echo $page->getImg1Path("../../.");?>" style="width:50px;"/><br>
    <!-- <form target="_blank" action="../../src/updateSingleRow.php?bdd=Page&type=img1" method="post" enctype='multipart/form-data' redirect>
        <input type="file" id="img1" name="img1" data-bdd="Page" value="<?php echo $page->img1();?>"/>
        <input type="submit" value="Envoyer">
    </form> -->
    <br>
    <input type="text" id="numero" name="numero" data-bdd="Page" value="<?php echo $page->numero();?>"/>
    <button class="btn-update" data-input="#numero">Update</button>
    <br>
    <input type="text" id="email" name="email" data-bdd="Page" value="<?php echo $page->email();?>"/>
    <button class="btn-update" data-input="#email">Update</button>
    <br>
    <input type="text" id="adresse" name="adresse" data-bdd="Page" value="<?php echo $page->adresse();?>"/>
    <button class="btn-update" data-input="#adresse">Update</button>
    <br>
