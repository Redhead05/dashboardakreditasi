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
                <div class="card position-relative">
                    <div class="dataLabels_chart d-flex flex-column align-items-center justify-content-center">
                        <div class="dataLabels_Total">123</div>
                        <div class="dataLabels_Lembaga">Lembaga</div>
                    </div>
                    <apexchart :width="width" type="radialBar" :options="chartOptionsRadialBar1" :series="seriesRadialBar1"></apexchart>
                    <div class="chart_title">Sasaran Akreditasi</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card position-relative">
                    <div class="dataLabels_chart d-flex flex-column align-items-center justify-content-center">
                        <div class="dataLabels_Total">{{total[1]}}</div>
                        <div class="dataLabels_Lembaga">Lembaga</div>
                    </div>
                    <apexchart :width="width" type="radialBar" :options="chartOptionsRadialBar2" :series="seriesRadialBar2"></apexchart>
                    <div class="chart_title">Kadaluarsa</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card position-relative">
                    <div class="dataLabels_chart d-flex flex-column align-items-center justify-content-center">
                        <div class="dataLabels_Total">{{total[2]}}</div>
                        <div class="dataLabels_Lembaga">Lembaga</div>
                    </div>
                    <apexchart :width="width" type="radialBar" :options="chartOptionsRadialBar3" :series="seriesRadialBar3"></apexchart>
                    <div class="chart_title">Potensi Reakreditasi</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
const width = 420;
const hollowSize = '50%';
const total = ['40.094','12.094','10.091'];
const chartOptionsRadialBar1 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
        radialBar: {
            hollow: {
                size: hollowSize,
            },
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    show: false,
                },
            },
        },
    },
}
const seriesRadialBar1 = [100]
const chartOptionsRadialBar2 = {
    colors: ['var(--color_dikbud_5)'],
    plotOptions: {
        radialBar: {
            hollow: {
                size: hollowSize,
            },
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    show: false,
                },
            },
        },
    },
}
const seriesRadialBar2 = [100]
const chartOptionsRadialBar3 = {
    colors: ['var(--color_dikbud_2)'],
    plotOptions: {
        radialBar: {
            hollow: {
                size: hollowSize,
            },
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    show: false,
                },
            },
        },
    },
}
const seriesRadialBar3 = [100]
</script>

<style scoped>
.card{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.title{
    color: var(--color_dikbud_4);
    font-size: 18px !important;
}
.form-select {
    color: var(--color_dikbud_4);
    width: 50%;
}
.dataLabels_Total{
    color: var(--color_dikbud_4);
    font-size: 24px !important;
}
.dataLabels_Lembaga{
    color: var(--color_dikbud_4);
    font-size: 12px !important;
}
.chart_title {
    color: var(--color_dikbud_4);
    text-align: center;
    margin-bottom: 5%;
}
.dataLabels_chart{
    position:absolute;
    z-index: 10;
    top: calc(23% + 50px);
    left: calc(7% + 150px);
}

@media (min-width: 1400px) {
    .dataLabels_chart{
        left: calc(19% + 150px) !important;
    }
}
</style>
