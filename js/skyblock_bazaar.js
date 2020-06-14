window.setInterval('getInfo()', 10000);
function getInfo(){

	var key = 'f93b9a4a-446f-43cf-a43f-eb3df2025fc6';
	var url = 'https://api.hypixel.net/skyblock/bazaar?key=' + key;

	var xhr = new XMLHttpRequest();
	xhr.open('GET', url);


	xhr.onreadystatechange = function () {
		var DONE = 4;
		var OK = 200;
		if (xhr.readyState === DONE) 
		{
			if (xhr.status === OK) 
			{
				var data = JSON.parse(xhr.responseText);
				console.log(data);
				showInfo1(data)
			} 
			else 
			{
				getInfo();
			}
		}
	};
	xhr.send(null);
}

function showInfo1(data) {
//Display Sell Price Per Unit
	document.querySelector('#cow11_ppu').innerHTML = (data.products.RAW_BEEF.quick_status.sellPrice + data.products.LEATHER.quick_status.sellPrice).toFixed(1);
	document.querySelector('#cow9_ppu').innerHTML = (data.products.RAW_BEEF.quick_status.sellPrice + data.products.LEATHER.quick_status.sellPrice).toFixed(1);
	document.querySelector('#glowstone9_ppu').innerHTML = data.products.GLOWSTONE_DUST.quick_status.sellPrice.toFixed(1);
	document.querySelector('#glowstone7_ppu').innerHTML = data.products.GLOWSTONE_DUST.quick_status.sellPrice.toFixed(1);
	document.querySelector('#clay11_ppu').innerHTML = data.products.CLAY_BALL.quick_status.sellPrice.toFixed(1);
	document.querySelector('#gold_ppu').innerHTML = data.products.GOLD_INGOT.quick_status.sellPrice.toFixed(1);
	document.querySelector('#mutton_ppu').innerHTML = (data.products.MUTTON.quick_status.sellPrice + 2).toFixed(1);
	document.querySelector('#snow_ppu').innerHTML = (3.75).toFixed(1);
	document.querySelector('#chicken_ppu').innerHTML = (data.products.RAW_CHICKEN.quick_status.sellPrice + data.products.FEATHER.quick_status.sellPrice).toFixed(1);
	document.querySelector('#gunpowder_ppu').innerHTML = data.products.SULPHUR.quick_status.sellPrice.toFixed(1);
	document.querySelector('#blaze_ppu').innerHTML = data.products.BLAZE_ROD.quick_status.sellPrice.toFixed(1);

//Display Coins per 24 Hours
	document.querySelector('#cow11_c24').innerHTML = formatNumber((86400/10.4*1* (data.products.RAW_BEEF.quick_status.sellPrice + data.products.LEATHER.quick_status.sellPrice)).toFixed(1));
	document.querySelector('#cow9_c24').innerHTML = formatNumber((86400/13.6*1* (data.products.RAW_BEEF.quick_status.sellPrice + data.products.LEATHER.quick_status.sellPrice)).toFixed(1));
	document.querySelector('#glowstone9_c24').innerHTML = formatNumber((86400/12.8*1.5*data.products.GLOWSTONE_DUST.quick_status.sellPrice).toFixed(1));
	document.querySelector('#glowstone7_c24').innerHTML = formatNumber((86400/15.2*1.5*data.products.GLOWSTONE_DUST.quick_status.sellPrice).toFixed(1));
	document.querySelector('#clay11_c24').innerHTML =formatNumber((86400/12.8*2* data.products.CLAY_BALL.quick_status.sellPrice).toFixed(1));
	document.querySelector('#gold_c24').innerHTML = formatNumber((86400/11.2*0.5*data.products.GOLD_INGOT.quick_status.sellPrice).toFixed(1));
	document.querySelector('#mutton_c24').innerHTML = formatNumber((86400/9.6*0.5*(data.products.MUTTON.quick_status.sellPrice + 2)).toFixed(1));
	document.querySelector('#snow_c24').innerHTML = formatNumber((86400/5.2*2*3.75).toFixed(1));
	document.querySelector('#chicken_c24').innerHTML = formatNumber((86400/12*1*(data.products.RAW_CHICKEN.quick_status.sellPrice + data.products.FEATHER.quick_status.sellPrice)).toFixed(1));
	document.querySelector('#gunpowder_c24').innerHTML = formatNumber((86400/14.4*0.5*data.products.SULPHUR.quick_status.sellPrice).toFixed(1));
	document.querySelector('#blaze_c24').innerHTML = formatNumber((86400/16.8*0.5*data.products.BLAZE_ROD.quick_status.sellPrice).toFixed(1));



//Display Coins with Diamond Spread
	document.querySelector('#cow11_dia').innerHTML = formatNumber((86400/10.4*1*  (data.products.RAW_BEEF.quick_status.sellPrice + data.products.LEATHER.quick_status.sellPrice) +138240/11.2).toFixed(1));
	document.querySelector('#cow9_dia').innerHTML = formatNumber((86400/13.6*1*  (data.products.RAW_BEEF.quick_status.sellPrice + data.products.LEATHER.quick_status.sellPrice) +138240/13.6).toFixed(1));
	document.querySelector('#glowstone9_dia').innerHTML = formatNumber((86400/12.8*1.5*data.products.GLOWSTONE_DUST.quick_status.sellPrice +138240/12.8).toFixed(1));
	document.querySelector('#glowstone7_dia').innerHTML = formatNumber((86400/15.2*1.5*data.products.GLOWSTONE_DUST.quick_status.sellPrice +138240/15.2).toFixed(1));
	document.querySelector('#clay11_dia').innerHTML =formatNumber((86400/12.8*2* data.products.CLAY_BALL.quick_status.sellPrice +138240/12.8).toFixed(1));
	document.querySelector('#gold_dia').innerHTML = formatNumber((86400/11.2*0.5*data.products.GOLD_INGOT.quick_status.sellPrice +138240/11.2).toFixed(1));
	document.querySelector('#mutton_dia').innerHTML = formatNumber((86400/9.6*0.5*(data.products.MUTTON.quick_status.sellPrice + 2) +138240/9.6).toFixed(1));
	document.querySelector('#snow_dia').innerHTML = formatNumber((86400/5.2*2*3.75 +138240/5.2).toFixed(1));
	document.querySelector('#chicken_dia').innerHTML = formatNumber((86400/12*1*(data.products.RAW_CHICKEN.quick_status.sellPrice + data.products.FEATHER.quick_status.sellPrice) +138240/12).toFixed(1));
	document.querySelector('#gunpowder_dia').innerHTML = formatNumber((86400/14.4*0.5*data.products.SULPHUR.quick_status.sellPrice +138240/14.4).toFixed(1));
	document.querySelector('#blaze_dia').innerHTML = formatNumber((86400/16.8*0.5*data.products.BLAZE_ROD.quick_status.sellPrice +138240/16.8).toFixed(1));


//Display Acacia Log Prices
	document.querySelector('#acacia_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_ACACIA_LOG.quick_status.buyPrice).toFixed(1));
	document.querySelector('#acacia_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_ACACIA_LOG.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#acacia_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_ACACIA_LOG.quick_status.sellPrice).toFixed(1));
	document.querySelector('#acacia_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_ACACIA_LOG.quick_status.sellPrice * 64).toFixed(1));

//Display Birch Log Prices
	document.querySelector('#birch_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_BIRCH_LOG.quick_status.buyPrice).toFixed(1));
	document.querySelector('#birch_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_BIRCH_LOG.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#birch_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_BIRCH_LOG.quick_status.sellPrice).toFixed(1));
	document.querySelector('#birch_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_BIRCH_LOG.quick_status.sellPrice * 64).toFixed(1));

//Display Dark Oak Log Prices
	document.querySelector('#dark_oak_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_DARK_OAK_LOG.quick_status.buyPrice).toFixed(1));
	document.querySelector('#dark_oak_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_DARK_OAK_LOG.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#dark_oak_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_DARK_OAK_LOG.quick_status.sellPrice).toFixed(1));
	document.querySelector('#dark_oak_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_DARK_OAK_LOG.quick_status.sellPrice * 64).toFixed(1));

//Display Dark Oak Log Prices
	document.querySelector('#oak_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_OAK_LOG.quick_status.buyPrice).toFixed(1));
	document.querySelector('#oak_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_OAK_LOG.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#oak_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_OAK_LOG.quick_status.sellPrice).toFixed(1));
	document.querySelector('#oak_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_OAK_LOG.quick_status.sellPrice * 64).toFixed(1));

//Display Dark Oak Log Prices
	document.querySelector('#spruce_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_SPRUCE_LOG.quick_status.buyPrice).toFixed(1));
	document.querySelector('#spruce_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_SPRUCE_LOG.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#spruce_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_SPRUCE_LOG.quick_status.sellPrice).toFixed(1));
	document.querySelector('#spruce_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_SPRUCE_LOG.quick_status.sellPrice * 64).toFixed(1));



//Display Beef prices
	document.querySelector('#beef_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_RAW_BEEF.quick_status.buyPrice).toFixed(1));
	document.querySelector('#beef_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_RAW_BEEF.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#beef_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_RAW_BEEF.quick_status.sellPrice).toFixed(1));
	document.querySelector('#beef_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_RAW_BEEF.quick_status.sellPrice * 64).toFixed(1));

//Display Leather prices
	document.querySelector('#leather_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_LEATHER.quick_status.buyPrice).toFixed(1));
	document.querySelector('#leather_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_LEATHER.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#leather_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_LEATHER.quick_status.sellPrice).toFixed(1));
	document.querySelector('#leather_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_LEATHER.quick_status.sellPrice * 64).toFixed(1));

//Display Glowstone prices
	document.querySelector('#glowstone_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_GLOWSTONE.quick_status.buyPrice).toFixed(1));
	document.querySelector('#glowstone_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_GLOWSTONE.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#glowstone_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_GLOWSTONE.sell_summary[0].pricePerUnit).toFixed(1));
	document.querySelector('#glowstone_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_GLOWSTONE.sell_summary[0].pricePerUnit * 64).toFixed(1));

//Display Clay prices
	document.querySelector('#clay_buy_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_CLAY_BALL.quick_status.buyPrice).toFixed(1));
	document.querySelector('#clay_buy_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_CLAY_BALL.quick_status.buyPrice * 64).toFixed(1));
	document.querySelector('#clay_sell_pp1').innerHTML =  formatNumber((data.products.ENCHANTED_CLAY_BALL.quick_status.sellPrice).toFixed(1));
	document.querySelector('#clay_sell_pp64').innerHTML =  formatNumber((data.products.ENCHANTED_CLAY_BALL.quick_status.sellPrice * 64).toFixed(1));
}

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}