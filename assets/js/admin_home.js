$(function () { 
    var data = [
        {label: "Nannies", data:<?php  echo $nanny_row;?> },

        {label: "Users", data: <?php  echo $user_row;?>}
    ];

    var options = {
            series: {
                pie: {show: true}
		    },
            legend: {
                show: false
            }
         };

    $.plot($("#flotcontainer"), data, options);  
});