// soal 1
// Perulangan dengan while untuk menampilkan list orang dari 120. Di setiap perulangan,tampilkan di consolesaja format
// berikut: 'Halo, saya orang ke URUTAN ...'

let i = 1;
while (i <= 120){
    console.log(`Halo, saya orang ke ${i}`);
    i++;
}

// Ubah sebelumnya menjadi menggunakan for

for (let i = 1; i <= 120; i++){
    console.log(`Halo, saya orang ke ${i}`);
}


// soal 2
// Sekarang, kembali ke kode tugas 1, kita modifikasi sedikit kode kita. Gunakan percabangan/kondisional untuk
// hanya menampilkan teks dari orang urutan ganjil saja.

for (let i = 1; i <= 120; i++){
    if(i % 2 !== 0)
        console.log(`Halo, saya orang ke ${i}`);
}

// Gunakan percabangan/kondisionaluntuk hanyamenampilkan teks dari orang urutan ganjil saja.Bebas menggunakan while atau for,
// buatlah sebuah perulangan yang akan menampilkan huruf O seperti dibawah ini:OOOOOOOOOOOOOOOOTapi dengan syarat, kamu harus
// menggunakan looping untuk menampilkan bentuk di bawah ini! Be creative!Pikirkan bagaimanakalau kita harus menampilkan 100 "O"
// ke samping dengan 100 baris?

let i = 1;
while (i <= 100){
    if(i % 2 !== 0){
        console.log("oooo");
    }
    else{
        console.log('');
    }
    i++;
}


