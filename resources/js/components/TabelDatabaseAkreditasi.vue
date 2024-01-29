<script lang="ts">
import type { Icon } from '@iconify/vue';
</script>


<template>
    <div>
        <div class="card">
            <div class="d-flex flex-row justify-content-between mb-5">
                <div class="d-flex flex-row gap-2">
                    <button class="button" style="font-size: 14px;">Copy</button>
                    <button class="button" style="font-size: 14px;">Excel</button>
                </div>
                <div>
                    <input class="search-input" placeholder="Search table"/>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <table class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        No
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        NPSN 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Nama 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Satuan 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Provinsi 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Tahun 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Nomor SK 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Status 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <div>
                                        Kadaluarsa 
                                    </div>
                                    <div class="d-flex flex-col align-items-center">
                                        <Icon icon="bx:sort" />
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td class="table-data">1.</td>
                            <td class="npsn">P9972821</td>
                            <td class="table-data">TKS Khairani</td>
                            <td class="table-data">PAUD</td>
                            <td class="table-data">Jawa Barat</td>
                            <td class="table-data">2019</td>
                            <td class="table-data">163/BAN PAUD DAN PNF/AKR/2019</td>
                            <td class="table-data">B</td>
                            <td class="table-data">2024</td>
                        </tr>
                        <tr>
                            <td class="table-data">2.</td>
                            <td class="npsn">P9972821</td>
                            <td class="table-data">Satu Dua Tiga</td>
                            <td class="table-data">PKBM</td>
                            <td class="table-data">Jawa Barat</td>
                            <td class="table-data">2019</td>
                            <td class="table-data">163/BAN PAUD DAN PNF/AKR/2019</td>
                            <td class="table-data">B</td>
                            <td class="table-data">2024</td>
                        </tr>
                        <tr>
                            <td class="table-data">3.</td>
                            <td class="npsn">P9972121</td>
                            <td class="table-data">PAUD Cinta Bunda</td>
                            <td class="table-data">PKBM</td>
                            <td class="table-data">Jawa Barat</td>
                            <td class="table-data">2019</td>
                            <td class="table-data">163/BAN PAUD DAN PNF/AKR/2019</td>
                            <td class="table-data">B</td>
                            <td class="table-data">2024</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="card mt-4 d-flex flex-row justify-content-center gap-2">
            <button class="button-pagination-arrow"><Icon icon="bx:chevrons-left" /></button>
            <button class="button-pagination-arrow"><Icon icon="bx:chevron-left" /></button>
            <button class="button-pagination">1</button>
            <button class="button-pagination-not-selected">2</button>
            <button class="button-pagination-not-selected">3</button>
            <button class="button-pagination-arrow"><Icon icon="bx:chevrons-right" /></button>
            <button class="button-pagination-arrow"><Icon icon="bx:chevron-right" /></button>
        </div>
    </div>
</template>

<script lang="ts" setup>
    const dataTableAkreditasi = [
            {
                "No": 1,
                "NPSN": "P9972821",
                "Nama": "TKS Khairani",
                "Satuan": "PAUD",
                "Provinsi t": "Jawa Barat",
                "Tahun": "2019",
                "Nomor SK": "163/BAN PAUD DAN PNF/AKR/2019",
                "Status": "B",
                "Kadaluarsa": "2024"
            },
            {
                "No": 1,
                "NPSN": "P9972322",
                "Nama": "Satu Dua Tiga",
                "Satuan": "PKBM",
                "Provinsi t": "Jawa Barat",
                "Tahun": "2019",
                "Nomor SK": "163/BAN PAUD DAN PNF/AKR/2019",
                "Status": "B",
                "Kadaluarsa": "2024"
            },
            {
                "No": 1,
                "NPSN": "P9972121",
                "Nama": "PAUD Cinta Bunda",
                "Satuan": "PAUD",
                "Provinsi t": "Jawa Barat",
                "Tahun": "2019",
                "Nomor SK": "163/BAN PAUD DAN PNF/AKR/2019",
                "Status": "B",
                "Kadaluarsa": "2024"
            },
        ]
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
    .button {
        display: inline-flex;
        padding: 10px 15px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
        background: var(--Dikbud-3, #297BBF);
        color: white;
        border: none;
        font-size: 14px;
    }
    .button-pagination {
        display: inline-flex;
        padding: 8px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 10px;
        background: var(--Dikbud-3, #297BBF);
        border: none;
        font-size: 16px;
        color: white;
        padding-left: 16px;
        padding-right: 16px;
    }
    .button-pagination-not-selected {
        display: inline-flex;
        padding: 8px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 10px;
        background: var(--Neutral-95, #F4EFF4);
        border: none;
        font-size: 16px;
        color: #AEAAAE;
        padding-left: 16px;
        padding-right: 16px;
    }
    .button-pagination-arrow {
        display: inline-flex;
        padding: 8px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 10px;
        background: var(--Neutral-95, #F4EFF4);
        border: none;
        font-size: 24px;
        color: #AEAAAE;
    }
    .search-input {
        display: flex;
        width: 206px;
        padding: 10px 15px;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
        border: 1px solid var(--Neutral-Variant-80, #CAC4D0);
    }
    .table {
        width: 100%;
    }
    .table th {
        font-size: 16px;
    }
    .table td {
        margin: 20px;
        border: none; 
    }
    .table tr {
        margin: 10px;
    }
    .table-data {
        font-weight: 100;
    }
    .npsn {
        color: var(--Dikbud-3, #297BBF);
        font-weight: 100;
    }
    .tr-no-border {
        border: none;
    }
</style>