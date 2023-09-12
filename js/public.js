axios.get("api/album.php")
.then(function (response) {
    const album_ul = document.getElementById("album_ul");
    const posts = response.data;

    for (let i = 0; i < posts.lenght; i++) {
        posts_ul.innerHTML += `
        <li>
            <a>${album[i].title}</a>
        </li>

        `;
    }
});

