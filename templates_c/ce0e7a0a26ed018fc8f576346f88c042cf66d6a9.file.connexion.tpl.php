<?php /* Smarty version Smarty-3.1.15, created on 2015-01-06 14:08:18
         compiled from "template/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117487845154abec52516ee8-52907536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0e7a0a26ed018fc8f576346f88c042cf66d6a9' => 
    array (
      0 => 'template/connexion.tpl',
      1 => 1420476918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117487845154abec52516ee8-52907536',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54abec525a73e6_75898045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54abec525a73e6_75898045')) {function content_54abec525a73e6_75898045($_smarty_tpl) {?><h1>Connexion</h1>
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
            </div><?php }} ?>
