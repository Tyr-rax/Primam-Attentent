<?php get_header();?>
    <div class="container pt-10 e404">
    <h1> O <img src="<?php echo get_template_directory_uri() . '/img/404.png' ?>" height="180"> !</h1><br/>
        <a onclick="goBack()" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Wracaj</a>
        <a href="<?php echo home_url()?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Strona główna</a>
    </div>
    <script>
        function goBack() {
            window.history.back()
        }
    </script>
<?php get_footer();?>