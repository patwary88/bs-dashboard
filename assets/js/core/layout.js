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

    // $('#sidebar .nav-link').on('contextmenu', function(e) {
    //             e.preventDefault();
                
    //     var selectedText = window.getSelection().toString().trim();
    //     //if (selectedText !== '') {
    //         var newLink = $('<a>', {
    //             href: 'pages/library.php?selectedText=' + encodeURIComponent(selectedText),
    //             target: '_blank',
    //             text: 'Open Link: ' + selectedText,
    //             css: {
    //                 color: 'blue'
    //             }
    //         });
    //         console.log(this.getAttribute('href'));
    //         console.log(newLink);
    //         $('#main_area').append(newLink);

    //          newLink[0].click();  // Simulate a click on the hidden link
    //          newLink.remove();
    //     //}
    // });

    // $('#sidebar .nav-link').on('click contextmenu', "a", function(event) {
    //     //console.log($(this));
    //       //$(this).attr('href','my_new_url');
    //       this.getAttribute('href')
    //       $(this).attr('target', '_blank');
    // })

    // document.addEventListener('contextmenu', function (e) {
    //     // Prevent the default context menu
    //     e.preventDefault();

    //     // Open the current page in a new tab
    //     window.open(window.location.href, '_blank');
    // });

    // Add a contextmenu event listener to all anchor elements inside the navbar
    // $('nav .nav-item a').on('contextmenu', function (e) {
    //     // Prevent the default context menu
    //     e.preventDefault();

    //     // Open the link in a new tab
    //     window.open($(this).attr('href'), '_blank');
    // });

    // $('nav .nav-item a').on('contextmenu', function (e) {
    //     // Prevent the default context menu
    //     e.preventDefault();

    //     // Open the link in a new tab
    //     let pageUrl = $(this).attr('href');

    //     // Perform an AJAX GET request to fetch the content of the page
    //     $.ajax({
    //         url: pageUrl,
    //         type: 'GET',
    //         success: function (response) {
    //             // Replace the content of the entire page with the fetched content
    //             $('#main_area').html(response);
    //         },
    //         error: function (error) {
    //             console.error('Error loading page content:', error);
    //         }
    //     });
    // });



    $('nav .nav-item a').on('contextmenu', function (e) {
    // Prevent the default context menu
    e.preventDefault();
    //alert($(this).attr('href'))
    // Open a new tab with the current page URL
    let newTab = window.open(window.location.href, '_blank');

    // Optionally, you can update the title of the new tab
    newTab.document.title = 'Copy of ' + document.title;

    $('#main_area').append(this.getAttribute('href'));

    // let pageUrl = $(this).attr('href');
    // $.ajax({
    //     url: pageUrl,
    //     type: 'GET',
    //     success: function (response) {
    //         $('#main_area').html(response);
    //     },
    //     error: function (error) {
    //         console.error('Error loading page content:', error);
    //     }
    // });


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