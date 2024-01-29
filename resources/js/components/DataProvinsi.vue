<script lang="ts">
</script>

<template>
    <div class="m-4">
        <div class="">
            <div class="d-flex justify-content-between mb-5 ">
                <div><Icon icon="bx:arrow-back" style="margin-right: 6px; font-size: 24px;"/>Database Akreditasi Prov. Jawa Barat</div>
                <div class="d-flex flex-row justify-content-end gap-2 w-25" style="margin-right: 52px;">
                    <select class="form-select">
                        <option selected>Semua</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select">
                        <option selected>2022</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around gap-2">
                <CardTotalData />
            </div>
            <div class="mt-5">
                <TabelDatabaseAkreditasi />
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
    import CardTotalData from "@/components/CardTotalData.vue";
    import TabelDatabaseAkreditasi from "@/components/TabelDatabaseAkreditasi.vue";

const widthChart = '100%';
const chartOptions = {
    xaxis: {
        categories: ['PAUD', 'PKDM', 'SD', 'SMP', 'SMA', ]
    },
    // colors: ['var(--color_dikbud_3)'],
}
const series = [{
    name: 'A',
    data: [44, 55, 57, 56, 61]
}, {
    name: 'B',
    data: [76, 85, 101, 98, 87]
}, {
    name: 'C',
    data: [35, 41, 36, 26, 45]
}, {
    name: 'TT',
    data: [35, 41, 36, 26, 45]
}];
const widthRadialBar = '75%';
const chartOptionsRadialBar1 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
        radialBar: {
            hollow: {
                size: '30%',
            },
            offsetX: -55,
            offsetY: -20,
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
            offsetX: -55,
            offsetY: -20,
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
const capaianSasaran = [
    {
        Color: 'var(--color_primary_normal)',
        Total: '14.876',
        Desc: 'Total Sasaran',
    },
    {
        Color: 'var(--color_dikbud_2)',
        Total: '10.837',
        Desc: 'Akreditasi Baru',
    },
    {
        Color: 'var(--color_neutral_90)',
        Total: '4.983',
        Desc: 'Reakreditasi',
    },
]
const colorsDonut = capaianSasaran.map(a => a.Color)
const chartOptionsDonut = {
    dataLabels: {
        enabled: false
    },
    legend: {
        show:false,
    },
    colors: colorsDonut
}
const seriesDonut = [
    80,15,5
];
</script>

<style scoped>
.title{
    color: var(--color_dikbud_4);
    font-size: 18px !important;
}
.form-select {
    color: var(--color_dikbud_4);
}
.card1_circle_icon{
    padding: 1.2em;
    background-color: var(--color_dikbud_3);
    border-radius: 50%;
}
.card_height {
    height: 100% !important;
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
.separator_col{
    border-right: 1px solid var(--color_neutral_90);
}
.circle_icon {
    width: 16px;
    height: 16px;
    border-radius: 100%;
}
.margin_data_jumlah_asesi {
    margin: 3% 0;
    position: relative;
}
.desc_data_jumlah_asesi {
    position:absolute;
    z-index: 10;
    top: 3vh;
    left: 8.5vw;
}

.selection {
    border: none;
    background-color: aliceblue;
}

@media (min-width: 1400px) {
    .desc_data_jumlah_asesi{
        top: 2.5vh;
        left: 7vw;
    }
}
</style>
