<div class="navbar">
    <div class="container">
        <div class="row">

            <ul class="d-flex ">
                <li class=" px-5 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="px-5 {{ Route::currentRouteName() == 'trains' ? 'active' : '' }}"><a
                        href="{{ route('trains') }}">Trains</a></li>
            </ul>

        </div>
    </div>
</div>
