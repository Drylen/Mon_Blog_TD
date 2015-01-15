<form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 

        <div class="row">

            <div class="span8">


                <div class="clearfix"> <!-- Permet de créer un formulaire Titre -->
                    <label for="titre">Titre</label>
                    <div class="input">
                        <input type="hidden" name="id" value="{$id}"/>
                        <input type="text" name="titre" id="titre" value="{$titre}"/>
                    </div>
                </div>
                <div class="clearfix"> <!-- Permet de créer un formulaire Texte -->
                    <label for="text">Texte</label>
                    <div class="input">
                        <textarea name="text" id="text">{$texte}</textarea> <!-- Définie le texte -->
                    </div>
                </div>
                <div class="clearfix"> <!-- Permet de créer un formulaire image -->
                    <label for="image">Image</label>
                    <div class="input">
                        <input type="file" name="image" id="image" value="{$lien_image}"> <!-- Définie l'image -->
                    </div>
                </div>

                <div class="clearfix"> <!-- Permet de créer une checkbox pour permettre de montrer l'article écrit si coché -->
                    <label for="publie">Publié</label>
                    <div class="input">
                        <input type="checkbox" name="publie" id="publie" value="1"> <!-- Permet si on coche la case de mettre l'article en mode 1 (visible)  -->
                    </div>
                </div>

                <div class="form-actions"> 

                    <!-- // Si modification de l'article alors le bouton lors de la modification sera "Modifier" -->
                    <!-- // Sinon, si on ajoute un article alors le bouton lors de la création de l'article sera "Ajouter" -->
                     
                    <input type="submit" name="{$modif_add}" value="{$modif_add}" class="btn btn-large btn-primary">

                </div>

            </div>   