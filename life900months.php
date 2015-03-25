<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
<meta charset="UTF-8" >
<title>Life is only 900 months</title>
<link rel="apple-touch-icon" href="life900months.png" >
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" >
<style>
    body {
        text-align: center;
    }

    #container {
        display: inline-block;
        text-align: left;
    }

    #container > header {
        line-height: 1.4;
        margin: 12px 18px;
    }

    #container > header > h1 {
        display: inline;
    }

    #container > header > p {
        display: inline;
        margin-left: 6px;
        vertical-align: -2px;
    }

    #container > header > p > a:focus {
        outline: 0;
    }

    #grid {
        line-height: 0;
    }

    #grid > div {
        text-align: center;
        white-space: nowrap;
    }

    #grid > div > div {
        display: inline-block;
        margin: 1px;
    }

    .ad {
        margin: 12px 24px;
    }

    .modal {
        text-align: left;
    }

    .modal > .modal-dialog > .modal-content {
        padding: 12px 24px;
        position: relative;
    }

    .modal > .modal-dialog > .modal-content > button {
        background: #000;
        border-radius: 50%;
        border: 1px solid #AEAEAE;
        display: block;
        height: 36px;
        padding: 0;
        position: absolute;
        right: -8px;
        top: -6px;
        width: 36px;
    }

    .modal > .modal-dialog > .modal-content > button:hover {
        right: -7px;
        top: -5px;
    }

    .modal > .modal-dialog > .modal-content > button:focus {
        outline: 0;
    }

    .modal > .modal-dialog > .modal-content > button > span {
        color: #FFF;
        font-size: 36px;
        left: 6px;
        line-height: 36px;
        position: absolute;
        top: -4px;
    }

    .modal > .modal-dialog > .modal-content > h2 {
        font-size: 18px;
        margin: 4px 0 12px;
        padding-left: 42px;
        position: relative;
    }

    .modal > .modal-dialog > .modal-content > h2 > span {
        left: 0;
        position: absolute;
        top: 4px;
    }

    .modal > .modal-dialog > .modal-content > ul {
        margin: 12px 0;
        padding: 0;
    }

    .modal > .modal-dialog > .modal-content > ul > li {
        list-style: none;
        margin: 12px 0;
        position: relative;
    }

    .modal > .modal-dialog > .modal-content > ul > li > span {
        display: block;
        height: 32px;
        left: 0;
        position: absolute;
        top: 0;
        width: 32px;
    }

    .modal > .modal-dialog > .modal-content > ul > li > input {
        height: 32px;
        margin-left: 40px;
        width: 200px;
    }

    .circle {
        background: #AAA;
        border-radius: 50%;
        box-shadow: 1px 1px 2px #666;
    }

    .circle.red {
        background: red;
    }

    .circle.orange {
        background: orange;
    }

    .circle.yellow {
        background: yellow;
    }

    .circle.green {
        background: green;
    }

    .circle.blue {
        background: blue;
    }

    .circle.indigo {
        background: indigo;
    }

    .circle.purple {
        background: purple;
    }

    .icon-birthday {
        background: pink center center no-repeat url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABk0lEQVR42tXUzStEURzG8TNeIozsSCiRt/G2kwWlFFsrpGTLX0ASKWtbGwsvC7G0sPBWTCwsJGSB5LVkIWzUZPie7k9zOm66070WTn3qzjn3nmfOa0glV3pxh12vH4SS6DwLR8hBDZ6DDpjACC6xgvGgA/axhg90oDXogFmsow4xGVGgAWHpPBNbXj/yGpCGiHIWuBHd2MNwEAGF2ESlvP8p9f1YDCJgEmNW3RPyjTBfAV2YR7YxgmuUevjW8xocouFfB0xjwPi9qpxFTjogHWVI9RhsF33K9VUScwtowZJytqWf8qCccxK1A25QrBJbT7fFcYEKqTfPgS7nKJd6s01f6SV2wJzMqxmgL7dB5VzTuVYnr6jHDDqttmX0mAFFKJDpaZK1OFPOddCHBbSrxM65woa06WltRrXM/QFu8ahH8h0QkX8ZlY7j0lkbMvCCHRm6kqnUa5aHd2xLaAqqpE1v61Mz4NgaptuzvQa/vV9rB5z42Tou5UfAn41Az3lYFjjIgHu86YchjCr/B8wu+sBNfQFUjWxaRl+nUgAAAABJRU5ErkJggg==');
        border-radius: 16px;
        box-shadow: 1px 1px 2px #666;
        display: inline-block;
        height: 32px;
        overflow: hidden;
        padding-left: 32px;
        width: 0;
    }
