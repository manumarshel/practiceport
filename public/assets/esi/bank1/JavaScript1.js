var deployJava = function() { var l = { core: ["id", "class", "title", "style"], i18n: ["lang", "dir"], events: ["onclick", "OnClientClick", "ondblclick", "onmousedown", "onmouseup", "onmouseover", "onmousemove", "onmouseout", "onkeypress", "onkeydown", "onkeyup"], applet: ["codebase", "code", "name", "archive", "object", "width", "height", "alt", "align", "hspace", "vspace"], object: ["classid", "codebase", "codetype", "data", "type", "archive", "declare", "standby", "height", "width", "usemap", "name", "tabindex", "align", "border", "hspace", "vspace"] }; var b = l.object.concat(l.core, l.i18n, l.events); var m = l.applet.concat(l.core); function g(o) { if (!d.debug) { return } if (console.log) { console.log(o) } else { alert(o) } } function k(p, o) { if (p == null || p.length == 0) { return true } var r = p.charAt(p.length - 1); if (r != "+" && r != "*" && (p.indexOf("_") != -1 && r != "_")) { p = p + "*"; r = "*" } p = p.substring(0, p.length - 1); if (p.length > 0) { var q = p.charAt(p.length - 1); if (q == "." || q == "_") { p = p.substring(0, p.length - 1) } } if (r == "*") { return (o.indexOf(p) == 0) } else { if (r == "+") { return p <= o } } return false } function e() { var o = "//java.com/js/webstart.png"; try { return document.location.protocol.indexOf("http") != -1 ? o : "http:" + o } catch (p) { return "http:" + o } } function n(p) { var o = "http://java.com/dt-redirect"; if (p == null || p.length == 0) { return o } if (p.charAt(0) == "&") { p = p.substring(1, p.length) } return o + "?" + p } function j(q, p) { var o = q.length; for (var r = 0; r < o; r++) { if (q[r] === p) { return true } } return false } function c(o) { return j(m, o.toLowerCase()) } function i(o) { return j(b, o.toLowerCase()) } function a(o) { if ("MSIE" != deployJava.browserName) { return true } if (deployJava.compareVersionToPattern(deployJava.getPlugin().version, ["10", "0", "0"], false, true)) { return true } if (o == null) { return false } return !k("1.6.0_33+", o) } var d = { debug: null, version: "20120801", firefoxJavaVersion: null, myInterval: null, preInstallJREList: null, returnPage: null, brand: null, locale: null, installType: null, EAInstallEnabled: false, EarlyAccessURL: null, oldMimeType: "application/npruntime-scriptable-plugin;DeploymentToolkit", mimeType: "application/java-deployment-toolkit", launchButtonPNG: e(), browserName: null, browserName2: null, getJREs: function() { var t = new Array(); if (this.isPluginInstalled()) { var r = this.getPlugin(); var o = r.jvms; for (var q = 0; q < o.getLength(); q++) { t[q] = o.get(q).version } } else { var p = this.getBrowser(); if (p == "MSIE") { if (this.testUsingActiveX("1.7.0")) { t[0] = "1.7.0" } else { if (this.testUsingActiveX("1.6.0")) { t[0] = "1.6.0" } else { if (this.testUsingActiveX("1.5.0")) { t[0] = "1.5.0" } else { if (this.testUsingActiveX("1.4.2")) { t[0] = "1.4.2" } else { if (this.testForMSVM()) { t[0] = "1.1" } } } } } } else { if (p == "Netscape Family") { this.getJPIVersionUsingMimeType(); if (this.firefoxJavaVersion != null) { t[0] = this.firefoxJavaVersion } else { if (this.testUsingMimeTypes("1.7")) { t[0] = "1.7.0" } else { if (this.testUsingMimeTypes("1.6")) { t[0] = "1.6.0" } else { if (this.testUsingMimeTypes("1.5")) { t[0] = "1.5.0" } else { if (this.testUsingMimeTypes("1.4.2")) { t[0] = "1.4.2" } else { if (this.browserName2 == "Safari") { if (this.testUsingPluginsArray("1.7.0")) { t[0] = "1.7.0" } else { if (this.testUsingPluginsArray("1.6")) { t[0] = "1.6.0" } else { if (this.testUsingPluginsArray("1.5")) { t[0] = "1.5.0" } else { if (this.testUsingPluginsArray("1.4.2")) { t[0] = "1.4.2" } } } } } } } } } } } } } if (this.debug) { for (var q = 0; q < t.length; ++q) { g("[getJREs()] We claim to have detected Java SE " + t[q]) } } return t }, installJRE: function(r, p) { var o = false; if (this.isPluginInstalled() && this.isAutoInstallEnabled(r)) { var q = false; if (this.isCallbackSupported()) { q = this.getPlugin().installJRE(r, p) } else { q = this.getPlugin().installJRE(r) } if (q) { this.refresh(); if (this.returnPage != null) { document.location = this.returnPage } } return q } else { return this.installLatestJRE() } }, isAutoInstallEnabled: function(o) { if (!this.isPluginInstalled()) { return false } if (typeof o == "undefined") { o = null } return a(o) }, isCallbackSupported: function() { return this.isPluginInstalled() && this.compareVersionToPattern(this.getPlugin().version, ["10", "2", "0"], false, true) }, installLatestJRE: function(q) { if (this.isPluginInstalled() && this.isAutoInstallEnabled()) { var r = false; if (this.isCallbackSupported()) { r = this.getPlugin().installLatestJRE(q) } else { r = this.getPlugin().installLatestJRE() } if (r) { this.refresh(); if (this.returnPage != null) { document.location = this.returnPage } } return r } else { var p = this.getBrowser(); var o = navigator.platform.toLowerCase(); if ((this.EAInstallEnabled == "true") && (o.indexOf("win") != -1) && (this.EarlyAccessURL != null)) { this.preInstallJREList = this.getJREs(); if (this.returnPage != null) { this.myInterval = setInterval("deployJava.poll()", 3000) } location.href = this.EarlyAccessURL; return false } else { if (p == "MSIE") { return this.IEInstall() } else { if ((p == "Netscape Family") && (o.indexOf("win32") != -1)) { return this.FFInstall() } else { location.href = n(((this.returnPage != null) ? ("&returnPage=" + this.returnPage) : "") + ((this.locale != null) ? ("&locale=" + this.locale) : "") + ((this.brand != null) ? ("&brand=" + this.brand) : "")) } } return false } } }, runApplet: function(p, u, r) { if (r == "undefined" || r == null) { r = "1.1" } var t = "^(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)(?:_(\\d+))?)?)?$"; var o = r.match(t); if (this.returnPage == null) { this.returnPage = document.location } if (o != null) { var q = this.getBrowser(); if (q != "?") { if (this.versionCheck(r + "+")) { this.writeAppletTag(p, u) } else { if (this.installJRE(r + "+")) { this.refresh(); location.href = document.location; this.writeAppletTag(p, u) } } } else { this.writeAppletTag(p, u) } } else { g("[runApplet()] Invalid minimumVersion argument to runApplet():" + r) } }, writeAppletTag: function(r, w) { var o = "<" + "applet "; var q = ""; var t = "<" + "/" + "applet" + ">"; var x = true; if (null == w || typeof w != "object") { w = new Object() } for (var p in r) { if (!c(p)) { w[p] = r[p] } else { o += (" " + p + '="' + r[p] + '"'); if (p == "code") { x = false } } } var v = false; for (var u in w) { if (u == "codebase_lookup") { v = true } if (u == "object" || u == "java_object" || u == "java_code") { x = false } q += '<param name="' + u + '" value="' + w[u] + '"/>' } if (!v) { q += '<param name="codebase_lookup" value="false"/>' } if (x) { o += (' code="dummy"') } o += ">"; document.write(o + "\n" + q + "\n" + t) }, versionCheck: function(p) { var v = 0; var x = "^(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)(?:_(\\d+))?)?)?(\\*|\\+)?$"; var y = p.match(x); if (y != null) { var r = false; var u = false; var q = new Array(); for (var t = 1; t < y.length; ++t) { if ((typeof y[t] == "string") && (y[t] != "")) { q[v] = y[t]; v++ } } if (q[q.length - 1] == "+") { u = true; r = false; q.length-- } else { if (q[q.length - 1] == "*") { u = false; r = true; q.length-- } else { if (q.length < 4) { u = false; r = true } } } var w = this.getJREs(); for (var t = 0; t < w.length; ++t) { if (this.compareVersionToPattern(w[t], q, r, u)) { return true } } return false } else { var o = "Invalid versionPattern passed to versionCheck: " + p; g("[versionCheck()] " + o); alert(o); return false } }, isWebStartInstalled: function(r) { var q = this.getBrowser(); if (q == "?") { return true } if (r == "undefined" || r == null) { r = "1.4.2" } var p = false; var t = "^(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)(?:_(\\d+))?)?)?$"; var o = r.match(t); if (o != null) { p = this.versionCheck(r + "+") } else { g("[isWebStartInstaller()] Invalid minimumVersion argument to isWebStartInstalled(): " + r); p = this.versionCheck("1.4.2+") } return p }, getJPIVersionUsingMimeType: function() { for (var p = 0; p < navigator.mimeTypes.length; ++p) { var q = navigator.mimeTypes[p].type; var o = q.match(/^application\/x-java-applet;jpi-version=(.*)$/); if (o != null) { this.firefoxJavaVersion = o[1]; if ("Opera" != this.browserName2) { break } } } }, launchWebStartApplication: function(r) { var o = navigator.userAgent.toLowerCase(); this.getJPIVersionUsingMimeType(); if (this.isWebStartInstalled("1.7.0") == false) { if ((this.installJRE("1.7.0+") == false) || ((this.isWebStartInstalled("1.7.0") == false))) { return false } } var u = null; if (document.documentURI) { u = document.documentURI } if (u == null) { u = document.URL } var p = this.getBrowser(); var q; if (p == "MSIE") { q = "<" + 'object classid="clsid:8AD9C840-044E-11D1-B3E9-00805F499D93" ' + 'width="0" height="0">' + "<" + 'PARAM name="launchjnlp" value="' + r + '"' + ">" + "<" + 'PARAM name="docbase" value="' + u + '"' + ">" + "<" + "/" + "object" + ">" } else { if (p == "Netscape Family") { q = "<" + 'embed type="application/x-java-applet;jpi-version=' + this.firefoxJavaVersion + '" ' + 'width="0" height="0" ' + 'launchjnlp="' + r + '"' + 'docbase="' + u + '"' + " />" } } if (document.body == "undefined" || document.body == null) { document.write(q); document.location = u } else { var t = document.createElement("div"); t.id = "div1"; t.style.position = "relative"; t.style.left = "-10000px"; t.style.margin = "0px auto"; t.className = "dynamicDiv"; t.innerHTML = q; document.body.appendChild(t) } }, createWebStartLaunchButtonEx: function(q, p) { if (this.returnPage == null) { this.returnPage = q } var o = "javascript:deployJava.launchWebStartApplication('" + q + "');"; document.write("<" + 'a href="' + o + "\" onMouseOver=\"window.status=''; " + 'return true;"><' + "img " + 'src="' + this.launchButtonPNG + '" ' + 'border="0" /><' + "/" + "a" + ">") }, createWebStartLaunchButton: function(q, p) { if (this.returnPage == null) { this.returnPage = q } var o = "javascript:" + "if (!deployJava.isWebStartInstalled(&quot;" + p + "&quot;)) {" + "if (deployJava.installLatestJRE()) {" + "if (deployJava.launch(&quot;" + q + "&quot;)) {}" + "}" + "} else {" + "if (deployJava.launch(&quot;" + q + "&quot;)) {}" + "}"; document.write("<" + 'a href="' + o + "\" onMouseOver=\"window.status=''; " + 'return true;"><' + "img " + 'src="' + this.launchButtonPNG + '" ' + 'border="0" /><' + "/" + "a" + ">") }, launch: function(o) { document.location = o; return true }, isPluginInstalled: function() { var o = this.getPlugin(); if (o && o.jvms) { return true } else { return false } }, isAutoUpdateEnabled: function() { if (this.isPluginInstalled()) { return this.getPlugin().isAutoUpdateEnabled() } return false }, setAutoUpdateEnabled: function() { if (this.isPluginInstalled()) { return this.getPlugin().setAutoUpdateEnabled() } return false }, setInstallerType: function(o) { this.installType = o; if (this.isPluginInstalled()) { return this.getPlugin().setInstallerType(o) } return false }, setAdditionalPackages: function(o) { if (this.isPluginInstalled()) { return this.getPlugin().setAdditionalPackages(o) } return false }, setEarlyAccess: function(o) { this.EAInstallEnabled = o }, isPlugin2: function() { if (this.isPluginInstalled()) { if (this.versionCheck("1.6.0_10+")) { try { return this.getPlugin().isPlugin2() } catch (o) { } } } return false }, allowPlugin: function() { this.getBrowser(); var o = ("Safari" != this.browserName2 && "Opera" != this.browserName2); return o }, getPlugin: function() { this.refresh(); var o = null; if (this.allowPlugin()) { o = document.getElementById("deployJavaPlugin") } return o }, compareVersionToPattern: function(v, p, r, t) { if (v == undefined || p == undefined) { return false } var w = "^(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)(?:_(\\d+))?)?)?$"; var x = v.match(w); if (x != null) { var u = 0; var y = new Array(); for (var q = 1; q < x.length; ++q) { if ((typeof x[q] == "string") && (x[q] != "")) { y[u] = x[q]; u++ } } var o = Math.min(y.length, p.length); if (t) { for (var q = 0; q < o; ++q) { if (y[q] < p[q]) { return false } else { if (y[q] > p[q]) { return true } } } return true } else { for (var q = 0; q < o; ++q) { if (y[q] != p[q]) { return false } } if (r) { return true } else { return (y.length == p.length) } } } else { return false } }, getBrowser: function() { if (this.browserName == null) { var o = navigator.userAgent.toLowerCase(); g("[getBrowser()] navigator.userAgent.toLowerCase() -> " + o); if ((o.indexOf("msie") != -1) && (o.indexOf("opera") == -1)) { this.browserName = "MSIE"; this.browserName2 = "MSIE" } else { if (o.indexOf("trident") != -1 || o.indexOf("Trident") != -1) { this.browserName = "MSIE"; this.browserName2 = "MSIE" } else { if (o.indexOf("iphone") != -1) { this.browserName = "Netscape Family"; this.browserName2 = "iPhone" } else { if ((o.indexOf("firefox") != -1) && (o.indexOf("opera") == -1)) { this.browserName = "Netscape Family"; this.browserName2 = "Firefox" } else { if (o.indexOf("chrome") != -1) { this.browserName = "Netscape Family"; this.browserName2 = "Chrome" } else { if (o.indexOf("safari") != -1) { this.browserName = "Netscape Family"; this.browserName2 = "Safari" } else { if ((o.indexOf("mozilla") != -1) && (o.indexOf("opera") == -1)) { this.browserName = "Netscape Family"; this.browserName2 = "Other" } else { if (o.indexOf("opera") != -1) { this.browserName = "Netscape Family"; this.browserName2 = "Opera" } else { this.browserName = "?"; this.browserName2 = "unknown" } } } } } } } } g("[getBrowser()] Detected browser name:" + this.browserName + ", " + this.browserName2) } return this.browserName }, testUsingActiveX: function(o) { var q = "JavaWebStart.isInstalled." + o + ".0"; if (typeof ActiveXObject == "undefined" || !ActiveXObject) { g("[testUsingActiveX()] Browser claims to be IE, but no ActiveXObject object?"); return false } try { return (new ActiveXObject(q) != null) } catch (p) { return false } }, testForMSVM: function() { var p = "{08B0E5C0-4FCB-11CF-AAA5-00401C608500}"; if (typeof oClientCaps != "undefined") { var o = oClientCaps.getComponentVersion(p, "ComponentID"); if ((o == "") || (o == "5,0,5000,0")) { return false } else { return true } } else { return false } }, testUsingMimeTypes: function(p) { if (!navigator.mimeTypes) { g("[testUsingMimeTypes()] Browser claims to be Netscape family, but no mimeTypes[] array?"); return false } for (var q = 0; q < navigator.mimeTypes.length; ++q) { s = navigator.mimeTypes[q].type; var o = s.match(/^application\/x-java-applet\x3Bversion=(1\.8|1\.7|1\.6|1\.5|1\.4\.2)$/); if (o != null) { if (this.compareVersions(o[1], p)) { return true } } } return false }, testUsingPluginsArray: function(p) { if ((!navigator.plugins) || (!navigator.plugins.length)) { return false } var o = navigator.platform.toLowerCase(); for (var q = 0; q < navigator.plugins.length; ++q) { s = navigator.plugins[q].description; if (s.search(/^Java Switchable Plug-in (Cocoa)/) != -1) { if (this.compareVersions("1.5.0", p)) { return true } } else { if (s.search(/^Java/) != -1) { if (o.indexOf("win") != -1) { if (this.compareVersions("1.5.0", p) || this.compareVersions("1.6.0", p)) { return true } } } } } if (this.compareVersions("1.5.0", p)) { return true } return false }, IEInstall: function() { location.href = n(((this.returnPage != null) ? ("&returnPage=" + this.returnPage) : "") + ((this.locale != null) ? ("&locale=" + this.locale) : "") + ((this.brand != null) ? ("&brand=" + this.brand) : "")); return false }, done: function(p, o) { }, FFInstall: function() { location.href = n(((this.returnPage != null) ? ("&returnPage=" + this.returnPage) : "") + ((this.locale != null) ? ("&locale=" + this.locale) : "") + ((this.brand != null) ? ("&brand=" + this.brand) : "") + ((this.installType != null) ? ("&type=" + this.installType) : "")); return false }, compareVersions: function(r, t) { var p = r.split("."); var o = t.split("."); for (var q = 0; q < p.length; ++q) { p[q] = Number(p[q]) } for (var q = 0; q < o.length; ++q) { o[q] = Number(o[q]) } if (p.length == 2) { p[2] = 0 } if (p[0] > o[0]) { return true } if (p[0] < o[0]) { return false } if (p[1] > o[1]) { return true } if (p[1] < o[1]) { return false } if (p[2] > o[2]) { return true } if (p[2] < o[2]) { return false } return true }, enableAlerts: function() { this.browserName = null; this.debug = true }, poll: function() { this.refresh(); var o = this.getJREs(); if ((this.preInstallJREList.length == 0) && (o.length != 0)) { clearInterval(this.myInterval); if (this.returnPage != null) { location.href = this.returnPage } } if ((this.preInstallJREList.length != 0) && (o.length != 0) && (this.preInstallJREList[0] != o[0])) { clearInterval(this.myInterval); if (this.returnPage != null) { location.href = this.returnPage } } }, writePluginTag: function() { var o = this.getBrowser(); if (o == "MSIE") { document.write("<" + 'object classid="clsid:CAFEEFAC-DEC7-0000-0001-ABCDEFFEDCBA" ' + 'id="deployJavaPlugin" width="0" height="0">' + "<" + "/" + "object" + ">") } else { if (o == "Netscape Family" && this.allowPlugin()) { this.writeEmbedTag() } } }, refresh: function() { navigator.plugins.refresh(false); var o = this.getBrowser(); if (o == "Netscape Family" && this.allowPlugin()) { var p = document.getElementById("deployJavaPlugin"); if (p == null) { this.writeEmbedTag() } } }, writeEmbedTag: function() { var o = false; if (navigator.mimeTypes != null) { for (var p = 0; p < navigator.mimeTypes.length; p++) { if (navigator.mimeTypes[p].type == this.mimeType) { if (navigator.mimeTypes[p].enabledPlugin) { document.write("<" + 'embed id="deployJavaPlugin" type="' + this.mimeType + '" hidden="true" />'); o = true } } } if (!o) { for (var p = 0; p < navigator.mimeTypes.length; p++) { if (navigator.mimeTypes[p].type == this.oldMimeType) { if (navigator.mimeTypes[p].enabledPlugin) { document.write("<" + 'embed id="deployJavaPlugin" type="' + this.oldMimeType + '" hidden="true" />') } } } } } } }; d.writePluginTag(); if (d.locale == null) { var h = null; if (h == null) { try { h = navigator.userLanguage } catch (f) { } } if (h == null) { try { h = navigator.systemLanguage } catch (f) { } } if (h == null) { try { h = navigator.language } catch (f) { } } if (h != null) { h.replace("-", "_"); d.locale = h } } return d } ();
function createXMLDocument() {


    var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden').value;

    if (window.DOMParser) {
        parser = new DOMParser();
        xmlDoc = parser.parseFromString(dd, "text/xml");
    }
    else // Internet Explorer
    {
        xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc.async = false;
        xmlDoc.loadXML(dd);
    }

    var tryxml = '<' + xmlDoc.getElementsByTagName("FeatureName")[0].childNodes[0].nodeValue + '>\n'

    for (var i = 0; i < xmlDoc.getElementsByTagName("ControlID").length; i++) {

        tryxml += '<' + xmlDoc.getElementsByTagName("ControlLabelData")[i].childNodes[0].nodeValue + '>'
         + document.getElementById(xmlDoc.getElementsByTagName("ControlID")[i].childNodes[0].nodeValue).value +
         '</' + xmlDoc.getElementsByTagName("ControlLabelData")[i].childNodes[0].nodeValue + '>\n';
        alert(tryxml);
    }



    tryxml += '</' + xmlDoc.getElementsByTagName("FeatureName")[0].childNodes[0].nodeValue + '>';
    alert(tryxml);
    websignerPopUp(tryxml);
}
function createXMLDocument_Gridview(TransactionPkdata, GridviewData) {



    var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden_Child').value;

    if (window.DOMParser) {
        parser = new DOMParser();
        xmlDoc_GridALL = parser.parseFromString(dd, "text/xml");
    }
    else // Internet Explorer
    {
        xmlDoc_GridALL = new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc_GridALL.async = false;
        xmlDoc_GridALL.loadXML(dd);
    }


    var grid = document.getElementById(GridviewData);
    var rowscount = grid.rows.length;
    //var tryxml = '<' + xmlDoc.getElementsByTagName("FeatureName")[0].childNodes[0].nodeValue + '>\n'
    var tryxml_gridviewall = '';
    var gridview = document.getElementById(GridviewData);
    for (i = 1; i < gridview.rows.length; i++) {
        var RowNumber = (i + 1).toString();
        if (i < 10)
            RowNumber = "0" + (i + 1).toString();
        tryxml_gridviewall += '<' + xmlDoc_GridALL.getElementsByTagName("FeatureName")[1].childNodes[0].nodeValue + '>\n'
        for (var gridallloopparam = 0; gridallloopparam < xmlDoc_GridALL.getElementsByTagName("ControlID").length; gridallloopparam++) {
            if (TransactionPkdata == xmlDoc_child.getElementsByTagName("TransactionPK")[gridallloopparam].childNodes[0].nodeValue) {
                var element = xmlDoc_GridALL.getElementsByTagName("ControlID")[gridallloopparam].childNodes[0].nodeValue;
                var controldata = gridview.id.toString() + "_ctl" + RowNumber + element;
                var typenumber = xmlDoc_child.getElementsByTagName("ControlType")[gridallloopparam].childNodes[0].nodeValue;

                var label = document.getElementById(gridview.id.toString() + "_ctl" + RowNumber + element);
                if (label == null) {
                }
                else {

                    tryxml_gridviewall += Switchdata(xmlDoc_GridALL, gridallloopparam, controldata, typenumber);

                }
            }
            else { }
        }
        tryxml_gridviewall += '</' + xmlDoc_GridALL.getElementsByTagName("FeatureName")[1].childNodes[0].nodeValue + '>\n';

    }

    return tryxml_gridviewall;

}





