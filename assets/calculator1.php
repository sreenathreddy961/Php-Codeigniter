
<html> 
   <head> 
      <script>
	  function Focus()
	{
		document.getElementById("result").focus();
	}
         function display(val) 
         { 
             document.getElementById("result").value+=val 
         }
         function solve() 
         { 
             let x = document.getElementById("result").value 
             let y = eval(x) 
             document.getElementById("result").value = y 
         } 
         function clr() 
         { 
             document.getElementById("result").value = "" 
         } 
		 function clrLast()
         {
			var last=document.getElementById("result").value;
             document.getElementById("result").value = last.substring(0,last.length-1); 
         } 
      </script> 
      <style> 
		table
		{
			border-collapse:collapse;
			border:0;
			background-color:black;
		}
         .title
		 { 
			margin-bottom: 10px; 
			text-align:center; 
			width: 270px; 
			color:black; 
			border: solid black 2px; 
         } 
  
         input[type="button"] 
         { 
			width:40px;  
			height:30px;  
			border:none;  
			border-radius:8px;  
			margin-left:7px;  
			cursor:pointer;  
			border-top:2px solid transparent;
			box-shadow: inset 2px 3px 0 white;
			color:white;  
			background-color:#ff4561;  
			border-bottom:white 2px solid;  
			
         } 
  
         
		#result  
		{  
			position:relative;  
			left:0px;  
			top:0px;  
			height:35px;  
			color:black;  
			background-color:#bccd95;  
			border-radius:13px;
			font-size:21px;  
			text-align:right;  
		} 
      </style> 
   </head>
   <body onload="Focus()"> 
   <center>
      <div class = "title" >Avanze Calculator</div> 
      <table border="1"> 
         <tr> 
            <div id="res"><td colspan="4"><input type="text" id="result" placeholder="0"/></td></div>
         </tr> 
		 <tr>
            <td><input type="button" value="mrc" /> </td> 
            <td><input type="button" value="AC" onclick="clr()"/> </td> 
			<td><input type="button" value="C" onclick="clrLast()"/> </td>
            <td><input type="button" value="%" onclick="display('%')"/> </td> 
            
         </tr> 
         <tr>
            <td><input type="button" value="1" onclick="display('1')"/> </td> 
            <td><input type="button" value="2" onclick="display('2')"/> </td> 
            <td><input type="button" value="3" onclick="display('3')"/> </td> 
            <td><input type="button" value="/" onclick="display('/')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="display('4')"/> </td> 
            <td><input type="button" value="5" onclick="display('5')"/> </td> 
            <td><input type="button" value="6" onclick="display('6')"/> </td> 
            <td><input type="button" value="-" onclick="display('-')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="7" onclick="display('7')"/> </td> 
            <td><input type="button" value="8" onclick="display('8')"/> </td> 
            <td><input type="button" value="9" onclick="display('9')"/> </td> 
            <td><input type="button" value="+" onclick="display('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="." onclick="display('.')"/> </td> 
            <td><input type="button" value="0" onclick="display('0')"/> </td>
            <td><input type="button" value="=" onclick="solve()"/> </td> 
            <td><input type="button" value="*" onclick="display('*')"/> </td> 
         </tr> 
      </table> 
	  </center>
   </body> 
</html>    