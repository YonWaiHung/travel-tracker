<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel List</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/travel-car.png">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <script src="components/header.js" type="text/javascript" defer></script>
  <script src="components/footer.js" type="text/javascript" defer></script>
</head>

<body>
  <main>
    <!-- Header -->
    <header-component></header-component>
    <div class="body-content">
      <section>
        <h1>Traveled List</h1>
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
        <img src="./assets/images/snowdon.jpg" alt="Picture of Travel">
        <div class="travel-list-item-details">
          <div>
            <p class="item-detail name">Name</p>
            <p class="item-detail location">Location</p>
            <p class="item-detail date">Date</p>
            <p class="item-detail note">Note</p>
          </div>
          <div>
            <p>Snowdonia</p>
            <p>Wales, United Kingdom</p>
            <p>21 / 5/ 2023</p>
            <p>Sharing some pics from our few days April adventures in one of the most beautiful places
              in North Love Wales. The walk up on the hills was a bit more challenging but we made it.
              Walking down the hill just as tough. Riding bikes in the rain and in the sea was the best fun…</p>
          </div>
        </div>
      </section>
      
    </div>


    <!-- Footer -->
    <footer-component></footer-component>
  </main>
</body>

</html>