function createXMLDocument_Gridview_BoundField(xmlDoc_Boundfield, loopparam, GridviewData) {




    try {
        var grid = document.getElementById(GridviewData);
        var rowscount = grid.rows.length;
        //var tryxml = '<' + xmlDoc.getElementsByTagName("FeatureName")[0].childNodes[0].nodeValue + '>\n'

        var tryxml_gridviewall = '<' + xmlDoc_Boundfield.getElementsByTagName("FeatureName")[loopparam].childNodes[0].nodeValue + '>\n';
        var gridview = document.getElementById(GridviewData);
        for (innerbound = 0; innerbound < gridview.rows.length - 1; innerbound++) {

            //  tryxml_gridviewall = 
            var dump = '0';
            for (outsidebound = 0; outsidebound < gridview.rows[0].cells.length; outsidebound++) {

                tryxml_gridviewall += '<' + gridview.rows[dump].cells[outsidebound].innerHTML + '>'
                  + gridview.rows[innerbound + 1].cells[outsidebound].innerHTML +
             '</' + gridview.rows[dump].cells[outsidebound].innerHTML + '>\n';




            }


        }

        tryxml_gridviewall += '</' + xmlDoc_Boundfield.getElementsByTagName("FeatureName")[loopparam].childNodes[0].nodeValue + '>\n';
        alert(tryxml_gridviewall);
        return tryxml_gridviewall;
    }
    catch (exception) {
        alert(tryxml_gridviewall);
        return tryxml_gridviewall;
    }
}
function createXMLDocument_Gridview_BoundField_Checkbox(xmlDoc_Boundfield, loopparam, TransactionPkdata, GridviewData) {





    try {

        var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden_Child').value;
        var searchitemscheck = 0;
        if (window.DOMParser) {

            parser = new DOMParser();
            xmlDoc_child_grid = parser.parseFromString(dd, "text/xml");
        }
        else // Internet Explorer
        {

            searchitemscheck = 1;
            xmlDoc_child_grid = new ActiveXObject("Microsoft.XMLDOM");
            xmlDoc_child_grid.async = false;
            xmlDoc_child_grid.loadXML(dd);
        }
        alert(xmlDoc_child_grid);
        var searchitems = xmlDoc_child_grid.getElementsByTagName("ControlLabelData");
        var controlid_check = '';
        for (i = 0; i < searchitems.length; i++) {

            var data = "CheckBox";
            //alert(searchitems[i].innerHTML);
            if (searchitemscheck == 1) {
                if (data == searchitems[i].text) {
                    var daaa = xmlDoc_child_grid.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue;
                    if (TransactionPkdata == xmlDoc_child_grid.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue) {
                        controlid_check = xmlDoc_child_grid.getElementsByTagName("ControlID")[i].childNodes[0].nodeValue;

                    }

                }

            }
            else {


                if (data == searchitems[i].innerHTML) {
                    var daaa = xmlDoc_child_grid.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue;
                    if (TransactionPkdata == xmlDoc_child_grid.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue) {
                        controlid_check = xmlDoc_child_grid.getElementsByTagName("ControlID")[i].childNodes[0].nodeValue;

                    }

                }
            }

        }

        var grid = document.getElementById(GridviewData);
        var rowscount = grid.rows.length;
        //var tryxml = '<' + xmlDoc.getElementsByTagName("FeatureName")[0].childNodes[0].nodeValue + '>\n'
        //  var element = xmlDoc_child.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue;

        var tryxml_gridviewall = '<' + xmlDoc_Boundfield.getElementsByTagName("FeatureName")[loopparam].childNodes[0].nodeValue + '>\n';
        var gridview = document.getElementById(GridviewData);
        for (innerbound = 0; innerbound < gridview.rows.length - 1; innerbound++) {
            if (innerbound < 9) {
                RowNumber = "0" + (innerbound + 2).toString();
            }
            else { RowNumber = (innerbound + 2).toString(); }
            //  tryxml_gridviewall = 
            var dump = '0';
            var element = gridview.id.toString() + "_ctl" + (RowNumber) + controlid_check;

            var checkbox = document.getElementById(element);

            for (outsidebound = 0; outsidebound < gridview.rows[0].cells.length - 1; outsidebound++) {

                if (checkbox.checked) {
                    tryxml_gridviewall += '<' + gridview.rows[dump].cells[outsidebound + 1].innerHTML + '>'
                  + gridview.rows[innerbound + 1].cells[outsidebound + 1].innerHTML +
             '</' + gridview.rows[dump].cells[outsidebound + 1].innerHTML + '>\n';

                }


            }


        }

        tryxml_gridviewall += '</' + xmlDoc_Boundfield.getElementsByTagName("FeatureName")[loopparam].childNodes[0].nodeValue + '>\n';

        return tryxml_gridviewall;
    }
    catch (exception) {
        alert(tryxml_gridviewall);
        return tryxml_gridviewall;
    }
}





