<?php
/* Smarty version 5.5.2, created on 2025-10-14 07:26:04
  from 'file:__categories.recursive_options.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68edfb0c778212_45082744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a3c79d951edc100610630d462c398731c1703e' => 
    array (
      0 => '__categories.recursive_options.tpl',
      1 => 1760349444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 2,
  ),
))) {
function content_68edfb0c778212_45082744 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/custom-dark/templates';
?><option <?php if ($_smarty_tpl->getValue('data_category') == $_smarty_tpl->getValue('category')['category_id']) {?>selected style="font-weight: 600;" class="bg-info" <?php }?> value="<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
">
  <?php echo str_repeat((string) "- - ", (int) $_smarty_tpl->getValue('category')['iteration']);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('category')['category_name'],30));?>

</option>
<?php if ($_smarty_tpl->getValue('category')['sub_categories']) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['sub_categories'], '_category');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_category')->value) {
$foreach22DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->getValue('_category')), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
