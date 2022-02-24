<?php
/* Smarty version 3.1.31, created on 2022-02-24 13:40:20
  from "/Applications/MAMP/htdocs/mediabroadcast/smarty/templates/basisAppl.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62178ac475f107_07510211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dedd4569578e73cab2a6ad7146f422c66af50435' => 
    array (
      0 => '/Applications/MAMP/htdocs/mediabroadcast/smarty/templates/basisAppl.tpl',
      1 => 1645709822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62178ac475f107_07510211 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="articole.html">Articole</a></li>
                        <li><a href="materiale.html">Materiale</a></li>
                        <li><a href="prezentari.html">Prezentări</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>

                </nav>

            </div>

        </header>
  
	<main id="mainArticole">
		<h1>Introdu</h1>
<form  method='post' action=<?php echo $_smarty_tpl->tpl_vars['srv']->value;?>
>
<label>Titlu : </label>
<input type='text' name='titlu' placeholder ='titlu'>
<label>Articol  : </label>
<input type='text' name='articol' placeholder ='articol'>
<label>Sursa : </label>
<input type='text' name='sursa' placeholder='sursa' >
&nbsp;&nbsp
<input type='submit' class='submit' name='submit' value='Toevoegen' >
</form>
           <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

		
	</main>
  
	<footer>
		<?php echo '<script'; ?>
 language="javascript">
			document.write(copyRight(" lauraciocalau.com"));
		<?php echo '</script'; ?>
>
	</footer>
  
</div>

</body>
</html>
<?php }
}
