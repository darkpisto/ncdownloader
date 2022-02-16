<?php
extract($_);
?>
<div id="app-settings">
    <div id="app-settings-header">
        <button name="app settings"
                class="settings-button"
                data-apps-slide-toggle="#app-settings-content">
            <?php p($l->t('Settings'));?>
        </button>
    </div>
    <div id="app-settings-content">
        <ul id="ncdownloader-settings-collapsible-container">
            <li class="ncdownloader-settings-item">
                <a href="<?php p($l->t($settings_url));?>" title="<?php p($l->t('Personal Settings'));?>" >
                    <?php p($l->t('Personal Settings'));?>
                </a>
            </li>
         <?php if ($is_admin): ?>
            <li class="ncdownloader-settings-item">
                <a href="<?php p($l->t($admin_settings_url));?>" title="<?php p($l->t('Admin Settings'));?>" >
                    <?php p($l->t('Admin Settings'));?>
                </a>
            </li>
        <?php endif;?>
        </ul>
    </div>
</div>