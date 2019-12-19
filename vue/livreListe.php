


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/formation1.css">
  <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.ttf">
   <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.ttf">
 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>formulaire</title>
<style>
    body{
        background-color:cornsilk;
    }
    
    
    
    </style>
</head>
<body>
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"> Gestion bibliotheque</a>
    </div>
   
  
  </div>
</nav>

  <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
         
            <h2>Ajouter Un livre</h2>
             
          
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" action="#" method="Post">
                
                    <div class="form-group">
                     
                        <label for="titre">titre</label>
     
                    
                      <input type="text" class="form-control" id="titre"  name="titre"  required=""/>
                    </div>

                      
          
                      
                      
                      
                    <div class="form-group">
                      <label for="auteur">auteur</label>
                      <input type="text" class="form-control" id="auteur"  name="auteur"  required="" />
                    </div>
    
  
                    
                    
                    
                    

                    <div class="form-group">
                      <label for="editeur">editeur</label>
                      <input type="text" class="form-control" id="editeur"  name="editeur"  required=""/>
                    </div>

                  
                    
                    <div class="form-group">
                      <label for="lien">lien</label>
                      <input type="file" class="form-control" id="lien"  name="lien"  required=""/>
                    </div>  
                      


                    <a href="?controler=controleur&action=ajouter"  class="btn btn-success">Ajouter </a>


<!--                    <input type="submit" name="action" value="ajouté"class="btn btn-default">-->
                
<!--                  </form>-->

        
                </div>
              </div>
            </div>
        </div>
      </section>
        
<br>


 
<table class="table table-bordered">
  					<thead>
     
					<tr>       
					<th>titre</th>
					<th>auteur</th>
                    <th>editeur</th>
                    
                  
                    <th >modifier</th>
				    <th >supprimer</th>
                  
					    </tr>
					</thead>

    <?php
    
     foreach ($livres as $livre){
        echo '<tr><td>'. $livre->titre .'</td><td>' .
            $livre->auteur . '</td><td>' . $livre->editeur . '</td>
            
             <td><a href=&id=
					'.$livre->id.'" class="btn btn-primary">Modifier</a></td>
				 <td><a href=&id=
					'.$livre->id.'" class="btn btn-danger">Supprimer</a></td>
            </tr>';
    }?>
          

    </table>

        </body>
    </html>

      
      
       



    


   


