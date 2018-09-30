<html>
<!-- the upcoming events page -->
    <head>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>
    </title>
    </head>
    <body onload="loadArticleHeaders('panchayat') ">
    <script language="javascript" type="text/javascript">
     function loadArticleHeaders(category) {
	 $.ajax({
			url: 'http://172.16.19.155/hackathon/php/getArticles.php',
            type: 'post',
            dataType: 'json',
            success: function (data) {
            $.each(data, function(record, recordVal) {
				var articleTitle = recordVal.title;
				i++;
				var idOfElement = "article" + i;
				$('<div/>', {
					'id':idOfElement,
					'class':'btn-group',
					'text':articleTitle,
				})
				.appendTo('body');
			  });
            }
			});
     
          //end of .each
    }
    </script>
    <p id="articleText">Loading...</p>
    </body>
</html>