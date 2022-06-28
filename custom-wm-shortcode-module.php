<?php


function ex_divi_child_theme_setup() {

if ( class_exists('ET_Builder_Module')) {

   class ET_Builder_Module_ShortCode extends ET_Builder_Module {
      function init() {
         $this->name = __( 'Wm ShortCode', 'et_builder' );
         
         $this->slug = 'et_pb_shortcode';
         $this->main_css_element = '%%order_class%%.et_pb_circle_counter';
         $this->settings_modal_toggles = array(
            'general'  => array(
               'toggles' => array(
                  'main_content' => et_builder_i18n( 'Detail' ),
                  'elements'     => et_builder_i18n( 'Elements' ),
               ),
            )
         );

         $this->advanced_fields = array(
            'fonts'           => array(
               'title'  => array(
                  'label'        => et_builder_i18n( 'Title' ),
                  'css'          => array(
                     'main'      => "{$this->main_css_element} h3, {$this->main_css_element} h1.et_pb_module_header, {$this->main_css_element} h2.et_pb_module_header, {$this->main_css_element} h4.et_pb_module_header, {$this->main_css_element} h5.et_pb_module_header, {$this->main_css_element} h6.et_pb_module_header, {$this->main_css_element} h3 a, {$this->main_css_element} h1.et_pb_module_header a, {$this->main_css_element} h2.et_pb_module_header a, {$this->main_css_element} h4.et_pb_module_header a, {$this->main_css_element} h5.et_pb_module_header a, {$this->main_css_element} h6.et_pb_module_header a",
                     'important' => 'plugin_only',
                  ),
                  'header_level' => array(
                     'default' => 'h3',
                  ),
               ),
               'number' => array(
                  'label'            => esc_html__( 'Number', 'et_builder' ),
                  'hide_line_height' => true,
                  'css'              => array(
                     'main' => "{$this->main_css_element} .percent p",
                  ),
               ),
            ));


      }

      function get_fields() {

         /**Getting list of formidable forms using the formidable api */
         $fields = array(

            'frm_id'             => array(
               'label'             => esc_html__( 'Formidable Form', 'et_builder' ),
               'type'              => 'select',
               'option_category'  => 'configuration',
				   'options'          => array(  //get_list_of_formidable();
                  '' => '',
					   '1' => esc_html__( 'Contact Form', 'et_builder' ),
					   '2'  => esc_html__( 'Testing Form', 'et_builder' ),
				   ),
               'number_validation' => true,
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'starting_point'              => array(
               'label'           => et_builder_i18n( 'Starting Point' ),
               'type'            => 'number',
               'option_category' => 'basic_option',
               'description'     => esc_html__( 'Add a starting Point.', 'et_builder' ),
               'toggle_slug'     => 'main_content',
               'dynamic_content' => 'number',
               'value_min'         => 0,
               'default_on_front'  => '0',
               'mobile_options'  => true,
               'hover'           => 'tabs',
            ),
            'trim_start'             => array(
               'label'             => esc_html__( 'Trim Start', 'et_builder' ),
               'type'              => 'number',
               'option_category'   => 'basic_option',
               'number_validation' => true,
               'value_type'        => 'float',
               'value_min'         => 0,
               
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'trim_end'             => array(
               'label'             => esc_html__( 'Trim End', 'et_builder' ),
               'type'              => 'number',
               'option_category'   => 'basic_option',
               'number_validation' => true,
               'value_type'        => 'float',
               'value_min'         => 0,
               
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'start_url'             => array(
               'label'             => esc_html__( 'Start URL', 'et_builder' ),
               'type'              => 'text',
               'option_category'   => 'basic_option',
               'number_validation' => true,
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'end_url'             => array(
               'label'             => esc_html__( 'End URL', 'et_builder' ),
               'type'              => 'text',
               'option_category'   => 'basic_option',
               'number_validation' => true,
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'src'             => array(
               'label'             => esc_html__( 'SRC', 'et_builder' ),
               'type'              => 'text',
               'option_category'   => 'basic_option',
               'number_validation' => true,
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'has_cc'             => array(
               'label'             => esc_html__( 'Has Cc', 'et_builder' ),
               'type'             => 'yes_no_button',
				   'options'          => array(
					   'true'  => et_builder_i18n( 'Yes' ),
					   'false' => et_builder_i18n( 'No' ),
				   ),
               'default'          => 'false',
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
            'is_live'             => array(
               'label'             => esc_html__( 'Live', 'et_builder' ),
               'type'             => 'yes_no_button',
				   'options'          => array(
					   'true'  => et_builder_i18n( 'Yes' ),
					   'false' => et_builder_i18n( 'No' ),
				   ),
				   'default'          => 'false',
               'description'       => et_get_safe_localization( __( "", 'et_builder' ) ),
               'toggle_slug'       => 'main_content',
               'mobile_options'    => true,
               'hover'             => 'tabs',
            ),
           


           
         );
         return $fields;
      }
   
   
         /**
       * Renders the module output.
       *
       * @param  array  $attrs       List of attributes.
       * @param  string $content     Content being processed.
       * @param  string $render_slug Slug of module that is used for rendering output.
       *
       * @return string
       */
      public function render( $attrs, $content, $render_slug ) {
         $sticky            = et_pb_sticky_options();
         $multi_view        = et_pb_multi_view_options( $this );
         $shortcodedetail['src']               = $this->props['src'];
         $shortcodedetail['formid']               = $this->props['frm_id'];
         $shortcodedetail['trimStart']               = $this->props['trim_start'];
         $shortcodedetail['trimEnd']               = $this->props['trim_end'];
         $shortcodedetail['hasccc']             = $this->props['has_cc'];
         $shortcodedetail['islive']              = $this->props['is_live'];
         $shortcodedetail['startingPoint']             = $this->props['starting_point'];
         $shortcodedetail['startURL']              = $this->props['start_url'];
         $shortcodedetail['endURL']              = $this->props['end_url'];

         $output =  "[formidable id='".$shortcodedetail['formid']."' title=true description=true]";

         add_action( 'wp_footer', array( 'ET_Builder_Module_ShortCode', 'wmaddclassname' ) ) ;
         
         return "<script>console.log(".json_encode($shortcodedetail).")</script><div class='custom-wm-shortcode'>".do_shortcode($output)."</div>";
        
      }

   
      /**
       * 
       * Add Css File into the footer when the modeul is present in the page
       * 
       */

      public static function wmaddclassname(){

         wp_enqueue_style( 'custom-divi-module', get_stylesheet_directory_uri() . '/css/custom-divi-module.css' );

      }
   
   }

   

   $et_builder_module_shortcode = new ET_Builder_Module_ShortCode();
   add_shortcode( 'et_pb_shortcode', array($et_builder_module_shortcode, '_shortcode_callback') );

}

}
add_action('et_builder_ready', 'ex_divi_child_theme_setup');