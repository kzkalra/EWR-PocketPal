function send_category(category){
		var state = localStorage.getItem('state');
		var district = localStorage.getItem('district');
		var send_info = {"district": district, "state": state, "category": category};
		 $.ajax({
					url: 'http://172.16.19.155/hackathon/inarticle.php',
					type: 'post',
					data: send_info,
					dataType: 'json',
					success: function (result) {
						console.log(result);
						window.location("view_article.html");
					}
					});
}