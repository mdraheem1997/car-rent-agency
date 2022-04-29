<?php  ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>QCI Demo</title>
<meta name="author" content="">


<!-- CSS FILES -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>front/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>front/assets/fonts/iconfonts.css">
<link rel="stylesheet" href="<?php echo base_url();?>front/assets/css/plugins.css">
<link rel="stylesheet" href="<?php echo base_url();?>front/assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>front/assets/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url();?>front/assets/css/color.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<style type="text/css">

/* ============ desktop view ============ */
@media all and (min-width: 992px) {

    .dropdown-menu li{
        position: relative;
    }
    .dropdown-menu .submenu{ 
        display: none;
        position: absolute;
        left:100%; top:-7px;
    }
    .dropdown-menu .submenu-left{ 
        right:100%; left:auto;
    }

    .dropdown-menu > li:hover{ background-color: #f1f1f1 }
    .dropdown-menu > li:hover > .submenu{
        display: block;
    }
}   
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {

.dropdown-menu .dropdown-menu{
        margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
}

}   
/* ============ small devices .end// ============ */

</style>


<script type="text/javascript">
    window.addEventListener("resize", function() {
        "use strict"; window.location.reload(); 
    });

    document.addEventListener("DOMContentLoaded", function(){
        
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                everydropdown.addEventListener('hidden.bs.dropdown', function () {
                    // after dropdown is hidden, then find all submenus
                      this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                      });
                })
            });
            
            document.querySelectorAll('.dropdown-menu a').forEach(function(element){
                element.addEventListener('click', function (e) {
        
                    let nextEl = this.nextElementSibling;
                    if(nextEl && nextEl.classList.contains('submenu')) {    
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();

                        if(nextEl.style.display == 'block'){
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth

    }); 
    // DOMContentLoaded  end
</script>