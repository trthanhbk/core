@if (isset($errors))
    @if ($errors->count() > 0)
        <script>
            $.notify(
                { message: "Opp! Has Error!" },
                {
                    type: 'danger',
                    template: '<div data-notify="container" class="col-xs-8 col-sm-2 alert alert-{0} text-center" role="alert">' +
                    '<span data-notify="message">{2}</span>' +
                    '</div>'
                }
            );
        </script>
    @endif
@endif