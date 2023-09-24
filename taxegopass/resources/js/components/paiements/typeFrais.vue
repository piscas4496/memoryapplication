<template>
    <div class="all-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
              <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="product-status mg-b-50">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="product-status-wrap">
              <h4>Frais List</h4>
              <div class="add-product">
                <div class="shadow-inner mg-tb-30">
                  <td class="breadcomb-report  ">
                          
                      <button data-toggle="tooltip" data-placement="left" title="Download Report"
                        @click="printallpaiement()" class="btn "><i class="icon nalika-download"></i></button>
                    </td>
                  <a class="Information Information-color mg-b-30" href="#" data-toggle="modal" data-target="#Addagent">Add
                    Paiement</a>
                </div>
              </div>
              <div id="Addagent"
                class=" modal modal-edu-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade"
                role="dialog">
                <div class="modal-dialog">
                  <!-- <div class="modal-content"> -->
                  <div class="modal-close-area modal-close-df"></div>
                  <div class="modal-body">
                    <form>
                      <br><br>
  
                      <div id="text-form" class="col-md-12 2">
                        <h3>Add Paiement</h3>
                        <div class="form-group">
                          <label class="control-label">Motif paiement</label>
                          <input type="text" v-model="model.modelPaiement.designation" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="control-label">Date Paiement</label>
                          <input type="date" v-model="model.modelPaiement.validite" class="form-control" />
                        </div>
                        <div class="modal-footer footer-modal-admin info-md">
                          <a data-dismiss="modal" class="col-xs-3 info info-danger" href="#">Cancel</a>
                          <a class="col-xs-0 btn btn-Secondary" @click="savepaiement">Process</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <table>
                <thead>
                  <th>Numero</th>
                  <th>Nomps passager</th>
                  <th>Motif</th>
                  <th>Date Paiement</th>  
                  <th>Type Paiement</th>
                  <th>Agent</th>
                  <th> Date</th>
  
                  <th>Actions</th>
                </thead>
                <tbody v-if="this.typefrais.length > 0">
                  <tr v-for="(frais, index) in this.typefrais" :key="index">
                    <td>{{frais.id }}</td>
                    <td>{{ frais.designation }}</td>
                    <td>{{ frais.validite }}</td>
                    <td>{{ frais.create_at }}</td>
                    <td>
                      <button data-toggle="modal" data-target="#EditAgent" title="Edit" @click="editagent(frais)"
                        class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
  
                      <div id="EditAgent"
                        class="modal modal-edu-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade"
                        role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-close-area modal-close-df"></div>
                            <div class="modal-body">
                              <form>
                                <div class="col-md-12">
  
                                  <div class="form-group">
                                    <label class="control-label" for="id">ID</label>
                                    <input type="text" v-model="model.modelPaiement.id" class="form-control" />
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label" for="noms">MOTIF PAIEMENT</label>
                                    <input type="text" v-model="model.modelPaiement.designation" class="form-control" />
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label" for="genre">Date Paiement</label>
                                    <input type="date" v-model="model.modelPaiement.validite" class="form-control" />
                                  </div>
                                </div>
                                <div class="modal-footer footer-modal-admin info-md">
                                  <a data-dismiss="modal" class="col-xs-3 info info-danger" href="#">Cancel</a>
                                  <a class="col-xs-0 btn btn-success" @click="updateagent">Update</a>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button data-toggle="tooltip" data-target="#Deleteagent" title="Trash"
                        @click="deleteagents(frais.id)" class="pd-setting-ed alert alrt-danger">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                    <td class="breadcomb-report  ">
                      <button data-toggle="tooltip" data-placement="left" title="Download Report"
                        @click="printBill(frais.id)" class="btn "><i class="icon nalika-download"></i></button>
                    </td>
                  </tr>
                </tbody>
                <tbody v-else>
                  <tr>
                    <td colspan="6">Loading...</td>
                  </tr>
                </tbody>
              </table>
              <div class="custom-pagination">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
    
  <script lang="ts">
  import axios from "axios";
  export default {
    name: "paiements",
    setup(){},
    data() {
      return {
         passagers:[],
         agents:[],
         typefrais:[],
         paiements: [],
        model: 
        {
          modelPaiement: {
             id: '',
            designation: '',
             prix: '',
             validite: '',
             created_at: '',
          },
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
      //this.agentId(this.$route.params.id);
  
    }, 
    methods: {
  /*
  *SHOWING ALL PAYEMENT
  */ 
    //   getpaiement() {
    //     axios.get("http://127.0.0.1:8000/api/v1/paiement/paiement").then((res) =>
    //      {
    //         this.paiements = res.data.data;
    //         console.log(this.paiements);
    //      }
    //     );
    //   },
  /*
  *SHOWING ALL PASSAGERS
  */     
    //   getpassager() {
    //     axios.get("http://127.0.0.1:8000/api/v1/passager/passager").then((res) => 
    //       {
    //         this.passagers = res.data.data;
    //         console.log(this.agents);
    //       }
    //     );
    //   },
  /*
  *SHOWING ALL AGENTS
  */     
    //   getAgents() {
    //     axios.get("http://127.0.0.1:8000/api/v1/agent/agent").then((res) => 
    //       {
    //         this.agents = res.data.data;
    //         console.log(this.agents);
    //       }
    //     );
    //   },
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
      savepaiement() {
        axios.post("http://127.0.0.1:8000/api/v1/paiement/paiement", this.model.modelPaiement).then(res => 
          {
            console.log(res.data)
            alert(res.data.message)
            this.model.modelPaiement = 
            {
              motif: '',
              datepaiement: '',
              ref_passager: '',
              ref_agent: '',
              ref_typefrais: '',
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
  *DELETEING AGENT FROM ID
  *
  */
      deleteagents(id) {
        if (confirm("Do you want to delete this paiement database")) {
          console.log(id)
          axios.delete(`http://127.0.0.1:8000/api/v1/paiement/paiement?id=`+ id).then(res => {
            alert(res.data.data.message),
              this.getAgents();
          });
        }
      },
  /*
  *
  *CREATING REPPORT ON CONTROLLER WITH DOM PDF
  *
  */
      editagent(paiement) {
        console.log(paiement);
        this.model.modelPaiement.id = paiement.id
        this.model.modelPaiement.nomsag = paiement.nomsag;
        this.model.modelPaiement.genreag = paiement.genreag;
        this.model.modelPaiement.datenaissag = paiement.datenaissag;
        this.model.modelPaiement.mobile = paiement.mobile;
        this.model.modelPaiement.emailag = paiement.emailag;
        this.model.modelPaiemen.passwordag = paiement.passwordag;
      },
    /*
    *
    *CREATING REPPORT ON CONTROLLER WITH DOM PDF
    *
    */
      printBill(id) 
      {
        window.open(`http://127.0.0.1:8000/api/v1/paiement/pdf_paiement?id=` + id);
      },
  
      printallpaiement() 
      {
        window.open(`http://127.0.0.1:8000/api/v1/paiement/pdf_allpaiement`);
      },  
  /*
  *
  * /EDITING PAYEMENT
  *  
  */
      // editagent(id){
      //         axios.get("http://127.0.0.1:8000/api/v1/agent/agent/${id}").then(res=>{
      //             console.log(res.data.modelAgent)
      //            this.model.modelAgent = res.data.modelAgent;
      //         });
      //       }
  /*
  /UPDATING PAYMENT  
  */
      updateagent() 
      {
        axios.post("http://127.0.0.1:8000/api/v1/agent/agent/${this.agent}", this.model.modelAgent).then(res =>
          {
            console.log(res.data)
            alert(res.data.message)
            this.model.modelAgent = {}
          }
        )
      },
    }
  };
  </script>
    