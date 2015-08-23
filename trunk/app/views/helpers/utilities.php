<?php

	class UtilitiesHelper extends AppHelper{

		#Recursive Funcition of Var Dump
		function vardump_table($var, $title=false, $level=0)
		{
		    if($level==0)
		    {
		        echo '<table width="400" border="0" cellspacing="1" cellpadding="3" class="dump">';
		        
		        if($title)
		              echo '<tr>
		                     <th align="center" colspan="2">'.$title.'</th>
		                   </tr>';
		          
		        echo '
		          <tr>
		            <th align="right">VAR NAME</th>
		            <th align="left">VALUE</th>
		          </tr>';
		    }
		    else
		    {
		        echo '<tr>
		                <td colspan="2">
		                    <table width="100%" border="0" cellspacing="3" cellpadding="3" class="dump_b">
		                </td>
		              </tr>';
		    }
		    
		    foreach($var as $i=>$value)
		    {
		        if(is_array($value) or is_object($value))
		        {
		            $this->vardump_table($value, false, ($level +1));
		        }
		        else
		        {
		                echo '<tr>
		                        <td align="right" width="50%" >'.$i.'</th>
		                        <td align="left" width="50%" >'.$value.'</th>
		                       </tr>';
		        }
		    }
		    echo '</table>';
		}
	}
?>
