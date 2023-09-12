axios.get("api/posts.php")
.then(function (response) {
    const posts_ul = document.getElementById("posts_ul");
    const posts = response.data;

    for (let i = 0; i < posts.lenght; i++) {
        posts_ul.innerHTML += `
        <li>
            <a>${posts[i].title}</a>
        </li>

        `;
    }
});

