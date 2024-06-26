<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Tracker</title>
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
    <header-component></header-component>

    <div class="body-content">
      <section class="title-box">
        <div>
          <h1>Leave No Regrets.</h1>
          <p>See and experience life through traveling</p>
          <button class="theme-button">Submit</button>
        </div>
        <iframe class="map-window" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15936.243510839915!2d101.58166455!3d3.07842175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smy!4v1716277694818!5m2!1sen!2smy" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
    </div>

    <footer-component></footer-component>
  </main>


</body>

</html>