<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Nguyen Duc Hieu's Notes">
<meta name="keywords" content="HTML, HTML5, CSS, JavaScript, PHP, Nguyen Duc Hieu, Hanoi, Vietnam, Singapore">
<meta name="author" content="Nguyen Duc Hieu">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Hello Friend </title>
<script>
var loadCss = function(file, minWidth, maxWidth) {
    console.log('load css ' + file);
    var cssFile = document.createElement('link');
    cssFile.rel = 'stylesheet';
    cssFile.media = '(max-width: ' + maxWidth +'px) and (min-width: ' + minWidth + 'px)';
    cssFile.href = 'release/css/' + file + '-minified.css';
    var header = document.getElementsByTagName('head')[0];
    header.parentNode.insertBefore(cssFile, header);
}

if (window.screen.width >= 640) {
    loadCss('main', 640, window.screen.availWidth);
    document.addEventListener("DOMContentLoaded", function(event) {
        loadCss('main-640', 500, 640);
        loadCss('main-320', 0, 500);
    });
} else if (window.screen.width >= 500) {
    loadCss('main-640', 500, 640);
    document.addEventListener("DOMContentLoaded", function(event) {
        loadCss('main', 640, window.screen.availWidth);
        loadCss('main-320', 0, 500);
    });
} else if (window.screen.width < 500) {
    loadCss('main-320', 0, 500);
    document.addEventListener("DOMContentLoaded", function(event) {
        loadCss('main-640', 500, 640);
        loadCss('main', 640, window.screen.availWidth);
    });
}

</script>
<noscript>
    <link rel="stylesheet" media = "(max-width: 500px)" href="release/css/main-320-minified.css" type="text/css"/>
    <link rel="stylesheet" media = "(max-width: 640px) and (min-width: 500px)" href="release/css/main-640-minified.css" type="text/css"/>
    <link rel="stylesheet" media = "(min-width: 640px)" href="release/css/main-minified.css" type="text/css"/>
</noscript>
<link rel="shortcut icon" href="images/favicon.ico" />
</head>
<style>
    .hide { display: none}
</style>
<body class='hide'>
<script>
    var body = document.getElementsByTagName('body')[0];
    body.className = '';
    console.log('show body');
</script>