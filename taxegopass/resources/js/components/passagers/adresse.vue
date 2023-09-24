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
                        <h4>Adresse List</h4>
                        <div class="add-product">
                            <div class="shadow-inner mg-tb-30">
                                <a class="Information Information-color mg-b-30" href="#" data-toggle="modal"
                                    data-target="#Addagent">Add
                                    adresse</a>
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
                                            <h3>Add Agent</h3>
                                            <div class="form-group">
                                                <label class="control-label">Pays</label>
                                                <input type="text" v-model="model.modelAdresse.pays" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Province</label>
                                                <input type="text" v-model="model.modelAdresse.province"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Ville</label>
                                                <input type="text" v-model="model.modelAdresse.ville"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Commune</label>
                                                <input type="date" v-model="model.modelAdresse.commune"
                                                    class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Quartier</label>
                                                <input type="text" v-model="model.modelAdresse.quartier"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Avenue</label>
                                                <input type="text" v-model="model.modelAdresse.avenue"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Numero</label>
                                                <input type="password" v-model="model.modelAdresse.numero"
                                                    class="form-control" />
                                            </div>
                                            <div class="modal-footer footer-modal-admin info-md">
                                                <a data-dismiss="modal" class="col-xs-3 info info-danger"
                                                    href="#">Cancel</a>
                                                <a class="col-xs-0 btn btn-Secondary" @click="saveagent">Process</a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <th>Pays</th>
                                <th>Provinnce</th>
                                <th>Ville</th>
                                <th>Commune</th>
                                <th>Quarier</th>
                                <th>Avenue</th>
                                <th>Numero</th>
                                <th>Actions</th>
                            </thead>

                            <tbody v-if="this.adresses.length > 0">
                                <tr v-for="(adresse, index) in this.adresses" :key="index">
                                    <td>{{ adresse.id }}</td>
                                    <td>{{ adresse.province }}</td>
                                    <td>{{ adresse.ville }}</td>
                                    <td>{{ adresse.commune }}</td>
                                    <td>{{ adresse.quartier }}</td>
                                    <td>{{ adresse.avenue }}</td>
                                    <td>{{ adresse.numero }}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#EditAgent" title="Edit"
                                            @click="editagent(adresse)" class="pd-setting-ed">
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
                                                                    <label class="control-label" for="noms">Pays</label>
                                                                    <input type="text" v-model="model.modelAdresse.id"
                                                                        class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="noms">Province</label>
                                                                    <input type="text" v-model="model.modelAdresse.province"
                                                                        class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="genre">Ville</label>
                                                                    <input type="text" v-model="model.modelAdresse.ville"
                                                                        class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label"
                                                                        for="datenaiss">Commune</label>
                                                                    <input type="date" v-model="model.modelAdresse.commune"
                                                                        class="form-control" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label" for="noms">Quartier</label>
                                                                    <input type="text" v-model="model.modelAdresse.quartier"
                                                                        class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="email">Avenue</label>
                                                                    <input type="text" v-model="model.modelAdresse.avenue"
                                                                        class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="email">Numero</label>
                                                                    <input type="text" v-model="model.modelAdresse.numero"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer footer-modal-admin info-md">
                                                                <a data-dismiss="modal" class="col-xs-3 info info-danger"
                                                                    href="#">Cancel</a>
                                                                <a class="col-xs-0 btn btn-success"
                                                                    @click="updateagent">Update</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button data-toggle="tooltip" data-target="#Deleteagent" title="Trash"
                                            @click="deleteagents(adresse.id)" class="pd-setting-ed alert alrt-danger">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
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
    name: "adresses",
    names: 'adressecreate',
    setup() {

    },
    data() {
        return {
            adresses: [],
            model: {
                modelAdresse: {
                    id: '',
                    pays: '',
                    province: '',
                    ville: '',
                    commune: '',
                    quartier: '',
                    avenue: '',
                    numero: ''
                }
            }

        };
    },
    mounted() {
        //console.log ('helo guys')
        this.getAgents();
        //this.agentId(this.$route.params.id);

    },
    methods: {
        //Shoawing all agent in table
        getAgents() {
            axios.get("http://127.0.0.1:8000/api/v1/passager/adresse")
                .then((res) => {
                    this.adresses = res.data.data;
                    // console.log(this.agents);
                });
        },
        //Ading agent in data base
        saveagent() {
            axios.post("http://127.0.0.1:8000/api/v1/passager/adresse", this.model.modelAdresse)
                .then(res => {
                    //console.log(res.data)
                    alert(res.data.message)
                    this.model.modelAdresse = {
                        id: '',
                        pays: '',
                        province: '',
                        ville: '',
                        commune: '',
                        quartier: '',
                        avenue: '',
                        numero: ''
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
        
          //FUNCTION FOR SHOWING ONE AGENT
          editagent(adresse) {
            console.log(adresse);
            this.model.modelAdresse.id = adresse.id
            this.model.modelAdresse.pays = adresse.pays;
            this.model.modelAdresse.province = adresse.province;
            this.model.modelAdresse.ville = adresse.ville;
            this.model.modelAdresse.commune = adresse.commune;
            this.model.modelAdresse.quartier = adresse.quartier;
            this.model.modelAdresse.avenue = adresse.avenue;
            this.model.modelAdresse.numero = adresse.numero;

            // this.model.addAgent.passwordag=agent.passwordag;

        },

        //edit methode
        // editagent($id){
        //   axios.get("http://127.0.0.1:8000/api/v1/agent/agent/${id} ").then(res=>
        //   {
        //     console.log(res.data.data)
        //   }); 


        // },
       
        // editagent(id){

        //         axios.get("http://127.0.0.1:8000/api/v1/agent/agent/${id}").then(res=>{
        //             console.log(res.data.modelAgent)
        //            this.model.modelAgent = res.data.modelAgent;
        //         });
        //     } 
            //UPDATE ADRESSE
        updateagent() {
            axios.post("http://127.0.0.1:8000/api/v1/passager/adresse}", this.model.modelAdresse)
                .then(res => {
                    console.log(res.data)
                    alert(res.data.message)
                    this.model.modelAdresse = {

                    }
                })
        },
        
         //DELETEING AGENT FROM ID
         deleteagents(id) {
            if (confirm("Do you want to delete this Agent be cerefful cause he will deespeer inside database")) {
                console.log(id)
                axios.delete("http://127.0.0.1:8000/api/v1/passager/adresse/${id}").then(res => {
                    alert(res.data.data.message),
                        this.getAgents();
                });
            }
        },
    }
};
</script>
  