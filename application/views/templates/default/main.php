<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head profile="http://gmpg.org/xfn/11">
        <title><?php echo $title ?></title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>

        <link rel="stylesheet" href="/static/css/form.css" type="text/css" />
        <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
        
    </head>
    <body>
        <div class="container_16">
            <div id="header" class="grid_16">
                <h1><?php echo $title ?></h1>
            </div>
            <div class="clear"></div>

            <div class="grid_16">
                <ul id="navigation_top">
                    <li>
                        <a href="#" class="active">text</a>
                    </li>
                    <li>
                        <a href="#">text</a>
                    </li>
                    <li>
                        <a href="#">text</a>
                    </li>
                    <li>
                        <a href="#">text</a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <?php
            if(!empty ($aSystemMessages)):
            ?>
                <div id="cSystemMessages" class="grid_16">
                    <ul id="cSystemMessagesTop">
                    <?php
                    foreach ($aSystemMessages as $type => $aMesssages):
                        if(!empty($aMesssages)):
                            foreach ($aMesssages as $message):
                    ?>
                        <li class="<?=$type;?>"><?=$message;?></li>
                    <?php
                            endforeach;
                        endif;
                    endforeach;
                    ?>
                    </ul>
                </div>
                <div class="clear"></div>
            <?php
            endif;
            ?>

            <div id="content" class="grid_16">
                <?php
                    echo $content;
                ?>
            </div>
            <div class="clear"></div>

            <div id="footer" class="grid_16">
                <p>&copy;2009 Fuck yall!</p>
            </div>
        </div>
        <script type="text/javascript">
            $(function(){
                if($('#cSystemMessages').length && $('#cSystemMessages').is(':visible')) {
                    $('#cSystemMessages').delay(5000).slideUp('slow');
                }
            })
        </script>
    </body>
</html>