<template>
    <div class="m-4">
        <div class="">
            <div class="d-flex justify-content-between mb-5 ">
                <div><Icon icon="bx:arrow-back" style="margin-right: 6px; font-size: 24px;"/>Back</div>
                <div class="d-flex flex-row justify-content-end gap-2 w-25" style="margin-right: 52px;">
                    <select class="form-select">
                        <option selected>Semua</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select @change="selectYear" class="form-select">
                        <option>2019</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around gap-2">
                <CardTotalData
                    :statusa="statusa"
                    :statusb="statusb"
                    :statusc="statusc"
                    :statustt="statustt"
                />
            </div>
            <div class="mt-5">
                <TabelDatabaseAkreditasi
                    :provinsiStatusCount="provinsiStatusCount"
                />
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
    import CardTotalData from "@/components/CardTotalData.vue";
    import TabelDatabaseAkreditasi from "@/components/TabelDatabaseAkreditasi.vue";
    import DataProvinsi from "@/pages/dataProvinsi.vue";


    const props = defineProps({
        statusa: Number,
        statusb: Number,
        statusc: Number,
        statustt: Number,
        provinsiStatusCount: Array,
    })

    const selectYear = (event) => {
        const selectedYear = event.target.value;
        const currentUrl = window.location.href;

        const url = new URL(currentUrl);
        url.searchParams.set('year', selectedYear);
        window.location.href =  url.toString();
        window.history.replaceState({}, '', url.toString());
    };

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
