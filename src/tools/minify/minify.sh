cd ../../public/
java -jar ../tools/minify/yuicompressor-2.4.7.jar --type=css css/main.css > release/css/main-minified.css
java -jar ../tools/minify/yuicompressor-2.4.7.jar --type=css css/main-320.css > release/css/main-320-minified.css
java -jar ../tools/minify/yuicompressor-2.4.7.jar --type=css css/main-640.css > release/css/main-640-minified.css
java -jar ../tools/minify/yuicompressor-2.4.7.jar --type=js js/script.js > release/js/script-minified.js