function createXMLDocument_CheckboxGrid(TransactionPkdata, GridviewData) {


    var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden_Child').value;
    var searchitemscheck = 0;
    if (window.DOMParser) {

        parser = new DOMParser();
        xmlDoc_child = parser.parseFromString(dd, "text/xml");
    }
    else // Internet Explorer
    {
        searchitemscheck = 1;

        xmlDoc_child = new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc_child.async = false;
        xmlDoc_child.loadXML(dd);
    }



    var grid = document.getElementById(GridviewData);
    var rowscount = grid.rows.length;
    var tryxml = '';
    var gridview = document.getElementById(GridviewData);
    var searchitems = xmlDoc_child.getElementsByTagName("ControlLabelData");
    var validcheck = null;

    for (i = 0; i < searchitems.length; i++) {

        var data = "CheckBox";
        //alert(searchitems[i].innerHTML);
        if (searchitemscheck == 1) {
            if (data == searchitems[i].text) {
                var daaa = xmlDoc_child.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue;
                if (TransactionPkdata == xmlDoc_child.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue)
                    validcheck = i;


            }

        }
        else {

            if (data == searchitems[i].innerHTML) {
                var daaa = xmlDoc_child.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue;
                if (TransactionPkdata == xmlDoc_child.getElementsByTagName("TransactionPK")[i].childNodes[0].nodeValue)
                    validcheck = i;


            }
        }


    }




    for (i = 1; i < gridview.rows.length; i++) {
        var p = 0;
        if (i < 9) {
            RowNumber = "0" + (i + 1).toString();
        }
        else { RowNumber = (i + 1).toString(); }

        // var tryxml1 = '<' + xmlDoc_child.getElementsByTagName("FeatureName")[1].childNodes[0].nodeValue + '>\n';
        //var tryxml1 = '';

        for (var j = 0; j < xmlDoc_child.getElementsByTagName("ControlID").length; j++) {

            if (TransactionPkdata == xmlDoc_child.getElementsByTagName("TransactionPK")[j].childNodes[0].nodeValue) {
                var element = xmlDoc_child.getElementsByTagName("ControlID")[j].childNodes[0].nodeValue;

                var Checkboxid = xmlDoc_child.getElementsByTagName("ControlID")[validcheck].childNodes[0].nodeValue;

                var label = document.getElementById(gridview.id.toString() + "_ctl" + RowNumber + element);
                if (label == null) {
                }
                else {


                    var checks = document.getElementById(gridview.id.toString() + "_ctl" + RowNumber + Checkboxid);
                    var idd = gridview.id.toString() + "_ctl" + RowNumber + Checkboxid;
                    var controldata = gridview.id.toString() + "_ctl" + RowNumber + element;
                    var typenumber = xmlDoc_child.getElementsByTagName("ControlType")[j].childNodes[0].nodeValue;

                    if (checks.checked && p == 0) {
                        if (data != xmlDoc_child.getElementsByTagName("ControlLabelData")[j].childNodes[0].nodeValue) {


                            tryxml += '<' + xmlDoc_child.getElementsByTagName("FeatureName")[1].childNodes[0].nodeValue + '>\n';

                            tryxml += Switchdata(xmlDoc_child, j, controldata, typenumber);
                            p++;
                        }
                    }
                    else if (checks.checked) {

                        if (data != xmlDoc_child.getElementsByTagName("ControlLabelData")[j].childNodes[0].nodeValue) {
                            tryxml += Switchdata(xmlDoc_child, j, controldata, typenumber);

                        }

                    }
                }
            }
            else {

                //                alert(xmlDoc_child.getElementsByTagName("TransactionPK")[j].childNodes[0].nodeValue);
            }
        }
        if (p != 0) {
            tryxml += '</' + xmlDoc_child.getElementsByTagName("FeatureName")[1].childNodes[0].nodeValue + '>\n';
        }

    }
    //  tryxml += '</' + xmlDoc_child.getElementsByTagName("FeatureName")[0].childNodes[0].nodeValue + '>\n';


    return tryxml;

    //  websignerPopUp(tryxml);

}

