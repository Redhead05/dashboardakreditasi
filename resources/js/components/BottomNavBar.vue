<template>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="BottomNav">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text_left">
          <span>Copy Right © BAN PAUD & PNF 2023</span>
        </li>
      </ul>
      <span class="navbar-text text_right d-flex flex-row justify-content-center align-items-center gap-2">
        <Icon icon="octicon:globe-16"/>
        <div>www.banpaudpnf.kemdikbud.go.id</div>
        <Icon icon="mdi:instagram"/>
        <div>@banpauddanpnf</div>
        <Icon icon="uil:youtube"/>
        <div>BAN PAUD dan PNF</div>
        <Icon icon="ic:baseline-whatsapp"/>
        <div>081212301646</div>
      </span>
    </div>
  </div>
</nav>
</template>

<script lang="ts" setup>

</script>
<style scoped>
  #BottomNav {
    background-color: var(--color_banpem_white);
    box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.10);
  }
  .text_left {
    color: var(--color_dikbud_4);
    text-align: center;
    font-size: 12px;
  }
  .text_right {
    color: var(--color_dikbud_4);
    font-family: Helvetica Neue !important; 
    font-size: 10.558px !important;
    font-weight: 700 !important;
  }
</style>