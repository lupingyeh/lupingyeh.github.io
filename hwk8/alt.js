///bugs here

function getRandomInt(min, max){
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function get_images (){
  var n = getRandomInt(1,3); 
  var m = [1,2,3,4,5,6,7,8,9,10,11,12];
  m = shuffle(m);
  for (var i = 0 ; i < 12 ; i++){
    // var randomSet[i] = "'<img src= img/'+'img'+ n + '-' + m[i] + '.jpg>'";
    var randomSet = new Array;
    // randomSet[i] = "<img src= img/img"+ n + "-" + m[i] + ".jpg>";
    randomSet[i] = '<img src=\'img/img\'+ n + \'-\' + m[i] + \'.jpg\'>'

    document.getElementById("d"+i).innerHTML = randomSet[i];
 }    
}

 ////// source code
// /* Generates a random whole number inclusive for a max and min range */
// function getRandomInt(min, max)
// {
//   return Math.floor(Math.random() * (max - min + 1)) + min;
// }

// /* Randomly select directory for the images and load images randomly */
// function get_images ()
// {
//   var puzzle_pieces = document.getElementById("puzzle_pieces");
//   var n = getRandomInt(1,3); 
//   var m = [1,2,3,4,5,6,7,8,9,10,11,12];
//   m = shuffle(m);
//   for (var i = 0 ; i <= 12 ; i++)
//   {
//     puzzle_pieces.children[i].src = "./images"+n+"/img"+ n + "-" + m[i] + ".jpg";
//   }  
// }
