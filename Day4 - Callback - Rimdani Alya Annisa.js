// function saveDataToDB() {
//     // Call SQL API
//     //...
// }

// Soal 1 Fetch Data dari API (Callback)
function fetchUserData(username, callback) {
    // Lakukan HTTP GET request ke API GitHub
    const url = `https://api.github.com/users/${username}`;
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Panggil callback dengan data yang diambil dari API
            callback(null, data);
        })
        .catch(error => {
            // Panggil callback dengan error jika terjadi kesalahan
            callback(error, null);
        });
}

// fetchUserData("test", saveDataToDB)

// Soal 2 Fetch Data dari API (Promise)
function fetchUserDataPromise(username) {
    return new Promise((resolve, reject) => {
        // Lakukan HTTP GET request ke API GitHub
        const url = `https://api.github.com/users/${username}`;
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Panggil resolve dengan data yang diambil dari API
                resolve(data);
            })
            .catch(error => {
                // Panggil reject dengan error jika terjadi kesalahan
                reject(error);
            });
    });
}

// fetchUserData("alyaannisa").then((data) => console.log(data));

// Soal 3 Image Loading (Callback)
function loadImageCallback(url, successCallback) {
    const image = new Image();
    image.onload = function () {
        successCallback(image);
    };
    image.onerror = function () {
        console.log('Failed to load image');
    };
    image.src = url;
}

// Soal 4 Image Loading (Promise)
function loadImagePromise(url) {
    return new Promise((resolve, reject) => {
        const image = new Image();
        image.onload = function () {
            resolve(image);
        };
        image.onerror = function () {
            reject(new Error('Failed to load image'));
        };
        image.src = url;
    });
}

// Soal 5 Chaining Promises
function fetchPosts() {
    return fetch('https://jsonplaceholder.typicode.com/posts')
        .then(response => response.json())
        .then(posts => {
            console.log('Total Posts:', posts.length);
            return posts;
        });
}

function fetchComments() {
    return fetch('https://jsonplaceholder.typicode.com/comments')
        .then(response => response.json())
        .then(comments => {
            console.log('Total Comments:', comments.length);
            return comments;
        });
}

// Chain the promises
fetchPosts()
    .then(posts => fetchComments())
    .catch(error => console.error('Error fetching data:', error));