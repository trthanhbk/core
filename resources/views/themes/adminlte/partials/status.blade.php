@if (Session::has('status') && ! is_array(Session::get('status')))
    <script type="text/javascript">
        $.notify(
            { message: "{{ Session::get('status') }}" },
            {
                type: 'info',
                template: '<div data-notify="container" class="col-xs-8 col-sm-2 alert alert-{0} text-center" role="alert">' +
                '<span data-notify="message">{2}</span>' +
                '</div>'
            }
        );
    </script>
@endif