function createXMLDocument_Javascript() {

    if (document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1').checked) {
        //    alert('entered');
        var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden').value;
        alert(dd);
        if (window.DOMParser) {
            parser = new DOMParser();
            xmlDoc1 = parser.parseFromString(dd, "text/xml");
        }
        else // Internet Explorer
        {
            xmlDoc1 = new ActiveXObject("Microsoft.XMLDOM");
            xmlDoc1.async = false;
            xmlDoc1.loadXML(dd);
        }


        var grid = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
        // var rowscount = grid.rows.length;


        var tryxml = '<' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n'
        var gridview = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
        var searchitems_loop = xmlDoc1.getElementsByTagName("ControlLabelData");
        var validcheck = null;
        var datareturncheck = null;
        for (loopparam = 0; loopparam < searchitems_loop.length; loopparam++) {
            var typedata = xmlDoc1.getElementsByTagName("SwitchData")[loopparam].childNodes[0].nodeValue;
            var TransactionPkdata = xmlDoc1.getElementsByTagName("TransactionPK")[loopparam].childNodes[0].nodeValue;
            var controlidval = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue;
            var GridviewData = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue
            var data = "CheckBox";

            switch (typedata) {
                case "1": //TextBoxData
                    datareturncheck = calltextboxdata(xmlDoc1, loopparam, controlidval);
                    break;
                case "2": //Labeldata
                    datareturncheck = calllabeldata(xmlDoc1, loopparam, controlidval);
                    break;
                case "3": //Single CheckBox Checked Data
                    datareturncheck = callSinglecheckboxdata(loopparam, controlidval);
                    break;
                case "4": // Checkbox data list
                    datareturncheck = callCheckboxdatatext(xmlDoc1, loopparam, controlidval);
                    break;
                case "5": //Dropdownlist data value
                    datareturncheck = calldropdownlistdatavalue(xmlDoc1, loopparam, controlidval);
                    break;
                case "6": //Dropdownlist data text
                    datareturncheck = calldropdownlistdatatext(xmlDoc1, loopparam, controlidval);
                    break;
                case "7": //Listbox data value
                    datareturncheck = callListboxdatavalue(xmlDoc1, loopparam, controlidval);
                    break;
                case "8": //Listbox data text
                    datareturncheck = callListboxdatatext(xmlDoc1, loopparam, controlidval);
                    break;
                case "9": //radio button list data text
                    datareturncheck = callradiobuttonlistdatatext(xmlDoc1, loopparam, controlidval);
                    break;
                case "10": //radio button list data value
                    datareturncheck = callradiobuttonlistdatavalue(xmlDoc1, loopparam, controlidval);
                    break;
                case "11": //Gridview Boundfield
                    datareturncheck = createXMLDocument_Gridview_BoundField(xmlDoc1, loopparam, GridviewData);
                    break;
                case "12": //Gridview BoundfieldCheckbox
                    datareturncheck = createXMLDocument_Gridview_BoundField_Checkbox(xmlDoc1, loopparam, TransactionPkdata, GridviewData);
                    break;
                case "13": //All GridViewData with Templatefields
                    datareturncheck = createXMLDocument_Gridview(TransactionPkdata, GridviewData);
                    break;
                case "14": //All Checkbox Gridview data with Templatefields
                    datareturncheck = createXMLDocument_CheckboxGrid(TransactionPkdata, GridviewData);
                    break;
                case "16": //added by vaibhav for image controls
                    datareturncheck = CreateXmlDocument_ImageName(xmlDoc1, loopparam, controlidval);
                    break;

 case "17": //added by vaibhav for image controls
            datareturncheck = CreateXmlDocument_FileUpload(xmlDoc1, loopparam, controlidval);
            break;

 case "18": //hidden field
                datareturncheck = callhiddendata(xmlDoc1, loopparam, controlidval);
                break;
            case "19": //Anchor tag   Praveen Sagar
                datareturncheck = callanchorata(xmlDoc1, loopparam, controlidval);
                break;
            case "20": //All GridViewData with Templatefields in table data
                datareturncheck = createXMLDocument_GridviewTable(TransactionPkdata, loopparam, GridviewData);
                break;




                default:
                    datareturncheck = "";
                    break;


            }

            if (datareturncheck != null) {


                //  alert(datareturncheck);
                tryxml += datareturncheck;
            }


            //  alert(tryxml);
        }
        tryxml += '</' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n';
         alert(tryxml);



        websignerPopUp(tryxml);
    }
    else { alert('Continuing without Datasignature'); }
}
function createXMLDocument_JavascriptForVerification1(data) { // added by vaibhav for the verification process in the benefit calculation pages XML creation dynamically



    var dd = data;
   
     //alert(dd); 
     
    if (window.DOMParser) {
        parser = new DOMParser();
        xmlDoc1 = parser.parseFromString(dd, "text/xml");
    }
    else // Internet Explorer
    {
        xmlDoc1 = new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc1.async = false;
        xmlDoc1.loadXML(dd);
    }



    var grid = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
    // var rowscount = grid.rows.length;


    var tryxml = '<' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n'
    var gridview = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
    var searchitems_loop = xmlDoc1.getElementsByTagName("ControlLabelData");
    var validcheck = null;
    var datareturncheck = null;
    for (loopparam = 0; loopparam < searchitems_loop.length; loopparam++) {
        var typedata = xmlDoc1.getElementsByTagName("SwitchData")[loopparam].childNodes[0].nodeValue;
        var TransactionPkdata = xmlDoc1.getElementsByTagName("TransactionPK")[loopparam].childNodes[0].nodeValue;
        var controlidval = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue;
        var GridviewData = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue
        var data = "CheckBox";

        switch (typedata) {
            case "1": //TextBoxData
                datareturncheck = calltextboxdata(xmlDoc1, loopparam, controlidval);
                break;
            case "2": //Labeldata
                datareturncheck = calllabeldata(xmlDoc1, loopparam, controlidval);
                break;
            case "3": //Single CheckBox Checked Data
                datareturncheck = callSinglecheckboxdata(loopparam, controlidval);
                break;
            case "4": // Checkbox data list
                datareturncheck = callCheckboxdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "5": //Dropdownlist data value
                datareturncheck = calldropdownlistdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "6": //Dropdownlist data text
                datareturncheck = calldropdownlistdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "7": //Listbox data value
                datareturncheck = callListboxdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "8": //Listbox data text
                datareturncheck = callListboxdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "9": //radio button list data text
                datareturncheck = callradiobuttonlistdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "10": //radio button list data value
                datareturncheck = callradiobuttonlistdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "11": //Gridview Boundfield
                datareturncheck = createXMLDocument_Gridview_BoundField(xmlDoc1, loopparam, GridviewData);
                break;
            case "12": //Gridview BoundfieldCheckbox
                datareturncheck = createXMLDocument_Gridview_BoundField_Checkbox(xmlDoc1, loopparam, TransactionPkdata, GridviewData);
                break;
            case "13": //All GridViewData with Templatefields
                datareturncheck = createXMLDocument_Gridview(TransactionPkdata, GridviewData);
                break;
            case "14": //All Checkbox Gridview data with Templatefields
                datareturncheck = createXMLDocument_CheckboxGrid(TransactionPkdata, GridviewData);
                break;
            case "16": //added by vaibhav for image controls
                datareturncheck = CreateXmlDocument_ImageName(xmlDoc1, loopparam, controlidval);
                break;

 	case "17":// Upload Control
            datareturncheck = CreateXmlDocument_FileUpload(xmlDoc1, loopparam, controlidval);
            break;
            
            case "18": //hidden field
                datareturncheck = callhiddendata(xmlDoc1, loopparam, controlidval);
                break;
            case "19": //Anchor tag   Praveen Sagar
                datareturncheck = callanchorata(xmlDoc1, loopparam, controlidval);
                break;
            case "20": //All GridViewData with Templatefields in table data
                datareturncheck = createXMLDocument_GridviewTable(TransactionPkdata, loopparam, GridviewData);
                break;



            default:
                datareturncheck = "";
                break;


        }

        if (datareturncheck != null) {


            //alert(datareturncheck);
            tryxml += datareturncheck;
        }


       //alert(tryxml);
    }
    tryxml += '</' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n';
    //alert(tryxml);
  //  document.getElementById('ctl00_HomePageContent_Xmldatahidden').value = tryxml;
    return tryxml;
    //alert(document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent').value);


    // websignerPopUp(tryxml); only popup not need
    // }
    //else { alert('Continuing without Datasignature'); }
}



