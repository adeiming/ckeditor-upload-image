<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh CK Editor 5</title>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css">
    <script src="{{ asset('ckeditor.js') }}" type="module"></script>
</head>
<body>
    <textarea id="editor" cols="30" rows="10"></textarea>
    <script>
        window.onload = function() {
            createEditor('#editor', {
                simpleUpload: {
					uploadUrl: '{{ route('upload') }}',
					headers: {
						'X-CSRF-TOKEN': '{{ csrf_token() }}',
					}
                },
                // ui: {
                //     viewportOffset: {
                //         top: 70
                //     }
                // }
            })
        }
    </script>
</body>
</html>


