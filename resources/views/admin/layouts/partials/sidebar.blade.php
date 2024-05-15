     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
             <div class="sidebar-brand-icon rotate-n-20">
                 <img class="img-responsive img-thumbnail" src="{{ url('assets/logo.png')}}" style="width: 140px; height: 60px;" alt="Congo Peace Network"/>
             </div>
             {{-- <div class="sidebar-brand-text mx-4">ETS YETU</div> --}}
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="#">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Tableau de bord</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Interfaces
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>Composants</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Applications:</h6>
                     <a class="collapse-item" href="{{ url('/etsyetu/category')}}">Categories</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/subcategory')}}">SubCategories</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/blog')}}">Blog</a>
                 </div>
             </div>
         </li>

         <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-fw fa-wrench"></i>
                 <span>Opérations:</span>
             </a>
             <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Nos opérations:</h6>
                     <a class="collapse-item" href="{{ url('/etsyetu/product')}}">Products</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/commande')}}">Commande</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/comment')}}">Commentaire</a>
                 </div>
             </div>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             E-commerce
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                 <i class="fas fa-fw fa-table"></i>
                 <span>E-commerce</span>
             </a>
             <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">E-commerce:</h6>
                     <a class="collapse-item" href="{{ url('/etsyetu/message')}}">Messages</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/testimonial')}}">Testimonial</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/slide')}}">Slide</a>
                     <div class="collapse-divider"></div>
                 </div>
             </div>
         </li>

         <!-- Nav Item - Tables -->
         <div class="sidebar-heading">
             paramètrage de système
         </div>
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
                 <i class="fas fa-fw fa-user"></i>
                 <span>Paramètre</span>
             </a>
             <div id="collapseAdmin" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Nos paramètres</h6>
                     <a class="collapse-item" href="{{ url('/etsyetu/role')}}">Role</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/users')}}">Users</a>
                     <a class="collapse-item" href="{{ url('/etsyetu/company')}}">Entreprise</a>
                     <div class="collapse-divider"></div>
                 </div>
             </div>
         </li>
         <!-- Heading -->
         <div class="sidebar-heading">
             Paramètrage connexion
         </div>


         <!-- Nav Item - Tables -->
         <li class="nav-item">
             <a class="nav-link" onclick="return confirm('êtes-vous sûre de vouloire se deconnecter?');" href="#">
                 <i class="fas fa-fw fa-sign-out-alt"></i>
                 <span>Se Deconnecter</span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
     </ul>
     <!-- End of Sidebar -->
