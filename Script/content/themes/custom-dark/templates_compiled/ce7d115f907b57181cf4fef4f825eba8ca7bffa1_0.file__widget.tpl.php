<?php
/* Smarty version 5.5.2, created on 2025-10-14 07:26:05
  from 'file:_widget.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68edfb0d56b220_24576364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce7d115f907b57181cf4fef4f825eba8ca7bffa1' => 
    array (
      0 => '_widget.tpl',
      1 => 1760349444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68edfb0d56b220_24576364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/custom-dark/templates';
if ($_smarty_tpl->getValue('widgets')) {?>
  <!-- Widgets -->
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('widgets'), 'widget');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('widget')->value) {
$foreach23DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('widget')['target_audience'] == 'all' || ($_smarty_tpl->getValue('widget')['target_audience'] == 'visitors' && !$_smarty_tpl->getValue('user')->_logged_in) || ($_smarty_tpl->getValue('widget')['target_audience'] == 'members' && $_smarty_tpl->getValue('user')->_logged_in)) {?>
      <div class="card">
        <div class="card-header">
          <strong><?php ob_start();
echo $_smarty_tpl->getValue('widget')['title'];
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable1);?>
</strong>
        </div>
        <div class="card-body"><?php echo $_smarty_tpl->getValue('widget')['code'];?>
</div>
      </div>
    <?php }?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <!-- Widgets -->
<?php }
}
}
