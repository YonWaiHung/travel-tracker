// travelData.js
// document.addEventListener("DOMContentLoaded", () => {
//   const apiUrl = 'http://127.0.0.1:3306/travel';

//   async function loadTravelItems() {
//     try {
//       const response = await fetch(apiUrl);
//       const travelItems = await response.json();

//       if (travelItems.length > 0) {
//         const travelItem = travelItems[0]; // Assuming you want the first item
//         document.getElementById('travel_photo').textContent = travelItem.photo;
//         document.getElementById('travel_name').textContent = travelItem.name;
//         document.getElementById('travel_location').textContent = travelItem.location;
//         document.getElementById('travel_date').textContent = travelItem.date;
//         document.getElementById('travel_note').textContent = travelItem.note;
//       }
//     } catch (error) {
//       console.error('Error fetching travel items:', error);
//     }
//   }

//   loadTravelItems();
// });

  document.getElementById("travel_photo").src = "./assets/images/mtFuji.jpg";
  document.getElementById("travel_name").innerHTML = "Mt. Fuji";
  document.getElementById("travel_location").innerHTML = "Kitayama, Fujinomiya, Shizuoka 418-0112, Japan";
  document.getElementById("travel_date").innerHTML = "2024-05-21";
  document.getElementById("travel_note").innerHTML = "Mount Fuji would be cool to see around but no climbing tho.";
