<?php

return [
    '' => ['HomeController', 'index',],
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'reservation' => ['ReservationController', 'index',],
    'connexion' => ['ConnexionController', 'login',],
    'logout' => ['ConnexionController', 'logout',],
    'contact' => ['ContactController', 'index',],
    'inscription' => ['InscriptionController', 'index',],
    'menus' => ['MenusController', 'index',],
    'admin/menus/read' => ['MenusAdmController', 'read',],
    'admin/menus/create' => ['MenusAdmController', 'create',],
    'admin/menus/update' => ['MenusAdmController', 'update', ['id']],
    'admin/menus/delete' => ['MenusAdmController', 'delete', ['id']],
    'admin/dashboard' => ['DashboardController', 'index',],
    'mentionslegales' => ['MentionsLegalesController', 'index',],
    'admin/user' => ['UserController', 'index',],
    'admin/user/new' => ['UserController', 'new',],
    'produits' => ['ProduitsController', 'index'],
    'produits/add' => ['ProduitsController', 'add'],
    'produits/edit' => ['ProduitsController', 'edit', ['id']],
    'produits/delete' => ['ProduitsController', 'delete', ['id']],

];
