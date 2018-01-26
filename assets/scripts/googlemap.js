function initMap() {
    var mapOption = {
        zoom: 3,
        center: {lat: -38.41, lng: -63.61},
        mapTypeControl: false,
        panControl: false,
        zoomControl: false,
        streetViewControl: false
    }

    if ($('#lat').val() != '' && $('#lng').val() != '') {
        mapOption['zoom'] = 16
        mapOption['center'] = {
            lat: Number($('#lat').val()), 
            lng: Number($('#lng').val())
        }
    }

    var map = new google.maps.Map(document.getElementById('map'), mapOption)

    var geocoder = new google.maps.Geocoder;

    var autocomplete = new google.maps.places.Autocomplete(document.getElementById('autocomplete'), {
        componentRestrictions: {country: 'ar'}
    });

    autocomplete.bindTo('bounds', map)

    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    })

    if ($('#lat').val() != '' && $('#lng').val() != '') {
        marker.setPosition(mapOption.center);
        marker.setVisible(true);
        marker.setDraggable(true);
    }
        
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace()

        console.log(place)

        getSectionAddress(place.address_components)

        map.fitBounds(place.geometry.viewport);
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
        marker.setDraggable(true);

        $('.alert-map').css('display', 'block')

        renderLatLng({
            lat: place.geometry.location.lat(), 
            lng: place.geometry.location.lng()
        })
    })

    marker.addListener ('mouseup', function (e) {
        var location = {
            lat: this.getPosition().lat(), 
            lng: this.getPosition().lng()
        }
            
        renderLatLng(location)
            geocodeLatLng(map, geocoder, location)
        })
}

function renderLatLng(location) {
    $('#lat').val(location.lat)
    $('#lng').val(location.lng)
}

function getSectionAddress(array) {
    var route = '', streetNumber = ''
    array.forEach(function(value) {
        if (value.types[0] == 'street_number' && value.long_name != 'undefined')
            streetNumber = value.long_name
        else if (value.types[0] == 'route' && value.long_name != 'undefined')
            route = value.long_name
        else
            $('#'+value.types[0]).val(value.long_name)
    })
    $('#address').val(streetNumber+' '+route)
}

function geocodeLatLng(map, geocoder, location) {
    geocoder.geocode({'location': location}, function(results, status) {
        if (status === 'OK') {
            var place = results[0];
            $('#autocomplete').val(place.formatted_address)
            getSectionAddress(place.address_components)
        }
    })
}