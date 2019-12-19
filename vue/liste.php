
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livres</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
    body{
      padding-top: 50px;
    }
    #form{
      display: none;
    }
    .form-horizental{
      height: 400px;
    }
    .form-group{
      margin-top: 30px;
    }
    input[type="checkbox"]{
      width:40px;
      height: 17px;
    }
    .hilite{
      background-color: yellow;
    }
    #modifier{
      z-index: 1;
      position: fixed;
      margin: auto;
      top: 300px;
      left: 600px;
      display: none;
    }
    </style>

  </head>

  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Livres</a>
        </div>
      </div>
    </nav>


    <div class="container">
      <!-- boutton ajouter-->

      <div id="modifier" class="alert alert-success">auteur modifié</div>
      <!-- Ajouter un livre -->
      <form id="form" class="form-horizental" action="insert.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="control-label col-sm-2" for="titre">Titre: </label>
          <div class="col-sm-10">
            <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre du livre" required>
          </div>
        </div><br>

        <div class="form-group">
          <label class="control-label col-sm-2" for="auteur">Auteur: </label>
          <div class="col-sm-10">
            <input type="text" id="auteur" name="auteur" class="form-control" placeholder="Auteur du livre" required>
          </div>
        </div><br>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description: </label>
          <div class="col-sm-10">
            <textarea id="description" class="form-control" name="description" placeholder="Description du livre" rows="8" cols="80" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="image">Image</label>
          <div class="col-sm-10">
            <input type="file" id="image" name="image" class="form-control" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success" name="button">Ajouter</button>
          </div>
        </div>
      </form>
    <div id="liste" class="row" style="margin-top:20px;margin-bottom:20px; border-bottom: 6px groove rgba(0, 153, 204,0.8);">
        <div class="col-sm-4">
          <h1 style="margin:0;">Liste des livres </h1>
        </div>
        <div class="col-sm-offset-1 col-sm-1" style="margin-right:15px;margin-left:180px;">
          <button id="add" type="button" class="btn btn-success">ajouter Livre</button>
        </div>
        <div class="col-sm-5">
          <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher">
        </div>
    </div>

      <!-- Affichage des livres -->
      <form id="deleteForm" action="delete.php" method="post">

        <table id="myTable" class="table">
          <thead>
            <tr style="background-color:lightgray; color:blue;">
              <th>Id</th>
              <th style="width:140px;">Titre</th>
              <th style="width:140px;">Auteur</th>
              <th style="width:140px;">Editeur</th>
              <th style="width:140px;">Année</th>
              <th style="width:140px;">Telecharger</th>
              <th style="width:57px;"><input type="checkbox" id="checkAll"></th>
            </tr>
          </thead>
          <tbody>
            <?php if($livres):
              foreach ($livres as $l): ?>
            <tr id="<?= $l->id; ?>">

              <td class="id"> <h4> <?= $l->id; ?> </h4></td>
              <td class="titre"> <h4> <?= $l->titre; ?> </h4></td>
              <td class="auteur"> <h4> <?= $l->auteur; ?> </h4></td>
              <td class="editeur"><p><?= $l->editeur; ?></p></td>
              <td class="annee"> <h4> <?= $l->annee; ?> </h4></td>

              <td><input type="checkbox" id="<?= $l->id;?>" class="del" name="livres[]" value="<?= $l->id; ?>"></td>
            </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
        <button id="button" class="col-sm-offset-9 col-sm-3 btn btn-danger" type="submit">Supprimer les taches</button>
      </form>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
