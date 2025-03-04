<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>My awsome theme</title>
    <?php wp_head(); ?>
</head>

<?php 
if(is_front_page()):
    $awsome_classes = array('ds-class', 'my-ds-class');
else:
    $awsome_classes = array('no-ds-class ' ;)
endif;
?>

<body> <?php body_class($awsome_classes); ?>

<?php wp_nav_menu(array('theme_location' => 'primary' )) ?>
    
</body>
</html>