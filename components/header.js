class Header extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
    <header>
      <a href="./index.html"><h4>TT's Travel Tracker</h4></a>
      <div>
        <a href="">Add</a>
        <a href="./travel.html">Travel</a>
        <a href="./traveled.html">Traveled</a>
        <a href="">About</a>
        <button class="theme-button">Button</button>
      </div>
    </header>
    `;
  }
}

customElements.define('header-component', Header);