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
                alert(e.responseText);
            }
			});
}

function updateImage(response){
    //alert(response);
    var dataArr = response.split(" ");
    var xIn = parseFloat(dataArr[1]);
    var yIn = parseFloat(dataArr[3]);

    var color = '#000000';
    var size = '20px';
    var image = $("#image");
    var dx = image.position().left;
    var dy = image.position().top;

    var width = image.width();
    var height = image.height();

    var roomWidth = 400;
    var roomHeight = 400;

    var pixelPerMeterX = width/roomWidth;
    var pixelPerMeterY = height/roomHeight;

    var x = dx+xIn*pixelPerMeterX;
    var y = dy+yIn*pixelPerMeterY;
    //$("#currentPos").html(x+" : "+y);
    $("#dot")
            .css('position', 'absolute')
            .css('top', y + 'px')
            .css('left', x + 'px')
            .css('width', size)
            .css('height', size)
            .css('background-color', color);
}