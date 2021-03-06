<?php
    function getres(){
      $param = array("humid", "temp", "light");
      $result = array();
      $url = 'https://immense-reaches-55030.herokuapp.com/get/';
      $ch = curl_init();
      curl_setopt_array($ch, array(
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36',
              CURLOPT_SSL_VERIFYPEER => false,
              CURLOPT_SSL_VERIFYHOST => false
          )
      );
      foreach ($param as $para){
          curl_setopt($ch ,CURLOPT_URL,$url.$para); 
          array_push($result,curl_exec($ch));
      }
      curl_close($ch);
      return $result;
  }
  $arr = getres();


?>


<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.4.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>Weather</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=4144380127" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_index.css?crc=374030744" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script src="https://webfonts.creativecloud.com/abel:n4:default.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="961"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="shadow museBGSize rounded-corners clearfix grpelem" id="u708"><!-- group -->
     <div class="clearfix grpelem shared_content" id="u1279-4" data-content-guid="u1279-4_content"><!-- content -->
      <p><?php echo $arr[1]; ?> ºC</p>
     </div>
     <div class="shadow rounded-corners clearfix grpelem" id="u1345"><!-- column -->
      <div class="clearfix colelem shared_content" id="u1346-6" data-content-guid="u1346-6_content"><!-- content -->
       <p id="u1346-2">Details</p>
       <p id="u1346-4">Weather now</p>
      </div>
      <div class="clearfix colelem" id="pu1398"><!-- group -->
       <div class="clip_frame grpelem shared_content" id="u1398" data-content-guid="u1398_content"><!-- svg -->
        <img class="svg temp_no_img_src" id="u1394" data-orig-src="images/thermometer.svg?crc=4031485277" width="40" height="40" alt="" data-mu-svgfallback="images/thermometer_poster_.png?crc=129038082" src="images/blank.gif?crc=4208392903"/>
       </div>
       <div class="clearfix grpelem shared_content" id="u1361-4" data-content-guid="u1361-4_content"><!-- content -->
        <p>Temparature</p>
       </div>
       <div class="clearfix grpelem shared_content" id="u1439-4" data-content-guid="u1439-4_content"><!-- content -->
        <p><?php echo $arr[1]; ?> ºC</p>
       </div>
      </div>
      <div class="clearfix colelem" id="pu1392"><!-- group -->
       <div class="clip_frame grpelem shared_content" id="u1392" data-content-guid="u1392_content"><!-- svg -->
        <img class="svg temp_no_img_src" id="u1388" data-orig-src="images/sun.svg?crc=517046787" width="40" height="40" alt="" data-mu-svgfallback="images/sun_poster_.png?crc=162953087" src="images/blank.gif?crc=4208392903"/>
       </div>
       <div class="clearfix grpelem shared_content" id="u1370-4" data-content-guid="u1370-4_content"><!-- content -->
        <p>Illuminance</p>
       </div>
       <div class="clearfix grpelem shared_content" id="u1457-4" data-content-guid="u1457-4_content"><!-- content -->
        <p><?php echo $arr[2]; ?> lux</p>
       </div>
      </div>
      <div class="clearfix colelem" id="pu1404"><!-- group -->
       <div class="clip_frame grpelem shared_content" id="u1404" data-content-guid="u1404_content"><!-- svg -->
        <img class="svg temp_no_img_src" id="u1400" data-orig-src="images/humidity.svg?crc=354702744" width="40" height="40" alt="" data-mu-svgfallback="images/humidity_poster_.png?crc=298497813" src="images/blank.gif?crc=4208392903"/>
       </div>
       <div class="clearfix grpelem shared_content" id="u1379-4" data-content-guid="u1379-4_content"><!-- content -->
        <p>Humidity</p>
       </div>
       <div class="clearfix grpelem shared_content" id="u1466-4" data-content-guid="u1466-4_content"><!-- content -->
        <p><?php echo $arr[0]; ?> %</p>
       </div>
      </div>
     </div>
    </div>
    <div class="browser_width grpelem" id="u118-bw">
     <div class="shadow" id="u118"><!-- group -->
      <div class="clearfix" id="u118_align_to_page">
       <div class="clearfix grpelem shared_content" id="u406-4" data-content-guid="u406-4_content"><!-- content -->
        <p>Weather History</p>
       </div>
       <nav class="MenuBar clearfix grpelem" id="menuu167"><!-- horizontal box -->
        <div class="MenuItemContainer borderbox clearfix grpelem" id="u175"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix colelem" id="u176" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u177-4"><!-- content --><p class="shared_content" data-content-guid="u177-4_0_content">Weather</p></div></a>
        </div>
        <div class="MenuItemContainer borderbox clearfix grpelem" id="u3293"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u3294" href="widgets.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u3295-4"><!-- content --><p class="shared_content" data-content-guid="u3295-4_0_content">Widgets</p></div></a>
        </div>
        <div class="MenuItemContainer borderbox clearfix grpelem" id="u3780"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u3781" href="settings.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u3783-4"><!-- content --><p class="shared_content" data-content-guid="u3783-4_0_content">Settings</p></div></a>
        </div>
       </nav>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="636" data-content-above-spacer="636" data-content-below-spacer="61"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_960" data-min-width="621" data-max-width="960"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="shadow clearfix colelem temp_no_id" data-orig-id="u118"><!-- group -->
     <span class="clearfix grpelem placeholder" data-placeholder-for="u406-4_content"><!-- placeholder node --></span>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu167"><!-- horizontal box -->
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u175"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix colelem temp_no_id" href="index.php" data-orig-id="u176"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem temp_no_id" data-orig-id="u177-4"><!-- content --><span class="placeholder" data-placeholder-for="u177-4_0_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u3293"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem temp_no_id" href="widgets.html" data-orig-id="u3294"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem temp_no_id" data-orig-id="u3295-4"><!-- content --><span class="placeholder" data-placeholder-for="u3295-4_0_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u3780"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem temp_no_id" href="settings.html" data-orig-id="u3781"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem temp_no_id" data-orig-id="u3783-4"><!-- content --><span class="placeholder" data-placeholder-for="u3783-4_0_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <div class="browser_width colelem" id="u708-bw">
     <div class="shadow museBGSize rounded-corners temp_no_id" data-orig-id="u708"><!-- group -->
      <div class="clearfix" id="u708_align_to_page">
       <span class="clearfix grpelem placeholder" data-placeholder-for="u1279-4_content"><!-- placeholder node --></span>
       <div class="shadow rounded-corners clearfix grpelem temp_no_id" data-orig-id="u1345"><!-- column -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u1346-6_content"><!-- placeholder node --></span>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu1398"><!-- group -->
         <span class="clip_frame grpelem placeholder" data-placeholder-for="u1398_content"><!-- placeholder node --></span>
         <span class="clearfix grpelem placeholder" data-placeholder-for="u1361-4_content"><!-- placeholder node --></span>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="u1439-4_content"><!-- placeholder node --></span>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu1392"><!-- group -->
         <span class="clip_frame grpelem placeholder" data-placeholder-for="u1392_content"><!-- placeholder node --></span>
         <span class="clearfix grpelem placeholder" data-placeholder-for="u1370-4_content"><!-- placeholder node --></span>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="u1457-4_content"><!-- placeholder node --></span>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu1404"><!-- group -->
         <span class="clip_frame grpelem placeholder" data-placeholder-for="u1404_content"><!-- placeholder node --></span>
         <span class="clearfix grpelem placeholder" data-placeholder-for="u1379-4_content"><!-- placeholder node --></span>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="u1466-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="727" data-content-above-spacer="726" data-content-below-spacer="62"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_620" data-max-width="620"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="browser_width grpelem temp_no_id" data-orig-id="u708-bw">
     <div class="shadow museBGSize rounded-corners temp_no_id" data-orig-id="u708"><!-- group -->
      <div class="clearfix temp_no_id" data-orig-id="u708_align_to_page">
       <span class="clearfix grpelem placeholder" data-placeholder-for="u1279-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u118-bw">
     <div class="shadow temp_no_id" data-orig-id="u118"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u118_align_to_page">
       <span class="clearfix colelem placeholder" data-placeholder-for="u406-4_content"><!-- placeholder node --></span>
       <nav class="MenuBar clearfix colelem temp_no_id" data-orig-id="menuu167"><!-- horizontal box -->
        <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u175"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix colelem temp_no_id" href="index.php" data-orig-id="u176"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem temp_no_id" data-orig-id="u177-4"><!-- content --><span class="placeholder" data-placeholder-for="u177-4_0_content"><!-- placeholder node --></span></div></a>
        </div>
        <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u3293"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem temp_no_id" href="widgets.html" data-orig-id="u3294"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem temp_no_id" data-orig-id="u3295-4"><!-- content --><span class="placeholder" data-placeholder-for="u3295-4_0_content"><!-- placeholder node --></span></div></a>
        </div>
        <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u3780"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem temp_no_id" href="settings.html" data-orig-id="u3781"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem temp_no_id" data-orig-id="u3783-4"><!-- content --><span class="placeholder" data-placeholder-for="u3783-4_0_content"><!-- placeholder node --></span></div></a>
        </div>
       </nav>
      </div>
     </div>
    </div>
    <div class="browser_width grpelem" id="u1345-bw">
     <div class="shadow rounded-corners temp_no_id" data-orig-id="u1345"><!-- column -->
      <div class="clearfix" id="u1345_align_to_page">
       <span class="clearfix colelem placeholder" data-placeholder-for="u1346-6_content"><!-- placeholder node --></span>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu1398"><!-- group -->
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u1398"><!-- svg -->
         <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/thermometer.svg?crc=4031485277" width="30" height="30" alt="" data-mu-svgfallback="images/thermometer_poster_.png?crc=129038082" data-orig-id="u1394" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u1361-4_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u1439-4_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu1392"><!-- group -->
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u1392"><!-- svg -->
         <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/sun.svg?crc=517046787" width="30" height="30" alt="" data-mu-svgfallback="images/sun_poster_.png?crc=162953087" data-orig-id="u1388" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u1370-4_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u1457-4_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu1404"><!-- group -->
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u1404"><!-- svg -->
         <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/humidity.svg?crc=354702744" width="30" height="30" alt="" data-mu-svgfallback="images/humidity_poster_.png?crc=298497813" data-orig-id="u1400" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u1379-4_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u1466-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="697" data-content-above-spacer="697" data-content-below-spacer="61"></div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.musemenu","jquery.watch","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity', '#bp_960', '#bp_620'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=3951022091" type="text/javascript" async data-main="scripts/museconfig.js?crc=474374037" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
