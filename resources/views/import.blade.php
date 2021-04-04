<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container">            
        <div >
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">       
                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            </form>
        </div>
</div>
   
</body>
</html>