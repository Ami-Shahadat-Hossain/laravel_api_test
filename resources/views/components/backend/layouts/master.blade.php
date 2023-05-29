<!DOCTYPE html>
<html lang="en">
<x-backend.partials.head/>
<body class="sb-nav-fixed">
<x-backend.partials.nav/>
<div id="layoutSidenav">
    <x-backend.partials.layoutSidenav/>
    <div id="layoutSidenav_content">
        <main>
            {{ $slot }}
        </main>
        <x-backend.partials.footer/>
    </div>
</div>
<x-backend.partials.js/>
</body>
</html>

