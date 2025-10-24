document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll("[data-content]");
    const nav = tabs[0].parentElement; // container tombol tab

    // Tambahkan elemen garis bawah
    const underline = document.createElement("div");
    underline.className =
        "absolute bottom-0 h-0.5 bg-posyanduu transition-all duration-300";
    nav.style.position = "relative";
    nav.appendChild(underline);

    // Inisialisasi posisi default underline
    const setUnderline = (tab) => {
        const { offsetLeft, offsetWidth } = tab;
        underline.style.left = offsetLeft + "px";
        underline.style.width = offsetWidth + "px";
    };

    // Inisialisasi tampilan awal
    tabs.forEach((t) => {
        t.classList.remove("border-posyandu", "text-posyandu");
        t.classList.add("border-transparent", "text-gray-500");
    });
    contents.forEach((c) =>
        c.classList.add(
            "hidden",
            "opacity-0",
            "transition-all",
            "duration-300",
            "translate-y-2"
        )
    );

    const defaultTab = document.getElementById("balita-tab");
    const defaultContent = document.getElementById("balita-content");

    defaultTab.classList.add("text-posyandu");
    defaultContent.classList.remove("hidden");
    setTimeout(() => {
        defaultContent.classList.remove("opacity-0", "translate-y-2");
        defaultContent.classList.add("opacity-100", "translate-y-0");
    }, 10);

    // Pasang underline ke posisi default tab
    setUnderline(defaultTab);

    // Event listener untuk tab
    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            // Update style tab
            tabs.forEach((t) => {
                t.classList.remove("text-posyandu");
                t.classList.add("text-gray-500");
            });
            tab.classList.remove("text-gray-500");
            tab.classList.add("text-posyandu");

            // Animasi underline
            setUnderline(tab);

            // Animasi konten keluar
            contents.forEach((c) => {
                c.classList.remove("opacity-100", "translate-y-0");
                c.classList.add("opacity-0", "translate-y-2");
                setTimeout(() => c.classList.add("hidden"), 300);
            });

            // Tampilkan konten baru
            const targetId =
                tab.id === "balita-tab"
                    ? "balita-content"
                    : "ibu-hamil-content";
            const targetContent = document.getElementById(targetId);

            setTimeout(() => {
                targetContent.classList.remove("hidden");
                setTimeout(() => {
                    targetContent.classList.remove(
                        "opacity-0",
                        "translate-y-2"
                    );
                    targetContent.classList.add("opacity-100", "translate-y-0");
                }, 10);
            }, 300);
        });
    });

    // Responsif: update posisi underline saat window resize
    window.addEventListener("resize", () => {
        const activeTab = document.querySelector(".tab-button.text-posyandu");
        if (activeTab) setUnderline(activeTab);
    });
});
