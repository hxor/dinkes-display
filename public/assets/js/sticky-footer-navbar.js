function clock() {
    var time = new Date(),

        // Access the "getHours" method on the Date object with the dot accessor.
        hours = time.getHours(),

        // Access the "getMinutes" method with the dot accessor.
        minutes = time.getMinutes(),


    seconds = time.getSeconds();
    document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);

    function harold(standIn) {
        if (standIn < 10) {
        standIn = '0' + standIn
        }
        return standIn;
    }
}
setInterval(clock, 1000);

/**
 * *
 * Check Per 5 Menit apakah ada kegiatan setengah jam sebelumnya
 * Jika iya  lakukan proses AJAX get dengan response HTML agar lebih mudah
 * Jika tidak, munculkan jadwal dengan jam sebelumnya
 * *
 */
