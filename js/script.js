(function ($) {

  // Yamm code
    $(document).on('click', '.yamm .dropdown-menu', function(e) {
      e.stopPropagation()
    });

  // Sidebar Extra
    $(".sidebar-extra-toggle").click(function(e) {
    e.preventDefault();
    $(".extra-wrapper").toggleClass("toggled");
    });

  // Animate
    $(document).ready(function() {
            $('.logo').addClass('animated bounceInDown');
    });

  //Archive menu
    jQuery(document).ready(function($) { 
    // init: collapse all groups except for the first one
    $(".view-display-id-block_archive ul").each(function(i) {
        if (i==1000) {
            $(this).siblings("h3").children(".collapse-icon").text("▼");
        } else {
            $(this).hide();
        }
    });
 
    // click event: toggle visibility of group clicked (and update icon)
    $(".view-display-id-block_archive h3").click(function() {
 
        var icon = $(this).children(".collapse-icon");
 
        $(this).siblings("ul").slideToggle(function() {
            (icon.text()=="▼") ? icon.text("►") : icon.text("▼");
        });
    });

    // count the nodes for each month and display it in the tree
    var cant = 0;

    $(".item-list.collapsible-archive").children("h3").each(function() {
        $(this).siblings("ul").children("li").each(function(i) {
            cant++;
        });

        $(this).children(".collapse-created").text(function() {
            return $(this).text() + ' (' + cant + ')';
        });

        cant = 0;
    });
    });

  }

}

}(jQuery));
