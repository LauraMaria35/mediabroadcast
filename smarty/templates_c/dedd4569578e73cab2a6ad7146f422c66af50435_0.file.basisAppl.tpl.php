<?php
/* Smarty version 3.1.31, created on 2022-02-25 22:27:32
  from "/Applications/MAMP/htdocs/mediabroadcast/smarty/templates/basisAppl.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_621957d4ef44a0_22883314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dedd4569578e73cab2a6ad7146f422c66af50435' => 
    array (
      0 => '/Applications/MAMP/htdocs/mediabroadcast/smarty/templates/basisAppl.tpl',
      1 => 1645827980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621957d4ef44a0_22883314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="//db.onlinewebfonts.com/c/cc4e55b58216e47bb86dc3ccdb3ba335?family=Utopian+Two+BW" rel="stylesheet"
        type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <?php echo '<script'; ?>
 type="text/javascript" src="../js_lib/copyright.js"><?php echo '</script'; ?>
>
    <title>6 iunie 2020</title>
</head>

<body>
    <div id="container">
        <header>
            <div id="titleNav">

                <div id="naam">
                    <h1>Media <br> Broadcast</h1>
                </div>
                <img src="../img/logo.jpeg" alt="logo news">

                <nav>
                    <div id="navHeader"></div>
                    <ul>
                        <li><a href="../html/index.html">Home</a></li>
                        <li><a href="../html/articole.html">Articole</a></li>
                        <li><a href="../html/materiale.html">Materiale</a></li>
                        <li><a href="../html/prezentari.html">Prezentări</a></li>
                        <li><a href="../html/contact.html">Contact</a></li>
                    </ul>

                </nav>

            </div>

        </header>
  
	<main id="mainArticole">
		
           <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

		
	</main>
  
	<footer>
		<?php echo '<script'; ?>
 language="javascript">
			document.write(copyRight(" lauraciocalau.com"));
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js_lib/script.js"><?php echo '</script'; ?>
>
	</footer>
  
</div>

</body>
</html>
<?php }
}
