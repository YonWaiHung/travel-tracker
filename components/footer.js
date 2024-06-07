class Footer extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
    <footer>
      <div class="footer-left">
        <div class="footer-title">
          <p>TT's Travel Tracker</p>
        </div>
        <div class="contact-icons">
          <img src="./assets/images/icons8-instagram.svg" alt="Instagram">
          <img src="./assets/images/icons8-linkedin.svg" alt="LinkedIn">
          <img src="./assets/images/icons8-github.svg" alt="GitHub">
        </div>
      </div>
      <div class="footer-page">
        <div class="footer-page-list">
          <a href="./index.php">Home</a>
          <a href="./add.php">Add</a>
          <a href="./travel.php">Travel</a>
          <a href="./traveled.php">Traveled</a>
        </div>
        <div class="footer-page-list">
          <a href="#">About Me</a>
          <a href="#">Contact Us</a>
        </div>
      </div>
    </footer>
    `;
  }
}

customElements.define('footer-component', Footer);