const kategori = document.getElementById("kategori");
const formBalita = document.getElementById("form-balita");
const formIbuHamil = document.getElementById("form-ibu-hamil");

kategori.addEventListener("change", (e) => {
    if (e.target.value === "balita") {
        formBalita.classList.remove("hidden");
        formIbuHamil.classList.add("hidden");
    } else if (e.target.value === "ibu_hamil") {
        formIbuHamil.classList.remove("hidden");
        formBalita.classList.add("hidden");
    } else {
        formBalita.classList.add("hidden");
        formIbuHamil.classList.add("hidden");
    }
});
