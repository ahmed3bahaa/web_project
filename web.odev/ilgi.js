fetch("https://online-movie-database.p.rapidapi.com/auto-complete?q=avatar", {

    "method": "GET",
    "headers": {
        "X-RapidAPI-Key": "b3eb29168cmshc6f0c44d455f64ep128cf8jsn42e9c30b0da3",
        "X-RapidAPI-Host": "online-movie-database.p.rapidapi.com"
    }
})
    .then(response => response.json())
    .then(data => {
        const list = data.d;

        list.map((item) => {
            const name = item.l;
            const poster = item.i.imageUrl;
            const movie = `<li><img src="${poster}"> <h2>${name}</h2></li>`
            document.querySelector('.filmler').innerHTML += movie;
        })
    })
    .catch(err => {
        console.error(err);
    });