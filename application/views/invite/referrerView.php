<script>

window.location = 'liveads88://invite/<?php echo $code;?>'; // will result in error message if app not installed

if (getMobileOperatingSystem == 'iOS') {
	setTimeout(function() {        
   window.location = "https://itunes.apple.com/us/app/myliveads/id1160124415?ls=1&mt=8";
}, 500);
}
else {
	setTimeout(function() {        
   window.location = "https://play.google.com/store/apps/details?id=com.bplife&hl=en";
}, 500);
}



function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;

      // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
        return "Windows Phone";
    }

    if (/android/i.test(userAgent)) {
        return "Android";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return "iOS";
    }

    return "unknown";
}



</script>
