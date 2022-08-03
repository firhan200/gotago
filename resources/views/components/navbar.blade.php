<nav class="w-full bg-white z-50 fixed drop-shadow-lg">
    <div class="container mx-auto">
        <div class="flex justify-between py-6 px-4 lg:px-0">
            <div>
                <img src="{{ Voyager::image(setting('site.logo')) }}" class="h-10"/>
            </div>
            <div class="my-auto">
                {{ menu('main', 'main_menu') }}
            </div>
        </div>
    </div>
</nav>