<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <?php
    //Number of their index (0:me 1:comp1 ...)
    $winner = array();
    
    $array = array(); $array1 = array(); $array2 = array(); $array3 = array();
    $me = array("points" => 0, "hand" => $array, "img" => "<img src=\"PlayerImgs/player1.jpg\" alt=\"Player1\">");
        $comp1 = array("points" => 0, "hand" => $array1, "img" => "<img src=\"PlayerImgs/player2.jpg\" alt=\"Player2\">");
        $comp2 = array("points" => 0, "hand" => $array2,"img" => "<img src=\"PlayerImgs/player3.jpg\" alt=\"Player3\">") ;
        $comp3 = array("points" => 0, "hand" => $array3,"img" => "<img src=\"PlayerImgs/player4.jpg\" alt=\"Player4\">") ;
    $players = array(
        $me,
        $comp1,
        $comp2,
        $comp3,
        );

    $kingH = array("value" => 13,"img" => "<img src=\"CardImgs/Hearts/kingH.png\" alt=\"CardImage\">",);
    $kingD = array("value" => 13,"img" => "<img src=\"CardImgs/Diamonds/kingD.png\" alt=\"CardImage\">",);
    $kingS = array("value" => 13,"img" => "<img src=\"CardImgs/Spades/kingS.png\" alt=\"CardImage\">",);
    $kingC = array("value" => 13,"img" => "<img src=\"CardImgs/Clubs/kingC.png\" alt=\"CardImage\">",);
    
    $queenH = array("value" => 12,"img" => "<img src=\"CardImgs/Hearts/queenH.png\" alt=\"CardImage\">",);
    $queenD = array("value" => 12,"img" => "<img src=\"CardImgs/Diamonds/queenD.png\" alt=\"CardImage\">",);
    $queenS = array("value" => 12,"img" => "<img src=\"CardImgs/Spades/queenS.png\" alt=\"CardImage\">",);
    $queenC = array("value" => 12,"img" => "<img src=\"CardImgs/Clubs/queenC.png\" alt=\"CardImage\">",);
    
    $jackH = array("value" => 11, "img" => "<img src=\"CardImgs/Hearts/jackH.png\" alt=\"CardImage\">",);
    $jackD = array("value" => 11, "img" => "<img src=\"CardImgs/Diamonds/jackD.png\" alt=\"CardImage\">",);
    $jackS = array("value" => 11, "img" => "<img src=\"CardImgs/Spades/jackS.png\" alt=\"CardImage\">",);
    $jackC = array("value" => 11, "img" => "<img src=\"CardImgs/Clubs/jackC.png\" alt=\"CardImage\">",);
    
    $tenH = array("value" => 10, "img" => "<img src=\"CardImgs/Hearts/tenH.png\" alt=\"CardImage\">",);
    $tenD = array("value" => 10, "img" => "<img src=\"CardImgs/Diamonds/tenD.png\" alt=\"CardImage\">",);
    $tenS = array("value" => 10, "img" => "<img src=\"CardImgs/Spades/tenS.png\" alt=\"CardImage\">",);
    $tenC = array("value" => 10, "img" => "<img src=\"CardImgs/Clubs/tenC.png\" alt=\"CardImage\">",);
    
    $nineH = array("value" => 9, "img" => "<img src=\"CardImgs/Hearts/nineH.png\" alt=\"CardImage\">",); 
    $nineD = array("value" => 9, "img" => "<img src=\"CardImgs/Diamonds/nineD.png\" alt=\"CardImage\">",);
    $nineS = array("value" => 9, "img" => "<img src=\"CardImgs/Spades/nineS.png\" alt=\"CardImage\">",);
    $nineC = array("value" => 9, "img" => "<img src=\"CardImgs/Clubs/nineC.png\" alt=\"CardImage\">",);
    
    $eightH = array("value" => 8, "img" => "<img src=\"CardImgs/Hearts/eightH.png\" alt=\"CardImage\">",);
    $eightD = array("value" => 8, "img" => "<img src=\"CardImgs/Diamonds/eightD.png\" alt=\"CardImage\">",);
    $eightS = array("value" => 8, "img" => "<img src=\"CardImgs/Spades/eightS.png\" alt=\"CardImage\">",);
    $eightC = array("value" => 8, "img" => "<img src=\"CardImgs/Clubs/eightC.png\" alt=\"CardImage\">",);
    
    $sevenH = array("value" => 7, "img" => "<img src=\"CardImgs/Hearts/sevenH.png\" alt=\"CardImage\">",);
    $sevenD = array("value" => 7, "img" => "<img src=\"CardImgs/Diamonds/sevenD.png\" alt=\"CardImage\">",);
    $sevenS = array("value" => 7, "img" => "<img src=\"CardImgs/Spades/sevenS.png\" alt=\"CardImage\">",);
    $sevenC = array("value" => 7, "img" => "<img src=\"CardImgs/Clubs/sevenC.png\" alt=\"CardImage\">",);
    
    $sixH = array("value" => 6, "img" => "<img src=\"CardImgs/Hearts/sixH.png\" alt=\"CardImage\">",);
    $sixD = array("value" => 6, "img" => "<img src=\"CardImgs/Diamonds/sixD.png\" alt=\"CardImage\">",);
    $sixS = array("value" => 6, "img" => "<img src=\"CardImgs/Spades/sixS.png\" alt=\"CardImage\">",);
    $sixC = array("value" => 6, "img" => "<img src=\"CardImgs/Clubs/sixC.png\" alt=\"CardImage\">",);
    
    $fiveH = array("value" => 5, "img" => "<img src=\"CardImgs/Hearts/fiveH.png\" alt=\"CardImage\">",);
    $fiveD = array("value" => 5, "img" => "<img src=\"CardImgs/Diamonds/fiveD.png\" alt=\"CardImage\">",);
    $fiveS = array("value" => 5, "img" => "<img src=\"CardImgs/Spades/fiveS.png\" alt=\"CardImage\">",);
    $fiveC = array("value" => 5, "img" => "<img src=\"CardImgs/Clubs/fiveC.png\" alt=\"CardImage\">",);
    
    $fourH = array("value" => 4, "img" => "<img src=\"CardImgs/Hearts/fourH.png\" alt=\"CardImage\">",);
    $fourD = array("value" => 4, "img" => "<img src=\"CardImgs/Diamonds/fourD.png\" alt=\"CardImage\">",);
    $fourS = array("value" => 4, "img" => "<img src=\"CardImgs/Spades/fourS.png\" alt=\"CardImage\">",);
    $fourC = array("value" => 4, "img" => "<img src=\"CardImgs/Clubs/fourC.png\" alt=\"CardImage\">",);
    
    $threeH = array("value" => 3, "img" => "<img src=\"CardImgs/Hearts/threeH.png\" alt=\"CardImage\">",);
    $threeD = array("value" => 3, "img" => "<img src=\"CardImgs/Diamonds/threeD.png\" alt=\"CardImage\">",);
    $threeS = array("value" => 3, "img" => "<img src=\"CardImgs/Spades/threeS.png\" alt=\"CardImage\">",);
    $threeC = array("value" => 3, "img" => "<img src=\"CardImgs/Clubs/threeC.png\" alt=\"CardImage\">",);
    
    $twoH = array("value" => 2, "img" => "<img src=\"CardImgs/Hearts/twoH.png\" alt=\"CardImage\">",);
    $twoD = array("value" => 2, "img" => "<img src=\"CardImgs/Diamonds/twoD.png\" alt=\"CardImage\">",);
    $twoS = array("value" => 2, "img" => "<img src=\"CardImgs/Spades/twoS.png\" alt=\"CardImage\">",);
    $twoC = array("value" => 2, "img" => "<img src=\"CardImgs/Clubs/twoC.png\" alt=\"CardImage\">",);
    
    $aceH = array("value" => 1, "img" => "<img src=\"CardImgs/Hearts/aceH.png\" alt=\"CardImage\">",);
    $aceD = array("value" => 1, "img" => "<img src=\"CardImgs/Diamonds/aceD.png\" alt=\"CardImage\">",);    
    $aceS = array("value" => 1, "img" => "<img src=\"CardImgs/Spades/aceS.png\" alt=\"CardImage\">",);
    $aceC = array("value" => 1, "img" => "<img src=\"CardImgs/Clubs/aceC.png\" alt=\"CardImage\">",);
    

    //Hearts, Diamonds, Spades, Clubs

    $deck = array(
        $kingH, $kingD, $kingS, $kingC,
        $queenH, $queenD, $queenS, $queenC,
        $jackH, $jackD, $jackS, $jackC,
        $tenH, $tenD, $tenS, $tenC,
        $nineH, $nineD, $nineS, $nineC,
        $eightH, $eightD, $eightS, $eightC,
        $sevenH, $sevenD, $sevenS, $sevenC,
        $sixH, $sixD, $sixS, $sixC,
        $fiveH, $fiveD, $fiveS, $fiveC,
        $fourH, $fourD, $fourS, $fourC,
        $threeH, $threeD, $threeS, $threeC,
        $twoH, $twoD, $twoS, $twoC,
        $aceH, $aceD, $aceS, $aceC,
    );
    
    //Img 72x98 px
    

    function shuffleDeck(){
        global $deck;
        shuffle($deck);
    }

    
    //Works
    function dealAll(){
        //This will deal for all persons
        global $players, $deck, $kingH, $kingD, $kingS, $kingC,$queenH, $queenD, $queenS, $queenC,$jackH, $jackD, $jackS, $jackC,
        $tenH, $tenD, $tenS, $tenC,
        $nineH, $nineD, $nineS, $nineC,$eightH, $eightD, $eightS, $eightC,$sevenH, $sevenD, $sevenS, $sevenC,$sixH, $sixD, $sixS, $sixC,$fiveH, $fiveD, $fiveS, $fiveC,$fourH, $fourD, $fourS, $fourC,$threeH, $threeD, $threeS, $threeC,$twoH, $twoD, $twoS, $twoC,$aceH, $aceD, $aceS, $aceC;
        //Going for all four players
        //var_dump($aceC["value"]);
        for($x = 0; $x < 4; $x++){
            $numOfCards = rand(4,6);
            $y = 1;
            for($i = 0; $i < $numOfCards; $i++){
                array_push($players[$x]["hand"], $deck[$i]);
            }

            shuffleDeck();
        }
        
    }
    function whoWins(){ 
        global $players, $deck, $kingH, $kingD, $kingS, $kingC,$queenH, $queenD, $queenS, $queenC,$jackH, $jackD, $jackS, $jackC,
        $tenH, $tenD, $tenS, $tenC,
        $nineH, $nineD, $nineS, $nineC,$eightH, $eightD, $eightS, $eightC,$sevenH, $sevenD, $sevenS, $sevenC,$sixH, $sixD, $sixS, $sixC,$fiveH, $fiveD, $fiveS, $fiveC,$fourH, $fourD, $fourS, $fourC,$threeH, $threeD, $threeS, $threeC,$twoH, $twoD, $twoS, $twoC,$aceH, $aceD, $aceS, $aceC;
        global $winner;
        $minPoints = 100;
        for($i = 0; $i < 4; $i++){
            //Go through all in deck and add up points
            $sum = 0;
            for($y = 0; $y < (sizeof($players[$i]["hand"])); $y++){
                $sum = $sum + $players[$i]["hand"][$y]["value"];
            }
            
            $players[$i]["points"] = $sum;
            
            if(42 < $sum){
            }
            else{
                if($sum > $points42){
                    $points42 = $sum;
                }
            }
        }
        //Now we are going to set the winner to the number in the array
        for($i = 0; $i < 4; $i++){
            if($players[$i]["points"] == $points42){
                array_push($winner,$i);
<<<<<<< HEAD
                
=======
                break;
>>>>>>> 2b3005159b8001ab7e8ef040c90a93b6fb5643a3
            }
        }
    }
       function draw(){
        global $players, $deck, $kingH, $kingD, $kingS, $kingC,$queenH, $queenD, $queenS, $queenC,$jackH, $jackD, $jackS, $jackC,
        $tenH, $tenD, $tenS, $tenC,
        $nineH, $nineD, $nineS, $nineC,$eightH, $eightD, $eightS, $eightC,$sevenH, $sevenD, $sevenS, $sevenC,$sixH, $sixD, $sixS, $sixC,$fiveH, $fiveD, $fiveS, $fiveC,$fourH, $fourD, $fourS, $fourC,$threeH, $threeD, $threeS, $threeC,$twoH, $twoD, $twoS, $twoC,$aceH, $aceD, $aceS, $aceC;
        global $winner, $me, $comp1, $comp2, $comp3;
        
        echo "<div class = \"board\">
        <div class = \"title\">
            <h2>Silver Jack</h2>
        </div>
        <div class = \"allPlayers\">
            <div class=\"player\">
                <div class=\"playerImage\">";
                echo $players[0]["img"];
               echo" </div>
                <div class=\"hand\">";
                for($i = 0; $i < sizeof($players[0]["hand"]); $i++){
                    echo $players[0]["hand"][$i]["img"];
                }
            echo"
                </div>
                <div class=\"points\">
                <br>";
                echo $players[0]["points"];
                echo"</div>
                <div class=\"result\">
                <br>";
                 for($i=0;$i<sizeof($winner);$i++)
                {
                    if($winner[$i] == 0)
                    {
                        echo "Player 1 wins!";
                    }
                }
               echo " </div>
            </div>
            <div class=\"player\">
                <div class=\"playerImage\">";
                echo $players[1]["img"];
                echo"</div>
                     <div class=\"hand\">";
                  for($i = 0; $i < sizeof($players[1]["hand"]); $i++){
                    echo $players[1]["hand"][$i]["img"];
                }
               echo" </div>
                <div class=\"points\">
                <br>";
                echo $players[1]["points"];
                echo"</div>
                <div class=\"result\">
                <br>";
                for($i=0;$i<sizeof($winner);$i++)
                {
                    if($winner[$i] == 1)
                    {
                        echo "Player 2 wins!";
                    }
                }
              echo " </div>
            </div>
            <div class=\"player\">
                <div class=\"playerImage\">";
                echo $players[2]["img"];
                echo"</div>
                     <div class=\"hand\">";
                  for($i = 0; $i < sizeof($players[2]["hand"]); $i++){
                    echo $players[2]["hand"][$i]["img"];
                }
                echo"</div>
                <div class=\"points\">
                <br>";
                echo $players[2]["points"];
                echo"</div>
                <div class=\"result\">
                <br>";
                for($i=0;$i<sizeof($winner);$i++)
                {
                    if($winner[$i] == 2)
                    {
                        echo "Player 3 wins!";
                    }
                }
              echo " </div>
            </div>
             <div class=\"player\">
                <div class=\"playerImage\">";
                echo $players[3]["img"];
                echo"</div>
                     <div class=\"hand\">";
                for($i = 0; $i < sizeof($players[3]["hand"]); $i++){
                    echo $players[3]["hand"][$i]["img"];
                }
                echo"</div>
                <div class=\"points\">
                <br>";
               echo $players[3]["points"];
                echo" </div>
                <div class=\"result\">
                <br>";
                for($i=0;$i<sizeof($winner);$i++)
                {
                    if($winner[$i] == 3)
                    {
                        echo "Player 4 wins!";
                    }
                }
              echo "</div>
            </div>
            <div>
                
            </div>
        </div>
        <br>
        <div id=\"playAgain\">
        <a href=\"main.php\">Play Again</a>
        </div>
    </div>";
    }

    function startGame(){
        global $winner, $players;
        shuffle($players);
        shuffleDeck();
        dealAll();
        whoWins();
    }
    startGame();
    draw();
?>
    
    </body>
</html>



