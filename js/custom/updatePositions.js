function getPosition(nr,url){
var data = new FormData();
        data.append("nr", nr);
        //alert(url);
        $.ajax({
            method: "POST",
            data: data,
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: updateImage,
            error: function (e) {
                //alert(e.responseText);
            }
			});
}

function updateImage(response){
    //alert(response);
    response = JSON.parse(response);
    //alert(response[0].y);
    //var dataArr = response.split(" ");
    var yIn = response[0].x;
    var xIn = response[0].y;
    var roomWidth = response[1].height;
    var roomHeight = response[1].width;

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
    $("#dot")
            .css('position', 'absolute')
            .css('top', y + 'px')
            .css('left', x + 'px')
            .css('width', size)
            .css('height', size)
            .css('background-color', color);
}