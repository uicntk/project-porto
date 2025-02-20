<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
    <title>Eva</title>

</head>
<body>
    
        <a
            data-fancybox="gallery"
            data-src="https://lipsum.app/id/2/1600x1200"
        >
            <img src="https://lipsum.app/id/2/200x150" width="200" height="150" alt="" />
        </a>

        <a data-fancybox="gallery" data-src="https://lipsum.app/id/3/1600x1200">
            <img src="https://lipsum.app/id/3/200x150" width="200" height="150" alt="" />
        </a>

        <a data-fancybox="gallery" data-src="https://lipsum.app/id/4/1600x1200">
            <img src="https://lipsum.app/id/4/200x150" width="200" height="150" alt="" />
        </a>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            Slideshow: {
                progressParentEl: (slideshow) => {
                    return slideshow.instance.container;
                }
            },
            Toolbar: {
                display: {
                left: ["infobar"],
                middle: [
                    "zoomIn",
                    "zoomOut",
                    "toggle1to1",
                    "download",
                    "slideshow",
                    "rotateCCW",
                    "rotateCW",
                    "flipX",
                    "flipY",
                    "thumbs",
                ],
                right: [ "close"],
                },
            },
        });    
    </script>
</body>
</html>
