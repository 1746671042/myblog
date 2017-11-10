function lunbo(id, height) {
				var ul = $(".notice");
				var liFirst = ul.find('li:first');
				ul.animate({
					top: height
				}).animate({
					"top": 0
				}, 0, function() {
					var clone = liFirst.clone();
					//$(ul).append(clone);
					liFirst.remove();
					//$(li).append(clone);
				})
			}
			setInterval("lunbo('ul','-50px')", 3000)
		