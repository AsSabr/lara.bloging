<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            @if(Route::currentRouteName() == 'manage.index')
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
            </div>
            <div>
                Dashboard
                <div class="page-title-subheading">
                    The short details of your content
                </div>
            </div>
            @else
                <div class="page-title-icon">
                @yield('icon')
                </div>
                <div>
                    @yield('title')
                    <div class="page-title-subheading">
                        @yield('subheading')
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
