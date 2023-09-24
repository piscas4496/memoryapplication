<template>
  <div class="wrapper"></div>
       <!-- /Vertical Overlay-->
        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-4"></i>
                            </div>
                            <div class="mt-4 fs-base">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- removeCartModal -->
        <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-cartmodal"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-5"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Paiement List</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paiement</a></li>
                                        <li class="breadcrumb-item active">Paiement List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    
                    <div class="row" id="">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center g-2">
                                        <div class="col-xl-2 col-md-3">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" v-model="q" placeholder="Search for invoice, date, client or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xl-2 col-md-3">
                                            <div>
                                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Select date range" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true">
                                            </div>
                                     </div>
                                    <div class="col-md-auto ms-auto">
                                        <div class="hstack gap-2 mt-2 mt-md-0">
                  <button class="btn btn-subtle-info"  @click="printallpaiement()"><i class="bi bi-printer"></i></button>
                 <button class="btn btn-subtle-danger d-none" id="remove-actions"><i class="ri-delete-bin-2-line"></i></button>                                              
                <button class="btn btn-info"  data-bs-target="#addpaiement" data-bs-toggle="modal"> Add Paiement</button>
                                 <!-- removeFileItemModal -->
                <div id="addpaiement" class="modal zoomIn" tabindex="-1" >
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
                  </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                 <form >
                    <div id="text-form" class="col-md-12 2">
                      <h3>Add Paiement</h3>
                      <div class="form-group">
                        <label class="control-label">Motif paiement</label>
                        <input type="text" v-model="model.modeldoPaiement.motif" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Date Paiement</label>
                        <input type="date" v-model="model.modeldoPaiement.datepaiement" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label for="cpn_id" class="control-label">Passager</label>
                        <select id="cpn_id" name="passagers" v-model="model.modeldoPaiement.ref_passager"
                          class="form-control">
                          <option v-for="(item, index) in this.passagers" :key="index" :value="item.id">
                            {{ item.nomspass }}</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="cpn_id" class="control-label">Agent</label>
                        <select id="cpn_id" name="passagers" v-model="model.modeldoPaiement.ref_agent" class="form-control">
                          <option v-for="(itemfagent, index) in this.agents" :key="index" :value="itemfagent.id"> {{ itemfagent.nomsag }}</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="cpn_id" class="control-label">Type Paiement</label>
                        <select id="cpn_id" name="passagers" v-model="model.modeldoPaiement.ref_typefrais"
                          class="form-control">
                          <option v-for="(itemfrais, index) in this.typefrais" :key="index" :value="itemfrais.id">{{itemfrais.designation }}</option>
                        </select>
                      </div>
                      <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light"  data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" data-bs-dismiss="modal" aria-hidden="true"  @click="savepaiement" id="remove-todoitem">Save</button>                   
                     </div>
                    </div>
                  </form>
                        
                    </div>
                    
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->
    </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                                <div class="card-body mt-3">
                                    <div class="table-responsive table-card">
                                        <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                   
                                                    <th scope="col" class="sort cursor-pointer" data-sort="invoice_id">ID</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="customer_name">Customer Name</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="email">Email</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="create_date">Create Date</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="due_date">Due Date</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                           
                                              
                                            <tbody v-if="this.getfilters.length > 0">
                                            <tr v-for="(paiement, index) in this.getfilters" :key="index">
                                            <td>{{ '00000'+paiement.id }}</td>
                                            <td>{{ paiement.passager.nomspass }}</td>
                                            <td>{{ paiement.motif }}</td>
                                            <td>{{ paiement.datepaiement}}</td>
                                            <td>{{ paiement.typefrais.designation }}</td>
                                            <td>{{ paiement.agent.nomsag }}</td>
                                            <td>{{ paiement.typefrais.validite+'mois' }}</td>
                                           
                                            <td> 
    <button class="btn btn-subtle btn-icon btn-sm remove-item-btn" data-bs-target="#editpaiement" @click="getonepaiement(paiement.id)" data-bs-toggle="modal">
    <i class="ph-pencil"></i></button>
    <!-- removeFileItemModal -->
    <div id="editpaiement" class="modal zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                  </div>
                <div class="modal-body">
                  
                  <form>
                   
                    <div id="text-form" class="col-md-12 2">
                      <h3>Add Paiement</h3>
                     <div class="form-group">
                        <label class="control-label" for="">ID</label>
                        <input type="text" v-model="model.modelPaiement.id" class="form-control" />
                     </div>
                      <div class="form-group">
                        <label class="control-label" for="">MOTIF PAIEMENT</label>
                        <input type="text" v-model="model.modelPaiement.motif" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="">Date Paiement</label>
                        <input type="date" v-model="model.modelPaiement.datepaiement" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="">Passager</label>
                        <input type="text" v-model="model.modelPaiement.ref_passager" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="">Agent</label>
                        <input type="text" v-model="model.modelPaiement.ref_agent" class="form-control" />
                      </div>
                       
                      <div class="form-group">
                        <label for="cpn_id" class="control-label">Type Paiement</label>
                        <select id="cpn_id" name="passagers" v-model="model.modeldoPaiement.ref_typefrais"
                          class="form-control">
                          <option v-for="(itemfrais, index) in this.typefrais" :key="index" :value="itemfrais.ref_typefrais">{{itemfrais.designation }}</option>
                        </select>
                        </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label" for="">TYPE FRAIS</label>
                        <input type="text" v-model="model.modelPaiement.ref_typefrais" class="form-control" />
                      </div>
                      <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button"  class="btn w-sm btn-light"   data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" data-bs-dismiss="modal" @click="update"  id="remove-todoitem">Update</button>
                       
                        </div>
                      
                     
                    </div>
                  </form>
                  
             
                    
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->
  </div>
                                                                               
   <a class="btn btn-subtle btn-icon btn-sm remove-item-btn" @click="deletePaiement(paiement.id)" data-bs-target="" data-bs-toggle="">
    <i class="ph-trash"></i></a>
    
    
    <a class="btn btn-subtle btn-icon btn-sm remove-item-btn" @click="printBill(paiement.id)" data-bs-target="" data-bs-toggle="">
    <i class="ph-printer-fill"></i></a>
    </td>
   </tr>                                                                                         
