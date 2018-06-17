<head>
    <meta charset="utf-8">
    <title>ntropy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>

    <nav class="navbar navbar-inverse bg-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo site_url();?>">
            <?php bloginfo('name');?>
        </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4));?>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <h1><?php bloginfo('name');?></h1>
    </div>
    <div class="container">
