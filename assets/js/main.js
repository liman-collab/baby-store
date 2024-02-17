// Wrap your JavaScript code in a jQuery document ready function to ensure it runs after the DOM has loaded
jQuery(document).ready(function($) {
    $('#search-input').on('keypress', function(event) {
        // Check if the key pressed is 'Enter'
        if (event.which === 13) {
            // Prevent the default behavior of the 'Enter' key (form submission)
            event.preventDefault();

            // Get the search query from the input field
            var searchQuery = $(this).val();

            $.ajax({
                url: ajax_object.ajax_url, // WordPress AJAX URL, automatically defined
                type: 'POST',
                dataType: 'json',
                data: {
                    action: 'search', // Action hook to trigger the corresponding AJAX handler
                    search_query: searchQuery // Data to be sent to the server
                },
                success: function (response) {
                    // Handle successful response from the server
                    console.log('AJAX request successful!');
                    window.location.href = 'https://baby-store.test/search/?query=' + encodeURIComponent(response);

                    // console.log('Response:', response);
                },
                error: function (xhr, status, error) {
                    // Handle errors
                    console.error('AJAX request failed:', status, error);
                }
            });
        }
    });
});
