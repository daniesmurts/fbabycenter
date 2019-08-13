 
// Function to return the array 
// of factors of n 
function factors( $n ) {  
      
    // Declare an empty array 
    $fact = array(); 
      
    // Loop to find the  
    for ( $i = 1; $i < $n; $i++) {  
      
        // Check if i is the factor of 
        // n then pusj it into array 
        if( $n % $i == 0 ) 
            array_push( $fact, $i ); 
    } 
      
    // Return the array 
    return $fact; 
}  
  
// Declare a variable and initialize it 
$num = 24; 
  
// Function call 
$nFactors = factors($num); 
  
// Display the result 
echo 'Factors of ' . $num . ' are: <br>'; 
  
foreach( $nFactors as $x ) { 
    echo $x . "<br>"; 
} 
  
?> 