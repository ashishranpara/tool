<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
<meta charset="UTF-8" >
<title>Convert Simplified Chinese text file to Traditional Chinese</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet" >
<style>
    body {
        background: #EEE;
        font-size: 24px;
        padding: 12px 24px;
    }

    h1 {
        font-size: 32px;
        margin: 0;
    }

    form {
        margin: 18px 0;
    }

    input {
        height: 32px;
        vertical-align: middle;
    }

    input[type=file] {
        font-size: 16px;
        width: 180px;
    }
</style>
</head>
<body>
<h1>Convert Simplified Chinese text file to Traditional Chinese</h1>
<form>
    <input type="file" name="files" multiple="multiple" />
    <select name="charset">
        <option value="UTF-8">UTF-8</option>
        <option value="GBK">GB</option>
    </select>
    <button>Convert</button>
</form>
<script>
    var map = <?php echo file_get_contents('vendor/tongwentang.json') ?>;
</script>
<script>
(function() {
    var form = document.querySelector('form'),
        elements = form.elements,
        input = elements.files,
        select = elements.charset;

    form.addEventListener('submit', function(e) {
        var charset = select.value,
            files = input.files,
            n = files.length;
            
        for(var i = 0; i < n; ++i) {
            (function(file) {
                var name = file.name,
                    index = name.lastIndexOf('.');
                    
                index === -1 ?
                    name += '_zh_TW' :
                    name = name.substr(0, index) + '_zh_TW' + name.substr(index);
            
                var fileReader = new FileReader();
                
                fileReader.onload = function() {
                    var result = this.result;
                    
                    for(var k in map) {
                        result = result.replace(new RegExp(k, 'g'), map[k]);
                    }
                                                                
                    var e = document.createEvent('MouseEvents');
                    
                    e.initEvent('click', true, true);
                    
                    var a = document.createElement('a');

                    a.download = name;
                    a.href = 'data:text/plain;charset=utf-8,' + encodeURI(result);
                    a.target = '_blank';
                    a.dispatchEvent(e);
                };
                
                fileReader.readAsText(file, charset);
            })(files[i]);
        }

        e.preventDefault();
    }, false);
})();
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Simp2Trad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="2613742201"
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
