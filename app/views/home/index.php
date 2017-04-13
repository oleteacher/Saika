<div id="container">
<div id="logo">
    <img src="<?=$this->uri('assets/img/saika-logo.png')?>" alt="Saika Logo">
</div>
    <h1>Welcome to Saika!</h1>

    <div id="body">
        <p>Howday Watson! This page is being dynamically generated by <strong>Saika</strong>.
        </p>

        <p>If you would like to edit this page you'll find it located at:</p>
        <code>app/views/home/index.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>app/controllers/IndexController.php</code>
        <p>
            Because, IndexController is defined as the default controller in
            <code>app/config/Saika.config.php</code>
        </p>
    </div>

    <p class="footer"><?php echo  (ENVIRONMENT === 'development') ?  'Saika Version <strong>' . SAIKA_VERSION . '</strong>' : '' ?></p>
</div>

