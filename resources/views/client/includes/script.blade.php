    <!-- Modernizer JS -->
    <script src="../../assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <!-- jQuery JS -->
    <script src="../../assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <!-- jquery migrate JS -->
    <script src="../../assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../../assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="../../assets/js/plugins/countdown.js"></script>
    <script src="../../assets/js/plugins/counterup.js"></script>
    <script src="../../assets/js/plugins/instafeed.js"></script>
    <script src="../../assets/js/plugins/jquery-ui.js"></script>
    <script src="../../assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="../../assets/js/plugins/magnific-popup.js"></script>
    <script src="../../assets/js/plugins/owl-carousel.js"></script>
    <script src="../../assets/js/plugins/scrollup.js"></script>
    <script src="../../assets/js/plugins/waypoints.js"></script>
    <script src="../../assets/js/plugins/wow.js"></script>
    <script src="../../assets/js/plugins/slick.js"></script>
    <script src="../../assets/js/plugins/elevatezoom.js"></script>
    <script src="../../assets/js/plugins/sticky-sidebar.js"></script>
    <script src="../../assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#6195a0"
                        }]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "lightness": "0"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#f5f5f2"
                            },
                            {
                                "gamma": "1"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{
                                "lightness": "-3"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#f8f8f8"
                        }]
                    },
                    {
                        "featureType": "landscape.natural.terrain",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.government",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.medical",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#e6f2da"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.place_of_worship",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.school",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.sports_complex",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#f9d6b5"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text",
                        "stylers": [{
                            "color": "#4e4e4e"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#787878"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "transit.station.airport",
                        "elementType": "labels.icon",
                        "stylers": [{
                                "hue": "#0a00ff"
                            },
                            {
                                "saturation": "-77"
                            },
                            {
                                "gamma": "0.57"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station.bus",
                        "elementType": "labels.icon",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "hue": "#008eff"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#43321e"
                        }]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "elementType": "labels.icon",
                        "stylers": [{
                                "hue": "#005dff"
                            },
                            {
                                "lightness": "4"
                            },
                            {
                                "gamma": "0.75"
                            },
                            {
                                "saturation": "-68"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#eaf6f8"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#cbeefa"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "lightness": "-49"
                            },
                            {
                                "saturation": "-53"
                            },
                            {
                                "gamma": "0.79"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }
                ]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: 'assets/images/icon-img/2.png',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>

    </body>




    </html>
