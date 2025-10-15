<?php
/* Smarty version 5.5.2, created on 2025-10-14 07:26:06
  from 'file:_ads_campaigns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68edfb0edb1aa5_03780777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5968bf93f639420785db7cdd7c1df03d21fe5b3' => 
    array (
      0 => '_ads_campaigns.tpl',
      1 => 1760349436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_68edfb0edb1aa5_03780777 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/custom-dark/templates';
if ($_smarty_tpl->getValue('ads_campaigns')) {?>
  <!-- ads campaigns -->
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads_campaigns'), 'campaign');
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('campaign')->value) {
$foreach26DoElse = false;
?>
    <div class="card <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "post") {?>bg-transparent<?php }?>">
      <div class="card-header bg-transparent <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "post") {?>plr0 pb0<?php }?>">
        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

      </div>
      <div class="card-body <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == 'click') {?>js_ads-click-campaign<?php }?> <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "post") {?>plr0 pb0<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
        <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "post") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('campaign')['ads_post'],'standalone'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank">
            <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('campaign')['ads_image'];?>
">
          </a>
          <?php if ($_smarty_tpl->getValue('campaign')['ads_title'] || $_smarty_tpl->getValue('campaign')['ads_description']) {?>
            <div class="ptb5 plr10">
              <p class="ads-title">
                <a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('campaign')['ads_title'];?>
</a>
              </p>
              <p class="ads-descrition">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('campaign')['ads_description'],200);?>

              </p>
            </div>
          <?php }?>
        <?php }?>
      </div>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <!-- ads campaigns -->
<?php }
}
}
