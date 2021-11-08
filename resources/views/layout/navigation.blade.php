<nav class="navbar navbar-expand-sm navbar-inverse bg-light ">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Computer Software Seller</a>
      <ul class="nav navbar-nav nav-pills navbar-right ">
          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='home')
              active
              @endif" href="/">Home</a>
          </li>


          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='SoftwareList')
              active
              @endif" href="{{ route('Software.index') }}">Software List</a>
          </li>

          <li class="nav-item">
              <a class="nav-link 
              @if ($title =='SoftwareCategory')
              active
              @endif" href="{{ route('Category.index') }}" >Category List</a>
              
          </li>

      </ul>
  </div>
</nav>