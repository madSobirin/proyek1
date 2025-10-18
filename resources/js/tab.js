document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll("[data-content]");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            tabs.forEach((t) => {
                t.classList.remove("border-posyandu", "text-posyandu");
                t.classList.add("border-transparent", "text-gray-500");
            });

            contents.forEach((c) => c.classList.add("hidden"));

            tab.classList.add("border-posyandu", "text-posyandu");
            tab.classList.remove("border-transparent", "text-gray-500");

            if (tab.id === "balita-tab") {
                document
                    .getElementById("balita-content")
                    .classList.remove("hidden");
            } else {
                document
                    .getElementById("ibu-hamil-content")
                    .classList.remove("hidden");
            }
        });
    });

    document.getElementById("ibu-hamil-content").classList.add("hidden");
});
