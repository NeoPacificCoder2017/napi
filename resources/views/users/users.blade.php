@extends('users.template')

@section('contenu')
<h2>NAPI-Les utilisateurs</h2>
  <div class="col-sm-offset-3 col-sm-6">
	  <div class="panel panel-info">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Pseudo</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users AS $user)
            <tr>
              <td><input type="checkbox" name="checkbox"/></td>
              <td>#{{ $user->id }}</td>
              <td>{{ $user->lastname }}</td>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->pseudo }}</td>
              <td>{{ $user->birthday }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->password }}</td>
                <td>
                  <a href="user/{{$user->id}}/edit')}}" button class="btn btn-default btn-small btn-detail"><span class="glyphicon glyphicon-eye-open"></span></a>
                  <a href="user/{{$user->id}}/delete" button class="btn btn-danger btn-small btn-delete"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
          @endforeach
          <a href="user/new" button class="btn btn-success pull-right btn-small">S'inscrire</a>
        </tbody>
      </table>
    </div>
  </div>
@endsection