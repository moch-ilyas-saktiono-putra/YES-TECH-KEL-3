@extends('layout.template')

@section('title', 'Tourism - Admin')

@section('navbar')
<div class="sidebar-menu">
            <ul class="menu">

              <li class="sidebar-item active">
                <a href="index.html" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="index.html" class="sidebar-link">
                  <i class="bi bi-map-fill"></i>
                  <span>Kelola Wilayah</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span>Kelola Destinasi</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="component-alert.html">Kategori</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-alert.html">Destinasi</a>
                  </li>

                </ul>
              </li>

              <li class="sidebar-item">
                <a href="index.html" class="sidebar-link">
                  <i class="bi bi-building-fill"></i>
                  <span>Kelola Hotel</span>
                </a>
              </li>

            </ul>
          </div>
@endsection
