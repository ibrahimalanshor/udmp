<ul
    class="nav nav-pills nav-sidebar flex-column"
    data-widget="treeview"
    role="menu"
    data-accordion="false"
>
    @foreach ($menus as $menu)
        <li class="nav-item {{ request()->routeIs($menu['route_active']) ? 'menu-open' : '' }}">
            <a
                href="@if (array_key_exists('route', $menu)) {{ route($menu['route']) }} @else # @endif"
                class="nav-link {{ request()->routeIs($menu['route_active']) ? 'active' : '' }}"
            >
                <i class="nav-icon fas fa-{{ $menu['icon'] }}"></i>
                <p>
                    {{ $menu['name'] }}
                    @if ($menu['children'])
                        <i
                            class="right fas fa-angle-left"
                        ></i>
                    @endif
                </p>
            </a>
            
            @if ($menu['children'])
                <ul class="nav nav-treeview">
                    @foreach ($menu['children'] as $child)
                        <li class="nav-item">
                            <a
                                href="{{ route($child['route']) }}"
                                class="nav-link {{ request()->routeIs($child['route_active']) ? 'active' : '' }}"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>{{ $child['name'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>