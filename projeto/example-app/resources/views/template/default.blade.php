<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header>
        <nav>
                <ul>
                    <li>   <a href="/"> home </a> </li>
                     <li>   <a href="/produto"> produto </a> </li>
                     <li>   <a href="/cliente"> cliente </a> </li>
                     <li>   <a href="/categoria"> categoria </a> </li>
                     <li>   <a href="/pedido"> pedido </a> </li>
                     <li>   <a href="/contato"> contato </a> </li>
                </ul>           
            </nav>  
       </header>
       
    
@yield('content')

</body>
</html>