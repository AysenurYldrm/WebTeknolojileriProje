const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': 'e04599b649msh288e356e682aab1p114e8djsn783c0ede873f'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=game', options)
	.then(response => response.json())
	.then(data => {
        const list=data.d;

        list.map((item) => {
            console.log(item)
            const name = item.l;
            const poster =item.i.imageUrl;
            const movie = ` <li><img src="${poster}"> <h2>${name}</h2></li> `
            document.querySelector('.movies').innerHTML += movie;
        })
    })
	.catch(err =>{
         console.error(err);
        });