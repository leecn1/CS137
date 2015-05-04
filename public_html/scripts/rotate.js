//rotate.js

//Use that prefix to put the proper sequence of image filenames into an array
var imageArray = new Array(3);
imageArray[0] = 'http://ia.media-imdb.com/images/M/MV5BMTk2NTI1MTU4N15BMl5BanBnXkFtZTcwODg0OTY0Nw@@._V1_SY317_CR0,0,214,317_AL_.jpg';
imageArray[1] = 'http://ia.media-imdb.com/images/M/MV5BMjI4MTIzODU2NV5BMl5BanBnXkFtZTgwMjE0NDAwMjE@._V1_SY317_CR0,0,214,317_AL_.jpg';
imageArray[2] = 'http://ia.media-imdb.com/images/M/MV5BMjA0MzUyNjg0MV5BMl5BanBnXkFtZTcwNDY5MDg0NA@@._V1_SX214_AL_.jpg';

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
