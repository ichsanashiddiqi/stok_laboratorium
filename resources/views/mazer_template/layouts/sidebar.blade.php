@php
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\URL;

@endphp

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">

                    <h1 class="text-uppercase text-briview-login d-flex align-items-center justify-content-center">
                        <img src="/assets/images/logo/kementan.png" class="mr-4" alt="" style="max-width: 40%; height: 100%;">
                        <div class="d-flex flex-column align-items-start" style="font-size: 20px; ">
                            <p>Laboratorium-Stok</p>
                        </div>
                    </h1>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                {{-- models harus ada walaupun dummy --}}
                {{-- @can('sidebarParentDashboard', App\Models\Sidebar::class) --}}
                <li class="sidebar-title">Dashboard</li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildDashboard', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarParentMasterData', App\Models\Sidebar::class) --}}
                <li class="sidebar-title">Master Data</li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildMasterDataPendaftaranSidikJari', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/formsidikjari*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data Pengusulan Alat</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildMasterDataPermohonanSim', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/formsim*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data Pengajuan Alat Lab</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildMasterDataLaporanKehilangan', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/formlaporankehilangan*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data Gudang Alat</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildMasterDataTindakKriminal', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/formlaporantindakkriminal*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data Lab Virologi</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildMasterDataPengaduanMasyarakat', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/formlaporanpengaduanmasyarakat*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data Lab Bakterologi</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildMasterDataPendaftaranSkck', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/formskck*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                {{-- <a href="" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Permohonan SKCK</span>
                </a> --}}
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarParentAdmin', App\Models\Sidebar::class) --}}
                <li class="sidebar-title">Admin</li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildAdminUsers', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/users*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Users</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildAdminRoles', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/roles*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-person-check-fill"></i>
                    <span>Roles</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildAdminPermissions', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/permissions*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link'>
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Permissions</span>
                </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('sidebarChildAdminLogs', App\Models\Sidebar::class) --}}
                {{-- <li class="{{ (request()->is('admin/telescope*')) ? 'sidebar-item active' : 'sidebar-item' }}"> --}}
                <a href="" class='sidebar-link' target="_blank">
                    <i class="bi bi-file-earmark-ruled-fill"></i>
                    <span>Logs</span>
                </a>
                </li>
                {{-- @endcan --}}



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