</style>
</head>
<body>
<div id="container" >
    <header>
        <h1>Life is only 900 months</h1>
        <p><a class="icon-birthday" href="#" data-toggle="modal" data-target=".modal" ></a></p>
    </header>
    <div id="grid" ></div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <button type="button" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true" >&times;</span></button>
            <h2><span class="icon-birthday" ></span>Please enter your and your family's birthdays</h2>
            <ul>
                <li>
                    <span class="circle red" ></span>
                    <input type="date">
                </li>
                <li>
                    <span class="circle orange" ></span>
                    <input type="date">
                </li>
                <li>
                    <span class="circle yellow" ></span>
                    <input type="date">
                </li>
                <li>
                    <span class="circle green" ></span>
                    <input type="date">
                </li>
                <li>
                    <span class="circle blue" ></span>
                    <input type="date">
                </li>
                <li>
                    <span class="circle indigo" ></span>
                    <input type="date">
                </li>
                <li>
                    <span class="circle purple" ></span>
                    <input type="date">
                </li>
            </ul>
        </div>
    </div>
</div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="ad adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="5381140394"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--[if lt IE 9]>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<!--[endif]-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
<script>
    (function() {
        var $window = $(window),
            $container = $('#container'),
            $grid = $('#grid'),
            $circles = (function() {
                    var tokens = [];

                    for (var i = 0; i < 30; ++i) {
                        tokens.push('<div>');

                        for (var j = 0; j < 30; ++j) {
                            tokens.push('<div class="circle" ></div>');
                        }

                        tokens.push('</div>');
                    }

                    return $grid
                        .html(tokens.join(''))
                        .find('.circle');
                })(),
            size = function () {
                    var size = Math.min($window.height() - $grid[0].offsetTop - 12, $window.width() - 24);

                    $container.width(size);

                    size = (size / 30 - 2) ^ 0;

                    $circles
                        .width(size)
                        .height(size);
                };

        size();

        var mobileCheck = function () {
            var check = false;

            (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);

            return check;
        }

        if (mobileCheck() === true) {
            $window.on('orientationchange', size);
        }
        else {
            $window.resize(size);
        }


        var $modal = $('.modal'),
            $dates = $modal.find('input[type=date]'),
            draw = function(birthdays) {
                    $circles
                        .removeClass('red')
                        .removeClass('orange')
                        .removeClass('yellow')
                        .removeClass('green')
                        .removeClass('blue')
                        .removeClass('indigo')
                        .removeClass('purple');


                    var map = (function () {
                            var arr = [];

                            for (var color in birthdays) {
                                var d = birthdays[color];

                                if (d === '') {
                                    continue;
                                }

                                arr.push([color, new Date(d)]);
                            }

                            arr.sort(function (a, b) {
                                return b[1].getTime() - a[1].getTime();
                            });


                            var n = arr.length,
                                map = {};

                            for (var i = 0; i < n; ++i) {
                                var item = arr[i];

                                map[item[0]] = item[1];
                            }

                            return map;
                        })();


                    var d = new Date(),
                        year = d.getFullYear(),
                        month = d.getMonth(),
                        n = 0;

                    for (var color in map) {
                        var d2 = map[color],
                            m = (year - d2.getFullYear()) * 12 + month - d2.getMonth();

                        if (m < 0) {
                            continue;
                        }

                        $circles.slice(n, m).addClass(color);
                        n = m;
                    }
                };

        if (typeof(Storage) !== 'undefined' && localStorage.birthdays !== undefined) {
            draw(JSON.parse(localStorage.birthdays));
        }
        else {
            $modal.modal('show');
        }

        $modal.on('hide.bs.modal', function() {
            var birthdays = {},
                colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple'];

            $dates.each(function (index) {
                birthdays[colors[index]] = this.value;
            });

            if (typeof(Storage) !== 'undefined') {
                try {
                    localStorage.birthdays = JSON.stringify(birthdays);
                }
                catch (e) {

                }
            }

            draw(birthdays);
        });

        $modal.on('show.bs.modal', function() {
            if (typeof(Storage) === 'undefined' || localStorage.birthdays === undefined) {
                return;

            }

            var birthdays = JSON.parse(localStorage.birthdays),
                i = 0;

            for (var color in birthdays) {
                $dates.eq(i).val(birthdays[color]); 
                ++i;
            }
        });
    })();
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
