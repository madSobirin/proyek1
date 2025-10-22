const kategori = document.getElementById("kategori");
const formBalita = document.getElementById("form-balita");
const formIbuHamil = document.getElementById("form-ibu-hamil");
const kategoriHidden = document.getElementById("kategori_hidden");

kategori.addEventListener("change", (e) => {
    const value = e.target.value;
    kategoriHidden.value = value;

    if (value === "balita") {
        formBalita.classList.remove("hidden");
        formIbuHamil.classList.add("hidden");
    } else if (value === "ibu_hamil") {
        formIbuHamil.classList.remove("hidden");
        formBalita.classList.add("hidden");
    } else {
        formBalita.classList.add("hidden");
        formIbuHamil.classList.add("hidden");
    }
});
