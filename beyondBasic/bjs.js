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
let products = [
    {name: 'laptop', price: 43000},
    {name: 'shirt', price: 500, quantity: 3},
];

products.price = 12000;
console.log(products)