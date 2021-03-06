var updateTimer;
var i = 0;
var data;
var currentRoomW;
var currentRoomH;
var imgUrl;
var oldX = 0;
var oldY = 0;

function setSelected(theWidth, theHeight, theUrl){
    currentRoomW = theWidth;
    currentRoomH = theHeight;
    url = theUrl;
}
function startRun(){

    clearInterval(updateTimer);
    updateTimer = setInterval(updateImageTimer, 200);
    i = 0;
}
function stopRun(){
    i = 0;
    clearInterval(updateTimer);
}
function updateImageTimer() {
    //document.getElementById("test").innerHTML = currentRoomW.toString();

    var yIn = data[i].x;
    var xIn = data[i].y;
    var roomWidth = currentRoomH;
    var roomHeight = currentRoomW;

    var color = '#000000';
    var size = '20px';
    var image = $("#image");
    var dx = image.position().left;
    var dy = image.position().top;

    var width = image.width();
    var height = image.height();

    var pixelPerMeterX = width/roomWidth;
    var pixelPerMeterY = height/roomHeight;

    //Invert x and y coordinates
    var x = dx+xIn*pixelPerMeterX;
    var y = dy+yIn*pixelPerMeterY;

    $("#currentPos").html(dx+" : "+dy);
    $( "#dot" ).animate({
        left: x-20,
        top: y-20
    }, 200, function() {
        // Animation complete.
    });
    oldX = x;
    oldY = y;
    i = i+1;

}
function getSession(id ,imageUrl, placeWidth, placeHeight,url){
    currentRoomW = placeWidth;
    currentRoomH = placeHeight;
    imgUrl = imageUrl;
    $("#image").attr("src","../"+imageUrl+"");
    var data = new FormData();
    data.append("id", id);
    //alert(url);
    $.ajax({
        method: "POST",
        data: data,
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        success: storeData,
        error: function (e) {
            //alert(e.responseText);
        }
    });
}

function storeData(response){
    //alert(response);
    //alert(response);
    //response = JSON.parse(response);
    data = JSON.parse(response);
    //alert(response[0].y);
    //var dataArr = response.split(" ");
}