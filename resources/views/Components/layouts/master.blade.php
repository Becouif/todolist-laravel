<!-- header section  -->

@include('Components.layouts.header')

  
    <!-- Sidebar -->
    @include('Components.layouts.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('Components.layouts.topbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @include('Components.layouts.container')
        <!---Container Fluid-->
      </div>
     @include('Components.layouts.footer')