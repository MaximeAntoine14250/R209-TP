// À vous de jouer !
const urlParams = new URLSearchParams(window.location.search)
const productID = urlParams.get('id');

const url = "https://637d41d916c1b892ebca9a5a.mockapi.io/api/discs/${productID}";

fetch(url)
    .then(reponse => reponse.json())
    .then(productData => {
        updateProductDetails(productData);
    })
    .catch(e => {
        console.error('Une erreur est survenue', e);
    })

    function updateProductDetails(productData) {
        document.getElementById('title').textContent = productData.title;
        document.getElementById('cover').innerHTML = `<img src="${productData.cover_url}" alt="${productData.title}">`;
        document.getElementById('artist').textContent = productData.artist;
        document.getElementById('years').textContent = productData.year;
        document.getElementById('price').textContent = productData.price;
    }