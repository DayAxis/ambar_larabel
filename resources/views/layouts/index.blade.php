<!DOCTYPE html>
<html >

<head>
    @include("includes.head")
</head>
    
<body >
    
    @include("includes.nav")
    @yield("contenido")
    @include("includes.footer")
    @include("includes.js")

</body>
   
</html>