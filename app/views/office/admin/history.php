<?php include("header.html") ?>

<select>
	<option>Date</option>

</select>
<button> Find </button>

<table border="0" cellspacing="0" cellpadding="0">
 	<tr>
		 <th>Date</th>
		 <th>Order</th>
		 <th>Amount</th>
 	</tr>
    <?php

    foreach($data["history"] as $his){
        echo "<tr>
		<td>{$his["date"]}</td>
		 <td>{$his['foodName']}</td>
		 <td>{$his['amount']} BDT</td>
		 </td>
 	      </tr>";
    }

    ?>

 	
 </table>
</td>

<?php include("footer.html") ?>
