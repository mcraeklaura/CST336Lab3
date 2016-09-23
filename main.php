<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <?php
    //Number of their index (0:me 1:comp1 ...)
    $winner = array();
    
    $array = array(); $array1 = array(); $array2 = array(); $array3 = array();
    $me = array("points" => 0, "hand" => $array);
        $comp1 = array("points" => 0, "hand" => $array1);
        $comp2 = array("points" => 0, "hand" => $array2);
        $comp3 = array("points" => 0, "hand" => $array3);
    $players = array(
        $me,
        $comp1,
        $comp2,
        $comp3,
        );

    $kingH = array("value" => 13,"img" => "",);
    $kingD = array("value" => 13,"img" => "",);
    $kingS = array("value" => 13,"img" => "",);
    $kingC = array("value" => 13,"img" => "",);
    
    $queenH = array("value" => 12,"img" => "",);
    $queenD = array("value" => 12,"img" => "",);
    $queenS = array("value" => 12,"img" => "",);
    $queenC = array("value" => 12,"img" => "",);
    
    $jackH = array("value" => 11, "img" => "",);
    $jackD = array("value" => 11, "img" => "",);
    $jackS = array("value" => 11, "img" => "",);
    $jackC = array("value" => 11, "img" => "",);
    
    $tenH = array("value" => 10, "img" => "",);
    $tenD = array("value" => 10, "img" => "",);
    $tenS = array("value" => 10, "img" => "",);
    $tenC = array("value" => 10, "img" => "",);
    
    $nineH = array("value" => 9, "img" => "",); 
    $nineD = array("value" => 9, "img" => "",);
    $nineS = array("value" => 9, "img" => "",);
    $nineC = array("value" => 9, "img" => "",);
    
    $eightH = array("value" => 8, "img" => "",);
    $eightD = array("value" => 8, "img" => "",);
    $eightS = array("value" => 8, "img" => "",);
    $eightC = array("value" => 8, "img" => "",);
    
    $sevenH = array("value" => 7, "img" => "",);
    $sevenD = array("value" => 7, "img" => "",);
    $sevenS = array("value" => 7, "img" => "",);
    $sevenC = array("value" => 7, "img" => "",);
    
    $sixH = array("value" => 6, "img" => "",);
    $sixD = array("value" => 6, "img" => "",);
    $sixS = array("value" => 6, "img" => "",);
    $sixC = array("value" => 6, "img" => "",);
    
    $fiveH = array("value" => 5, "img" => "",);
    $fiveD = array("value" => 5, "img" => "",);
    $fiveS = array("value" => 5, "img" => "",);
    $fiveC = array("value" => 5, "img" => "",);
    
    $fourH = array("value" => 4, "img" => "",);
    $fourD = array("value" => 4, "img" => "",);
    $fourS = array("value" => 4, "img" => "",);
    $fourC = array("value" => 4, "img" => "",);
    
    $threeH = array("value" => 3, "img" => "",);
    $threeD = array("value" => 3, "img" => "",);
    $threeS = array("value" => 3, "img" => "",);
    $threeC = array("value" => 3, "img" => "",);
    
    $twoH = array("value" => 2, "img" => "",);
    $twoD = array("value" => 2, "img" => "",);
    $twoS = array("value" => 2, "img" => "",);
    $twoC = array("value" => 2, "img" => "",);
    
    $aceH = array("value" => 1, "img" => "",);
    $aceD = array("value" => 1, "img" => "",);    
    $aceS = array("value" => 1, "img" => "",);
    $aceC = array("value" => 1, "img" => "",);
    

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
            
            if($minPoints > $sum){
                $minPoints = $sum;
            }
        }
        //Now we are going to set the winner to the number in the array
        for($i = 0; $i < 4; $i++){
            if($players[$i]["points"] == $minPoints){
                array_push($winner,$i);
                break;
            }
        }
    }
       function draw(){
        echo "<div class = \"board\">
        <div class = \"title\">
            <h2>Silver Jack</h2>
        </div>
        <div class = \"allPlayers\">
            <div class=\"player\">
                <div class=\"playerImage\">
                <img src=\"PlayerImgs/player1.jpg\" alt=\"PlayerImage\">
                </div>
                <div class=\"hand\">
                 <img src=\"CardImgs/Clubs/aceC.png\" alt=\"CardImage\">
                  <img src=\"CardImgs/Clubs/twoC.png\" alt=\"CardImage\">
                   <img src=\"CardImgs/Clubs/threeC.png\" alt=\"CardImage\">
                    <img src=\"CardImgs/Clubs/fourC.png\" alt=\"Cardmage\">
                     <img src=\"CardImgs/Clubs/fiveC.png\" alt=\"CardImage\">
                      <img src=\"CardImgs/Clubs/sixC.png\" alt=\"CardImage\">
                </div>
                <div class=\"points\">
                <br>
                SCORE?
                </div>
                <div class=\"result\">
                <br>
                Winner!
                </div>
            </div>
            <div class=\"player\">
                <div class=\"playerImage\">
                <img src=\"PlayerImgs/player2.jpg\" alt=\"PlayerImage\">
                </div>
                     <div class=\"hand\">
                 <img src=\"CardImgs/Clubs/aceC.png\" alt=\"CardImage\">
                  <img src=\"CardImgs/Clubs/twoC.png\" alt=\"CardImage\">
                   <img src=\"CardImgs/Clubs/threeC.png\" alt=\"CardImage\">
                    <img src=\"CardImgs/Clubs/fourC.png\" alt=\"Cardmage\">
                     <img src=\"CardImgs/Clubs/fiveC.png\" alt=\"CardImage\">
                      <img src=\"CardImgs/Clubs/sixC.png\" alt=\"CardImage\">
                </div>
                <div class=\"points\">
                <br>
                SCORE?
                </div>
                <div class=\"result\">
                <br>
                Winner!
                </div>
            </div>
            <div class=\"player\">
                <div class=\"playerImage\">
                <img src=\"PlayerImgs/player3.jpg\" alt=\"PlayerImage\">
                </div>
                     <div class=\"hand\">
                 <img src=\"CardImgs/Clubs/aceC.png\" alt=\"CardImage\">
                  <img src=\"CardImgs/Clubs/twoC.png\" alt=\"CardImage\">
                   <img src=\"CardImgs/Clubs/threeC.png\" alt=\"CardImage\">
                    <img src=\"CardImgs/Clubs/fourC.png\" alt=\"Cardmage\">
                     <img src=\"CardImgs/Clubs/fiveC.png\" alt=\"CardImage\">
                      <img src=\"CardImgs/Clubs/sixC.png\" alt=\"CardImage\">
                </div>
                <div class=\"points\">
                <br>
                SCORE?
                </div>
                <div class=\"result\">
                <br>
                Winner!
                </div>
            </div>
             <div class=\"player\">
                <div class=\"playerImage\">
                <img src=\"PlayerImgs/player4.jpg\" alt=\"PlayerImage\">
                </div>
                     <div class=\"hand\">
                 <img src=\"CardImgs/Clubs/aceC.png\" alt=\"CardImage\">
                  <img src=\"CardImgs/Clubs/twoC.png\" alt=\"CardImage\">
                   <img src=\"CardImgs/Clubs/threeC.png\" alt=\"CardImage\">
                    <img src=\"CardImgs/Clubs/fourC.png\" alt=\"Cardmage\">
                     <img src=\"CardImgs/Clubs/fiveC.png\" alt=\"CardImage\">
                      <img src=\"CardImgs/Clubs/sixC.png\" alt=\"CardImage\">
                </div>
                <div class=\"points\">
                <br>
                500
                </div>
                <div class=\"result\">
                <br>
               player 1 wins!
                </div>
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
        global $winner;
        shuffleDeck();
        dealAll();
        whoWins();
        var_dump($winner);
    }
    startGame();
    draw();
?>
    
    </body>
</html>

