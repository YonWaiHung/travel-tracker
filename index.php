<?php
include("developers.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel List</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <script src="components/header.js" type="text/javascript" defer></script>
  <script src="components/footer.js" type="text/javascript" defer></script>
  <script src="components/travelData.js" type="text/javascript" defer></script>
</head>

<body>
  <main>
    <!-- Header -->
    <header-component></header-component>

    <section>
      <h1>Travel List</h1>
    </section>

    <!-- Search Function -->
    <section class="search-section">
      <input type="text" placeholder="Search Travel Item...">
      <div>
        <button class="theme-button">Search</button>
        <button class="theme-button">Filter</button>
      </div>
    </section>

    <section class="travel-list-item">
      <img src="" id="travel_photo" alt="Picture of Travel">
      <div class="travel-list-item-details">
        <div>
          <p class="item-detail name">Name</p>
          <p class="item-detail location">Location</p>
          <p class="item-detail date">Date</p>
          <p class="item-detail note">Note</p>
        </div>
        <!-- <div>
          <p id="travel_name">Mt. Fuji</p>
          <p id="travel_location">Kitayama, Fujinomiya, Shizuoka 418-0112, Japan</p>
          <p id="travel_date">21 / 5 / 2024</p>
          <p id="travel_note">Mount Fuji would be cool to see around but no climbing tho.</p>
        </div> -->
        <div>
          <p id="travel_name">Loading...</p>
          <p id="travel_location">Loading...</p>
          <p id="travel_date">Loading...</p>
          <p id="travel_note">Loading...</p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer-component></footer-component>
  </main>
</body>
</html>