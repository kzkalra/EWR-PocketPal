<html>
    <head>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>
    </title>
    </head>
    <body onload="loadArticleHeaders('panchayat') ">
    <script language="javascript" type="text/javascript">
     function loadArticleHeaders(category) {
          $.getJSON('localhost://articleload.php?topic='+category, function(data) {
          var i = 0;
          $.each(data, function(data.record, data.recordVal) {
          var articleTitle = recordVal.title;
          var articlePath = recordVal.filePath;
          var articleImage = recordVal.imagePath;
          i++;
          var idOfElement = "article" + i;
          $('<div/>', {
              'id':idOfElement,
              'class':'myClass',
              'text':articleTitle,
          }).on('click',loadArticleFile(articlePath, articleImage))
          .appendTo('body');
      });//end of .each
    });//end of getJSON 
  }
  function loadArticleFile(fileData, fileImage)
    {               
      var xhttp1 = new XMLHTTPRequest();//check syntax  --FOR ARTICLE LOADING...
      xhttp.onreadystatechange = function() {
                                              if (this.readyState == 4 && this.status == 200) 
                                              {
                                                xhttp1.open("GET", fileData, true);
                                                xhttp1.send();
                                                //do the toggle thing with html. Use this.responseText to access the content.
                                              }
              
                                            }



      var xhttp2 = new XMLHTTPRequest();//check syntax  --FOR IMAGE LOADING...
      xhttp.onreadystatechange = function() {
                                  if (this.readyState == 4 && this.status == 200) 
                                  {

                                      xhttp2.open("GET", fileImage, true);   // Make sure file is in same server
                                      xhttp2.overrideMimeType('text/plain; charset=x-user-defined');
                                      xhttp2.send(null);

                                      xhttp2.onreadystatechange = function() {
                                            if (xhttp2.readyState == 4){
                                              if ((xhttp2.status == 200) || (xhttp2.status == 0)){
                                                      var image = document.getElementById("get_img");
                                                      image.src = "data:image/gif;base64," + encode64(xhttp2.responseText);
                                              }
                                              else{
                                                      alert("Something misconfiguration : " + 
                                                              "\nError Code : " + xhttp2.status + 
                                                              "\nError Message : " + xhttp2.responseText);
                                             } 
                                          }
                                      }; 
                                  }

      function encode64(inputStr){
          var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
          var outputStr = "";
          var i = 0;
                                               
          while (i> 2;
          var enc2 = ((byte1 & 3) << 4) | (byte2 >> 4);
                                                  
          var enc3, enc4;
          if (isNaN(byte2)){
              enc3 = enc4 = 64;
          } 
          else{
              enc3 = ((byte2 & 15) << 2) | (byte3 >> 6);
              if (isNaN(byte3)){
                  enc4 = 64;
              }
              else {
                  enc4 = byte3 & 63;
              }
          }
          outputStr +=  b64.charAt(enc1) + b64.charAt(enc2) + b64.charAt(enc3) + b64.charAt(enc4);
          )// check with this brace (could be wrong)
          return outputStr;
      } 
      //do the toggle thing with html. Use this.responseText to access the content.
  }
    //-->
    </script>
    <p id="articleText">Loading...</p>
    </body>
</html>