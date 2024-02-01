let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

//Config Param
let countItem = items.lenght;
let itemActive = 0;

//Event next Klik
next.onclick = function () {
    itemActive = itemActive + 1;
    if (itemActive >= countItem) {
        itemActive = 0;
    }
    showSlider();
}

// Event Prev Clik
prev.onclick = function () {
    itemActive = itemActive - 1;
    if (itemActive < 0) {
        itemActive = countItem - 1;
    }
    showSlider();
}

//auto run slider
// let refreshInterval = setInterval(() => {
//     next.click();
// }, 6000)

function showSlider() {
    //remove item active old
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    //active new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');
}

// clear auto time run slider
// clearInterval(refreshInterval);
// refreshInterval = setInterval(() => {
//     next.click();
// }, 6000)

// click thumbnail
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index;
        showSlider();
    })
})


// VIDEO AUTOPLAY

// ================ YOUTUBE ==============
// const youtubeKey = 'AIzaSyC--W8zF4f5pJeGCqaC_Cp3xk8BZlp-KTI';
// const youtubeUser = 'UCfqWhPC7n0z0PI7H4rqEP0g';
// const subCount = document.getElementById('subCount');
// // const subName = document.getElementById('subName');
// const Max_Result = 5;

// let getSubscribers = () => {
//     fetch(`https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=${youtubeUser}&key=${youtubeKey}`)
//         .then(response => {
//             return response.json()
//         })
//         .then(data => {
//             console.log(data);
//             // subCount.innerHTML = data["items"][0].statistics.subscriberCount;
//             subName.innerHTML = data['items'][0].snippet.thumbnails.medium.url;
//         })
// }

// getSubscribers();

// const clientId = '524193dba5dbff8e893898b08aa33b74';
// const accessToken = 'IGQWRNTlo5TlI2MlAzR2xMQllUSGlfc0hjUkpzUU12aGtSRjZA2Nk94TjVVQ3hta3V0ZAnZAhaFR5VzRVcHlIUFhDV29FX09JZAjNocTExWHlFbWpTeVlsT0UtZAXdEY0J3TTAwWFhIZAVR2WGF4VEFmcktXUi1aOHZAUQUkZD';
// const feedIG = document.getElementById('feedsIG');


// let getFeed = () => {
//     fetch('https://graph.instagram.com/me/media?fields=id,media_type,media_url,username&access_token=IGQWRNTlo5TlI2MlAzR2xMQllUSGlfc0hjUkpzUU12aGtSRjZA2Nk94TjVVQ3hta3V0ZAnZAhaFR5VzRVcHlIUFhDV29FX09JZAjNocTExWHlFbWpTeVlsT0UtZAXdEY0J3TTAwWFhIZAVR2WGF4VEFmcktXUi1aOHZAUQUkZD')
//         .then(response => {
//             return response.json()
//         })
//         .then(data => {
//             console.log(data);
//         })
// }

// getFeed();