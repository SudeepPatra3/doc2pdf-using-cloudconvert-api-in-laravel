<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form action="https://api.cloudconvert.com/convert" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="hidden" name="apikey" value="CBOOiJWQDbIPk2wyH2D8cgOUcbapPTV8SkbI8pphpZMKI8GlGYHsRmsG0LhgLleX">
            <input type="hidden" name="inputformat" value="doc">
            <input type="hidden" name="outputformat" value="pdf">
            <input type="hidden" name="input" value="upload">
            <input type="hidden" name="wait" value="true">
            <input type="hidden" name="download" value="inline">
            <input type="submit" value="Convert!">
        </form>
    </body>
</html>
