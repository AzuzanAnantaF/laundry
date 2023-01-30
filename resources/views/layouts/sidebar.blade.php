<div class="main-sidebar bg-dark">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('dashboard')}}" class="text-white">laundry bunda bidah</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{url('/dashboard')}}">jujan</a>
      </div>
      <ul class="sidebar-menu">
          {{-- link --}}
          @yield('link')
      </ul>

        
    </aside>
  </div>