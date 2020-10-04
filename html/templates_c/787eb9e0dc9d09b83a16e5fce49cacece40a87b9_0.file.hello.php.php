<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 08:19:03
  from '/var/www/html/chap1/hello.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7985771506b3_57144431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787eb9e0dc9d09b83a16e5fce49cacece40a87b9' => 
    array (
      0 => '/var/www/html/chap1/hello.php',
      1 => 1601799538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7985771506b3_57144431 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
require_once("../smarty-3.1.35/libs/Smarty.class.php");
$o_smarty=new Smarty();
$o_smarty->template_dir="../templates/";
$o_smarty->compile_dir="../templates_c/";
$o_smarty->assign("name", "World");
$o_smarty->display("hello.php");
<?php echo '?>';
}
}
