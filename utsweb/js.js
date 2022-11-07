
function hello() {
    alert ("hello")
}
function validasi() {
    var kd_barang = document.getElementById("kd-barang")
    var nm_barang = document.getElementById('nm-barang');
    var hrg_barang = document.getElementById('hrg-barang');
    var jns_barang = document.getElementById('jns-barang');
    let radios = document.getElementsByName('status');
    // alert(kd_barang.value)

    if (kd_barang.value == "") {
        alert("Kode barang harus diisi !")
        return false
    }

    if (nm_barang.value == "") {
        alert("Nama barang harus diisi !")
        return false
    }


    if (hrg_barang.value == "") {
        alert("Harga harus diisi !")
        return false
    }

    if (jns_barang.value == "") {
        alert("Jenis barang harus dipilih !")
        return false
    }

    var status = 0;
    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            status = radios[i].value;
            break;
        }
    }

    aktifNo = (status == 1) ? "Aktif" : "Tidak Aktif";

    hasilInput(kd_barang.value, nm_barang.value, hrg_barang.value, jns_barang.value, aktifNo)
   
}

function hasilInput(kd_barang, nm_barang, hrg_barang, jns_barang, aktifNo) {
    var hasil = "Data Barang\n\n";

    hasil = hasil + "Kode Barang : " + kd_barang + "\n";
    hasil = hasil + "Nama Barang : " + nm_barang + "\n";
    hasil = hasil + "Harga Barang : " + hrg_barang + "\n";
    hasil = hasil + "Jenis Barang : " + jns_barang + "\n";
    hasil = hasil + "Status Barang : " + aktifNo + "\n";


    alert(hasil);
   
}