function CreateXmlDocument_FileUpload(Xmldocparamval, ivalue, controlidvaldata) {
if (document.getElementById(controlidvaldata)) {
alert(document.getElementById(controlidvaldata).value);
if (document.getElementById(controlidvaldata).value != "") {
var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
+ document.getElementById(controlidvaldata).value +
'</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
}
else {
var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
+ '0' +
'</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
}
}
else {
var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
+ '0' +
'</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
}
return stringreturn;
}


function callanchorata(Xmldocparamval, ivalue, controlidvaldata) {

    if (document.getElementById(controlidvaldata)) {
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + document.getElementById(controlidvaldata).innerHTML +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }
    else {
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + '0' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }
    return stringreturn;
}

function createXMLDocument_JavascriptForVerification() { // added by vaibhav for the verification process in the benefit calculation pages XML creation dynamically
 
 
 
    var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden').value;
    //  alert(dd);
    if (window.DOMParser) {
        parser = new DOMParser();
        xmlDoc1 = parser.parseFromString(dd, "text/xml");
    }
    else // Internet Explorer
    {
        xmlDoc1 = new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc1.async = false;
        xmlDoc1.loadXML(dd);
    }
 
 
 
    var grid = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
    // var rowscount = grid.rows.length;
 
 
    var tryxml = '<' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n'
    var gridview = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
    var searchitems_loop = xmlDoc1.getElementsByTagName("ControlLabelData");
    var validcheck = null;
    var datareturncheck = null;
    for (loopparam = 0; loopparam < searchitems_loop.length; loopparam++) {
        var typedata = xmlDoc1.getElementsByTagName("SwitchData")[loopparam].childNodes[0].nodeValue;
        var TransactionPkdata = xmlDoc1.getElementsByTagName("TransactionPK")[loopparam].childNodes[0].nodeValue;
        var controlidval = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue;
        var GridviewData = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue
        var data = "CheckBox";
 
        switch (typedata) {
            case "1": //TextBoxData
                datareturncheck = calltextboxdata(xmlDoc1, loopparam, controlidval);
                break;
            case "2": //Labeldata
                datareturncheck = calllabeldata(xmlDoc1, loopparam, controlidval);
                break;
            case "3": //Single CheckBox Checked Data
                datareturncheck = callSinglecheckboxdata(loopparam, controlidval);
                break;
            case "4": // Checkbox data list
                datareturncheck = callCheckboxdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "5": //Dropdownlist data value
                datareturncheck = calldropdownlistdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "6": //Dropdownlist data text
                datareturncheck = calldropdownlistdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "7": //Listbox data value
                datareturncheck = callListboxdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "8": //Listbox data text
                datareturncheck = callListboxdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "9": //radio button list data text
                datareturncheck = callradiobuttonlistdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "10": //radio button list data value
                datareturncheck = callradiobuttonlistdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "11": //Gridview Boundfield
                datareturncheck = createXMLDocument_Gridview_BoundField(xmlDoc1, loopparam, GridviewData);
               break;
            case "12": //Gridview BoundfieldCheckbox
                datareturncheck = createXMLDocument_Gridview_BoundField_Checkbox(xmlDoc1, loopparam, TransactionPkdata, GridviewData);
                break;
            case "13": //All GridViewData with Templatefields
                datareturncheck = createXMLDocument_Gridview(TransactionPkdata, GridviewData);
                break;
            case "14": //All Checkbox Gridview data with Templatefields
                datareturncheck = createXMLDocument_CheckboxGrid(TransactionPkdata, GridviewData);
                break;
            case "16": //added by vaibhav for image controls
                datareturncheck = CreateXmlDocument_ImageName(xmlDoc1, loopparam, controlidval);
                break;
 
 
           case "17": //added by vaibhav for image controls
            datareturncheck = CreateXmlDocument_FileUpload(xmlDoc1, loopparam, controlidval);
            break;
 
  case "18": //hidden field
                datareturncheck = callhiddendata(xmlDoc1, loopparam, controlidval);
                break;
            case "19": //Anchor tag   Praveen Sagar
                datareturncheck = callanchorata(xmlDoc1, loopparam, controlidval);
                break;
            case "20": //All GridViewData with Templatefields in table data
                datareturncheck = createXMLDocument_GridviewTable(TransactionPkdata, loopparam, GridviewData);
                break;

 
 
            default:
                datareturncheck = "";
                break;
 
 
        }
 
        if (datareturncheck != null) {
 
 
            //  alert(datareturncheck);
            tryxml += datareturncheck;
        }
 
 
        //  alert(tryxml);
    }
    tryxml += '</' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n';
    // alert(tryxml);
    document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent').value = tryxml;
 
    //alert(document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent').value);
 
 
    // websignerPopUp(tryxml); only popup not need
    // }
    // else { alert('Continuing without Datasignature'); }
}
 


