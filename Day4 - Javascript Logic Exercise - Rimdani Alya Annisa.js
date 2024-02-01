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