<?php
  session_start();
  include "home.php";
  $con=mysql_connect("localhost","root","");
	mysql_select_db("association",$con);
  
    $username = $_SESSION['username'];
	?> <center><?php echo "This is ".$username." Meal Section ";?></center> <?php
	

					
					 
     
     $sum = 0;
   
    $sql1="SELECT * FROM `off` WHERE username='$username'";
      $res=mysql_query($sql1,$con);
	  if($res){
	         echo '';
	  }
	  while($row = @mysql_fetch_assoc( $res)){
		  if($row['to']< $row['from'])
		  {
			  $sum = $sum +31 - $row['from'] ;
		  }
		  else
		  {
			 $sum =$sum + $row['to']-$row['from'] + 1;   
		  }
		
		  
	 }
   ?>	
  
	 
	 <table border="1" style="width:99%;margin-left:0px;padding:3px 25px">
		<div class="jam" style="background-color:pink">
             <tr style="background-color:pink;  height:40px;">
                  
                    <td style="padding:0 30px">username</td>		
                    <td style="padding:0 30px">Offdays</td>
					<td style="padding:0 30px">PrevDuesPaid</td>
					<td style="padding:0 30px">TotalDues</td>
					<td style="padding:0 30px">Month</td>
			</tr>	
			<tr style="background-color:pink;  height:40px;">
                   <td style="padding:0 30px;"> <?php echo $_SESSION['username']; ?> </td>
                   	
                  
					<td style="padding:0 30px"> <?php echo $sum; ?> </td> 
					
					
					<?php
					
					    $sql1="SELECT * FROM `off` WHERE username='$username'";
      $res=mysql_query($sql1,$con);
	  if($res){
	         echo '';
	  }
	  while($row = @mysql_fetch_assoc( $res)){
		
		   $pdue = $row['prevdue'];
		
	 }
	 $currentmonth = date('m');
	 if( $currentmonth == 01)    {
	 
	 $tduee = (31-$sum) * 40 + $pdue;
	 ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo January; ?> </td> <?php	
	 }
			
		 else if($currentmonth == 02)	{		
			 $tduee = (29-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo February; ?> </td> <?php	
	     }	
		  else if($currentmonth == 03)	{		
			 $tduee = (31-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo March; ?> </td> <?php	
	     }	
		  else if($currentmonth == 04)	{		
			 $tduee = (30-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo April; ?> </td> <?php	
	     }	
		  else if($currentmonth == 05)	{		
			 $tduee = (31-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo May; ?> </td> <?php	
	     }	
		  else if($currentmonth == 06)	{		
			 $tduee = (30-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo June; ?> </td> <?php	
	     }	
		  else if($currentmonth == 07)	{		
			 $tduee = (31-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo July; ?> </td> <?php	
	     }	
		  else if($currentmonth == 08)	{		
			 $tduee = (30-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo Auguest; ?> </td> <?php	
	     }	
		  else if($currentmonth == 09)	{		
			 $tduee = (31-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo September; ?> </td> <?php	
	     }	
		  else if($currentmonth == 10)	{		
			 $tduee = (30-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo October; ?> </td> <?php	
	     }	
		  else if($currentmonth == 11)	{		
			 $tduee = (31-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo November; ?> </td> <?php	
	     }	
		  else 	{		
			 $tduee = (30-$sum) * 40 + $pdue;
	     ?>
					
					<td style="padding:0 30px"><?php echo  $pdue; ?> </td>
					<td style="padding:0 30px"><?php echo $tduee; ?> </td>
						<td style="padding:0 30px"><?php echo December; ?> </td> <?php	
	     }	
		 ?>
		 
					
			</tr>	
			</div>
        </table>
       <div class="container well"style="margin-left:.50px">		
		<?php
		 include "foother.php";
		 ?>
		 </div>


				
             
	
  
