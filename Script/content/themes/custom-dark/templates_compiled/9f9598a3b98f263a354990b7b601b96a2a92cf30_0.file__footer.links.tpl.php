<?php
/* Smarty version 5.5.2, created on 2025-10-14 07:37:08
  from 'file:_footer.links.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68edfda4da9803_51059449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9598a3b98f263a354990b7b601b96a2a92cf30' => 
    array (
      0 => '_footer.links.tpl',
      1 => 1760349439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68edfda4da9803_51059449 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/custom-dark/templates';
?><!-- footer links -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
  <div class="row footer <?php if ($_smarty_tpl->getValue('page') == 'index' && !$_smarty_tpl->getValue('user')->_logged_in) {?>border-top-0<?php }?>">
    <div class="col-sm-6 dropdown">
      <span class="mr5">&copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</span>
      <!-- language -->
      <a href="#" class="language-dropdown" data-bs-toggle="dropdown">
        <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->getValue('system')['language']['flag'];?>
">
        <span><?php echo $_smarty_tpl->getValue('system')['language']['title'];?>
</span>
      </a>
      <div class="dropdown-menu">
        <div class="js_scroller">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('system')['languages'], 'language');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach4DoElse = false;
?>
            <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->getValue('language')['code'];?>
">
              <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->getValue('language')['flag'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>

            </a>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <!-- language -->
    </div>

    <div class="col-sm-6 links">
      <?php if ($_smarty_tpl->getValue('static_pages')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('static_pages'), 'static_page');
$_smarty_tpl->getVariable('static_page')->index = -1;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('static_page')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('static_page')->index++;
$_smarty_tpl->getVariable('static_page')->first = !$_smarty_tpl->getVariable('static_page')->index;
$foreach5Backup = clone $_smarty_tpl->getVariable('static_page');
?>
          <?php if ($_smarty_tpl->getValue('static_page')['page_in_footer']) {?>
            <a <?php if (!$_smarty_tpl->getVariable('static_page')->first) {?>class="pl10" <?php }?> href="<?php echo $_smarty_tpl->getValue('static_page')['url'];?>
">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('static_page')['page_title']);?>

            </a>
          <?php }?>
        <?php
$_smarty_tpl->setVariable('static_page', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['contact_enabled']) {?>
        <a class="pl10" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/contacts">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact Us");?>

        </a>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['directory_enabled']) {?>
        <a class="pl10" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>

        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- footer links --><?php }
}
