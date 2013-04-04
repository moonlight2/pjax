<?php if (!isset($_SERVER['HTTP_X_PJAX'])) { ?>
    <script src="jquery-1.8.0.js"></script>
    <script src="jquery.pjax.js"></script>
    <style>
        .container {
            padding: 20px;
            background: #dadada;
        }
        #main {
            padding: 20px;
            background: green;
        }
    </style>
    <div class="container" id="pjax-container">
        <a href="/quer/explore.php" data-pjax='#main'>next page</a>.
        <a href="/quer" data-pjax='#main'>index page</a>.
    </div>
    <div id="main">
        <h2>First page</h2>
        <p>First page content</p>
    </div>
    <script>
        $.hash = '#!/';
        $.siteurl = 'http://localhost/quer';
        $.container = '#pjaxcontainer';
        $('a[data-pjax]').pjax();
    </script>

<?php } else { ?>
    <h2>First page</h2>
    <p>First page content</p>
<?php } ?>

