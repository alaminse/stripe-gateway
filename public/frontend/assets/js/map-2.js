function init() {
    var mapOptions = {
        zoom: 11,
        scrollwheel: false,
        center: new google.maps.LatLng(40.709896, -73.995481),
        styles: 
        [
            {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#627385"
                    }, 
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#8a0707"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#781010"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#861414"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "weight": "0.01"
                    },
                    {
                        "color": "#ff0000"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    },
                    {
                        "color": "#470606"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#6d2929"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#6b2a2a"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#516376"
                    },
                    {
                        "saturation": "-14"
                    },
                    {
                        "weight": "0.01"
                    },
                    {
                        "lightness": "-11"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#516376"
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "weight": "0.01"
                    },
                    {
                        "color": "#650505"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#195ba0"
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#811313"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#ff0000"
                    }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "landscape.natural.landcover",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "landscape.natural.landcover",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "landscape.natural.landcover",
                "elementType": "labels",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "landscape.natural.landcover",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi.government",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#ad2323"
                    }
                ]
            },
            {
                "featureType": "poi.government",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#760808"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#dfdfdf"
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#c8d7d4"
                    }
                ]
            }
        ]
    };
    var mapElement = document.getElementById('map-height');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.709896, -73.995481),
        map: map,
        icon: 'assets/img/icon-img/2.png',
        animation:google.maps.Animation.BOUNCE,
        title: 'Snazzy!'
    });
}
google.maps.event.addDomListener(window, 'load', init);