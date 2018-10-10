<?php
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('matches', function ($trail) {
    $trail->parent('home');
    $trail->push('Match', route('matches.index'));
});

Breadcrumbs::for('clubs', function ($trail, $category) {
    $trail->parent('matches');
    $trail->push('', route('clubs.index'));
});