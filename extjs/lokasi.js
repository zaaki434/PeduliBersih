function showpositions(){
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
            var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + "," + "Longtitude: " + position.coords.longitude + ")";
            document.getElementById("result").innerHTML = positionInfo;
        });
    } else {
        alert("sorry, your browser does not support HTML5 GeoLocation");
    }
}

function getLocation()
{
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latlong = position.coords.latitude+","+position.coords.longitude;
            var link = "https://maps.google.com/maps?q="+latlong+"&t=&z=13&ie=UTF8&iwloc=&output=embed";
            $("#user_location").prop("src",link);
        });
    }else{
        alert("Sorry, your browser does not support HTML5 GeoLocation");
    }
}