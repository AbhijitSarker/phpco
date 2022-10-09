// // 1...three types of variables
// var numbers = 12;
// var string = 'abhijit';
// var isBoolean = true;

// // 2... Two variables using (let aand const)
// let a = 2;
// a = 3;
// const x = 5;

// // 3... simple math operation +, -, /, *, %
// let a = 24;
// let b = 6;
// const add = a + b;
// const diff = a - b;
// const multiply = a * b;
// const div = a / b;
// const rest = a % b;

// console.log(add, diff, multiply, div, rest)


// // 4... comparison (==, !=, >, <, >=, <=)
// let a = 24;
// let b = 6;

// var comparison = (a == b);
// console.log(1, comparison)

// var comparison = (a != b);
// console.log(2, comparison)

// var comparison = (a > b);
// console.log(3, comparison)

// var comparison = (a < b);
// console.log(4, comparison)

// var comparison = (a >= b);
// console.log(5, comparison)

// var comparison = (a <= b);
// console.log(6, comparison)

// // 5... two condition. case=1 fulfill both conditions, case-2: fullfill at least one condition

// let a = 24;
// let b = 6;

// if (a > b && a != b){
//     console.log('bigger')
// }

// else if (a < b || a == b){
//     console.log('smaller')
// }
// else{
//     console.log('wrong')
// }

// 6.. if, else




// // 7... while loop to display 7 to 19 all numbers and display odd numbers between 7 & 19

// var i = 7;
// while(i <= 19){
//     if(i % 2 == 1){
//         console.log(i)
//     }
//     i++
// }



// // 8... declare an array. number of elements. update 0r change 4th position element. add or remove elements. check wether a specific value exists in an array

// var numbers = [17, 46, 83, 93, 65, 47];
// numbers[3] = 12;
// numbers.pop()
// numbers.push(25)

// // console.log(numbers.indexOf(83))

// if (numbers.indexOf(17) == -1){
//     console.log("oops")
// }
// else if (numbers.indexOf(17) != -1){
//     console.log('available')
// }

// // 9... for, for of,,,, use any for loop to dispay every elements of an array
// var pLangs = ['js', 'c', 'java'];
// for(let i = 0; i < pLangs.length; i++){
//     console.log(pLangs[i])
// }

// // 10... you have an array of numbers. display the numbers bigger than 80

// var numbers = [18, 67, 87, 52, 98, 14, 125]

// for (let i = 0; i < numbers.length; i++){
//     let number = numbers[i]
//     if (number > 80){
//         console.log(number)
//     }
// }

// // 11... write a function that takes three numbers and return multiplication of the three numbers

// function multiplier(num1, num2, num3){
//     let multiplied = num1 * num2 * num3;
//     return multiplied;
// }
// let myTotal = multiplier(2, 3, 3)
// console.log(myTotal)

// 12... declare an object and change any property of that object
// let products = [
//     {name: 'laptop', price: 43000},
//     {name: 'shirt', price: 500, quantity: 3},
// ];

// products.price = 12000;
// console.log(products)








// // 1.. conversion
// function feetToInch(feet){
//     var inch = feet / 12;
//     return inch;
// }
// console.log(feetToInch(12))


// // 2.. conversion
// function CMtoM(CM){
//     var meter = CM / 100;
//     return meter;
// }
// console.log(CMtoM(1200))


// // 3.. calculation
// function pageRequiirements(book1, book2, book3){
//     const b1Page = 100;
//     const b2Page = 200;
//     const b3Page = 300;
//     const b1Total = b1Page * book1;
//     const b2Total = b2Page * book2
//     const b3Total = b3Page * book3
//     const totalPages = b1Total + b2Total + b3Total;
//     return totalPages;
// }    
// const pagesForProject = pageRequiirements(5, 3, 1);
// console.log(pagesForProject);


// // 4.. (6 min)
// const strings = ['abdul', 'abhijit', 'shimanto', 'shharaj', 'abulkalahhm'];

// function bestFriend(array) {
//     let result = '';
//     for (i = 1; i < array; i++){
//         let currentItem = array[i];
//         if(currentItem.length > result.length){
//             result = array[i];
//         }
//     }
//     return result;
// }
// console.log(bestFriend(strings))


// 5.. will stop the loop if the array has any negative numer and returns all the positive number before the negative numbers

// একটা array এর মধ্যে অনেকগুলা সংখ্যা থাকবে। তোমার কাজ হচ্ছে সংখ্যা গুলা একটার পর একটা করে চেক করা। এবং সংখ্যা গুলা যদি পজিটিভ সংখ্যা হয়। অর্থাৎ শূন্য এর চাইতে বড় হয় তাহলে সেগুলাকে কোন একটা array এর মধ্যে রাখবে। আর যদি নেগেটিভ সংখ্যা হয়। তাহলে লুপটা স্টপ করে দিবে। এবং লুপ বন্ধ করার আগ পর্যন্ত যতগুলা পজিটিভ সংখ্যা পাওয়া গেছে। সেগুলা রিটার্ন করে দিবে। 

// let numbers =[1, 6, 5, 0, 6, -6, 7]
// let positive = [];
// function onlyPositive(){
//     for(let i = 0; i < numbers.length; i++){
//         if (numbers[i] >= 0){
//             positive.push(numbers[i]);
//         } 
//         else break;
//     }
//     return positive;
// }
// let mynum = onlyPositive(positive);
// console.log(mynum);



var numbers =[1, 6, 9, 0, 6, -6, 9];

var positiveArr = [];

numbers.forEach(function(item) {
    if (numbers[i] > 0) {
        positiveArr.push(item);
    } 
    
});

console.log(positiveArr) 


const products = [
    {name: 'laptop', price: 43000},
    {name: 'shirt', price: 500, quantity: 3},
    {name: 'watch', price:3680},
    {name: 'phone', price: 55000}
];

let totalPrice = 0;

for(const product of products){
    totalPrice = totalPrice + product.price;
}
// console.log(totalPrice)


const cart = [
    {name: 'laptop', price: 43000, quantity: 1},
    {name: 'shirt', price: 500, quantity: 8},
    {name: 'watch', price:3680, quantity: 3},
    {name: 'phone', price: 55000, quantity: 1}
];

let cartTotal = 0;
for (const product of cart){
    console.log(product);
    const productTotal = product.price * product.quantity;
    cartTotal= cartTotal + productTotal
}
console.log(cartTotal);