function Switchdata(xmlDocval, loopparam, controlidval, caseval) {

    switch (caseval) {
        case "1": //TextBoxData
            datareturncheck = calltextboxdata(xmlDocval, loopparam, controlidval);
            break;
        case "2": //Labeldata
            datareturncheck = calllabeldata(xmlDocval, loopparam, controlidval);
            break;
        case "3": //Single CheckBox Checked Data
            datareturncheck = callSinglecheckboxdata(loopparam, controlidval);
            break;
        case "4": // Checkbox data list
            datareturncheck = callCheckboxdatatext(xmlDocval, loopparam, controlidval);
            break;
        case "5": //Dropdownlist data value
            datareturncheck = calldropdownlistdatavalue(xmlDocval, loopparam, controlidval);
            break;
        case "6": //Dropdownlist data text
            datareturncheck = calldropdownlistdatatext(xmlDocval, loopparam, controlidval);
            break;
        case "7": //Listbox data value
            datareturncheck = callListboxdatavalue(xmlDocval, loopparam, controlidval);
            break;
        case "8": //Listbox data text
            datareturncheck = callListboxdatatext(xmlDocval, loopparam, controlidval);
            break;
        case "9": //radio button list data text
            datareturncheck = callradiobuttonlistdatatext(xmlDocval, loopparam, controlidval);
            break;
        case "10": //radio button list data value
            datareturncheck = callradiobuttonlistdatavalue(xmlDocval, loopparam, controlidval);
            break;
        case "11": //Gridview Boundfield
            datareturncheck = createXMLDocument_Gridview_BoundField(xmlDocval, loopparam, GridviewData);
            break;
        case "12": //Gridview BoundfieldCheckbox
            datareturncheck = createXMLDocument_Gridview_BoundField_Checkbox(xmlDocval, loopparam, TransactionPkdata, GridviewData);
            break;
        case "13": //All GridViewData with Templatefields
            datareturncheck = createXMLDocument_Gridview(TransactionPkdata, GridviewData);
            break;
        case "14": //All Checkbox Gridview data with Templatefields
            datareturncheck = createXMLDocument_CheckboxGrid(TransactionPkdata, GridviewData);
            break;



 case "18": //hidden field
                datareturncheck = callhiddendata(xmlDoc1, loopparam, controlidval);
                break;
            case "19": //Anchor tag   Praveen Sagar
                datareturncheck = callanchorata(xmlDoc1, loopparam, controlidval);
                break;
            case "20": //All GridViewData with Templatefields in table data
                datareturncheck = createXMLDocument_GridviewTable(TransactionPkdata, loopparam, GridviewData);
                break;




        default:
            datareturncheck = "";
            break;


    }

    return datareturncheck;


}
function CreateXmlDocument_ImageName(Xmldocparamval, ivalue, controlidvaldata) {
    if (document.getElementById(controlidvaldata)) {
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + document.getElementById(controlidvaldata).src +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }
    else {
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + '0' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }


    return stringreturn;

} //added by vaibhav for saving imagename.

function calllabeldata(Xmldocparamval, ivalue, controlidvaldata) {

    if (document.getElementById(controlidvaldata)) {

        var control = document.getElementById(controlidvaldata);  //Id is the ClientId of the Linkbutton
        //alert(control.tagName); //
        if (control.tagName == "SPAN") {
            if (document.getElementById(controlidvaldata).value != "") {


                var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + document.getElementById(controlidvaldata).innerHTML +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
            }


            else {
                var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + '0' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
            }

        }

        else {


            if (document.getElementById(controlidvaldata).value != "") {


                var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + document.getElementById(controlidvaldata).value +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
            }
            else {
                var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
              + '0' +
             '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
            }
        }
    }









    else {
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + '0' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }


    return stringreturn;
}



function calltextboxdata(Xmldocparamval, ivalue, controlidvaldata) {
    if (document.getElementById(controlidvaldata)) {
        if (document.getElementById(controlidvaldata).value != "") {
            var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + document.getElementById(controlidvaldata).value.replace(/ /g, '') +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
        }
        else {
            var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + '0' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
        }

    }
    else {
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + '0' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }

    return stringreturn;
}
function callSinglecheckboxdata(ivalue, controlidval) {

    if (document.getElementById(controlidval)) {
        var stringreturn = '<' + xmlDoc1.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[ivalue].childNodes[0].nodeValue).checked +
         '</' + xmlDoc1.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';

    }
    if (document.getElementById(controlidval) == 'ctl00_HomePageContent_chboxP4isattndDisp') {
        controlidval = 'ctl00_HomePageContent_chboxisattndmobDisp';
        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + 'false' +
         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    }
    //    else {
    //        var stringreturn = '<' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
    //         + 'false' +
    //         '</' + Xmldocparamval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
    //    }
    return stringreturn;
}

