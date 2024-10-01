const cats = [
    { name: 'Charlie', adoptionStatus: 'available' },
    { name: 'Lily', adoptionStatus: 'not-available' },
    { name: 'Coco', adoptionStatus: 'available' },
    { name: 'Oreo', adoptionStatus: 'not-available' },
    { name: 'Luna', adoptionStatus: 'available' },
    { name: 'Milo', adoptionStatus: 'available' },
    { name: 'Lola', adoptionStatus: 'not-available' },
    { name: 'Leo', adoptionStatus: 'available' },
    { name: 'Willow', adoptionStatus: 'available' },
    { name: 'Bella', adoptionStatus: 'not-available' },
    { name: 'Max', adoptionStatus: 'available' },
    { name: 'Cleo', adoptionStatus: 'available' },
    { name: 'Lucy', adoptionStatus: 'not-available' },
    { name: 'Daisy', adoptionStatus: 'available' },
];

// Step a
const result = []
for (i = 0; i < cats.length; i ++) {
    if (cats[i].adoptionStatus == 'available') {
        result.push(cats[i].name);
    }
}
// Step b
const sentence = `I have adopted theses cats: ${result.join(', ')}.`;!

console.log(sentence);

const randomValue = Math.random() * 10;
const randresult =  randomValue > 5 ? 'greater than 5' : 'less than five!';

const cat = { name: 'Pinecone', age: 13, type: 'Munchkin', cuteness: 9001 };
for (let key in cat) {
    if (cat.hasOwnProperty(key)) {
        console.log(cat[key]);
    }
}
const num = 1;
const str = '1';
if (num == str) {
    console.log("1 == '1' is true")
}
if (num != str) {
    console.log("1 != '1' is false")
}

const cuteCats = cats.map(function(cat) {
    return `${cat.name} is cute!`;
});
console.log(cuteCats);
