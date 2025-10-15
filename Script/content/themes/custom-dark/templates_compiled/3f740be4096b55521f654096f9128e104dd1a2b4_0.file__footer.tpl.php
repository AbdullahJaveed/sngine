<?php
/* Smarty version 5.5.2, created on 2025-10-14 07:26:07
  from 'file:_footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68edfb0f49f062_63860855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f740be4096b55521f654096f9128e104dd1a2b4' => 
    array (
      0 => '_footer.tpl',
      1 => 1760349441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_ads.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:_js_templates.tpl' => 1,
    'file:_footer.bottom_bar.tpl' => 1,
  ),
))) {
function content_68edfb0f49f062_63860855 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/Script/content/themes/custom-dark/templates';
?><!-- ads -->
<?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->getValue('ads_master')['footer'],'_master'=>true), (int) 0, $_smarty_current_dir);
?>
<!-- ads -->

<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array('index','profile','page','group','event'))) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>

</div>
<!-- main wrapper -->

<!-- Dependencies CSS [Twemoji-Awesome] -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/SebastianAigner/twemoji-amazing/twemoji-amazing.css">
<!-- Dependencies CSS [Twemoji-Awesome] -->

<!-- JS Files -->
<?php $_smarty_tpl->renderSubTemplate('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<!-- JS Files -->

<!-- JS Templates -->
<?php $_smarty_tpl->renderSubTemplate('file:_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<!-- JS Templates -->

<!-- Footer Custom JavaScript -->
<?php if ($_smarty_tpl->getValue('system')['custome_js_footer']) {?>
  <?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['custome_js_footer'],ENT_QUOTES);?>

  <?php echo '</script'; ?>
>
<?php }?>
<!-- Footer Custom JavaScript -->

<!-- Analytics Code -->
<?php if ($_smarty_tpl->getValue('system')['analytics_code']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['analytics_code'],ENT_QUOTES);
}?>
<!-- Analytics Code -->

<!-- Sounds -->
<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
  <!-- Notification -->
  <audio id="notification-sound" preload="auto">
    <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/notification.mp3" type="audio/mpeg">
  </audio>
  <!-- Notification -->
  <?php if ($_smarty_tpl->getValue('system')['chat_enabled']) {?>
    <!-- Chat -->
    <audio id="chat-sound" preload="auto">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/chat.mp3" type="audio/mpeg">
    </audio>
    <!-- Chat -->
    <!-- Call -->
    <audio id="chat-calling-sound" preload="auto" loop="true">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/calling.mp3" type="audio/mpeg">
    </audio>
    <!-- Call -->
    <!-- Video -->
    <audio id="chat-ringing-sound" preload="auto" loop="true">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/ringing.mp3" type="audio/mpeg">
    </audio>
    <!-- Video -->
  <?php }
}?>
<!-- Sounds -->

<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:_footer.bottom_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>

<!-- PWA Install Banner -->
<?php if ($_smarty_tpl->getValue('system')['pwa_enabled'] && $_smarty_tpl->getValue('system')['pwa_banner_enabled']) {?>
  <div class="pwa_install_banner" id="PWAInstallBanner">
    <div class="inner">
      <div class="close" id="PWAInstallClose">
        <i class="fa-regular fa-circle-xmark fa-lg"></i>
      </div>
      <div class="logo">
        <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php if ($_smarty_tpl->getValue('system')['pwa_192_icon']) {
echo $_smarty_tpl->getValue('system')['pwa_192_icon'];
} else { ?>pwa/icon-192x192.png<?php }?>" alt="logo" />
      </div>
      <div class="name">
        <span class="title"><?php echo $_smarty_tpl->getValue('system')['system_title'];?>
</span>
        <span class="description"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
</span>
      </div>
      <div class="cta">
        <button id="PWAInstallButton" class="btn btn-primary rounded-pill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Install");?>
</button>
      </div>
    </div>
  </div>

  <?php echo '<script'; ?>
>
    function isIos() {
      return /iphone|ipad|ipod/.test(navigator.userAgent.toLowerCase());
    }

    function isInStandaloneMode() {
      return ('standalone' in window.navigator) && window.navigator.standalone;
    }

    $(document).ready(function() {
      $("#PWAInstallClose").on("click", function(e) {
        $("#PWAInstallBanner").removeClass("is-active");
        setCookie("PWAInstallCookieHide", 1, 14);
      });
      if (isIos() && !isInStandaloneMode()) {
        let cookie = getCookie("PWAInstallCookieHide");
        if (!cookie) {
          $("#PWAInstallBanner").addClass("is-active");
        }
      }
    });
    window.addEventListener("beforeinstallprompt", function(event) {
      event.preventDefault();
      if (!getCookie("PWAInstallCookieHide")) {
        $("#PWAInstallBanner").addClass("is-active");
      }
      window.promptEvent = event;
    });
    window.addEventListener("appinstalled", function() {
      $("#PWAInstallBanner").removeClass("is-active");
      setCookie("PWAInstallCookieHide", 1, 14);
    });
    document.addEventListener("click", function(event) {
      if (event.target.matches("#PWAInstallButton")) {
        if (isIos()) {
          alert("To install this app, tap the Share icon and choose 'Add to Home Screen'");
        } else if (window.promptEvent) {
          window.promptEvent.prompt();
        }
      }
    });
  <?php echo '</script'; ?>
>
<?php }?>
<!-- PWA Install Banner -->

</body>

</html><?php }
}
