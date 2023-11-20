class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
    <header>
      <div class="container-fluid bg-dark">
        <div class="container">
          <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
            <a href="index.html" class="navbar-brand">
              <h1 class="text-primary mb-0 display-5">
                Mee<span class="text-white">Ty</span>
              </h1>
            </a>
            <button
              class="navbar-toggler bg-primary"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse"
            >
              <span class="fa fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
              <div class="navbar-nav ms-auto">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                  <a href="meetings.html" class="nav-item nav-link">Meetings</a>
                </div>
                <a href="blog.html" class="nav-item nav-link">Advices</a>
                <div class="nav-item dropdown">
                  <a
                    href="materials.html"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    >Learning Materials</a
                  >
                  <div class="dropdown-menu m-0 bg-primary">
                    <a href="#" class="dropdown-item">Learning Methods</a>
                    <a href="#" class="dropdown-item">C++</a>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a
                    href="abMeeTy.html"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    >About us</a
                  >
                  <div class="dropdown-menu m-0 bg-primary">
                    <a href="abMeeTy.html" class="dropdown-item">About MeeTy</a>
                    <a href="abcoauthors.html" class="dropdown-item active"
                      >About Cocreators</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="menu">
              <button
                type="button"
                class="btn btn-primary btn-sm bg-primary w-40"
              >
                <a href="login.php" class="link">Log in</a>
              </button>

              <button
                type="button"
                class="btn btn-primary btn-sm bg-primary w-40"
              >
                <a href="registration.php" class="link">Sign Up</a>
              </button>
            </div>
          </nav>
        </div>
      </div>
    </header>
      `;
  }
}

customElements.define("header-component", Header);
