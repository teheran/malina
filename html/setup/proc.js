var  arr=[]; c=1;


$(function() {
  
    setInterval(function() {
        tick();
       
         }, 1000);
     tick();
  });


 


 function dataRequest () {
    HTR = ('v' == '\v') ? new ActiveXObject ('Microsoft.XMLHTTP') 
			: new XMLHttpRequest ();
    HTR.open ('get', './proc.php');
    HTR.onreadystatechange = function ()
           {
          if (HTR.readyState == 4)
                {
              var Z = HTR.responseText;
              arr = Z.split(',');
                }
             }
     HTR.send (null);
       }
   
  
  
  function tick() {
    onload=dataRequest();

    
//----- text values
    $(document).ready(function () {
	
	$('#map_div').html((arr[0]==1)?"Работает":"Не работает");
	$('#mppt_div').html((arr[1]==1)?"Работает":"Не работает");
	$('#batmon_div').html((arr[2]==1)?"Работает":"Не работает");
	$('#sms_div').html((arr[3]==1)?"Работает":"Не работает");
	$('#mysql').html((arr[4]==1)?"Работает":"Не работает");

       });
   };
