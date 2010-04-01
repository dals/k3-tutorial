<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head profile="http://gmpg.org/xfn/11">
        <title><?php echo $title ?></title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
        <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>

    </head>
    <body>
        <div class="container_16">
            <div id="header" class="grid_16">
                <h1><?php echo $title ?></h1>
            </div>
            <div class="clear"></div>

            <div id="navigation" class="grid_16">
                <ul>
                    <li>text</li>
                    <li>text</li>
                    <li>text</li>
                    <li>text</li>
                </ul>
            </div>
            <div class="clear"></div>
            
            <div id="content" class="grid_16">
                <?php echo $content ?>
            </div>
            <div class="clear"></div>

            <div id="footer" class="grid_16">
                <p>&copy;2009 Fuck yall!</p>
            </div>
        </div>
    </body>
</html>