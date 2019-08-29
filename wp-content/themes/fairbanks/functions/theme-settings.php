<?php

/**
 * Theme Settings
 */
function wd_theme_settings_page()
{
  ?>
  <div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form method="post" action="<?php echo esc_url(admin_url('options.php')); ?>">
      <?php
      settings_fields("wd_theme_options");
      do_settings_sections("wd_theme_options");
      submit_button();
      ?>
    </form>
  </div>
<?php
}


function wd_add_theme_menu_item()
{
  add_menu_page('Theme Panel', 'Theme Panel', 'manage_options', 'wd_theme_options', 'wd_theme_settings_page', null, 99);
}
add_action('admin_menu', 'wd_add_theme_menu_item');


// function wd_field_text($args)
// {
//   extract($args);

//   $type = isset($type) ? $type : 'text';
//   $placeholder = isset($placeholder) ? $placeholder : '';

//   echo '<input class="' . $class . '" type="' . $type . '" name="' . $id . '" value="' . esc_attr(get_option($id)) . '" placeholder="' . esc_attr($placeholder) . '">';

//   if (isset($description)) {
//     $desc_class = isset($description_class) ? $description_class : '';
//     echo '<p class="description ' . $desc_class . '">' . esc_html($description) . '</p>';
//   }
// }

// function wd_section_marketo_html()
// {
//   echo '<p>Because some "pages" on the site don\'t have the typical administrative edting screen, the following fields let you define the Marketo form to display on them.</p>';
// }


// function wd_display_theme_panel_fields()
// {
//   $text_args = array(
//     'type' => 'string',
//     'sanitize_callback' => 'sanitize_text_field',
//     'default' => NULL
//   );

//   $url_args = array(
//     'type' => 'string',
//     'sanitize_callback' => 'esc_url_raw',
//     'default' => NULL
//   );

//   /**
//    * 404 Settings
//    */

//   add_settings_section(
//     'wd_theme_section_404',
//     '404 page',
//     null,
//     'wd_theme_options'
//   );
//   add_settings_field(
//     'wd_field_404_url',
//     'Hero image Url',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_404',
//     array(
//       'id' => 'wd_field_404_url',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_404_url', $url_args);

//   add_settings_field(
//     'wd_field_404_text',
//     'Hero text',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_404',
//     array(
//       'id' => 'wd_field_404_text',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_404_text', $text_args);
//   // add social profile section and fields

//   add_settings_section(
//     'wd_theme_section_social',
//     'Social Profile Settings',
//     null,
//     'wd_theme_options'
//   );

//   add_settings_field(
//     'wd_field_twitter_url',
//     'Twitter Profile Url',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_social',
//     array(
//       'id' => 'wd_field_twitter_url',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_twitter_url', $url_args);

//   add_settings_field(
//     'wd_field_facebook_url',
//     'Facebook Profile Url',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_social',
//     array(
//       'id' => 'wd_field_facebook_url',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_facebook_url', $url_args);

//   add_settings_field(
//     'wd_field_linkedin_url',
//     'Linkedin Profile Url',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_social',
//     array(
//       'id' => 'wd_field_linkedin_url',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_linkedin_url', $url_args);

//   add_settings_field(
//     'wd_field_youtube_url',
//     'Youtube Profile Url',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_social',
//     array(
//       'id' => 'wd_field_youtube_url',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_youtube_url', $url_args);

//   // add footer text descriptions
//   add_settings_section(
//     'wd_theme_section_footer',
//     'Footer Text',
//     'wd_section_footer_html',
//     'wd_theme_options'
//   );
//   add_settings_field(
//     'wd_field_footer_discription_text',
//     'discription text',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_footer',
//     array(
//       'id' => 'wd_field_footer_discription_text',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_footer_discription_text', $text_args);

//   add_settings_field(
//     'wd_field_footer_discription_sub',
//     'discription sub text',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_footer',
//     array(
//       'id' => 'wd_field_footer_discription_sub',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_footer_discription_sub', $text_args);


//   add_settings_field(
//     'wd_field_footer_legal_title',
//     'Legal Title',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_footer',
//     array(
//       'id' => 'wd_footer_legal_title',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_footer_legal_title', $text_args);

//   add_settings_field(
//     'wd_field_footer_legal_text',
//     'Legal Text',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_footer',
//     array(
//       'id' => 'wd_footer_legal_text',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_footer_legal_text', $text_args);

//   add_settings_field(
//     'wd_field_footer_legal_copywrite',
//     'Legal Copywrite',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_footer',
//     array(
//       'id' => 'wd_footer_legal_copywrite',
//       'class' => 'regular-text'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_footer_legal_copywrite', $text_args);


//   // add marketo form section and fields

//   add_settings_section(
//     'wd_theme_section_marketo',
//     'Marketo Shortcode Settings',
//     'wd_section_marketo_html',
//     'wd_theme_options'
//   );

//   add_settings_field(
//     'wd_field_marketo_default',
//     'Default Form Shortcode',
//     'wd_field_text',
//     'wd_theme_options',
//     'wd_theme_section_marketo',
//     array(
//       'id' => 'wd_field_marketo_default',
//       'class' => 'regular-text',
//       'placeholder' => 'E.g. [marketo_form id="123"]',
//       'description' => 'Used when a specific Marketo form hasn\'t been defined for a page.'
//     )
//   );
//   register_setting('wd_theme_options', 'wd_field_marketo_default', $text_args);

//   $categories = wd_get_all_top_categories();
//   foreach ($categories as $cat) {
//     $id = 'wd_field_marketo_cat_' . $cat->term_id;
//     $label = ucwords($cat->name);
//     add_settings_field(
//       $id,
//       $label,
//       'wd_field_text',
//       'wd_theme_options',
//       'wd_theme_section_marketo',
//       array(
//         'id' => $id,
//         'class' => 'regular-text',
//         'placeholder' => 'E.g. [marketo_form id="123"]',
//       )
//     );
//     register_setting('wd_theme_options', $id, $text_args);
//   }

//   $brands = wd_get_brands();
//   foreach ($brands as $brand) {
//     $id = 'wd_field_marketo_brand_' . $brand->term_id;
//     $label = ucwords($brand->name);
//     add_settings_field(
//       $id,
//       $label,
//       'wd_field_text',
//       'wd_theme_options',
//       'wd_theme_section_marketo',
//       array(
//         'id' => $id,
//         'class' => 'regular-text',
//         'placeholder' => 'E.g. [marketo_form id="123"]',
//       )
//     );
//     register_setting('wd_theme_options', $id, $text_args);
//   }
// }
// add_action('admin_init', 'wd_display_theme_panel_fields');
