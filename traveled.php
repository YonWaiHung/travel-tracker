<?php
include("traveledData.php");
?>
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

      <?php
      if (is_array($fetchData)) {
        $sn = 1;
        foreach ($fetchData as $data) {
      ?>
          <section class="travel-list-item">
            <img src=<?php echo $data['traveled_photo'] ?? ''; ?> alt="Picture of Travel">
            <div class="travel-list-item-details">
              <div>
                <p class="item-detail name">Name</p>
                <p class="item-detail location">Location</p>
                <p class="item-detail date">Date</p>
                <p class="item-detail note">Note</p>
              </div>
              <div>
              <p><?php echo $data['traveled_name'] ?? ''; ?></p>
                <p><?php echo $data['traveled_location'] ?? ''; ?></p>
                <p><?php echo $data['traveled_date'] ?? ''; ?></p>
                <p><?php echo $data['traveled_note'] ?? ''; ?></p>
              </div>
            </div>
          </section>
        <?php
          $sn++;
        }
      } else { ?>
        <tr>
          <td colspan="8">
            <?php echo $fetchData; ?>
          </td>
        <tr>
        <?php
      } ?>
    </div>

    <!-- Footer -->
    <footer-component></footer-component>
  </main>
</body>

</html>