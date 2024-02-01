// a. buat array isi 5 buah-buahan
var arr = ['jeruk', 'mangga', 'apel', 'kiwi', 'nangka'];
let i = 0;
const tes = 1;

// b. tambah 1 buah
arr.push('anggur');
console.log(arr);

// c. mengedit/ubah satu buah
arr[1] = 'alpukat';
console.log(arr);

// d. kurangi satu buah terakhir dari array
arr.pop("kiwi");

// e. gunakan console log untuk menampilkan isi array setiap step
console.log(arr);

// EXERCISE OBJECT

// membuat object
let biodata = {
    nama_depan: "Rimdani",
    nama_belakang: "Alya Annisa",
    hobi: ['nonton netflix', 'scrolling thru the internet'],
    angka_favorit: "10",
    memakai_kacamata: false
};
// tampilkan setiap properti
console.log(biodata);

// cetak nama lengkap menggunakan console
console.log(`nama lengkap: ${biodata.nama_depan} ${biodata.nama_belakang}`)

// ubah angka_favorit jadi 8
biodata.angka_favorit = 8;

// tambahkan hobi "coding"
biodata.hobi.push('coding');

// tambah satu property "lulusan" dengan value "Hacktiv8"
biodata.lulusan = "Hacktiv8";

// cetak semua hobi satu persatu menggunakan loop
for (i = 0; i < biodata.hobi.length;i++){
    console.log(biodata.hobi[i]);
}

// cetak semua key milik objek
for (let key in biodata){
    console.log(key)
}
// code atas sama (mirip deh) dengan code dibawah
console.log(Object.keys(biodata));

// cetak semua values milik objek
for (let key in biodata){
    console.log(biodata[key])
}

// Gunakan loop untuk cetak semua property milik objek dengan format
// key : values.
for (key in biodata){
    console.log(`${key} : ${biodata[key]}`)
}

// EXERCISE FUNCTION

// buat sebuah function 
// function mencetak tanggal sekarang ketika dipanggil
function cetakTanggal(){
    let hariini = new Date();
    let hari = hariini.getDate();
    let bulan = hariini.getMonth() + 1;
    let tahun = hariini.getFullYear();

    console.log(`hari ini adalah tanggal ${hari}, bulan ${bulan}, tahun ${tahun}`);
}

// buat function berikutnya
// function memberi tanggal sekarang ketika dipanggil
function cetakTanggal(){
    let hariini = new Date();
    let hari = hariini.getDate();
    let bulan = hariini.getMonth() + 1;
    let tahun = hariini.getFullYear();
    return `hari ini adalah tanggal ${hari}, bulan ${bulan}, tahun ${tahun}`;
}
// cetak hasil function
let tanggalSekarang = cetakTanggal();
console.log(tanggalSekarang);

// buat function yang menerima sebuah angka
// Gunakanlah kondisional untuk memeriksa angka tersebut ganjil atau genap

function ganjilGenap(angka){
    // Tambahkan pengecekan tipe data di function tersebut.
    // Jika data yang diberikan bukan angka yang valid, bukan bertipe data
    // number atau NaN, maka langsungreturn “Invalid Data”
    if (typeof angka !== 'number' || isNaN(angka)){
        return 'invalid data';
    }
    // Gunakan return untuk mengembalikan hasil pemeriksaan angka ganjil atau
    // genap tersebut dalam formatstring “ganjil” atau “genap”
    else if (angka % 2 !== 0){
        return `ganjil`;
    }
    else {
        return `genap`;
    }
}
// Tes dengan console log hasil function tersebut dengan angka:2, 3, 20, 21
console.log(ganjilGenap(2));
console.log(ganjilGenap(3));
console.log(ganjilGenap(20));
console.log(ganjilGenap(21));
console.log(ganjilGenap('aya'));