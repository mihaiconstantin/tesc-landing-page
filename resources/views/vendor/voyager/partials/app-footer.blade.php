<footer class="app-footer">
    <div class="site-footer-right">
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
           Voyager - {{ $version }}
        @endif
    </div>
</footer>
