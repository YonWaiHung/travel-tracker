<?php
include("developers.php");
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
  <script src="components/travelData.js" type="text/javascript" defer></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>

<body>
  <main>
    <!-- Header -->
    <header-component></header-component>

    <div class="body-content">
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

      <!-- <section class="travel-list-item">
      <div class="col-sm-8">
        <?php echo $deleteMsg ?? ''; ?>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.N</th>

                <th>Photo</th>
                <th>Name</th>
                <th>Location</th>
                <th>Date</th>
                <th>Note</th>
            </thead>
            <tbody>
              <?php
              if (is_array($fetchData)) {
                $sn = 1;
                foreach ($fetchData as $data) {
              ?>
                  <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $data['travel_photo'] ?? ''; ?></td>
                    <td><?php echo $data['travel_name'] ?? ''; ?></td>
                    <td><?php echo $data['travel_location'] ?? ''; ?></td>
                    <td><?php echo $data['travel_date'] ?? ''; ?></td>
                    <td><?php echo $data['travel_note'] ?? ''; ?></td>
                  </tr>
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
            </tbody>
          </table>
        </div>
      </div>
    </section> -->

      <?php
      if (is_array($fetchData)) {
        $sn = 1;
        foreach ($fetchData as $data) {
      ?>
          <section class="travel-list-item">
            <img src=<?php echo $data['travel_photo'] ?? ''; ?> id="travel_photo" alt="Picture of Travel">
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
                <p id="travel_name"><?php echo $data['travel_name'] ?? ''; ?></p>
                <p id="travel_location"><?php echo $data['travel_location'] ?? ''; ?></p>
                <p id="travel_date"><?php echo $data['travel_date'] ?? ''; ?></p>
                <p id="travel_note"><?php echo $data['travel_note'] ?? ''; ?></p>
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