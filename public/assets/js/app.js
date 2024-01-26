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


// ================ YOUTUBE ==============
// const youtubeKey = 'AIzaSyC--W8zF4f5pJeGCqaC_Cp3xk8BZlp-KTI';
// const youtubeUser = 'UCfqWhPC7n0z0PI7H4rqEP0g';
// const subCount = document.getElementById('subCount');
// const Max_Result = 5;

// let getSubscribers = () => {
//     fetch(`https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=${youtubeUser}&key=${youtubeKey}`)
//         .then(response => {
//             return response.json()
//         })
//         .then(data => {
//             console.log(data);
//             subCount.innerHTML = data["items"][0].statistics.subscriberCount;
//         })
// }

// getSubscribers();
