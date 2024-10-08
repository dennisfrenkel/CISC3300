const listItems = document.querySelectorAll('#color-list li');
listItems.forEach(item => {
    item.addEventListener('click', () => {
        listItems.forEach(li => li.style.color = 'blue');
    });
});

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

const catsList = document.getElementById('cats-list');
cats.forEach(cat => {
    const li = document.createElement('li');
    li.textContent = cat.name;
    catsList.appendChild(li);
});

const form = document.getElementById('cat-form');
const input = document.getElementById('cat-input');
const messageDiv = document.getElementById('form-message');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const inputValue = input.value;

    if (inputValue === '') {
        messageDiv.textContent = 'Please Provide a Value';
        messageDiv.className = 'error';
    } else {
        messageDiv.textContent = 'Success';
        messageDiv.className = 'success';
    }

    console.log(inputValue);
});
