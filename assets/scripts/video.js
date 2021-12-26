const video = document.querySelector('#video');
const youtubeUrl = "https://www.youtube.com/embed/";
var idQuery = window.location.search;
let id = idQuery.replace("?id=", '');

if (id != '')
{
    var videoUrl = `${youtubeUrl}${id}`;
    console.log(videoUrl);
    SetVideo();
}

function SetVideo() {
    video.setAttribute('src', videoUrl);
}