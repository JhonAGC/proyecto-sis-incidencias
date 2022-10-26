
/*    function advertencia(e){
    e.preventDefault();
    let url=e.currentTaget.currentTaget('href');
    Swal.fire({
        title: 'Esta Seguro',
        Text: 'No podra recuperar este registro!',
        icon: 'warning',
        showCancelButton:true,
        confirmButtonColor: '#2CB073',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si Eliminar',
        cancelButtonText: 'No Salir',
        reverseButtons:true,
        allowOutsideClick:true,
        allowEscapeKey: true,
        allowEnterKey: false,

    }).then((result)=>{
        if(result.isConfirmed){
            window.location.href=url;
            
        }
    })
} */


    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
    // variables 
    let exit = document.querySelector("#evento");
    let button = document.querySelector("#userDropdown");

    button.addEventListener("click", ()=>{
        exit.classList.add("show");
        setTimeout(() => {
            exit.classList.remove("show");
        }, 2000);
    })
    

    //alertas
    
 


})(jQuery);

