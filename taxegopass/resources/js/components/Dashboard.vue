<template>
    <br>
    <br>
    <br>
    <br>
    
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                                            <div class="card-body p-3 d-flex gap-5">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-secondary rounded fs-3xl">
                                                            <i class="bi bi-coin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Paiements<span class="badge bg-success-subtle text-success"><i class="ti ti-arrow-up-right"></i>  {{ this.paiements }}</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="354620"> {{ this.paiements }}</span> <small class="text-muted fw-normal">Paiements</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-secondary rounded fs-3xl">
                                                            <i class=" ri ri-user-2-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Total passagers <span class=" badge bg-success-subtle text-success"><i class=" ti ti-arrow-up-right"></i>{{ this.passagers }}</span></p>
                                                    <h6 class=" fw-semibold mb-0"><span class="counter-value" data-target="245631"></span><small class="text-muted fw-normal">{{ this.passagers }}</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-info rounded fs-3xl">
                                                            <i class="ri ri-team-fill "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Total Agents <span class="badge bg-danger-subtle text-danger"><i class="ti ti-arrow-down-right"></i> {{ this.agents }}</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="154832"></span><small class="text-muted fw-normal">{{ this.agents }}</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-body rounded fs-3xl">
                                                            <i class="ti ti-coin "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Total Frais <span class="badge bg-success-subtle text-success"><i class="ti ti-arrow-up-right"></i>{{ this.typefrais }}</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="489012"></span><small class="text-muted fw-normal">{{ this.typefrais }}</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
            
    <div class="row"> 
        
                <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0 pl-5">Passagers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <canvas id="myChart1" width="600" height="600"></canvas>
                                    <!-- <div id="myChart1" data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger", "--tb-dark", "--tb-info"]' class="apex-charts" dir="ltr"></div> -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
        
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Paiement Par date</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <Doughnut
                             v-if="loaded"
                            :data="chartData"
                            :options="chartOptions"
                            />
                                    <!-- <div id="chartData" data-colors='["--tb-primary"]' class="apex-charts" ></div> -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Vol disponibles</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <Doughnut
                             v-if="loaded"
                            :data="chartData"
                            :options="chartOptions"
                            />
                                    <!-- <div id="chartData" data-colors='["--tb-primary"]' class="apex-charts" ></div> -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Passagr servis</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <Doughnut
                             v-if="loaded"
                            :data="chartData"
                            :options="chartOptions"
                            />
                                    <!-- <div id="chartData" data-colors='["--tb-primary"]' class="apex-charts" ></div> -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                       
</div>
</template>
<script>
import axios from "axios";
import { BarElement, CategoryScale, Chart as ChartJS, Legend, LinearScale, Title, Tooltip } from "chart.js";
import Chart from "chart.js/auto";
import { Doughnut } from "vue-chartjs";
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);

export default {
    props: ["typechart"],
    components: {
        Doughnut,
    },
    data() {
        return {
            titre: "Statistique",
            team: [],
            paiements:"",
            passagers:"",
            agents:"",
            typefrais:"",
            // chart
            loaded: false,
           chartData: [],
            etiquete: [],
            valories: [],
            valeur: [],
            etiquet: [],

            chartOptions: {
                responsive: true,
            },
            // end chart

        }

    },

    created() {
        this.initialize()
    },
    async mounted() {
        if (localStorage.getItem("auth") == 'true') {
            localStorage.setItem("auth", 'ok')
            location.reload();
        }

        this.loaded = false;

        try {
            const totales = await axios.get(`http://127.0.0.1:8000/api/v1/paiement/getChart`);
            totales.data.map(
                
                (row) => (
                    this.etiquete.push(row.datepaiement), this.valories.push(row.nombre)
                    
                )
                
            );

            this.chartData = {
                labels: this.etiquete,
                datasets: [
                    {
                        label: "Paiements",
                        data: this.valories,
                        backgroundColor: ["#f87979", "blue"],
                    },
                ],
            };
            this.loaded = true;

            console.log(this.loaded);
        } catch (e) {
            console.error(e);
        }

        try {

            const totales_mvt = await axios.get(`http://127.0.0.1:8000/api/v1/paiement/getChart_mvt`);

            totales_mvt.data.map(
                (rows) => (
                    this.etiquet.push(rows.datepaiement), this.valeur.push(rows.nombrepaiement),
                    console.log(this.etiquet + ' et ' + this.valeur)
                )
            );
            const ctx1 = document.getElementById("myChart1");
            const data1 = {
                labels: this.etiquet,
                datasets: [
                    {
                        label: "Paiement par date",
                        // data: [65, 59, 80, 81, 56, 55, 40],
                        data: this.valeur,
                        fill: false,
                        borderColor: "rgb(75, 192, 192)",
                        tension: 0.1,
                    },
                ],
            };
            const myChart1 = new Chart(ctx1, {
                type: 'bar',
                // type: "line",
                data: data1,
            });
            myChart1;
            // end chart js
            console.log("Donnees charger");
        } catch (e) {
            console.error(e);
        }
        // end chart mouvement
    },
    methods: {
      
        async getpaiement() {
      await axios.get(`http://127.0.0.1:8000/api/v1/paiement/paiementcount`).then((res) =>
       {
          this.paiements = res.data;
          //console.log(this.paiements);
       }
      );
    },
    
    getpassager() {
        axios.get("http://127.0.0.1:8000/api/v1/paiement/passagercount")
          .then((res) => {
            this.passagers = res.data;
             console.log(this.agents);
          });
        },
        
        getagent() {
        axios.get("http://127.0.0.1:8000/api/v1/paiement/agentcount")
          .then((res) => {
            this.agents = res.data;
             console.log(this.agents);
          });
        },
        
        gettypefrais() {
        axios.get("http://127.0.0.1:8000/api/v1/paiement/typefraiscount")
          .then((res) => {
            this.typefrais = res.data;
            // console.log(this.agents);
          });
        },
    
    FormatDate(date){
      return new Date(date).toLocaleDateString()  
    },
    FormatHeure(date){
        return new Date(date).toLocaleTimeString()
    },
    initialize() {
            this.getpaiement();
            this. getpassager();
             this. getagent();
             this.gettypefrais();
        },

    },
}
</script>
<style scoped>
#views {
    max-height: 470px;
    overflow: scroll;
}

#views2 {
    max-height: 250px;
    overflow: scroll;
}
</style>
