<?php
/* Smarty version 5.5.2, created on 2025-10-13 15:49:02
  from 'file:_no_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68ed1f6eb2ec48_03541628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c50f88818ccf3272060862cebc2c0710b4997132' => 
    array (
      0 => '_no_data.tpl',
      1 => 1760349445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_68ed1f6eb2ec48_03541628 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/default/templates';
?><!-- no data -->
<div class="text-center text-muted mb20">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), (int) 0, $_smarty_current_dir);
?>
  <div class="text-md">
    <span class="no-data"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
