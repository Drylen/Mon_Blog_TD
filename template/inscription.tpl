    <h1>Inscription</h1>
<h4>Saisissez vos informations :</h4>

<form action="inscription.php" method="post" enctype="multipart/form-data" id="form_inscription" name="form_inscription"> 

        <div class="row">

            <div class="span8">


                <div class="clearfix"> <!-- Permet de créer un formulaire Nom -->
                    <label for="Nom"><h5>Nom</h5></label>
                    <div class="input">
                        <input type="text" name="nom" id="nom" value=""> <!-- Définie le nom -->
                    </div>
                </div>

                <div class="clearfix"> <!-- Permet de créer un formulaire Prenom -->
                    <label for="Nom"><h5>Prénom</h5></label>
                    <div class="input">
                        <input type="text" name="prenom" id="prenom" value=""> <!-- Définie le prenom -->
                    </div>
                </div>
                
                <div class="clearfix"> <!-- Permet de créer un formulaire Prenom -->
                    <label for="Nom"><h5>Email</h5></label>
                    <div class="input">
                        <input type="email" name="mail" id="mail" value=""> <!-- Définie le mail -->
                    </div>
                </div>
                
                <div class="clearfix"> <!-- Permet de créer un formulaire Prenom -->
                    <label for="Nom"><h5>Mot de passe</h5></label>
                    <div class="input">
                        <input type="password" name="password" id="password" value=""> <!-- Définie le password -->
                    </div>
                </div>

                <div class="form-actions"> 

                    <input type="submit" name="inscrire" value="S'inscrire" class="btn btn-large btn-primary">

                </div>

            </div>