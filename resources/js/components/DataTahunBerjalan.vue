<template>
  <div class="m-4">
    <div class="d-flex justify-content-between">
      <div class="title">Data Tahun Berjalan</div>
      <div class="d-flex flex-row justify-content-end gap-2 w-25">
        <select class="form-select">
          <option selected>Semua</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>

</script>

<style scoped>
  .title{
    color: var(--color_dikbud_4);
    font-size: 18px !important;
  }
  .form-select {
    color: var(--color_dikbud_4);
    width: 50%;
  }
</style>