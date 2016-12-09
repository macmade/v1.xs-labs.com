<?php

require_once
(
    dirname( __FILE__ )
  . DIRECTORY_SEPARATOR
  . '..'
  . DIRECTORY_SEPARATOR
  . 'classes'
  . DIRECTORY_SEPARATOR
  . 'XS'
  . DIRECTORY_SEPARATOR
  . 'Css'
  . DIRECTORY_SEPARATOR
  . 'Minifier.class.php'
);

$css = new XS_Css_Minifier();

$css->setBaseDirectory( dirname( __FILE__ ) );

$css->import( 'base.css' );
$css->import( 'layout.css' );
$css->import( 'styles.css' );
$css->import( 'resume.css' );
$css->import( 'project-icons.css' );
$css->import( 'shadowbox.css' );

$css->setComment
(
    'Blood Sweat & Code (& Rock\'N\'Roll)'
  . chr( 10 )
  . 'Thanx for looking at the source code'
  . chr( 10 )
  . ''
  . chr( 10 )
  . 'XS-Labs © 2013'
);

$css->output();
