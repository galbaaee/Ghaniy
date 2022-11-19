<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <div class="navbars">
      <a class="navbar-brand " href="#">Simple Siakad</a>
    </div>
    <div class="collapse navbar-collapse"  id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title ===('Data Mahasiswa')) ? 'active' : '' }} " href="/mahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title ===('Input Data')) ? 'active' : '' }}" href="/mahasiswa/create">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title ===('About Me')) ? 'active' : '' }}" href="/mahasiswa/about">About Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style type="text/css">
  .navbars{
    padding-right: 800px;
  }
</style>