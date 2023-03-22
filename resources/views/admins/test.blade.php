<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Hướng dẫn sử dụng CKEditor</title>
        <!-- Đưa đường dẫn vào. -->
        <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>
    </body>
</html>
