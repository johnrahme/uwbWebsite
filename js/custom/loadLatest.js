function loadLatest(url){
    $('#runs').append('<a onclick="onClickTest(10, this)" class="list-group-item run-links">' +
        '<div class="list-group-item-heading">' +
        '<h4>Latest run</h4>' +
        '<small>2015-03-02 At 04:01</small></div>' +
        '<p>John</p><p id = "test">test2</p> </a>'
    );
    //getSessions(url);
}

function onRunClick(id,imageUrl, placeWidth, placeHeight, obj){
    $('.run-links').each(function(index){
        $(this).removeClass('active');
    });
    $(obj).addClass('active');
    getSession(id ,imageUrl, placeWidth, placeHeight, '../PHP/Positions/getSession.php');
}
function getSessions(url){
    var data = new FormData();
    //data.append("id", id);
    //alert(url);
    $.ajax({
        method: "POST",
        data: data,
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        success: loadFiveLatest,
        error: function (e) {
            //alert(e.responseText);
        }
    });
}

function loadFiveLatest(sessionsResponse){
    //alert(response);
    //alert(sessionsResponse);
    //response = JSON.parse(response);
    var resp = JSON.parse(sessionsResponse);
    //alert(resp.length);
    var length = resp.length;
    //alert(response[0].y);
    //var dataArr = response.split(" ");
    for(index = 0; index<length; index++){
        $('#runs').append('<a onclick="onRunClick('+resp[index].id+',&quot;'+resp[index].url+'&quot;,'+resp[index].width+','+resp[index].height+',this)" class="list-group-item run-links">' +
            '<div class="list-group-item-heading">' +
            '<h4>Run id: '+resp[index].id+'</h4>' +
            '<small> '+resp[index].startedAt+'</small></div>' +
            '<p> '+resp[index].name+'</p></a>'
        );
    }
    $('.run-links').first().click();

}