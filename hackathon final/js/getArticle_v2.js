function send_category(category){
	//console.log(category);
		var age=null;
		var state = localStorage.getItem('state');
		var district = localStorage.getItem('district');
		var send_info = {"district": district, "state": state, "category": category, "age": age};
		// var send_info = {"district": 'Pune', "state": 'Maharashtra', "category": category, "age": age};
		 console.log(send_info);
		 $.ajax({
					url: 'http://172.16.19.155/hackathon/php/getArticle.php',
					type: 'post',
					data: send_info,
					dataType: 'json',
					success: function (result) {
						console.log(result);
						if (typeof (Storage) !== "undefined") {
							var count=1;
							Object.keys(result).forEach(function(k){
							// console.log(k + ' - ' + result[k]);
							// console.log(result[k]);
								Object.keys(result[k]).forEach(function(sk){
									console.log(sk + ' - ' + result[k][sk]);
									localStorage.setItem(sk+ count, result[k][sk]);
								});
								count++;
							
							});
							//alert("local storage done");
						}		
						else {
							console.log("Sorry, your browser does not support web storage...");
						}
						
						window.location = "view_article_v2.html";
					}
				});
}




