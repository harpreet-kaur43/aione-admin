<?php

/*********************************************************************************************
 *
 *  General settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'dashicons dashicons-admin-generic',
    'title'     => __('General Settings', 'redux-framework-demo'),
    'fields'    => array(
	    array (
            'id' => 'general_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "General Settings" to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'site_layout',
            'type' => 'select',
            'title' =>  __('Layout', 'redux-framework-demo'),
            'subtitle'  => __('Select the layout.', 'redux-framework-demo'),
            'desc' => __('Select the layout setting as <strong>Boxed</strong> or <strong>Wide</strong> by selecting dropdown. Default value is <strong>Wide</strong>.', 'redux-framework-demo'),
            'default'   => 'wide',
            'options'  => array(
                'boxed' => __('Boxed','redux-framework-demo'),
                'wide' => __('Wide','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'site_width',
            'type' => 'text',
            'title' =>  __('Site Width', 'redux-framework-demo'),
            'subtitle'  => __('Set the site width.', 'redux-framework-demo'),
            'desc' => __('Set the site width by entering the value in the textbox like 100% or 1170px.', 'redux-framework-demo'),
            'default'   => '1170px'
        ),
        array (
            'id' => 'font',
            'type' => 'typography',
            'title' =>  __('Primary Font', 'redux-framework-demo'),
            'subtitle'  => __('Select the primary font family for website.', 'redux-framework-demo'),
            'desc' => __('Select the primary font family for body from given options. Use CSS class <strong>font-primary</strong> to use it.', 'redux-framework-demo'),
            'font-family'     => true,
            'font-size'       => true,
            'font-weight'     => false,
            'font-style'      => true,
            'font-backup'     => true,
            'subsets'         => false,
            'custom_fonts'    => true,
            'text-align'      => false,
            'text-transform'  => false,
            'font-variant'    => false,
            'text-decoration' => false,
            'color'           => false,
            'preview'         => false,
            'line-height'     => false,
            'word-spacing'    => false,
            'letter-spacing'  => false,
            'all_styles'      => true,
            'default' => array(
                'font-family'     => "",
                'font-size'     => "16px",
                'fontbackup'     => "Arial, Helvetica, sans-serif",
                'font-weight'     => "400",
                'color'           => '#595959',
            ),
        ),
        array (
            'id' => 'font_heading',
            'type' => 'typography',
            'title' =>  __('Headings Font', 'redux-framework-demo'),
            'subtitle'  => __('Select the font family for headings.', 'redux-framework-demo'),
            'desc' => __('Select the font family for headings from given options. Use CSS class <strong>font-heading</strong> to use it.', 'redux-framework-demo'),
            'font-family'     => true,
            'font-size'       => false,
            'font-weight'     => false,
            'font-style'      => true,
            'font-backup'     => true,
            'subsets'         => false,
            'custom_fonts'    => true,
            'text-align'      => false,
            'text-transform'  => false,
            'font-variant'    => false,
            'text-decoration' => false,
            'color'           => false,
            'preview'         => false,
            'line-height'     => false,
            'word-spacing'    => false,
            'letter-spacing'  => false,
            'all_styles'      => true,
            'default' => array(
                'font-family'     => "",
                'font-backup'     => "Arial, Helvetica, sans-serif",
                'font-weight'     => "400",
                'color'           => '#595959',
            ),
        ),array (
            'id' => 'font_other',
            'type' => 'typography',
            'title' =>  __('Secondry Font', 'redux-framework-demo'),
            'subtitle'  => __('Select the additional font family you want to load.', 'redux-framework-demo'),
            'desc' => __('Select the font family from given options. Use CSS class <strong>font-secondry</strong> to use it.', 'redux-framework-demo'),
            'font-family'     => true,
            'font-size'       => false,
            'font-weight'     => false,
            'font-style'      => true,
            'font-backup'     => false,
            'subsets'         => false,
            'custom_fonts'    => false,
            'text-align'      => false,
            'text-transform'  => false,
            'font-variant'    => false,
            'text-decoration' => false,
            'color'           => false,
            'preview'         => false,
            'line-height'     => false,
            'word-spacing'    => false,
            'letter-spacing'  => false,
            'all_styles'      => true,
            'default' => array(
                'font-family'     => "",
                'font-backup'     => "Arial, Helvetica, sans-serif",
                'font-weight'     => "400",
                'color'           => '#595959',
            ),
        ),
        array (
            'id' => 'color_scheme',
            'type' => 'select_image',
            'title' =>  __('Color Scheme', 'redux-framework-demo'),
            'subtitle'  => __('Select the color scheme.', 'redux-framework-demo'),
            'desc' => __('Select the color scheme as <strong>Red</strong>, <strong>Green</strong> or <strong>Blue</strong> by selecting dropdown. Default value is <strong>Default</strong>.', 'redux-framework-demo'),
            'options'  => array(
                array (
                     'alt'  => 'Default',
                     'img'  => $url_to_img_1,
                ),
                array (
                     'alt'  => 'Red',
                     'img'  => $url_to_img_2,
                ),
            ),
            'default' => 'default'
        ),
        array(
            'id'       => 'color_primary',
            'type'     => 'color',
            'title'    => __('Primary Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a primary color for theme', 'redux-framework-demo'),
            'desc' => __('Use CSS class <strong>primary</strong> to use this color. Use CSS class <strong>hover-primary</strong> to use this color on hover. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes. ', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'transparent' => false,
            'required' => array('color_scheme','!=','custom'),
        ),
        array(
            'id'       => 'color_secondary',
            'type'     => 'color',
            'title'    => __('Secondary Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a secondary color for theme.', 'redux-framework-demo'),
            'desc' => __('Use CSS class <strong>secondary</strong> to use this color. Use CSS class <strong>hover-secondary</strong> to use this color on hover. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes. ', 'redux-framework-demo'),
            'default'  => '#595959',
            'transparent' => false,
            'validate' => 'color',
            'required' => array('color_scheme','!=','custom'),
        ),
        array(
            'id'       => 'color_highlight',
            'type'     => 'color',
            'title'    => __('Highlight Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a highlight color for theme.', 'redux-framework-demo'),
            'desc' => __('Use CSS class <strong>highlight</strong> to use this color. Use CSS class <strong>hover-highlight</strong> to use this color on hover. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes. ', 'redux-framework-demo'),
            'default'  => '#212121',
            'transparent' => false,
            'validate' => 'color',
            'required' => array('color_scheme','!=','custom'),   
        ),
        array(
            'id'       => 'bg_color_primary',
            'type'     => 'color',
            'title'    => __('Primary Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a primary color for backgrounds', 'redux-framework-demo'),
            'desc' => __('Use CSS class <strong>bg-highlight</strong> to use this background color. Use CSS class <strong>hover-bg-highlight</strong> to use this background color on hover. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes. ', 'redux-framework-demo'),
            'default'  => '#333333',
            'transparent' => false,
            'validate' => 'color',
            'required' => array('color_scheme','!=','custom'),
        ),
        array(
            'id'       => 'bg_color_secondary',
            'type'     => 'color',
            'title'    => __('Secondary Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a secondary color for backgrounds.', 'redux-framework-demo'),
            'desc' => __('Use CSS class <strong>bg-highlight</strong> to use this background color. Use CSS class <strong>hover-bg-highlight</strong> to use this background color on hover. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes. ', 'redux-framework-demo'),
            'default'  => '#595959',
            'transparent' => false,
            'validate' => 'color',
            'required' => array('color_scheme','!=','custom'),
        ),
        array(
            'id'       => 'bg_color_highlight',
            'type'     => 'color',
            'title'    => __('Highlight Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a highlight color for backgrounds.', 'redux-framework-demo'),
            'desc' => __('Use CSS class <strong>bg-highlight</strong> to use this background color. Use CSS class <strong>hover-bg-highlight</strong> to use this background color on hover. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes. ', 'redux-framework-demo'),
            'default'  => '#212121',
            'transparent' => false,
            'validate' => 'color',
            'required' => array('color_scheme','!=','custom'),   
        ),

    )
);