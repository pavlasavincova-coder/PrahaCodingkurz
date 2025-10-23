let jmeno="Pavla";
let vek = 54;
let jeStudent=false;
let ovoce= ["rybíz","malina","borůvka"];
ovoce.push("ostružina");
ovoce.unshift("jahoda");
console.log(ovoce[0]);
console.log(ovoce.length);
ovoce.pop();
ovoce.includes("banan");

let person = {name:"Pavla", 
               surname:"Savincová",
               age:54, 
               hobies: ["animals","garden","history"]
               isMarried: true,
               fullname: function() {return this.name+" "+this.surname; }
            };
 person.age=32;
person.hobies.push("swimming");
console.log(person.fullname());
console.log(person.hobies[0]);
console.log(person.hobies.length);

let person = {name:"Pavla", 
               surname:"Savincová",
               age:54, 
               hobies: ["animals","garden","history"]
               isMarried: true,
               fullname: function() {return this.name+" "+this.surname; }
               kids=[ {name:"Marek", 
                       surname:"Savinec",
                       age:27, 
                       hobies: ["running","animals","swimming"]
                       },
                       {name:"Matěj", 
                       surname:"Kratochvíl",
                       age:21, 
                       hobies: ["technology","car","gaming"]
                       },]

            };
    console.log(person.kids[0].name);
    console.log(person.kids[1].hobies[2]);
function secti(a,b)
 {    return a+b;
    }
vysledek = secti(2,3);


function EurToCZK(value) 
{ return value*24;
}

function CZKToEur(value) 
{ return value/24;
}

let auto = {
    znacka: "Škoda",
    model: "Octavia",
    rok_vyroby: 2020,   
    owners: [
        {name: "Petr", age: 40},
        {name: "Jana", age: 38}
    ],
    Start(){
        console.log("Auto " + this.znacka + " " + this.model + "nastartovalo!");
    },
}
    console.log(auto.znacka);
    console.log(auto.model);
    console.log(auto.owners);
    console.log(auto.owners[1].name);
    auto.Start();
    

           