<html>
<heady>

</heady>
<body style='text-align:center'  background="02.14.numbers.jpg "  >
<b style="font-size:3em;color:black">Time to play!</b> <br><br>

<b style="font-size:2em;color:black" > Let's guess a number between 1 to 10</b> <br><br>
<form>
    <p><input type="text" name="Number"></p>
    <p><input type="submit" name='Guess'  value="Guess!"></p>
    <?php
    $random =mt_rand(1,10);
    if(isset($_GET['Number'])){
        if($_GET['Number']==$random){
            echo "You got the right number, it was $random :)";
        }else{
            echo "Try again dude :) the correct number was $random ";
        }
    }


    ?>
</form>
</body>
</html>