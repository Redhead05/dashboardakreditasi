<template>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav d-flex flex-row justify-content-end gap-4 w-100" id="navbarNav">
          <li class="nav-item d-flex flex-row align-items-center">
            <Icon icon="bxs:dashboard" />
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item d-flex flex-row align-items-center">
            <Icon icon="bxs:data" />
            <a class="nav-link">
                <Link href="/dataProvinsi">Data</Link>
            </a>
          </li>
          <li class="nav-item d-flex flex-row align-items-center">
            <Icon icon="bxs:report" />
            <a class="nav-link" href="#">Laporan</a>
          </li>
          <li class="nav-item d-flex flex-row align-items-center">
            <Icon icon="bxs:map-alt" />
            <a class="nav-link" href="#">Peta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script lang="ts" setup>
    import { Link } from '@inertiajs/vue3';
</script>
<style scoped>
  nav {
    background-color: var(--color_banpem_white);
    box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.10);
  }
</style>
