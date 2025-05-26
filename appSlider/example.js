let pi = 3.14;

console.log(2*10*pi);
console.log(2*5*pi);
console.log(2*7*pi);
console.log(2*9*pi);

let name = 'Kacper'
let surname = 'Kowalski'
console.log(name +" "+ surname)

name = "Jan"
surname = "Lewandowski"
console.log(name +" "+ surname)

let person1 = {
    name:"Kacper",
    surname:"Kowalski"
};
console.log(person1.name + " " + person1.surname)

let person2 ={
    name:"Jan",
    surname:"Lewandowski"
};
console.log(person2.name + " " + person2.surname)

let myFunction = (name , first) => {
    console.log(first +" "+ "Jestem" +" "+ name);
};
myFunction("Kacper", "Elo");
myFunction("Janek", "Siema eniu");

let myFuntion1 = (number) => {
    console.log(number*2);
}
myFuntion1(6);

let myFunction2 = (num1, num2) =>{
    console.log(num1 * num2);
};
myFunction2(8,8)

let myFunction3 = (number) =>{
    console.log(Math.pow(number,2) )
};

myFunction3(6);

let bool = 2+2 == 10;
console.log(bool);

let bool1 = 5>2;
console.log(bool1);

let bool2 = 2 !== 10
console.log(bool2)

let isBigger = (number) =>{
    if(number > 10){
        console.log("Wieksza");
    }
    else{
        console.log("Mniejsza")
    }
}
isBigger(20);

let circeLentgh = (radius) =>{
    console.log(2*radius*pi);
}

for (let i = 1; i <= 20; i++){
    circeLentgh(i);
};








let wynik = (cyfra) =>{
    console.log(cyfra);
}


for (let i = 1; i<=20; i++){
    wynik(i);
}


let a = 1;
let b = 2;
let c;
if(a < b){
    c = b - a;
    console.log(c);
}
else{
    c = b + a;
    console.log(c);
}
