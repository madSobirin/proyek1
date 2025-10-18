import Chart from "chart.js/auto";

document.addEventListener("DOMContentLoaded", () => {
    const giziCanvas = document.getElementById("giziChart");
    const ibuHamilCanvas = document.getElementById("ibuHamilChart");

    // Chart Status Gizi Balita
    if (giziCanvas) {
        const ctx = giziCanvas.getContext("2d");
        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Gizi Baik", "Gizi Buruk", "Stunting"],
                datasets: [
                    {
                        label: "Jumlah Balita",
                        data: [80, 12, 8],
                        // backgroundColor: ["#10B981", "#10b981", "#10b981"],
                        backgroundColor: ["#10B981", "#F59E0B", "#EF4444"],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: { y: { beginAtZero: true } },
            },
        });
    }

    // Chart Kondisi Ibu Hamil
    if (ibuHamilCanvas) {
        const ctx = ibuHamilCanvas.getContext("2d");
        new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ["Kondisi Baik", "Anemia"],
                datasets: [
                    {
                        data: [20, 4],
                        backgroundColor: ["#10B981", "#3B82F6"],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: "right" } },
            },
        });
    }
});
