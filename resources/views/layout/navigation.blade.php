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
              @if ($title =='softwarelist')
              active
              @endif" href="{{ route('Software.index') }}">Software List</a>
          </li>

          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='categorylist')
              active
              @endif" href="{{ route('Category.index') }}" >Category List</a>
              
          </li>

      </ul>
  </div>
</nav>