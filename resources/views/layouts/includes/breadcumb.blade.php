<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>@yield('page-title')</h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">@yield('page-title')</li>
            </ul>
        </div>
    </div>
</div>