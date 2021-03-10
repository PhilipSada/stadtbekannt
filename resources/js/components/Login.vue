<template>
    <div class="center">
        <div class="login-text">
            <h4>Willkomen züruck Alex, zu <br> unserem internen Tool für unser <br> online Präsenzmanagement</h4>
        </div>
        <div class="card login-card mt-5">
            <div class="d-flex justify-content-center pt-4">
                <!-- <img src="/images/stadtbekannt-logo.svg" className="logo-image" width=""> -->
                <object data="/images/stadtbekannt-logo.svg" width="200"> </object>
            </div>
            <div class="pt-2">
                 <p class="text-danger text-center">{{errors.get('email')}}</p>
                 <p class="text-danger text-center pt-1">{{errors.get('password')}}</p>
            </div>
            
            <div class="form-container">
                <div class="txt_field text-field-one">
                    <input type="email" v-model="form.email" name="email" required>
                    <span></span>
                    <label>E-Mail</label>
                   
                </div>
                <div class="txt_field text-field-two">
                    <input type="password" v-model="form.password" name="password" required>
                    <span></span>
                    <label>Kennwort</label>
                    
                     
                </div>
                <p class="forgot-password">Kennwort vergessen?</p>
                <div class="float-right d-flex">
                    <div class="pr-2">
                        <button class="register-button">Registrieren</button>
                    </div>
                    <div>
                       <button @click.prevent="loginUser" type="submit" class="login-button">Anmelden</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</template>
<script>
 class Errors{

     constructor(){
         this.errors = {}
     }
     get(field){
         if(this.errors[field]){
             return this.errors[field][0]
         }
     }

     record(errors){
         this.errors = errors.errors;
     }
        
 }
export default {
   
    data() {
        return{
            form:{
                email:'',
                password:'',
                device_name:'browser',
            },
            errors:new Errors()
        }
    },
    methods:{
        loginUser(){
            // axios.get('/sanctum/csrf-cookie').then(response => {
            //     // Login...
              
            // });
            axios.post('/api/login', this.form).then((response)=>{
                  localStorage.setItem('token', response.data)
                  this.$router.push({name: "Dashboard"})
                }).catch((error)=>{
                   this.errors.record(error.response.data)
            })
    
            
        }
    }
}
</script>