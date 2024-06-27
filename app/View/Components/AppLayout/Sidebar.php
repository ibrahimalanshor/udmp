<?php

namespace App\View\Components\AppLayout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{    
    /**
     * menus
     *
     * @var mixed
     */
    public $menus;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = collect([
            [
                'name' => 'Dashboard',
                'icon' => 'tachometer-alt',
                'children' => [],
                'route' => 'dashboard',
                'route_active' => 'dashboard'
            ],
            [
                'name' => 'Pengguna',
                'icon' => 'users',
                'children' => [],
                'route' => 'pengguna',
                'route_active' => 'pengguna'
            ],
            [
                'name' => 'Data Material',
                'icon' => 'table',
                'children' => [],
                'route' => 'material.index',
                'route_active' => 'material.index'
            ],
            [
                'name' => 'Material Masuk',
                'icon' => 'download',
                'children' => [],
                'route' => 'material.masuk',
                'route_active' => 'material.masuk'
            ],
            [
                'name' => 'Material Keluar',
                'icon' => 'upload',
                'children' => [],
                'route' => 'material.keluar',
                'route_active' => 'material.keluar'
            ],
            [
                'name' => 'Stok Material',
                'icon' => 'warehouse',
                'children' => [],
                'route' => 'stok',
                'route_active' => 'stok'
            ],
            [
                'name' => 'Profile',
                'icon' => 'user',
                'children' => [],
                'route' => 'profile',
                'route_active' => 'profile'
            ],
            // [
            //     'name' => 'Master',
            //     'icon' => 'table',
            //     'route_active' => ['divisi.*', 'jabatan.*', 'pendidikan.*'],
            //     'children' => [
            //         [
            //             'name' => 'Divisi',
            //             'route' => 'divisi.index',
            //             'route_active' => 'divisi.*'
            //         ],
            //         [
            //             'name' => 'Jabatan',
            //             'route' => 'jabatan.index',
            //             'route_active' => 'jabatan.*'
            //         ],
            //         [
            //             'name' => 'Pendidikan',
            //             'route' => 'pendidikan.index',
            //             'route_active' => 'pendidikan.*'
            //         ]
            //     ]
            // ],
            // [
            //     'name' => 'Karyawan',
            //     'icon' => 'user-tie',
            //     'children' => [],
            //     'route' => 'karyawan.index',
            //     'route_active' => 'karyawan.*'
            // ],
            // [
            //     'name' => 'Kehadiran',
            //     'icon' => 'calendar',
            //     'children' => [],
            //     'route' => 'kehadiran',
            //     'route_active' => 'kehadiran'
            // ],
            // [
            //     'name' => 'Penggajian',
            //     'icon' => 'file-invoice',
            //     'children' => [],
            //     'route' => 'penggajian.index',
            //     'route_active' => 'penggajian.*'
            // ]
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-layout.sidebar');
    }
}