</tbody>
 </table><!-- end table -->
   <div class="noresult" style="display: none">
                                            <div class="text-center py-4">
                                                <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 6+ invoice We did not find any invoice for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <div class="pagination-wrap hstack justify-content-center gap-2">
                                                <a class="page-item pagination-prev disabled"  href="getpaiement">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="getpaiement">
                                                    Next
                                                </a>
                                                <pagination align="center" :data="paiements" @pagination-change-page="getpaiement"></pagination> 
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
   
    <!-- END layout-wrapper --> 

</template> 


  

<script>
import { createToaster } from "@meforma/vue-toaster";
import axios from "axios";

const toaster = createToaster({ /* options */ });
export default {
  name: "paiements",
  setup(){},
  
 
  data() {
    return {
       passagers:[],
       agents:[],
       typefrais:[],
       paiements: [],
       q:'',
       idpaiement:'',
      model: 
      {
        modelPaiement: {
           id: '',
           motif: '',
           datepaiement: '',
           ref_passager: '',
           ref_agent: '',
           ref_typefrais: '',
           created_at: '',
        },
        modeldoPaiement: {
           motif: '',
           datepaiement: '',
           ref_passager: '',
           ref_agent: '',
           ref_typefrais: '',
           
        },
        modelfrais:{
          designation:'',
          prix:'',
          validite:'',
        }
      },
    };
  },
 /**
  * ACTIONS OF SOME FUNCTIONS
  */ 
  mounted()
  {
    //console.log ('helo guys')
    this.getpaiement();
    this.getpassager();
    this.getAgents();
    this.getAllfrais();
    this.idpaiement
    ///this.showpaiement();
    //this.agentId(this.$route.params.id);
   
  }, 
  methods: {
    FormatDate(date){
      return new Date(date).toDateString()  
    },
    FormatHeure(date){
        return new Date(date).toTimeString()
    },   
   
/*
*SHOWING ALL PAYEMENT
*/ 

async getpaiement(page=1) {
      await axios.get(`http://127.0.0.1:8000/api/v1/paiement/paiement?page=`+ page).then((res) =>
       {
          this.paiements = res.data.data;
          console.log(this.paiements);
       }
      );
    },
/*
*SHOWING ALL PASSAGERS
*/     
    getpassager() {
      axios.get("http://127.0.0.1:8000/api/v1/passager/passager").then((res) => 
        {
          this.passagers = res.data.data;
          console.log(this.agents);
        }
      );
    },
   
/*
*SHOWING ALL AGENTS
*/     
    getAgents() {
      axios.get("http://127.0.0.1:8000/api/v1/agent/agent").then((res) => 
        {
          this.agents = res.data.data;
          console.log(this.agents);
        }
      );
    },
/*
*SHOWING ALL TYPE OF PAYEMENTS
*/     
    getAllfrais() {
      axios.get("http://127.0.0.1:8000/api/v1/paiement/typefrais").then((res) =>
        {
          this.typefrais=res.data.data;
          // console.log(this.agents);
        }
      );
    },
/*
*
*ADD PAYEMENT 
*
*/
    savepaiement()
     {
      axios.post("http://127.0.0.1:8000/api/v1/paiement/paiement", this.model.modeldoPaiement)
      .then(res => 
        {
          console.log(res.data)
         // alert(res.data.message)
          this.model.modeldoPaiement = 
          {           
            motif: '',
            datepaiement: '',
            ref_passager: '',
            ref_agent: '',
            ref_typefrais: '',            
           
          },
          this.getpaiement(); 
          toaster.success(`Felicitation Bien Enregistre`);
          $('.modal.in').modal('hide')  
          //$('#addpaiement').modal('hide')
                 
        }
       
      ).catch(function (error)
       {
          if (error.response) 
          {
             if (error.response.status == 422) 
             {
              toaster.error(`!Attention les champs sont vides`);
              // this.errorList=error.response.data.errors;
             }
              // console.log(error.response.data);
              //console.log(error.response.status);
              // console.log(error.response.header);
          } else if (error.response) {
            console.log(error.request);
          } else {
            // console.log('error',error.message);
          }
          
       });
       
       
    },
    
    addtypefrais() {
      axios.post("http://127.0.0.1:8000/api/v1/paiement/typefrais", this.model.modelfrais).then(res => 
        {
          console.log(res.data)
          alert(res.data.message)
          this.model.modelfrais = 
          {
            designation: '',
            prix:'',
            validite: '',
          }
        }
      ).catch(function (error)
       {
          if (error.response) 
          {
             if (error.response.status == 422) 
             {
              // this.errorList=error.response.data.errors;
             }
              // console.log(error.response.data);
              //console.log(error.response.status);
              // console.log(error.response.header);
          } else if (error.response) {
            console.log(error.request);
          } else {
            // console.log('error',error.message);
          }
        });
    },
    
    /*
*
* /EDITING PAYEMENT
*  
*/
    /**
* //@param {any} idpaiement
*/
// editpaiement(idpaiement){
//             axios.get(`http://127.0.0.1:8000/api/v1/paiement/paiement/${idpaiement}/edit`).then(res=>{
//                 console.log(res.data.modelPaiement)
//                this.model.modelPaiement = res.data.modelpaiement.id;
//                this.model.modelPaiement = res.data.modelpaiement.motif;
//                this.model.modelPaiement = res.data.modelpaiement.motif;
//                this.model.modelPaiement = res.data.modelpaiement.motif;
//             });
//           },
// /*
// /UPDATING PAYMENT  
// */
// updatepaiement(id) 
//     {
//       axios.post(`http://127.0.0.1:8000/api/v1/paiement/paiement?id` + id).then(res =>
//         {
//           console.log(res.data)
//           alert(res.data.message)
//           this.model.modeldoPaiement = 
//           {
//             motif: '',
//             datepaiement: '',
//             ref_passager: '',
//             ref_agent: '',
//             ref_typefrais: '',  
//           }
//         }
//       )
//     },        
          
    async getonepaiement(idpaiement){
            await axios.get(`http://127.0.0.1:8000/api/v1/paiement/editbyid/${idpaiement}`).then(response=>{
                const {id, motif, datepaiement, } = response.data
                this.model.modelPaiement.id = id
                this.model.modelPaiement.motif = motif
                this.model.modelPaiement.datepaiement = datepaiement
                this.model.modelPaiement.ref_agent = response.data.agent.nomsag
                this.model.modelPaiement.ref_passager = response.data.passager.nomspass
                this.model.modelPaiement.ref_typefrais = response.data.typefrais.designation
                console.warn(response.data);
                
            }).catch(error=>{
                console.log(error)
            })
        },
        async update(idpaiement){
            await axios.post(`http://127.0.0.1:8000/api/v1/paiement/paiement/${idpaiement}`,this.model.modeldoPaiement).then(response=>{
               
            }).catch(error=>{
                console.log(error)
            })
        },        
                             
/*
*
*DELETEING AGENT FROM ID
*
*/
    /**
     * 
* @param {string} id
*/
    // deleteagents(id) {
    //   if (confirm("Do you want to delete this paiement database")) {
    //     console.log(id)
    //     axios.delete(`http://127.0.0.1:8000/api/v1/paiement/paiement?id=`+ id).then(res => {
    //       alert(res.data.data.message),
    //         this.getAgents();
    //     });
    //   }
    // },
    deletePaiement(id){
            if(confirm("Are you sure to delete this Paiement ?")){
                axios.delete(`http://127.0.0.1:8000/api/v1/paiement/paiement/${id}`).then(response=>{
                    this.getpaiement();
                }).catch(error=>{
                    console.log(error)
                })
            }
        },
/*
*
*CREATING REPPORT ON CONTROLLER WITH DOM PDF
*
*/
/**
* @param {{ id: any; motif: any; datepaiement: any; ref_passager: any; ref_agent: any; ref_typefrais: any; }} paiement
*/
showpaiement(paiement) {
      console.log(paiement);
      this.model.modelPaiement.id = paiement.id
      this.model.modelPaiement.motif = paiement.motif;
      this.model.modelPaiement.datepaiement = paiement.datepaiement;
      this.model.modelPaiement.ref_passager = paiement.ref_passager;
      this.model.modelPaiement.ref_agent = paiement.ref_agent;
      this.model.modelPaiement.ref_typefrais = paiement.ref_typefrais;
    },
  /*
  *
  *CREATING REPPORT ON CONTROLLER WITH DOM PDF
  *
  */
    /**
* @param {string} id
*/
    printBill(id) 
    {
      window.open(`http://127.0.0.1:8000/api/v1/paiement/pdf_paiement?id=` + id);
    },

    printallpaiement() 
    {
      window.open(`http://127.0.0.1:8000/api/v1/paiement/pdf_allpaiement`);
    },  


  },
  computed :{
    //recherche
    getfilters(){
        return this.paiements.filter( (/** @type {{ passager: { nomspass: string; }; }} */ paiement) => {
            return  paiement.passager.nomspass.toLowerCase().includes(this.q.toLowerCase())              
            
        } ) 
    } 
}
};
</script>
