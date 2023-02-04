<?php
$will_redirect=FALSE;
if (($handle = fopen("target.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // url
        $key=$data[0];
        $url=$data[1];
        if ($_SERVER['REQUEST_URI'] == "/".$key) {
            header("Location: ".$url);
            //$will_redirect=TRUE;
            exit;
        }
    }
}
?>
<?php // if ($will_redirect): ?>
    <!-- <h1>Redirecting...</h1>
    <p>
        Target was found. We will redirect you to the site.<br />
        If not redirect, please access link <a href="<?= $url ?>">here</a>
    </p> -->
<?php // else: ?>
    <h1>Hello, world!</h1>
    <p>
        This domain "<?= $_SERVER['SERVER_NAME'] ?>" has been reserved by us.<br />
        If you has been see the page that you didn't wish, please check url or contact to site admin.
    </p>
<?php // endif ?>