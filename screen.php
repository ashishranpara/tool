<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
<meta charset="UTF-8" >
<title>Screen Height, Width, Area, &amp; Diagonal Length Calculator</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet" >
<style>
    body {
        background: #EEE;
        font-size: 24px;
        padding: 12px;
    }

    h1 {
        margin: 18px 0;
        font-size: 32px;
    }

    p {
        margin: 4px 0;
        line-height: 1.8;
    }

    #size {
        width: 80px;
    }

    #ratio {
        display: inline-block;
    }

    label {
        margin-right: 4px;
    }
    
    #custom2 {
        width: 120px;
    }

    div > p > span {
        font-weight: bold;
    }
</style>
</head>
<body>
<h1>Screen Height, Width, Area, &amp; Diagonal Length Calculator</h1>
<p>Screen Size: <input type="number" value="15.6" id="size" > inch</p>
<p>Aspect Ratio:
    <span id="ratio">
        <label>
            <input type="radio" name="ratio" id="sixteen" checked>
            16:9
        </label>
        <label>
            <input type="radio" name="ratio" id="four" >
            4:3
        </label>
        <label>
            <input type="radio" name="ratio" id="custom">
            <input value="256:135" id="custom2" >
        </label>
    </span>
</p>
<div>
    <p>Width: <span id="width"></span> inch, <span id="width2"></span> cm</p>
    <p>Height: <span id="height"></span> inch, <span id="height2"></span> cm</p>
    <p>Area: <span id="area"></span> inch<sup>2</sup>, <span id="area2"></span> cm<sup>2</sup></p>
    <p>Diagonal: <span id="diagonal"></span> inch, <span id="diagonal2"></span> cm</p>
</div>
<script>
(function() {
    var inputSize = document.getElementById('size'),
        radioSixteen = document.getElementById('sixteen'),
        radioFour = document.getElementById('four'),
        radioCustom = document.getElementById('custom'),
        inputCustom = document.getElementById('custom2'),
        spanWidth = document.getElementById('width'),
        spanWidth2 = document.getElementById('width2'),
        spanHeight = document.getElementById('height'),
        spanHeight2 = document.getElementById('height2'),
        spanArea = document.getElementById('area'),
        spanArea2 = document.getElementById('area2'),
        spanDiagonal = document.getElementById('diagonal'),
        spanDiagonal2 = document.getElementById('diagonal2');

    var empty = function() {
        spanWidth.innerHTML = '';
        spanWidth2.innerHTML = '';
        spanHeight.innerHTML = '';
        spanHeight2.innerHTML = '';
        spanArea.innerHTML = '';
        spanArea2.innerHTML = '';
        spanDiagonal.innerHTML = '';
        spanDiagonal2.innerHTML = '';
    }

    var update = function() {
        var size = inputSize.value - 0;

        if (isNaN(size) || size <= 0) {
            empty();
            return;
        }

        var a, b;

        if (radioSixteen.checked === true) {
            a = 16;
            b = 9;
        }
        else if (radioFour.checked === true) {
            a = 4;
            b = 3;
        }
        else { // radioCustom === true
            var tokens = inputCustom.value.split(':');

            if (tokens.length < 2) {
                empty();
                return;
            }

            a = tokens[0] - 0;
            b = tokens[0] - 0;

            if (isNaN(a) || isNaN(b) || a <= 0 || b <= 0) {
                empty();
                return;
            }
        }

        var c = Math.sqrt(a * a + b * b);

        var height = size * b / c,
            width = size * a / c,
            area = height * width,
            diagonal = size;

        spanHeight.innerHTML = Math.round(height * 100000) / 100000;
        spanWidth.innerHTML = Math.round(width * 100000) / 100000;
        spanArea.innerHTML = Math.round(area * 100000) / 100000;
        spanDiagonal.innerHTML = Math.round(diagonal * 100000) / 100000;

        spanHeight2.innerHTML = Math.round(height * 2.54 * 100000) / 100000;
        spanWidth2.innerHTML = Math.round(width * 2.54 * 100000) / 100000;
        spanArea2.innerHTML = Math.round(area * 2.54 * 2.54 * 100000) / 100000;
        spanDiagonal2.innerHTML = Math.round(diagonal * 2.54 * 100000) / 100000;
    }

    update();

    inputSize.addEventListener('input', update, false);
    
    radioSixteen.addEventListener('click', update, false);

    radioFour.addEventListener('click', update, false);

    radioCustom.addEventListener('click', function() {
        inputCustom.focus();
    }, false);

    inputCustom.addEventListener('focus', function() {
        radioCustom.checked = true;
        update();
    }, false);

    inputCustom.addEventListener('input', update, false);
})();
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Screen -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="9198497706"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-6851063-2', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
