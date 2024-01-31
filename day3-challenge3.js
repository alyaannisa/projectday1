// 1. manipulasi array

var myArray = [];
myArray.push("apple");
myArray.push("banana");
myArray.pop();
myArray.unshift("orange");
myArray.shift();

for (let i = 0; i < myArray.length; i++) {
    console.log(myArray[i]);
  }

// 2. penggabungan array

var firstArray = ['Zayn', 'Malik'];
var secondArray = ['Khai', 'Malik'];
var combinedArray = firstArray.concat(secondArray);
var combinedString = combinedArray.join(', ');
console.log(combinedString);

// 3. pengurutan array

// ascending
var numbers = [10, 14, 6, 7];
numbers.sort((a, b) => a - b);
console.log(numbers);
// descending
var numbers = [10, 14, 6, 7];
numbers.sort((a, b) => b - a);
console.log(numbers);

// 4. pemotongan array - hapus banana orange
var fruits = ['apple', 'banana', 'orange', 'grape', 'kiwi'];
fruits.splice(1, 2);
console.log(fruits)

// 5. pemisahan string menjadi array
var kalimat = 'Hello, World, Javascript';
var kata = kalimat.split(' ');
console.log(kata)