<?php
if (isset($_POST['action'])) {
    if ($_POST['action'] === 'accept_cookies') {
        setcookie('cookies_accepted', 'true', time() + (1 * 60 * 60));
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } elseif ($_POST['action'] === 'reject_cookies') {
        setcookie('cookies_accepted', 'true', time() + (30 * 24 * 60 * 60));
        if (isset($_COOKIE['cookies_accepted'])) {
            setcookie('cookies_accepted', '', time() - 3600);
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
}
$showPopup = !isset($_COOKIE['cookies_accepted']);
?>
 <!--==================-->
<!--<=MODULE=>-->
<?php require 'component/module/copywithsource.php'; ?>
<!--<=END MODULE=>-->
<!--==================-->
<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
<?php include "component/meta/allmeta.php"; ?>
<?php include "component/title/ReactZIP Production.php"; ?>
<?php include "component/favicon/logo.php"; ?>
<?php include "component/addons/bootstrap4.php"; ?>
<?php include "component/addons/jquery3.php"; ?>

</head>
<body>
<!--==================-->
<!--<=MODULE=>-->
<?php include "component/module/cookies.php"; ?>
<?php include "component/module/antirightclick.php"; ?>
<!--<=END MODULE=>-->
 <!--==================-->
<!--<=NAVBAR=>-->
 <?php include "component/navbar module/navbar4.6.php"; ?>
<!--<=END NAVBAR=>-->
  <!--==================-->
<!--<==MARQUEE=>-->
<?php include "component/marquee/officialtext.php"; ?>
<!--<==END MARQUEE=>-->
<!--==================-->
<!--<=BANNER=>-->
<?php include "component/banner/bannerv1.php"; ?>


<!--==================-->
<!--<=FOOTER=>-->
<?php require 'component/footer/footerv1.php'; ?>
<!--<=END FOOTER=>-->
<!--==================-->
</body>
</html>
<?php
$html_output = ob_get_clean();
$minified_output = preg_replace('/\s+/', ' ', $html_output);
echo $minified_output;
?>