<?php
use Drupal\Core\Form\FormStateInterface;
/**
 * @file
 * Custom setting for Tara theme.
 */
function tara_form_system_theme_settings_alter(&$form, FormStateInterface &$form_state, $form_id = NULL) {
  $img_path = $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'tara') . '/images/tarapro.jpg';
  $img = '<img src="'.$img_path.'" alt="image" />';
  $form['tara'] = [
    '#type'       => 'vertical_tabs',
    '#title'      => '<h3>' . t('Tara Theme Settings') . '</h3>',
    '#default_tab' => 'general',
  ];

  // General settings tab.
  $form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h3>Thanks for using Tara Theme</h3>Tara is a free Drupal 8 theme designed and developed by <a href="https://drupar.com" target="_blank">Drupar.com</a>'),
    '#group' => 'tara',
  ];

  // Theme Color tab.
  $form['color'] = [
    '#type'  => 'details',
    '#title' => t('Theme Color'),
    '#group' => 'tara',
  ];

  // Social tab.
  $form['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#description' => t('Social icons settings. These icons appear in header and footer region.'),
    '#group' => 'tara',
  ];

  // Slider tab.
  $form['slider'] = [
    '#type'  => 'details',
    '#title' => t('Homepage Slider'),
    '#description' => t('<h3>Manage Homepage Slider</h3>'),
    '#group' => 'tara',
  ];

  // Header tab.
  $form['header'] = [
    '#type'  => 'details',
    '#title' => t('Header'),
    '#group' => 'tara',
  ];

  // Sidebar tab.
  $form['sidebar'] = [
    '#type'  => 'details',
    '#title' => t('Sidebar'),
    '#group' => 'tara',
  ];

  // Content tab.
  $form['content'] = [
    '#type'  => 'details',
    '#title' => t('Content'),
    '#group' => 'tara',
  ];

  // Footer tab.
  $form['footer'] = [
    '#type'  => 'details',
    '#title' => t('Footer'),
    '#group' => 'tara',
  ];
	
  // Insert codes
  $form['insert_codes'] = [
    '#type'  => 'details',
    '#title' => t('Insert Codes'),
    '#group' => 'tara',
  ];
  // Support tab.
  $form['support'] = [
    '#type'  => 'details',
    '#title' => t('Support'),
    '#group' => 'tara',
  ];

  // Upgrade to tarapro tab.
  $form['upgrade'] = [
    '#type'  => 'details',
    '#title' => t('Upgrade to TaraPro'),
    '#description'  => t('<h3>Upgrade To TaraPro For $19 Only.</h3>'),
    '#group' => 'tara',
  ];

  // Content under general tab.
  $form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('<a href="https://www.drupar.com/theme/tara" target="_blank">Theme Homepage</a> || <a href="//demo2.drupar.com/tara/" target="_blank">Theme Demo</a> || <a href="https://www.drupar.com/tara-theme-documentation" target="_blank">Theme Documentation</a> || <a href="https://www.drupar.com/support" target="_blank">Theme Support</a>'),
  ];

  $form['general']['general_info_upgrade'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Upgrade To TaraPro for $19 only'),
    '#description' => t('<a href="https://www.drupar.com/theme/tarapro" target="_blank">Purchase TaraPro</a> || <a href="//demo2.drupar.com/tarapro/" target="_blank">TaraPro Demo</a>'),
  ];

  // Color tab -> Settings.
  $form['color']['theme_color'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Color'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Settings under social tab.
  // Show or hide all icons.
  $form['social']['all_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons'),
  ];

  $form['social']['all_icons']['all_icons_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in header and footer'),
    '#default_value' => theme_get_setting('all_icons_show', 'tara'),
    '#description'   => t("Check this option to show social icons in header and footer. Uncheck to hide."),
  ];

  $form['social']['only_header_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons only in header'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  $form['social']['only_footer_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons only in footer'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Facebook.
    $form['social']['facebook'] = [
    '#type'        => 'details',
    '#title'       => t("Facebook"),
  ];

  $form['social']['facebook']['facebook_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#description'   => t("Enter yours facebook profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('facebook_url', 'tara'),
  ];

  // Twitter.
  $form['social']['twitter'] = [
    '#type'        => 'details',
    '#title'       => t("Twitter"),
  ];

  $form['social']['twitter']['twitter_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Twitter Url'),
    '#description'   => t("Enter yours twitter page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('twitter_url', 'tara'),
  ];

  // Instagram.
  $form['social']['instagram'] = [
    '#type'        => 'details',
    '#title'       => t("Instagram"),
  ];

  $form['social']['instagram']['instagram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Instagram Url'),
    '#description'   => t("Enter yours instagram page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('instagram_url', 'tara'),
  ];

  // Linkedin.
  $form['social']['linkedin'] = [
    '#type'        => 'details',
    '#title'       => t("Linkedin"),
  ];

  $form['social']['linkedin']['linkedin_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Linkedin Url'),
    '#description'   => t("Enter yours linkedin page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('linkedin_url', 'tara'),
  ];

  // YouTube.
  $form['social']['youtube'] = [
    '#type'        => 'details',
    '#title'       => t("YouTube"),
  ];

  $form['social']['youtube']['youtube_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('youtube_url', 'tara'),
  ];

  // Vimeo.
  $form['social']['vimeo'] = [
    '#type'        => 'details',
    '#title'       => t("Vimeo"),
  ];

  $form['social']['vimeo']['vimeo_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours vimeo.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('vimeo_url', 'tara'),
  ];

  // Social -> vk.com url.
   $form['social']['vk'] = [
     '#type'        => 'details',
     '#title'       => t("vk.com"),
   ];
   $form['social']['vk']['vk_url'] = [
       '#type'          => 'textfield',
       '#title'         => t('vk.com'),
       '#description'   => t("Enter yours vk.com page url. Leave the url field blank to hide this icon."),
       '#default_value' => theme_get_setting('vk_url', 'tara'),
   ];

   // Social -> whatsapp.
   $form['social']['whatsapp'] = [
     '#type'        => 'details',
     '#title'       => t("whatsapp"),
   ];
   $form['social']['whatsapp']['whatsapp_url'] = [
       '#type'          => 'textfield',
       '#title'         => t('WhatsApp'),
       '#description'   => t("Enter yours whatsapp url. Leave the url field blank to hide this icon."),
       '#default_value' => theme_get_setting('whatsapp_url', 'tara'),
   ];

   // Social -> github.
   $form['social']['github'] = [
     '#type'        => 'details',
     '#title'       => t("Github"),
   ];
   $form['social']['github']['github_url'] = [
       '#type'          => 'textfield',
       '#title'         => t('Github'),
       '#description'   => t("Enter yours github url. Leave the url field blank to hide this icon."),
       '#default_value' => theme_get_setting('github_url', 'tara'),
   ];

   // Social -> telegram.
   $form['social']['telegram'] = [
     '#type'        => 'details',
     '#title'       => t("Telegram"),
   ];
   $form['social']['telegram']['telegram_url'] = [
     '#type'          => 'textfield',
     '#title'         => t('Telegram'),
     '#description'   => t("Enter yours telegram url. Leave the url field blank to hide this icon."),
     '#default_value' => theme_get_setting('telegram_url', 'tara'),
   ];

  /**
   * Slider Settings
   */
  // Show or hide slider on homepage.
  $form['slider']['slider_enable_option'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Enable Slider'),
  ];

  $form['slider']['slider_enable_option']['slider_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Slider on Homepage'),
    '#default_value' => theme_get_setting('slider_show', 'tara'),
    '#description'   => t("Check this option to show slider on homepage. Uncheck to hide."),
  ];
  /* Slider -> Image upload */
  $form['slider']['slider_image_section'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Background Image'),
  ];
  $form['slider']['slider_image_section']['slider_image'] = [
    '#type'          => 'managed_file',
    '#upload_location' => 'public://',
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#title'  => t('<p>Upload Slider Image</p>'),
    '#default_value'  => theme_get_setting('slider_image', 'tara'),
    '#description'   => t('Tara theme has limitation of single image for slider. Separate image for each slide is available in TaraPro. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  $form['slider']['slider_time_field'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Autoplay Interval Time'),
  ];
  $form['slider']['slider_time_field']['slider_time'] = [
    '#type'          => 'number',
    '#default_value' => theme_get_setting('slider_time', 'tara'),
    '#title'         => t('Enter slider interval time between two slides'),
    '#description'   => t('Time interval between two slides. Default value is 5000, this means 5 seconds.'),
  ];

  $form['slider']['slider_dots_field'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Dots Navigation'),
  ];

  $form['slider']['slider_dots_field']['slider_dots'] = [
    '#type'          => 'select',
    '#title'         => t('Show or Hide Slider Dots Navigation'),
    '#options' => array(
      'true' => t('Show'),
      'false' => t('Hide'),),
    '#default_value' => theme_get_setting('slider_dots', 'tara'),
    '#description'   => t('Show or hide slider dots navigation that appears at the bottom of slider.'),
  ];

  $form['slider']['slider_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Slider Code'),
    '#default_value' => theme_get_setting('slider_code', 'tara'),
    '#description'   => t('Please refer to this <a href="https://www.drupar.com/tara-theme-documentation/how-manage-homepage-slider" target="_blank">documentation page</a> for slider code tutorial.'),
  ];

  // Settings under header tab.
  $form['header']['sticky_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sticky Header'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Settings under sidebar.
  // Sidebar -> Frontpage sidebar
  $form['sidebar']['front_sidebars'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Homepage Sidebar'),
  ];
  $form['sidebar']['front_sidebars']['front_sidebar'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Sidebars On Homepage'),
    '#default_value' => theme_get_setting('front_sidebar', 'tara'),
    '#description'   => t('Check this option to enable left and right sidebar on homepage.'),
  ];
  $form['sidebar']['animated_sidebar'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Sidebar'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Settings under content tab.
  // Settings under content tab -> Homepage.
  $form['content']['homepage'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Homepage Content'),
    '#description'   => t('Please follow this tutorial to add content on homepage. <a href="https://www.drupar.com/tara-theme-documentation/how-add-content-homepage" target="_blank">How to add content on homepage</a>'),
  ];

  // Settings under content tab -> Page loader.
  $form['content']['preloader'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Pre Page Loader'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Settings under content tab -> Animated Content.
  $form['content']['animated_content'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Page Content'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Content -> Google Fonts.
  $form['content']['google_font_section'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Google Fonts'),
  ];
  $form['content']['google_font_section']['google_font'] = [
    '#type'          => 'select',
    '#title'         => t('Select Google Fonts Location'),
    '#options' => array(
    	'local' => t('Local Self Hosted'),
      'googlecdn' => t('Google CDN Server')
    ),
    '#default_value' => theme_get_setting('google_font', 'tara'),
    '#description'   => t('Tara theme uses following Google fonts: Open Sans, Roboto and Poppins. You can serve these fonts locally or from Google server.'),
  ];

  // Settings under content tab -> Font icons.
  $form['content']['fonticons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Font Icons'),
  ];
  // Settings under content tab -> FontAwesome icons.
  $form['content']['fonticons']['font_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('FontAwesome 4 Font Icons'),
    '#description'   => t('Tara theme has included FontAwesome v4.7 font icons. You can use 600+ icons with Tara theme.<br />Please visit this tutorial page for details. <a href="https://www.drupar.com/custom-shortcodes-set-two/fontawesome-font-icons" target="_blank">How To Use FontAwesome Icons</a>.'),
  ];

  // Font Icons -> Fontawesome 5
  $form['content']['fonticons']['fontawesome5'] = [
    '#type'        => 'fieldset',
    '#title'       => t('FontAwesome 5'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  // Font Icons -> Fontawesome 5
  $form['content']['fonticons']['material'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Google Material Font Icons'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  // Settings under content tab -> iconmonstr
  $form['content']['fonticons']['iconmonstr'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Iconmonstr Font Icons'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  // Settings under content tab -> Shortcodes
  $form['content']['shortcodes'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Shortcodes'),
    '#description'   => t('Tara theme has some custom shortcodes. You can create some styling content using these shortcodes.<br />Please visit this tutorial page for details. <a href="https://www.drupar.com/tara-theme-documentation/tara-shortcodes" target="_blank">Shortcodes in Tara theme</a>.'),
  ];
  // Show user picture in comment.
  $form['content']['comment'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Comment'),
  ];

  $form['content']['comment']['comment_user_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('User Picture in comments'),
    '#default_value' => theme_get_setting('comment_user_pic', 'tara'),
    '#description'   => t("Check this option to show user picture in comment. Uncheck to hide."),
  ];

  // Node author picture.
  $form['content']['node'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node'),
  ];

  $form['content']['node']['node_author_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Author Picture'),
    '#default_value' => theme_get_setting('node_author_pic', 'tara'),
    '#description'   => t("Check this option to show node author picture in submitted details. Uncheck to hide."),
  ];

  // Show tags in node submitted.
  $form['content']['node']['node_tags'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Tags'),
    '#default_value' => theme_get_setting('node_tags', 'tara'),
    '#description'   => t("Check this option to show node tags (if any) in submitted details. Uncheck to hide."),
  ];

  $form['content']['node_share'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Share Page On Social Media'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Settings under footer tab.
  // Scroll to top.
  $form['footer']['scrolltotop'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Scroll To Top'),
  ];

  $form['footer']['scrolltotop']['scrolltotop_on'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable scroll to top feature.'),
    '#default_value' => theme_get_setting('scrolltotop_on', 'tara'),
    '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disable this fearure and hide scroll to top icon."),
  ];

  // Footer -> Copyright.
  $form['footer']['copyright'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Website Copyright Text'),
  ];

  $form['footer']['copyright']['copyright_text'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show website copyright text in footer.'),
    '#default_value' => theme_get_setting('copyright_text', 'tara'),
    '#description'   => t("Check this option to show website copyright text in footer. Uncheck to hide."),
  ];

  // Footer -> Copyright -> custom copyright text
  $form['footer']['copyright']['copyright_text_custom'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Custom copyright text'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  // Footer -> Cookie message.
  $form['footer']['cookie'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Cookie Consent message'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];

  $form['footer']['cookie']['cookie_message'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Cookie Consent Message'),
    '#description'   => t('Make your website EU Cookie Law Compliant. According to EU cookies law, websites need to get consent from visitors to store or retrieve cookies.'),
  ];
  /**
   * Insert Codes
   */
  $form['insert_codes']['insert_codes_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Insert Codes -> Head
  $form['insert_codes']['head'] = [
    '#type'        => 'details',
    '#title'       => t('Head'),
    '#description' => t('<h3>Insert Codes Before &lt;/HEAD&gt;</h3><hr />'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> Body
  $form['insert_codes']['body'] = [
    '#type'        => 'details',
    '#title'       => t('Body'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> CSS
  $form['insert_codes']['css'] = [
    '#type'        => 'details',
    '#title'       => t('CSS Codes'),
    '#group'       => 'insert_codes_tab',
  ];
  // Insert Codes -> Head -> Head codes
  $form['insert_codes']['head']['insert_head'] = [
    '#type'          => 'fieldset',
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  // Insert Codes -> Body -> Body start codes
  $form['insert_codes']['body']['insert_body_start_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code after &lt;BODY&gt; tag'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  // Insert Codes -> Body -> Body ENd codes
  $form['insert_codes']['body']['insert_body_end_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code before &lt;/BODY&gt; tag'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://www.drupar.com/theme/tarapro" target="_blank">Buy TaraPro for $19 only.</a>'),
  ];
  // Insert Codes -> css
  $form['insert_codes']['css']['css_custom'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Addtional CSS'),
  ];
  $form['insert_codes']['css']['css_custom']['css_extra'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Addtional CSS'),
    '#default_value' => theme_get_setting('css_extra', 'tara'),
    '#description'   => t("Check this option to enable additional styling / css. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['css']['css_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Addtional CSS Codes'),
    '#default_value' => theme_get_setting('css_code', 'tara'),
    '#description'   => t('Add your own CSS codes here to customize the appearance of your site.<br />Please refer to this tutorial for detail: <a href="https://www.drupar.com/tara-theme-documentation/custom-css" target="_blank">Custom CSS</a>'),
  ];

  // Settings under support tab.
  $form['support']['info'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Theme Support'),
    '#description' => t('<h4>Documentation</h4>
    <p>We have a detailed documentation about how to use theme. Please read the <a href="https://www.drupar.com/tara-theme-documentation" target="_blank">Tara Theme Documentation</a>.</p>
    <hr />
    <h4>Open An Issue</h4>
    <p>If you need support that is beyond our theme documentation, please <a href="https://www.drupal.org/project/issues/tara?categories=All" target="_blank">open an issue</a> at project page.</p>
    <hr />
    <h4>Contact Us</h4>
    <p>If you need some specific customization in theme, please contact us<br><a href="https://www.drupar.com/contact" target="_blank">drupar.com/contact</a></p>'),
  ];

  // Settings under upgrade tab.
  $form['upgrade']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('<a href="https://demo2.drupar.com/tarapro/" target="_blank">TaraPro Demo</a> | <a href="https://www.drupar.com/theme/tarapro" target="_blank">Purchase TaraPro for $19 only</a>'),
    '#description' => t("$img<br /><a href='https://demo2.drupar.com/tarapro/' target='_blank'>TaraPro Demo</a> | <a href='https://www.drupar.com/theme/tarapro' target='_blank'>Purchase TaraPro for $19 only</a>"),
  ];
// End form.
}
