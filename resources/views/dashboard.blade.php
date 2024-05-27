{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div>
</x-app-layout> --}}

@extends('mazer_template.layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="page-heading">
    <h3>Dashboard Laboratorium Veteriner</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="row">

            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="/assets/images/logo/kementan.png" onerror="this.src='/assets/images/samples/default.png'" alt="avatar-icon" />
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Selamat Datang</h5>
                                <h5 class="font-bold">Ichsan</h5>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-4">
                            <div class="name ms-4">
                                <h6 class="mb-1">
                                    <p id="current-time"></p>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h4>Profile Visit</h4> --}}
                    </div>
                    {{-- lol --}}
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href=""><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Data Pengusulan Alat Lab</h6>
                                            <h6 class="font-extrabold mb-0">100</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href=""><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Data Pengajuan Alat Lab</h6>
                                            <h6 class="font-extrabold mb-0">100</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href=""><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Data Gudang Alat Lab</h6>
                                            <h6 class="font-extrabold mb-0">100</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href=""><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Data Lab Virologi</h6>
                                            <h6 class="font-extrabold mb-0">100</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href=""><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Data Lab Bakterologi</h6>
                                            <h6 class="font-extrabold mb-0">100</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
