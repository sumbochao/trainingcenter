<meta charset="UTF-8">
<title>Themelight</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google fonts -->

<!-- Css link -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php
$filenames = \App\Helper\Helpers::get_css_file_name();
var_dump($filenames);
?>
@foreach ($filenames as $filename)
    <link rel="stylesheet" href="{{URL::asset('')}}{{$filename}}">
@endforeach