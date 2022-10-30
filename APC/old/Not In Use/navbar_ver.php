 <style>

   /*========== GOOGLE FONTS ==========*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/*========== VARIABLES CSS ==========*/
:root {
  --header-height: 3.5rem;
  --nav-width: 219px;

  /*========== Colors ==========*/
  --first-color: #6923D0;
  --first-color-light: #F4F0FA;
  --title-color: #19181B;
  --text-color: #58555E;
  --text-color-light: #A5A1AA;
  --body-color: #F9F6FD;
  --container-color: #FFFFFF;

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: .938rem;
  --small-font-size: .75rem;
  --smaller-font-size: .75rem;

  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;

  /*========== z index ==========*/
  --z-fixed: 100;
}

@media screen and (min-width: 1024px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*========== BASE ==========*/
*, ::before, ::after {
  box-sizing: border-box;
}



h3 {
  margin: 0;
}

a {
  white-space: nowrap;
  text-decoration: none!important;
}




/*========== NAV ==========*/
.nav {
  position:fixed;
  top: 20 px;
  left: -100%;
  height: 100vh;
  padding: 1rem 1rem 0;
  background-color: var(--container-color);
  box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
  z-index: var(--z-fixed);
  transition: .4s;

  width: 900px;
}

.nav__container {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-bottom: 3rem;
  overflow: auto;
  scrollbar-width: none; /* For mozilla */
}

/* For Google Chrome and others */
.nav__container::-webkit-scrollbar {
  display: none;
}

.nav__logo {
  font-weight: var(--font-semi-bold);
  margin-bottom: 2.5rem;
}

.nav__list, 
.nav__items {
  display: grid;
}

.nav__list {
  row-gap: 2.5rem;
}

.nav__items {
  row-gap: 1.5rem;
}

.nav__subtitle {
  font-size: var(--normal-font-size);
  text-transform: uppercase;
  letter-spacing: .1rem;
  color: var(--text-color-light);
}

.nav__link {
  display: flex;
  align-items: center;
  color: var(--text-color);
}

.nav__link:hover {
  color: var(--first-color);
}

.nav__icon {
  font-size: 1.2rem;
  margin-right: .5rem;
}

.nav__name {
  font-size: var(--small-font-size);
  font-weight: var(--font-medium);
  white-space: nowrap;
}

.nav__logout {
  margin-top: 5rem;
}

/* Dropdown */
.nav__dropdown {
  overflow: hidden;
  max-height: 21px;
  transition: .4s ease-in-out;
}

.nav__dropdown-collapse {
  background-color: var(--first-color-light);
  border-radius: .25rem;
  margin-top: 1rem;
}

.nav__dropdown-content {
  display: grid;
  row-gap: .5rem;
  padding: .75rem 2.5rem .75rem 1.8rem;
}

.nav__dropdown-item {
  font-size: var(--smaller-font-size);
  font-weight: var(--font-medium);
  color: var(--text-color);
}

.nav__dropdown-item:hover {
  color: var(--first-color);
}

.nav__dropdown-icon {
  margin-left: auto;
  transition: .4s;
}

/* Show dropdown collapse */
.nav__dropdown:hover {
  max-height: 100rem;
}

/* Rotate icon arrow */
.nav__dropdown:hover .nav__dropdown-icon {
  transform: rotate(180deg);
}

/*===== Show menu =====*/
.show-menu {
  left: 0;
}

/*===== Active link =====*/
.active {
  color: var(--first-color);
}


  .nav {
    left: 0;
    padding: 1.2rem 1.5rem 0;
    width:68px; /* Reduced navbar */
    background-color: black;
  }
  .nav__items {
    row-gap: 1.7rem;
  }
  .nav__icon {
    font-size: 1.3rem;
  }

  /* Element opacity */
  .nav__logo-name, 
  .nav__name, 
  .nav__subtitle, 
  .nav__dropdown-icon {
    opacity: 0;
    transition: .3s;
  }
  
  
  /* Navbar expanded */
  .nav:hover {
    width: var(--nav-width);
  }
  
  /* Visible elements */
  .nav:hover .nav__logo-name {
    opacity: 1;
  }
  .nav:hover .nav__subtitle {
    opacity: 1;
  }
  .nav:hover .nav__name {
    opacity: 1;
  }
  .nav:hover .nav__dropdown-icon {
    opacity: 1;
  }
 

  

 </style>
 
 
 
 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
 
 <!--========== NAV ==========-->
 <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Ministere De Commerce</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Main</h3>
    
                            <a href="index.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                        

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Profile Dcw</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Suivie Quantite De Produit :</h3>
    
                            <a href="statistique_stock/form_nat.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Statistique National</span>
                            </a>

                           
                            <a href="statistique_stock/form_reg.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Statistique Regional</span>
                            </a>

                            <a href="statistique_stock/form_dcw.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Statistique DCW</span>
                            </a>

                           
                            <a href="stock_add" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Saisir Quatidien</span>
                            </a>

                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Saved</span>
                            </a>
                        </div>

                        <div class="nav__items">
                            <h3 class="nav__subtitle">Suivie Prix De Produit :</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Statistique National</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="statistique/form_nat.php?t=1" class="nav__dropdown-item">Produits d'épicerie</a>
                                        <a href="statistique/form_nat.php?t=2" class="nav__dropdown-item">Légumes Frais</a>
                                        <a href="statistique/form_nat.php?t=3" class="nav__dropdown-item">Fruits Frais</a>
                                        <a href="statistique/form_nat.php?t=4" class="nav__dropdown-item">Viandes Et oeufs</a>
                                    </div>
                                </div>
                            </div>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Statistique Regional</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="statistique/form_reg.php?t=1" class="nav__dropdown-item">Produits d'épicerie</a>
                                        <a href="statistique/form_reg.php?t=2" class="nav__dropdown-item">Légumes Frais</a>
                                        <a href="statistique/form_reg.php?t=3" class="nav__dropdown-item">Fruits Frais</a>
                                        <a href="statistique/form_reg.php?t=4" class="nav__dropdown-item">Viandes Et oeufs</a>
                                    </div>
                                 </div> 
                            </div>


                              <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Statistique Dcw</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="statistique/form_dcw.php?t=1" class="nav__dropdown-item">Produits d'épicerie</a>
                                        <a href="statistique/form_dcw.php?t=2" class="nav__dropdown-item">Légumes Frais</a>
                                        <a href="statistique/form_dcw.php?t=3" class="nav__dropdown-item">Fruits Frais</a>
                                        <a href="statistique/form_dcw.php?t=4" class="nav__dropdown-item">Viandes Et oeufs</a>
                                    </div>
                                </div>
                              </div>
                            
                            <a href="prix_add.php" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Saisir Quatidien</span>
                            </a>

                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Saved</span>
                            </a>
                        </div>
                    </div>
         

                <a href="#" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>



<script>
              /*==================== SHOW NAVBAR ====================*/
          const showMenu = (headerToggle, navbarId) =>{
              const toggleBtn = document.getElementById(headerToggle),
              nav = document.getElementById(navbarId)
              
              // Validate that variables exist
              if(headerToggle && navbarId){
                  toggleBtn.addEventListener('click', ()=>{
                      // We add the show-menu class to the div tag with the nav__menu class
                      nav.classList.toggle('show-menu')
                      // change icon
                      toggleBtn.classList.toggle('bx-x')
                  })
              }
          }
          showMenu('header-toggle','navbar')

          /*==================== LINK ACTIVE ====================*/
          const linkColor = document.querySelectorAll('.nav__link')

          function colorLink(){
              linkColor.forEach(l => l.classList.remove('active'))
              this.classList.add('active')
          }

          linkColor.forEach(l => l.addEventListener('click', colorLink))

</script>


<style>
  
</style>