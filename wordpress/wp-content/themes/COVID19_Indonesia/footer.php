</div>
    <footer id="footer">
        <div class="container">
<div class="row">

    <div id="copyright">
        <p>Copyright &copy; <?= date('Y') ?> - All rights reserved</p>
    </div>
    <nav class="social-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>
    </nav>
</div>
        </div>
    </footer>
</div>

<div class="side">
    <button class="arrow">
        <a href="#main"> KE ATAS </a>
    </button>
</div>
<?php wp_footer(); ?>
<script>
    var sb = document.getElementById('side-button');
    var pr = document.getElementById('primary');

    sb.addEventListener('click', function() {
        if(pr.style.display == "none") {
        pr.style.display = "block";
        } else {
        pr.style.display = "none";
        }
    })
</script>
</body>
</html>