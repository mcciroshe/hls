<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH Player</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.3.0/video-js.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.3.0/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-dash/2.11.0/videojs-dash.min.js"></script>
</head>
<body>

    <video id="my-video" class="video-js vjs-default-skin" controls width="640" height="360">
        <source src="https://live1.shoq.com.pk/live/eds/Geo_Super/DASH/Geo_Super.mpd" type="application/dash+xml">
    </video>

    <script>
        var player = videojs('my-video', {
            autoplay: true,
            controls: true,
            fluid: true,
            techOrder: ["html5"],
            html5: {
                dash: {
                    protection: {
                        enabled: true
                    }
                }
            }
        });
    </script>

</body>
</html>
