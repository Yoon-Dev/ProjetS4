<?php
checkAcces("../../");
chargerclass("../../class/model/", "Avis");
$manager = new Manager($conn);
$avis = $manager->getAvisModel();
?>
<h2>Avis: </h2>
<?php foreach ($avis as &$val) { ?>
 
 <div>
     <textarea id="<?php echo'commentaire'.$val->id();?>" name="commentaire" data-bdd="Avis" data-rownbr="<?php echo $val->id();?>"><?php echo $val->commentaire();?></textarea>
     <button class="btn-update" data-input="<?php echo'#commentaire'.$val->id();?>">Update</button>
     <br>
     <input type="date" name="date" id="<?php echo'date'.$val->id();?>" data-bdd="Avis" data-rownbr="<?php echo $val->id();?>" value="<?php echo$val->date();?>">
     <button class="btn-update" data-input="<?php echo'#date'.$val->id();?>">Update</button>
     <br>
     <input type="text" name="prenom" id="<?php echo'prenom'.$val->id();?>" data-bdd="Avis" data-rownbr="<?php echo $val->id();?>" value="<?php echo$val->prenom();?>"/>
     <button class="btn-update" data-input="<?php echo'#prenom'.$val->id();?>">Update</button>
     <br>
     <input type="text" name="formation_effectue" id="<?php echo'formation_effectue'.$val->id();?>" data-bdd="Avis" data-rownbr="<?php echo $val->id();?>" value="<?php echo$val->formation_effectue();?>"/>
     <button class="btn-update" data-input="<?php echo'#formation_effectue'.$val->id();?>">Update</button>
     <br>
</div>  

<?php } ?>