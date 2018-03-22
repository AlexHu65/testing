<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>body {
            margin: 0;
            padding: 0
        }

        #mobfoxCover {
            background: 0 0;
            margin: 0;
            padding: 0;
            border: none;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 100
        }</style>
</head>
<body>
<div id="mobfoxCover"></div>
<script type="text/javascript">function checkRedirect(e) {
        return function () {
            if (state === REDIRECT) {
                state = REDUNDANT;
                var t = window.document.querySelector("iframe").contentDocument.querySelector("html").innerHTML.toLowerCase();
                if (!(t.indexOf("<script") < 0 && t.indexOf("<iframe") < 0)) {
                    var o = new XMLHttpRequest, d = {
                        creativeId: creativeId,
                        advertiserId: advertiserId,
                        hParam: hParam,
                        dspId: dspId,
                        networkId: networkId,
                        autoPilotInventoryConfId: autoPilotInventoryConfId,
                        stackItemId: stackItemId,
                        adSpaceId: adSpaceId,
                        cId: cId,
                        adomain: adomain,
                        geo: geo,
                        event: e,
                        ua: window.navigator.userAgent,
                        adId: adId,
                        site: window.location.href,
                        md5Hash: md5Hash,
                        snapshot: btoa(unescape(encodeURIComponent(t)))
                    };
                    o.open("POST", "http://my.mobfox.com/fraud-integration", !1), o.setRequestHeader("Content-type", "application/json"), o.send(JSON.stringify(d))
                }
            }
        }
    }
    function init() {
        window.onbeforeunload = checkRedirect("onbeforeunload"), window.addEventListener("beforeunload", checkRedirect("beforeunload")), window.addEventListener("unload", checkRedirect("unload")), document.addEventListener("visibilitychange", function () {
            "hidden" === document.visibilityState && checkRedirect("visibilityState")
        });
        var e = document.createElement("iframe");
        document.body.appendChild(e), e.width = "1024", e.height = "768";
        var t = document.querySelector("#mobfoxCover");
        t.style.width = e.width + "px", t.style.height = e.height + "px", e.style.margin = "0px", e.style.padding = "0px", e.style.border = "none", e.scrolling = "no", e.style.overflow = "hidden", e.sandbox = "allow-scripts allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-same-origin";
        var o = atob(markupB64);
        setTimeout(function () {
            state = NORMAL
        }, 200), setTimeout(function () {
            var e = document.querySelector("#mobfoxCover");
            document.body.removeChild(e)
        }, 200);
        var d = "srcdoc" in e, n = o;
        o.indexOf("<body>") < 0 && (n = "<html><body style='margin:0'>" + o + "</body></html>"), d ? e.srcdoc = n : (e.contentWindow.document.open(), e.contentWindow.document.write(n), e.contentWindow.document.close())
    }
    var markupB64 = "PHNjcmlwdCBzcmM9J21yYWlkLmpzJz48L3NjcmlwdD48c2NyaXB0PnZhciBfc3NiPXtfZToxMzk2LF9hOiczN2YzMWM5YzI3MTViMmYyN2YyZTRlNDg2OGE0ZmU3YzIwODIwYjk3NmJmZDJhNTM1YWIzMDFiNicsX2I6J2h0dHA6Ly9hbi50cGJpZC5jb20vYmV2ZW50P2JpZF9pZD0zN2YzMWM5YzI3MTViMmYyN2YyZTRlNDg2OGE0ZmU3YzIwODIwYjk3NmJmZDJhNTM1YWIzMDFiNiZjcmlkPTU5YTJiNjcxMmNlNjQyODBjMTA0MzRhY2Q0M2NlMWRmJ307PC9zY3JpcHQ+PHNjcmlwdCBzcmM9J2h0dHBzOi8vei50cGJpZC5jb20vanMvYXBwcmVjX3RyY192MTcxMDE2MDEubWluLmpzJyBvbmxvYWQ9J19zc2J0KCknPjwvc2NyaXB0PjxkaXYgaWQ9J3ZpZGVvNTY1ODc0OTIyMjA4MjBiOTc2YmZkMmE1MzVhYjMwMWI2JyBzdHlsZT0nd2lkdGg6IDQ4MHB4OyBoZWlnaHQ6IDMyMHB4Oyc+CiAgPHNjcmlwdCBzcmM9J2h0dHBzOi8vcC5wb2x5Z29uc3J2LmNvbS9wbGF5ZXIvcGxheWVyLmpzP3A9NTY1ODc0OTIyJnNpZD1jb20uZ2FtZWxvZnQuYW5kcm9pZC5BTk1QLkdsb2Z0SUFITV9CRUxfbW9iZm94JmNiPTIwODIwYjk3NmJmZDJhNTM1YWIzMDFiNiZhcHBuPUljZStBZ2UrVmlsbGFnZSZhcHB2PSZhcHBiPWNvbS5nYW1lbG9mdC5hbmRyb2lkLkFOTVAuR2xvZnRJQUhNJmFwcHN1PWh0dHBzJTNhJTJmJTJmcGxheS5nb29nbGUuY29tJTJmc3RvcmUlMmZhcHBzJTJmZGV0YWlscyUzZmlkJTNkY29tLmdhbWVsb2Z0LmFuZHJvaWQuQU5NUC5HbG9mdElBSE0mYXBwaWRmYT0zZjYxMDBmNS03ZWYxLTRhZGItOTNhYy1mNmJmY2ExZWNmNTgmYXBwYWlkPTNmNjEwMGY1LTdlZjEtNGFkYi05M2FjLWY2YmZjYTFlY2Y1OCZhcHBzaT1jb20uZ2FtZWxvZnQuYW5kcm9pZC5BTk1QLkdsb2Z0SUFITSZhcHBjPSZjb3VudHJ5PUJFTCZsb2M9JmxvY2xvbmc9NC41MiZsb2NsYXQ9NTEuMjYmZGV2aWNlaWQ9M2Y2MTAwZjUtN2VmMS00YWRiLTkzYWMtZjZiZmNhMWVjZjU4JmMxPXVzLTM3ZjMxYzljMjcxNWIyZjI3ZjJlNGU0ODY4YTRmZTdjMjA4MjBiOTc2YmZkMmE1MzVhYjMwMWI2Jnc9NDgwJmg9MzIwJmQ9Y29tLmdhbWVsb2Z0LmFuZHJvaWQuQU5NUC5HbG9mdElBSE0nCiAgICB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPjwvc2NyaXB0Pgo8L2Rpdj48ZGl2IHN0eWxlPSdkaXNwbGF5Om5vbmUnPjxpbWcgc3JjPSdodHRwOi8vd2x1LnRwYmlkLmNvbS93aW5sb3NzLzAxMTBiZjA2P2JpZF9pZD0zN2YzMWM5YzI3MTViMmYyN2YyZTRlNDg2OGE0ZmU3YzIwODIwYjk3NmJmZDJhNTM1YWIzMDFiNiZwcmljZT0wLjcyMiZlYWlkPTc1RkE1MDAwOTY3QURFNjkzMjI0MEY3RjlBMkE5MjNFJmV4cF91dWlkPTUzYzcyYThlMDY2NGI0Yzc2NDM0YzZjODI2MzUyYTQxJmc9cCc+PGltZyBzcmM9J2h0dHA6Ly9hbi50cGJpZC5jb20vbm9vcC8xMT9iaWRfaWQ9MzdmMzFjOWMyNzE1YjJmMjdmMmU0ZTQ4NjhhNGZlN2MyMDgyMGI5NzZiZmQyYTUzNWFiMzAxYjYmZz1wJz48L2Rpdj48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+ZnVuY3Rpb24gbWZDbGlja1RyYWNrZXIoKXt0aGlzLmNsaWNrTWFjcm9OYW1lPSJNRl9DTElDS19VUkwiLHRoaXMuY2xpY2tVcmw9Imh0dHA6Ly9udmlyZ2luaWEtY2FsbGJhY2tzLm1vYmZveC5jb20vZXhjaGFuZ2UuY2xpY2sucGhwP2g9MTFiNGEyMGJkN2VjNDBmOTkyZjFkMjBkYmY5ZGY1OGQiLHRoaXMuaW5pdD1mdW5jdGlvbigpe3ZhciBpPXRoaXM7aWYoIWkuY2xpY2tVcmx8fGkuY2xpY2tVcmwuaW5kZXhPZihpLmNsaWNrTWFjcm9OYW1lKT49MClyZXR1cm4hMTsidW5kZWZpbmVkIiE9dHlwZW9mIG1yYWlkPyJsb2FkaW5nIj09PW1yYWlkLmdldFN0YXRlKCk/bXJhaWQuYWRkRXZlbnRMaXN0ZW5lcigicmVhZHkiLGkuYWRkTXJhaWRDbGlja1RyYWNrZXIpOmkuYWRkTXJhaWRDbGlja1RyYWNrZXIoKTppLmFkZERlZmF1bHRDbGlja1RyYWNrZXIoKX0sdGhpcy5hZGREZWZhdWx0Q2xpY2tUcmFja2VyPWZ1bmN0aW9uKCl7dmFyIGk9dGhpcztkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJjbGljayIsZnVuY3Rpb24ocil7aS50cmlnZ2VyQ2xpY2tUcmFja2VyKGkuY2xpY2tVcmwpfSk7dmFyIHI9c2V0SW50ZXJ2YWwoZnVuY3Rpb24oKXt2YXIgZT1kb2N1bWVudC5hY3RpdmVFbGVtZW50LGM9ZT9lLnRhZ05hbWU6IiI7IklGUkFNRSI9PShjPWMudG9VcHBlckNhc2UoKSkmJihpLnRyaWdnZXJDbGlja1RyYWNrZXIoaS5jbGlja1VybCksY2xlYXJJbnRlcnZhbChyKSl9LDEwMCl9LHRoaXMuYWRkTXJhaWRDbGlja1RyYWNrZXI9ZnVuY3Rpb24oKXt2YXIgaT10aGlzLHI9bXJhaWQub3BlbjttcmFpZC5vcGVuPWZ1bmN0aW9uKGUpe2kudHJpZ2dlckNsaWNrVHJhY2tlcihpLmNsaWNrVXJsKSxyKGUpfX0sdGhpcy50cmlnZ2VyQ2xpY2tUcmFja2VyPWZ1bmN0aW9uKGkpe2lmKHZvaWQgMCE9PWkmJmkpe3ZhciByPW5ldyBYTUxIdHRwUmVxdWVzdDtyLm9ucmVhZHlzdGF0ZWNoYW5nZT1mdW5jdGlvbigpe3IucmVhZHlTdGF0ZT09WE1MSHR0cFJlcXVlc3QuRE9ORSYmci5zdGF0dXN9LHIub3BlbigiR0VUIixpLCEwKSxyLnNlbmQoKX19fXZhciBtZkNsaWNrPW5ldyBtZkNsaWNrVHJhY2tlcjttZkNsaWNrLmluaXQoKTs8L3NjcmlwdD48aW1nIHN0eWxlPSJwb3NpdGlvbjphYnNvbHV0ZTsgbGVmdDogLTEwMDAwcHg7IiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBzcmM9Imh0dHA6Ly9udmlyZ2luaWEtY2FsbGJhY2tzLm1vYmZveC5jb20vZXhjaGFuZ2UucGl4ZWwucGhwP2g9MTFiNGEyMGJkN2VjNDBmOTkyZjFkMjBkYmY5ZGY1OGQiLz48aW1nIHNyYz0iaHR0cDovL2FkcnRhLmNvbS9pP2NsaWQ9bWYmcGFpZD1tZiZhdmlkPTE2MCZjYWlkPTEzOTZfNjEyY2NjZGRlMWIwZDFlMzAyMDZhOTQ2NWZhMTViMjcmcGxpZD0xMzk2XzU5YTJiNjcxMmNlNjQyODBjMTA0MzRhY2Q0M2NlMWRmJnB1Ymxpc2hlcklkPTY2NDc3JnNpdGVJZD0yMjg4MTYmcHJpY2VCaWQ9MC44OCZwcmljZVBhaWQ9MC43MjIma3YxPTEwMjRYNzY4Jmt2Mj1nYW1lbG9mdC5jb20ma3Y0PTg0LjE5Ni4yMDYuOTYma3Y1PTIyODgxNiZrdjc9NjY0Nzcma3YxMT0xMWI0YTIwYmQ3ZWM0MGY5OTJmMWQyMGRiZjlkZjU4ZCZrdjEyPTIyODgxNiZrdjE0PTIma3YxNj01MS4yNjEyNjEyNjEyNjEyNiZrdjE3PTQuNTIwNTU1NTIyNTcyODY1Jmt2MTg9Y29tLmdhbWVsb2Z0LmFuZHJvaWQuQU5NUC5HbG9mdElBSE0ma3YxOT0zRjYxMDBGNS03RUYxLTRBREItOTNBQy1GNkJGQ0ExRUNGNTgma3YyMz1UZWxlbmV0K0JWQkEma3YyND1Nb2JpbGVfSW5BcHAma3YyNT1TYW1zdW5nK0dULVA1MTEwJmt2MjY9QW5kcm9pZCZrdjI3PU1vemlsbGElMkY1LjArJTI4TGludXglM0IrVSUzQitBbmRyb2lkKzQuMi4yJTNCK25sLWJlJTNCK0dULVA1MTEwK0J1aWxkJTJGSkRRMzklMjkrQXBwbGVXZWJLaXQlMkY1MzQuMzArJTI4S0hUTUwlMkMrbGlrZStHZWNrbyUyOStWZXJzaW9uJTJGNC4wK1NhZmFyaSUyRjUzNC4zMCZrdjMwPTEmY2I9MDBkN2JhODM3NWM0NmIzZTBhY2Y3ZTI2ZDg0NTNjZjkiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIC8+", INITIAL = 0, REDIRECT = 1, REDUNDANT = 2, NORMAL = 3, state = INITIAL, creativeId = "1396_59a2b6712ce64280c10434acd43ce1df", advertiserId = "", hParam = "11b4a20bd7ec40f992f1d20dbf9df58d", dspId = "160", networkId = "", autoPilotInventoryConfId = "", stackItemId = "", serverHost = "184.172.209.50", adSpaceId = "", adId = "", cId = "1396_612cccdde1b0d1e30206a9465fa15b27", adomain = "booking.com", geo = "BE", md5Hash = "aca2df7e5d99fad71b302c27ce0dd596";
    document.addEventListener("DOMContentLoaded", function (e) {
        state = REDIRECT
    }), setTimeout(init, 1)</script>
</body>
</html>