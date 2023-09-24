<template>
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
        <div class="chat-wrapper d-lg-flex gap-3 gap-lg-4  p-xl-1 pt-md-5 p-lg-1">         
            <div class="todo-content w-70 pb-0">
                <div class="row mb-4">
                    <div class="col-auto order-1 d-block d-lg-none">
                        <button type="button" class="btn btn-subtle-success btn-icon file-menu-btn">
                            <i class="ri-menu-2-fill align-bottom"></i>
                        </button>
                    </div> 

                    <div class="col-sm order-3 order-sm-2 mt-3 mt-sm-0">
                        <h5 class="fw-semibold mb-2">Vixon Admin & Dashboard <span class="badge bg-primary align-bottom ms-2">v1.0.0</span></h5>
                        <p class="text-decoration-underline d-inline-block mb-0 text-muted"><a href="#!" class="text-reset">Admin & Dashboard</a></p>
                    </div>
                    <div class="col-auto order-2 order-sm-3 ms-auto">
                        <div class="hstack gap-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-icon fw-semibold btn-secondary"><i class="ti ti-arrow-back-up"></i></button>
                                <button class="btn btn-icon fw-semibold btn-success"><i class="ti ti-arrow-forward-up"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light rounded mb-4">
                    <div class="row g-2">
                     
                        <div class="col-lg-auto  card  " >
                          <a class="form-control" data-choices data-choices-search-false name="choices-select-status" id="choices-select-status">
                            <i class="ph-printer-fill"></i></a>
                        </div>
                        
                        <div class="col-lg-auto">
                            <select class="form-control"  data-choices data-choices-search-false name="choices-select-sortlist" id="choices-select-sortlist">
                                <option value="">Sort</option>
                                <option value="By ID">By ID</option>
                                <option value="By Name">By Name</option>
                            </select>
                        </div>
                        <div class="col-lg">
                            <div class="search-box">
                                <input type="text" id="searchTaskList" class="form-control search" placeholder="Search task name">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <button class="btn btn-primary createTask" type="button" data-bs-toggle="modal" data-bs-target="#AddAvion">
                                <i class="ri-add-fill align-bottom"></i> Add Passager
                            </button>
                          
    <!-- removeFileItemModal -->
    <div id="AddAvion" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                  </div>
                <div class="modal-body">
                  <form>
                      <div id="text-form" class="col-md-12 ">
                        <h3>Add Avion</h3>   
                        <div class="form-group">
                          <label class="control-label">Desigation</label>
                          <input type="text" v-model="model.modelAvion.designation" class="form-control" />
                        </div>
  
                        <div class="form-group">
                          <label class="control-label">Nombre de place</label>
                          <input type="text" v-model="model.modelAvion.nombreplace" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="control-label">Type Avions</label>
                          <input type="text" v-model="model.modelAvion.typeavion" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="control-label">Compagnie</label>
                          <input type="text" v-model="model.modelAvion.ref_compagnie" class="form-control" />
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" @click="saveagent" id="remove-todoitem">Save</button>   
                      </div>
                      </div>
                    </form>
                    <!--  -->
                  
              
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->
  </div>                        
  </div>
  </div>
  </div>
                
        
                <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
                    <div id="elmLoader">
                        <div class=" text-primary avatar-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="todo-task" id="todo-task">
                        <div class="">
                            <table class="table align-middle position-relative table-nowrap">
                                <thead class="table-active">
                                  <tr>                      
                                   <th scope="col" class="sort cursor-pointer" data-sort="invoice_id">Numero</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="customer_name">Nom </th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="email">Genre</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="create_date">Date de naissance</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="due_date">Telephone</th>
                                     <th scope="col" class="sort cursor-pointer" data-sort="amount">Email</th>
                                     <th scope="col" class="sort cursor-pointer" data-sort="status">Vol</th>
                                     <th scope="col" class="sort cursor-pointer" data-sort="status">Adresse</th>
                                     <th scope="col">Action</th>
                                    </tr>
                                    <!-- <tr>
                                        <th scope="col">Numero</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Action</th>
                                    </tr> -->
                                </thead>
        
                  <tbody v-if="this.avions.length > 0">
                  <tr v-for="(avion, index) in this.avions" :key="index">
                    <td>{{ avion.id }}</td>
                    <td>{{ avion.designation }}</td>
                    <td>{{ avion.nombreplace }}</td>
                    <td>{{ avion.typeavion }}</td>
                    <td>{{ avion.compagnie.designation }}</td>
                   
                    <td>           
   <a class="btn btn-subtle btn-icon btn-sm remove-item-btn" data-bs-target="#removeTaskItemModal" data-bs-toggle="modal">
    <i class="ph-trash"></i></a>
    <!-- removeFileItemModal -->
    <div id="removeTaskItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                  </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <i class="ti ti-trash fs-1 text-danger"></i>    
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h5>Are you sure ?</h5>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this task ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-todoitem">Yes, Delete It!</button>                   
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->
    </div>
    
    <a class="btn btn-subtle btn-icon btn-sm remove-item-btn" data-bs-target="#removeTaskItemModal" data-bs-toggle="modal">
    <i class="ph-pencil"></i></a>
    <!-- removeFileItemModal -->
    <div id="removeTaskItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                  </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <i class="ti ti-trash fs-1 text-danger"></i>    
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h5>Are you sure ?</h5>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this task ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-todoitem">Yes, Delete It!</button>
                        
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->
  </div>
    <a class="btn btn-subtle btn-icon btn-sm remove-item-btn"  data-bs-target="" data-bs-toggle="">
    <i class="ph-printer-fill"></i></a>
    </td>
   </tr>                             
                      
                    </tbody>
                  </table> 
                      </div>
                    </div>
                 
                    <div class="" id="" style="display: none;">
                        <i class="ti ti-search fs-2 text-success"></i>
                        <h6 class="mt-3">Sorry! No Result Found</h6>
                    </div>
                </div>
                
        
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
</div>
  </template>
  
  <script lang="ts">
  import axios from "axios";
  
  export default {
    name: "avion",
    names: 'agentcreate',
    setup() {
  
    },
    data() {
      return {
        avions: [],
        model: {
          modelAvion: {
            id:'',
            designation: '',
            nombreplace: '',
            typeavion: '',
            ref_compagnie: '',
          }
        }
  
      };
    },
    mounted() {
      //console.log ('helo guys')
      this.getAvions();
      //this.agentId(this.$route.params.id);
  
    },
    methods: {
      //Shoawing all agent in table
      getAvions() {
        axios.get("http://127.0.0.1:8000/api/v1/vol/avion")
          .then((res) => {
            this.avions = res.data.data;
            // console.log(this.agents);
          });
      },
      //Ading agent in data base
      saveagent() {
        axios.post("http://127.0.0.1:8000/api/v1/vol/avion", this.model.modelAvion)
          .then(res => {
            //console.log(res.data)
            alert(res.data.message)
            this.model.modelAvion = {
              designation: '',
              nombreplace: '',
              typeavion: '',
              ref_compagnie: '',
             
            }
          })
          .catch(function (error) {
            if (error.response) {
              if (error.response.status == 422) {
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
  
      //edit methode
      // editagent($id){
      //   axios.get("http://127.0.0.1:8000/api/v1/agent/agent/${id} ").then(res=>
      //   {
      //     console.log(res.data.data)
      //   }); 
  
  
      // },
  
  
      //DELETEING AGENT FROM ID
      deleteagents(id) {
        if (confirm("Do you want to delete this Agent be cerefful cause he will deespeer inside database")) {
           console.log(id)
          axios.delete("http://127.0.0.1:8000/api/v1/vol/aviont/${id}").then(res => {
            alert(res.data.data.message),
              this.getAgents();
          });
        }
      },
  
      //FUNCTION FOR SHOWING ONE AGENT
      editagent(avion) {
        console.log(avion);
        this.model.modelAvion.id = avion.id
        this.model.modelAvion.designation = avion.designation;
        this.model.modelAvion.nombreplace = avion.nombreplace;
        this.model.modelAvion.typeavion = avion.typeavion;
        this.model.modelAvion.ref_compagnie = avion.ref_compagnie;
        // this.model.addAgent.passwordag=agent.passwordag;
  
      },
  
      // editagent(id){
  
      //         axios.get("http://127.0.0.1:8000/api/v1/agent/agent/${id}").then(res=>{
      //             console.log(res.data.modelAgent)
      //            this.model.modelAgent = res.data.modelAgent;
      //         });
      //     } 
  
      updateagent() {
        axios.post("http://127.0.0.1:8000/api/v1/vol/avion/${this.agent}", this.model.modelAgent)
          .then(res => {
             console.log(res.data)
            alert(res.data.message)
            this.model.modelAvion = {
  
            }
          })
      },
    }
  };
  </script>
  