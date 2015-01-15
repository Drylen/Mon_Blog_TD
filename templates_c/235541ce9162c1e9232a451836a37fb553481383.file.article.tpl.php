<?php /* Smarty version Smarty-3.1.15, created on 2015-01-06 19:10:32
         compiled from "template/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202809124254ac33286cce54-25298393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235541ce9162c1e9232a451836a37fb553481383' => 
    array (
      0 => 'template/article.tpl',
      1 => 1420476917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202809124254ac33286cce54-25298393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'titre' => 0,
    'texte' => 0,
    'lien_image' => 0,
    'modif_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54ac3328760287_79971322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ac3328760287_79971322')) {function content_54ac3328760287_79971322($_smarty_tpl) {?><form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 

        <div class="row">

            <div class="span8">


                <div class="clearfix"> <!-- Permet de créer un formulaire Titre -->
                    <label for="titre">Titre</label>
                    <div class="input">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                        <input type="text" name="titre" id="titre" value="<?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
"/>
                    </div>
                </div>
                <div class="clearfix"> <!-- Permet de créer un formulaire Texte -->
                    <label for="text">Texte</label>
                    <div class="input">
                        <textarea name="text" id="text"><?php echo $_smarty_tpl->tpl_vars['texte']->value;?>
</textarea> <!-- Définie le texte -->
                    </div>
                </div>
                <div class="clearfix"> <!-- Permet de créer un formulaire image -->
                    <label for="image">Image</label>
                    <div class="input">
                        <input type="file" name="image" id="image" value="<?php echo $_smarty_tpl->tpl_vars['lien_image']->value;?>
"> <!-- Définie l'image -->
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
                     
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['modif_add']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['modif_add']->value;?>
" class="btn btn-large btn-primary">

                </div>

            </div>   <?php }} ?>
