function uploadFile()
{
  event.stopPropagation(); // Stop stuff happening
    event.preventDefault(); // Totally stop stuff happening

    // START A LOADING SPINNER HERE

    // Create a formdata object and add the files
	//var fileInput = $('#file').val();
	// //var file = fileInput.files[0];
	// var form = document.forms.namedItem("upload_form");
	var form = document.querySelector("form");
     var data = new FormData(form);
    //$.each(files, function(key, value)
    //{
        // data.append('file', fileInput);
        //data.append('heading', "bfdubf");
        //data.append('file', fileInput);
		
    //});
	
    $.ajax({
        url: 'http://172.16.19.155/hackathon/php/inarticle.php',
        type: 'POST',
        data: data,						//{"file": $('#file').val()},
        cache: false,
        dataType: 'json',
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
       success: function (result) {
				console.log(result);

            },
			
		error: function(data,status,err){
				console.log(status);
				console.log(data );
				console.log(err);
		}
    });
}