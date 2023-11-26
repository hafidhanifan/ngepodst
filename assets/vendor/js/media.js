var player = document.getElementById("player");
let playbtn = document.getElementById("playbtn");

var playpause = function(){
    if(player.paused){
        player.play();
    }else{
        player.pause();
    }
}

playbtn.addEventListener("click", playpause);

player.onplay = function(){
    playbtn.classList.remove("bx-play-circle");
    playbtn.classList.add("bx-pause-circle");
}

player.onpause = function(){
    playbtn.classList.add("bx-play-circle");
    playbtn.classList.remove("bx-pause-circle");
}

// function switchTrack(event){
//     if(is_playing){
//         if(playingtrack != event.target.id){
//             is_playing = true;
//             _(playingtrack).style.background = "";
//             event.target.style.background = "";
//             audio.src = audio_folder+event.target.id+audio_ext;
//             audio.play();
//         }else{
//             audio.pause();
//             is_playing = false;
//             event.target.style.background = "";
//         }
//     }else{
//         is_playing = true;
//         event.target.style.background = "";
//         if(playingtrack != event.target.id){
//             audio.src = audio_folder+event.target.id+audio_ext;
//         }
//         audio.play();
//     }
//     playingtrack = event.target.id;
// }

// let masterPlay = document.getElementById('masterPlay');
// let wave = document.getElementById('wave');

// masterPlay.addEventListener('click', () => {
//     if(music.paused || music.currentTime <= 0){
//         music.play();
//         wave.classList.add('active1');
//         masterPlay.classList.remove('bi-play-fill');
//         masterPlay.classList.add('bi-pause-fill');
//     }else{
//         music.pause();
//         wave.classList.remove('active1');
//         masterPlay.classList.add('bi-play-fill');
//         masterPlay.classList.remove('bi-pause-fill');
//     }
// })

// const makeAllplays = () => {
//     Array.from(document.getElementsByClassName('playListPlay')).forEach((el) => {
//         el.classList.remove('bi-pause-fill');
//         el.classList.add('bi-pause-fill');
//     })
// }

// let index = 0;
// let poster_master_play = document.getElementById('poster_master_play');

// Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
//     e.addEventListener('click', (el)=>{
//         index = el.target.dispatchEvent;
//         // console.log(index);
//         music.src = `audio/${index}.mp3`;
//         poster_master_play.src = `img/${index}.jpg`;
//         music.play();
//         masterPlay.classList.remove('bi-play-fill');
//         masterPlay.classList.add('bi-pause-fill');

//         let songTitles = songs.filter((els) =>{
//             return els.id == index;
//         });

//         songTitles.forEach(els =>{
//             let { songName } = elss;
//             songTitles.innerHTML = songName; 
//             poster_master_play.src = poster;
//         })

//         makeAllplays();
//         el.target.classList.add('bi-pause-fill');
//         el.target.classList.remove('bi-play-fill');
//         wave.classList.add('active1');
//     });
// })

// let currentStart = document.getElementById('currentStart');
// let currentEnd = document.getElementById('currentEnd');

// music.addEventListener('timeupdate', () => {
//     let music_curr = music.currentTime;
//     let music_dur = music.duration;

//     let min1 = Math.floor(music_dur / 60);
//     let sec1 = Math.floor(music_dur % 60);

//     // console.log(min1);
//     if(sec1 <10){
//         sec1 = `0${sec1}`;
//     }
//     currentEnd.innerText = `${min1}:${sec1}`;

//     let min2 = Math.floor(music_curr / 60);
//     let sec2 = Math.floor(music_curr % 60);
//     if(sec2 < 10){
//         sec2 = `0${sec2}`;
//     }
//     currentStart.innerText = `${min2}:${sec2}`;

// })