barrs = document.querySelector(".barrs");
barrs.onclick = function() {
    navbar = document.querySelector(".nav");
    navbar.classList.toggle("active");
} 
const posts = [
    { 
        title: "Título de la Publicación 1", 
        image: "https://via.placeholder.com/150", 
        date: "2024-02-22" 
    },
    { 
        title: "Título de la Publicación 2", 
        image: "https://via.placeholder.com/150", 
        date: "2024-02-21" 
    },
    { 
        title: "Título de la Publicación 3", 
        image: "https://via.placeholder.com/150", 
        date: "2024-02-20" 
    }
];

// Función para renderizar tarjetas
function renderCards(containerSelector, data) {
    const container = document.querySelector(containerSelector);
    container.innerHTML = ""; // Limpiar el contenedor antes de renderizar

    data.forEach(post => {
        const card = document.createElement("div");
        card.classList.add("card");

        const image = document.createElement("img");
        image.src = post.image;
        card.appendChild(image);

        const title = document.createElement("h3");
        title.textContent = post.title;
        card.appendChild(title);

        const date = document.createElement("p");
        date.textContent = post.date;
        card.appendChild(date);

        container.appendChild(card);
    });
}

// Renderizar últimas publicaciones
renderCards(".latest-posts", posts);

// Renderizar más vistos (usando los mismos datos para este ejemplo)
renderCards(".most-viewed", posts);
renderCards(".saved-posts", posts)
document.getElementById("searchButton").addEventListener("click", function() {
    const searchTerm = document.getElementById("searchInput").value.toLowerCase();
    const filteredPosts = posts.filter(post => post.title.toLowerCase().includes(searchTerm));
    renderCards(".latest-posts", filteredPosts);
});

function imprimirHist() {
    window.print();
}
function imprimirRe() {
    window.print();
}