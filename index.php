<?php
function calculateFactorial() {
  
    // initialize the variables
    $counter = 1;
    $factorial = 1;
    $userNum = intval($_POST['userNum']);

    // use a do..while loop to calculate the factorial
    do {
        $factorial *= $counter;
        $counter++;
    } while ($counter <= $userNum);

    // display the factorial of the integer
    echo "The factorial of " . $userNum . " is " . $factorial;
}

// Create a space where the user information will be displayed
echo '<div id="display-results">';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    calculateFactorial(); 
}
echo '</div>';
?>


<!DOCTYPE html>
<html>
  <head>
    <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Savyon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--for favicon on this page-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    
    <!--Style on this page-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculate Factorial</title>
  </head>
  <body>
    <h1>Calculate Factorial</h1>
	<h3>This program will calculate the factorial of a positive integer:</h3>
	<table>
    
    <!--area for user to enter integer-->
		<tr align = "center">
			<td valign="top" align="right">					
				<form method="post">
					<label for="userNum">Enter a positive integer:</label>
          <br></br>
					<input type="number" name="userNum" id="userNum" min="1" required><br><br>
					<input type="submit" value="Calculate Factorial">
				</form>
			</td>
			<td valign="top" align="left">
        
        <!--image on this page-->
				<img src="./images/factoo.png" alt="Factorial" width="60%">
			</td>
		</tr>
	</table>	
    
	<!-- Create a space where the user information will be displayed -->
	<div id="display-results">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			calculateFactorial();
		}
		?>
	</div>
  </body>
</html>
