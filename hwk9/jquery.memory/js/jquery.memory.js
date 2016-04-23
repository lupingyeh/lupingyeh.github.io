/*
	jQuery Memory Game plugin
	March, 2011
	By: Don Burks

*/
(function($) {
	
	//Plugin default values
	var defaults = {
		'tileCount'	: 24,				// # of tiles in game
		'delay' 	: 1500,			// milliseconds to wait before reverting
		'timeout'	: 8000			// timeout before a single tile will revert without a second one being clicked
	},
	options = {}, 					//This object will hold our final plugin settings globally
	waiter = false,					//Waiter tells us to wait before allowing next turn
	iterations = (defaults.tileCount / 2),	//Iterations is number  of loops necessary to populate board
	ticker, container;					//Ticker holds our timeout clock.. Container holds the global $(this)

	//This function gives us a shuffle method
	$.fn.shuffle = function() {
		var temp = []; //Temp array
		while (this.length) { //Iterate through array
			//Randomly select an element of the remaining array, and then take that element away
			//and add it to the temp array
			temp.push(this.splice(Math.random() * this.length, 1));
		}
		while (temp.length) { //Iterate through array
			//Pop out of temp and back into original
			this.push(temp.pop());
		}
		//Return new array
		//Well, old array in new order
		return this;
	}

	//This function clears the matching tiles from the board
	$.clearTiles = function() {
		//Class of hidden means the tile image is removed
		//revealing the piece underneath. These will be the
		//ones we want to target
		$(".hidden").each(function() {
			//We want to work on the parent li, not the image
			var tile = $(this).parent('li');
			//Get rid of underlying image
			tile.css('background-image', 'none');
			//Get rid of the covering tile
			tile.find('img').remove();
			//Add a class which we will use in checking end of game condition
			tile.addClass('cleared');
		});
		//Reset waiter so we can click again
		waiter = false;
		//Check if it's the end of the game
		if ($.endOfGame()) {
			//Add element for congratulations message
			var winner = $("<div />").attr('id', 'winner');
			//Populate div with message
			winner.html("Congratulations! You Win!");
			//Bind click action to div so that clicking on it restarts game
			winner.click(function() {
				//Fade congratulatory div, nuke it, and reset game
				winner.fadeOut('fast', function() {winner.remove();  $.initGame(); });
			});
			//Put div at top of game area
			container.empty().prepend(winner);
			//Show div
			winner.fadeIn('fast');
		}
	}

	//This reverts the tiles - no match. qq
	$.revertTiles = function() {
		//We know tiles with class hidden need to be shown again, so show them and remove the class
		$(".hidden").fadeIn('slow').removeClass('hidden');
		//Unblock the clicks
		waiter = false;
	}

	//Shuffles the board, once populated
	$.randomize = function() {
		var ul = $("#memory_ul"), 
			list = ul.find('li').shuffle();
		//Reset ul
		ul.empty();
		//Iterate and populate
		$.each(list,function(){
			$(this).appendTo(ul);
		});
	}

	//Checks for the end of the game
	//AKA - all tiles cleared
	$.endOfGame = function() {
		return ($(".cleared").length == options.tileCount) ? true : false;
	}
	
	//Main function, called on plugin init, as well as play again from congratulatory div
	$.initGame = function() {
		//Empty the playing field
		container.empty();
		//Make the list to hold all the tiles
		$ul = $("<ul>").attr('id','memory_ul');

		//We know how many iterations we are going to make
		//Go through and build playing grid
		for(i = 1; i <= iterations; ++i) {
			//Make a new li, give it a uniquely numbered class, set it to being a tile
			$li = $("<li>").addClass('tile_'+i).addClass('tile_container');
			//Stick the tile image in there
			$('<img src="images/tile.png" class="tile" />').appendTo($li);
			//Add LI element to ul
			$li.appendTo($ul);
			//Make a copy of it (we need pairs for matching, after all)
			$new_li = $li.clone();
			//Add the copy to the list
			$new_li.appendTo($ul);
		}

		//Playing grid is built, put in DOM
		$ul.appendTo(container);
		
		//Shuffle the tiles
		$.randomize();

		//Bind click action to tile image
		$("img.tile").click(function() {
			//Check to see if we're waiting for delay or timeout to run, if so do nothing
			if (waiter) { return false; }
			//Which one was clicked on?
			var which = $(this).parent('li').attr('class');
			//Isolate it to just the numbered class
			which = which.split(' ');
			//Do we already have one clicked?
			if ($(".first").length > 0) {
				//Stop timeout timer, we clicked again before the expiration
				clearTimeout(ticker);
				//Get the class of the tile we are matching against
				firstClass = $(".first").parent('li').attr('class');
				firstClass = firstClass.split(' ');
				//Make tile dissolve, mark it as hidden
				$(this).fadeOut('fast').addClass('hidden');
				//If they match...
				if (which[0] == firstClass[0]) {
					//Don't let any clicks occur until tiles have been cleared
					waiter = true;
					setTimeout('$.clearTiles()', options.delay);
				} else {
					//No match, still don't let any clicks until tiles revert
					waiter = true;
					//Fade tiles back in
					setTimeout('$.revertTiles()', options.delay);
					//Reset selections
					$(".first").removeClass('first');
				}
			} else {
				//This is the first click to make a match
				//Start timeout timer, while we wait for a 2nd click
				ticker = setTimeout('$.revertTiles();$(".first").removeClass("first");', options.timeout);
				//Dissolve tile, mark as hidden
				$(this).addClass('first').fadeOut('fast').addClass('hidden');
			}
		});	
	}

	//Pluginize it, baybee
	$.fn.memoryGame = function(user_options) {
		//Store $(this) in a more semantically correct variable. We'll need it in other functions anyway
		container = $(this);
		//Verify inputs. If not passed an object, just use defaults
		options = (typeof user_options === "object") ? $.extend(defaults, user_options) : defaults;
		//Now that we know the tile count, calculate iterations
		iterations = (options.tileCount / 2);

		//Set up game
		$.initGame();
	
		//Return jQuery object, for chaining. It IS a plugin after all
		return container;
	}

})(jQuery);

