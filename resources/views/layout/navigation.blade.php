<nav class="navbar navbar-expand-sm bg-warning">
  <div class="container-fluid">
      <ul class="nav nav-pills">
          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='home')
              active
              @endif" href="/">Home</a>
          </li>


          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='pcsoftwarelist')
              active
              @endif" href="/software">Software List</a>
          </li>

      </ul>
  </div>
</nav>