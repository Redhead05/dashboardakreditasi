import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { Icon } from '@iconify/vue';

import VueApexCharts from 'vue3-apexcharts'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./pages/**/*.vue', { eager: true })
    return pages[`./pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
    app.use(VueApexCharts)
    app.component('apexchart', VueApexCharts)

    app.use(plugin)
      .mount(el)
  },
})
