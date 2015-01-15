<?php /* Smarty version Smarty-3.1.15, created on 2015-01-06 17:32:39
         compiled from "template/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203413116654ac1c374e6959-61445829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaec5692ea9f959d28c252e3db1518ecf271276' => 
    array (
      0 => 'template/inscription.tpl',
      1 => 1420476918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203413116654ac1c374e6959-61445829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54ac1c375395f7_71594897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ac1c375395f7_71594897')) {function content_54ac1c375395f7_71594897($_smarty_tpl) {?>    <h1>Inscription</h1>
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

            </div><?php }} ?>
