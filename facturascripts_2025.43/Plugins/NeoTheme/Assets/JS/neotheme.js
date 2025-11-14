function hideNeoSidebar() {
    $("#sidebar").fadeOut('fast');
    $("#sidebar-overlay").fadeOut('slow');
}

function showNeoSidebar() {
    $("#sidebar-overlay").fadeIn('slow');
    $("#sidebar").fadeIn('fast');
}