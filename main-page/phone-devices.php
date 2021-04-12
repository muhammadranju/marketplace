 <!-- Toolbar for handheld devices-->
 <div class="cz-handheld-toolbar">
   <div class="d-table table-fixed w-100">
     <a class="d-table-cell cz-handheld-toolbar-item" href="/"><span class="cz-handheld-toolbar-icon"><i class="czi-home"></i></span><span class="cz-handheld-toolbar-label">Home</span></a>

     <a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a>
     <?php if (!isset($_SESSION['user_id'])) { ?>
       <a class="d-table-cell cz-handheld-toolbar-item" href="pages-login"><span class="cz-handheld-toolbar-icon"><i class="fas fa-sign-in-alt"></i></span><span class="cz-handheld-toolbar-label">Sign In</span></a>
     <?php }; ?>



     <?php if (isset($_SESSION['user_id'])) { ?>
       <a class="d-table-cell cz-handheld-toolbar-item" href="marketplace-cart"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">3</span></span><span class="cz-handheld-toolbar-label">Add to Card</span></a>
     <?php }; ?>
   </div>
 </div>
 <!-- Back To Top Button-->
 <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2"></span><i class="btn-scroll-top-icon czi-arrow-up"> </i></a>