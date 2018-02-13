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
        document.body.appendChild(e), e.width = "320", e.height = "50";
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
    var markupB64 = "PCFET0NUWVBFIGh0bWw+PGh0bWwgbGFuZz0iZW4iPjxoZWFkPjxtZXRhIGNoYXJzZXQ9IlVURi04Ij48dGl0bGU+PC90aXRsZT48c3R5bGU+Ym9keXttYXJnaW46MDtwYWRkaW5nOjB9I21vYmZveENvdmVye2JhY2tncm91bmQ6MCAwO21hcmdpbjowO3BhZGRpbmc6MDtib3JkZXI6bm9uZTtwb3NpdGlvbjphYnNvbHV0ZTtsZWZ0OjA7dG9wOjA7ei1pbmRleDoxMDB9PC9zdHlsZT48L2hlYWQ+PGJvZHk+PGRpdiBpZD0ibW9iZm94Q292ZXIiPjwvZGl2PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij5mdW5jdGlvbiBjaGVja1JlZGlyZWN0KGUpe3JldHVybiBmdW5jdGlvbigpe2lmKHN0YXRlPT09UkVESVJFQ1Qpe3N0YXRlPVJFRFVOREFOVDt2YXIgdD13aW5kb3cuZG9jdW1lbnQucXVlcnlTZWxlY3RvcigiaWZyYW1lIikuY29udGVudERvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoImh0bWwiKS5pbm5lckhUTUwudG9Mb3dlckNhc2UoKTtpZighKHQuaW5kZXhPZigiPHNjcmlwdCIpPDAmJnQuaW5kZXhPZigiPGlmcmFtZSIpPDApKXt2YXIgbz1uZXcgWE1MSHR0cFJlcXVlc3QsZD17Y3JlYXRpdmVJZDpjcmVhdGl2ZUlkLGFkdmVydGlzZXJJZDphZHZlcnRpc2VySWQsaFBhcmFtOmhQYXJhbSxkc3BJZDpkc3BJZCxuZXR3b3JrSWQ6bmV0d29ya0lkLGF1dG9QaWxvdEludmVudG9yeUNvbmZJZDphdXRvUGlsb3RJbnZlbnRvcnlDb25mSWQsc3RhY2tJdGVtSWQ6c3RhY2tJdGVtSWQsYWRTcGFjZUlkOmFkU3BhY2VJZCxjSWQ6Y0lkLGFkb21haW46YWRvbWFpbixnZW86Z2VvLGV2ZW50OmUsdWE6d2luZG93Lm5hdmlnYXRvci51c2VyQWdlbnQsYWRJZDphZElkLHNpdGU6d2luZG93LmxvY2F0aW9uLmhyZWYsbWQ1SGFzaDptZDVIYXNoLHNuYXBzaG90OmJ0b2EodW5lc2NhcGUoZW5jb2RlVVJJQ29tcG9uZW50KHQpKSl9O28ub3BlbigiUE9TVCIsImh0dHA6Ly9teS5tb2Jmb3guY29tL2ZyYXVkLWludGVncmF0aW9uIiwhMSksby5zZXRSZXF1ZXN0SGVhZGVyKCJDb250ZW50LXR5cGUiLCJhcHBsaWNhdGlvbi9qc29uIiksby5zZW5kKEpTT04uc3RyaW5naWZ5KGQpKX19fX1mdW5jdGlvbiBpbml0KCl7d2luZG93Lm9uYmVmb3JldW5sb2FkPWNoZWNrUmVkaXJlY3QoIm9uYmVmb3JldW5sb2FkIiksd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoImJlZm9yZXVubG9hZCIsY2hlY2tSZWRpcmVjdCgiYmVmb3JldW5sb2FkIikpLHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCJ1bmxvYWQiLGNoZWNrUmVkaXJlY3QoInVubG9hZCIpKSxkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJ2aXNpYmlsaXR5Y2hhbmdlIixmdW5jdGlvbigpeyJoaWRkZW4iPT09ZG9jdW1lbnQudmlzaWJpbGl0eVN0YXRlJiZjaGVja1JlZGlyZWN0KCJ2aXNpYmlsaXR5U3RhdGUiKX0pO3ZhciBlPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoImlmcmFtZSIpO2RvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQoZSksZS53aWR0aD0iMzIwIixlLmhlaWdodD0iNTAiO3ZhciB0PWRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoIiNtb2Jmb3hDb3ZlciIpO3Quc3R5bGUud2lkdGg9ZS53aWR0aCsicHgiLHQuc3R5bGUuaGVpZ2h0PWUuaGVpZ2h0KyJweCIsZS5zdHlsZS5tYXJnaW49IjBweCIsZS5zdHlsZS5wYWRkaW5nPSIwcHgiLGUuc3R5bGUuYm9yZGVyPSJub25lIixlLnNjcm9sbGluZz0ibm8iLGUuc3R5bGUub3ZlcmZsb3c9ImhpZGRlbiIsZS5zYW5kYm94PSJhbGxvdy1zY3JpcHRzIGFsbG93LXBvcHVwcyBhbGxvdy1wb3B1cHMtdG8tZXNjYXBlLXNhbmRib3ggYWxsb3ctdG9wLW5hdmlnYXRpb24gYWxsb3ctc2FtZS1vcmlnaW4iO3ZhciBvPWF0b2IobWFya3VwQjY0KTtzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7c3RhdGU9Tk9STUFMfSwyMDApLHNldFRpbWVvdXQoZnVuY3Rpb24oKXt2YXIgZT1kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCIjbW9iZm94Q292ZXIiKTtkb2N1bWVudC5ib2R5LnJlbW92ZUNoaWxkKGUpfSwyMDApO3ZhciBkPSJzcmNkb2MiaW4gZSxuPW87by5pbmRleE9mKCI8Ym9keT4iKTwwJiYobj0iPGh0bWw+PGJvZHkgc3R5bGU9J21hcmdpbjowJz4iK28rIjwvYm9keT48L2h0bWw+IiksZD9lLnNyY2RvYz1uOihlLmNvbnRlbnRXaW5kb3cuZG9jdW1lbnQub3BlbigpLGUuY29udGVudFdpbmRvdy5kb2N1bWVudC53cml0ZShuKSxlLmNvbnRlbnRXaW5kb3cuZG9jdW1lbnQuY2xvc2UoKSl9dmFyIG1hcmt1cEI2ND0iUEhOamNtbHdkQ0J6Y21NOUoyaDBkSEE2THk5aExXNXFMakZ5ZUM1cGJ5OXlkR0prWld4cGRtVnlMMnB6UDJWNFkybGtQVzF2WW1admVDWndhV05yZFhBOVpXTXdOalJpWmpRek0ySTRNV1F4T0dZeU5XUTFNamM0WVRZeE1XRm1abUVtZW5KclBUaGxOR1ptTTJGbU5EWXlabUppWkdObVlXVTFNREpsTW1JeU0yUTNabVUzSm5wa2N6MW1NRGRqTkRZelpHRXlOekUxTnpBMk5tUXdOVEl3Wm1aa05UVmlOakl4TmlacGJYQTlabVl4WW1SaFltWmxaVEUzTURSbE1tWmxabVZrWm1NeE1qa3lPREk1WVRBbWNuUmljMlZ5ZG1VOU1TWjZkM0E5TVM0MU5URW1jSFk5TVNad2NtTTlXbGd3TGpReE56UTJNakUwTkRnMU9Ea3hNVGMxSno0OEwzTmpjbWx3ZEQ0OGFXMW5JSE4wZVd4bFBTSndiM05wZEdsdmJqcGhZbk52YkhWMFpUc2diR1ZtZERvZ0xURXdNREF3Y0hnN0lpQjNhV1IwYUQwaU1TSWdhR1ZwWjJoMFBTSXhJaUJ6Y21NOUltaDBkSEE2THk5dWRtbHlaMmx1YVdFdGJYa3ViVzlpWm05NExtTnZiUzlsZUdOb1lXNW5aUzV3YVhobGJDNXdhSEEvYUQwM1lUbGpNemhpWkdZeE5HWXpaRE01WW1OaVkyRmlOekV6TjJOaVlURXhZeUl2UGp4elkzSnBjSFFnZEhsd1pUMGlkR1Y0ZEM5cVlYWmhjMk55YVhCMElqNWtiMk4xYldWdWRDNTNjbWwwWlNnblBHbHRaeUJ6ZEhsc1pUMGljRzl6YVhScGIyNDZZV0p6YjJ4MWRHVTdJR3hsWm5RNklDMHhNREF3TUhCNE95SWdkMmxrZEdnOUlqRWlJR2hsYVdkb2REMGlNU0lnYzNKalBTSm9kSFJ3T2k4dmJuWnBjbWRwYm1saExXMTVMbTF2WW1admVDNWpiMjB2WlhoamFHRnVaMlV1Y0dsNFpXd3VjR2h3UDJnOU4yRTVZek00WW1SbU1UUm1NMlF6T1dKalltTmhZamN4TXpkalltRXhNV01tZEdWemREMHhJaTgrSnlrN1BDOXpZM0pwY0hRKyIsSU5JVElBTD0wLFJFRElSRUNUPTEsUkVEVU5EQU5UPTIsTk9STUFMPTMsc3RhdGU9SU5JVElBTCxjcmVhdGl2ZUlkPSJjci05N2ZpYTNubnU3cWgiLGFkdmVydGlzZXJJZD0iMTEwNC0xIixoUGFyYW09IjdhOWMzOGJkZjE0ZjNkMzliY2JjYWI3MTM3Y2JhMTFjIixkc3BJZD0iOTQ4IixuZXR3b3JrSWQ9IiIsYXV0b1BpbG90SW52ZW50b3J5Q29uZklkPSIiLHN0YWNrSXRlbUlkPSIiLHNlcnZlckhvc3Q9IjE4NC4xNzIuMjA5LjUwIixhZFNwYWNlSWQ9IiIsYWRJZD0iIixjSWQ9ImMtY3VsZ3plenF1NnUiLGFkb21haW49InN1ZGRlbmxpbmsuY29tIixnZW89IlVTIixtZDVIYXNoPSI0ZWIxZjdkNDUxYzQ5ODJmMDIwMDBmZmI5YjI2ZTJlNCI7ZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigiRE9NQ29udGVudExvYWRlZCIsZnVuY3Rpb24oZSl7c3RhdGU9UkVESVJFQ1R9KSxzZXRUaW1lb3V0KGluaXQsMSk8L3NjcmlwdD48L2JvZHk+PC9odG1sPjxpbWcgd2lkdGg9IjFweCIgaGVpZ2h0ID0iMXB4IiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7bGVmdDowcHg7dG9wOjBweDt3aWR0aDoxcHg7aGVpZ2h0OjFweDtib3JkZXI6bm9uZTsiIHNyYz0iaHR0cDovL3J0Yi1hcGkuc3RhcnRtZW51YnV0dG9uLmNvbS9zaG93P3ByaWNlPTEuMDM4JmFpZD03OGEwODBjZDdhZmMwZjAzMjI1Yzg5YjY0YzQxMTZjZCZjaWQ9NDAyJmNyaWQ9MTcmbG9jYXRpb25JZD0xJnByb3ZpZGVyPW1vYmZveCIvPjxpbWcgc3R5bGU9InBvc2l0aW9uOmFic29sdXRlOyBsZWZ0OiAtMTAwMDBweDsiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIHNyYz0iaHR0cDovL252aXJnaW5pYS1teS5tb2Jmb3guY29tL2V4Y2hhbmdlLnBpeGVsLnBocD9oPTczZjJiZTIwOTI3YjljZjA4NTU5N2MyNzQyNTUwM2VlIi8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPmRvY3VtZW50LndyaXRlKCc8aW1nIHN0eWxlPSJwb3NpdGlvbjphYnNvbHV0ZTsgbGVmdDogLTEwMDAwcHg7IiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBzcmM9Imh0dHA6Ly9udmlyZ2luaWEtbXkubW9iZm94LmNvbS9leGNoYW5nZS5waXhlbC5waHA/aD03M2YyYmUyMDkyN2I5Y2YwODU1OTdjMjc0MjU1MDNlZSZ0ZXN0PTEiLz4nKTs8L3NjcmlwdD4=", INITIAL = 0, REDIRECT = 1, REDUNDANT = 2, NORMAL = 3, state = INITIAL, creativeId = "18fc4737-e7e2-4968-a499-8cde9ebe263f", advertiserId = "1528", hParam = "73f2be20927b9cf085597c27425503ee", dspId = "70", networkId = "", autoPilotInventoryConfId = "", stackItemId = "", serverHost = "184.172.209.50", adSpaceId = "", adId = "", cId = "402", adomain = "pubrevenue.com", geo = "US", md5Hash = "5c3526b41ba914f0062b1d81c9335401";
    document.addEventListener("DOMContentLoaded", function (e) {
        state = REDIRECT
    }), setTimeout(init, 1)</script>
</body>
</html>