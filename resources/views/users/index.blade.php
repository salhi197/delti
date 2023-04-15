@extends('layouts.admin')



@section('content')

<div class="container-fluid">

    <h1 class="mt-4"> Utilisateurs:</h1>

    <div class="card mb-4">
        <div class="card-header">
    </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table " id="example1" width="100%" >
                    <thead>
                        <tr>
                            <th>ID user</th>
                            <th>nom prenom</th>
                            <th>Role</th>
                            <th>Password </th>
                            <th>actions</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($users as $user)

                        <tr>

                            <td>{{$user->id ?? ''}}</td>

                            <td>
                                {{$user->prenom ?? ''}}
                                {{$user->nom ?? ''}}
                            </td>
                            <td>{{$user->type ?? ''}}</td>
                            <td>{{$user->password_text ?? ''}}</td>



                            <td>

                                <div class="table-action">

                                    <a href="{{route('user.destroy',['id_user'=>$user->id])}}"
                                        onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                            Supprimer
                                        <i class="fas fa-trash"></i>

                                    </a>
                                    <a href="{{route('user.edit',['id_user'=>$user->id])}}"
                                        onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-info">
                                            modifier
                                        <i class="fas fa-edit"></i>
                                    </a>

                                </div>

                            </td>



                        </tr>



                        @endforeach
                    </tbody>
                </table>
                <label for="" class="form-label">Total : {{count($users)}}</label>

            </div>
        </div>
    </div>
</div>



                                        



@endsection





