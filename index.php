<html>
 <head>
   <title>Příruby</title>
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <?php  
 
echo "<div id='mypage'>
 
<div id='obsah'>
 
 <div id='hornilista'>
 <p class='nadpis'>EN Příruby 1092-1</p>
 </div>
 
 
<div id='lista1'>
 PN: 
 <div class='box'>
  <select>
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
    <option>Option 4</option>
    <option>Option 5</option>
  </select>
 </div>
  </div>
  
 <div id='lista2'>
 DN: 
 <div class='box'>
  <select>
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
    <option>Option 4</option>
    <option>Option 5</option>
  </select>
 </div>
 </div>




<div id='obrazek'>

</div>




<div id='tabulka'>";

include 'table1.php';

/*tabulka*/
echo "</div>";

/*obsah*/
echo "</div>";

/*mypage*/
echo "</div>";


?>
 </body>
</html>
