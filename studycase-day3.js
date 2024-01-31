function cekPalindrom(kata) {
    const lowerKata = kata.toLowerCase().replace(/[^A-Za-z0-9]/g, '');  

    const reversedKata = lowerKata.split('').reverse().join('');  

    return lowerKata === reversedKata;
  }
  
  const input = prompt("Masukkan kata:");
  
  const hasil = cekPalindrom(input);
  
  if (hasil) {
    console.log(`"${input}" True`);
  } else {
    console.log(`"${input}" False`);
  }