styleMap = [
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "hue": "#00fff3"
            },
            {
                "saturation": "8"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#2b291a"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "saturation": "-28"
            },
            {
                "color": "#ffc400"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#39321e"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#201e17"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
];
var shapes = [];
var path = [
    new google.maps.LatLng(4.6871271187465835, -74.05712127685547),
    new google.maps.LatLng(4.684988524199499, -74.04802322387695),
    new google.maps.LatLng(4.6800269596618325, -74.03841018676758),
    new google.maps.LatLng(4.6858011908981645, -74.03532028198242),
    new google.maps.LatLng(4.691703689084822, -74.03386116027832),
    new google.maps.LatLng(4.695339260963142, -74.0324878692627),
    new google.maps.LatLng(4.697777222081291, -74.03072834014893),
    new google.maps.LatLng(4.6989320427937535, -74.02914047241211),
    new google.maps.LatLng(4.701883242588071, -74.02849674224854),
    new google.maps.LatLng(4.704663346900112, -74.02858257293701),
    new google.maps.LatLng(4.708256080643689, -74.02858257293701),
    new google.maps.LatLng(4.712533120431019, -74.02939796447754),
    new google.maps.LatLng(4.71561257278238, -74.0287971496582),
    new google.maps.LatLng(4.717751073327662, -74.02841091156006),
    new google.maps.LatLng(4.721129890762325, -74.02635097503662),
    new google.maps.LatLng(4.723696070224696, -74.02592182159424),
    new google.maps.LatLng(4.725663468047742, -74.0247631072998),
    new google.maps.LatLng(4.728785631389609, -74.02416229248047),
    new google.maps.LatLng(4.731907780658006, -74.02407646179199),
    new google.maps.LatLng(4.735970830534011, -74.02407646179199),
    new google.maps.LatLng(4.737596043801882, -74.02300357818604),
    new google.maps.LatLng(4.741231375436649, -74.0224027633667),
    new google.maps.LatLng(4.74717617064695, -74.02283191680908),
    new google.maps.LatLng(4.74892966161275, -74.03626441955566),
    new google.maps.LatLng(4.751367434328337, -74.04664993286133)
];
var polyline = new google.maps.Polygon({path: path, strokeColor: "#F2CB6E", strokeOpacity:1, strokeWeight: 1});

var map;

function initialize() {

    var myLatLng = new google.maps.LatLng(4.7171940541836985, -74.03540542517088);
    var mapOptions = {


         scrollwheel: false,
        /*
         navigationControl: false,
         mapTypeControl: false,
         scaleControl: false,*/

        zoom: 13,
        center: myLatLng,
        styles: styleMap
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    var image = 'images/icon.png';


    var myLatLng = new google.maps.LatLng(4.746020420664829, -74.03016975317382);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP,
        content: 'I am the content of this infobox. Wow, what a text.<br><br><a href="#">The good thing is: Tags are also possible</a>'
    });

    polyline.setMap(map);
    shapes.push(polyline);
}

google.maps.event.addDomListener(window, 'load', initialize);
