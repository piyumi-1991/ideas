Add user page

<?php echo $users[1]['name']; ?>

<?php foreach ($users as $user) { ?>
    <h1><?= $user['name'] ?></h1><br>
<?php } ?>

@foreach($users as $user)
    <h1>{{ $user['name'] }}</h1>
    <h2>{{ $user['age'] }}</h2>
    
    @if($user['age'] < 18)
        <p>{{ $user['name'] }} is {{ $user['age'] }} and he cannot drive</p>
    @endif
    <hr>
@endforeach


@copyright {{ date('d-m-Y') }}