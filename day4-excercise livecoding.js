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


// JAVASCRIPT LOGIC EXERCISE

// exercise 1 compare numbers

// Diberikan sebuah function yang menerima dua parameter angka. Function
// akan me-return nilai true jikasecondNumber lebih besar dari firstNumber,
// dan false jika sebaliknya. Jika kedua angka bernilai sama, function akan
// me-return -1.
function compareNumbers (firstNumber, secondNumber){
    if (secondNumber > firstNumber){
        return `true`;
    }
    else if (secondNumber < firstNumber){
        return `false`;
    }
    else{
        return `-1`;
    }
}
console.log(compareNumbers(5, 8));
console.log(compareNumbers(5, 3));
console.log(compareNumbers(4, 4));
console.log(compareNumbers(3, 3));
console.log(compareNumbers(17, 2));

// exercise 2 reverseString

// Buatlah function bernama reverseString yang mampu melakukan proses
// pembalikan string!
function reverseString (text){
    return text.split("").reverse().join("");
}
console.log(reverseString('Hello World and Coders'));
console.log(reverseString('John Doe'));
console.log(reverseString('I am a bookworm'));
console.log(reverseString('Coding is my hobby'));
console.log(reverseString('super'));


// exercise 3 urutHuruf

// Buatlah function yang bisa mengurutkan huruf yang ada pada sebuah text,
// dari A-Z (Ascending).Note: Jika sudah berhasil menyelesaikan masalah ini
// menggunakan built-in function .sort(), coba jugamenggunakan algoritma
// sortingmu sendiri.
function urutHuruf(text){
    let hurufBerurutan = text.split('').sort().join('');
    return hurufBerurutan;
}
console.log(urutHuruf("halo"));
console.log(urutHuruf("qwerty"));
console.log(urutHuruf("qwertyuiopasdfghjklzxcvbnm"));

// exercise 4 function aritmatika
function isArithmeticProgression(arr){
    let selisih = arr[1] - arr[0];
    for (i = 1; i < arr.length - 1; i++){
        if (arr[i + 1] - arr[i] !== selisih){
            return false;
        }
    }
    return true;
}
console.log(isArithmeticProgression([1,2 ,3 ,4 ,5]));
console.log(isArithmeticProgression([2, 4, 6, 12, 24]));
console.log(isArithmeticProgression([2, 4, 6, 8]));
console.log(isArithmeticProgression([2, 6, 18, 54]));
console.log(isArithmeticProgression([1, 2, 3, 4, 5, 9]));

// exercise 5 function jarak 3 karakter
function threeStepsAB(text){
    return /a...b|b...a/.test(text)
}
console.log(threeStepsAB('lane borrowed'));
console.log(threeStepsAB('i am sick'));
console.log(threeStepsAB('you are boring'));
console.log(threeStepsAB('barbarian'));
console.log(threeStepsAB('bacon and meat'));

// exercise 6 function fpb
function gcd (firstNumber, secondNumber){
    while(secondNumber !== 0){
        var temp = secondNumber;
        secondNumber = firstNumber % secondNumber;
        firstNumber = temp;
    }
    return firstNumber;
}
console.log(gcd(12,16));
console.log(gcd(50,40));
console.log(gcd(22,99));
console.log(gcd(24,36));
console.log(gcd(17,123));

// exercise 7 function bilangan prima
function isPrime(number){
    if (number <= 1){
        return false;
    }
    for (let i = 2; i <= Math.sqrt(number); i++){
        if (number % i == 0){
            return false;
        }
    }
    return true;
}
console.log(isPrime(3));
console.log(isPrime(7));
console.log(isPrime(6));
console.log(isPrime(23));
console.log(isPrime(33));

// exercise 8 funtion yang mereturn array berisi angka prima
function listPrima(angkaPertama, angkaKedua){
    let arr = [];
    for (let i = angkaPertama; i <= angkaKedua; i++){
        if (isPrime(i)){
            arr.push(i);
        }
    }
    return arr;
}
console.log(listPrima(1, 5));
console.log(listPrima(5, 10));
console.log(listPrima(10, 20));