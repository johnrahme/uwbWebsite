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
            success: function (response) {
               
                alert(response);
            },
            error: function (e) {
                alert(e.responseText);
            }
			});
}
