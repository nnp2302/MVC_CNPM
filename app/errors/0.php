<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Lỗi hành động</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="404-Page Not Found">
    <meta name="author" content="ONI">
    <meta name="description" content="Dự án gara xe nhóm 3">
    <meta name="keywords" content="gara xe,hcm,gara xe hcm" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="<?php echo _WEB_ROOT; ?>/app/public/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="<?php echo _WEB_ROOT; ?>/app/public/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="<?php echo _WEB_ROOT; ?>/app/public/assets/css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    <main>
        <div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-icon-error swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
                <ul class="swal2-progress-steps" style="display: none;"></ul>
                <div class="swal2-icon swal2-error swal2-icon-show" style="display: flex;"><span class="swal2-x-mark">
                        <span class="swal2-x-mark-line-left"></span>
                        <span class="swal2-x-mark-line-right"></span>
                    </span>
                </div><img class="swal2-image" style="display: none;">
                <h2 class="swal2-title" id="swal2-title" style="display: block;">Lỗi hành động</h2>
                <div class="swal2-html-container" style="display: block;"><?php if(!empty($message)) echo $message; ?></div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;">
                <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select>
                <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea>
                <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
                <div class="swal2-actions">
                    <div class="swal2-loader"></div><a href="<?php echo _WEB_ROOT ?>/dang-ki"><button type="button" class="swal2-confirm btn btn-primary" aria-label="" style="display: inline-block;">OK</button><button type="button" class="swal2-deny" aria-label="" style="display: none;">No</button><button type="button" class="swal2-cancel btn btn-gray" aria-label="" style="display: none;">Cancel</button></a>
                </div>
                <div class="swal2-footer" style="display: flex;"><a href="<?php echo _WEB_ROOT ?>/dang-ki">Quay về trang đăng kí</a></div>
                <div class="swal2-timer-progress-bar-container">
                    <div class="swal2-timer-progress-bar" style="display: none;"></div>
                </div>
            </div>
        </div>
    </main>
    <!--#region Scripts-->

    <!-- Core -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/nouislider/dist/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/assets/js/volt.js"></script>

    <!--#endregion-->
</body>

</html>