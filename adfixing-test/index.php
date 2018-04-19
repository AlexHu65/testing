<!DOCTYPE html>
<html>
<head>
    <title>Advertisment</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html, charset=UTF-8"/>
    <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
    <style id="glftSspStyleBase">
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            vertical-align: baseline
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block
        }

        body {
            line-height: 1
        }

        ol, ul {
            list-style: none
        }

        blockquote, q {
            quotes: none
        }

        blockquote:before, blockquote:after, q:before, q:after {
            content: none
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        a {
            color: #000;
            text-decoration: none;
            border: 0
        }

        .advertismentLabel {
            bottom: 3px;
            left: 6px;
            font-family: arial, sans-serif;
            color: #fff;
            z-index: 2147483647;
            font-size: 1.5em;
            display: block;
            text-shadow: 1px 1px 5px #000, -1px -1px 5px #000, 1px 1px 5px #000, -1px -1px 5px #000;
            position: absolute
        }

        .glftSspAdCloseAnchor {
            padding: 15px
        }

        .glftSspAdClose {
            width: 2em !important;
            height: 2em !important
        }

        @media only screen and (min-width: 1px) {
            body {
                font-size: 20%
            }
        }

        @media only screen and (min-width: 270px) {
            body {
                font-size: 35%
            }
        }

        @media only screen and (min-width: 320px) {
            body {
                font-size: 38%
            }
        }

        @media only screen and (min-width: 360px) {
            body {
                font-size: 45%
            }
        }

        @media only screen and (min-width: 470px) {
            body {
                font-size: 48%
            }
        }

        @media only screen and (min-width: 470px) and (orientation: portrait) {
            body {
                font-size: 55%
            }
        }

        @media only screen and (min-width: 570px) {
            body {
                font-size: 65%
            }
        }

        @media only screen and (min-width: 650px) {
            body {
                font-size: 68%
            }
        }

        @media only screen and (min-width: 900px) {
            body {
                font-size: 81%
            }
        }

        @media only screen and (min-width: 1000px) {
            body {
                font-size: 84%
            }
        }

        @media only screen and (min-width: 1080px) and (orientation: portrait) {
            body {
                font-size: 98%
            }
        }

        @media only screen and (min-width: 1100px) {
            body {
                font-size: 87%
            }
        }

        @media only screen and (min-width: 1200px) {
            body {
                font-size: 90%
            }
        }

        @media only screen and (min-width: 1500px) {
            body {
                font-size: 105%
            }
        }

        @media only screen and (min-width: 1900px) {
            body {
                font-size: 130%
            }
        }

        @media only screen and (min-width: 2500px) {
            body {
                font-size: 140%
            }
        }

        #glftSspContainer {
            position: absolute;
            overflow: hidden;
            z-index: 1000;

            width: 300px;
            height: 250px;
        }
    </style>


    {[gl_tracking_js]}

    <script type="text/javascript" id="glftSspBase64">
        var Base64 = {
            _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
            encode: function (c) {
                var a = "";
                var k, h, f, j, g, e, d;
                var b = 0;
                c = Base64._utf8_encode(c);
                while (b < c.length) {
                    k = c.charCodeAt(b++);
                    h = c.charCodeAt(b++);
                    f = c.charCodeAt(b++);
                    j = k >> 2;
                    g = ((k & 3) << 4) | (h >> 4);
                    e = ((h & 15) << 2) | (f >> 6);
                    d = f & 63;
                    if (isNaN(h)) {
                        e = d = 64
                    } else {
                        if (isNaN(f)) {
                            d = 64
                        }
                    }
                    a = a + this._keyStr.charAt(j) + this._keyStr.charAt(g) + this._keyStr.charAt(e) + this._keyStr.charAt(d)
                }
                return a
            },
            decode: function (c) {
                var a = "";
                var k, h, f;
                var j, g, e, d;
                var b = 0;
                c = c.replace(/[^A-Za-z0-9\+\/\=]/g, "");
                while (b < c.length) {
                    j = this._keyStr.indexOf(c.charAt(b++));
                    g = this._keyStr.indexOf(c.charAt(b++));
                    e = this._keyStr.indexOf(c.charAt(b++));
                    d = this._keyStr.indexOf(c.charAt(b++));
                    k = (j << 2) | (g >> 4);
                    h = ((g & 15) << 4) | (e >> 2);
                    f = ((e & 3) << 6) | d;
                    a = a + String.fromCharCode(k);
                    if (e != 64) {
                        a = a + String.fromCharCode(h)
                    }
                    if (d != 64) {
                        a = a + String.fromCharCode(f)
                    }
                }
                a = Base64._utf8_decode(a);
                return a
            },
            _utf8_encode: function (b) {
                b = b.replace(/\r\n/g, "\n");
                var a = "";
                for (var e = 0; e < b.length; e++) {
                    var d = b.charCodeAt(e);
                    if (d < 128) {
                        a += String.fromCharCode(d)
                    } else {
                        if ((d > 127) && (d < 2048)) {
                            a += String.fromCharCode((d >> 6) | 192);
                            a += String.fromCharCode((d & 63) | 128)
                        } else {
                            a += String.fromCharCode((d >> 12) | 224);
                            a += String.fromCharCode(((d >> 6) & 63) | 128);
                            a += String.fromCharCode((d & 63) | 128)
                        }
                    }
                }
                return a
            },
            _utf8_decode: function (a) {
                var b = "";
                var d = 0;
                var e = c1 = c2 = 0;
                while (d < a.length) {
                    e = a.charCodeAt(d);
                    if (e < 128) {
                        b += String.fromCharCode(e);
                        d++
                    } else {
                        if ((e > 191) && (e < 224)) {
                            c2 = a.charCodeAt(d + 1);
                            b += String.fromCharCode(((e & 31) << 6) | (c2 & 63));
                            d += 2
                        } else {
                            c2 = a.charCodeAt(d + 1);
                            c3 = a.charCodeAt(d + 2);
                            b += String.fromCharCode(((e & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                            d += 3
                        }
                    }
                }
                return b
            }
        };
    </script>

    <script type="text/javascript" id="glftSspJsBase">
        // == Externally received param (glads) ==
        var client_id = '{[client_id]}';

        // OS
        var _os = 'ios';

        var glftSspIHttp = {
            iReq: function () {
                if (window.XMLHttpRequest) {
                    return new XMLHttpRequest()
                } else {
                    if (window.ActiveXObject) {
                        return new ActiveXObject("Microsoft.XMLHTTP")
                    }
                }
                return false
            }, async: true, call: function (a) {
                this.request = this.iReq();
                if (this.request) {
                    this.request.open("GET", a, this.async);
                    this.request.send()
                }
            }, post: function (a, b) {
                this.request = this.iReq();
                if (this.request) {
                    this.request.open("POST", a, this.async);
                    this.request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    this.request.send(b)
                }
            }
        };

        var glftSspTracker = {
            track: function (trackingUrl) {
                try {
                    glftSspIHttp.call(trackingUrl);
                    glftSspIHttp.request.timeout = 4000;

                    if (iHttp.request.readyState == 4) {
                        // do something?
                    }
                } catch (e) {
                }
            }
        };

        var glftSspRouter = {
            redirect: function (destination) {
                if (_os == 'win' || _os == 'winp' || _os == 'WINDOWS') {
                    window.external.notify(destination);
                }
                else {
                    window.location = destination;
                }
            }
        };

        // Prefixes and IDs
        var locationId = typeof glLocationId != 'undefined' ? glLocationId : '{[location_id]}';
        var statsURL = typeof glStatsUrl != 'undefined' ? glStatsUrl : '{[statsUrl]}';

        var glftImpressionHandler = {
            handle: function () {
                // Glads impression tracking url
                var gladsImpressionTrackingUrl = statsURL + '{[impTrackUrl]}';

                // Tracking Impression
                glftSspTracker.track(gladsImpressionTrackingUrl);


                // GLOT tracking
                var gladsGlotTrackingImpressionUrl = '{[gladsGlotTrackingImpressionUrl]}';
                gladsGlotTrackingImpressionUrl = gladsGlotTrackingImpressionUrl.replace('%%location_id%%', locationId);

                if (gladsGlotTrackingImpressionUrl.indexOf('track:') > -1) {
                    glftSspRouter.redirect(gladsGlotTrackingImpressionUrl);
                }
            }
        }
    </script>
</head>
<body>
<span id="advertismentLabel" class="advertismentLabel">
        {[i18n_advertisment]}
</span>
<iframe id="glftSspContainer" src="about:blank" scrolling="no"></iframe>

<script type="text/javascript">
    // Interrupt Object used by interrupt partial
    var glftSspAdInterruptAdapter = function () {
        // var _this = this;

        this.pause = function () {
            return true;
        };

        this.resume = function () {
            return true;
        };

        this.close = function () {
            glftSspRouter.redirect('exit:');
        };

        this.onBackPressed = function () {
            glftSspRouter.redirect('exit:');
        }
    };

    var glftSspAdInterruptAdapterObject = new glftSspAdInterruptAdapter();
</script>

<script type="text/javascript">
    var ControllerEvent = {
        UNDEFINED: 0,
        LeftTrigger: 1,
        RightTrigger: 2,
        LeftStickX: 3,
        LeftStickY: 4,
        RightStickX: 5,
        RightStickY: 6,
        DpadEventUp: 7,
        DpadEventDown: 8,
        DpadEventLeft: 9,
        DpadEventRight: 10,
        LeftBumper: 11,
        RightBumper: 12,
        ButtonY: 13,
        ButtonA: 14,
        ButtonX: 15,
        ButtonB: 16,
        ButtonStart: 17,
        ButtonSelect: 18,
        ButtonBack: 19,
        LeftStickButton: 20,
        RightStickButton: 21
    };
    var onPause = function () {
        return glftSspAdInterruptAdapterObject.pause()
    };
    var onResume = function () {
    };
    var onControllerClose = function () {
        glftSspAdInterruptAdapterObject.close()
    };
    var onControllerEvent = function (a, b) {
        if (a == ControllerEvent.ButtonB && b == 0) {
            onControllerClose()
        }
    };
    var onResumeActive = function () {
        onResume()
    };
    var onPauseActive = function () {
        onPause()
    };
    var onBackPressed = function () {
        glftSspAdInterruptAdapterObject.onBackPressed()
    };
    var isBackPressed = function () {
        glftSspAdInterruptAdapterObject.onBackPressed()
    };
</script>

<script type="text/javascript">

    var glftSspProcessor = {
        addClose: function (closeImgUrl) {
            var closeAnchor = document.createElement('a');
            closeAnchor.href = 'exit:';
            closeAnchor.id = 'glftSspAdCloseAnchor';
            closeAnchor.className = 'glftSspAdCloseAnchor';
            closeAnchor.style.position = 'absolute';
            closeAnchor.style.right = 0;
            closeAnchor.style.top = 0;
            closeAnchor.style.zIndex = 2147483647;

            if (_os == 'win' || _os == 'winp' || _os == 'WINDOWS') {
                closeAnchor.addEventListener('click', function () {
                    glftSspRouter.redirect('exit:');
                });
            }

            var closeImage = document.createElement('img');
            closeImage.src = closeImgUrl;
            closeImage.id = 'glftSspAdClose';
            closeImage.className = 'glftSspAdClose';
            closeImage.style.position = 'relative';
            closeImage.style.cursor = 'pointer';
            closeImage.style.right = 0;
            closeImage.style.top = 0;

            closeAnchor.appendChild(closeImage);

            document.body.appendChild(closeAnchor);
        }
    };

    var glftSspAdjuster = {
        // Core IMG Object
        IMG_ELEM: 0,

        // Core IMG details - will be adapted on the fly based on detected ratio
        IMG_HEIGHT: 0,
        IMG_WIDTH: 0,

        // Resized width/height holders
        IMG_RESIZED_WIDTH: 0,
        IMG_RESIZED_HEIGHT: 0,

        // stored viewport dimensions
        STORED_VIEWPORT_HEIGHT: 0,
        STORED_VIEWPORT_WIDTH: 0,

        // Viewport dimensions getter
        getViewportDimensions: function () {
            var viewportWidth;
            var viewportHeight;

            // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
            if (typeof window.innerWidth != 'undefined') {
                viewportWidth = window.innerWidth;
                viewportHeight = window.innerHeight;
            }
            // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
            else if (typeof document.documentElement != 'undefined'
                && typeof document.documentElement.clientWidth !=
                'undefined' && document.documentElement.clientWidth != 0) {
                viewportWidth = document.documentElement.clientWidth;
                viewportHeight = document.documentElement.clientHeight;
            }
            // older versions of IE
            else {
                viewportWidth = document.getElementsByTagName('body')[0].clientWidth;
                viewportHeight = document.getElementsByTagName('body')[0].clientHeight;
            }

            return {
                width: viewportWidth,
                height: viewportHeight
            };
        },

        alignSspContainer: function (container) {
            if (container == null || typeof container == 'undefined') {
                return false;
            }

            if (typeof container.offsetHeight == 'undefined' || container.offsetHeight == null ||
                typeof container.offsetWidth == 'undefined' || container.offsetWidth == null
            ) {
                return false;
            }

            viewportDimensions = this.getViewportDimensions();

            var currentViewportHeight = viewportDimensions['height'];
            var currentViewportWidth = viewportDimensions['width'];

            scaleCoefficient = 1;

            // Aligning to center
            containerTop = Math.round((currentViewportHeight - Math.round(parseInt(container.offsetHeight * scaleCoefficient))) / 2);
            containerLeft = Math.round((currentViewportWidth - Math.round(parseInt(container.offsetWidth * scaleCoefficient))) / 2);

            if (containerTop < 0) {
                containerTop = 0;
            }

            if (containerLeft < 0) {
                containerLeft = 0;
            }

            container.style.top = containerTop + 'px';
            container.style.left = containerLeft + 'px';

            // Storing new dimensions
            this.STORED_VIEWPORT_HEIGHT = currentViewportHeight;
            this.STORED_VIEWPORT_WIDTH = currentViewportWidth;

            // Change Advertisement text position if ad is not fullscreen
            var overlay = 'yes';

            if (overlay == 'no') {
                var advertismentLabelElement = document.getElementById('advertismentLabel'),
                    advertismentPositionLeft = parseInt(containerLeft) + 3,
                    advertismentPositionBottom = parseInt(containerTop) + 3;

                advertismentLabelElement.style.bottom = advertismentPositionBottom + 'px';
                advertismentLabelElement.style.left = advertismentPositionLeft + 'px';
            }

            var _this = this;
            setTimeout(
                function () {
                    _this.alignSspContainer(container);
                },
                100
            );
        }
    };

    // Glads click tracking url
    var gladsClickTrackingUrl = statsURL + '{[clickTrackUrl]}';

    // Glads close image url
    var gladsCloseImageUrl = '{[closeImgUrl]}';

    // Markup
    var partnerMarkupBase64Encoded = 'PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KICAgICAgcnViaWNvbl9jYiA9IE1hdGgucmFuZG9tKCk7IHJ1Ymljb25fcnVybCA9IGRvY3VtZW50LnJlZmVycmVyOyBpZih0b3AubG9jYXRpb249PWRvY3VtZW50LmxvY2F0aW9uKXtydWJpY29uX3J1cmwgPSBkb2N1bWVudC5sb2NhdGlvbjt9IHJ1Ymljb25fcnVybCA9IGVzY2FwZShydWJpY29uX3J1cmwpOw0KICAgICAgd2luZG93LnJ1Ymljb25fYWQgPSAiMzIzNjAwOSIgKyAiLiIgKyAianMiOw0KICAgICAgd2luZG93LnJ1Ymljb25fY3JlYXRpdmUgPSAiMzI2Njc0NSIgKyAiLiIgKyAianMiOw0KICAgIDwvc2NyaXB0Pg0KDQoNCg0KPGltZyBzcmM9Imh0dHA6Ly91c3ctbGF4LmFkc3J2ci5vcmcvYmlkL2ZlZWRiYWNrL3J1Ymljb24/aWlkPTE3Mzc5NjVhLWUzMzctNDlkNi1iNGEzLTgyY2QzMzQ0MzllNyZjcmlkPWQ0dG40NzhuJndwPUY3MkQ1QzRFRjQ5MkU2RkYmYWlkPTEmd3BjPVVTRCZzZmU9ZDBiM2NiZCZwdWlkPSZ0ZGlkPSZwaWQ9ejBldXhrdSZhZz01MmN6OGt5JnNpZz0xRTZhM2dRNnJ4emNWdFRKTkduRFBDQm5FbEJVOFExLTMyWl9fZDUwUGhNLiZjZj0yODkyMDImZnE9MCZ0ZF9zPTYxMDM5MTk0NyZyY2F0cz1hcHAtNG1nLGFwcC16Z3AsYXBwLXF0ZiZtY2F0PWdjX2dyb3VwZV9iYWNfYXV0b2xvYW5zJm1zdGU9NjEwMzkxOTQ3Jm1mbGQ9NCZtc3NpPWM3bXdxcmVpdGQ0bSZtZnNpPTNyaGRhb3ppdWUmdWhvdz0xNSZhZ3NhPSZyZ2NvPVVuaXRlZCUyMFN0YXRlcyZyZ3JlPU1pbm5lc290YSZyZ21lPTYxMyZyZ2NpPVNhaW50JTIwUGF1bCZyZ3o9NTUxMjgmc3ZidHRkPTEmZHQ9VGFibGV0Jm9zZj1pT1Mmb3M9aU9TMTEzJmJyPVNhZmFyaSZybGFuZ3M9ZW4mbWxhbmc9JnN2cGlkPTE0NTU0JmRpZD0mcmN4dD1JbkFwcCZsYXQ9NDQuOTkyMzAwJmxvbj0tOTIuOTU5MjAwJnRtcGM9LTIuNzMmZGFpZD0yODlmZDg3OC1lMjcwLTQwYTgtYjEyYS1hZGJmZmNjNDI3YjEmdnA9MCZvc2k9Jm9zdj0mc2Z0PTEmYng9NjAmYnA9OC41Jm1rPUFwcGxlJm1kbD1pUGFkJmR1cj1DaG9LQjJWbFozaDBaRFFpRHdqQmpiY0JFZ2gwZEdSaFluTmxad28zQ2gxamFHRnlaMlV0WVd4c1IzSmhjR1Z6YUc5MFEyRjBaV2R2Y21sbGN5SVdDUGZfX19fX19fX19fd0VTQ1dkeVlYQmxjMmh2ZEFvX0NpSmphR0Z5WjJVdFlXeHNSRzkxWW14bFZtVnlhV1o1UW05MFFYWnZhV1JoYm1ObEloa0k1X19fX19fX19fX19BUklNWkc5MVlteGxkbVZ5YVdaNSZjcnJlbHI9JmlwbD0zNzk1NjQmYXRzdD0wJmZwYT03NzEiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIHN0eWxlPSJkaXNwbGF5OiBub25lOyIvPjxzY3JpcHQgbGFuZ3VhZ2U9J2phdmFzY3JpcHQnIHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwOi8vbWV4d2tzMTM3Mzo4MDgwL2xvY2FsLWZpeC9wVGVzdC5waHA/bD0xJmNyaWQ9cHJveHlUZXN0ZXImcD1SdWJpY29uJnQ9cyZ1PWh0dHBzJTNBJTJGJTJGZmsudW5pY29ybmVuZ2luZS5uZXQlMkZhZGolMkY1OTAlMkYyMTQ5OTk5NDUlMkZzc3BpbXBpZCUzRDI0OTElM0Jkc3BpbXBpZCUzRDE3Mzc5NjVhLWUzMzctNDlkNi1iNGEzLTgyY2QzMzQ0MzllNyUzQnNzcCUzRDUlM0JkZXZpY2VfaWQlM0QyODlmZDg3OC1lMjcwLTQwYTgtYjEyYS1hZGJmZmNjNDI3YjElM0JhcHBfaWQlM0RBUFBJRE1BQ1JPSEVSRSUzQlRURF9JTVBSRVNTSU9OSUQlM0QxNzM3OTY1YS1lMzM3LTQ5ZDYtYjRhMy04MmNkMzM0NDM5ZTclM0JUVERfVERJRCUzRCUzQlRURF9QQVJUTkVSSUQlM0R6MGV1eGt1JTNCVFREX0FEVkVSVElTRVJJRCUzRGhhbnRscTElM0JUVERfQURHUk9VUElEJTNENTJjejhreSUzQlRURF9DQU1QQUlHTklEJTNEbjB1OXI1cyUzQlRURF9DUkVBVElWRUlEJTNEZDR0bjQ3OG4lM0JUVERfU1VQUExZVkVORE9SJTNEcnViaWNvbiUzQlRURF9DQVRFR09SWSUzRGdjX2dyb3VwZV9iYWNfYXV0b2xvYW5zJTNCVFREX1NJVEUlM0Q2MTAzOTE5NDclMkY0NzE0MzIlMkZodHRwJTNBJTJGJTJGaW5zaWdodC5hZHNydnIub3JnJTJGdHJhY2slMkZjbGslM0ZpbXAlM0QxNzM3OTY1YS1lMzM3LTQ5ZDYtYjRhMy04MmNkMzM0NDM5ZTclMjZhZyUzRDUyY3o4a3klMjZzZmUlM0RkMGIzY2JkJTI2c2lnJTNEMUU2YTNnUTZyeHpjVnRUSk5HbkRQQ0JuRWxCVThRMS0zMlpfX2Q1MFBoTS4lMjZjcmlkJTNEZDR0bjQ3OG4lMjZjZiUzRDI4OTIwMiUyNmZxJTNEMCUyNnRkX3MlM0Q2MTAzOTE5NDclMjZyY2F0cyUzRGFwcC00bWclMkNhcHAtemdwJTJDYXBwLXF0ZiUyNm1jYXQlM0RnY19ncm91cGVfYmFjX2F1dG9sb2FucyUyNm1zdGUlM0Q2MTAzOTE5NDclMjZtZmxkJTNENCUyNm1zc2klM0RjN213cXJlaXRkNG0lMjZtZnNpJTNEM3JoZGFveml1ZSUyNnN2JTNEcnViaWNvbiUyNnVob3clM0QxNSUyNmFnc2ElM0QlMjZyZ2NvJTNEVW5pdGVkJTI1MjBTdGF0ZXMlMjZyZ3JlJTNETWlubmVzb3RhJTI2cmdtZSUzRDYxMyUyNnJnY2klM0RTYWludCUyNTIwUGF1bCUyNnJneiUzRDU1MTI4JTI2ZHQlM0RUYWJsZXQlMjZvc2YlM0RpT1MlMjZvcyUzRGlPUzExMyUyNmJyJTNEU2FmYXJpJTI2c3ZwaWQlM0QxNDU1NCUyNnJsYW5ncyUzRGVuJTI2bWxhbmclM0QlMjZkaWQlM0QlMjZyY3h0JTNESW5BcHAlMjZ0bXBjJTNELTIuNzMlMjZ2cnRkJTNEJTI2b3NpJTNEJTI2b3N2JTNEJTI2ZGFpZCUzRDI4OWZkODc4LWUyNzAtNDBhOC1iMTJhLWFkYmZmY2M0MjdiMSUyNmRuciUzRDAlMjZ2cGIlM0QlMjZzdnNjJTNEJTI2ZHVyJTNEQ2hvS0IyVmxaM2gwWkRRaUR3akJqYmNCRWdoMGRHUmhZbk5sWndvM0NoMWphR0Z5WjJVdFlXeHNSM0poY0dWemFHOTBRMkYwWldkdmNtbGxjeUlXQ1BmX19fX19fX19fX3dFU0NXZHlZWEJsYzJodmRBb19DaUpqYUdGeVoyVXRZV3hzUkc5MVlteGxWbVZ5YVdaNVFtOTBRWFp2YVdSaGJtTmxJaGtJNV9fX19fX19fX19fQVJJTVpHOTFZbXhsZG1WeWFXWjUlMjZjcnJlbHIlM0QlMjZucHQlM0QlMjZzdnNjaWQlM0Rtb2JpbGUtYXBwJTI2bWslM0RBcHBsZSUyNm1kbCUzRGlQYWQlMjZpcGwlM0QzNzk1NjQlMjZhdHN0JTNEMCUyNmZwYSUzRDc3MSUyNnIlM0QiPjwvc2NyaXB0Pg0KDQo8aW1nIHNyYz0iaHR0cHM6Ly9zZWN1cmUuaW5zaWdodGV4cHJlc3NhaS5jb20vYWRTZXJ2ZXIvYWRTZXJ2ZXJFU0kuYXNweD9zY3JpcHQ9ZmFsc2UmYmFubmVySUQ9MjQyMTg2NSZybmQ9NDcxNDMyJkRJRD0yODlmZDg3OC1lMjcwLTQwYTgtYjEyYS1hZGJmZmNjNDI3YjEmcmVkaXI9aHR0cHM6Ly9zZWN1cmUuaW5zaWdodGV4cHJlc3NhaS5jb20vYWRzZXJ2ZXIvMXBpeGVsLmdpZiI+';

    /**
     * The iframe will seem to be the main window.
     * It's not working for IE.
     *
     * @param iframeWindow object
     * @return void
     */
    function deceiveIframe(iframeWindow) {
        if (iframeWindow && typeof(iframeWindow) == 'object') {
            // make iframe to detect as main window
            try {
                iframeWindow.self = iframeWindow.top;
            } catch (e) {
            }

            // set owner document to the current iframe
            try {
                iframeWindow.document.head.ownerDocument = iframeWindow.document;
            } catch (e) {
            }

            // set the parent field
            try {
                iframeWindow.parent = {
                    // set location to the iframe
                    location: (iframeWindow.location) ?
                        iframeWindow.location :
                        (iframeWindow.document && iframeWindow.document.location) ?
                            iframeWindow.document.location :
                            undefined,
                    // add circular reference as normally it's set
                    parent: iframeWindow.parent,
                    document: iframeWindow.document,
                    window: iframeWindow
                };

            } catch (e) {
            }
        }
    }

    window.addEventListener('load', function () {

        // == Preparing iframe with ad content START ==
        var baseStyle, iframeHtmlObject, iframeContent, iframeWindow;

        // fetching base style
        baseStyle = document.getElementById('glftSspStyleBase').innerHTML;

        // fetching iframe container
        iframeHtmlObject = document.getElementById('glftSspContainer');

        // fetching iframe content obj
        iframeContent = (iframeHtmlObject.contentWindow) ? iframeHtmlObject.contentWindow : (iframeHtmlObject.contentDocument.document) ? iframeHtmlObject.contentDocument.document : iframeHtmlObject.contentDocument;

        // fetching iframe window object
        iframeWindow = iframeHtmlObject.contentWindow || iframeHtmlObject;

        deceiveIframe(iframeWindow);

        // opening content to write
        iframeContent.document.open();

        // Intercept js alerts & js confirms and *remove* the unwanted ad
        try {
            iframeWindow.alert = iframeWindow.confirm = function () {
                try {
                    iframeWindow.onbeforeunload = iframeWindow.onunload = null;
                    iframeWindow.location.href = 'about:blank';

                    // also empty the partner markup and exit
                    partnerMarkupBase64Encoded = '';
                    glftSspRouter.redirect('exit:');
                } catch (e) {
                }
            }
        } catch (e) {
        }

        // writing the AD with full container and style
        iframeContent.document.write(
            '<html>' +
            '<head>' +
            '<meta http-equiv="Content-Type" content="text/html, charset=UTF-8">' +
            '<style type="text/css">' + baseStyle + '</style>' +
            '</head>' +
            '<body>' +
            Base64.decode(partnerMarkupBase64Encoded) +
            '</body>' +
            '</html>'
        );

        // closing iframe document
        iframeContent.document.close();

        deceiveIframe(iframeWindow);

        // Override iframe open functionality to allow us to intercept link opening via javascript
        var iframeWindowOpened = false;
        iframeWindow.open = function (url) {
            if (url.indexOf('link:') === -1) {
                url = 'link:' + url;
                iframeWindowOpened = true;
            }
            glftSspRouter.redirect(url);
        };

        // Parse through all images and hide 1x1 pixel trackers
        var trackingImagesParser = function (iframeContent) {
            iframeImages = iframeContent.document.getElementsByTagName('img');
            if (typeof iframeImages != 'undefined' && iframeImages != '' && iframeImages != null && iframeImages.length > 0) {
                for (var i = 0; i < iframeImages.length; i++) {
                    if (iframeImages[i].hasAttribute('width') && iframeImages[i].width === 1 && iframeImages[i].height === 1) {
                        iframeImages[i].width = iframeImages[i].height = 0;
                    }

                    // hides former 1x1 and current 0x0 pixel trackers
                    if (iframeImages[i].hasAttribute('width') && iframeImages[i].width === 0 && iframeImages[i].height === 0) {
                        iframeImages[i].style.display = 'none';
                    }

                    // add missing http protocol for NON pixel trackers (width & height > 10)
                    // prevents webview problems on iOS for off-GE games
                    if (
                        iframeImages[i].hasAttribute('src') && iframeImages[i].src.indexOf('//') === 0 &&
                        iframeImages[i].hasAttribute('width') && iframeImages[i].width > 10 &&
                        iframeImages[i].hasAttribute('height') && iframeImages[i].height > 10
                    ) {
                        iframeImages[i].src = 'http:' + iframeImages[i].src;
                    }
                }
            }
        };
        trackingImagesParser(iframeContent);

        // looping on the iframe, attaching link: as needed
        var iframeAnchorParser = function (iframeContent) {
            iframeAnchors = iframeContent.document.getElementsByTagName('a');

            if (typeof iframeAnchors != 'undefined' && iframeAnchors != '' && iframeAnchors != null && iframeAnchors.length > 0) {
                for (var i = 0; i < iframeAnchors.length; i++) {
                    if (iframeAnchors[i].href.indexOf('http') != -1 || iframeAnchors[i].href.indexOf('ebayk') != -1) {
                        if (iframeAnchors[i].href.indexOf('link:') == -1 && (_os != 'win' && _os != 'winp' && _os != 'WINDOWS')) {
                            iframeAnchors[i].href = 'link:' + iframeAnchors[i].href;


                            if (iframeAnchors[i].hasAttribute('href') && iframeAnchors[i].hasAttribute('onclick')) {
                                iframeAnchors[i].removeAttribute('onclick');
                            }
                            // Checks if <a> has target = '_blank'
                            if (!iframeAnchors[i].hasAttribute('target') || iframeAnchors[i].getAttribute('target') !== '_blank') {
                                iframeAnchors[i].setAttribute('target', '_blank');
                            }
                        } else if (_os == 'win' || _os == 'winp' || _os == 'WINDOWS') {
                            if (iframeAnchors[i].href.indexOf('link:') == -1) {
                                iframeAnchors[i].href = 'link:' + iframeAnchors[i].href;
                            }

                            // check not already bound
                            alreadyBoundAttribute = iframeAnchors[i].getAttribute('data-alreadybound');
                            if (alreadyBoundAttribute == null || typeof alreadyBoundAttribute == 'undefined' || alreadyBoundAttribute == '') {
                                // set already bound
                                iframeAnchors[i].setAttribute('data-alreadybound', 'yes');

                                // bind click to redirect and prevent default
                                iframeAnchors[i].addEventListener('click', function (e) {
                                    glftSspRouter.redirect('link:' + this.href);

                                    e.preventDefault();
                                    return false;
                                });
                            }
                        }
                    }
                }
            }

            setTimeout(
                function () {
                    iframeAnchorParser(iframeContent);
                },
                100
            );
        };


        iframeAnchorParser(iframeContent);


        // == Preparing iframe with ad content END ==

        // Adding close button
        glftSspProcessor.addClose(gladsCloseImageUrl);

        glftImpressionHandler.handle();

        var sspContainer = document.getElementById('glftSspContainer');
        glftSspAdjuster.alignSspContainer(sspContainer);

        var clickTrackingDone = false;
        iframeContent.addEventListener('click', function (event) {
            if (clickTrackingDone == false) {
                clickTrackingDone = true;


                glftSspTracker.track(gladsClickTrackingUrl);

            }


            if (iframeWindowOpened) {
                event.preventDefault();
            }
        }, false);
    });
    var overlay = 'yes';
    if (overlay == 'yes') {
        //add overlay effect to body tag
        document.getElementsByTagName("body")[0].style.backgroundColor = 'rgba(0,0,0,0.8)';
    }

</script>
</body>
</html>
