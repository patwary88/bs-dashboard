$(document).ready(function () {

    //Toggle button for open full screen.
     $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
     });

    // load content page for target div in index page
    $('#sidebar .nav-link').click(function(e){
        e.preventDefault();
        
        if(this.getAttribute('href')!="#"){

            // if ($(window).width() < 768) {
    
            //     $("input").removeClass('form-control').addClass('form-control form-control-sm');
            
            // }

            $('#main_area').load(this.getAttribute('href'));
        }
       
    });

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

    $('#sidebar .nav-item.dropdown').hover(

        function() {
            $(this).find('.collapse').addClass('show');
        },
        function() {
            $(this).find('.collapse').removeClass('show');
        }

    );
    
    // Enable Bootstrap dropdown on hover
    $('#sidebar .nav-item.dropdown').hover(

        function() {
            $(this).find('.collapse').addClass('show');
        },
        function() {
            $(this).find('.collapse').removeClass('show');
        }

    );  


    // for mobile device on ready function effect
    if ($(window).width() < 768) {
        //mobile device sidebar menu close
        $("#sidebar .nav-link").on("click", function () {
            
            $('#sidebar').toggleClass('active');
            
        });
    
        //mobile device top navigation menu close
        $('#top_nav a').on('click', function () {
    
                $('#navbarSupportedContent').collapse('hide');
    
        });


        //if ($(window).width() < 768) {
    
           // $("#main_area :input").removeClass('form-control').addClass('form-control form-control-sm');
        
        //}
        $("#main_area form[input]").removeClass('form-control').addClass('form-control form-control-sm');

    }

 });

