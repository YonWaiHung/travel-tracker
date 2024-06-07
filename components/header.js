class Header extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
    <header>
      <a href="./index.php"><h4>TT's Travel Tracker</h4></a>
      <div>
        <a href="./add.php">Add</a>
        <a href="./travel.php">Travel</a>
        <a href="./traveled.php">Traveled</a>
        <a href="">About</a>
      </div>
    </header>
    `;
  }
}

customElements.define('header-component', Header);