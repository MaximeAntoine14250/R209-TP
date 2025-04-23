const albums = document.getElementById('items');
const url = "https://637d41d916c1b892ebca9a5a.mockapi.io/api/discs";

fetch(url,{
    headers: {
        Accept: 'application/json'
    }
})
    .then(r => {
        if (r.ok) {
            return r.json()
        } else {
            throw new Error('Erreur serveur', {cause: r})
        }
    })
    .then(contents => {
        console.log(contents)
        albums.innerHTML = ""
        contents.forEach(content => {
            albums.innerHTML += `<p> ${content.title}</p> <br> 
            <img src="${content.cover_url}" alt="${content.title}">`
        }

        )
    })
    .catch(e => {
        console.error('Une erreur est survenue', e)
    })



// const url = "https://637d41d916c1b892ebca9a5a.mockapi.io/api/discs";

// await fonctionne que dans une fonction
//async function getData() {
//     const response = await fetch(url);
//     const json = await response.json();
//     console.log(json);
// }

// Appel de la fonction
// getData();