function websignerPopUp(data) {
    var tbs = data;
    //var signform = document.frmsubmitDSC;

    if (tbs != '') {
        try {
            websignerapplet = document.websignerapplet;
            websignerapplet.open(tbs, "sign", "", "", "emasSubmit()", "emasCancel()");
        }
        catch (e) {
            alert(e);

        }
    }
    else {
        alert('Please enter username to Sign');
        return false;
    }
}
function calldropdownlistdatavalue(xmlDocval, ivalue, controlidval) {


    var e = document.getElementById(controlidval);
    var datanullcheck = "";

    var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
             + e.options[e.selectedIndex].value +
             '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';


    return stringreturn;
}
function calldropdownlistdatatext(xmlDocval, ivalue, controlidval) {


    var e = document.getElementById(controlidval);
    if (e != null) {
        var datanullcheck = "";
        var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
             + e.options[e.selectedIndex].text +
             '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';

    }
    else {
        var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
             + "0" +
             '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';


    }


    return stringreturn;
}

function callradiobuttonlistdatatext(xmlDocval, ivalue, controlidval) {

    var RB1 = document.getElementById(controlidval);
    //alert(RB1);

    if (RB1 != null) {
        var radio = RB1.getElementsByTagName("input");

        var label = RB1.getElementsByTagName("label");
        var selectedtext = "";
        var i = 0;
        //alert(radio.length);
        for (var i = 0; i < radio.length; i++) {

            if (radio[i].checked) {

                selectedtext += label[i].innerHTML;

                //alert("SelectedValue = " + radio[i].value);

                i++;

            }
            if (i != 0) {
                var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
                 + selectedtext +
                 '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
            }
            else {

                var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
            + selectedtext +
            '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';


            }

        }
        return stringreturn;
    }
    else {
        var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
            + '0' +
            '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
        return stringreturn;
    }
}


function callradiobuttonlistdatavalue(xmlDocval, ivalue, controlidval) {

    var radiobuttonlist = document.getElementById(controlidval);


    if (radiobuttonlist != null) {
        var radio = radiobuttonlist.getElementsByTagName("input");

        var label = radiobuttonlist.getElementsByTagName("label");
        var selectedtext = "";
        var i = 0;
        for (var i = 0; i < radio.length; i++) {

            if (radio[i].checked) {

                selectedtext += radio[i].value;

                //      alert("SelectedValue = " + radio[i].value);

                i++;

            }

            if (i != 0) {
                var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
                 + selectedtext +
                 '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';

            }
            else {
                var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
                     + selectedtext +
                     '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
            }


        }

        return stringreturn;
    }
    else {

        var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
                     + '0' +
                     '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';
        return stringreturn;
    }

}


function callListboxdatatext(xmlDocval, ivalue, controlidval) {

    var RB1 = document.getElementById(controlidval);

    var radio = RB1.getElementsByTagName("input");

    var label = RB1.getElementsByTagName("label");
    var selectedtext = "";



    for (var i = 0; i < radio.length; i++) {

        if (radio[i].checked) {

            selectedtext += label[i].innerHTML;

            //      alert("SelectedValue = " + radio[i].value);



        }
        var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
             + selectedtext +
             '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';


        return stringreturn;
    }

}
function callCheckboxdatatext(xmlDocval, ivalue, controlidval) {

    var RB1 = document.getElementById(controlidval);

    var radio = RB1.getElementsByTagName("input");

    var label = RB1.getElementsByTagName("label");
    var selectedtext = "";



    for (var Checkboxlistloop = 0; Checkboxlistloop < radio.length; Checkboxlistloop++) {

        if (radio[Checkboxlistloop].checked) {

            selectedtext += label[Checkboxlistloop].innerHTML + ",";

            //      alert("SelectedValue = " + radio[i].value);



        }



    }
    var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
 + selectedtext +
 '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';

    return stringreturn;

}

function callListboxdatavalue(xmlDocval, ivalue, controlidval) {




    //var sel = document.getElementbyId(controlidval);
    //alert(sel);
    //var optsLength = sel.options.length;
    //alert(optsLength);
    //for (var i = 0; i < optsLength; i++) {
    //    alert('hi');
    //    if (sel.options[i].checked) alert(sel.options[i].text);
    //}



    //return "nani";

    var radiobuttonlist = document.getElementById(controlidval);


    var selectedtext = "";
    var i = 0;
    for (var i = 0; i < radiobuttonlist.length; i++) {

        if (radiobuttonlist[i].selected) {

            selectedtext += radiobuttonlist[i].innerHTML;

            //      alert("SelectedValue = " + radio[i].value);

            i++;

        }
        if (i != 0) {
            var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + selectedtext +
         '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';


            return stringreturn;
        }
        else {

            var stringreturn = '<' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>'
         + selectedtext +
         '</' + xmlDocval.getElementsByTagName("FeatureName")[ivalue].childNodes[0].nodeValue + '>\n';


            return stringreturn;


        }
    }



}



var websignerapplet;
var websignerapplet1;
function websignerPopUpNI(data) {

    try {


        data = data.replace(/\n/g, "");

        // remove whitespace (space and tabs) before tags
        data = data.replace(/[\t ]+\</g, "<");

        // remove whitespace after tags
        data = data.replace(/\>[\t ]+$/g, ">");


        //alert(data);
        //alert(document.getElementById('ctl00_HomePageContent_hdnXmlChild'));
        document.getElementById('ctl00_HomePageContent_hdnXmlChild1').value = data;
        var tbs = data;
        //var signform = document.frmsubmitDSC;

        if (tbs != '') {

            websignerapplet = document.websignerapplet;
            websignerapplet.open(tbs, "sign", "", "", "emasSubmitclaim()", "emasCancelNI()");

        }
        else {
            alert('Please enter username to Sign');
            return false;
        }
    }
    catch (e) {

        alert(e);

    }
}


//NIKITA//



