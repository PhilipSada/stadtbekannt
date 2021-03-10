<template>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Stadtbekannt Dashboard Page</div>

                    <div class="card-body">
                        Name: {{currentUser.name}}
                      
                        <button class="btn btn-danger" @click="logout">Logout</button>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
    <div>
        <nav class="dashboard-nav">
            <div class="dash-first">
                <div class="dash-menu" @click="toggleSideBar">
                    <i class="fa fa-bars dash-menu-bar"></i>
                </div>
                <div class="dash-logo">
                    <object data="/images/stadtbekannt-logo.svg" width="150"> </object>
                </div>
            </div>
            <div class="dash-second">
                <div class="dash-dropdown"><span>Ihr Standort/Firma <i class="fa fa-angle-down ml-1"></i></span></div>
                <div class="dash-upgrade">
                    <button class="dash-upgrade-button">Upgrade</button>
                </div>
                <div class="dash-notify">
                    <div class="dash-bell">
                         <i class="fa fa-bell"></i>
                        <div class="bell-number">12</div>
                    </div>
                    <!-- <div class="bell-number">12</div> -->
                </div>
                <div class="dash-user-icon">
                    <div class="dash-circle">
                       <span class="font-weight-bold">NK</span> 
                    
                   </div>
                </div>
            </div>
        </nav>
    <div class="d-flex" id="wrapper" v-bind:class="{toggled:toggled}">

    <!-- Sidebar -->
    <div class="bg-white border-top border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Analyse </div>
       <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active:isActive}" @click.prevent="toggleNav"> <span><i class="fa fa-home pr-2"></i></span>Übersicht</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active1:isActive1}" @click.prevent="toggleNav1"><span><i class="fa fa-map-marker pr-2 pl-1"></i></span>Standorte</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active2:isActive2}" @click.prevent="toggleNav2"><span><i class="fa fa-check-square pr-2 pl-1"></i></span>Einträge</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active3:isActive3}" @click.prevent="toggleNav3"><span><i class="fa fa-star pr-2"></i></span>Bewertungen</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active4:isActive4}" @click.prevent="toggleNav4"><span><i class="fa fa-comments pr-1"></i></span>Social Media</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active5:isActive5}" @click.prevent="toggleNav5"><span><i class="fa fa-bar-chart pr-1"></i></span>Statistik</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active6:isActive6}" @click.prevent="toggleNav6"><span><i class="fa fa-user pr-2 pl-1"></i></span>Benutzer</a>
        <a href="#" class="list-group-item list-group-item-action font-weight-bold nav-tab" v-bind:class="{active7:isActive7}" @click.prevent="toggleNav7"><span><i class="fa fa-bell pr-2"></i></span>Benachrichtigungen</a>
      </div>
      <div class="sidebar-heading mt-4">Toolbar </div>
       <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action nav-tab"><input type="radio" class="nav-check mr-2"/>Nav Item</a>
        <a href="#" class="list-group-item list-group-item-action nav-tab"><input type="radio" class="nav-check mr-2"/>Nav Item</a>
        <a href="#" class="list-group-item list-group-item-action nav-tab"><input type="radio" class="nav-check mr-2"/>Nav Item</a>
        <a href="#" class="list-group-item list-group-item-action nav-tab"><input type="radio" class="nav-check mr-2"/>Nav Item</a>
        <a href="#" class="list-group-item list-group-item-action nav-tab"><input type="radio" class="nav-check mr-2"/>Nav Item</a>
      </div>
      <div class="sidebar-heading mt-4">Manager </div>
       <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action nav-tab"><span><i class="fa fa-database pr-2"></i></span>Ihre Stammdaten</a>
        <a href="#" class="list-group-item list-group-item-action nav-tab"><span><i class="fa fa-phone pr-2"></i></span>Support</a>
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="border-top">

      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav> -->

      <div class="container-fluid ">
        <h1 class="mt-4 mb-4 main-title">Hallo Niklas Klein, schön dass Sie <br> wieder hier sind!</h1>
         <p class="main-p">Hier ist ein Überblick über alle offenen Benachrichtigungen und</p>
         <p class="mb-4 main-p">Aufgaben:</p>
         <div class="content-alert-container">
             <div class="content-alert">
                 <div class="content-alert-first">
                   
                    <div class="info"><span><i class="fa fa-info-circle pr-2"></i></span><p class="pr-1">Hinweis</p></div>
                    <div class="other-info">
                         <p>Es wurden 3 neue Einträge festgestellt, jetzt überprüfen und berichtigen.</p>
                    </div>
                 </div>
                 
                 <div class="content-alert-second">
                     <div class="btn-section"><p class="ignore-btn">Ignorieren</p></div>
                     <div class="btn-section"><p class="accept-btn">Jetzt berichtigen</p></div>
                      
                    
                 </div>
             </div>
             <div class="content-alert-1 mt-2">
                 <div class="content-alert-first">
                    <div class="info">
                        <span><i class="fa fa-star pr-2"></i></span>
                         <p class="pr-1">Aufgaben</p> 
                    </div>
                    <div class="other-info">
                         <p>Es wurden 40 Neue Bwertungen abgegeben.</p>
                    </div>
                 </div>
                 
                 <div class="content-alert-second">
                     <div class="btn-section"><p class="ignore-btn">Ignorieren</p></div>
                     <div class="btn-section"><p class="accept-btn">Jetzt berichtigen</p></div>
                      
                    
                 </div>
             </div>
             <div class="content-alert-2 mt-2">
                 <div class="content-alert-first">
                    <div class="info">
                        <span><i class="fa fa-lightbulb-o pr-2"></i></span>
                        <p>Erinnerung</p>
                    </div>
                    <div class="other-info">
                         <p>Kommende Woche ist verkaufsoffener Sonntag. Haben sie geöffnet?</p>
                    </div>
                 </div>
                 
                 <div class="content-alert-second">
                     <div class="btn-section"><p class="ignore-btn">Ignorieren</p></div>
                     <div class="btn-section"><p class="accept-btn">Jetzt berichtigen</p></div>
                      
                    
                 </div>
             </div>
         </div>
         <div class="content-options">
             <h3 class="mt-5 mb-4 second-title">Ihre Visitenkarten</h3>
             <div class="content-options-button-container">
                 <button class="content-options-active-btn mr-2">Ausgewählter Standort</button>
                 <button class="content-options-btn mr-2">Standort B</button>
                 <button class="content-options-btn mr-2">Standort C</button>
                 <button class="content-options-btn mr-2">Standort D</button>
                 <button class="content-options-btn mr-2">Standort E</button>
                 <button class="content-options-last-btn">Standorte Verwalten</button>
             </div>
         </div>
         <div class="row pb-4">
             <div class="col-md-12 col-lg-6 col-xl-4">
                 <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Adresse</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4 body-group row">
                            <div class="col-md-12"> <p class="header-title">Unternehmensname</p></div>
                             <div class="col-md-12"> <p class="font-weight-bold">Stadtbekannt</p></div>

                            <div class="col-md-12 pt-4"> <p class="header-title"> Alternavtibe Unternehmensnamen</p></div>
                            <div class="col-md-12"> 
                                <p class="font-weight-bold">Rottels, Alexander mario rottels,</p>
                                <p class="font-weight-bold">alexander Rottels</p>
                            </div>

                            <div class="col-md-12 pt-4"> <p class="header-title"> Rottels, Alexander mario rottels, alexander Rottels</p></div>
                            <div class="col-md-12">
                                 <p class="font-weight-bold">Preußenstraße 73</p>
                                 <p class="font-weight-bold">41464 Neuss</p>
                            </div>

                             <!-- <p class="header-title">Unternehmensname</p>
                             <p class="font-weight-bold">Stadtbekannt</p> -->
                         </div>
                         <!-- <div class="body-group pt-4">
                             <p class="header-title"> Alternavtibe Unternehmensnamen</p>
                             <p class="font-weight-bold">Rottels, Alexander mario rottels, <br> alexander Rottels</p>
                         </div> -->
                         <!-- <div class="body-group pt-4">
                             <p class="header-title"> Rottels, Alexander mario rottels, alexander Rottels</p>
                             <p class="font-weight-bold">Preußenstraße 73 <br> 41464 Neuss</p>
                         </div> -->
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                 <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Kontaktdaten</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4 body-group row">
                             <div class="col-md-12"><p class="header-title">Telefonnummer</p></div>
                             <div class="col-md-12"><p class="font-weight-bold">+ 49 2131 5989940</p></div>

                             <div class="col-md-12 pt-4"><p class="header-title"> Fax Nummer</p></div>
                             <div class="col-md-12"> <p class="font-weight-bold">+ 49 2131 5989940</p></div>

                             <div class="col-md-12 pt-4"><p class="header-title"> Website</p></div>
                             <div class="col-md-12"> <p class="font-weight-bold">www.stadtbekannt.online</p></div>

                             <div class="col-md-12 pt-4"><p class="header-title"> E-Mail Adresse</p></div>
                             <div class="col-md-12"> <p class="font-weight-bold">Info@stadtbekannt.online</p></div>
                             <!-- <p class="header-title">Telefonnummer</p>
                             <p class="font-weight-bold">+ 49 2131 5989940</p> -->
                         </div>
                         <!-- <div class="body-group pt-4">
                             <p class="header-title"> Fax Nummer</p>
                             <p class="font-weight-bold">+ 49 2131 5989940</p>
                         </div> -->
                         <!-- <div class="body-group pt-4">
                             <p class="header-title"> Website</p>
                             <p class="font-weight-bold">www.stadtbekannt.online</p>
                         </div> -->
                         <!-- <div class="body-group pt-4">
                             <p class="header-title"> E-Mail Adresse</p>
                             <p class="font-weight-bold">Info@stadtbekannt.online</p>
                         </div> -->
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Details</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4 row body-group">
                             <div class="col-md-12"> <p class="header-title">Parkmöglichkeiten</p></div>
                             <div class="col-md-12"><p class="font-weight-bold">Straße</p></div>

                             <div class="col-md-12 pt-4"> <p class="header-title"> Bezahlmöglichkeiten</p></div>
                             <div class="col-md-12"><p class="font-weight-bold">Bargeld</p></div>

                             <div class="col-md-12 pt-4"> <p class="header-title"> Terminvereinbarung</p></div>
                             <div class="col-md-12">
                                 <p class="font-weight-bold">telefonisch, E-Mail, eigene Website, ohne</p>
                                 <p class="font-weight-bold">Termin</p>
                             </div>

                             <div class="col-md-12 pt-4"> <p class="header-title"> Barrierefreiheit</p></div>
                             <div class="col-md-12"><p class="font-weight-bold">Nein</p></div>
                           
                         </div>
                

                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Öffnungszeiten</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4">
                             <p class="header-title">Abweichend von den normalen Öffnungszeiten:</p>
                             <div class="row days">
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Montag</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Dienstag</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Mittwoch</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Donnerstag</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Freitag</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Samstag</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">geschlossen</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Sonntag</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">geschlossen</p>
                                 </div>
                                 
                             </div>
                             
                         </div>
                         
                         <div class="row body-group mt-4">
                             <div class="col-md-12"> <p class="header-title"> Abweichend von den normalen Öffnungszeiten:</p></div>
                             <div class="col-md-12"><p class="font-weight-bold">Lorem Ipsum</p></div>
                            
                         </div>
                        
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Feiertage</h4>
                     </div>
                     <div class="body">

                         <div class="mt-4">
                             <p class="header-title">Abweichend von den normalen Öffnungszeiten:</p>
                             <div class="row days">
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Feiertagsname</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Feiertagsname</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Feiertagsname</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Feiertagsname</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">Feiertagsname</p>
                                 </div>
                                 <div class="col-md-6">
                                     <p class="font-weight-bold">09:00 - 17:00 Uhr</p>
                                 </div>
                            
                             </div>
                             
                         </div>
                        
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Urlaubszeiten</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4">
                             <p class="header-title">Auf Grund von Urlaub geschlossen:r</p>
                             <p class="font-weight-bold">01.03.2021 - 22.03.2021</p>
                         </div>
                         
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Keywords</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4 row body-group">
                             <div class="col-md-12"> <p class="header-title">Lorem Ipsum</p></div>
                             <div class="col-md-12">
                                 <p class="font-weight-bold">Keyword, Keyword, Keyword, Keyword,</p>
                                 <p class="font-weight-bold">Keyword, Keyword, Keyword, Keyword,</p>
                                 <p class="font-weight-bold">Keyword, Keyword, Keyword</p>
                                
                            </div>
                            
                         </div>
                         
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Keywords</h4>
                     </div>
                     <div class="body">
                         <div class="mt-4 row body-group">
                             <div class="col-md-12"> <p class="header-title">Name der Konkurrenten</p></div>
                             <div class="col-md-12"> 
                                  <p class="font-weight-bold">Firmen Name Eins,</p>
                                  <p class="font-weight-bold">Firmen Name Zwei,</p>
                                  <p class="font-weight-bold">Firmen Name Drei</p>
                            </div>

                             <div class="col-md-12 pt-4"> <p class="header-title"> Fax Nummer</p></div>
                             <div class="col-md-12"> 
                                  <p class="font-weight-bold">+ 49 2131 5989940</p>
                            </div>

                             <div class="col-md-12 pt-4"> <p class="header-title"> Website</p></div>
                             <div class="col-md-12"> 
                                   <p class="font-weight-bold">www.stadtbekannt.online</p>
                            </div>

                             <div class="col-md-12 pt-4">  <p class="header-title"> E-Mail Adresse</p></div>
                             <div class="col-md-12"> 
                                      <p class="font-weight-bold">Info@stadtbekannt.online</p>
                            </div>
                            
                         </div>
                       
                        
                         
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-4">
                     <div class="card content-card mt-4">
                     <div class="heading pt-4">
                         <h4>Logo</h4>
                     </div>
                     <div class="body">
                         <div class="content-logo">
                              <object data="/images/stadtbekannt-logo.svg" width="150"> </object>
                         </div>
                        
                     </div>
                     <div class="content-card-footer mt-4 pb-3">
                            <button class="content-card-footer-btn float-right">Bearbeiten</button>
                     </div>
                 </div>
             </div>
         </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
    </div>
