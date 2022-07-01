<?php
$num = $_POST['num'];
echo "<table border = 1>";
echo "<table border = 1>";

if($num)
{
    for ($i=1; $i<=10; $i++)
    {
       
        $mul = $num * $i;
        echo "<tr> <td>" . $num ."</td> <td>  *  </td> <td>". $i ."</td> <td>". " = " ."</td> <td>". $mul . "</td> </tr>";
    }
}
else
{
    echo "Invalid Entry!";
}
