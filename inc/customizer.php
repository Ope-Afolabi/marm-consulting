<?php

  /*Customizer Code HERE*/
  add_action('customize_register', 'theme_footer_customizer');
  function theme_footer_customizer($wp_customize){

    // Homepage section settings 

   //adding section in wordpress customizer   
  $wp_customize->add_section('header_settings_section', array(
    'title'          => 'Homepage Section'
   ));
  
   //adding setting for heading text area
  $wp_customize->add_setting('text_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We Provide consulting services to Businesses and Government Agencies in Nigeria.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

  
   //adding setting for environmental management section
  $wp_customize->add_setting('service1_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We act to safeguard nature from potentially damaging business operations.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

   //adding setting for procurement management section
  $wp_customize->add_setting('service2_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We ensure that everything is in place when it is needed.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

   //adding setting for information systems section
  $wp_customize->add_setting('service3_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We provide cutting edge technology to assist in your business operations.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

   //adding setting for telecommunication section
  $wp_customize->add_setting('service4_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We provide robust telecommunication services for businesses to operate successfully.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

   //adding setting for specialist training section
  $wp_customize->add_setting('service5_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We provide specialist training to prepare students for the IT industry.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

   //adding setting for specialist recruitment section
  $wp_customize->add_setting('service6_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'We provice specialist recruitment for your company needs.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

   //adding setting for our mission section
  $wp_customize->add_setting('our_mission_setting', array(
      'type'           => 'theme_mod',
      'default'        => 'At Marm, our commitment is in delivering cutting edge solutions to business problems, we care about the environment and also in ensuring the best possible experience for our customers. We offer a range of servies from environmental management to training and recruitment.',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));


  
//   control for header text
      $wp_customize->add_control('text_setting', array(
          'label'   => 'Header Text Here',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

//   environmental management
      $wp_customize->add_control('service1_setting', array(
          'label'   => 'Services - Environmental Management',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

//   procurement management
      $wp_customize->add_control('service2_setting', array(
          'label'   => 'Services - Procurement Management',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

//   information systems
      $wp_customize->add_control('service3_setting', array(
          'label'   => 'Services - Information Systems',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

//   telecommunication
      $wp_customize->add_control('service4_setting', array(
          'label'   => 'Services - Telecommunication',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

//   Specialist Training
      $wp_customize->add_control('service5_setting', array(
          'label'   => 'Services - Specialist Training',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

//   Specialist Recruitment
      $wp_customize->add_control('service6_setting', array(
          'label'   => 'Services - Specialist Recruitment',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));
  

//   Our Mission
      $wp_customize->add_control('our_mission_setting', array(
          'label'   => 'Our Mission Text',
           'section' => 'header_settings_section',
          'type'    => 'textarea',
         ));

// Footer section

//adding setting for telephone
$wp_customize->add_setting('number_setting', array(
    'type'           => 'theme_mod',
    'default'        => '(234) 90 7070 4200',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

//   control for telephone
$wp_customize->add_control('number_setting', array(
    'label'   => 'Phone Number',
     'section' => 'header_settings_section',
    'type'    => 'text',
   ));

//adding setting for telephone
$wp_customize->add_setting('email_setting', array(
    'type'           => 'theme_mod',
    'default'        => 'contact@marmconsultingservices.com',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

//   control for telephone
$wp_customize->add_control('email_setting', array(
    'label'   => 'Email Address',
     'section' => 'header_settings_section',
    'type'    => 'text',
   ));

//adding setting for telephone
$wp_customize->add_setting('copyright_setting', array(
    'type'           => 'theme_mod',
    'default'        => 'https://www.geebeewebsolutions.com',
    'sanitize_callback' => 'esc_url_raw'
    ));

//   control for telephone
$wp_customize->add_control('copyright_setting', array(
    'label'   => 'Copyright Link',
     'section' => 'header_settings_section',
    'type'    => 'url',
   ));
  
  }