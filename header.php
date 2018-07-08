<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
    <script>
        window.sr = ScrollReveal({
            easing: 'ease',
            duration: 750
        });
    </script>
    <style>
        /* Ensure elements load hidden before ScrollReveal runs */
        .main-content { visibility: hidden; }
    </style>
</head>
