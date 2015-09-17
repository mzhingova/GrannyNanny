
function calendarWidget(el, params) { 
	
		var now   = new Date();
		var thismonth = now.getMonth();
		var thisyear  = now.getYear();
		if(thisyear < 1000) {
			thisyear += 1900;
		}
		
		var opts = {
			month: thismonth,
			year: thisyear
		};
		
		$.extend(opts, params);
		
		var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		month = i = parseInt(opts.month);
		year = parseInt(opts.year);
		var m = 0;
		var table = '';
		
			// next month
			if (month == 11) {
				//var next_month = '<a href="?month=' + 1 + '&amp;year=' + (year + 1) + '" title="' + monthNames[0] + ' ' + (year + 1) + '">' + monthNames[0] + ' ' + (year + 1) + '</a>';
				var next_month = '<a href="javascript:void(0);" class="next-month" id="month-' + (year + 1) + '-0"></a>';
			} else {
				//var next_month = '<a href="?month=' + (month + 2) + '&amp;year=' + (year) + '" title="' + monthNames[month + 1] + ' ' + (year) + '">' + monthNames[month + 1] + ' ' + (year) + '</a>';
				var next_month = '<a href="javascript:void(0);" class="next-month" id="month-' + year + '-' + (month + 1) + '"></a>';
			}			
				
			// previous month
			if (month === 0) {
				//var prev_month = '<a href="?month=' + 12 + '&amp;year=' + (year - 1) + '" title="' + monthNames[11] + ' ' + (year - 1) + '">' + monthNames[11] + ' ' + (year - 1) + '</a>';
				var prev_month = '<a href="javascript:void(0);" class="prev-month" id="month-' + (year - 1) + '-11"></a>';
			} else {
				//var prev_month = '<a href="?month=' + (month) + '&amp;year=' + (year) + '" title="' + monthNames[month - 1] + ' ' + (year) + '">' + monthNames[month - 1] + ' ' + (year) + '</a>';
				var prev_month = '<a href="javascript:void(0);" class="prev-month" id="month-' + year + '-' + (month - 1) + '"></a>';
			}		
				
			
			// uncomment the following lines if you'd like to display calendar month based on 'month' and 'view' paramaters from the URL
			table += ('<div id="month-nav">');
			table += ('<div class="nav-prev">'+ prev_month +'</div>');
			table += ('<h1 id="current-month">'+monthNames[month]+' '+year+'</h1>');
			table += ('<div class="nav-next">'+ next_month +'</div>');
			table += ('<div class="clear"></div>');
			table += ('</div>');
			
			table += ('<div class="clear"></div>');
			
			table += ('<table class="calendar-month " ' +'id="calendar-month'+i+' " cellspacing="0">');	
		
			table += '<tr>';
			
			for (d=0; d<7; d++) {
				table += '<th class="weekday">' + dayNames[d] + '</th>';
			}
			
			table += '</tr>';
		
			var days = getDaysInMonth(month,year);
            var firstDayDate=new Date(year,month,1);
            var firstDay=firstDayDate.getDay();
			
			var prev_days = getDaysInMonth(month,year);
            var firstDayDate=new Date(year,month,1);
            var firstDay=firstDayDate.getDay();
			
			var prev_m = month === 0 ? 11 : month-1;
			var prev_y = prev_m == 11 ? year - 1 : year;
			var prev_days = getDaysInMonth(prev_m, prev_y);
			firstDay = (firstDay === 0 && firstDayDate) ? 7 : firstDay;
	
			var i = 0;
            for (j=0;j<42;j++){
			  
              if ((j<firstDay)){
                table += ('<td class="other-month"><span class="day">'+ (prev_days-firstDay+j+1) +'</span></td>');
			  } else if ((j>=firstDay+getDaysInMonth(month,year))) {
				i = i+1;
                table += ('<td class="other-month"><span class="day">'+ i +'</span></td>');			 
              }else{
                table += ('<td class="current-month day'+(j-firstDay+1)+'"><span class="day">'+(j-firstDay+1)+'</span></td>');
              }
              if (j%7==6)  table += ('</tr>');
            }

            table += ('</table>');

		el.html(table);
		$('#accordion-calendar tbody tr').addClass('week');
	}
	
	function getDaysInMonth(month,year)  {
		var daysInMonth=[31,28,31,30,31,30,31,31,30,31,30,31];
		if ((month==1)&&(year%4===0)&&((year%100!==0)||(year%400===0))){
		  return 29;
		}else{
		  return daysInMonth[month];
		}
	}	
	
	// jQuery plugin initialisation
	$.fn.calendarWidget = function(params) {    
		calendarWidget(this, params);		
		return this; 
	}; 





	var currentdate = new Date();
	
	
	var currentmonth = currentdate.getMonth();
	var currentyear = currentdate.getYear() + 1900;
	
	$('#accordion-calendar').calendarWidget();
		
	$('#accordion-calendar tbody tr').addClass('week');
	//$('#accordion-calendar tbody tr:first-child').removeClass('week').addClass('week-head');
	
	var currentWeek = ' \
		<tr class="week-details"> \
			<td><div>qko bob s cigari</div></td> \
			<td><div>Content</div></td> \
			<td><div>Content</div></td> \
			<td><div>Content</div></td> \
			<td><div>Content</div></td> \
			<td><div>Content</div></td> \
			<td><div>Content</div></td> \
		</tr>';
		
	if($('#accordion-calendar tr:last-child td:first-child').hasClass('other-month')){
		$('#accordion-calendar tr:last-child').remove();
	}
	
	$('#accordion-calendar tr.week td').live('click',function() {
		if($(this).hasClass('current')) {
			$('.week-details td div').slideToggle(300,function() {
				$('tr.week-details').remove();
			});
			$(this).removeClass('current');
			$(this).parent().removeClass('current');
		} else if($(this).parent().hasClass('current')) {
			$('#accordion-calendar tr.week td').removeClass('current');
			$(this).addClass('current');
		} else {
			$('#accordion-calendar tr.week td').removeClass('current');
			$('#accordion-calendar tr.week').removeClass('current');
			$('tr.week-details').remove();

			$(this).addClass('current');
			$(this).parent().addClass('current');
			$(this).parent().after(currentWeek);

			if($('#accordion-calendar tr').hasClass('week-details')){
				$('.week-details td div').slideToggle(300);


			}
		}
	});

	$(".next-month").live('click',function() {
		currentmonth++;
		if(currentmonth == 12) {
			currentmonth = 0;
			currentyear++;
		}
		$("#accordion-calendar").calendarWidget({
			month: currentmonth,
			year: currentyear
		});
	});

	$(".prev-month").live('click',function() {
		currentmonth--;
		if(currentmonth == -1) {
			currentmonth = 11;
			currentyear--;
		}
		$("#accordion-calendar").calendarWidget({
			month: currentmonth,
			year: currentyear
		});
	});
  