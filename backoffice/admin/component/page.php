<?php
checkAcces("../../");
chargerclass("../../class/", "Manager");
chargerclass("../../class/", "Page");
$manager = new Manager($conn);
$page = $manager->getPageModel();
?>
    <h2>Page: </h2>
    <input type="textarea" id="presentation" name="presentation" data-bdd="page" value="<?php echo $page->presentation();?>"/>
    <button class="btn-update" data-input="#presentation">Update</button>
    <br>
    <img src="<?php echo '../../'.$page->img1();?>" style="width:50px;"/><br>
    <input type="file" id="img1" name="img1" data-bdd="page" value="<?php echo $page->img1();?>"/>
    <button class="btn-update" data-input="#img1">Update</button>
    <br>
    <input type="text" id="numero" name="numero" data-bdd="page" value="<?php echo $page->numero();?>"/>
    <button class="btn-update" data-input="#numero">Update</button>
    <br>
    <input type="text" id="email" name="email" data-bdd="email" value="<?php echo $page->email();?>"/>
    <button class="btn-update" data-input="#email">Update</button>
    <br>
    <input type="text" id="adresse" name="adresse" data-bdd="page" value="<?php echo $page->adresse();?>"/>
    <button class="btn-update" data-input="#adresse">Update</button>
    <br>
