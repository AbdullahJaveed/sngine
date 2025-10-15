<?php
/* Smarty version 5.5.2, created on 2025-10-13 15:48:22
  from 'file:_ads.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68ed1f46052386_83445933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bcba987b3824f285f7b6a8b02e4066bff09182e' => 
    array (
      0 => '_ads.tpl',
      1 => 1760349442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68ed1f46052386_83445933 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/default/templates';
if ($_smarty_tpl->getValue('_master')) {?>

  <?php if ($_smarty_tpl->getValue('_ads') && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("static","settings","admin"))) {?>
    <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mtb20">
      <!-- ads -->
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_ads'), 'ads_unit');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach0DoElse = false;
?>
        <div class="card">
          <div class="card-header bg-transparent">
            <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

          </div>
          <div class="card-body"><?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>
</div>
        </div>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <!-- ads -->
    </div>
  <?php }?>

<?php } else { ?>

  <?php if ($_smarty_tpl->getValue('ads')) {?>
    <!-- ads -->
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads'), 'ads_unit');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach1DoElse = false;
?>
      <div class="card">
        <div class="card-header bg-transparent">
          <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

        </div>
        <div class="card-body"><?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>
</div>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <!-- ads -->
  <?php }?>

<?php }
}
}
