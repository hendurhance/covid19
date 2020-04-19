/*
 *   Copyright (c) 2020 
 *   All rights reserved.
 */

$(document).ready(function(){
		 
    push = false;
       
   $('ul li a').click(function(){
       
       $(".tab").removeClass("active");
       
       $(this).addClass("active");
           
          $(".container-content").removeClass("actives");
       
       var contentId = $(this).attr("href");
       
       
       $('.container-content[id="'+contentId+'"]').addClass("actives");
       
       if(!push)
           
       history.pushState({}, '', contentId);
      
       push = false;
       
       return false;
      
   }); 
   
 
  $(window).on("popstate", function() {
      
    push = true;
    
   var h = (window.location.href.indexOf("/") > -1) ? window.location.href.split("/").pop() : false;
       
   if(h == 'index.php') {
               
    $('ul li a[href="home"]').click();
           
           
   } else {
           
       $('ul li a[href="'+h+'"]').click();
           
       
       }
       
   });
});


// Corona Virus Fetch API Data

window.onload = function() {
	getCovidStatistics();
}

function getCovidStatistics() {
	fetch('https://coronavirus-tracker-api.herokuapp.com/v2/locations/173')
	.then(function(resp) { return resp.json() })
	.then(function(data) {
        let confirmedCases = data.location.latest.confirmed;
		let deaths = data.location.latest.deaths;

		document.getElementById('cases').innerHTML = confirmedCases.toLocaleString('en');
        document.getElementById('deaths').innerHTML = deaths.toLocaleString('en');
        document.getElementById('deathsPercent').innerHTML = ((Number(deaths)/Number(confirmedCases))*100).toLocaleString("en", {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "%";		
	})
	.catch(function() {
		console.log("error");
	})
	setTimeout(getCovidStatistics, 18000) // update every 5 hour
}



//  Form validation

bootstrapValidate('#myMin', 'min:5:Enter at least 5 characters!' )
bootstrapValidate('#myEmail', 'email:Enter a valid Email Address!' )
bootstrapValidate('#myPhone', 'integer:Enter numbers only!')
bootstrapValidate('#myMin', 'min:5:Enter at least 5 characters!' )
bootstrapValidate('#myAddress', 'min:10:Enter a vaild Address!' )
bootstrapValidate('#myMsg', 'min:20:Message is too short!' )

