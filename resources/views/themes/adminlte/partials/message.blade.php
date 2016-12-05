@if (Session::has('message') && ! is_array(Session::get('message')))
    <script type="text/javascript">
        $.notify(
            { message: "{{ Session::get('message') }}" },
            {
                type: 'info',
                template: '<div data-notify="container" class="col-xs-8 col-sm-2 alert alert-{0} text-center" role="alert">' +
                '<span data-notify="message">{2}</span>' +
                '</div>'
            }
        );
    </script>
@endif