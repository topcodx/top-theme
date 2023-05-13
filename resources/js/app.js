import './bootstrap';


// Also note that this function must run on every load
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Image Preview Code
    IOInitImageComponent();
    // SideBar asideMenu initialize
    IOInitSidebar();
    // Sidebar collapse initialize
    IOInitSideBarCollapse();
});

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.io-select2').select2();
    initToastr();
});

window.openToast = function (type) {
    switch (type) {
        case 'success':
            toastr.success('Your OS has been updated to the latest version', 'Successful', );
            break;
        case 'warning':
            toastr.warning('Viewers of this file can see comment and suggestions', 'Warning');
            break;
        case 'danger':
            toastr.error('The program has turned off unexpectedly', 'Something went wrong!');
            break;
        case 'info':
            toastr.info('You can switch between artboard.', 'Info');
            break;
    }
}

// commonjs
$("#basicDate").flatpickr({
    enableTime: true,
    format:'Y/m/d H:i',
});

$('.datepicker').datepicker({
    todayHighlight: true,
    orientation: "bottom left",
    templates: {
        leftArrow: '<i class="fa fa-angle-left"></i>',
        rightArrow: '<i class="fa fa-angle-right"></i>'
    },
    format: 'yyyy/mm/dd'
});

$(document).ready(function() {
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('.daterange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('.daterange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});

$(document).ready(function() {
    $('#deleteUser').click(function () {
        swal({
            title: "Delete !",
            text: "Are you sure want to delete this user ?",
            buttons: {
                confirm:"Yes, Delete",
                cancel: "No, Cancel",
            },
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonColor: '#F62947',
            cancelButtonColor: '#ADB5BD',
            icon: sweetAlertIcon,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal({
                    icon: 'success',
                    title: 'Deleted!',
                    confirmButtonColor: '#6571FF',
                    text: 'user has been deleted.',
                    timer: 2000,
                })
            } else {
                swal("User is safe!");
            }
        });
    });
});

$(document).ready(function(){
    $('[data-bs-toggle="tooltip"]').tooltip()
});

$(document).ready(function () {
    $('[data-toggle="password"]').each(function () {
        var input = $(this);
        var eye_btn = $(this).parent().find('.input-icon');
        eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
        eye_btn.on('click', function () {
            if (eye_btn.hasClass('input-password-hide')) {
                eye_btn.removeClass('input-password-hide').addClass('input-password-show');
                eye_btn.find('.bi').removeClass('bi-eye-slash-fill').addClass('bi-eye-fill')
                input.attr('type', 'text');
            } else {
                eye_btn.removeClass('input-password-show').addClass('input-password-hide');
                eye_btn.find('.bi').removeClass('bi-eye-fill').addClass('bi-eye-slash-fill')
                input.attr('type', 'password');
            }
        });
    });
});

//fix menu overflow under the responsive table
// hide menu on click... (This is a must because when we open a menu )
$(document).click(function (event) {
    //hide all our dropdowns
    $('.dropdown-menu[data-parent]').hide();
});

$('.table-responsive').on('show.bs.dropdown', function () {
    $('.table-responsive').css( "overflow", "hidden" );
}).on('hide.bs.dropdown', function () {
    $('.table-responsive').css( "overflow", "auto" );
})

