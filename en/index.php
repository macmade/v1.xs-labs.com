<div style="padding-top: 20px; padding-bottom: 20px;" class="center">
    <h2 class="center">Welcome to XS-Labs</h2>
    <p>
        XS-Labs is the new home of the XEOS Operating System and related projects.<br />
        Please take a look at the <?php print XS_Menu::getInstance()->getPageLink( '/projects', 'projects page' ); ?> to see a list of all the open projects.
    </p>
</div>
<h2 class="clearer">Featured projects</h2>
<div class="project-box-group">
    <div class="project-box-left">
        <h3 class="project-icons-monitor-wallpaper">
            <?php print XS_Menu::getInstance()->getPageLink( '/projects/xeos' ); ?>
        </h3>
        <p>
            <a href="<?php print XS_Menu::getInstance()->getPageUrl( '/projects/xeos' ); ?>"><img src="/uploads/image/xeos/icon-small.png" alt="XEOS" width="100" height="100" class="img-right" /></a>
            XEOS is an experimental 32/64 bits Operating System for x86 platforms, written from scratch in Assembly and C.<br />
            It includes a C99 Standard Library, and aims at POSIX/SUS2 compatibility.<br />
            Its main purpose is educationnal, and to provide people interested in OS development with a clean code base.<br />
            While available only for x86, it may evolve to support other platforms.<br /><br />
            <?php print XS_Menu::getInstance()->getPageLink( '/projects/xeos', 'Learn more...' ); ?>
        </p>
    </div>
    <div class="project-box-right">
        <h3 class="project-icons-design-blueprint">
            <?php print XS_Menu::getInstance()->getPageLink( '/projects/codeine' ); ?>
        </h3>
        <p>
            <a href="<?php print XS_Menu::getInstance()->getPageUrl( '/projects/codeine' ); ?>"><img src="/uploads/image/codeine/icon-small.png" alt="Codeine" width="100" height="100" class="img-right" /></a>
            Codeine is a new code editor for Mac, allowing editing, building, running and debugging C, C++ and Objective-C code.<br />
            While not an IDE (yet), Codeine aims to evolve to support complex application projects.<br />
            Codeine uses the latest technologies in source code compilation to provide users with the best environment to build and run software on the Mac platform.<br /><br />
            <?php print XS_Menu::getInstance()->getPageLink( '/projects/codeine', 'Learn more...' ); ?>
        </p>
    </div>
</div>
