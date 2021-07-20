 
		function check(){
			
			
			var a="Do some more research and try again later!";
			var b="You're fairly good at this!";
			var c="Congradulations! You are execillent!";
			
			var i=0;
			var q1=document.quizform.q1.value;
			var q2=document.quizform.q2.value;
			var q3=document.quizform.q3.value;
			var q4=document.quizform.q4.value;
			var q5=document.quizform.q5.value;
	
			
			if (q1=="answer1.3")
            {
                i+=20;
            }
            
            else
            {
				i--;
				document.getElementById("div1").style.backgroundColor="red";
            }
			
            
			if (q2=="answer2.4")
            {
                i+=20;
			}
            
            else
            {
				i--;
            }
            
            
			if (q3=="answer3.4")
            {
                i+=20;
			}
            
            else
            {
				i--;
            }
            
            
			if (q4=="answer4.3")
            {
                i+=20;
			}
            
            else
            {
				i--;
            }
            
            
			if (q5=="answer5.3")
            {
                i+=20;
			}
            
            else
            {
				i--;
			
				document.getElementById("div5").style.backgroundColor="red";
            }
				
			
			if (i<0)
            {
				
				document.body.style.backgroundColor="red";
				alert("You scored"+" "+i+" "+"marks!"+" "+a+"\nThese are the correct answers.\nQuestion 01\nAnswer1.3\n\nQuestion 02\nAnswer2.4\n\nQuestion 03\nAnswer3.4 \n\nQuestion 04\nAnswer4.3\n\nQuestion 05\nAnswer5.3");	
			}
            
			else if(0<i<=50)
            {
				document.body.style.backgroundColor="blue";
				alert("You scored"+" "+i+" "+"marks!"+" "+b+"\nThese are the correct answers.\nQuestion 01\nAnswer1.3\n\nQuestion 02\nAnswer2.4\n\nQuestion 03\nAnswer3.4 \n\nQuestion 04\nAnswer4.3\n\nQuestion 05\nAnswer5.3");
			}
            
			else
            {
				
				document.body.style.backgroundColor="green";
				alert("You scored"+" "+i+" "+"marks!"+" "+c+"\nThese are the correct answers.\nQuestion 01\nAnswer1.3\n\nQuestion 02\nAnswer2.4\n\nQuestion 03\nAnswer3.4 \n\nQuestion 04\nAnswer4.3\n\nQuestion 05\nAnswer5.3");
			}
			}
			
			
			
		var tot_seconds=60*10;
		var c_minutes=parseInt(tot_seconds/60);
		var c_seconds=parseInt(tot_seconds%60);
        
        
		
		function checktime()
        {
			document.getElementById("quiztimeleft").innerHTML="Time Left :  " + c_minutes + " minutes  " + c_seconds + " seconds";
			if(tot_seconds<=0){
			document.write("Time Out!");
			setInterval("check()",1);
			
			}else{
			tot_seconds=tot_seconds-1;
			c_minutes=parseInt(tot_seconds/60);
			c_seconds=parseInt(tot_seconds%60);
			setTimeout("checktime()",1000);
        }
			
		}
        
         
	    var fontSize = 1;
        
        
        function zoomIn()
        {
	        fontSize += 0.1;
	        document.body.style.fontSize = fontSize + "em";
        }
      
        function zoomOut()
        {
	        fontSize -= 0.1;
	        document.body.style.fontSize = fontSize + "em";
        }
		
