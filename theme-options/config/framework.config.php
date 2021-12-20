<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme-Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme-Options <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();
$options[]      =  array(
  'name'        =>'Four_section',
  'title'       =>'Header Top',
  'icon'        =>'fa fa-home',
  'fields'      =>array(
  array(
        'id'      =>'fields-6',
        'type'    =>'text',
        'title'   =>'E-mail Icon',
      ),
  array(
        'id'      =>'fields-7',
        'type'    =>'text',
        'title'    =>'E-mail Address',
      ),
  array(
        'id'      =>'fields-8',
        'type'    =>'text',
        'title'   =>'Phone Icon',
      ),
  array(
        'id'      =>'fields-9',
        'type'    =>'text',
        'title'    =>'Phone Number',
      ),
  array(
        'id'      =>'fields-10',
        'type'    =>'text',
        'title'    =>'Facebook Link',
      ),
  array(
        'id'      =>'fields-11',
        'type'    =>'text',
        'title'    =>'Twitter Link',
      ),
  array(
        'id'      =>'fields-12',
        'type'    =>'text',
        'title'    =>'Youtube Link',
      ),
  array(
        'id'      =>'fields-13',
        'type'    =>'text',
        'title'    =>'linkedin Link',
      ),
  array(
        'id'      =>'fields-14',
        'type'    =>'text',
        'title'    =>'Pinterest Link',
      ),
  ),
);
$options[]      =  array(

  'name'        =>'Second_section',
  'title'       =>'Header Logo',
  'icon'        =>'fa fa-home',
  'fields'      =>array(

  array(
        'id'      =>'fields-0',
        'type'    =>'image',
        'title'    =>'Logo',
      ),


  ),
);
$options[]      =  array(

  'name'        =>'Eight_section',
  'title'       =>'All Section Heading',
  'icon'        =>'fa fa-home',
  'fields'      =>array(
  array(
        'id'      =>'fields-26',
        'type'    =>'text',
        'title'    =>'Write Your About Section Heading',
      ),
  array(
        'id'      =>'fields-26.1',
        'type'    =>'textarea',
        'title'    =>'Write Your About Section Description',
      ),
  array(
        'id'      =>'fields-26.2',
        'type'    =>'text',
        'title'    =>'Write Your Service Section Heading',
      ),
  array(
        'id'      =>'fields-26.3',
        'type'    =>'textarea',
        'title'    =>'Write Your Service Section Description',
      ),
  array(
        'id'      =>'fields-26.4',
        'type'    =>'text',
        'title'    =>'Write Your Request Call Heading',
      ),
  array(
        'id'      =>'fields-26.5',
        'type'    =>'textarea',
        'title'    =>'Write Your Request Call Description',
      ),
  array(
        'id'      =>'fields-26.6',
        'type'    =>'text',
        'title'    =>'Write Your WhyChose Heading',
      ),
  array(
        'id'      =>'fields-26.7',
        'type'    =>'textarea',
        'title'    =>'Write Your WhyChose Description',
      ),
  array(
        'id'      =>'fields-26.8',
        'type'    =>'text',
        'title'    =>'Write Your News Heading',
      ),
  array(
        'id'      =>'fields-26.9',
        'type'    =>'textarea',
        'title'    =>'Write Your News Description',
      ),
  ),
);
$options[]      =  array(

  'name'        =>'first_section',
  'title'       =>'About Area',
  'icon'        =>'fa fa-skype',
  'fields'      =>array(

    array(
      'id'      =>'fields-1',
      'type'    =>'text',
      'title'    =>'About Title'
    ),
    array(
      'id'      =>'fields-2',
      'type'    =>'textarea',
      'title'    =>'About Description'
    ),
    array(
      'id'      =>'fields-3',
      'type'    =>'image',
      'title'    =>'Image'
    ),
  ),
);
$options[]      =  array(

  'name'        =>'Fifth_section',
  'title'       =>'Why Chose Area One',
  'icon'        =>'fa fa-home',
  'fields'      =>array(

  array(
        'id'      =>'fields-19',
        'type'    =>'text',
        'title'    =>'First Icon',
      ),
  array(
        'id'      =>'fields-20',
        'type'    =>'text',
        'title'    =>'First Chose Title',
      ),
  array(
        'id'      =>'fields-21',
        'type'    =>'textarea',
        'title'    =>'First Description',
      ),
  array(
        'id'      =>'fields-22',
        'type'    =>'text',
        'title'    =>'First Icon Below',
      ),
  array(
        'id'      =>'fields-23',
        'type'    =>'text',
        'title'    =>'First Chose Title Below',
      ),
  array(
        'id'      =>'fields-24',
        'type'    =>'textarea',
        'title'    =>'First Description Below',
      ),
  array(
        'id'      =>'fields-25',
        'type'    =>'image',
        'title'    =>'Upload Choise Image',
      ),

  ),
);

$options[]      =  array(

  'name'        =>'Seventh_section',
  'title'       =>'Why Chose Area Two',
  'icon'        =>'fa fa-home',
  'fields'      =>array(

  array(
        'id'      =>'fields-25.1',
        'type'    =>'text',
        'title'    =>'Second Chose Icon',
      ),
  array(
        'id'      =>'fields-25.2',
        'type'    =>'text',
        'title'    =>'Second Chose title',
      ),
  array(
        'id'      =>'fields-25.3',
        'type'    =>'textarea',
        'title'    =>'Second Chose Description',
      ),
  array(
        'id'      =>'fields-25.4',
        'type'    =>'text',
        'title'    =>'Second Chose Icon Below',
      ),
  array(
        'id'      =>'fields-25.5',
        'type'    =>'text',
        'title'    =>'Second Chose Title Below',
      ),
  array(
        'id'      =>'fields-25.6',
        'type'    =>'textarea',
        'title'    =>'Second Chose Description Below',
      ),


  ),
);

$options[]      =  array(
  'name'        =>'Third_section',
  'title'       =>'Footer Area',
  'icon'        =>'fa fa-home',
  'fields'      =>array(
  array(
        'id'      =>'fields-5',
        'type'    =>'text',
        'title'    =>'Copyright Text',
        'default'  =>'©All Right Reserved 2018:By Akter Hussain',
      ),
  array(
        'id'      =>'fields-15',
        'type'    =>'image',
        'title'    =>'Paypal Image',
      ),
  array(
        'id'      =>'fields-16',
        'type'    =>'image',
        'title'    =>'Visa Image',
      ),
  array(
        'id'      =>'fields-17',
        'type'    =>'image',
        'title'    =>'Americanexpress Image',
      ),
  array(
        'id'      =>'fields-18',
        'type'    =>'image',
        'title'    =>'Mastercard Image',
      ),
  ),
);

// ------------------------------
// Preloader sections           -
// ------------------------------


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_3',
  'title'  => 'Others',
  'icon'   => 'fa fa-gift'
);

// ------------------------------
// license                      -
// ------------------------------


CSFramework::instance( $settings, $options );
