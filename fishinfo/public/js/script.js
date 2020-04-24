var map;
var myLatlng;
$(document).ready(function(){
  success();
  function success(){
    var latval=23.7307;
    var lngval=92.7173;

    myLatlng=new google.maps.LatLng(latval,lngval);
    createMap(myLatlng);
    searchPonds(latval,lngval);
  }

  function fail(){
    alert("It Fails Position");
  }
    
    // create map
    function createMap(myLatlng){
      map = new google.maps.Map(document.getElementById('map'), {
          center: myLatlng,
          zoom: 8.5, 
        });
        var marker=new google.maps.Marker({
          position: myLatlng,
          map:map
        })
    }

    // this makes red marker for position
    function createMarker(latlng,icn,name){
        var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
        title:  name
      });
    }
    
    function searchPonds(lat,lng){
      $.post('http://127.0.0.1:8000/api/searchPonds',{lat:lat,lng:lng},function(match){
        console.log(match);
        $.each(match,function(i,val){
            var glatval=val.lat;
            var glngval=val.lng;
            var gname=val.fname;
            var GLatlng=new google.maps.LatLng(glatval,glngval);
            var gicn='https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            createMarker(GLatlng,gicn,gname);
        });
      });
    }
});
 // AIzaSyBxbv_wIn2sTcqUkUpHwlCE47ak8WIcjmE