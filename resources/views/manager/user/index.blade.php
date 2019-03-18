@extends('layouts.manager')
@section('content')

<table class="datatable table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Acesso</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                        @if ($login->role == 'admin') <th>&nbsp;</th> @endif

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Acesso</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                        @if ($login->role == 'admin') <th>&nbsp;</th> @endif
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>
                                @if(isset($row->image))
                                    <img src="/uploads/perfil/{{ $row->foto }}" alt="" style="width: 30px; border-radius: 50px;" />
                                @else
                                    <img src="https://via.placeholder.com/160x160" alt="" style="width: 30px; border-radius: 50px;" />
                                @endif
                            </td>
                            <td>
                                {{ $row->name }}
                            </td>
                            <td>
                                {{ $row->email }}
                            </td>
                            <td>
                                @if ($row->role == 'admin')
                                    Administrador
                                @else
                                    Usuário
                                @endif
                            </td>
                            <td>
                                {{ Carbon\Carbon::parse($row->created_at)->format("d/m/Y") }}
                            </td>
                            <td>
                                {{ Carbon\Carbon::parse($row->updated_at)->format("d/m/Y") }}
                            </td>
                            @if ($login->role)
                                <td>
                                    <a href="/manager/usuarios/editar/{{ $row->id }}" class="btn btn-sm btn-info">Editar</a>
                                    <button class="btn btn-sm btn-danger delete" alt="/manager/usuarios/delete/{{ $row->id }}" token="{{ csrf_token() }}">Delete</button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
  @endsection