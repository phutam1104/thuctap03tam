<script>
  var isIE11=!!window.MSInputMethodContext&&!!document.documentMode;isIE11&&(!Array.from&&(Array.from=function(){var a=Object.prototype.toString,b=function(b){return"function"==typeof b||"[object Function]"===a.call(b)},c=function(a){var b=+a;return isNaN(b)?0:0!=b&&isFinite(b)?(0<b?1:-1)*Math.floor(Math.abs(b)):b},d=Math.pow(2,53)-1,e=function(a){var b=c(a);return Math.min(Math.max(b,0),d)};return function(a){var c=this,d=Object(a);if(null==a)throw new TypeError("Array.from requires an array-like object - not null or undefined");var f,g=1<arguments.length?arguments[1]:void 0;if("undefined"!=typeof g){if(!b(g))throw new TypeError("Array.from: when provided, the second argument must be a function");2<arguments.length&&(f=arguments[2])}for(var h,i=e(d.length),j=b(c)?Object(new c(i)):Array(i),l=0;l<i;)h=d[l],j[l]=g?"undefined"==typeof f?g(h,l):g.call(f,h,l):h,l+=1;return j.length=i,j}}()),!String.prototype.endsWith&&(String.prototype.endsWith=function(a,b){var c=this.toString();("number"!=typeof b||!isFinite(b)||Math.floor(b)!==b||b>c.length)&&(b=c.length),b-=a.length;var d=c.indexOf(a,b);return-1!==d&&d===b}));
  var tmpPrint=0;window.onload=function(){0===tmpPrint&&(tmpPrint=1,setTimeout(function(){var e=document.createElement("link");e.type="text/css",e.rel="stylesheet",e.href='@asset("styles/print.css")',e.media="print",document.getElementsByTagName("head")[0].appendChild(e)},3e3))};
  (function (e, t) { typeof module != "undefined" && module.exports ? module.exports = t() : typeof define == "function" && define.amd ? define(t) : this[e] = t() })("$script", function () { function p(e, t) { for (var n = 0, i = e.length; n < i; ++n)if (!t(e[n])) return r; return 1 } function d(e, t) { p(e, function (e) { return t(e), 1 }) } function v(e, t, n) { function g(e) { return e.call ? e() : u[e] } function y() { if (!--h) { u[o] = 1, s && s(); for (var e in f) p(e.split("|"), g) && !d(f[e], g) && (f[e] = []) } } e = e[i] ? e : [e]; var r = t && t.call, s = r ? t : n, o = r ? e.join("") : t, h = e.length; return setTimeout(function () { d(e, function t(e, n) { if (e === null) return y(); !n && !/^https?:\/\//.test(e) && c && (e = e.indexOf(".js") === -1 ? c + e + ".js" : c + e); if (l[e]) return o && (a[o] = 1), l[e] == 2 ? y() : setTimeout(function () { t(e, !0) }, 0); l[e] = 1, o && (a[o] = 1), m(e, y) }) }, 0), v } function m(n, r) { var i = e.createElement("script"), u; i.onload = i.onerror = i[o] = function () { if (i[s] && !/^c|loade/.test(i[s]) || u) return; i.onload = i[o] = null, u = 1, l[n] = 2, r() }, i.async = 1, i.src = h ? n + (n.indexOf("?") === -1 ? "?" : "&") + h : n, t.insertBefore(i, t.lastChild) } var e = document, t = e.getElementsByTagName("head")[0], n = "string", r = !1, i = "push", s = "readyState", o = "onreadystatechange", u = {}, a = {}, f = {}, l = {}, c, h; return v.get = m, v.order = function (e, t, n) { (function r(i) { i = e.shift(), e.length ? v(i, r) : v(i, t, n) })() }, v.path = function (e) { c = e }, v.urlArgs = function (e) { h = e }, v.ready = function (e, t, n) { e = e[i] ? e : [e]; var r = []; return !d(e, function (e) { u[e] || r[i](e) }) && p(e, function (e) { return u[e] }) ? t() : !function (e) { f[e] = f[e] || [], f[e][i](t), n && n(r) }(e.join("|")), v }, v.done = function (e) { v([null], e) }, v })
  ;(function(){window.whenDefined=function(a,b,c){a[b]?c():Object.defineProperty(a,b,{configurable:!0,enumerable:!0,writeable:!0,get:function(){return this["_"+b]},set:function(a){this["_"+b]=a,c()}})}}).call(this);
  if (!String.prototype.endsWith) {
    String.prototype.endsWith = function(searchString, position) {
      var subjectString = this.toString();
      if (typeof position !== 'number' || !isFinite(position) || Math.floor(position) !== position || position > subjectString.length) {
        position = subjectString.length;
      }
      position -= searchString.length;
      var lastIndex = subjectString.indexOf(searchString, position);
      return lastIndex !== -1 && lastIndex === position;
    };
  }

  var AJAX_URL = "@php echo admin_url('admin-ajax.php');"\n"; @endphp";
  var versionJs;
  var scriptVendor = [
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'
  ];
  versionJs = '@asset("scripts/app-desktop.js")';
    if (window.innerWidth < 992) {
      versionJs = '@asset("scripts/app-mobile.js")';
    }
  $script(scriptVendor,'vendor', function () {
    $ = jQuery.noConflict();
    $script([
      versionJs,
    ], 'common', function () {
      $(window).trigger('load');
    });
  });
</script>
<script defer src='@asset("scripts/app.js")'></script>
