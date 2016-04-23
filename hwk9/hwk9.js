$(document).ready(function () {
    var numSet = ["1", "1", "2", "2", "3", "3", "4", "4",
                       "5", "5", "6", "6", "7", "7", "8", "8"];
    shuffle(numSet);
    populateSpans(numSet);


    var numberOfClicks = 0;
    var timer;
    var pair = 0;

    var $box1 = undefined;
    var $box2 = undefined;

    $("button").click(function () {
        if ($(this).attr("class") == "hidden") {
            //if it is null check if it is the first card clicked 
            if ($box1 == undefined) {

                //if yes put it in box1
                $box1 = $(this);
                //show content
                $box1.removeClass("hidden").addClass("show");

                //actions in 3 seconds
                timer = setTimeout(function () {
                    //is there is no second click in 3 seconds
                    if ($box2 == undefined) {
                        //show the content in box1
                        $box1.removeClass("show").addClass("hidden");
                        //clear content in box1
                        $box1 = undefined;
                        //count one try
                        numberOfClicks += 1;
                        $("#clicks").html(numberOfClicks);
                    } else if ($box1.text() != $box2.text()) {
                        //if the contents in the two cards do not match

                        //show contents and clear boxes
                        $box1.removeClass("show").addClass("hidden");
                        $box1 = undefined;
                        $box2.removeClass("show").addClass("hidden");
                        $box2 = undefined;
                        //count one try
                        numberOfClicks += 1;
                        $("#clicks").html(numberOfClicks);
                    }
                }, 3000);

            } else if ($box2 == undefined) {
                //else put id in $box2
                $box2 = $(this);
                //show content
                $box2.removeClass("hidden").addClass("show");

                //check if the contents in box1 and box are matched
                if ($box1.text() == $box2.text()) {

                    //if yes
                    //turn them red
                    $box1.css({"background-color": "#58c791", "color": "white"});
                    $box2.css({"background-color": "#58c791", "color": "white"});

                    // increase the match
                    pair += 1;
                    numberOfClicks += 1;
                    $("#clicks").html(numberOfClicks);

                    //clear contents of box variables
                    $box1 = undefined;
                    $box2 = undefined;
                };

            };
        };

        //check if all the pairs are found
        if (pair == 8) {
            // pop up to indicate the number of tries
            alert("Congrats! you win the game with " + numberOfClicks + " clicks!");
        }

    });


});

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}


function populateSpans(numSet) {
    //for each button element put in one of the pieces
    var index = 0;
    for (i = 0; i < 4; i++) {
        for (j = 0; j < 4; j++) {
            $("#b" + i + j).text(numSet[index]);
            index++;
        }
    }
}