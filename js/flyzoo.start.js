var _FLYZOO_SERVER, _FLYZOO_CDN, _FLYZOO_LOADED
window.flyzooLoaderVersion=1;

_FLYZOO_CDN="http://new-cdn-b-flyzoocorporatio.netdna-ssl.com";

 var _FLYZOO_LOADED = (typeof  _FLYZOO_LOADED === 'undefined') ? false : _FLYZOO_LOADED;

doFlyzoo();

function doFlyzoo() {
   
    var ban = ["amduongsu.mobi", "undefinedradio.com",	"soghoot.website","rmx.com.mx","wuxiaworld.com","intelligencequotientconsult.com","cuatrotelevision.tv","k-popstream.com","minikoyuncu.org"];

    for (var i = 0; i < ban.length; i++) {

        if (window.location.href.indexOf(ban[i]) > -1 || window._FlyzooApplicationId == ban[i] ) {
            console.log("Flyzoo - site not allowed");
            return;
        }
    }
	
    var ns = ["livescorehunter","androidaba","enlefko","professormesser","buzz50","crtanionline","investitute","therationalinvestor"];

    for (var i = 0; i < ns.length; i++) {

        if (window.location.href.indexOf(ns[i]) > -1) {
           _FLYZOO_CDN="http://new-cdn-b-flyzoocorporatio.netdna-ssl.com";
        }
    }

    if (!window.jQuery) {
        script = document.createElement('script');
        script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js';
        script.onload = function() { $.noConflict(); loadFlyzoo() };
        document.body.appendChild(script);
		console.log("Flyzoo > Loading jQuery");
    }
    else {
        if (_FLYZOO_LOADED == false) {
            _FLYZOO_LOADED = true;
            loadFlyzoo();
        }
    }
}

function loadFlyzoo() {

    var _head = jQuery('head');

    _head.append('<link>');
    var css = jQuery('head').children(':last');
    css.attr({
        rel: 'stylesheet',
        type: 'text/css',
        href: _FLYZOO_CDN + '/content/flyzoo.embedded.css'
    });
 console.log("Flyzoo > loadFlyzoo()");
  jQuery.ajax({
  cache: true,
  url: _FLYZOO_CDN+ '/scripts/flyzoo.v2.0.0.js',
  dataType: "script"}).done(function() { window.StartFlyzoo(); }).fail(function() { console.log("Flyzoo loading failed"); })

 
}