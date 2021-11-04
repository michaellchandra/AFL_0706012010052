<nav class="navbar navbar-expand-sm bg-warning">
  <div class="container-fluid">
      <ul class="nav nav-pills">
          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='Home - Official Site')
              active
              @endif" href="/">Home</a>
          </li>

          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='My Projects - Official Site')
              active
              @endif" href="/project">Project</a>
          </li>

          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='Course - Official Site')
              active
              @endif" href="/course">Course List</a>
          </li>

      </ul>
  </div>
</nav>