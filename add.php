<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Travel</title>
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
      <h1>Add Item</h1>
    </section>

    <section>
      <div class="input-box">
        <div class="input-row">
          <div class="img-input">
            <img src="" id="selectedImage" alt="Please put an image for thumbnail" class="inputImage">
            <input type="file" name="inputImg" id="inputImg" accept="image/*" onchange="displayImage()">
          </div>
          <div class="input-details">
            <div class="input-fields">
              <div>
                <label for="inputName">Name: </label>
                <input type="text" name="inputName" id="inputName">
              </div>
              <div>
                <label for="inputLocation">Location: </label>
                <input type="text" name="inputLocation" id="inputLocation">
              </div>
              <div>
                <label for="inputDate">Date: </label>
                <input type="date" name="inputDate" id="inputDate">
              </div>
              <div>
                <label for="inputNote">Note: </label>
                <input type="text" name="inputNote" id="inputNote">
              </div>
              <div>
                <label for="travelType">Travel Type: </label>
                <select name="travelType" id="travelType">
                  <option value="travel">Yet To Travel</option>
                  <option value="traveled">Traveled</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="button-row">
          <a href=""><button class="theme-button add">ADD</button></a>
          <a href="./index.html"><button class="theme-button cancel">CANCEL</button></a>
        </div>
    </section>
    </div>

    <!-- Footer -->
    <footer-component></footer-component>
  </main>
</body>

</html>

<script>
  function displayImage() {
    const fileInput = document.getElementById('inputImg');
    const selectedImage = document.getElementById('selectedImage');

    const file = fileInput.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        selectedImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  }
</script>