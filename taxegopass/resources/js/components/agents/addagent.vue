        <template>
                <form>
                    <br><br>
                      <div id="text-form" class="col-lg-8 col-md-6 col-mg-4">
                        <h3>Add a Agent</h3>
                        <div class="form-group">
                          <label class="control-label">Noms</label>
                          <input
                            type="text"
                            v-model="model.addAgent.nomsag"
                            class="form-control"
                          />
                        </div>
                        <div  class="form-group">
                          <label class="control-label">Genre</label>
                          <input
                            type="text"
                            v-model="model.addAgent.genreag"
                            class="form-control"
                          />
                        </div>
                         <div class="form-group">
                          <label class="control-label">Date de naissance</label>
                          <input
                            type="date"
                            v-model="model.addAgent.datenaissag"
                            class="form-control"
                          />
                        </div>

                        <div  class="form-group">
                          <label class="control-label">Telephone</label>
                          <input
                            type="text"
                            v-model="model.addAgent.mobile"
                            class="form-control"
                          />
                        </div>
                        <div  class="form-group">
                          <label class="control-label" >Email</label>
                          <input
                            type="text"
                            v-model="model.addAgent.emailag"
                            class="form-control"
                          />
                        </div>
                        <div  class="form-group">
                          <label class="control-label" >Password</label>
                          <input
                            type="password"
                            v-model="model.addAgent.passwordag"
                            class="form-control"
                          />
                        </div>
                      <div  class="modal-footer footer-modal-admin info-md">
                        <a
                          data-dismiss="modal"
                          class="col-xs-3 info info-danger"
                          href="#"
                          >Cancel</a
                        >
                        <a class="col-xs-0 btn btn-success" @click="saveagent"
                          >Process</a
                        >
                      </div>
                    </div>
                    </form>
</template>
<script>
import axios from 'axios';
export default{
    data (){
        return{
            model: {
                addAgent: {
                    nomsag: '',
                    genreag: '',
                    datenaissag: '',
                    mobile: '',
                    emailag: '',
                    passwordag: ''

                }
            }
            
        }      
        
    },
    methods:{
                saveagent(){
                    axios.post("http://127.0.0.1:8000/api/v1/agent/agent", this.model.addAgent)
                        .then(res => {
                            console.log(res.data)
                            alert(res.data.message)
                            this.model.addAgent = {
                                nomsag: '',
                                genreag: '',
                                datenaissag: '',
                                mobile: '',
                                emailag: '',
                                passwordag: ''
                            }
             })
             .catch(function (error){
                if(error.response){
                if(error.response.status==422){
                   // this.errorList=error.response.data.errors;
                }
                console.log(error.response.data);
                console.log(error.response.status);
                console.log(error.response.header);
            }else if(error.response){
                console.log(error.request);
            }else{
                console.log('error',error.message);
            }
             })  
    
            }
        }
    }


</script>

//  export default{
    //         data(){
    //             return{
    //                 agentsList:[]
    //             }
    //        },
    
    //         created(){
    //             console.log('mounted ciponent');
    //             this.getAll();
    // },
    // methods:{
    //     getAll(){
    //         axios.get('http://127.0.0.1:8000/api/v1/agent/agent').then(res =>{
    //             this.agentsList= res.data.data;
    //             console.log(this.agentsList);
    //         }).catch(error => {
    //             console.log(error)
    //         });
    //     },
    //             deleteagent(agentId){
    //                   // @ts-ignore
    //                   this.axios.delete(`http://127.0.0.1:8000/api/pays/${agentId}`).then(res =>{
    //                     // @ts-ignore
    //                     let i = this. agentsList.map(data => data.data.id).indexOf(agentId);
    //                     this.agentsList.splice(i,1);
    //                 })
    //             },
    //         }
    
    //     }
    //autres maniere de faire
    
    //Version détaillée de la fonction
    
    // function getData() {
    //     // Création d'une promesse qui va contenir l'appel
    //     const promise = axios.get("http://127.0.0.1:8000/api/v1/agent/agent")
    //     // Avec la méthode "then", on extrait les données
    //     const donnes = promise.then((reponse) => reponse.data)
    //     //  On retourne les données
    //     return data;
    // }
    
    //Version abrégée
    // function getDonnees() {
    //     return axios.get("http://127.0.0.1:8000/api/v1/agent/agent").then(reponse => reponse.data)
    //     console.log(this.agentsList);
    // }
    
    // function agents({ nomsag, genreag, mobile, emailag }) {
    //     this.nomsag = nomsag;
    //     this.genreag = genreag;
    //     this.mobile = mobile;
    //     this.emailag = emailag;
    // }
    // export default {
    //     data() {
    //         return {
    //             agentliste: [],
    //         };
    //     },
    //     methods: {
    //         read() {
    //             window.axios.get("http://127.0.0.1:8000/api/v1/agent/agent").then(({ data }) => {
    //                     console.log(data);
    //                 });
    //         },
    //     },
    //     onmouted() {
    //         this.read();
    //     },
    // };