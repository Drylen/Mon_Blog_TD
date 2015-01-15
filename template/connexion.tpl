<h1>Connexion</h1>
<h4>Saisissez vos identifiants :</h4>

<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion"> 

        <div class="row">

            <div class="span8">

                <div class="clearfix"> <!-- Permet de créer un formulaire mail -->
                    <label for="Nom"><h5>Email</h5></label>
                    <div class="input">
                        <input type="email" name="mail" id="mail" value=""> <!-- Définie le mail -->
                    </div>
                </div>
                
                <div class="clearfix"> <!-- Permet de créer un formulaire password -->
                    <label for="Nom"><h5>Mot de passe</h5></label>
                    <div class="input">
                        <input type="password" name="password" id="password" value=""> <!-- Définie le password -->
                    </div>
                </div>

                <div class="form-actions"> 

                    <input type="submit" name="connexion" value="Se connecter" class="btn btn-large btn-primary">

                </div>

    </form>
            </div>