function websignerPopUp(data) {

    try {


        data = data.replace(/\n/g, "");

        // remove whitespace (space and tabs) before tags
        data = data.replace(/[\t ]+\</g, "<");

        // remove whitespace after tags
        data = data.replace(/\>[\t ]+$/g, ">");



        alert(data);
        alert(document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent'));
        document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent').value = data;
        var tbs = data;
        //var signform = document.frmsubmitDSC;

        if (tbs != '') {

            websignerapplet = document.websignerapplet;
            websignerapplet.open(tbs, "sign", "", "", "emasSubmit()", "emasCancel()");

        }
        else {
            alert('Please enter username to Sign');
            return false;
        }
    }
    catch (e) {

        alert(e);

    }
}
//NIKITA//


    function emasSubmitclaim()
    {


        var signData = websignerapplet.getGeneratedSignature();

        //alert(signData);



        document.getElementById('ctl00_HomePageContent_hdnhash').value = signData;
        document.getElementById('ctl00_HomePageContent_CheckBox1').checked = false;
        //alert(signData);
        var buttonid = document.getElementById('ctl00_HomePageContent_submit').id;
        
        
        Checksubmitdata(buttonid);

    }
    
    
 
 




function websignerPopUp1() {
    var tbs = "This is sampletesting";
    //var signform = document.frmsubmitDSC;

    if (tbs != '') {

        websignerapplet = document.websignerapplet;
        websignerapplet.open(tbs, "sign", "", "", "emasSubmit()", "emasCancel()");

    }
    else {
        alert('Please enter username to Sign');
        return false;
    }
}
function Checksubmitdata(buttonid) {

    var mySplitResult;
    var submitclickbutton;
    var Submitclickbuttonid;
    mySplitResult = buttonid.split(',');



    if (mySplitResult.length > 1) {
        for (i = 0; i < mySplitResult.length; i++) {
            submitclickbutton = document.getElementById(mySplitResult[i]);
            Submitclickbuttonid = mySplitResult[i];


            if (submitclickbutton == null) {


            }

            else {

                document.getElementById(Submitclickbuttonid).click();

            }


        }
    }
    else {

        submitclickbutton = mySplitResult;
        document.getElementById(submitclickbutton).click();

    }




}



function emasSubmit() {


    var signData = websignerapplet.getGeneratedSignature();

    //document.getElementById("signData").value = signData;
    //
    document.getElementById("ctl00_HomePageContent_HashDataValue").value = signData;
    document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1').checked = false;
    alert(signData);
    var buttonid = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_ButtonIDHash').value;
    Checksubmitdata(buttonid);

    //document.getElementById(buttonid).click();


    //  alert('done');



    //  var commonName = websignerapplet.getCommonNameOfSigner();

}

function emasCancelNI() {
    alert('emas cancelled');


  document.getElementById('ctl00_HomePageContent_cover').style.display = 'none';
    //document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent').value = ""; //added by vaibhav to clear message 2878
//ctl00_HomePageContent_cover
var button_Id= document.getElementById('ctl00_HomePageContent_cover').value;
      button_Id.style.display = 'none';
}


function emasCancel() {
    alert('emas cancelled');
    document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_OrginalXMLContent').value = ""; //added by vaibhav to clear message 2878

}
function toggle(div_id) {
    var el = document.getElementById(div_id);
    if (el.style.display == 'none') { el.style.display = 'block'; }
    else { el.style.display = 'none'; }
}
function blanket_size(popUpDivVar) {
    if (typeof window.innerWidth != 'undefined') {
        viewportheight = window.innerHeight;
    } else {
        viewportheight = document.documentElement.clientHeight;
    }
    if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
        blanket_height = viewportheight;
    } else {
        if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
            blanket_height = document.body.parentNode.clientHeight;
        } else {
            blanket_height = document.body.parentNode.scrollHeight;
        }
    }
    var blanket = document.getElementById('blanket');
    blanket.style.height = blanket_height + 'px';
    var popUpDiv = document.getElementById(popUpDivVar);
    popUpDiv_height = blanket_height / 2 - 200;
    popUpDiv.style.top = popUpDiv_height + 'px';
}
function window_pos(popUpDivVar) {
    if (typeof window.innerWidth != 'undefined') {
        viewportwidth = window.innerHeight;
    } else {
        viewportwidth = document.documentElement.clientHeight;
    }
    if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
        window_width = viewportwidth;
    } else {
        if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
            window_width = document.body.parentNode.clientWidth;
        } else {
            window_width = document.body.parentNode.scrollWidth;
        }
    }
    var popUpDiv = document.getElementById(popUpDivVar);
    window_width = window_width / 2 - 200;
    popUpDiv.style.left = window_width + 'px';
}
function Showmodalpopup(windowname) {
    blanket_size(windowname);
    window_pos(windowname);
    toggle('blanket');
    toggle(windowname);
}



function ShowmodalpopupNI(windowname) {
 
    if (Page_ClientValidate("")) {
 //document.getElementById('ctl00_HomePageContent_CheckBox1').checked = false;
        //alert('its valid');
        //document.getElementById('<%=cover.ClientID %>').style.display = 'none';
 
        blanket_size(windowname);
        window_pos(windowname);
        toggle('blanket');
        toggle(windowname);
     
        
        
        
        //block
    }
    else {
       // alert('it is not valid');
        if (document.getElementById('ctl00_HomePageContent_CheckBox1') != null) {

 

            document.getElementById('ctl00_HomePageContent_CheckBox1').checked =false;

        }

        document.getElementById('<%=cover.ClientID %>').style.display = 'none';
 
        //document.getElementById('ctl00_HomePageContent_CheckBox1').checked = false;

       

     
        
        
        //document.getElementById('ctl00_HomePageContent_cover').style.display = 'inline';
   
    //unblocl
    }
 
 
//if(Page_ClientValidate(""))
     //alert('its valid');
   
}



function Showmodalpopup1(windowname) {
    blanket_size(windowname);
    window_pos(windowname);
    toggle('blanket');
    toggle(windowname);

 if (document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1') != null)

     {

        document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1').checked = false;
}
 document.getElementById('ctl00_HomePageContent_btnPnl').checked = false;

    //document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1').checked = false;
}
function createEmployeeXMLDocument_Javascript() {

    var xmlchilddata;
    if (document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1') != null) {
        var fileName = location.pathname.split("/").slice(-1);
        if (document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_CheckBox1').checked) {
            var dd = document.getElementById('ctl00_HomePageContent_DigitalSignatureComp1_Xmldatahidden').value;
            var xmlParent;
            xmlParent = dd;
            websignerPopUp(xmlParent);
        }
    }
}





function GenerateXMLDocument_Javascript(dd) {
    if (window.DOMParser) {
        parser = new DOMParser();
        xmlDoc1 = parser.parseFromString(dd, "text/xml");
    }
    else // Internet Explorer
    {
        xmlDoc1 = new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc1.async = false;
        xmlDoc1.loadXML(dd);
    }
    var grid = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
    var tryxml = '<' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n'
    var gridview = document.getElementById(xmlDoc1.getElementsByTagName("ControlID")[0].childNodes[0].nodeValue);
    var searchitems_loop = xmlDoc1.getElementsByTagName("ControlLabelData");
    var validcheck = null;
    var datareturncheck = null;
    for (loopparam = 0; loopparam < searchitems_loop.length; loopparam++) {
        var typedata = xmlDoc1.getElementsByTagName("SwitchData")[loopparam].childNodes[0].nodeValue;
        var TransactionPkdata = xmlDoc1.getElementsByTagName("TransactionPK")[loopparam].childNodes[0].nodeValue;
        var controlidval = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue;
        var GridviewData = xmlDoc1.getElementsByTagName("ControlID")[loopparam].childNodes[0].nodeValue
        var data = "CheckBox";

        switch (typedata) {
            case "1": //TextBoxData
                datareturncheck = calltextboxdata(xmlDoc1, loopparam, controlidval);
                break;
            case "2": //Labeldata
                datareturncheck = calllabeldata(xmlDoc1, loopparam, controlidval);
                break;
            case "3": //Single CheckBox Checked Data
                datareturncheck = callSinglecheckboxdata(loopparam, controlidval);
                break;
            case "4": // Checkbox data list
                datareturncheck = callCheckboxdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "5": //Dropdownlist data value
                datareturncheck = calldropdownlistdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "6": //Dropdownlist data text
                datareturncheck = calldropdownlistdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "7": //Listbox data value
                datareturncheck = callListboxdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "8": //Listbox data text
                datareturncheck = callListboxdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "9": //radio button list data text
                datareturncheck = callradiobuttonlistdatatext(xmlDoc1, loopparam, controlidval);
                break;
            case "10": //radio button list data value
                datareturncheck = callradiobuttonlistdatavalue(xmlDoc1, loopparam, controlidval);
                break;
            case "11": //Gridview Boundfield
                datareturncheck = createXMLDocument_Gridview_BoundField(xmlDoc1, loopparam, GridviewData);
                break;
            case "12": //Gridview BoundfieldCheckbox
                datareturncheck = createXMLDocument_Gridview_BoundField_Checkbox(xmlDoc1, loopparam, TransactionPkdata, GridviewData);
                break;
            case "13": //All GridViewData with Templatefields
                datareturncheck = createXMLDocument_Gridview(TransactionPkdata, loopparam, GridviewData);
                break;
            case "14": //All Checkbox Gridview data with Templatefields
                datareturncheck = createXMLDocument_CheckboxGrid(TransactionPkdata, GridviewData);
                break;
            case "16": //added by vaibhav for image controls
                datareturncheck = CreateXmlDocument_ImageName(xmlDoc1, loopparam, controlidval);
                break;
            /* case "17": //added by vaibhav for image controls
            datareturncheck = CreateXmlDocument_FileUpload(xmlDoc1, loopparam, controlidval);
            break;
            */ 
            case "18": //hidden field
                datareturncheck = callhiddendata(xmlDoc1, loopparam, controlidval);
                break;
            case "19": //Anchor tag   Praveen Sagar
                datareturncheck = callanchorata(xmlDoc1, loopparam, controlidval);
                break;
            case "20": //All GridViewData with Templatefields in table data
                datareturncheck = createXMLDocument_GridviewTable(TransactionPkdata, loopparam, GridviewData);
                break;

            default:
                datareturncheck = "";
                break;
        }
        if (datareturncheck != null) {
            tryxml += datareturncheck;
        }
    }
    tryxml += '</' + xmlDoc1.getElementsByTagName("Page_Name")[0].childNodes[0].nodeValue + '>\n';
    return tryxml;
}




