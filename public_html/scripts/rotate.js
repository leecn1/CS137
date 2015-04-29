//rotate.js

//Use that prefix to put the proper sequence of image filenames into an array
var imageArray = new Array(3);
imageArray[0] = 'http://ia.imdb.com/media/imdb/01/I/25/16/28m.jpg';
imageArray[1] = 'http://ia.imdb.com/media/imdb/01/I/35/30/91m.gif';
imageArray[2] = 'http://ia.imdb.com/media/imdb/01/I/34/82/91m.jpg';

//Rotate the images in the array
var imageCounter = 0;
function rotate()
{
    var imageObject = document.getElementById('popular');
    imageObject.src = imageArray[imageCounter];
    ++imageCounter;
    if (imageCounter == 3) imageCounter = 0;
}

function startRotation()
{
    document.getElementById('popular').src=imageArray[2];
    setInterval('rotate()', 2000);
}
