<script>
var loadJs = function(file) {
    var jsFile = document.createElement('script');
    jsFile.src = 'release/js/' + file + '-minified.js';
    var header = document.getElementsByTagName('head')[0];
    header.parentNode.insertBefore(jsFile, header);
}
document.addEventListener("DOMContentLoaded", function(event) {
    console.log('load script');
    loadJs('script');
});
</script>
</body>
</html>