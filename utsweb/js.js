
// function hello() {
//     alert ("hello")
// }
function validasi() {
    var nm_pelanggan = document.getElementById("nm-pelanggan")
    var ruangan = document.getElementsByName('ruangan');
    var nmr_meja = document.getElementById('nmr-meja');
    var menu_makanan = document.getElementsByName('makanan');
    var menu_minuman = document.getElementById('menu-minuman');

    // alert(nm_pelanggan.value)

    if (nm_pelanggan.value == "") {
        alert("Nama Pelanggan Harus Diisi !")
        return false
    }

    var room = 0;
    for (var i = 0, length = ruangan.length; i < length; i++) {
        if (ruangan[i].checked == "") {
            alert("Ruangan Harus Dipilih !")
            return false;
        }
        if (ruangan[i].checked) {
            room = ruangan[i].value;
            break;
        }
    }
    
    if (nmr_meja.value == "") {
        alert("Pilih No Meja !")
        return false
    }

    var food = 0;
    for (var i = 0, length = menu_makanan.length; i < length; i++) {
        if (menu_makanan[i].checked == "") {
            alert("Kamu Jadi Makan ?")
            alert("Pilih Makanannya dulu Bro!")
            return 0;
        }
        if (menu_makanan[i].checked) {
            food = menu_makanan[i].value;
            break;
        }
    }

    if (menu_minuman.value == "") {
        alert("Pilih Minuman !")
        return false
    }

    ruangan = (room == 1) ? "AC" : "Non AC";

    if (food == 1) {
        menu_makanan ="Nasi Goreng";
    }
    else if (food == 2) {
        menu_makanan="Mie Goreng";
    }
    else if (food == 3) {
        menu_makanan = "Mie Rebus";
    }
    else if (food == 4) {
        menu_makanan ="Roti Bakar";
    }
    else if (food == 5) {
        menu_makanan = "Bubur Kacang Ijo";
    }

    // alert(menu_makanan);
    // alert(ruangan);
    
    pesanan(nm_pelanggan.value, ruangan, nmr_meja.value, menu_makanan, menu_minuman.value)

    

}

function pesanan(nm_pelanggan, ruangan, nmr_meja, menu_makanan, menu_minuman) {
    var hasil = "Data Pesanan\n\n";

    hasil = hasil + "Nama Pelanggan \t: " + nm_pelanggan + "\n";
    hasil = hasil + "Jenis Ruangan  \t: " + ruangan + "\n";
    hasil = hasil + "Nomor Meja     \t: " + nmr_meja + "\n";
    hasil = hasil + "Menu Makanan   \t: " + menu_makanan + "\n";
    hasil = hasil + "Menu Minuman   \t: " + menu_minuman + "\n";

    alert(hasil);

}

