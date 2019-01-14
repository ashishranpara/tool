<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
<meta charset="UTF-8" >
<title>encodeURI</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet" >
<style>
    body {
        background: #EEE;
        font-size: 24px;
        padding: 12px;
    }

    h1 {
        margin: 18px 0;
    }

    h2 {
        margin: 18px 0;
    }

    p {
        margin: 18px 0;
    }

    input[type=text] {
        width: 85%;
    }
</style>
</head>
<body>
<h1>encodeURI</h1>
<h2>Input:</h2>
<p><input id="input" type="text" onclick="this.select();" /></p>
<p>
    <select id="function">
<?php
    $selected = isset($_GET['s']) ? $_GET['s'] : null;

    foreach (array(
            'encodeURI',
            'encodeURIComponent',
            'escape',
            'decodeURI',
            'decodeURIComponent',
            'unescape'
        ) as $function) {
?>
        <option value="<?php echo $function ?>" <?php if ($function === $selected) { echo 'selected="selected"'; } ?> ><?php echo $function ?></option>
<?php
    }
?>
    </select>
</p>
<p><input id="button" type="button" value="Go!"  /> </p>
<h2>Output: </h2>
<p><input id="output" type="text" onclick="this.select();" /></p>
<script>
    (function() {
        var input = document.getElementById('input'),
            output = document.getElementById('output'),
            select = document.getElementById('function');
            
            document.getElementById('button').onclick = function() {
                output.value = window[select.value](input.value);
            }
    })();
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- encodeURI -->
<ins class="ad adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="9481324399"
     data-ad-format="auto"></ins>
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
