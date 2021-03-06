<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="The Paris Effect" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="http://pariseffect.org/img/og.jpg" />
    <meta property="og:url" content="http://pariseffect.org" />
    <meta property="og:description" content="An attempt to track the spread of violent incidents or good initiatives targeting Arabs/Muslims following the Paris attacks on the 13th of November 2015" />
    <meta property="og:site_name" content="The Paris Effect" />
    <meta property="fb:admins" content="" />

    <title>The Paris Effect</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src='https://code.jquery.com/jquery-2.1.4.min.js '></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src='js/tabletop1.3.4.js'></script>
    <script type="text/javascript" src='js/sheetsee.js'></script>
    <script type="text/javascript" src='js/leaflet.markercluster.js'></script>

    <link href='https://api.tiles.mapbox.com/mapbox.js/v1.4.0/mapbox.css' rel='stylesheet' />
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic'>
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700'>
    <link media="screen" rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link media="screen" rel="stylesheet" type="text/css" href="css/site.css"> -->
    <link rel="stylesheet" href="css/MarkerCluster.css" />
    <link rel="stylesheet" href="css/MarkerCluster.Default.css" />

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-70310442-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>

    <!-- Navigation -->
    <!-- <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap.</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav> -->

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>The Paris Effect</h1>
            <h3 class="goal">An attempt to track the spread of violent incidents or good initiatives targeting Arabs/Muslims
                <br /> following the Paris attacks on the 13th of November 2015</h3>
            <a href="#" class="btn-default" id="btn-text-hide">
                <h4> <i class="fa fa-map-marker"> </i> Interact with the Map</h4>
            </a>
            <br>
            <a href="https://docs.google.com/forms/d/1Arho96I8RqRZIdIpqeQXtfovlVdBU8GwaRwe0miDrFQ/viewform" target="_blank" class="btn btn-danger btn-lg raised">Report an Incident</a>
            <a href="https://docs.google.com/forms/d/1yhk_SytZogC5X51mAvJnjrKo-RIV0k5dofMgOZnvbmo/viewform" target="_blank" class="btn btn-success btn-lg raised">Report a Good Initiative</a>
            <br />
            <div class="col-sm-12 cat-stats">
                <!--
Verbal Harrassment
Physical Harrassment
Destruction of property
Physical attack on the victim
Exclusion
                -->
                <div class="col-sm-1 col-xs-2"></div>

                <div class="col-sm-2 col-xs-4" id="icon-cat-1">
                    <img src="img/icons/Exclusion.png" class="img-responsive" />
                    <span class="counts"></span>
                </div>

                <div class="col-sm-2 col-xs-4" id="icon-cat-2">
                    <img src="img/icons/Physical attack on the victim.png" class="img-responsive" />
                    <span class="counts"></span>
                </div>


                <div class="col-sm-2 col-xs-4" id="icon-cat-3">
                    <img src="img/icons/Destruction of property.png" class="img-responsive" />
                    <span class="counts"></span>
                </div>

                <div class="col-sm-2 col-xs-4" id="icon-cat-4">
                    <img src="img/icons/Physical Harrassment.png" class="img-responsive" />
                    <span class="counts"></span>
                </div>

                <div class="col-sm-2 col-xs-4" id="icon-cat-5">
                    <img src="img/icons/Verbal Harrassment2.png" class="img-responsive" />
                    <span class="counts"></span>
                </div>

                <div class="col-sm-1 col-xs-2"></div>
            </div>
        </div>
    </header>


    <div id="googlemaps">
    </div>

    <div id="footer-note">
        <a href="http://www.facebook.com/pariseffectmap">
            <img src="img/f.png" width="27px">
        </a>
        <a href="https://twitter.com/pariseffectmap">
            <img src="img/t.png">
        </a>
        <a href="#" id="btn-text-show" class="btn btn-primary raised btn-lg" style="display: none;">Show Infomation</a>
        <br /> By people to people. paris.effect.org[at]gmail.com
    </div>

    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        //

        $(function() {
            $('#btn-text-hide').click(function() {
                $("header").slideToggle('slow', function() {
                    $('header').hide();
                    $('#btn-text-show').show();
                });



            })
            $('#btn-text-show').click(function() {
                $("header").slideToggle("slow", function() {
                    $('header').show();
                    $('#btn-text-show').hide();
                });
            })


            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });

            // setup data
            $.ajax({
                url: 'data',
                type: "get",
                async: false,
                success: function(data) {
                    showInfo(data);
                },
                error: function() {
                    //connectionError();
                }
            });
        });



        function showInfo(data) {
            var optionsJSON = ["description", "type", "date", 'country', 'city', 'link']


            var categoriesCount = [];
            categoriesCount[0] = 0; //    Others
            categoriesCount[1] = 0; //    Verbal Harrassment
            categoriesCount[2] = 0; //    Physical Harrassment
            categoriesCount[3] = 0; //    Destruction of property
            categoriesCount[4] = 0; //    Physical attack on the victim
            categoriesCount[5] = 0; //    Exclusion


            $.each(data, function(i, item) {

                switch (item.type) {
                    case "Verbal Harrassment":
                        categoriesCount[1]++;
                        break;
                    case "Physical Harrassment":
                        categoriesCount[2]++;
                        break;
                    case "Destruction of property":
                        categoriesCount[3]++;
                        break;

                    case "Physical attack on the victim":
                        categoriesCount[4]++;
                        break;
                    case " Exclusion":
                        categoriesCount[5]++;
                        break;
                    default:
                        categoriesCount[0]++;
                }

            })


            $.each(categoriesCount, function(i, count) {
                $('#icon-cat-' + i + ' span.counts').text(count);
            });

            var template = "<div><h4 style='color:#D9534F;' align='center'> <span class='fa fa-map-marker'> </span> @{{city}}, @{{country}}</h4><h6 align='center'>@{{date}}</h6>" + "<a href='@{{link}}' target='_blank'>" +
                "<p style='text-align: justify;text-justify: inter-word;color:#000;'>@{{description}}</p></a></div>"
                // console.log(data);

            var geoJSON = Sheetsee.createGeoJSON(data, optionsJSON)
            var map = Sheetsee.loadMap("googlemaps")
            Sheetsee.addTileLayer(map, 'jllord.n7aml2bc')
            Sheetsee.addMarkerLayer(geoJSON, map, template, true)



        }

        function shapesMap(data) {
            var opts = ['description']
            var geojson = Sheetsee.createGeoJSON(data, opts)
            var plytemplate = "<h4>@{{description}}</h4>"
            var shapesmap = Sheetsee.loadMap("shapesmap")
            Sheetsee.addTileLayer(shapesmap, 'jllord.n7aml2bc')
            Sheetsee.addMarkerLayer(geojson, shapesmap, plytemplate)
        }


    </script>

</body>

</html>
