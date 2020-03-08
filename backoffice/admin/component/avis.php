<?php
checkAcces("../../");
chargerclass("../../class/model/", "Avis");
$manager = new Manager($conn);
$avis = $manager->getAvisModel();
var_dump($avis);
?>
<h2>Avis: </h2>
<?php foreach ($avis as &$val) { ?>
 
 <div>
     <textarea id="<?php echo'commantaire'.$val->id();?>" name="commantaire" data-bdd="Avis" data-rownbr="<?php echo $val->id();?>"><?php echo $val->commentaire();?></textarea>
     <button class="btn-update" data-input="<?php echo'#commantaire'.$val->id();?>">Update</button>
 </div>  

<?php } ?>