document.addEventListener("DOMContentLoaded", () => {
    const center = { lat: 48.8639, lng: 2.2660 }; // Centre de la carte
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: center,
    });

    // Les points sont injectés dans la page depuis Blade via une variable globale JS
    if (window.mapPoints && Array.isArray(window.mapPoints)) {
        window.mapPoints.forEach(point => {
            const lat = parseFloat(point.latitude);
            const lng = parseFloat(point.longitude);

            if (!isNaN(lat) && !isNaN(lng)) {
                const marker = new google.maps.Marker({
                    position: { lat, lng },
                    map,
                    title: point.name,
                });

                const infoWindow = new google.maps.InfoWindow({
                    content: `
                        <strong>${point.name}</strong><br>
                        ${point.content}<br>
                        <em>Type : ${point.type.trim()}</em>
                    `
                });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
            }
        });
    }
});
