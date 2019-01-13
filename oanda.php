<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" >
<title>Oanda Interest Rate Differential Table</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet" >
<style>
    body {
        margin: 12px;
    }

    .ad {
        margin: 12px 0;
        max-width: 540px;
    }

    h1 {
        margin: 16px 0 12px;
    }

    #compare {
        border-collapse : collapse;
    }
    
    #compare th, #compare td {
        border : 1px solid #AAA;
        padding : 5px 10px;
    }

    #compare th {
        background : #000;
        color : #FFF;
    }
    
    .compare-positive {
        background : #FFC1C1
    }
    
    .compare-negative {
        background : #C1FFC1;
    }

    .compare-action {
        font-weight : bold;
    }

    .compare-buy {
        color : #104E8B;
    }

    .compare-sell {
        color : #006400;
    }

    ul {
        margin-top: -8px;
        padding-left: 20px;
    }

    ul li {
        line-height: 1.7;
    }

    ul li a {
        color: #000;
        text-decoration: none;
    }

    ul li a:hover {
        text-decoration: underline;
    }

    @media only screen and (max-device-width: 736px) {
        body {
            margin: 4px;
        }

        .ad {
            max-width: none;
        }

        h1 {
            margin-top: 12px;
        }
    }

    @media only screen and (max-device-width: 736px) and (orientation: portrait) {
        .compare-borrow, .compare-lend {
            display: none;
        }
    }
</style>
</head>
<body>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Oanda Top -->
<ins class="ad ad-top adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="9032279596"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<h1>Oanda Interest Rate Differential Table</h1>
<table id="compare">
	<tr>
		<th class="compare-action" >Action</th>
		<th class="compare-pair" >Currency Pair</th>
		<th class="compare-diff" >Differential</th>
		<th class="compare-lend" >Lend Rate (%)</th>
		<th class="compare-borrow" >Borrow Rate (%)</th>
	</tr>
</table>
<!--[if lt IE 9]>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--[endif]-->
<script>
<?php
    echo file_get_contents('http://fxtrade.oanda.com/tools/fxcalculators/fxmath.js');
?>
</script>
<script>
    (function() {
        var rates = {};
            
        (function() {
            var n = arrInterestCode.length;
        
            for(var i = 0; i < n; ++i)
                rates[arrInterestCode[i]] = {
                    'lend' : arrInterestLend[i],
                    'borrow' : arrInterestBorrow[i]
                }
        })();
        
        var results = [];
        
        (function() {
            var pairs = ["AUD/CAD","AUD/CHF","AUD/HKD","AUD/JPY","AUD/NZD","AUD/SGD","AUD/USD","CAD/CHF","CAD/HKD","CAD/JPY","CAD/SGD","CHF/HKD","CHF/JPY","CHF/ZAR","EUR/AUD","EUR/CAD","EUR/CHF","EUR/CZK","EUR/DKK","EUR/GBP","EUR/HKD","EUR/HUF","EUR/JPY","EUR/NOK","EUR/NZD","EUR/PLN","EUR/SEK","EUR/SGD","EUR/TRY","EUR/USD","EUR/ZAR","GBP/AUD","GBP/CAD","GBP/CHF","GBP/HKD","GBP/JPY","GBP/NZD","GBP/PLN","GBP/SGD","GBP/USD","GBP/ZAR","HKD/JPY","NZD/CAD","NZD/CHF","NZD/HKD","NZD/JPY","NZD/SGD","NZD/USD","SGD/CHF","SGD/HKD","SGD/JPY","TRY/JPY","USD/CAD","USD/CHF","USD/CNH","USD/CNY","USD/CZK","USD/DKK","USD/HKD","USD/HUF","USD/INR","USD/JPY","USD/MXN","USD/NOK","USD/PLN","USD/SAR","USD/SEK","USD/SGD","USD/THB","USD/TRY","USD/TWD","USD/ZAR","ZAR/JPY","XAG/AUD","XAG/CAD","XAG/CHF","XAG/EUR","XAG/GBP","XAG/HKD","XAG/JPY","XAG/NZD","XAG/SGD","XAG/USD","XAU/AUD","XAU/CAD","XAU/CHF","XAU/EUR","XAU/GBP","XAU/HKD","XAU/JPY","XAU/NZD","XAU/SGD","XAU/USD","XAU/XAG","XPD/USD","XPT/USD","AU200/AUD","BCO/USD","CH20/CHF","CORN/USD","DE10YB/EUR","DE30/EUR","EU50/EUR","FR40/EUR","HK33/HKD","JP225/USD","NAS100/USD","NATGAS/USD","NL25/EUR","SG30/SGD","SOYBN/USD","SPX500/USD","SUGAR/USD","UK100/GBP","UK10YB/GBP","US2000/USD","US30/USD","USB02Y/USD","USB05Y/USD","USB10Y/USD","USB30Y/USD","WHEAT/USD","WTICO/USD","XCU/USD"];

            var n = pairs.length;
            
            for(var i = 0, j = 0; i < n; ++i, j += 2) {
                var pair = pairs[i],
                    codes = pair.split('/'),
                    rate = rates[codes[0]],
                    rate2 = rates[codes[1]],
                    lend = rate.lend,
                    borrow = rate.borrow,
                    lend2 = rate2.lend,
                    borrow2 = rate2.borrow;
            
                results[j] = {
                   action : 'Buy',
                   pair : pair,
                   diff : Math.round((borrow - lend2) * 10000) / 10000,
                   lend : lend2,
                   borrow : borrow
                };
                
                results[j + 1] = {
                   action : 'Sell',
                   pair : pair,
                   diff : Math.round((borrow2 - lend) * 10000) / 10000,
                   lend : lend,
                   borrow : borrow2
                };
            }
            
            results.sort(function(a, b) {
                return b.diff - a.diff;
            });
        })();
        
        var n = results.length,
            sArr = [];
        
        for(var i = 0; i < n; ++i) {
            var result = results[i],
                diff = result.diff,
                lend = result.lend,
                borrow = result.borrow,
                action = result.action;
        
            sArr[sArr.length] = '<tr class="' + (diff < 0 ? 'compare-negative' : 'compare-positive') + '">';
            sArr[sArr.length] = '   <td class="compare-action compare-' + action.toLowerCase() + '" >' + action + '</td>';
            sArr[sArr.length] = '   <td class="compare-pair" >' + result.pair + '</td>';
            sArr[sArr.length] = '   <td class="compare-diff" >' + diff + '</td>';
            sArr[sArr.length] = '   <td class="compare-lend" >' + lend + '</td>';
            sArr[sArr.length] = '   <td class="compare-borrow" >' + borrow + '</td>';
            sArr[sArr.length] = '</tr>';
        }
        
        $('#compare').append(sArr.join('\n'));
    })();
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Oanda Bottom -->
<ins class="ad ad-bottom adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="2427342793"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<ul>
    <li><a href="http://fxtrade.oanda.com/analysis/interest-calculator" target="_blank" >Oanda Currency Interest Rates Calculator</a></li>
    <li><a href="http://www.oanda.sg/why/spreads/recent"target="_blank" >Recent OANDA Spreads</a></li>
</ul>
<script>
(function() {
    if (mobileCheck()) {
        var links = document.getElementsByTagName('a'),
            n = links.length;

        for (var i = 0; i < n; ++i) {
            links[i].target = '_self';
        }
    }

    function mobileCheck() {
        var check = false;

        (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);

        return check;
    }
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
