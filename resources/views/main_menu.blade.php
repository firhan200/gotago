<div class="hidden lg:block">
    <ul class="flex align-middle">
        @foreach($items as $menu_item)
            <li><a href="{{ $menu_item->link() }}" class="ml-2 px-4 py-2 rounded-2xl hover:bg-indigo-500 hover:text-white hover:drop-shadow-lg ease-in duration-100">{{ $menu_item->title }}</a></li>
        @endforeach
    </ul>
</div>
<div class="lg:hidden">
    <button id="toggle-mobile-menu">
        <svg viewBox="0 0 100 80" width="20" height="20">
            <rect width="100" height="10"></rect>
            <rect y="30" width="100" height="10"></rect>
            <rect y="60" width="100" height="10"></rect>
          </svg>
    </button> 
</div>

<div id="mobile-menu" class="absolute w-full left-0 bg-white pt-8 ease-in duration-300 h-0 overflow-hidden lg:hidden">
    <ul class="container mx-auto">
        @foreach($items as $menu_item)
            <li class="mb-4"><a href="{{ $menu_item->link() }}" class="ml-2 px-4 py-2 rounded-2xl hover:bg-indigo-500 hover:text-white hover:drop-shadow-lg ease-in duration-100">{{ $menu_item->title }}</a></li>
        @endforeach
    </ul>
</div>