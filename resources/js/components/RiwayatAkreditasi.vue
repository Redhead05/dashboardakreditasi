<template>
  <div class="m-4">
    <div class="d-flex justify-content-between">
      <div class="title">Riwayat Akreditasi</div>
      <div class="d-flex flex-row justify-content-                                     end gap-2 w-25">
        <select class="form-select">
          <option selected>Status Akreditasi</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <select class="form-select">
          <option selected>Semua</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="card mt-4">
      <div class="card-body w-100">
        <h5 class="card-title">Semua Asesi</h5>
        <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
  const chartOptions = {
    chart: {
      width: '100%',
    },
    xaxis: {
      categories: [
        '2008',
        '2009',
        '2010',
        '2011',
        '2012',
        '2013',
        '2014',
        '2015',
        '2016',
        '2017',
        '2018',
        '2019',
        '2020',
        '2021',
        '2022',
      ]
    },
    colors: ['var(--color_dikbud_3)'],
  }
  const series = [{
    name: 'series-1',
    data: [
      60000,
      80000,
      60000,
      40000,
      80000,
      60000,
      80000,
      80000,
      60000,
      60000,
      80000,
      100000,
      40000,
      60000,
      80000,
    ]
  }]
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
