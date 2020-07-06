<!DOCTYPE html>
<html>

<form method="post" action="admin.php" enctype="multipart/form-data">
<label for="icone"> Icone du ficher (JPG, JPEG ou PNG - max. 2 Mo) : </label><br />
<input type="file" name="mon_fichier" id="mon_fichier" /><br />
<label for="title"> Titre du ficher (min. 4 caractères) :</label><br />
<input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
<label for="description">Titre/Nom/Description de votre photo de profil (max. 255 caractères) :
</label><br />
<textarea name="description" id="description"></textarea><br />
<input type="submit" name="submit" value="envoyer" />
</form>
</html>