</template>
<script>

export default {
    data() {
        return{
            currentUser:{},
            token:localStorage.getItem('token'),
            toggled:false,
            isActive:true,
            isActive1:false,
            isActive2:false,
            isActive3:false,
            isActive4:false,
            isActive5:false,
            isActive6:false,
            isActive7:false,
        }
    },
   methods:{
        logout(){
            // axios.get('/sanctum/csrf-cookie').then(response => {
            //     // Login...
              
            // });
            axios.post('/api/logout', this.form).then((response)=>{
                  localStorage.removeItem('token')
                  this.$router.push('/login')
                }).catch((error)=>{
                   this.errors = error.response.data.errors;
            })
    
            
        },
        toggleSideBar(){
            if(this.toggled === false){
                 this.toggled = true
            }else{
                this.toggled = false
            }
          
        },
        toggleNav(){
            this.isActive = true;
            this.isActive1 = false;
            this.isActive2 = false;
            this.isActive3 = false;
            this.isActive4 = false;
            this.isActive5 = false;
            this.isActive6 = false;
            this.isActive7 = false;
        },
        toggleNav1(){
            this.isActive = false;
            this.isActive1 = true;
            this.isActive2 = false;
            this.isActive3 = false;
            this.isActive4 = false;
            this.isActive5 = false;
            this.isActive6 = false;
            this.isActive7 = false;
        },
        toggleNav2(){
            this.isActive = false;
            this.isActive1 = false;
            this.isActive2 = true;
            this.isActive3 = false;
            this.isActive4 = false;
            this.isActive5 = false;
            this.isActive6 = false;
            this.isActive7 = false;
        },
        toggleNav3(){
            this.isActive = false;
            this.isActive1 = false;
            this.isActive2 = false;
            this.isActive3 = true;
            this.isActive4 = false;
            this.isActive5 = false;
            this.isActive6 = false;
            this.isActive7 = false;
        },
        toggleNav4(){
            this.isActive = false;
            this.isActive1 = false;
            this.isActive2 = false;
            this.isActive3 = false;
            this.isActive4 = true;
            this.isActive5 = false;
            this.isActive6 = false;
            this.isActive7 = false;
        },
        toggleNav5(){
            this.isActive = false;
            this.isActive1 = false;
            this.isActive2 = false;
            this.isActive3 = false;
            this.isActive4 = false;
            this.isActive5 = true;
            this.isActive6 = false;
            this.isActive7 = false;
        },
        toggleNav6(){
            this.isActive = false;
            this.isActive1 = false;
            this.isActive2 = false;
            this.isActive3 = false;
            this.isActive4 = false;
            this.isActive5 = false;
            this.isActive6 = true;
            this.isActive7 = false;
        },
        toggleNav7(){
            this.isActive = false;
            this.isActive1 = false;
            this.isActive2 = false;
            this.isActive3 = false;
            this.isActive4 = false;
            this.isActive5 = false;
            this.isActive6 = false;
            this.isActive7 = true;
        },
    },
    mounted(){
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`
        axios.get('/api/user').then((res)=>{
            this.currentUser = res.data
        }).catch((errors)=>{
            console.log(errors)
        })
    }
}
</script>