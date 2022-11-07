
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

    if (ruangan.value == "") {
        alert("Pilih Jenis Ruangan !")
        return false
    }

    if (nmr_meja.value == "") {
        alert("Pilih No Meja !")
        return false
    }
    
    if (menu_makanan.value == "") {
        alert("Pilih Makanan !")
        return false
    }

    if (menu_minuman.value == "") {
        alert("Pilih Minuman !")
        return false
    }


    var room = 0;
    for (var i = 0, length = ruangan.length; i < length; i++) {
        if (ruangan[i].checked) {
            room = ruangan[i].value;
            break;
        }
    }

    var food = 0;
    for (var i = 0, length = menu_makanan.length; i < length; i++) {
        if (menu_makanan[i].checked) {
            food = menu_makanan[i].value;
            break;
        }
    }

    ruangan = (food == 1) ? "AC" : "Non AC";

    //alert(ruangan);

    if (menu_makanan == 1) {
        alert("Nasi Goreng");
    } 
    else if (menu_makanan == 2){
        alert("Mie Goreng");        
    }
    else if (menu_makanan == 3){
        alert("Mie Rebus");        
    }
    else if (menu_makanan == 4){
        alert("Roti Bakar");        
    }
    else if (menu_makanan == 5){
        alert("Bubur Kacang Ijo");        
    }

    alert(nm_pelanggan.value, ruangan.value, nmr_meja.value, menu_makanan.value, menu_minuman.value)
    

    // hasil(nm_pelanggan.value, ruangan, menu_makanan)
   
}

// function hasilInput(kd_barang, nm_barang, hrg_barang, jns_barang, aktifNo) {
//     var hasil = "Data Barang\n\n";

//     hasil = hasil + "Kode Barang : " + kd_barang + "\n";
//     hasil = hasil + "Nama Barang : " + nm_barang + "\n";
//     hasil = hasil + "Harga Barang : " + hrg_barang + "\n";
//     hasil = hasil + "Jenis Barang : " + jns_barang + "\n";
//     hasil = hasil + "Status Barang : " + aktifNo + "\n";


//     alert(hasil);
   
// }

