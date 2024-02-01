    // Function to check if the screen width is below a certain threshold (e.g., 576 pixels)
function isMobile() {
    return window.innerWidth < 660;
}

$(document).ready(function () {

    //Toggle button for open full screen.
     $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
     });

    // load content page for target div in index page
    $('#sidebar .nav-link').click(function(e){
        e.preventDefault();
        
        if(this.getAttribute('href')!="#"){
            $('#main_area').load(this.getAttribute('href'));

            // $(this).attr('href',this.getAttribute('href'));
            // $(this).attr('target', '_blank');

        }
       
    });

    $('#sidebar .nav-link').on('click contextmenu', "a", function(event) {
        console.log($(this));
          $(this).attr('href','my_new_url');
          $(this).attr('target', '_blank');
    })


    // Add a click event handler to anchor elements inside the navbar
    $('nav .nav-item').click(function (e) {

        e.preventDefault();
        // Remove the 'active' class from all anchor elements
        $('nav .nav-item').removeClass('active');
        // Add the 'active' class to the clicked anchor element
        $(this).addClass('active');

    });

    $('#sidebar [id]').each(function () {
        // Get the id attribute of each element
        var elementId = $(this).attr('id');

        // Log the id to the console (you can perform other actions as needed)
       // console.log("Element ID: " + elementId);

       $('#'+elementId+ ' .nav-item').click(function (e) {
            e.stopPropagation(); // Prevent the click event from propagating to the parent li
            // Remove the 'active' class from all dynamic dropdown anchor elements
            $('#'+elementId+ ' .nav-item').removeClass('active');

            // Add the 'active' class to the clicked anchor element in the dynamic dropdown
            $(this).addClass('active');
        });

    });

    // set top navigation background color when click link

    $('#navbarSupportedContent .nav-link').click(function (e) {
        e.preventDefault(); // Prevent the default link behavior
        
        // Remove active class from all links
        $('.nav-link').removeClass('active');

        // Add active class to the clicked link
        $(this).addClass('active');
    });

    // $('#sidebar .nav-item.dropdown').hover(

    //     function() {
    //         $(this).find('.collapse').addClass('show');
    //     },
    //     function() {
    //         $(this).find('.collapse').removeClass('show');
    //     }

    // );
    
    // // Enable Bootstrap dropdown on hover
    // $('#sidebar .nav-item.dropdown').hover(

    //     function() {
    //         $(this).find('.collapse').addClass('show');
    //     },
    //     function() {
    //         $(this).find('.collapse').removeClass('show');
    //     }

    // );  


    // for mobile device on ready function effect
    if (isMobile()) {
        //mobile device sidebar menu close
        $("#sidebar .nav-link").on("click", function () {
            
            $('#sidebar').toggleClass('active');
            
        });
        
        //mobile device top navigation menu close
        $('#top_nav a').on('click', function () {
    
                $('#navbarSupportedContent').collapse('hide');
    
        });
        
    }

 });