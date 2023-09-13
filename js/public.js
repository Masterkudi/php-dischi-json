axios.get("api/album.php")
.then(function (response) {
    const album_ul = document.getElementById("album_ul");
    const album = response.data;

    for (let i = 0; i < album.lenght; i++) {
        album_ul.innerHTML += `
        <li>
            <a>${album[i].title}</a>
        </li>

        `;
    }
});

