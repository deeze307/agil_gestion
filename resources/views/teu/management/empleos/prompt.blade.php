<div class="input-group input-group-lg">
    <input ng-enter="promptEnter(empCat)" ng-model="empCat.newName" type="text" class="form-control focus" placeholder="{{ Request::has('holder') ? Request::get('holder') : 'Ingresar codigo' }}">
</div>
