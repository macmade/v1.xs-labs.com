<?php
if( isset( $_GET[ 'download_file' ] ) )
{
    $download = __ROOTDIR__
              . DIRECTORY_SEPARATOR
              . 'downloads'
              . DIRECTORY_SEPARATOR
              . $_GET[ 'download_file' ];

    if( file_exists( $download ) )
    {
        header( 'Pragma: public' );
        header( 'Content-type: ' );
        header(' Expires: 0' );
        header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
        header( 'Content-Type: application/octet-stream' );
        header( 'Content-Disposition: attachment; filename="' .  basename( $download ) . '"' );
        header( 'Content-Transfer-Encoding: binary' );
        header( 'Content-Length: '. filesize( $download ) );
        readfile( $download );
        exit();
    }
}
?>
<?php print'<?xml version="1.0" encoding="utf-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <!--

    ##################################################
    #                                                #
    #       Blood Sweat & Code (& Rock'N'Roll)       #
    #      Thanx for looking at the source code      #
    #                                                #
    #                 XS-Labs © 2013                 #
    #                                                #
    ##################################################

    -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php print XS_Menu::getInstance()->getRootLine(); ?></title>
    <link rel="schema.dc" href="http://purl.org/metadata/dublin_core_elements" />
    <link rel="stylesheet" href="/css/styles.php" type="text/css" media="all" charset="utf-8" />
    <meta http-equiv="content-language" content="<?php print XS_Menu::getInstance()->getLanguage(); ?>" />
    <meta name="DC.Language" scheme="NISOZ39.50" content="<?php print XS_Menu::getInstance()->getLanguage(); ?>" />
    <meta name="author" content="XS-Labs" />
    <meta name="DC.Creator" content="XS-Labs" />
    <meta name="copyright" content="XS-Labs &copy; 2013 - All rights reseverd - All wrongs reserved" />
    <meta name="DC.Rights" content="XS-Labs &copy; 2013 - All rights reseverd - All wrongs reserved" />
    <meta name="description" content="<?php print XS_Menu::getInstance()->getDescription(); ?>" />
    <meta name="DC.Description" content="<?php print XS_Menu::getInstance()->getDescription(); ?>" />
    <meta name="keywords" content="<?php print XS_Menu::getInstance()->getKeywords(); ?>" />
    <meta name="DC.Subject" content="<?php print XS_Menu::getInstance()->getKeywords(); ?>" />
    <meta name="rating" content="General" />
    <meta name="robots" content="all" />
    <meta name="generator" content="BBEdit 10.5" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="/js/shadowbox.js" type="text/javascript"></script>
    <script type="text/javascript">
        // <![CDATA[
        $( document ).ready
        (
            function()
            {
                Shadowbox.init
                (
                    {
                        overlayOpacity: 0.9
                    }
                );
            }
        );
        // ]]>
    </script>
    <?php if( $_SERVER[ 'SERVER_NAME' ] !== 'xs-labs.localhost' ): ?>
    <script type="text/javascript">
        // <![CDATA[
        
        (
            function( i, s, o, g, r, a, m )
            {
                i[ 'GoogleAnalyticsObject' ] = r;
                i[ r ]                       = i[ r ] || function()
                {
                    ( i[ r ].q = i[ r ].q || [] ).push( arguments )
                },
                i[ r ].l = 1 * new Date();
                a        = s.createElement( o ),
                m        = s.getElementsByTagName( o )[ 0 ];
                a.async  = 1;
                a.src    = g;
            
                m.parentNode.insertBefore( a, m )
            }
        )
        (
            window,
            document,
            'script',
            '//www.google-analytics.com/analytics.js',
            'ga'
        );
        
        ga( 'create', 'UA-51035898-1', 'xs-labs.com' );
        ga( 'require', 'displayfeatures' );
        ga( 'send', 'pageview' );
        
        // ]]>
    </script>
    <?php endif; ?>
</head>
<body>
    <div id="xs-site">
        <div id="xs-page">
            <div id="xs-menu-bar">
                <ul>
                    <li>
                        <div class="xs-menu-item-first">
                            <a href="<?php print XS_Menu::getInstance()->getHomePageURL(); ?>"><img src="/css/image/xs-menu-bar-item-logo.png" alt="XS-Labs" width="100" height="40" /></a>
                        </div>
                    </li>
                    <?php
                        $MENU = XS_Menu::getInstance()->getMenuLevel( 1 );
                    
                        foreach( $MENU as $ITEM )
                        {
                            print $ITEM . chr( 10 );
                        }
                    
                        unset( $MENU );
                    ?>
                    <li>
                        <div class="xs-menu-item-last">
                            <a href="http://www.linkedin.com/in/macmade/"><img src="/css/image/xs-menu-bar-item-linkedin.png" alt="LinkedIn" width="30" height="30" /></a>
                            <a href="https://twitter.com/macmade"><img src="/css/image/xs-menu-bar-item-twitter.png" alt="Twitter" width="30" height="30" /></a>
                            <a href="http://stackoverflow.com/users/182676/macmade"><img src="/css/image/xs-menu-bar-item-stackoverflow.png" alt="StackOverflow" width="30" height="30" /></a>
                            <a href="https://github.com/macmade"><img src="/css/image/xs-menu-bar-item-github.png" alt="GitHub" width="30" height="30" /></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="xs-highlight">
                    <?php print XS_Menu::getInstance()->getPageImage( 1000, 200 ) . chr( 10 ); ?>
            </div>
            <div id="xs-sub-nav">
                <div class="left">
                    <?php print XS_Menu::getInstance()->getPageTitleHeader() . chr( 10 ); ?>
                </div>
                <div class="right">
                
                    <?php print XS_Menu::getInstance()->getMenuLevel( 3 ) . chr( 10 ); ?>
                </div>
            </div>
            <div id="xs-content">
                <div class="xs-content-frame">
                    <div class="xs-content-frame-top">&nbsp;</div>
                    <div class="xs-content-frame-middle">
