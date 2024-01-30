<template>
    <!-- <div class="d-flex flex-row justify-content-between"> -->
        <div class="d-flex flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ statusa }}</h5>
                    <p class="card-text">Status Akreditasi A</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ statusb }}</h5>
                    <p class="card-text">Status Akreditasi B</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ statusc }}</h5>
                    <p class="card-text">Status Akreditasi C</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ statustt }}</h5>
                    <p class="card-text">Status Akreditasi TT</p>
                </div>
            </div>
        </div>
    <!-- </div> -->
</template>
<script lang="ts" setup>
    const props = defineProps({
        statusa: Number,
        statusb: Number,
        statusc: Number,
        statustt: Number,
    })
</script>

<style>
    .card {
        border: none;
        border-radius: 20px;
        padding-left: 60px;
        padding-right: 60px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .card-title {
        color: var(--Dikbud-3, #297BBF);
        text-align: center;
        font-family: Inter;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .card-text {
        color: var(--Dikbud-4, #213240);
        text-align: center;
        font-family: Inter;
        font-size: 12px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }
</style>
