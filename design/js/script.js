let menu = document.querySelector('.header .menu');

document.querySelector('#menu-btn').onclick = () =>{
   menu.classList.toggle('active');
}

window.onscroll = () =>{
   menu.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
   inputNumber.oninput = () =>{
      if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
   };
});

document.querySelectorAll('.view-property .details .thumb .small-images img').forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      document.querySelector('.view-property .details .thumb .big-image img').src = src;
   }
});

// document.querySelectorAll('.faq .box-container .box h3').forEach(headings =>{
//    headings.onclick = () =>{
//       headings.parentElement.classList.toggle('active');
//    }
// });

// // Select the save buttons
// const saveButtons = document.querySelectorAll('.save-btn');

// // Add a click event listener to each save button
// saveButtons.forEach(button => {
//   button.addEventListener('click', event => {
//     // Get the ID of the house
//     const houseId = event.target.dataset.houseId;

//     // Get the list of saved houses from localStorage, or create an empty array if it doesn't exist
//     const savedHouses = JSON.parse(localStorage.getItem('savedHouses')) || [];

//     // Check if the house is already saved
//     const isSaved = savedHouses.some(house => house.id === houseId);

//     // If the house is already saved, remove it from the savedHouses array
//     if (isSaved) {
//       const updatedSavedHouses = savedHouses.filter(house => house.id !== houseId);
//       localStorage.setItem('savedHouses', JSON.stringify(updatedSavedHouses));
//       event.target.innerHTML = 'Save';
//     } 
//     // If the house isn't already saved, add it to the savedHouses array
//     else {
//       savedHouses.push({ id: houseId });
//       localStorage.setItem('savedHouses', JSON.stringify(savedHouses));
//       event.target.innerHTML = 'Saved';
//     }
//   });
// });

// // On page load, update the save buttons to reflect the saved state of each house
// window.addEventListener('load', () => {
//   const savedHouses = JSON.parse(localStorage.getItem('savedHouses')) || [];
//   savedHouses.forEach(savedHouse => {
//     const saveButton = document.querySelector(`[data-house-id="${savedHouse.id}"]`);
//     if (saveButton) {
//       saveButton.innerHTML = 'Saved';
//     }
//   });
// });

// get all heart icons
const heartIcons = document.querySelectorAll('.fa-heart');

// add click event listener to each heart icon
heartIcons.forEach((icon) => {
  icon.addEventListener('click', (event) => {
    // prevent the default behavior of the heart icon
    event.preventDefault();

    // get the ID of the house from the data-houseid attribute
    const houseId = event.target.dataset.houseid;

    // send an AJAX request to the server to save the house
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/save-house');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        // if the request is successful, change the heart icon to solid
        icon.classList.add('fas');
        icon.classList.remove('far');
      }
    };
    xhr.send(`houseId=${houseId}`);
  });
});
