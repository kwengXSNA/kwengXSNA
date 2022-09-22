<!-- <?php
$knight = "K";
$Queen = "Q";
$Pawn = "P";
$Bishop = "B";
$Rook = "R";
$King = "W";

?> -->

<table width="300px" cellspacing="0.3px" cellpadding="0.3px" border="1.5px">
   
      <?php
      $knight = "K";
      $Queen = "Q";
      $Pawn = "P";
      $Bishop = "B";
      $Rook = "R";
      $King = "W";

      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=35px; width=50px; bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=35px; width=50px; bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>