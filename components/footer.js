class Footer extends HTMLElements {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
        <footer class="footer bg-dark">
      <br />
      <a
        class="footer-icons"
        href="https://discord.gg/EXfgpQDSum"
        target="_blank"
      >
        <i class="fa-brands fa-discord"></i>
      </a>
      <br />
      <i class="fa-regular fa-copyright"></i> 2023 The MeeTy Team. All rights
      reserved.
      <br />
      <br />
      <br />
    </footer>
    `;
  }
}

customElements.define("footer-component", Footer);
