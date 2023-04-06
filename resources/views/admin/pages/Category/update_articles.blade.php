<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>
    @foreach ($categorys as $c)
        <h1>
            {{ $c->categorie_name }}
        </h1>
    @endforeach


    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class=" form-control" id="myTextarea"name="wysiwyg-editor"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button id="hello">save</button>
    <p id="demo"></p>
    {!! $text_html !!}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let text_html = '{!! $text_html !!}';

            var html =
                '<div class="elementor-element elementor-element-3dfbbae elementor-widget elementor-widget-heading" data-id="3dfbbae" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><style>/*! elementor - v3.8.1 - 13-11-2022 */.elementor-heading-title {padding: 0;margin: 0;line-height: 1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {color: inherit;font-size: inherit;line-height: inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small {font-size: 15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium {font-size: 19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large {font-size: 29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl {font-size: 39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {font-size: 59px}</style><h6 class="elementor-heading-title elementor-size-default">Nos services</h6></div></div><div class="elementor-element elementor-element-5c92fdb elementor-widget elementor-widget-heading" data-id="5c92fdb" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Nous nous engageons dans une démarche de transformation et d’innovation technologique au service du bien commun. </h2></div></div><div class="elementor-element elementor-element-06adfcc elementor-align-left elementor-widget elementor-widget-button" data-id="06adfcc" data-element_type="widget" data-widget_type="button.default"><div class="elementor-widget-container"><div class="elementor-button-wrapper icon_align_right  "><a href="index.html#services-acc" class="elementor-button-link elementor-button elementor-size-xs" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-icon elementor-align-icon-right"><i aria-hidden="true" class="fas fa-arrow-down"></i></span><span class="elementor-button-text">Voir les services</span></span></a></div></div></div>';
            CKEDITOR.replace('myTextarea', {
                // Set default value
                removePlugins: ['sourcearea', 'sourceediting'],
                startupMode: 'wysiwyg',
                on: {
                    instanceReady: function(evt) {
                        evt.editor.setData(text_html);
                    },
                    /* change: function(evt) {
                        console.log('Total bytes: ' + evt.editor.getData().length);
                    } */
                    change: function(evt) {
                        console.log(evt.editor.getData());
                    }
                }
            });
            document.getElementById("hello").addEventListener("click", function() {
                //console.log(CKEDITOR.instances.editor1.getData())
                console.log(CKEDITOR.instances.myTextarea.getData())
            })
            //document.getElementById("demo").innerHTML = text_html;
        });
    </script>
</body>


</html>
