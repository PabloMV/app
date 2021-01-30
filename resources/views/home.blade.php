<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrador Em Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <center>

        <!-- Editable table -->
        <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Agenda</h3>
            <div class="card-body">
                <div id="table" class="table-editable table-responsive text-nowrap">
                    <span class="table-add float-right mb-3 mr-2"><a href="#!" id="create" class="text-success"><i
                                class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nome</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Telefone</th>
                                <th scope="col" class="text-center" colspan="3">Ações</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Editable table -->

    </center>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>