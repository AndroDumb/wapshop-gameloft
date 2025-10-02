
<!DOCTYPE html>
<html>
    <head>
        <title>Gameloft Store</title>
        <link rel="stylesheet" type="text/css" href="/mtk_mc5/css/reset.css">
        <link rel="stylesheet" type="text/css" href="/mtk_mc5/css/style.css">
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script type="text/javascript" src="/mtk_mc5/js/jquery.js"></script>
        <script type="text/javascript" src="/mtk_mc5/js/cookies.js"></script>
        <script type="text/javascript" src="/mtk_mc5/js/responsivePaginate.js"></script>
        <script type="text/javascript" src="/mtk_mc5/js/jcarousellite.1.0.1.pack.js"></script>
                <script type="text/javascript" src="/mtk_mc5/js/index_carousel.js"></script>
                </script>
    <link rel="canonical" href="/mtk_mc5/"/>
    <meta name="title" content="Gameloft Android Games. Download Top HD Games for Android." />
    <meta name="description" content="Download Gameloft games for Android in HD. The highest-quality gaming experience for Android smartphones." />
    <meta name="keywords" content="android games, download android games, gameloft android games, gameloft android, android game" />

    
    </head>
    <body>
        <div id="banner">
    <a href="/mtk_mc5/index.php" title="Gameloft HD Games for Android - Top Android Games">
        <img src="/mtk_mc5/images/gl_banner.gif" alt="Gameloft HD Games for Android - Top Android Games">
    </a>
</div>
<div class="clear"></div><div id="nav">
            <table>
                <tr>
                    <td style="width: 25%" class=""><a href="index.php" title="Home">Home</a></td><td style="width: 25%" class=""><a href="trailer.php" title="Trailer">Trailer</a></td><td style="width: 25%" class=""><a href="images.php" title="Images">Images</a></td><td style="width: 25%" class=""><a href="download_page.php" title="Download">Download</a></td>
                </tr>
            </table>
        </div>
        <div class="clear"></div><div id="banner">
    <a href="index.php" title="Gameloft">
        <img src="images/MC5_cs.gif" alt="Gameloft">
    </a>
</div>
<div class="clear"></div><div class="delimiter_6"></div><div class="delimiter_6"></div><div class="delimiter_6"></div><div align="center">© 2014 Gameloft. All Rights Reserved. <br/>Gameloft, the Gameloft logo are trademarks of Gameloft in the US and/or other countries.</div>
        <div class="footer"></div>
                <script type="text/javascript" language="JavaScript">
                $(function() {
                    $(".carousel").jCarouselLite({
                        btnNext: ".next",
                        btnPrev: ".prev",
                        visible: 1
                    });
                    $(".carousel2").jCarouselLite({
                        btnNext: ".next2",
                        btnPrev: ".prev2",
                        visible: 2
                    });
                });

                $(document).ready(function() {
                    if (parseInt($(window).width()) > 400) {
                        $("#carousel_cont .jCarouselLite").css("width","330px");
                        $("#carousel_cont").css("width","430px");
                    } else {
                        $("#carousel_cont .jCarouselLite").css("width","220px");
                        $("#carousel_cont").css("width","294px");
                    }
                });

                $(window).resize(function() {
                    if (parseInt($(window).width()) > 400) {
                        $("#carousel_cont .jCarouselLite").css("width","330px");
                        $("#carousel_cont").css("width","430px");
                    } else {
                        $("#carousel_cont .jCarouselLite").css("width","220px");
                        $("#carousel_cont").css("width","294px");
                    }
                });

                </script>
                    <script type="text/javascript" src="/mtk_mc5/js/carousel.js"></script>
                    <script type="text/javascript">
                        window.onload = function() {
                            new Carousel({
                            'container': 'carousel-container',
                            'imagesContainer': 'carousel-images-container',
                            'images': 'carousel-image',
                            'leftArrow': 'carousel-left-arrow',
                            'rightArrow': 'carousel-right-arrow'
                    });
                    
                    var src = $('#img-splash').attr('src');
                            function getImageSize(src)
                            {
                                    var newImg = new Image();
                                    newImg.src = src;
                                    var height = newImg.height;
                                    return 209;
                            }

                            var currentHeight = getImageSize(src);
                            //alert(currentHeight);
                            $('#screenshot_container').find('li').css('height', currentHeight);
                        }
                    </script>
    </body>
</html>

