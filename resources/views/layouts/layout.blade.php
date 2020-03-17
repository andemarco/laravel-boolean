@include('.partials._header')
    {{-- HEADER --}}
    <header>
      @yield('section')
    </header>
    {{-- /HEADER --}}
    {{-- MAIN --}}
    <main>
      @yield('section')
    </main>
    {{-- /MAIN --}}
    {{-- FOOTER --}}
    <footer>
      @yield('section')
    </footer>
    {{-- /FOOTER --}}
@include('.partials._footer')
