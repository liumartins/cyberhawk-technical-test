@extends('layouts.master')

@section('content')
<h1><?=$title?></h1>
<?php foreach ($turbines as $turbine): ?>
    <h2><?=$turbine->name;?></h2>
    <h3>{{ _('Components') }}:</h3>

    <?php foreach ($turbine->components as $component): ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Situation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$component->name?></td>
                <td><?=$component->situation?></td>
            </tr>
        </tbody>
    </table>
    <?php endforeach; ?>
<?php endforeach; ?>
@endsection