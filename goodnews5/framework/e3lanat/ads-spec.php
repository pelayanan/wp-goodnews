<?php
$e3lanat_mb = new MomizatMB_MetaBox(array
(
    'id' => 'mom_ads_meta',
    'title' => __('Ad Settings', 'framework'),
    'template' => MOM_FW . '/e3lanat/ads-metaboxes.php',
    'types' => array('ads'),
    'hide_editor' => TRUE
));

$e3lanat_content_mb = new MomizatMB_MetaBox(array
(
    'id' => 'mom_ads_content_meta',
    'title' => __('Ads', 'framework'),
    'template' => MOM_FW . '/e3lanat/ads-content-metaboxes.php',
    'types' => array('ads'),
    'hide_editor' => TRUE
));

$e3lanat_sc_mb = new MomizatMB_MetaBox(array
(
    'id' => 'mom_ads_sc_meta',
    'title' => __('Shortcode', 'framework'),
    'template' => MOM_FW . '/e3lanat/ads-sc-metaboxes.php',
    'types' => array('ads'),
    'hide_editor' => TRUE,
    'context' => 'side'
));