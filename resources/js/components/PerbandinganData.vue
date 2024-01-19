<template>
  <div class="m-4">
    <div class="d-flex flex-row title">Perbandingan Data</div>
    <div class="row mt-4">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-1">Tahun 2018</h5>
            <h5 class="card3_desc mb-4">Data Jumlah Asesi</h5>
            <div class="d-flex flex-column h-90 card3_content">
              <div class="d-flex flex-row align-items-center my-4">
                <Icon class="card1_circle_icon" icon="bxs:school" color="#FFFFFF" width="90" height="90"/>
                <div class="mx-4 d-flex flex-column">
                  <div class="card3_num">54.028</div>
                  <div class="card3_desc">Total Populasi</div>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center my-4">
                <apexchart width="210" type="radialBar" :options="chartOptionsRadialBar1" :series="seriesRadialBar1"></apexchart>
                <div class="mx-4 d-flex flex-column">
                  <div class="card3_num">44.094</div>
                  <div class="card3_desc">Di Akreditasi</div>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center my-4">
                <apexchart width="210" type="radialBar" :options="chartOptionsRadialBar2" :series="seriesRadialBar2"></apexchart>
                <div class="mx-4 d-flex flex-column">
                  <div class="card3_num">10.283</div>
                  <div class="card3_desc">Belum di Akreditasi</div>
                </div>
              </div>
            </div>
<!--            <div class="d-flex flex-row align-items-center justify-content-center">-->
<!--              <button type="button" class="btn btn-light mt-4">Ganti Data</button>-->
<!--            </div>-->
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body h-100 d-flex flex-column justify-content-center align-items-center">
            <button type="button" class="btn btn-light mb-4">Pilih Data</button>
            <div class="card2_desc">Data Pembanding Kedua</div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-5">Hasil Perbandingan</h5>
            <div class="d-flex flex-column h-100 card3_content">
              <div class="d-flex flex-row align-items-center my-4">
                <Icon icon="bxs:up-arrow" color="#297BBF" width="24" height="24"/>
                <div class="card3_percent">0%</div>
                <div class="mx-2 d-flex flex-column">
                  <div class="card3_num">54.028</div>
                  <div class="card3_desc">Total Populasi</div>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center my-4">
                <Icon icon="bxs:up-arrow" color="#297BBF" width="24" height="24"/>
                <div class="card3_percent">0%</div>
                <div class="mx-2 d-flex flex-column">
                  <div class="card3_num">44.094</div>
                  <div class="card3_desc">Di Akreditasi</div>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center my-4">
                <Icon icon="bxs:up-arrow" color="#297BBF" width="24" height="24"/>
                <div class="card3_percent">0%</div>
                <div class="mx-2 d-flex flex-column">
                  <div class="card3_num">10.283</div>
                  <div class="card3_desc">Belum di Akreditasi</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
  const chartOptionsRadialBar1 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '30%',
        },
        // offsetX: -70,
        // offsetY: -40,
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: true,
          },
        },
      },
    },
  }
  const seriesRadialBar1 = [80.2]
  const chartOptionsRadialBar2 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '30%',
        },
        // offsetX: -70,
        // offsetY: -40,
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: true,
          },
        },
      },
    },
  }
  const seriesRadialBar2 = [20.8]
</script>

<style scoped>
  .title{
    color: var(--color_dikbud_4);
    font-size: 18px !important;
  }
  .card {
    height: 80vh;
  }
  .card2_desc{
    color: var(--color_dikbud_4);
  }
  .btn-light {
    border-radius: 100px;
    border: 2px solid var(--color_dikbud_3);
  }
  .card3_percent{
    color: var(--color_dikbud_3);
    font-size: 18px;
  }
  .card3_num{
    color: var(--color_dikbud_4);
    font-size: 24px !important;
  }
  .card3_desc{
    color: var(--color_dikbud_4);
    font-size: 12px !important;
    font-weight: 300 !important;
  }
  .card3_content{
    margin-left:30%;
  }
  .card1_circle_icon{
    padding: 1.2em;
    background-color: var(--color_dikbud_3);
    border-radius: 50%;
  }
</style>
